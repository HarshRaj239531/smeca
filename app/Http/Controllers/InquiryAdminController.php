<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

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
        ];

        return view('admin.inquiries', compact('inquiries', 'stats'));
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
     * Remove the specified inquiry.
     */
    public function destroy(Inquiry $inquiry): RedirectResponse
    {
        $inquiry->delete();

        return redirect()->back()->with('status_updated', 'Inquiry record removed.');
    }
}
