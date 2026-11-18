@extends('layouts.app')

@section('title', 'SMECA Box for Beautiful Skin | SMECA INDUSTRY PRIVATE LIMITED')

@section('content')

<!-- =========================================================================
     HERO SECTION: Exactly matching the uploaded reference design
     Color: Soft Organic Sage (#c5d2b8) | Text: Deep Forest (#203a31)
     ========================================================================= -->
<section class="relative bg-[#c5d2b8] overflow-hidden pt-6 pb-12 sm:pt-10 sm:pb-20">
    <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12 relative">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center min-h-[580px]">
            
            <!-- Left Column: Copy & Social Icons (Matching Image) -->
            <div class="lg:col-span-5 space-y-6 sm:space-y-7 z-10 text-left">
                
                <!-- Main Heading -->
                <h1 class="text-4xl sm:text-6xl xl:text-7xl font-serif-display font-medium text-[#203a31] tracking-[-0.03em] leading-[1.08]">
                    SMECA Box for <br>
                    Beautiful Skin
                </h1>

                <!-- Subtitle Description -->
                <p class="text-sm sm:text-base text-[#3d564c] font-normal leading-relaxed max-w-sm">
                    A set of organic cosmetics and Ayurvedic formulations for everyday skin treatment.
                </p>

                <!-- Pricing Line -->
                <p class="text-sm sm:text-base text-[#3d564c] font-medium pt-1">
                    Buy a perfect skincare box for only 
                    <span class="font-bold text-xl sm:text-2xl text-[#203a31] ml-1">₹1,499.00</span>
                    <span class="text-xs text-[#3d564c]/80 block sm:inline sm:ml-2">(Wholesale & OEM Available)</span>
                </p>

                <!-- Action Button -->
                <div class="pt-2">
                    <button onclick="openEnquiryModal('SMECA Skincare Box', null, 'product')" 
                            class="bg-[#203a31] hover:bg-[#152721] text-white text-xs sm:text-sm font-medium px-7 py-3.5 rounded-xs tracking-wide shadow-md transition duration-200">
                        Order SMECA Box Now &rarr;
                    </button>
                </div>

                <!-- Social & Trust Icons (4 square outline icons matching the image) -->
                <div class="flex items-center gap-2.5 pt-6 sm:pt-8">
                    <!-- Twitter / X -->
                    <a href="#" aria-label="Twitter" class="w-8 h-8 rounded-xs border border-[#203a31]/30 hover:border-[#203a31] hover:bg-[#203a31] hover:text-[#c5d2b8] text-[#203a31] flex items-center justify-center text-xs transition">
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                    </a>
                    <!-- Facebook -->
                    <a href="#" aria-label="Facebook" class="w-8 h-8 rounded-xs border border-[#203a31]/30 hover:border-[#203a31] hover:bg-[#203a31] hover:text-[#c5d2b8] text-[#203a31] flex items-center justify-center text-xs transition">
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M9.198 21.5h4v-8.01h2.604l.39-3.024h-2.994V8.535c0-.875.244-1.472 1.503-1.472H16.3V4.356c-.767-.102-1.636-.156-2.585-.156-2.557 0-4.307 1.561-4.307 4.427v2.441H6.75v3.024h2.448V21.5z"/></svg>
                    </a>
                    <!-- YouTube -->
                    <a href="#" aria-label="YouTube" class="w-8 h-8 rounded-xs border border-[#203a31]/30 hover:border-[#203a31] hover:bg-[#203a31] hover:text-[#c5d2b8] text-[#203a31] flex items-center justify-center text-xs transition">
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                    <!-- Instagram -->
                    <a href="#" aria-label="Instagram" class="w-8 h-8 rounded-xs border border-[#203a31]/30 hover:border-[#203a31] hover:bg-[#203a31] hover:text-[#c5d2b8] text-[#203a31] flex items-center justify-center text-xs transition">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg>
                    </a>

                    <span class="ml-3 text-[11px] text-[#3d564c] font-medium hidden sm:inline">
                        Bihar Manufacturing • Aurangabad & Gaya
                    </span>
                </div>

            </div>

            <!-- Right Column: 3D Cosmetic Packaging Boxes & Botanical Leaves (Matching Image) -->
            <div class="lg:col-span-7 relative flex items-center justify-center py-6 lg:py-0 select-none">
                
                <!-- Main Isometric Packaging Stage -->
                <div class="relative w-full max-w-[580px] h-[380px] sm:h-[440px]">
                    
                    <!-- Scattered Floating Leaves with Realistic Soft Drop Shadows (Matching Image) -->
                    <!-- Leaf 1: Top Left -->
                    <div class="absolute -top-3 left-10 w-12 sm:w-16 h-12 sm:h-16 z-30 pointer-events-none animate-float-1" 
                         style="filter: drop-shadow(4px 10px 10px rgba(20,37,31,0.22));">
                        <svg viewBox="0 0 100 100" class="w-full h-full text-[#38553d] transform -rotate-45" fill="currentColor">
                            <path d="M10,80 Q35,20 85,15 Q75,70 20,85 Z" />
                            <path d="M10,80 Q50,45 85,15" stroke="#253a29" stroke-width="3" fill="none" />
                        </svg>
                    </div>

                    <!-- Leaf 2: Bottom Center -->
                    <div class="absolute bottom-2 left-28 w-14 sm:w-18 h-14 sm:h-18 z-30 pointer-events-none animate-float-2" 
                         style="filter: drop-shadow(3px 8px 12px rgba(20,37,31,0.25));">
                        <svg viewBox="0 0 100 100" class="w-full h-full text-[#426048] transform rotate-12" fill="currentColor">
                            <path d="M15,85 Q40,25 90,20 Q80,75 25,90 Z" />
                            <path d="M15,85 Q55,50 90,20" stroke="#2a3f2f" stroke-width="3" fill="none" />
                        </svg>
                    </div>

                    <!-- Leaf 3: Top Right -->
                    <div class="absolute -top-4 right-4 w-16 sm:w-20 h-16 sm:h-20 z-10 pointer-events-none" 
                         style="filter: drop-shadow(4px 12px 14px rgba(20,37,31,0.2));">
                        <svg viewBox="0 0 100 100" class="w-full h-full text-[#2e4733] transform rotate-45" fill="currentColor">
                            <path d="M10,85 Q35,15 90,10 Q80,75 20,90 Z" />
                            <path d="M10,85 Q50,45 90,10" stroke="#1d2e21" stroke-width="3" fill="none" />
                        </svg>
                    </div>

                    <!-- ==========================================
                         3D PERSPECTIVE COMPONENT: The Olive Green Box
                         ========================================== -->
                    <div class="absolute inset-0 flex items-center justify-center">
                        
                        <!-- Box 1: Tilted Closed Lid Box (Top-Left Angle) -->
                        <div class="absolute top-2 left-4 sm:left-8 w-64 sm:w-72 h-44 sm:h-48 bg-[#526444] rounded-sm transform -rotate-12 skew-y-3 shadow-[15px_25px_40px_rgba(20,37,31,0.35)] border-t border-l border-white/20 flex flex-col items-center justify-center p-6 text-center">
                            <!-- Subtle box debossed logo -->
                            <div class="opacity-85 text-white/90">
                                <div class="text-xl sm:text-2xl font-serif-display font-medium tracking-tight">SMECA</div>
                                <div class="text-[8px] tracking-[0.25em] uppercase font-semibold text-white/70 -mt-0.5">PROFESSIONAL</div>
                                <div class="text-[9px] text-white/60 tracking-wider mt-1 uppercase">Organic Beauty Set</div>
                            </div>
                        </div>

                        <!-- Box 2: Open Presentation Tier with Cosmetics Products (Bottom-Right Angle) -->
                        <div class="absolute bottom-4 right-0 sm:right-4 w-72 sm:w-84 h-52 sm:h-56 bg-[#5f744e] rounded-sm transform -rotate-12 skew-y-3 shadow-[25px_35px_50px_rgba(20,37,31,0.38)] border-t border-l border-white/25 p-4 flex items-center justify-between gap-3">
                            
                            <!-- Cosmetic Item 1: Amber Glass Jar with Cream & Label -->
                            <div class="relative w-24 sm:w-28 h-28 sm:h-32 rounded-full bg-gradient-to-b from-[#2e1d13] via-[#4d3120] to-[#25170f] p-1 shadow-2xl flex flex-col items-center justify-center transform hover:scale-105 transition-transform duration-300 cursor-pointer"
                                 onclick="openEnquiryModal('SMECA Kumkumadi Miracle Cream Jar', 1, 'product')">
                                <!-- Dark Jar Lid -->
                                <div class="w-16 sm:w-20 h-4 bg-[#1a110a] rounded-sm border-b border-[#3d2719] shadow-xs"></div>
                                <!-- Cream Amber Body & Label -->
                                <div class="w-full flex-1 rounded-b-full bg-[#52331f] flex items-center justify-center p-1 relative overflow-hidden">
                                    <div class="w-full bg-[#fbf9f2] py-2 px-1 text-center shadow-xs">
                                        <div class="text-[8px] font-bold text-[#203a31] uppercase tracking-wider leading-none">SMECA</div>
                                        <div class="text-[6.5px] text-[#4d3120] uppercase tracking-tight mt-0.5 font-semibold">Kumkumadi Balm</div>
                                        <div class="text-[5.5px] text-stone-500 mt-0.5">50g • 100% Herbal</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Cosmetic Item 2: White Skincare Squeeze Tube -->
                            <div class="relative w-18 sm:w-22 h-36 sm:h-42 bg-gradient-to-b from-[#ffffff] via-[#f7f6f0] to-[#e8e6dc] rounded-t-lg rounded-b-md shadow-2xl p-1 flex flex-col justify-between items-center transform hover:scale-105 transition-transform duration-300 cursor-pointer"
                                 onclick="openEnquiryModal('SMECA Phyto Cleanser Tube', 2, 'product')">
                                <!-- Tube Crimped Top -->
                                <div class="w-full h-2 border-b border-stone-300 bg-stone-100 flex items-center justify-center">
                                    <div class="w-4 h-0.5 bg-stone-300"></div>
                                </div>
                                <!-- Tube Label -->
                                <div class="text-center py-2 px-1 w-full">
                                    <div class="text-[8px] font-bold text-[#203a31] tracking-wider uppercase font-serif-display">SMECA</div>
                                    <div class="text-[6px] text-[#3d564c] uppercase font-semibold mt-0.5">Hydra Cleanser</div>
                                    <div class="text-[5.5px] text-stone-400 mt-1">Aloe & Green Tea</div>
                                </div>
                                <!-- Dark Bronze Cap -->
                                <div class="w-10 sm:w-12 h-5 bg-[#251810] rounded-b-xs border-t border-[#3e271a]"></div>
                            </div>

                            <!-- Cosmetic Item 3: Slim Eye / Serum Tube -->
                            <div class="relative w-10 sm:w-12 h-28 sm:h-32 bg-gradient-to-b from-[#ffffff] to-[#e8e6dc] rounded-t-md rounded-b-xs shadow-xl p-0.5 flex flex-col justify-between items-center transform hover:scale-105 transition-transform duration-300 cursor-pointer"
                                 onclick="openEnquiryModal('SMECA Restorative Eye Elixir Tube', 3, 'product')">
                                <div class="w-full h-1.5 border-b border-stone-300 bg-stone-200"></div>
                                <div class="text-center py-1">
                                    <div class="text-[6px] font-bold text-[#203a31] font-serif-display">SMECA</div>
                                    <div class="text-[5px] text-[#3d564c] uppercase">Eye Serum</div>
                                </div>
                                <div class="w-6 sm:w-7 h-4 bg-[#251810] rounded-b-xs"></div>
                            </div>

                        </div>

                    </div>

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
            <span class="text-xs font-bold uppercase tracking-wider text-[#3d564c] bg-[#c5d2b8]/40 px-3.5 py-1 rounded-xs border border-[#203a31]/15">
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
            
            <div class="p-7 rounded-sm bg-[#f6f8f3] border border-stone-200 hover:border-[#203a31]/40 hover:shadow-md transition-all duration-300 flex flex-col justify-between group">
                <div>
                    <div class="w-12 h-12 rounded-xs bg-[#c5d2b8] text-[#203a31] flex items-center justify-center mb-5 group-hover:scale-105 transition-transform">
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

            <div class="p-7 rounded-sm bg-[#f6f8f3] border border-stone-200 hover:border-[#203a31]/40 hover:shadow-md transition-all duration-300 flex flex-col justify-between group">
                <div>
                    <div class="w-12 h-12 rounded-xs bg-[#c5d2b8] text-[#203a31] flex items-center justify-center mb-5 group-hover:scale-105 transition-transform">
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

            <div class="p-7 rounded-sm bg-[#f6f8f3] border border-stone-200 hover:border-[#203a31]/40 hover:shadow-md transition-all duration-300 flex flex-col justify-between group">
                <div>
                    <div class="w-12 h-12 rounded-xs bg-[#c5d2b8] text-[#203a31] flex items-center justify-center mb-5 group-hover:scale-105 transition-transform">
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

            <div class="p-7 rounded-sm bg-[#f6f8f3] border border-stone-200 hover:border-[#203a31]/40 hover:shadow-md transition-all duration-300 flex flex-col justify-between group">
                <div>
                    <div class="w-12 h-12 rounded-xs bg-[#c5d2b8] text-[#203a31] flex items-center justify-center mb-5 group-hover:scale-105 transition-transform">
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
                <span class="text-xs font-bold uppercase tracking-wider text-[#3d564c] bg-[#c5d2b8]/50 px-3 py-1 rounded-xs border border-[#203a31]/20">
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
                            <span class="bg-[#203a31]/95 text-white text-[11px] font-medium px-2.5 py-0.5 rounded-xs">
                                {{ $product->category->name }}
                            </span>
                            @if($product->is_ayurvedic)
                                <span class="bg-[#526444] text-white text-[10px] font-bold px-2 py-0.5 rounded-xs">
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
                            <h3 class="text-lg font-serif-display font-medium text-[#203a31] group-hover:text-[#526444] transition line-clamp-1">
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
                                    class="bg-[#203a31] hover:bg-[#152721] text-white text-xs font-medium px-4 py-2 rounded-xs transition flex items-center gap-1.5 shadow-xs">
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
            <span class="text-xs font-bold uppercase tracking-wider text-[#3d564c] bg-[#c5d2b8]/40 px-3.5 py-1 rounded-xs border border-[#203a31]/15">
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
                        <div class="w-18 h-18 mx-auto rounded-full bg-[#203a31] text-[#c5d2b8] flex items-center justify-center font-serif-display font-medium text-2xl shadow-md group-hover:scale-105 transition-transform mb-4">
                            {{ $director['initials'] }}
                        </div>
                        <h3 class="text-lg font-serif-display font-medium text-[#203a31]">{{ $director['name'] }}</h3>
                        <p class="text-[11px] font-bold text-[#526444] uppercase tracking-wider mt-0.5">{{ $director['role'] }}</p>
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

@endsection
