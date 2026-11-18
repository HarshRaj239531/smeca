<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInquiryRequest;
use App\Models\Inquiry;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display the Contact Us page and inquiry form.
     */
    public function index(Request $request): View
    {
        $products = Product::select('id', 'name', 'category_id')->orderBy('name')->get();

        $selectedProduct = $request->query('product');
        $selectedType = $request->query('type', 'general');

        return view('pages.contact', compact('products', 'selectedProduct', 'selectedType'));
    }

    /**
     * Store a newly created inquiry.
     */
    public function store(StoreInquiryRequest $request): RedirectResponse
    {
        $data = $request->validated();

        // If product_id is given but product_name is empty, fill it
        if (!empty($data['product_id']) && empty($data['product_name'])) {
            $product = Product::find($data['product_id']);
            if ($product) {
                $data['product_name'] = $product->name;
            }
        }

        Inquiry::create($data);

        return redirect()->back()->with('success_message', 'Thank you for reaching out to SMECA Industry! Your inquiry has been logged successfully. Our team will contact you shortly.');
    }
}
