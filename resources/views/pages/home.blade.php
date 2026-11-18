@extends('layouts.app')

@section('title', 'SMECA INDUSTRY PRIVATE LIMITED | Premier Ayurvedic & Cosmetic Formulations')

@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-b from-emerald-50/80 via-white to-stone-50 overflow-hidden pt-12 pb-20 lg:pt-20 lg:pb-28 border-b border-stone-200/60">
    <!-- Subtle organic background blur shapes -->
    <div class="absolute top-0 right-0 -translate-y-12 translate-x-1/4 w-96 h-96 bg-emerald-200/40 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 translate-y-1/3 -translate-x-1/4 w-96 h-96 bg-amber-100/50 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            <!-- Left Column: Value Proposition & CTAs -->
            <div class="lg:col-span-7 space-y-6">
                
                <!-- Pill Badge -->
                <div class="inline-flex items-center gap-2 bg-emerald-100/80 text-emerald-900 border border-emerald-300/60 px-3.5 py-1.5 rounded-full text-xs font-semibold tracking-wide shadow-2xs">
                    <svg class="w-4 h-4 text-emerald-700" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    <span>Authentic Herbal & Cosmetic Science • Bihar, India</span>
                </div>

                <!-- Main Heading -->
                <h1 class="text-4xl sm:text-5xl xl:text-6xl font-bold tracking-tight text-emerald-950 font-serif-display leading-[1.15]">
                    Where Ancient <span class="text-emerald-800 italic">Ayurvedic Wisdom</span> Meets Modern Cosmetic Purity.
                </h1>

                <!-- Subtitle / Positioning -->
                <p class="text-base sm:text-lg text-slate-600 leading-relaxed max-w-2xl">
                    <strong>SMECA INDUSTRY PRIVATE LIMITED</strong> crafts clinical-grade cosmetics, nourishing skincare, botanical haircare, and therapeutic Ayurvedic formulations. Bridging the gap between certified B2C purity and scalable B2B third-party contract manufacturing across Aurangabad, Gaya, and PAN India.
                </p>

                <!-- Dual CTAs: B2C & B2B -->
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 pt-2">
                    <a href="{{ route('products.index') }}" class="inline-flex justify-center items-center gap-2.5 bg-emerald-800 hover:bg-emerald-900 text-white font-semibold text-sm px-6 py-3.5 rounded-xl shadow-md shadow-emerald-900/10 hover:shadow-lg transition-all">
                        <span>Explore Dynamic Products</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <a href="{{ route('services.b2b') }}" class="inline-flex justify-center items-center gap-2 bg-white hover:bg-stone-50 text-emerald-900 border border-emerald-800/20 font-semibold text-sm px-6 py-3.5 rounded-xl shadow-2xs hover:shadow-sm transition-all">
                        <span>B2B & Private Label OEM</span>
                        <svg class="w-4 h-4 text-emerald-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    </a>
                </div>

                <!-- Trust Points / Metrics -->
                <div class="pt-6 border-t border-stone-200/80 grid grid-cols-3 gap-4 text-left">
                    <div>
                        <div class="text-2xl sm:text-3xl font-extrabold text-emerald-950 font-serif-display">100%</div>
                        <div class="text-xs text-slate-500 font-medium mt-0.5">Ayurvedic Herbal Formulations</div>
                    </div>
                    <div>
                        <div class="text-2xl sm:text-3xl font-extrabold text-emerald-950 font-serif-display">cGMP</div>
                        <div class="text-xs text-slate-500 font-medium mt-0.5">Pharma Quality & AYUSH Compliance</div>
                    </div>
                    <div>
                        <div class="text-2xl sm:text-3xl font-extrabold text-emerald-950 font-serif-display">B2B/B2C</div>
                        <div class="text-xs text-slate-500 font-medium mt-0.5">Retail & Third-Party Manufacturing</div>
                    </div>
                </div>

            </div>

            <!-- Right Column: Visual Brand Card Showcase -->
            <div class="lg:col-span-5 relative">
                <div class="relative mx-auto max-w-md lg:max-w-none">
                    <!-- Main Featured Imagery Container -->
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl border-4 border-white bg-emerald-900">
                        <img src="https://images.unsplash.com/photo-1608248597359-22a36b4d3701?auto=format&fit=crop&w=1000&q=85" 
                             alt="SMECA Herbal Formulations" 
                             class="w-full h-96 sm:h-[460px] object-cover object-center transform hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-emerald-950/90 via-emerald-950/20 to-transparent"></div>
                        
                        <div class="absolute bottom-6 left-6 right-6 text-white">
                            <span class="inline-block px-2.5 py-1 rounded bg-amber-400 text-emerald-950 font-bold text-xs uppercase tracking-wider mb-2">
                                Flagship Blend
                            </span>
                            <h3 class="text-xl sm:text-2xl font-serif-display font-bold">SMECA Kumkumadi Beauty Tailam</h3>
                            <p class="text-xs sm:text-sm text-emerald-100/90 mt-1">24 Classical Botanicals Infused with Kashmiri Kesar & Chandana</p>
                            <div class="mt-3 flex items-center justify-between">
                                <span class="text-xs font-semibold text-amber-200">Available for B2C & OEM Bulk Supply</span>
                                <button onclick="openEnquiryModal('SMECA Kumkumadi Beauty Tailam', 1, 'product')" 
                                        class="bg-white/20 hover:bg-white text-white hover:text-emerald-950 text-xs font-semibold px-3 py-1.5 rounded-lg backdrop-blur-md transition">
                                    Enquire Now &rarr;
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Badge 1: Origin & Operating Region -->
                    <div class="absolute -bottom-6 -left-6 bg-white p-4 rounded-2xl shadow-xl border border-stone-200 hidden sm:flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-800 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <div>
                            <div class="text-xs font-bold text-slate-800">Aurangabad & Gaya Hubs</div>
                            <div class="text-[11px] text-slate-500">Rooted in Bihar, Serving Globally</div>
                        </div>
                    </div>

                    <!-- Floating Badge 2: Organic Certification -->
                    <div class="absolute -top-6 -right-6 bg-emerald-950 text-white p-3.5 rounded-2xl shadow-xl border border-emerald-800 hidden sm:flex items-center gap-3">
                        <div class="w-9 h-9 rounded-xl bg-emerald-800 flex items-center justify-center text-amber-300 shrink-0">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        </div>
                        <div class="text-left">
                            <div class="text-xs font-bold text-amber-200">100% Toxin-Free</div>
                            <div class="text-[10px] text-emerald-300">Clean Botanical Science</div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- Company Pillars & Value Architecture -->
<section class="py-16 bg-white border-b border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto space-y-3 mb-12">
            <span class="text-xs font-bold uppercase tracking-wider text-emerald-800 bg-emerald-50 px-3 py-1 rounded-full border border-emerald-200">
                Corporate Overview
            </span>
            <h2 class="text-3xl sm:text-4xl font-bold font-serif-display text-emerald-950">
                Comprehensive Wellness & Cosmetic Capabilities
            </h2>
            <p class="text-sm sm:text-base text-slate-600">
                From organic soil-level herb selection to state-of-the-art sterile batch packaging, SMECA powers both consumer wellness brands and enterprise OEM partnerships.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <div class="p-6 rounded-2xl bg-stone-50 border border-stone-200 hover:border-emerald-600/30 hover:shadow-md transition duration-200 group">
                <div class="w-12 h-12 rounded-xl bg-emerald-100 text-emerald-800 flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22l1-2.3A4.49 4.49 0 0 0 8 20C19 20 22 3 22 3c-1 2-8 2.25-13 3.25S2 11.5 2 13.5s1.75 3.75 1.75 3.75C7 8 17 8 17 8z"/></svg>
                </div>
                <h3 class="text-lg font-bold font-serif-display text-emerald-950 mb-2">Ayurvedic Formulations</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Classical oil decoctions, herbal lepa, therapeutic syrups, and rasayanas compounded adhering strictly to pharmacopoeia standards.
                </p>
            </div>

            <div class="p-6 rounded-2xl bg-stone-50 border border-stone-200 hover:border-emerald-600/30 hover:shadow-md transition duration-200 group">
                <div class="w-12 h-12 rounded-xl bg-emerald-100 text-emerald-800 flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                </div>
                <h3 class="text-lg font-bold font-serif-display text-emerald-950 mb-2">Skincare & Cosmetics</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Stabilized Vitamin C serums, sulfate-free cleansers, botanical hair masks, non-drying lip elixirs, and eye kajals.
                </p>
            </div>

            <div class="p-6 rounded-2xl bg-stone-50 border border-stone-200 hover:border-emerald-600/30 hover:shadow-md transition duration-200 group">
                <div class="w-12 h-12 rounded-xl bg-emerald-100 text-emerald-800 flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                </div>
                <h3 class="text-lg font-bold font-serif-display text-emerald-950 mb-2">B2B & Private Label OEM</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Custom formulation, bottle and jar sourcing, label design, barcode registry, and batch testing for third-party brand founders.
                </p>
            </div>

            <div class="p-6 rounded-2xl bg-stone-50 border border-stone-200 hover:border-emerald-600/30 hover:shadow-md transition duration-200 group">
                <div class="w-12 h-12 rounded-xl bg-emerald-100 text-emerald-800 flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                </div>
                <h3 class="text-lg font-bold font-serif-display text-emerald-950 mb-2">Consultancy & Training</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Strategic retail channel setup, brand positioning, sales personnel grooming, and digital marketplace scaling mentorship.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- Dynamic Product Showcase Section -->
<section class="py-20 bg-stone-50 border-b border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
            <div>
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-800 bg-emerald-100/70 px-3 py-1 rounded-full border border-emerald-300">
                    Live Product Catalog
                </span>
                <h2 class="text-3xl sm:text-4xl font-bold font-serif-display text-emerald-950 mt-2">
                    Featured Formulations & Formats
                </h2>
                <p class="text-sm text-slate-600 mt-1 max-w-xl">
                    Dynamic data-driven formulations manufactured under strict GMP compliance. Click "Enquire Now" on any card to request bulk quotation or trial samples.
                </p>
            </div>
            <a href="{{ route('products.index') }}" class="inline-flex items-center gap-2 text-sm font-bold text-emerald-800 hover:text-emerald-950 hover:underline">
                <span>View Full Dynamic Catalog ({{ count($allProducts) }}+ Products)</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
        </div>

        <!-- Featured Products Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($featuredProducts as $product)
                <div class="bg-white rounded-2xl border border-stone-200 overflow-hidden shadow-xs hover:shadow-xl transition-all duration-300 flex flex-col group">
                    
                    <!-- Product Image Container -->
                    <div class="relative h-60 overflow-hidden bg-stone-100">
                        <img src="{{ $product->image_url }}" alt="{{ $product->name }}"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        
                        <!-- Badges -->
                        <div class="absolute top-3 left-3 flex flex-wrap gap-1.5">
                            <span class="bg-emerald-900/90 backdrop-blur-xs text-white text-[11px] font-semibold px-2.5 py-0.5 rounded-full">
                                {{ $product->category->name }}
                            </span>
                            @if($product->is_ayurvedic)
                                <span class="bg-amber-500/95 backdrop-blur-xs text-white text-[10px] font-bold px-2 py-0.5 rounded-full flex items-center gap-1">
                                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a8 8 0 100 16 8 8 0 000-16zm1 11H9v-2h2v2zm0-4H9V5h2v4z"/></svg>
                                    Ayurvedic
                                </span>
                            @endif
                        </div>

                        <div class="absolute bottom-3 right-3 bg-white/90 backdrop-blur-xs text-slate-800 text-[11px] font-semibold px-2.5 py-1 rounded-md shadow-xs">
                            {{ $product->volume_size }}
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <p class="text-xs font-semibold text-emerald-700 tracking-wide mb-1">{{ $product->tagline }}</p>
                            <h3 class="text-lg font-bold font-serif-display text-emerald-950 group-hover:text-emerald-800 transition line-clamp-1">
                                <a href="{{ route('products.show', $product->slug) }}">{{ $product->name }}</a>
                            </h3>
                            <p class="text-xs text-slate-600 mt-2 line-clamp-2 leading-relaxed">
                                {{ $product->short_description }}
                            </p>

                            <!-- Key Ingredients snippet -->
                            <div class="mt-4 pt-3 border-t border-stone-100">
                                <div class="text-[11px] text-slate-500">
                                    <strong class="text-slate-700">Actives:</strong> {{ Str::limit($product->key_ingredients, 60) }}
                                </div>
                                <div class="text-[11px] text-emerald-800 mt-1 font-medium">
                                    <strong class="text-slate-700">MOQ:</strong> {{ $product->moq }}
                                </div>
                            </div>
                        </div>

                        <!-- Card Action -->
                        <div class="mt-5 pt-4 border-t border-stone-100 flex items-center justify-between gap-3">
                            <a href="{{ route('products.show', $product->slug) }}" class="text-xs font-semibold text-slate-600 hover:text-emerald-800 transition">
                                View Specs
                            </a>
                            <button onclick="openEnquiryModal('{{ addslashes($product->name) }}', {{ $product->id }}, 'product')"
                                    class="bg-emerald-800 hover:bg-emerald-900 text-white text-xs font-semibold px-4 py-2 rounded-xl transition flex items-center gap-1.5 shadow-2xs">
                                <span>Enquire Now</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                            </button>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>

    </div>
</section>

<!-- B2B & OEM Capabilities Highlight -->
<section class="py-20 bg-emerald-950 text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(#2d6a4f_1px,transparent_1px)] [background-size:24px_24px] opacity-25"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-6 space-y-6">
                <span class="text-xs font-bold uppercase tracking-wider text-amber-300 bg-emerald-900/80 px-3 py-1 rounded-full border border-amber-300/30">
                    B2B & Third-Party Manufacturing
                </span>
                <h2 class="text-3xl sm:text-4xl font-bold font-serif-display text-white leading-tight">
                    Scale Your Cosmetic or Ayurvedic Brand With SMECA
                </h2>
                <p class="text-sm sm:text-base text-emerald-200/90 leading-relaxed">
                    Whether you are an emerging Direct-To-Consumer brand, a pharmacy retail chain, or an institutional distributor, SMECA delivers complete end-to-end turnkey OEM solutions tailored to your market specifications.
                </p>

                <div class="space-y-3 pt-2">
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 rounded-full bg-emerald-800 text-amber-300 flex items-center justify-center shrink-0 mt-0.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <div>
                            <strong class="text-sm font-semibold text-white">Custom Formulation & Stability Testing:</strong>
                            <p class="text-xs text-emerald-200/80">Tailored textures, bespoke fragrances, and accelerated climatic stability trials.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 rounded-full bg-emerald-800 text-amber-300 flex items-center justify-center shrink-0 mt-0.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <div>
                            <strong class="text-sm font-semibold text-white">Turnkey Private Labeling & Branding:</strong>
                            <p class="text-xs text-emerald-200/80">Bottle selection, luxury silk-screen foil printing, and barcoding ready for shipment.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 rounded-full bg-emerald-800 text-amber-300 flex items-center justify-center shrink-0 mt-0.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <div>
                            <strong class="text-sm font-semibold text-white">Direct Bihar Hub Logistics (Aurangabad & Gaya):</strong>
                            <p class="text-xs text-emerald-200/80">Rapid dispatch infrastructure across Eastern India, North India, and export corridors.</p>
                        </div>
                    </div>
                </div>

                <div class="pt-4 flex flex-wrap gap-4">
                    <a href="{{ route('services.b2b') }}" class="bg-amber-400 hover:bg-amber-300 text-emerald-950 font-bold text-xs sm:text-sm px-6 py-3.5 rounded-xl transition shadow-lg">
                        Explore OEM Capabilities &rarr;
                    </a>
                    <button onclick="openEnquiryModal('OEM Private Labeling Inquiry', null, 'b2b_oem')" class="bg-emerald-900 hover:bg-emerald-800 text-white border border-emerald-700 font-semibold text-xs sm:text-sm px-6 py-3.5 rounded-xl transition">
                        Request Confidential NDA & Catalog
                    </button>
                </div>
            </div>

            <!-- Right Box: Manufacturing Specs -->
            <div class="lg:col-span-6 bg-emerald-900/40 border border-emerald-800/80 rounded-3xl p-8 backdrop-blur-xs">
                <h3 class="text-xl font-bold font-serif-display text-amber-200 mb-6">OEM & Third-Party Process Blueprint</h3>
                
                <div class="space-y-4">
                    <div class="bg-emerald-950/70 p-4 rounded-xl border border-emerald-800 flex items-center justify-between">
                        <span class="text-xs font-semibold text-emerald-200">1. Requirement & Target Benchmark</span>
                        <span class="text-[11px] font-bold text-amber-300 uppercase tracking-wider">Day 1 - 3</span>
                    </div>
                    <div class="bg-emerald-950/70 p-4 rounded-xl border border-emerald-800 flex items-center justify-between">
                        <span class="text-xs font-semibold text-emerald-200">2. R&D Lab Prototype Batch Formulation</span>
                        <span class="text-[11px] font-bold text-amber-300 uppercase tracking-wider">Day 4 - 7</span>
                    </div>
                    <div class="bg-emerald-950/70 p-4 rounded-xl border border-emerald-800 flex items-center justify-between">
                        <span class="text-xs font-semibold text-emerald-200">3. Statutory AYUSH & Regulatory Dossier</span>
                        <span class="text-[11px] font-bold text-amber-300 uppercase tracking-wider">Day 8 - 14</span>
                    </div>
                    <div class="bg-emerald-950/70 p-4 rounded-xl border border-emerald-800 flex items-center justify-between">
                        <span class="text-xs font-semibold text-emerald-200">4. Mass Mixing, Filling & Sterile Sealing</span>
                        <span class="text-[11px] font-bold text-amber-300 uppercase tracking-wider">Day 15 - 25</span>
                    </div>
                    <div class="bg-emerald-950/70 p-4 rounded-xl border border-emerald-800 flex items-center justify-between">
                        <span class="text-xs font-semibold text-emerald-200">5. Multi-Point Dispatch from Aurangabad Hub</span>
                        <span class="text-[11px] font-bold text-amber-300 uppercase tracking-wider">Prompt Freight</span>
                    </div>
                </div>

                <div class="mt-6 pt-6 border-t border-emerald-800 text-center">
                    <p class="text-xs text-emerald-300">
                        Interested in becoming a Super Stockist or Regional Distributor in Bihar? 
                        <a href="{{ route('contact.index', ['type' => 'distributorship']) }}" class="text-amber-300 font-bold underline hover:text-white ml-1">Apply for Distributorship</a>
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Leadership & Board of Directors Teaser -->
<section class="py-20 bg-white border-b border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto space-y-3 mb-14">
            <span class="text-xs font-bold uppercase tracking-wider text-emerald-800 bg-emerald-50 px-3 py-1 rounded-full border border-emerald-200">
                Corporate Governance
            </span>
            <h2 class="text-3xl sm:text-4xl font-bold font-serif-display text-emerald-950">
                Board of Directors
            </h2>
            <p class="text-sm sm:text-base text-slate-600">
                SMECA Industry Private Limited is steered by seasoned directors combining deep regional expertise in Bihar with modern cosmetic formulation knowledge.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($directors as $director)
                <div class="bg-stone-50 rounded-2xl p-6 border border-stone-200 hover:shadow-lg transition-all duration-300 flex flex-col justify-between text-center group">
                    <div>
                        <div class="w-20 h-20 mx-auto rounded-full bg-gradient-to-tr from-emerald-800 to-emerald-950 text-white flex items-center justify-center font-serif-display font-bold text-2xl shadow-md group-hover:scale-105 transition-transform mb-4 border-2 border-emerald-200">
                            {{ $director['initials'] }}
                        </div>
                        <h3 class="text-lg font-bold font-serif-display text-emerald-950">{{ $director['name'] }}</h3>
                        <p class="text-xs font-bold text-emerald-800 uppercase tracking-wider mt-0.5">{{ $director['role'] }}</p>
                        <p class="text-xs text-slate-600 mt-3 leading-relaxed">
                            {{ $director['bio'] }}
                        </p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-stone-200">
                        <span class="text-[11px] font-semibold text-slate-500">Director • SMECA Industry Pvt Ltd</span>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-10 text-center">
            <a href="{{ route('about') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-emerald-800 hover:text-emerald-950 underline">
                <span>Read more about our vision, leadership & Bihar operations</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>

    </div>
</section>

<!-- Direct Call to Action Banner -->
<section class="py-16 bg-gradient-to-r from-emerald-900 via-emerald-800 to-emerald-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-6">
        <h2 class="text-3xl sm:text-4xl font-serif-display font-bold">
            Partner with SMECA Industry Private Limited Today
        </h2>
        <p class="text-sm sm:text-base text-emerald-100 max-w-2xl mx-auto leading-relaxed">
            Whether you require retail personal care purchases, custom Ayurvedic formulation trials, or comprehensive brand consultancy, our directors and scientists are ready to assist.
        </p>
        <div class="flex flex-wrap items-center justify-center gap-4 pt-2">
            <button onclick="openEnquiryModal('Corporate Partnership Inquiry', null, 'b2b_oem')" class="bg-amber-400 hover:bg-amber-300 text-emerald-950 font-bold text-sm px-7 py-3.5 rounded-xl transition shadow-lg">
                Submit Business Requirement
            </button>
            <a href="{{ route('contact.index') }}" class="bg-emerald-950/80 hover:bg-emerald-950 text-white border border-emerald-600 font-semibold text-sm px-7 py-3.5 rounded-xl transition">
                Contact Aurangabad & Gaya Offices
            </a>
        </div>
    </div>
</section>

@endsection
