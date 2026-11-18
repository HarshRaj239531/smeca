<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Ayurvedic Formulations',
                'slug' => 'ayurvedic',
                'description' => 'Authentic classical and proprietary Ayurvedic formulations prepared using time-tested herbs and GMP practices.',
                'icon' => 'leaf',
                'is_featured' => true,
                'sort_order' => 1,
            ],
            [
                'name' => 'Skincare & Face Care',
                'slug' => 'skincare',
                'description' => 'Phyto-active skin nourishment, anti-aging serums, hydrating creams, and herbal cleansers.',
                'icon' => 'sparkles',
                'is_featured' => true,
                'sort_order' => 2,
            ],
            [
                'name' => 'Haircare & Scalp Therapy',
                'slug' => 'haircare',
                'description' => 'Herbal root-strengthening oils, clarifying botanical shampoos, and restorative hair masks.',
                'icon' => 'shield',
                'is_featured' => true,
                'sort_order' => 3,
            ],
            [
                'name' => 'Perfumes & Fine Fragrances',
                'slug' => 'perfumes',
                'description' => 'Artisanal non-alcoholic botanical perfumes, fine mist colognes, and therapeutic essential oil blends.',
                'icon' => 'droplet',
                'is_featured' => true,
                'sort_order' => 4,
            ],
            [
                'name' => 'Cosmetics & Color',
                'slug' => 'cosmetics',
                'description' => 'Clean mineral cosmetics, organic lip pigments, herbal kajal, and nourishing foundation bases.',
                'icon' => 'heart',
                'is_featured' => true,
                'sort_order' => 5,
            ],
            [
                'name' => 'Wellness & Personal Care',
                'slug' => 'wellness',
                'description' => 'Daily therapeutic body washes, pain relief herbal liniments, and rejuvenating bath salts.',
                'icon' => 'sun',
                'is_featured' => true,
                'sort_order' => 6,
            ],
        ];

        $categoryModels = [];
        foreach ($categories as $cat) {
            $categoryModels[$cat['slug']] = Category::updateOrCreate(
                ['slug' => $cat['slug']],
                $cat
            );
        }

        $products = [
            // Ayurvedic
            [
                'category_slug' => 'ayurvedic',
                'name' => 'SMECA Kumkumadi Miraculous Beauty Tailam',
                'tagline' => '100% Classical Saffron & Herb Infused Radiance Oil',
                'short_description' => 'An authentic Ayurvedic preparation of Kashmiri Saffron, Sandalwood, and 24 classical botanicals for natural skin luminescence.',
                'description' => 'Formulated according to classical Ayurvedic principles, this precious beauty elixir penetrates deep into skin layers to reduce pigmentation, blemishes, and fine lines. Ideal for daily night-time massage rituals.',
                'volume_size' => '30 ml / 100 ml (Bulk Available)',
                'key_ingredients' => 'Kashmiri Kesar (Saffron), Chandana, Manjistha, Yashtimadhu, Sesame Oil base',
                'benefits' => 'Complexion brightening, hyperpigmentation reduction, cellular regeneration',
                'image_url' => 'https://images.unsplash.com/photo-1608248597359-22a36b4d3701?auto=format&fit=crop&w=800&q=80',
                'status' => 'Available',
                'is_ayurvedic' => true,
                'is_featured' => true,
                'b2b_available' => true,
                'moq' => '250 Units / 50L Bulk',
            ],
            [
                'category_slug' => 'ayurvedic',
                'name' => 'SMECA Maha Bhringraj Intensive Hair Elixir',
                'tagline' => 'Pure Copper-Vessel Processed Root Revitalizer',
                'short_description' => 'Kshirpak vidhi processed Bhringraj, Amla, and Brahmi oil clinically proven to reduce hair fall and premature greying.',
                'description' => 'Crafted through the traditional Kshirpak method using cow milk and decoctions of 18 potent herbs, this oil restores follicular micro-circulation and calms the nervous system.',
                'volume_size' => '100 ml / 200 ml / 1 Liter',
                'key_ingredients' => 'Bhringraj (Eclipta Alba), Amalaki, Brahmi, Gunja, Til Taila',
                'benefits' => 'Arrests hair thinning, nourishes follicles, soothes scalp dryness',
                'image_url' => 'https://images.unsplash.com/photo-1608248543803-ba4f8c70ae0b?auto=format&fit=crop&w=800&q=80',
                'status' => 'Available',
                'is_ayurvedic' => true,
                'is_featured' => true,
                'b2b_available' => true,
                'moq' => '500 Units / 100L Drum',
            ],
            [
                'category_slug' => 'ayurvedic',
                'name' => 'SMECA Ashwagandha Rejuvenating Body Lepam',
                'tagline' => 'Restorative Herbal Muscle & Joint Balm',
                'short_description' => 'Potent herbal topical lepam enriched with Ashwagandha, Shallaki, and camphor for soothing stress and muscular strain.',
                'description' => 'A deeply comforting formulation crafted for therapeutic massages, wellness spas, and holistic body rejuvenation centers.',
                'volume_size' => '100 g Jar / 500 g Spa Pack',
                'key_ingredients' => 'Ashwagandha, Shallaki, Mahanarayan Taila extract, Karpura, Beeswax',
                'benefits' => 'Relieves physical fatigue, soothes stiff joints, enhances tissue vitality',
                'image_url' => 'https://images.unsplash.com/photo-1556228720-195a672e8a03?auto=format&fit=crop&w=800&q=80',
                'status' => 'Available',
                'is_ayurvedic' => true,
                'is_featured' => false,
                'b2b_available' => true,
                'moq' => '300 Units (Private Label Ready)',
            ],

            // Skincare
            [
                'category_slug' => 'skincare',
                'name' => 'SMECA Bio-Active Vitamin C & Green Tea Serum',
                'tagline' => 'Botanical Collagen Booster & Pollution Shield',
                'short_description' => 'Concentrated 15% Ethyl Ascorbic Acid stabilized with Kakadu Plum and organic Bihar Green Tea polyphenols.',
                'description' => 'Delivers high-potency antioxidant protection against environmental oxidation, photo-aging, and uneven skin tone without sticky residue.',
                'volume_size' => '30 ml Dropper Bottle',
                'key_ingredients' => '15% Stabilized Vitamin C, Kakadu Plum extract, Ferulic Acid, Hyaluronic Acid',
                'benefits' => 'Fights oxidative stress, enhances natural glow, refines skin pores',
                'image_url' => 'https://images.unsplash.com/photo-1620916566398-39f1143ab7be?auto=format&fit=crop&w=800&q=80',
                'status' => 'Available',
                'is_ayurvedic' => false,
                'is_featured' => true,
                'b2b_available' => true,
                'moq' => '500 Units (OEM / Custom Formulation)',
            ],
            [
                'category_slug' => 'skincare',
                'name' => 'SMECA Pure Aloe & Vetiver Soothing Hydragel',
                'tagline' => 'Ultra-Light Moisture Infusion for Sensitive Skin',
                'short_description' => 'Cold-pressed organic Aloe barbadensis leaf juice distilled with soothing Vetiver (Khus) water for non-comedogenic hydration.',
                'description' => 'Multi-purpose calming gel formulated for sensitive, acne-prone, and sun-exposed skin. Quickly absorbs leaving a supple, matte barrier.',
                'volume_size' => '150 g Pump Tube',
                'key_ingredients' => 'Organic Aloe Vera Gel, Steam-distilled Vetiver Hydrosol, Niacinamide 2%, Centella Asiatica',
                'benefits' => 'Instant cooling, redness relief, oil-free barrier hydration',
                'image_url' => 'https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?auto=format&fit=crop&w=800&q=80',
                'status' => 'Available',
                'is_ayurvedic' => true,
                'is_featured' => true,
                'b2b_available' => true,
                'moq' => '500 Units',
            ],
            [
                'category_slug' => 'skincare',
                'name' => 'SMECA Turmeric & Neem Purifying Clarifying Cleanser',
                'tagline' => 'Sulfate-Free Balancing Micro-Foam Face Wash',
                'short_description' => 'Gentle botanical foaming face cleanser formulated to eliminate impurities and excess sebum while preserving epidermal moisture.',
                'description' => 'Infused with cold-pressed Neem seed oil and Curcuma longa extracts to regulate breakouts and clarify troubled skin daily.',
                'volume_size' => '120 ml Foamer Bottle',
                'key_ingredients' => 'Wild Turmeric extract, Neem Leaf extract, Tea Tree Oil, Plant-based Glucosides',
                'benefits' => 'Blemish control, deep pore cleansing, balanced pH formula',
                'image_url' => 'https://images.unsplash.com/photo-1556228722-d0b5d0f6bb8f?auto=format&fit=crop&w=800&q=80',
                'status' => 'Available',
                'is_ayurvedic' => true,
                'is_featured' => false,
                'b2b_available' => true,
                'moq' => '1,000 Units',
            ],

            // Haircare
            [
                'category_slug' => 'haircare',
                'name' => 'SMECA Hibiscus & Onion Anti-Breakage Shampoo',
                'tagline' => 'Bio-Fermented Red Onion & Red Hibiscus Infusion',
                'short_description' => 'Gentle cleansers paired with sulfur-rich Red Onion and bio-active Hibiscus flowers to strengthen weak strands.',
                'description' => 'Cleanses effectively without stripping natural oils. Promotes structural keratin integrity and reduces breakage during washing.',
                'volume_size' => '250 ml / 500 ml',
                'key_ingredients' => 'Red Onion Seed extract, Hibiscus Rosa-Sinensis, Plant Keratin, D-Panthenol',
                'benefits' => 'Reduces strand breakage, adds natural volume, scalp conditioning',
                'image_url' => 'https://images.unsplash.com/photo-1535585209827-a15fcdbc4c2d?auto=format&fit=crop&w=800&q=80',
                'status' => 'Available',
                'is_ayurvedic' => true,
                'is_featured' => true,
                'b2b_available' => true,
                'moq' => '500 Units',
            ],
            [
                'category_slug' => 'haircare',
                'name' => 'SMECA Deep Conditioning Argan & Fenugreek Mask',
                'tagline' => 'Intensive Weekly Botanical Repair Treatment',
                'short_description' => 'Rich hair butter combining sprouted Methi (Fenugreek) mucilage with cold-pressed Moroccan Argan oil.',
                'description' => 'Penetrates damaged hair cuticles to tame frizz, soften coarse texture, and restore brilliant shine for chemically treated hair.',
                'volume_size' => '200 g Tub',
                'key_ingredients' => 'Trigonella Foenum-Graecum (Methi), Argania Spinosa Kernel Oil, Shea Butter',
                'benefits' => 'Thermal protection, split-end repair, silky smooth finish',
                'image_url' => 'https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&w=800&q=80',
                'status' => 'Available',
                'is_ayurvedic' => true,
                'is_featured' => false,
                'b2b_available' => true,
                'moq' => '400 Units',
            ],

            // Perfumes
            [
                'category_slug' => 'perfumes',
                'name' => 'SMECA Royal Oudh & Indian Rose Eau de Parfum',
                'tagline' => 'Handcrafted Luxury Artisanal Fragrance (Bespoke)',
                'short_description' => 'A masterwork blending Assam Agarwood with Kannauj Damask Rose and warm amber undertones.',
                'description' => 'A sophisticated 24-hour lasting fragrance crafted using sustainable aroma molecules and steam-distilled Indian botanical extracts. Available for private label custom bottle branding.',
                'volume_size' => '50 ml / 100 ml Glass Flacon',
                'key_ingredients' => 'Natural Agarwood (Oudh), Rosa Damascena absolute, Cardamom, Sandalwood',
                'benefits' => 'Exquisite sillage, 24-hour longevity, non-irritating perfume base',
                'image_url' => 'https://images.unsplash.com/photo-1592945403244-b3fbafd7f539?auto=format&fit=crop&w=800&q=80',
                'status' => 'Available',
                'is_ayurvedic' => false,
                'is_featured' => true,
                'b2b_available' => true,
                'moq' => '200 Units (Custom Engraving Available)',
            ],
            [
                'category_slug' => 'perfumes',
                'name' => 'SMECA Mitti & Monsoon Vetiver Attar (Alcohol-Free)',
                'tagline' => 'Pure Deg-Bhapka Distilled Petrichor Essence',
                'short_description' => 'The nostalgic scent of baked alluvial earth after the first monsoon rain, distilled into pure sandalwood oil.',
                'description' => 'Traditional hydro-distilled earthen attar. 100% alcohol-free, skin-nourishing, and celebrated for its grounding aromatherapy properties.',
                'volume_size' => '12 ml Crystal Bottle / 500 ml Bulk',
                'key_ingredients' => 'Hydro-distilled baked alluvial earth, Pure Mysore Santalum Album oil',
                'benefits' => '100% alcohol-free, grounding aromatherapy, long-lasting scent',
                'image_url' => 'https://images.unsplash.com/photo-1547887537-6158d64c35b3?auto=format&fit=crop&w=800&q=80',
                'status' => 'Available',
                'is_ayurvedic' => true,
                'is_featured' => false,
                'b2b_available' => true,
                'moq' => '100 Bottles / 5L Wholesale',
            ],

            // Cosmetics
            [
                'category_slug' => 'cosmetics',
                'name' => 'SMECA Herbal Triphala Nourishing Black Kajal',
                'tagline' => 'Therapeutic Almond Oil & Camphor Infused Eye Liner',
                'short_description' => 'Authentic soot kajal enriched with pure Castor Oil, Almond Oil, and Triphala to cool and protect eyes while delivering intense pigment.',
                'description' => 'Safe for sensitive eyes and contact lens wearers. Smudge-resistant, ophthalmologically safe, and deeply conditioning.',
                'volume_size' => '3.5 g Retractable Pencil',
                'key_ingredients' => 'Triphala soot, Badam Rogan (Almond Oil), Organic Castor Oil, Natural Camphor',
                'benefits' => 'Zero chemical carbon, soothes tired eyes, intense jet-black matte finish',
                'image_url' => 'https://images.unsplash.com/photo-1586495777744-4413f21062fa?auto=format&fit=crop&w=800&q=80',
                'status' => 'Available',
                'is_ayurvedic' => true,
                'is_featured' => false,
                'b2b_available' => true,
                'moq' => '1,000 Units (OEM Packaging)',
            ],
            [
                'category_slug' => 'cosmetics',
                'name' => 'SMECA Botanical Velvet Matte Lip Elixir - Crimson Lotus',
                'tagline' => 'Moisturizing Plant-Pigment Tint with Shea & Vitamin E',
                'short_description' => 'Enriched with cold-pressed pomegranate seed oil and natural beetroot pigments for luscious, weightless lips.',
                'description' => 'Combines clean color payoff with restorative skincare ingredients. Non-drying, transfer-resistant, and free from heavy metals.',
                'volume_size' => '5 ml Doe-foot Applicator',
                'key_ingredients' => 'Punica Granatum seed oil, Butyrospermum Parkii, Beetroot phytopigments, Tocopherol',
                'benefits' => 'High-pigment velvet finish, 8-hour hydration, lead-free formulation',
                'image_url' => 'https://images.unsplash.com/photo-1586495777444-24519965a38a?auto=format&fit=crop&w=800&q=80',
                'status' => 'Available',
                'is_ayurvedic' => false,
                'is_featured' => true,
                'b2b_available' => true,
                'moq' => '500 Units / Custom Shade Matching',
            ],

            // Wellness
            [
                'category_slug' => 'wellness',
                'name' => 'SMECA Camphor & Eucalyptus Pain-Relief Liniment',
                'tagline' => 'Fast-Penetrating Botanical Joint & Muscle Rub',
                'short_description' => 'Therapeutic blend of Wintergreen, Nilgiri (Eucalyptus), and Gandhpura oil for fast relief from aches.',
                'description' => 'Non-greasy, fast-action Ayurvedic liniment trusted for sports fatigue, geriatric joint care, and physical stiffness.',
                'volume_size' => '100 ml Spray Bottle / 500 ml Dispenser',
                'key_ingredients' => 'Gandhpura oil (Wintergreen), Nilgiri taila, Pudina satva (Menthol), Karpura',
                'benefits' => 'Fast transdermal absorption, soothing warmth, anti-inflammatory relief',
                'image_url' => 'https://images.unsplash.com/photo-1608248597359-22a36b4d3701?auto=format&fit=crop&w=800&q=80',
                'status' => 'Available',
                'is_ayurvedic' => true,
                'is_featured' => false,
                'b2b_available' => true,
                'moq' => '1,000 Units (Institutional Supply Ready)',
            ],
        ];

        foreach ($products as $item) {
            $catSlug = $item['category_slug'];
            unset($item['category_slug']);

            $item['category_id'] = $categoryModels[$catSlug]->id;
            $item['slug'] = Str::slug($item['name']);

            Product::updateOrCreate(
                ['slug' => $item['slug']],
                $item
            );
        }
    }
}
