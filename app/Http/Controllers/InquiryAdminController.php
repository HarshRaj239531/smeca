<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Inquiry;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

class InquiryAdminController extends Controller
{
    /**
     * Display a listing of received inquiries for SMECA administrators.
     */
    public function index(Request $request): View
    {
        $query = Inquiry::query()->latest();

        if ($request->filled('type') && $request->type !== 'all') {
            $query->where('inquiry_type', $request->type);
        }

        if ($request->filled('status') && $request->status !== 'all') {
            $query->where('status', $request->status);
        }

        if ($request->filled('search')) {
            $search = trim($request->search);
            $query->where(function ($q) use ($search): void {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('company_name', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('product_name', 'like', "%{$search}%");
            });
        }

        $inquiries = $query->paginate(15)->withQueryString();

        $stats = [
            'total' => Inquiry::count(),
            'new' => Inquiry::where('status', 'new')->count(),
            'b2b' => Inquiry::where('inquiry_type', 'b2b_oem')->count(),
            'products' => Inquiry::where('inquiry_type', 'product')->count(),
            'in_discussion' => Inquiry::where('status', 'in_discussion')->count(),
            'closed' => Inquiry::where('status', 'closed')->count(),
            'distributorship' => Inquiry::where('inquiry_type', 'distributorship')->count(),
        ];

        return view('admin.inquiries', compact('inquiries', 'stats'));
    }

    /**
     * Display live formulations & products catalog for admin inspection.
     */
    public function products(Request $request): View
    {
        $query = Product::with('category')->latest();

        if ($request->filled('category') && $request->category !== 'all') {
            $query->whereHas('category', fn ($q) => $q->where('slug', $request->category));
        }

        if ($request->filled('search')) {
            $search = trim($request->search);
            $query->where(function ($q) use ($search): void {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('tagline', 'like', "%{$search}%")
                  ->orWhere('key_ingredients', 'like', "%{$search}%");
            });
        }

        $products = $query->paginate(15)->withQueryString();
        $categories = Category::withCount('products')->get();
        $totalProducts = Product::count();

        return view('admin.products', compact('products', 'categories', 'totalProducts'));
    }

    /**
     * Update the status of an inquiry.
     */
    public function updateStatus(Request $request, Inquiry $inquiry): RedirectResponse
    {
        $validated = $request->validate([
            'status' => ['required', 'string', 'in:new,contacted,in_discussion,closed'],
        ]);

        $inquiry->update(['status' => $validated['status']]);

        return redirect()->back()->with('status_updated', 'Inquiry status updated successfully.');
    }

    /**
     * Store a manually recorded lead or inquiry (phone/walk-in).
     */
    public function storeManual(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'company_name' => ['nullable', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email', 'max:255'],
            'inquiry_type' => ['required', 'string', 'in:product,b2b_oem,distributorship,consultancy,general'],
            'product_name' => ['nullable', 'string', 'max:255'],
            'status' => ['required', 'string', 'in:new,contacted,in_discussion,closed'],
            'message' => ['required', 'string'],
        ]);

        Inquiry::create($validated);

        return redirect()->back()->with('status_updated', 'New customer inquiry logged successfully.');
    }

    /**
     * Stream CSV export of all inquiry records for Excel / CRM download.
     */
    public function export(): StreamedResponse
    {
        $inquiries = Inquiry::latest()->get();
        $filename = 'smeca-leads-' . date('Y-m-d') . '.csv';

        return response()->streamDownload(function () use ($inquiries): void {
            $handle = fopen('php://output', 'w');
            fputcsv($handle, ['ID', 'Date', 'Client Name', 'Company', 'Phone', 'Email', 'Inquiry Type', 'Subject / Product', 'Status', 'Message Requirements']);

            foreach ($inquiries as $row) {
                fputcsv($handle, [
                    $row->id,
                    $row->created_at->format('Y-m-d H:i:s'),
                    $row->name,
                    $row->company_name ?? 'Individual Customer',
                    $row->phone,
                    $row->email,
                    strtoupper(str_replace('_', ' ', $row->inquiry_type)),
                    $row->product_name ?? 'General Inquiry',
                    strtoupper($row->status),
                    $row->message,
                ]);
            }

            fclose($handle);
        }, $filename, [
            'Content-Type' => 'text/csv; charset=UTF-8',
        ]);
    }

    /**
     * Remove the specified inquiry.
     */
    public function destroy(Inquiry $inquiry): RedirectResponse
    {
        $inquiry->delete();

        return redirect()->back()->with('status_updated', 'Inquiry record removed permanently.');
    }

    /**
     * Store a newly created formulation / product in the catalog.
     */
    public function storeProduct(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'category_id' => ['required', 'exists:categories,id'],
            'tagline' => ['nullable', 'string', 'max:255'],
            'short_description' => ['required', 'string'],
            'description' => ['nullable', 'string'],
            'volume_size' => ['nullable', 'string', 'max:100'],
            'moq' => ['nullable', 'string', 'max:100'],
            'key_ingredients' => ['nullable', 'string', 'max:500'],
            'benefits' => ['nullable', 'string', 'max:500'],
            'image_url' => ['nullable', 'string', 'max:500'],
            'status' => ['required', 'string', 'max:50'],
            'is_ayurvedic' => ['nullable', 'boolean'],
            'b2b_available' => ['nullable', 'boolean'],
            'is_featured' => ['nullable', 'boolean'],
        ]);

        $slug = \Illuminate\Support\Str::slug($validated['name']);
        $originalSlug = $slug;
        $counter = 1;
        while (Product::where('slug', $slug)->exists()) {
            $slug = "{$originalSlug}-{$counter}";
            $counter++;
        }

        $validated['slug'] = $slug;
        $validated['is_ayurvedic'] = $request->boolean('is_ayurvedic');
        $validated['b2b_available'] = $request->boolean('b2b_available');
        $validated['is_featured'] = $request->boolean('is_featured');
        $validated['image_url'] = !empty($validated['image_url']) ? $validated['image_url'] : '/images/hero-box.png';

        Product::create($validated);

        return redirect()->route('admin.products')->with('status_updated', "New formulation '{$validated['name']}' added to catalog successfully.");
    }

    /**
     * Update an existing formulation / product in the catalog.
     */
    public function updateProduct(Request $request, Product $product): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'category_id' => ['required', 'exists:categories,id'],
            'tagline' => ['nullable', 'string', 'max:255'],
            'short_description' => ['required', 'string'],
            'description' => ['nullable', 'string'],
            'volume_size' => ['nullable', 'string', 'max:100'],
            'moq' => ['nullable', 'string', 'max:100'],
            'key_ingredients' => ['nullable', 'string', 'max:500'],
            'benefits' => ['nullable', 'string', 'max:500'],
            'image_url' => ['nullable', 'string', 'max:500'],
            'status' => ['required', 'string', 'max:50'],
            'is_ayurvedic' => ['nullable', 'boolean'],
            'b2b_available' => ['nullable', 'boolean'],
            'is_featured' => ['nullable', 'boolean'],
        ]);

        if ($product->name !== $validated['name']) {
            $slug = \Illuminate\Support\Str::slug($validated['name']);
            $originalSlug = $slug;
            $counter = 1;
            while (Product::where('slug', $slug)->where('id', '!=', $product->id)->exists()) {
                $slug = "{$originalSlug}-{$counter}";
                $counter++;
            }
            $validated['slug'] = $slug;
        }

        $validated['is_ayurvedic'] = $request->boolean('is_ayurvedic');
        $validated['b2b_available'] = $request->boolean('b2b_available');
        $validated['is_featured'] = $request->boolean('is_featured');
        $validated['image_url'] = !empty($validated['image_url']) ? $validated['image_url'] : ($product->image_url ?: '/images/hero-box.png');

        $product->update($validated);

        return redirect()->route('admin.products')->with('status_updated', "Formulation '{$product->name}' updated successfully.");
    }

    /**
     * Remove a formulation from the catalog.
     */
    public function destroyProduct(Product $product): RedirectResponse
    {
        $name = $product->name;
        $product->delete();

        return redirect()->route('admin.products')->with('status_updated', "Formulation '{$name}' removed from catalog.");
    }
}
