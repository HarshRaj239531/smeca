<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class BlogController extends Controller
{
    /**
     * Get list of articles published by SMECA editorial desk.
     */
    protected function getArticles(): array
    {
        return [
            [
                'id' => 1,
                'slug' => 'ayurvedic-skincare-tips-reviews-formulation-advice',
                'title' => 'Ayurvedic Skincare Tips, Reviews & Formulation Advice',
                'category' => 'Cosmetics & Skincare',
                'category_slug' => 'skincare',
                'badge' => 'Featured Story',
                'author' => 'Dr. Sarina Kumari',
                'author_role' => 'Director & Product R&D Head',
                'author_avatar' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=300&q=80',
                'date' => 'November 16, 2026',
                'read_time' => '6 min read',
                'image_url' => 'https://images.unsplash.com/photo-1556228720-195a672e8a03?auto=format&fit=crop&w=1200&q=80',
                'excerpt' => 'Combine ancient herbal extraction with precision modern cleanroom compounding. Discover how Kashmiri saffron, sandalwood, and cold-pressed sesame oil restore natural cellular luminescence without harsh parabens or synthetic silicones.',
                'content' => [
                    'The modern skincare landscape is experiencing a profound paradigm shift. Consumers and dermatologists are moving away from aggressive chemical peels and synthetic fillers, returning instead to time-tested phyto-botanical wisdom that works with the skin\'s natural biome.',
                    'At SMECA Industry Private Limited, our research and development facility in Bihar explores classical Ayurvedic manuscripts, such as the Ashtanga Hridaya and Charaka Samhita, to isolate the active phyto-constituents responsible for cellular repair and melanin regulation.',
                    'Key Formulation Insight: When Kashmiri saffron (Kesar) is macerated in virgin sesame oil alongside Manjistha (Indian Madder) and Red Sandalwood, the resulting micro-nutrients penetrate trans-dermally without clogging pores. This delivers antioxidant shielding against urban smog and oxidative damage while visibly softening fine expression lines.',
                    'Daily Ayurvedic Routine: Start with a gentle sulphate-free cleanser, spritz with steam-distilled pure rose hydrosol to balance cutaneous pH, and gently press 3-4 drops of Kumkumadi Tailam into slightly damp skin. Practice upward lymphatic drainage strokes for 2 minutes to encourage micro-circulation and collagen synthesis.',
                ],
            ],
            [
                'id' => 2,
                'slug' => 'the-science-of-kumkumadi-miraculous-beauty-tailam',
                'title' => 'The Science of Kumkumadi: How Classical Saffron Oil Transforms Skin Radiance',
                'category' => 'Ayurvedic Formulations',
                'category_slug' => 'ayurvedic',
                'badge' => 'Formulation Focus',
                'author' => 'Dr. Sarina Kumari',
                'author_role' => 'Director & Product R&D Head',
                'author_avatar' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=300&q=80',
                'date' => 'November 14, 2026',
                'read_time' => '5 min read',
                'image_url' => 'https://images.unsplash.com/photo-1608248597359-22a36b4d3701?auto=format&fit=crop&w=1200&q=80',
                'excerpt' => 'Kumkumadi Tailam is universally revered in traditional Ayurvedic pharmacology. Here is a dermatological breakdown of how 24 classical botanicals reverse hyperpigmentation and sun spots.',
                'content' => [
                    'Kumkumadi Tailam is not merely an oil; it is an intricate Ayurvedic lipid decoction formulated through an intensive four-stage boiling and simmering process known as Sneha Kalpana.',
                    'The principal botanical active is Crocus sativus (Kashmiri Saffron stigma), renowned for containing crocin and safranal. These natural carotenoids act as potent free-radical scavengers that inhibit tyrosinase activity—the enzymatic pathway responsible for excessive melanin production and blemish formation.',
                    'Combined with Yashtimadhu (Licorice root) and Chandana (Sandalwood), our formulation soothes micro-inflammation caused by harsh UV radiation and environmental stress, leaving the dermis deeply hydrated and visibly luminous.',
                ],
            ],
            [
                'id' => 3,
                'slug' => 'artisanal-botanical-perfumes-non-alcoholic-attars',
                'title' => 'The Art of Natural Fragrance: Non-Alcoholic Botanical Attars',
                'category' => 'Perfumes & Oils',
                'category_slug' => 'perfumes',
                'badge' => 'Artisanal Lab',
                'author' => 'Sonu Kumar',
                'author_role' => 'Director & Supply Chain',
                'author_avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=300&q=80',
                'date' => 'November 08, 2026',
                'read_time' => '5 min read',
                'image_url' => 'https://images.unsplash.com/photo-1592945403244-b3fbafd7f539?auto=format&fit=crop&w=1200&q=80',
                'excerpt' => 'Why synthetic petroleum scents are giving way to hydro-distilled botanical essences, warm sandalwood base notes, and pure therapeutic essential oil infusions.',
                'content' => [
                    'Traditional Indian perfumery—specifically the craft of Deg-Bhapka hydro-distillation—captures the delicate aromatic volatile compounds of blooms and woods into pure botanical carrier bases without petroleum denatured alcohol.',
                    'SMECA produces artisanal non-alcoholic attars and organic mists utilizing pure Rosa damascena (Gulab), Jasmine sambac (Mogra), and wild vetiver roots sourced sustainably from Eastern Indian terroirs.',
                    'Unlike alcohol-based EDTs that dry the epidermis and flash evaporate within hours, botanical oil-based scents bind intimately with your natural skin warmth, diffusing an evolving, therapeutic aura that lasts throughout the day.',
                ],
            ],
            [
                'id' => 4,
                'slug' => 'bihar-botanical-heritage-aurangabad-gaya-sourcing',
                'title' => "From Bihar's Soil to Bottle: Our Sustainable Botanical Sourcing Story",
                'category' => 'Heritage & Sourcing',
                'category_slug' => 'heritage',
                'badge' => 'Origin Story',
                'author' => 'Sanjit Kumar',
                'author_role' => 'Director & Strategic Operations',
                'author_avatar' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=300&q=80',
                'date' => 'November 10, 2026',
                'read_time' => '4 min read',
                'image_url' => 'https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&w=1200&q=80',
                'excerpt' => 'How SMECA partners with native agricultural cultivators across Aurangabad and Gaya districts to harvest unadulterated neem, vetiver, amla, and sacred tulsi.',
                'content' => [
                    'The fertile plains and dry deciduous plateaus of Southern Bihar have nurtured medicinal herbs for over three millennia. From the sacred Bodh Gaya belts to the rugged terrain of Aurangabad, this region possesses unique soil minerals that enrich the potency of medicinal flora.',
                    'SMECA establishes direct fair-trade agreements with local grower networks. We harvest wild-crafted herbs at dawn during peak moon cycles when active botanical sap concentrations reach maximum pharmacological efficacy.',
                    'By eliminating commercial middlemen, we guarantee pristine botanical purity while creating verifiable rural livelihood avenues for local farmer cooperatives across Bihar.',
                ],
            ],
            [
                'id' => 5,
                'slug' => 'b2b-contract-manufacturing-guide-for-d2c-beauty',
                'title' => 'The D2C Beauty Founder\'s Guide to OEM Contract Manufacturing',
                'category' => 'B2B & OEM',
                'category_slug' => 'oem',
                'badge' => 'B2B Advisory',
                'author' => 'Yogendra Das',
                'author_role' => 'Director & Regulatory Governance',
                'author_avatar' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&w=300&q=80',
                'date' => 'November 04, 2026',
                'read_time' => '7 min read',
                'image_url' => 'https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?auto=format&fit=crop&w=1200&q=80',
                'excerpt' => 'A step-by-step roadmap from bench formula development and stability testing to cGMP batch production and regulatory AYUSH compliance.',
                'content' => [
                    'Launching an ethical cosmetic or Ayurvedic wellness brand requires more than an appealing label—it demands airtight regulatory compliance, stability testing, and batch-to-batch consistency.',
                    'SMECA operates a modern formulation lab in Aurangabad equipped for contract manufacturing (OEM) and private labeling. We support D2C entrepreneurs with flexible MOQs (starting at 500 units), custom bottle sourcing, and technical Dossier preparation for AYUSH licensure.',
                    'Whether you need organic SPF lotions, anti-blemish serums, or custom herbal shampoos, our turnkey manufacturing infrastructure handles pilot runs, automated vacuum filling, and batch release testing under ISO cleanroom standards.',
                ],
            ],
            [
                'id' => 6,
                'slug' => 'ancient-ayurvedic-hair-rituals-bhringraj-amla-brahmi',
                'title' => 'Reversing Follicle Stress: Ancient Ayurvedic Hair Rituals',
                'category' => 'Haircare & Scalp',
                'category_slug' => 'haircare',
                'badge' => 'Herbal Rituals',
                'author' => 'Dr. Sarina Kumari',
                'author_role' => 'Director & Product R&D Head',
                'author_avatar' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=300&q=80',
                'date' => 'October 29, 2026',
                'read_time' => '4 min read',
                'image_url' => 'https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&w=1200&q=80',
                'excerpt' => 'How classical Kshirapak vidhi (milk-decoction processing) of Bhringraj herb delivers bio-available iron and phytonutrients to the scalp.',
                'content' => [
                    'Premature greying, hair thinning, and scalp dryness are frequently linked to elevated Pitta dosha—internal metabolic heat exacerbated by stress, chemical treatments, and hard water.',
                    'Ayurvedic trichology recommends the classical formulation of Bhringraj (Eclipta alba) cooked with fresh Amla and Brahmi herbs. In our laboratory, we gently simmer these botanicals over 48 hours to ensure zero degradation of active wedelolactone and ecliptine alkaloids.',
                    'Regular warm-oil scalp massage (Shiro Abhyanga) 20 minutes prior to washing enhances micro-circulation to dormant hair follicles while harmonizing the autonomic nervous system.',
                ],
            ],
        ];
    }

    /**
     * Display the editorial magazine blog listing page.
     */
    public function index(Request $request): View
    {
        $allArticles = $this->getArticles();
        $selectedCategory = $request->query('category', 'all');

        $filteredArticles = $selectedCategory === 'all'
            ? $allArticles
            : array_filter($allArticles, fn ($art) => $art['category_slug'] === $selectedCategory);

        // Featured editorial post for the asymmetric magazine hero (Post 1: Ayurvedic Skincare Tips)
        $heroMainPost = $allArticles[0];

        // Author spotlight for center card
        $authorSpotlight = [
            'name' => 'Dr. Sarina Kumari',
            'role' => 'Director & Chief Formulation Scientist',
            'intro' => 'Welcome to the SMECA Botanical Journal. We share authentic research on classical Ayurveda, botanical extraction, and ethical skincare science.',
            'avatar' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=300&q=80',
            'read_link' => route('blog.show', $heroMainPost['slug']),
        ];

        // Post for center bottom card (Perfumes & Oils)
        $perfumesPost = $allArticles[2];

        // Post for right top card (Kumkumadi / Formulation Focus)
        $cosmeticsPost = $allArticles[1];

        // Categories list for filter pills
        $categories = [
            ['name' => 'All Topics', 'slug' => 'all'],
            ['name' => 'Ayurvedic Formulations', 'slug' => 'ayurvedic'],
            ['name' => 'Cosmetics & Skincare', 'slug' => 'skincare'],
            ['name' => 'Perfumes & Oils', 'slug' => 'perfumes'],
            ['name' => 'Heritage & Sourcing', 'slug' => 'heritage'],
            ['name' => 'B2B & OEM', 'slug' => 'oem'],
            ['name' => 'Haircare & Scalp', 'slug' => 'haircare'],
        ];

        return view('pages.blog', compact(
            'allArticles',
            'filteredArticles',
            'heroMainPost',
            'authorSpotlight',
            'perfumesPost',
            'cosmeticsPost',
            'selectedCategory',
            'categories'
        ));
    }

    /**
     * Display a specific blog article.
     */
    public function show(string $slug): View
    {
        $articles = $this->getArticles();
        $article = collect($articles)->firstWhere('slug', $slug);

        if (!$article) {
            throw new NotFoundHttpException('Article not found');
        }

        $relatedArticles = collect($articles)
            ->where('slug', '!=', $slug)
            ->take(3)
            ->all();

        return view('pages.blog-detail', compact('article', 'relatedArticles'));
    }
}
