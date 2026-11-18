<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    /**
     * Display the website home page.
     */
    public function index(): View
    {
        $categories = Category::withCount('products')
            ->orderBy('sort_order')
            ->get();

        $featuredProducts = Product::with('category')
            ->where('is_featured', true)
            ->take(6)
            ->get();

        $allProducts = Product::select('id', 'name', 'category_id')->orderBy('name')->get();

        $directors = [
            [
                'name' => 'Sanjit Kumar',
                'role' => 'Director & Strategic Operations',
                'bio' => 'Oversees corporate development, regional expansion across Bihar & Eastern India, and strategic enterprise growth.',
                'initials' => 'SK',
            ],
            [
                'name' => 'Sonu Kumar',
                'role' => 'Director & Supply Chain / OEM',
                'bio' => 'Leads third-party contract manufacturing, warehouse logistics, vendor partnerships, and large-scale distribution operations.',
                'initials' => 'SK',
            ],
            [
                'name' => 'Sarina Kumari',
                'role' => 'Director & Product R&D',
                'bio' => 'Champions traditional Ayurvedic formulations, herbal purity standards, ethical cosmetic safety, and quality assurance.',
                'initials' => 'SK',
            ],
            [
                'name' => 'Yogendra Das',
                'role' => 'Director & Regulatory Governance',
                'bio' => 'Guides regulatory compliances, ethical corporate governance, legal frameworks, and community stakeholder relations.',
                'initials' => 'YD',
            ],
        ];

        return view('pages.home', compact('categories', 'featuredProducts', 'allProducts', 'directors'));
    }
}
