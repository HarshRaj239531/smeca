<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class AboutController extends Controller
{
    /**
     * Display the About Us page.
     */
    public function index(): View
    {
        $directors = [
            [
                'name' => 'Sanjit Kumar',
                'title' => 'Director',
                'focus' => 'Corporate Strategy, Market Expansion & Enterprise Leadership',
                'bio' => 'With visionary leadership, Sanjit Kumar directs SMECA’s overarching commercial trajectory, forging strategic alliances with retail chains, institutional buyers, and distributor networks across Bihar and beyond.',
                'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'name' => 'Sonu Kumar',
                'title' => 'Director',
                'focus' => 'OEM Operations, Supply Chain & Logistics Management',
                'bio' => 'Sonu Kumar drives manufacturing excellence and modern supply chain infrastructure in Aurangabad and Gaya, ensuring streamlined third-party contract packaging and prompt fulfillment.',
                'image' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'name' => 'Sarina Kumari',
                'title' => 'Director',
                'focus' => 'Ayurvedic Formulations, Product Quality & Botanical Research',
                'bio' => 'Sarina Kumari spearheads SMECA’s herbal R&D wing, marrying centuries-old Indian Ayurvedic texts with certified dermatological laboratory protocols to guarantee safety and efficacy.',
                'image' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'name' => 'Yogendra Das',
                'title' => 'Director',
                'focus' => 'Corporate Governance, Compliance & Stakeholder Relations',
                'bio' => 'Yogendra Das ensures meticulous statutory adherence, Ayush regulatory compliance, ethical corporate standards, and sustainable community empowerment in local Bihar districts.',
                'image' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&w=600&q=80',
            ],
        ];

        $milestones = [
            [
                'year' => 'Founding Vision',
                'title' => 'Incorporation of SMECA Industry Private Limited',
                'description' => 'Established with a passionate pledge to manufacture pure, authentic herbal and wellness products in Bihar.',
            ],
            [
                'year' => 'District Hubs',
                'title' => 'Aurangabad & Gaya Operational Footprint',
                'description' => 'Established direct distribution nodes and ethical sourcing agreements with local herbal growers in South Bihar.',
            ],
            [
                'year' => 'B2B & OEM Launch',
                'title' => 'Contract Manufacturing & Private Labeling',
                'description' => 'Expanded capabilities to provide turnkey formulation and packaging services for emerging Indian beauty labels.',
            ],
            [
                'year' => 'November 2026',
                'title' => 'Modern Dynamic Digital Ecosystem',
                'description' => 'Unveiling a unified digital gateway connecting consumers, retailers, and OEM partners nationwide.',
            ],
        ];

        return view('pages.about', compact('directors', 'milestones'));
    }
}
