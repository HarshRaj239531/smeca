<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;

class ServiceController extends Controller
{
    /**
     * Display B2B & OEM Contract Manufacturing Services.
     */
    public function b2b(): View
    {
        $oemCapabilities = [
            [
                'title' => 'Third-Party Contract Manufacturing',
                'description' => 'State-of-the-art cGMP manufacturing capacity for bulk creams, serums, herbal oils, toners, and cosmetic emulsions with stringent batch consistency.',
                'icon' => 'factory',
                'badge' => 'High Capacity',
            ],
            [
                'title' => 'Private Label & Custom Branding',
                'description' => 'Turnkey formulation, bespoke packaging design, label compliance, bottle sourcing, and barcode generation ready for direct retail shelves.',
                'icon' => 'tag',
                'badge' => 'Turnkey Solution',
            ],
            [
                'title' => 'Ayurvedic & Herbal R&D Formulations',
                'description' => 'In-house botanical laboratory equipped to develop custom classical or proprietary herbal blends adhering to strict AYUSH and FDA guidelines.',
                'icon' => 'flask',
                'badge' => 'AYUSH Compliant',
            ],
            [
                'title' => 'Quality Control & Stability Testing',
                'description' => 'Rigorous microbial testing, accelerated temperature stability, heavy metal screening, and preservative efficacy validation per batch.',
                'icon' => 'shield-check',
                'badge' => 'Zero Compromise',
            ],
            [
                'title' => 'Packaging Sourcing & Label Printing',
                'description' => 'Assistance with eco-friendly amber glass, airless pumps, aluminum jars, biodegradable boxes, and luxury metallic foil printing.',
                'icon' => 'box',
                'badge' => 'Custom Aesthetics',
            ],
            [
                'title' => 'Super Stockist & Distributorship',
                'description' => 'Lucrative distribution partnerships for retail stockists and wholesale regional distributors across Bihar (Aurangabad, Gaya, Patna) and PAN India.',
                'icon' => 'truck',
                'badge' => 'High ROI Margin',
            ],
        ];

        $processSteps = [
            ['step' => '01', 'title' => 'Formulation Consultation', 'desc' => 'Discuss your product vision, active botanicals, target benchmark, and volume requirements.'],
            ['step' => '02', 'title' => 'Sample Lab Batch', 'desc' => 'We compound prototype samples for your sensory evaluation, fragrance approval, and texture review.'],
            ['step' => '03', 'title' => 'Packaging & Compliance', 'desc' => 'Finalize artwork, labeling legalities, barcode generation, and statutory AYUSH documentation.'],
            ['step' => '04', 'title' => 'Commercial Production', 'desc' => 'Mass production under sanitized cleanroom environments with batch record certifications.'],
            ['step' => '05', 'title' => 'Dispatch & Logistics', 'desc' => 'Safe multi-tier transit packaging and door-step freight delivery to your distribution hubs.'],
        ];

        return view('pages.b2b-oem', compact('oemCapabilities', 'processSteps'));
    }

    /**
     * Display Consultancy & Marketing Services.
     */
    public function consultancy(): View
    {
        $consultancyServices = [
            [
                'title' => 'Strategic Business & Brand Advisory',
                'description' => 'Navigating competitive beauty landscapes, target persona identification, SKU pricing matrix, and gross margin optimization for wellness startups.',
                'icon' => 'briefcase',
                'deliverables' => ['Market Feasibility Study', 'Competitor Gap Analysis', 'Product Architecture Matrix'],
            ],
            [
                'title' => 'Retail & Distribution Channel Training',
                'description' => 'Field-tested sales training modules for retail store promoters, pharmacy counters, Ayurvedic vaidyas, and salon chain partners.',
                'icon' => 'users',
                'deliverables' => ['Field Sales Playbook', 'Incentive Structuring Guides', 'Stockist Negotiation Protocols'],
            ],
            [
                'title' => 'Digital Marketing & D2C Growth',
                'description' => 'Performance marketing campaigns, influencer collaborations, Amazon/Flipkart/Nykaa cataloging, and direct-to-consumer store funnels.',
                'icon' => 'trending-up',
                'deliverables' => ['Performance Ad Strategies', 'Marketplace SEO & Listing', 'Retention Email Automation'],
            ],
            [
                'title' => 'Regulatory & Labeling Compliance',
                'description' => 'Expert guidance through legal claim validation, ingredient nomenclature (INCI), net quantity disclosures, and AYUSH licensing.',
                'icon' => 'file-text',
                'deliverables' => ['Label Legal Review', 'Ayush Dossier Preparation', 'Cosmetic Claim Substantiation'],
            ],
        ];

        return view('pages.consultancy', compact('consultancyServices'));
    }
}
