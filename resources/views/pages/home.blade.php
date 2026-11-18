@extends('layouts.app')

@section('title', 'SMECA Box for Beautiful Skin | SMECA INDUSTRY PRIVATE LIMITED')

@section('content')

<!-- =========================================================================
     HERO SECTION: High-Fidelity Photorealistic Packaging & Cosmetics Presentation
     Background: Exact Organic Sage (#c0caa7) | Typography: Deep Forest (#203a31)
     ========================================================================= -->
<section class="relative bg-[#c0caa7] overflow-hidden pt-4 pb-12 sm:pt-8 sm:pb-16 select-none" style="background: radial-gradient(circle at 75% 40%, #cbd6b5 0%, #c0caa7 55%, #b5bf98 100%);">
    <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12 relative">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-8 items-center min-h-[540px]">
            
            <!-- Left Column: Copy, Price & Social Icons (Exact match to reference image) -->
            <div class="lg:col-span-5 space-y-6 sm:space-y-7 z-10 text-left pr-0 lg:pr-2">
                
                <!-- Main Heading -->
                <h1 class="text-3xl sm:text-5xl lg:text-[46px] xl:text-[54px] font-serif-display font-medium text-[#203a31] tracking-[-0.02em] leading-[1.12]">
                    SMECA Box for <br>
                    Beautiful Skin
                </h1>

                <!-- Subtitle Description -->
                <p class="text-sm sm:text-base text-[#384e42] font-normal leading-relaxed max-w-sm">
                    A set of organic cosmetics and Ayurvedic formulations for everyday skin treatment.
                </p>

                <!-- Pricing Line -->
                <p class="text-sm sm:text-base text-[#384e42] font-medium pt-1">
                    Buy a perfect skincare box for only 
                    <span class="font-bold text-xl sm:text-2xl text-[#203a31] ml-1">₹1,499.00</span>
                    <span class="text-xs text-[#384e42]/80 block sm:inline sm:ml-2 font-normal">(Wholesale & OEM Available)</span>
                </p>

                <!-- Action Button -->
                <div class="pt-2">
                    <button onclick="openEnquiryModal('SMECA Curated Skincare Box', null, 'product')" 
                            class="bg-blue-600 hover:bg-blue-700 text-white text-xs sm:text-sm font-medium px-8 py-3.5 rounded-xs tracking-wide shadow-sm hover:shadow-md transition-all duration-200 cursor-pointer">
                        Order SMECA Box Now &rarr;
                    </button>
                </div>

                <!-- Social & Trust Icons (4 square outline icons matching the image) -->
                <div class="flex items-center gap-2.5 pt-4 sm:pt-6">
                    <!-- Twitter / X -->
                    <a href="#" aria-label="Twitter" class="w-8 h-8 rounded-xs border border-[#203a31]/30 hover:border-[#203a31] hover:bg-[#203a31] hover:text-[#c0caa7] text-[#203a31] flex items-center justify-center text-xs transition">
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                    </a>
                    <!-- Facebook -->
                    <a href="#" aria-label="Facebook" class="w-8 h-8 rounded-xs border border-[#203a31]/30 hover:border-[#203a31] hover:bg-[#203a31] hover:text-[#c0caa7] text-[#203a31] flex items-center justify-center text-xs transition">
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M9.198 21.5h4v-8.01h2.604l.39-3.024h-2.994V8.535c0-.875.244-1.472 1.503-1.472H16.3V4.356c-.767-.102-1.636-.156-2.585-.156-2.557 0-4.307 1.561-4.307 4.427v2.441H6.75v3.024h2.448V21.5z"/></svg>
                    </a>
                    <!-- YouTube -->
                    <a href="#" aria-label="YouTube" class="w-8 h-8 rounded-xs border border-[#203a31]/30 hover:border-[#203a31] hover:bg-[#203a31] hover:text-[#c0caa7] text-[#203a31] flex items-center justify-center text-xs transition">
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                    <!-- Instagram -->
                    <a href="#" aria-label="Instagram" class="w-8 h-8 rounded-xs border border-[#203a31]/30 hover:border-[#203a31] hover:bg-[#203a31] hover:text-[#c0caa7] text-[#203a31] flex items-center justify-center text-xs transition">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg>
                    </a>

                    <span class="ml-3 text-[11px] text-[#384e42] font-medium hidden sm:inline">
                        Bihar Manufacturing • Aurangabad & Gaya
                    </span>
                </div>

            </div>

            <!-- Right Column: Photorealistic Studio 3D Packaging Box Presentation -->
            <div class="lg:col-span-7 relative flex items-center justify-center lg:justify-end py-4 lg:py-0">
                <div class="relative w-full max-w-[580px] xl:max-w-[650px] flex items-center justify-center cursor-pointer group"
                     onclick="openEnquiryModal('SMECA Curated Skincare Box', null, 'product')">
                    
                    <img src="{{ asset('images/smeca-seamless-box.png') }}" 
                         alt="SMECA Box for Beautiful Skin - Organic Cosmetics & Ayurvedic Formulations" 
                         class="w-full h-auto object-contain select-none transform group-hover:scale-[1.015] transition-transform duration-500">

                </div>
            </div>

        </div>

        <!-- Mouse Scroll Down Indicator (Exact match to bottom of image) -->
        <div class="flex justify-center pt-8 sm:pt-12">
            <a href="#overview" class="flex flex-col items-center gap-1.5 text-[#203a31]/60 hover:text-[#203a31] transition group">
                <div class="w-5 h-8 rounded-full border-[1.5px] border-[#203a31]/70 flex items-start justify-center p-1 shadow-2xs">
                    <div class="w-1 h-2 rounded-full bg-[#203a31] animate-bounce"></div>
                </div>
                <svg class="w-3.5 h-3.5 text-[#203a31]/70 group-hover:translate-y-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
            </a>
        </div>

    </div>
</section>

<!-- =========================================================================
     FOUR PILLARS OF EXCELLENCE: Cosmetics, Ayurveda, OEM & Advisory
     ========================================================================= -->
<section id="overview" class="py-20 bg-white border-t border-[#203a31]/10">
    <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12">
        
        <div class="text-center max-w-3xl mx-auto space-y-3 mb-14">
            <span class="text-xs font-bold uppercase tracking-wider text-[#3d564c] bg-[#c0caa7]/40 px-3.5 py-1 rounded-xs border border-[#203a31]/15">
                Corporate Architecture
            </span>
            <h2 class="text-3xl sm:text-4xl font-serif-display font-medium text-[#203a31]">
                Comprehensive Wellness & Cosmetic Operations
            </h2>
            <p class="text-xs sm:text-sm text-[#3d564c]">
                From organic herb cultivations across Bihar (Aurangabad & Gaya) to sterile cGMP batch compounding and private label contract packaging.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <div class="p-7 rounded-xs bg-[#f6f8f3] border border-stone-200 hover:border-[#203a31]/40 hover:shadow-md transition-all duration-300 flex flex-col justify-between group">
                <div>
                    <div class="w-12 h-12 rounded-xs bg-[#c0caa7] text-[#203a31] flex items-center justify-center mb-5 group-hover:scale-105 transition-transform">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22l1-2.3A4.49 4.49 0 0 0 8 20C19 20 22 3 22 3c-1 2-8 2.25-13 3.25S2 11.5 2 13.5s1.75 3.75 1.75 3.75C7 8 17 8 17 8z"/></svg>
                    </div>
                    <h3 class="text-lg font-serif-display font-medium text-[#203a31] mb-2">Ayurvedic Formulations</h3>
                    <p class="text-xs text-[#3d564c] leading-relaxed">
                        Classical Kshirpak Tailams, herbal Lepams, and rasayanas formulated strictly adhering to authentic pharmacopoeia texts.
                    </p>
                </div>
                <div class="mt-6 pt-3 border-t border-stone-200 text-xs font-bold text-[#203a31]">
                    <a href="{{ route('products.index', ['category' => 'ayurvedic']) }}" class="hover:underline">Explore Herbals &rarr;</a>
                </div>
            </div>

            <div class="p-7 rounded-xs bg-[#f6f8f3] border border-stone-200 hover:border-[#203a31]/40 hover:shadow-md transition-all duration-300 flex flex-col justify-between group">
                <div>
                    <div class="w-12 h-12 rounded-xs bg-[#c0caa7] text-[#203a31] flex items-center justify-center mb-5 group-hover:scale-105 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                    </div>
                    <h3 class="text-lg font-serif-display font-medium text-[#203a31] mb-2">Skincare & Cosmetics</h3>
                    <p class="text-xs text-[#3d564c] leading-relaxed">
                        Stabilized Vitamin C serums, soothing aloe hydragels, non-drying cleansers, and organic eye kajal pencils.
                    </p>
                </div>
                <div class="mt-6 pt-3 border-t border-stone-200 text-xs font-bold text-[#203a31]">
                    <a href="{{ route('products.index', ['category' => 'skincare']) }}" class="hover:underline">Explore Skincare &rarr;</a>
                </div>
            </div>

            <div class="p-7 rounded-xs bg-[#f6f8f3] border border-stone-200 hover:border-[#203a31]/40 hover:shadow-md transition-all duration-300 flex flex-col justify-between group">
                <div>
                    <div class="w-12 h-12 rounded-xs bg-[#c0caa7] text-[#203a31] flex items-center justify-center mb-5 group-hover:scale-105 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    </div>
                    <h3 class="text-lg font-serif-display font-medium text-[#203a31] mb-2">B2B & Private Label OEM</h3>
                    <p class="text-xs text-[#3d564c] leading-relaxed">
                        Turnkey contract manufacturing: custom batch compounding, bottle sourcing, label compliance, and barcode registration.
                    </p>
                </div>
                <div class="mt-6 pt-3 border-t border-stone-200 text-xs font-bold text-[#203a31]">
                    <a href="{{ route('services.b2b') }}" class="hover:underline">OEM Capabilities &rarr;</a>
                </div>
            </div>

            <div class="p-7 rounded-xs bg-[#f6f8f3] border border-stone-200 hover:border-[#203a31]/40 hover:shadow-md transition-all duration-300 flex flex-col justify-between group">
                <div>
                    <div class="w-12 h-12 rounded-xs bg-[#c0caa7] text-[#203a31] flex items-center justify-center mb-5 group-hover:scale-105 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                    </div>
                    <h3 class="text-lg font-serif-display font-medium text-[#203a31] mb-2">Consultancy & Advisory</h3>
                    <p class="text-xs text-[#3d564c] leading-relaxed">
                        Brand launch strategy, retail sales personnel training in Bihar, marketplace scaling, and statutory AYUSH dossiers.
                    </p>
                </div>
                <div class="mt-6 pt-3 border-t border-stone-200 text-xs font-bold text-[#203a31]">
                    <a href="{{ route('services.consultancy') }}" class="hover:underline">Advisory Services &rarr;</a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- =========================================================================
     DYNAMIC PRODUCT SHOWCASE: Featured Formulations
     ========================================================================= -->
<section class="py-20 bg-[#f6f8f3] border-t border-stone-200">
    <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12">
        
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
            <div>
                <span class="text-xs font-bold uppercase tracking-wider text-[#3d564c] bg-[#c0caa7]/50 px-3 py-1 rounded-xs border border-[#203a31]/20">
                    Live Data-Driven Catalog
                </span>
                <h2 class="text-3xl sm:text-4xl font-serif-display font-medium text-[#203a31] mt-2">
                    Featured Formulations & Formats
                </h2>
                <p class="text-xs sm:text-sm text-[#3d564c] mt-1 max-w-xl">
                    Dynamic formulations ready for consumer purchase or private label contract production. Clicking "Enquire Now" auto-populates your query.
                </p>
            </div>
            <a href="{{ route('products.index') }}" class="inline-flex items-center gap-2 text-xs sm:text-sm font-bold text-[#203a31] hover:underline">
                <span>View Full Catalog ({{ count($allProducts) }}+ Items)</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
        </div>

        <!-- Featured Products Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($featuredProducts as $product)
                <div class="bg-white rounded-xs border border-stone-200 overflow-hidden shadow-2xs hover:shadow-xl transition-all duration-300 flex flex-col group">
                    
                    <div class="relative h-64 overflow-hidden bg-stone-100">
                        <img src="{{ $product->image_url }}" alt="{{ $product->name }}"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        
                        <div class="absolute top-3 left-3 flex flex-wrap gap-1.5">
                            <span class="bg-[#263e32]/95 text-white text-[11px] font-medium px-2.5 py-0.5 rounded-xs">
                                {{ $product->category->name }}
                            </span>
                            @if($product->is_ayurvedic)
                                <span class="bg-[#525e3b] text-white text-[10px] font-bold px-2 py-0.5 rounded-xs">
                                    Ayurvedic
                                </span>
                            @endif
                        </div>

                        <div class="absolute bottom-3 right-3 bg-white/95 text-[#203a31] text-[11px] font-semibold px-2.5 py-1 rounded-xs shadow-xs border border-stone-200">
                            {{ $product->volume_size }}
                        </div>
                    </div>

                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <p class="text-xs font-semibold text-[#3d564c] tracking-wide mb-1">{{ $product->tagline }}</p>
                            <h3 class="text-lg font-serif-display font-medium text-[#203a31] group-hover:text-[#525e3b] transition line-clamp-1">
                                <a href="{{ route('products.show', $product->slug) }}">{{ $product->name }}</a>
                            </h3>
                            <p class="text-xs text-slate-600 mt-2 line-clamp-2 leading-relaxed">
                                {{ $product->short_description }}
                            </p>

                            <div class="mt-4 pt-3 border-t border-stone-100 space-y-1 text-[11px]">
                                <div class="text-slate-600">
                                    <strong class="text-slate-800">Actives:</strong> {{ Str::limit($product->key_ingredients, 60) }}
                                </div>
                                <div class="text-[#203a31] font-medium">
                                    <strong class="text-slate-800">OEM MOQ:</strong> {{ $product->moq }}
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 pt-4 border-t border-stone-100 flex items-center justify-between gap-3">
                            <a href="{{ route('products.show', $product->slug) }}" class="text-xs font-semibold text-slate-500 hover:text-[#203a31] transition underline">
                                Specifications
                            </a>
                            <button onclick="openEnquiryModal('{{ addslashes($product->name) }}', {{ $product->id }}, 'product')"
                                    class="bg-blue-600 hover:bg-blue-700 text-white text-xs font-medium px-4 py-2 rounded-xs transition flex items-center gap-1.5 shadow-xs cursor-pointer">
                                <span>Enquire Now</span>
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </button>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>

    </div>
</section>

<!-- =========================================================================
     GOVERNANCE SECTION: Board of Directors
     ========================================================================= -->
<section class="py-20 bg-white border-t border-stone-200">
    <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12">
        
        <div class="text-center max-w-3xl mx-auto space-y-3 mb-14">
            <span class="text-xs font-bold uppercase tracking-wider text-[#3d564c] bg-[#c0caa7]/40 px-3.5 py-1 rounded-xs border border-[#203a31]/15">
                Corporate Governance
            </span>
            <h2 class="text-3xl sm:text-4xl font-serif-display font-medium text-[#203a31]">
                Board of Directors
            </h2>
            <p class="text-xs sm:text-sm text-slate-600">
                SMECA INDUSTRY PRIVATE LIMITED is governed by four founding directors uniting regional botanical heritage with modern cosmetic manufacturing.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($directors as $director)
                <div class="bg-[#f6f8f3] rounded-xs p-7 border border-stone-200 hover:shadow-lg transition-all duration-300 flex flex-col justify-between text-center group">
                    <div>
                        <div class="w-18 h-18 mx-auto rounded-full bg-[#203a31] text-[#c0caa7] flex items-center justify-center font-serif-display font-medium text-2xl shadow-md group-hover:scale-105 transition-transform mb-4">
                            {{ $director['initials'] }}
                        </div>
                        <h3 class="text-lg font-serif-display font-medium text-[#203a31]">{{ $director['name'] }}</h3>
                        <p class="text-[11px] font-bold text-[#525e3b] uppercase tracking-wider mt-0.5">{{ $director['role'] }}</p>
                        <p class="text-xs text-slate-600 mt-3 leading-relaxed">
                            {{ $director['bio'] }}
                        </p>
                    </div>
                    <div class="mt-5 pt-3 border-t border-stone-200">
                        <span class="text-[11px] font-semibold text-slate-400">Director • SMECA Industry Pvt Ltd</span>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-10 text-center">
            <a href="{{ route('about') }}" class="inline-flex items-center gap-2 text-xs sm:text-sm font-semibold text-[#203a31] hover:underline">
                <span>Learn more about SMECA's history, Bihar operating hubs & governance</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>

    </div>
</section>

<!-- =========================================================================
     STANDARDS & CERTIFIED QUALITY STRIP
     ========================================================================= -->
<section class="py-14 bg-[#f6f8f3] border-t border-stone-200">
    <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            
            <div class="p-5 rounded-xs bg-white border border-stone-200">
                <div class="w-10 h-10 mx-auto rounded-full bg-[#c0caa7]/40 text-[#203a31] flex items-center justify-center mb-3">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                </div>
                <h4 class="text-xs font-serif-display font-medium text-[#203a31]">100% Ayurvedic Actives</h4>
                <p class="text-[11px] text-slate-500 mt-0.5">Classical botanical extracts</p>
            </div>

            <div class="p-5 rounded-xs bg-white border border-stone-200">
                <div class="w-10 h-10 mx-auto rounded-full bg-[#c0caa7]/40 text-[#203a31] flex items-center justify-center mb-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                </div>
                <h4 class="text-xs font-serif-display font-medium text-[#203a31]">cGMP Compliant</h4>
                <p class="text-[11px] text-slate-500 mt-0.5">Sterile batch compounding</p>
            </div>

            <div class="p-5 rounded-xs bg-white border border-stone-200">
                <div class="w-10 h-10 mx-auto rounded-full bg-[#c0caa7]/40 text-[#203a31] flex items-center justify-center mb-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                </div>
                <h4 class="text-xs font-serif-display font-medium text-[#203a31]">Bihar Operations</h4>
                <p class="text-[11px] text-slate-500 mt-0.5">Aurangabad & Gaya facilities</p>
            </div>

            <div class="p-5 rounded-xs bg-white border border-stone-200">
                <div class="w-10 h-10 mx-auto rounded-full bg-[#c0caa7]/40 text-[#203a31] flex items-center justify-center mb-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                </div>
                <h4 class="text-xs font-serif-display font-medium text-[#203a31]">Strict NDA Protocols</h4>
                <p class="text-[11px] text-slate-500 mt-0.5">Confidential OEM formulation</p>
            </div>

        </div>
    </div>
</section>

<!-- =========================================================================
     TESTIMONIALS SECTION: Partner & Consumer Trust
     ========================================================================= -->
<section id="testimonials" class="py-20 bg-white border-t border-stone-200">
    <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12">
        
        <div class="text-center max-w-3xl mx-auto space-y-3 mb-14">
            <span class="text-xs font-bold uppercase tracking-wider text-[#3d564c] bg-[#c0caa7]/40 px-3.5 py-1 rounded-xs border border-[#203a31]/15">
                Client & Partner Voices
            </span>
            <h2 class="text-3xl sm:text-4xl font-serif-display font-medium text-[#203a31]">
                Endorsed by Brands, Stockists & Consumers
            </h2>
            <p class="text-xs sm:text-sm text-slate-600">
                From turnkey OEM cosmetics batches to everyday Ayurvedic skincare routines, hear how SMECA delivers verified quality.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Testimonial 1: B2B OEM Client -->
            <div class="bg-[#f6f8f3] p-8 rounded-xs border border-stone-200 hover:shadow-md transition-all duration-300 flex flex-col justify-between">
                <div>
                    <!-- Star Rating -->
                    <div class="flex items-center gap-1 text-amber-500 mb-4">
                        @for($i = 0; $i < 5; $i++)
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        @endfor
                    </div>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed italic mb-6">
                        "SMECA compounded and packaged our flagship Kumkumadi facial serum under private label. Their batch reproducibility, sterile cGMP filling, and active herbal stability exceeded our dermatological benchmarks. Exceptional turnkey partner."
                    </p>
                </div>
                <div class="pt-4 border-t border-stone-200/80 flex items-center justify-between">
                    <div>
                        <h4 class="text-sm font-serif-display font-medium text-[#203a31]">Dr. Ananya Sen</h4>
                        <p class="text-[11px] text-slate-500">Founder, Vedic Botanica D2C (Delhi)</p>
                    </div>
                    <span class="text-[10px] font-semibold uppercase tracking-wider text-[#203a31] bg-[#c0caa7]/30 px-2.5 py-0.5 rounded-xs border border-[#203a31]/15">
                        OEM Brand
                    </span>
                </div>
            </div>

            <!-- Testimonial 2: Super Stockist / Distributor -->
            <div class="bg-[#f6f8f3] p-8 rounded-xs border border-stone-200 hover:shadow-md transition-all duration-300 flex flex-col justify-between">
                <div>
                    <div class="flex items-center gap-1 text-amber-500 mb-4">
                        @for($i = 0; $i < 5; $i++)
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        @endfor
                    </div>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed italic mb-6">
                        "Distributing SMECA's herbal haircare and Ayurvedic pain balms across Gaya, Aurangabad, and Patna has yielded phenomenal retail repeat demand. Prompt freight dispatch and clear wholesale trade margins make them a joy to work with."
                    </p>
                </div>
                <div class="pt-4 border-t border-stone-200/80 flex items-center justify-between">
                    <div>
                        <h4 class="text-sm font-serif-display font-medium text-[#203a31]">Rajesh Kumar Verma</h4>
                        <p class="text-[11px] text-slate-500">MD, Magadh Distribution (Bihar)</p>
                    </div>
                    <span class="text-[10px] font-semibold uppercase tracking-wider text-[#203a31] bg-[#c0caa7]/30 px-2.5 py-0.5 rounded-xs border border-[#203a31]/15">
                        Super Stockist
                    </span>
                </div>
            </div>

            <!-- Testimonial 3: B2C Customer -->
            <div class="bg-[#f6f8f3] p-8 rounded-xs border border-stone-200 hover:shadow-md transition-all duration-300 flex flex-col justify-between">
                <div>
                    <div class="flex items-center gap-1 text-amber-500 mb-4">
                        @for($i = 0; $i < 5; $i++)
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        @endfor
                    </div>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed italic mb-6">
                        "The SMECA Skincare Box with the Kumkumadi Face Cream and Hydra Cleanser completely balanced my skin. Zero synthetic burning, pure botanical nourishment, and my skin feels deeply supple and glowing every morning."
                    </p>
                </div>
                <div class="pt-4 border-t border-stone-200/80 flex items-center justify-between">
                    <div>
                        <h4 class="text-sm font-serif-display font-medium text-[#203a31]">Pooja Mishra</h4>
                        <p class="text-[11px] text-slate-500">Skincare Enthusiast, Patna</p>
                    </div>
                    <span class="text-[10px] font-semibold uppercase tracking-wider text-[#203a31] bg-[#c0caa7]/30 px-2.5 py-0.5 rounded-xs border border-[#203a31]/15">
                        Verified Buyer
                    </span>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- =========================================================================
     FAQ SECTION: Product, Manufacturing & Inquiry Clarifications
     ========================================================================= -->
<section id="faq" class="py-20 bg-[#f6f8f3] border-t border-stone-200">
    <div class="max-w-4xl mx-auto px-6 sm:px-10 lg:px-12">
        
        <div class="text-center max-w-3xl mx-auto space-y-3 mb-14">
            <span class="text-xs font-bold uppercase tracking-wider text-[#3d564c] bg-[#c0caa7]/40 px-3.5 py-1 rounded-xs border border-[#203a31]/15">
                Got Questions?
            </span>
            <h2 class="text-3xl sm:text-4xl font-serif-display font-medium text-[#203a31]">
                Frequently Asked Questions
            </h2>
            <p class="text-xs sm:text-sm text-slate-600">
                Find answers regarding our Ayurvedic and cosmetic formulations, Bihar operations, private label contracts, and enquiry system.
            </p>
        </div>

        <div class="space-y-4">
            
            <!-- FAQ 1 -->
            <details class="group bg-white rounded-xs border border-stone-200 p-5 sm:p-6 transition-all duration-200 open:shadow-xs">
                <summary class="flex items-center justify-between cursor-pointer list-none text-left">
                    <h3 class="text-sm sm:text-base font-serif-display font-medium text-[#203a31] pr-4">
                        What product categories does SMECA Industry Private Limited formulate and manufacture?
                    </h3>
                    <span class="w-6 h-6 rounded-full bg-[#f6f8f3] border border-stone-300 flex items-center justify-center shrink-0 text-[#203a31] transition-transform duration-200 group-open:rotate-180">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </span>
                </summary>
                <div class="mt-4 pt-3 border-t border-stone-200 text-xs sm:text-sm text-slate-600 leading-relaxed">
                    SMECA specializes in ethical personal care across six core verticals: <strong>Ayurvedic classical medicines</strong> (Kshirpak Tailams, herbal lepams), <strong>Advanced Skincare</strong> (Vitamin C serums, hydragels, moisturisers), <strong>Haircare</strong> (Bhringraj & Red Onion oils, sulfate-free cleansers), <strong>Natural Perfumes & Attars</strong>, and <strong>Wellness Balms</strong>. Custom compounds can also be formulated upon request.
                </div>
            </details>

            <!-- FAQ 2 -->
            <details class="group bg-white rounded-xs border border-stone-200 p-5 sm:p-6 transition-all duration-200 open:shadow-xs">
                <summary class="flex items-center justify-between cursor-pointer list-none text-left">
                    <h3 class="text-sm sm:text-base font-serif-display font-medium text-[#203a31] pr-4">
                        How does the dynamic Product Enquiry system work?
                    </h3>
                    <span class="w-6 h-6 rounded-full bg-[#f6f8f3] border border-stone-300 flex items-center justify-center shrink-0 text-[#203a31] transition-transform duration-200 group-open:rotate-180">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </span>
                </summary>
                <div class="mt-4 pt-3 border-t border-stone-200 text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Every product card on the website features an <strong>Enquire Now</strong> button. Clicking this automatically carries the product name and code into the inquiry modal, so you never need to re-type details. Once submitted, your inquiry is securely recorded in our Query Collection System, and our sales desk responds within 24 business hours.
                </div>
            </details>

            <!-- FAQ 3 -->
            <details class="group bg-white rounded-xs border border-stone-200 p-5 sm:p-6 transition-all duration-200 open:shadow-xs">
                <summary class="flex items-center justify-between cursor-pointer list-none text-left">
                    <h3 class="text-sm sm:text-base font-serif-display font-medium text-[#203a31] pr-4">
                        Does SMECA offer Third-Party Manufacturing (OEM) and Private Labeling?
                    </h3>
                    <span class="w-6 h-6 rounded-full bg-[#f6f8f3] border border-stone-300 flex items-center justify-center shrink-0 text-[#203a31] transition-transform duration-200 group-open:rotate-180">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </span>
                </summary>
                <div class="mt-4 pt-3 border-t border-stone-200 text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Yes. We provide complete turnkey OEM solutions for beauty startups, established direct-to-consumer (D2C) brands, and institutional stockists. This covers raw herb sourcing, custom lab formulation compounding, cGMP sterile filling, stability testing, primary packaging, label compliance, and statutory AYUSH documentation, with flexible low minimum order quantities (MOQs).
                </div>
            </details>

            <!-- FAQ 4 -->
            <details class="group bg-white rounded-xs border border-stone-200 p-5 sm:p-6 transition-all duration-200 open:shadow-xs">
                <summary class="flex items-center justify-between cursor-pointer list-none text-left">
                    <h3 class="text-sm sm:text-base font-serif-display font-medium text-[#203a31] pr-4">
                        Where are your manufacturing and operating hubs located in Bihar?
                    </h3>
                    <span class="w-6 h-6 rounded-full bg-[#f6f8f3] border border-stone-300 flex items-center justify-center shrink-0 text-[#203a31] transition-transform duration-200 group-open:rotate-180">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </span>
                </summary>
                <div class="mt-4 pt-3 border-t border-stone-200 text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Our registered corporate operations and primary formulation laboratories are centered in the <strong>Aurangabad and Gaya districts of Bihar, India</strong>. This strategic hub enables direct partnerships with regional herb farmers and solar drying yards while connecting directly to national rail and road freight corridors.
                </div>
            </details>

            <!-- FAQ 5 -->
            <details class="group bg-white rounded-xs border border-stone-200 p-5 sm:p-6 transition-all duration-200 open:shadow-xs">
                <summary class="flex items-center justify-between cursor-pointer list-none text-left">
                    <h3 class="text-sm sm:text-base font-serif-display font-medium text-[#203a31] pr-4">
                        How can retail pharmacies, beauty stores, or distributors partner with SMECA?
                    </h3>
                    <span class="w-6 h-6 rounded-full bg-[#f6f8f3] border border-stone-300 flex items-center justify-center shrink-0 text-[#203a31] transition-transform duration-200 group-open:rotate-180">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </span>
                </summary>
                <div class="mt-4 pt-3 border-t border-stone-200 text-xs sm:text-sm text-slate-600 leading-relaxed">
                    We welcome regional stockists and distributor partners across Bihar and Northern India. We support our channel partners with competitive wholesale dealer margins, fast dispatch schedules, point-of-sale marketing collateral, and structured staff product training. You can submit a partnership request via our <a href="{{ route('contact.index') }}" class="text-[#203a31] font-bold underline">Contact Page</a>.
                </div>
            </details>

            <!-- FAQ 6 -->
            <details class="group bg-white rounded-xs border border-stone-200 p-5 sm:p-6 transition-all duration-200 open:shadow-xs">
                <summary class="flex items-center justify-between cursor-pointer list-none text-left">
                    <h3 class="text-sm sm:text-base font-serif-display font-medium text-[#203a31] pr-4">
                        Are all SMECA formulations 100% safe, toxin-free, and cruelty-free?
                    </h3>
                    <span class="w-6 h-6 rounded-full bg-[#f6f8f3] border border-stone-300 flex items-center justify-center shrink-0 text-[#203a31] transition-transform duration-200 group-open:rotate-180">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </span>
                </summary>
                <div class="mt-4 pt-3 border-t border-stone-200 text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Absolutely. Every product batch is formulated without harmful parabens, phthalates, synthetic mineral oils, or prohibited harsh sulfates. We perform rigorous analytical tests for heavy metals, microbial safety, and pH compatibility, and never test on animals.
                </div>
            </details>

        </div>

    </div>
</section>

<!-- =========================================================================
     PARTNERSHIP & INQUIRY CALL-TO-ACTION BANNER
     ========================================================================= -->
<section class="py-16 bg-white border-t border-stone-200">
    <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12">
        <div class="bg-[#f6f8f3] border border-stone-200 rounded-xs p-8 sm:p-12 flex flex-col lg:flex-row items-center justify-between gap-8 text-center lg:text-left">
            <div class="space-y-2 max-w-2xl">
                <span class="text-xs font-bold uppercase tracking-wider text-[#3d564c] bg-[#c0caa7]/40 px-3 py-1 rounded-xs border border-[#203a31]/15 inline-block">
                    Get Started Today
                </span>
                <h3 class="text-2xl sm:text-3xl font-serif-display font-medium text-[#203a31]">
                    Ready to Formulate, Distribute, or Order?
                </h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                    Connect directly with our Bihar operational team for custom quotes, lab sample requests, wholesale trade distribution, or retail box inquiries.
                </p>
            </div>
            <div class="shrink-0 flex flex-col sm:flex-row gap-3 w-full lg:w-auto">
                <button onclick="openEnquiryModal('General Business Requirement', null, 'b2b_oem')"
                        class="bg-blue-600 hover:bg-blue-700 text-white text-xs sm:text-sm font-medium px-7 py-3.5 rounded-xs tracking-wide shadow-xs transition cursor-pointer">
                    Submit Product Enquiry &rarr;
                </button>
                <a href="{{ route('contact.index') }}" 
                   class="bg-white hover:bg-stone-50 text-[#203a31] text-xs sm:text-sm font-medium px-6 py-3.5 rounded-xs tracking-wide border border-stone-300 transition text-center">
                    Contact Corporate Desk
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
