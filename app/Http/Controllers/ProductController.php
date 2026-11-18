<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a dynamic listing of the products.
     */
    public function index(Request $request): View|JsonResponse
    {
        $categories = Category::withCount('products')
            ->orderBy('sort_order')
            ->get();

        $query = Product::with('category');

        // Filter by category slug or id
        if ($request->filled('category') && $request->category !== 'all') {
            $query->whereHas('category', function ($q) use ($request): void {
                $q->where('slug', $request->category)
                  ->orWhere('id', $request->category);
            });
        }

        // Filter by keyword search
        if ($request->filled('search')) {
            $search = trim($request->search);
            $query->where(function ($q) use ($search): void {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('short_description', 'like', "%{$search}%")
                  ->orWhere('key_ingredients', 'like', "%{$search}%")
                  ->orWhere('tagline', 'like', "%{$search}%")
                  ->orWhere('benefits', 'like', "%{$search}%");
            });
        }

        // Filter by Ayurvedic
        if ($request->boolean('ayurvedic')) {
            $query->where('is_ayurvedic', true);
        }

        // Filter by B2B available
        if ($request->boolean('b2b')) {
            $query->where('b2b_available', true);
        }

        $products = $query->orderBy('is_featured', 'desc')
            ->orderBy('name', 'asc')
            ->paginate(12)
            ->withQueryString();

        $allProductsList = Product::select('id', 'name', 'category_id', 'volume_size', 'moq')->get();

        if ($request->wantsJson()) {
            return response()->json([
                'html' => view('partials.product-cards', compact('products'))->render(),
                'total' => $products->total(),
            ]);
        }

        return view('pages.products', [
            'categories' => $categories,
            'products' => $products,
            'allProductsList' => $allProductsList,
            'selectedCategory' => $request->input('category', 'all'),
            'searchQuery' => $request->input('search', ''),
            'isAyurvedicOnly' => $request->boolean('ayurvedic'),
        ]);
    }

    /**
     * Display the specified product.
     */
    public function show(string $slug): View
    {
        $product = Product::with('category')->where('slug', $slug)->firstOrFail();

        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->take(3)
            ->get();

        return view('pages.product-detail', compact('product', 'relatedProducts'));
    }
}
