@extends('layouts.app')

@section('title', 'SMECA INDUSTRY PRIVATE LIMITED | Botanical Cosmetics & Ayurvedic Formulations')

@section('content')

<!-- =========================================================================
     AWARD-WINNING HERO SECTION: Botanical Science Meets Haute Ayurvedic Formulation
     ========================================================================= -->
<section class="relative bg-[#faf9f6] overflow-hidden pt-8 pb-16 sm:pt-14 sm:pb-24 border-b border-stone-200/70">
    
    <!-- Atmospheric Ambient Lighting & Glows -->
    <div class="absolute -top-32 right-1/4 w-[600px] h-[600px] bg-gradient-to-br from-emerald-100/60 via-amber-50/40 to-transparent rounded-full blur-3xl pointer-events-none -z-10"></div>
    <div class="absolute bottom-0 -left-20 w-[500px] h-[500px] bg-gradient-to-tr from-emerald-200/30 via-stone-100 to-transparent rounded-full blur-3xl pointer-events-none -z-10"></div>
    <div class="absolute inset-0 bg-grain pointer-events-none opacity-40 -z-10"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-10 items-center">
            
            <!-- Left Column: Editorial Value Proposition -->
            <div class="lg:col-span-7 space-y-7 text-left">
                
                <!-- Haute Eyebrow Pill -->
                <div class="inline-flex items-center gap-2.5 bg-white/90 backdrop-blur-md text-[#081c12] border border-stone-200/80 px-4 py-1.5 rounded-full shadow-[0_2px_12px_rgba(0,0,0,0.03)] text-xs font-semibold tracking-wide">
                    <span class="w-2 h-2 rounded-full bg-emerald-600 animate-pulse"></span>
                    <span class="text-emerald-950 font-bold uppercase tracking-wider text-[10px]">Est. Bihar, India</span>
                    <span class="text-stone-300">•</span>
                    <span class="text-slate-600 text-[11px]">Aurangabad & Gaya Operational Hubs</span>
                </div>

                <!-- Grand Magazine Headline -->
                <div class="space-y-3">
                    <h1 class="text-4xl sm:text-6xl xl:text-[4.2rem] font-medium tracking-[-0.03em] text-[#081c12] font-serif-display leading-[1.08]">
                        Where Sacred <span class="italic font-normal text-emerald-800 font-cormorant">Ayurveda</span> Meets Clinical Cosmetic <span class="relative whitespace-nowrap">
                            <span class="relative z-10 text-emerald-950">Precision.</span>
                            <span class="absolute bottom-1 left-0 w-full h-3 bg-amber-200/60 -rotate-1 rounded-sm -z-10"></span>
                        </span>
                    </h1>
                    <p class="text-base sm:text-lg text-slate-600 font-normal leading-relaxed max-w-2xl pt-2">
                        <strong>SMECA INDUSTRY PRIVATE LIMITED</strong> architects classical Ayurvedic preparations, phyto-active skincare serums, botanical haircare, and bespoke fragrances. Operating from Bihar's premier manufacturing corridor to power discerning consumer rituals (B2C) and large-scale third-party contract manufacturing (B2B/OEM).
                    </p>
                </div>

                <!-- Interactive Dual CTAs -->
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 pt-2">
                    <!-- Primary CTA -->
                    <a href="{{ route('products.index') }}" 
                       class="relative overflow-hidden group inline-flex justify-center items-center gap-2.5 bg-[#081c12] hover:bg-[#0f2e1e] text-white px-7 py-4 rounded-2xl font-bold text-xs sm:text-sm tracking-wide shadow-xl shadow-emerald-950/20 hover:shadow-2xl transition-all duration-300 border border-emerald-800/40">
                        <span class="absolute inset-0 w-1/2 h-full bg-gradient-to-r from-transparent via-white/20 to-transparent skew-x-12 -translate-x-full group-hover:translate-x-[300%] transition-transform duration-1000"></span>
                        <span class="text-amber-200">Explore Dynamic Catalog</span>
                        <span class="text-[10px] bg-emerald-800/80 text-amber-300 px-2 py-0.5 rounded-full font-bold">12+ Formulations</span>
                        <svg class="w-4 h-4 text-amber-300 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>

                    <!-- Secondary B2B CTA -->
                    <button onclick="openEnquiryModal('OEM Contract Manufacturing Consultation', null, 'b2b_oem')" 
                            class="inline-flex justify-center items-center gap-2 bg-white hover:bg-stone-50 text-slate-900 border border-stone-300/80 px-6 py-4 rounded-2xl font-bold text-xs sm:text-sm shadow-xs hover:shadow-md transition-all duration-200 group">
                        <svg class="w-4 h-4 text-emerald-800 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                        <span>B2B & Private Label OEM</span>
                    </button>
                </div>

                <!-- Verified Metrics Strip -->
                <div class="pt-6 border-t border-stone-200/90 grid grid-cols-3 gap-6 text-left">
                    <div class="space-y-0.5">
                        <div class="text-2xl sm:text-3xl font-extrabold text-[#081c12] font-serif-display tracking-tight">100%</div>
                        <div class="text-[11px] font-semibold text-slate-500 uppercase tracking-wider">Ayurvedic Authenticity</div>
                        <p class="text-[10px] text-slate-400">Classical Tailam & Lepam</p>
                    </div>
                    <div class="space-y-0.5">
                        <div class="text-2xl sm:text-3xl font-extrabold text-[#081c12] font-serif-display tracking-tight">cGMP</div>
                        <div class="text-[11px] font-semibold text-slate-500 uppercase tracking-wider">Cleanroom Production</div>
                        <p class="text-[10px] text-slate-400">Sterile Batch Filling</p>
                    </div>
                    <div class="space-y-0.5">
                        <div class="text-2xl sm:text-3xl font-extrabold text-[#081c12] font-serif-display tracking-tight">2 Districts</div>
                        <div class="text-[11px] font-semibold text-slate-500 uppercase tracking-wider">Aurangabad & Gaya</div>
                        <p class="text-[10px] text-slate-400">Sourcing & Logistics Nodes</p>
                    </div>
                </div>

            </div>

            <!-- Right Column: Interactive Multi-Layered Hero Piece -->
            <div class="lg:col-span-5 relative">
                
                <!-- Central Master Exhibition Card -->
                <div class="relative bg-white rounded-[2.5rem] p-3 sm:p-4 shadow-[0_20px_50px_rgba(15,46,30,0.12)] border border-stone-200/80">
                    
                    <!-- Main Imagery with Luxury Overlay -->
                    <div class="relative rounded-3xl overflow-hidden h-[380px] sm:h-[420px] bg-[#0b2417] group">
                        <img id="heroShowcaseImage" 
                             src="https://images.unsplash.com/photo-1608248597359-22a36b4d3701?auto=format&fit=crop&w=1200&q=85" 
                             alt="SMECA Flagship Formulation" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        
                        <div class="absolute inset-0 bg-gradient-to-t from-[#081c12]/95 via-[#081c12]/30 to-transparent"></div>

                        <!-- Top Floating Certification Pill -->
                        <div class="absolute top-4 left-4 bg-white/95 backdrop-blur-md px-3 py-1.5 rounded-xl border border-white/60 shadow-md flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-emerald-600"></span>
                            <span class="text-[10px] font-bold uppercase tracking-wider text-slate-800">Master Formulation #01</span>
                        </div>

                        <!-- Bottom Card Metadata -->
                        <div class="absolute bottom-5 left-5 right-5 text-white space-y-2">
                            <div class="flex items-center justify-between">
                                <span class="text-[10px] font-bold text-amber-300 uppercase tracking-widest bg-amber-400/20 backdrop-blur-md px-2.5 py-0.5 rounded-full border border-amber-300/30">
                                    Flagship Elixir
                                </span>
                                <span class="text-[11px] font-semibold text-emerald-200">B2C & OEM Available</span>
                            </div>
                            <h3 id="heroShowcaseTitle" class="text-xl sm:text-2xl font-bold font-serif-display text-white">
                                Kumkumadi Miraculous Beauty Tailam
                            </h3>
                            <p id="heroShowcaseDesc" class="text-xs text-emerald-100/90 line-clamp-2">
                                24 Classical Botanicals Infused with Kashmiri Saffron & Pure Mysore Chandana for Cellular Complexion Radiance.
                            </p>
                            
                            <div class="pt-2 flex items-center justify-between">
                                <span class="text-xs font-bold text-amber-300">MOQ: 250 Units / 50L Bulk</span>
                                <button onclick="openEnquiryModal('Kumkumadi Beauty Tailam', 1, 'product')" 
                                        class="bg-white/20 hover:bg-white text-white hover:text-emerald-950 text-xs font-bold px-3.5 py-1.5 rounded-xl backdrop-blur-md transition shadow-xs">
                                    Instant Enquiry &rarr;
                                </button>
                            </div>
                        </div>

                    </div>

                    <!-- Interactive Phyto-Active Ingredient Selector (Awwwards-Level Micro Interaction) -->
                    <div class="p-3 sm:p-4 bg-stone-50/90 rounded-2xl border border-stone-200/70 mt-3 space-y-2.5">
                        <div class="flex items-center justify-between">
                            <span class="text-[10px] font-bold text-slate-500 uppercase tracking-wider">
                                Botanical Active Explorer
                            </span>
                            <span id="activePotencyBadge" class="text-[10px] font-bold text-emerald-800 bg-emerald-100 px-2 py-0.5 rounded-full">
                                98.4% Crocin Active
                            </span>
                        </div>

                        <!-- Herb Pills -->
                        <div class="grid grid-cols-4 gap-1.5 text-center text-[10px] font-bold">
                            <button type="button" onclick="inspectHerb('saffron')" id="pill-saffron" 
                                    class="herb-tab active-herb-tab py-1.5 px-1 rounded-lg bg-emerald-900 text-amber-200 border border-emerald-800 transition">
                                Saffron
                            </button>
                            <button type="button" onclick="inspectHerb('chandana')" id="pill-chandana" 
                                    class="herb-tab py-1.5 px-1 rounded-lg bg-white text-slate-700 hover:bg-stone-200/80 transition">
                                Chandana
                            </button>
                            <button type="button" onclick="inspectHerb('bhringraj')" id="pill-bhringraj" 
                                    class="herb-tab py-1.5 px-1 rounded-lg bg-white text-slate-700 hover:bg-stone-200/80 transition">
                                Bhringraj
                            </button>
                            <button type="button" onclick="inspectHerb('vetiver')" id="pill-vetiver" 
                                    class="herb-tab py-1.5 px-1 rounded-lg bg-white text-slate-700 hover:bg-stone-200/80 transition">
                                Vetiver
                            </button>
                        </div>

                        <!-- Active Information Display -->
                        <div id="herbInfoBox" class="text-[11px] text-slate-600 bg-white p-2.5 rounded-xl border border-stone-200/60 flex items-center justify-between">
                            <span><strong>Pampore Saffron:</strong> Hand-plucked stigmas hydro-infused in Sesame oil.</span>
                            <span class="text-emerald-700 font-bold shrink-0 ml-2">AYUSH Phyto</span>
                        </div>
                    </div>

                </div>

                <!-- Floating Glassmorphism Metric Badge: Aurangabad Cleanrooms -->
                <div class="hidden sm:flex absolute -bottom-5 -left-8 bg-white/95 backdrop-blur-xl p-4 rounded-2xl shadow-xl border border-stone-200 items-center gap-3.5 z-20">
                    <div class="w-11 h-11 rounded-xl bg-emerald-900 text-amber-300 flex items-center justify-center shrink-0 shadow-md">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                    </div>
                    <div>
                        <div class="text-xs font-bold text-slate-900">Aurangabad Facility</div>
                        <div class="text-[11px] text-slate-500">GMP Sterile Cleanrooms & Blending</div>
                    </div>
                </div>

                <!-- Floating Glassmorphism Metric Badge: Clinical Purity -->
                <div class="hidden sm:flex absolute -top-5 -right-6 bg-[#081c12] text-white p-3.5 rounded-2xl shadow-xl border border-emerald-800 items-center gap-3 z-20">
                    <div class="w-9 h-9 rounded-xl bg-emerald-800 text-amber-300 flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                    </div>
                    <div>
                        <div class="text-[11px] font-bold text-amber-200">Zero Synthetic Parabens</div>
                        <div class="text-[10px] text-emerald-300">100% Dermatologically Validated</div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- =========================================================================
     INFINITE MARQUEE TICKER: Certifications, Standards & Manufacturing Trust
     ========================================================================= -->
<div class="bg-[#0b2417] text-emerald-200 border-y border-emerald-950 py-3.5 overflow-hidden select-none">
    <div class="animate-marquee items-center gap-8 text-[11px] sm:text-xs font-bold uppercase tracking-[0.2em]">
        
        <span class="flex items-center gap-2">
            <span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span>
            AYUSH APPROVED FORMULATIONS
        </span>
        <span class="text-emerald-800">•</span>

        <span class="flex items-center gap-2">
            <span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span>
            cGMP COMPLIANT STERILE CLEANROOMS
        </span>
        <span class="text-emerald-800">•</span>

        <span class="flex items-center gap-2">
            <span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span>
            AURANGABAD & GAYA OPERATING HUBS (BIHAR)
        </span>
        <span class="text-emerald-800">•</span>

        <span class="flex items-center gap-2">
            <span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span>
            100% BOTANICAL COLD-PRESSED EXTRACTS
        </span>
        <span class="text-emerald-800">•</span>

        <span class="flex items-center gap-2">
            <span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span>
            THIRD-PARTY PRIVATE LABEL CONTRACT MFG
        </span>
        <span class="text-emerald-800">•</span>

        <span class="flex items-center gap-2">
            <span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span>
            DERMATOLOGICALLY TESTED & CRUELTY FREE
        </span>
        <span class="text-emerald-800">•</span>

        <!-- Duplicated for seamless continuous loop -->
        <span class="flex items-center gap-2">
            <span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span>
            AYUSH APPROVED FORMULATIONS
        </span>
        <span class="text-emerald-800">•</span>

        <span class="flex items-center gap-2">
            <span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span>
            cGMP COMPLIANT STERILE CLEANROOMS
        </span>
        <span class="text-emerald-800">•</span>

        <span class="flex items-center gap-2">
            <span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span>
            AURANGABAD & GAYA OPERATING HUBS (BIHAR)
        </span>
        <span class="text-emerald-800">•</span>

        <span class="flex items-center gap-2">
            <span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span>
            100% BOTANICAL COLD-PRESSED EXTRACTS
        </span>
        <span class="text-emerald-800">•</span>

        <span class="flex items-center gap-2">
            <span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span>
            THIRD-PARTY PRIVATE LABEL CONTRACT MFG
        </span>
        <span class="text-emerald-800">•</span>

    </div>
</div>

<!-- =========================================================================
     FOUR PILLARS OF EXCELLENCE: Cosmetics, Ayurveda, OEM & Advisory
     ========================================================================= -->
<section class="py-20 bg-white border-b border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto space-y-3 mb-14">
            <span class="text-xs font-bold uppercase tracking-wider text-emerald-800 bg-emerald-50 px-3.5 py-1 rounded-full border border-emerald-200">
                Corporate Architecture
            </span>
            <h2 class="text-3xl sm:text-4xl font-bold font-serif-display text-emerald-950">
                Four Pillars of SMECA Industry Operations
            </h2>
            <p class="text-sm sm:text-base text-slate-600">
                From organic soil-level herb selection in Bihar to advanced sterile compounding and national brand advisory, SMECA delivers comprehensive excellence.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <div class="p-7 rounded-3xl bg-stone-50 border border-stone-200 hover:border-emerald-700/40 hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                <div>
                    <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-800 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22l1-2.3A4.49 4.49 0 0 0 8 20C19 20 22 3 22 3c-1 2-8 2.25-13 3.25S2 11.5 2 13.5s1.75 3.75 1.75 3.75C7 8 17 8 17 8z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold font-serif-display text-emerald-950 mb-2">Ayurvedic Formulations</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Classical Kshirpak Tailams, herbal Lepams, and therapeutic liniments formulated strictly adhering to authentic Ayurvedic texts.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-stone-200 text-xs font-bold text-emerald-800">
                    <a href="{{ route('products.index', ['category' => 'ayurvedic']) }}" class="hover:underline">Explore Herbals &rarr;</a>
                </div>
            </div>

            <div class="p-7 rounded-3xl bg-stone-50 border border-stone-200 hover:border-emerald-700/40 hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                <div>
                    <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-800 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold font-serif-display text-emerald-950 mb-2">Skincare & Cosmetics</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Bio-active Vitamin C serums, organic aloe soothing hydragels, non-stripping cleansers, and lead-free herbal kajal pencils.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-stone-200 text-xs font-bold text-emerald-800">
                    <a href="{{ route('products.index', ['category' => 'skincare']) }}" class="hover:underline">Explore Skincare &rarr;</a>
                </div>
            </div>

            <div class="p-7 rounded-3xl bg-stone-50 border border-stone-200 hover:border-emerald-700/40 hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                <div>
                    <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-800 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    </div>
                    <h3 class="text-lg font-bold font-serif-display text-emerald-950 mb-2">B2B & Private Label OEM</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Turnkey contract manufacturing: custom batch compounding, bottle sourcing, label compliance, and barcode registration.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-stone-200 text-xs font-bold text-emerald-800">
                    <a href="{{ route('services.b2b') }}" class="hover:underline">OEM Capabilities &rarr;</a>
                </div>
            </div>

            <div class="p-7 rounded-3xl bg-stone-50 border border-stone-200 hover:border-emerald-700/40 hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                <div>
                    <div class="w-12 h-12 rounded-2xl bg-emerald-100 text-emerald-800 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                    </div>
                    <h3 class="text-lg font-bold font-serif-display text-emerald-950 mb-2">Consultancy & Advisory</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Brand strategy, retail personnel sales grooming in Bihar, digital D2C launch roadmaps, and statutory AYUSH dossiers.
                    </p>
                </div>
                <div class="mt-6 pt-4 border-t border-stone-200 text-xs font-bold text-emerald-800">
                    <a href="{{ route('services.consultancy') }}" class="hover:underline">Advisory Services &rarr;</a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- =========================================================================
     DYNAMIC PRODUCT SHOWCASE: Featured Formulations
     ========================================================================= -->
<section class="py-20 bg-stone-50 border-b border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
            <div>
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-800 bg-emerald-100/70 px-3.5 py-1 rounded-full border border-emerald-300">
                    Live Data-Driven Catalog
                </span>
                <h2 class="text-3xl sm:text-4xl font-bold font-serif-display text-emerald-950 mt-2">
                    Featured Formulations & Formats
                </h2>
                <p class="text-xs sm:text-sm text-slate-600 mt-1 max-w-xl">
                    Dynamic formulations ready for consumer purchase or private label contract production. Clicking "Enquire Now" auto-populates your query.
                </p>
            </div>
            <a href="{{ route('products.index') }}" class="inline-flex items-center gap-2 text-xs sm:text-sm font-bold text-emerald-800 hover:text-emerald-950 underline underline-offset-4">
                <span>View All Dynamic Formulations ({{ count($allProducts) }}+ Items)</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
        </div>

        <!-- Featured Products Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($featuredProducts as $product)
                <div class="bg-white rounded-3xl border border-stone-200 overflow-hidden shadow-xs hover:shadow-2xl transition-all duration-300 flex flex-col group">
                    
                    <div class="relative h-64 overflow-hidden bg-stone-100">
                        <img src="{{ $product->image_url }}" alt="{{ $product->name }}"
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        
                        <div class="absolute top-3 left-3 flex flex-wrap gap-1.5">
                            <span class="bg-[#081c12]/90 backdrop-blur-xs text-white text-[11px] font-semibold px-2.5 py-0.5 rounded-full">
                                {{ $product->category->name }}
                            </span>
                            @if($product->is_ayurvedic)
                                <span class="bg-amber-500/95 backdrop-blur-xs text-white text-[10px] font-bold px-2 py-0.5 rounded-full flex items-center gap-1">
                                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a8 8 0 100 16 8 8 0 000-16zm1 11H9v-2h2v2zm0-4H9V5h2v4z"/></svg>
                                    Ayurvedic
                                </span>
                            @endif
                        </div>

                        <div class="absolute bottom-3 right-3 bg-white/95 backdrop-blur-xs text-slate-800 text-[11px] font-semibold px-2.5 py-1 rounded-md shadow-xs border border-stone-200">
                            {{ $product->volume_size }}
                        </div>
                    </div>

                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <p class="text-xs font-semibold text-emerald-700 tracking-wide mb-1">{{ $product->tagline }}</p>
                            <h3 class="text-lg font-bold font-serif-display text-emerald-950 group-hover:text-emerald-800 transition line-clamp-1">
                                <a href="{{ route('products.show', $product->slug) }}">{{ $product->name }}</a>
                            </h3>
                            <p class="text-xs text-slate-600 mt-2 line-clamp-2 leading-relaxed">
                                {{ $product->short_description }}
                            </p>

                            <div class="mt-4 pt-3 border-t border-stone-100 space-y-1 text-[11px]">
                                <div class="text-slate-600">
                                    <strong class="text-slate-800">Actives:</strong> {{ Str::limit($product->key_ingredients, 60) }}
                                </div>
                                <div class="text-emerald-800 font-medium">
                                    <strong class="text-slate-800">OEM MOQ:</strong> {{ $product->moq }}
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 pt-4 border-t border-stone-100 flex items-center justify-between gap-3">
                            <a href="{{ route('products.show', $product->slug) }}" class="text-xs font-semibold text-slate-500 hover:text-emerald-800 transition underline underline-offset-2">
                                Specifications
                            </a>
                            <button onclick="openEnquiryModal('{{ addslashes($product->name) }}', {{ $product->id }}, 'product')"
                                    class="bg-[#081c12] hover:bg-[#0f2e1e] text-white text-xs font-semibold px-4 py-2.5 rounded-xl transition flex items-center gap-1.5 shadow-xs">
                                <span>Enquire Now</span>
                                <svg class="w-3.5 h-3.5 text-amber-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
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
<section class="py-20 bg-white border-b border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto space-y-3 mb-14">
            <span class="text-xs font-bold uppercase tracking-wider text-emerald-800 bg-emerald-50 px-3.5 py-1 rounded-full border border-emerald-200">
                Corporate Governance
            </span>
            <h2 class="text-3xl sm:text-4xl font-bold font-serif-display text-emerald-950">
                Board of Directors
            </h2>
            <p class="text-sm sm:text-base text-slate-600">
                SMECA INDUSTRY PRIVATE LIMITED is governed by four founding directors uniting regional agro-botanical heritage with industrial manufacturing discipline.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($directors as $director)
                <div class="bg-stone-50 rounded-3xl p-7 border border-stone-200 hover:shadow-xl transition-all duration-300 flex flex-col justify-between text-center group">
                    <div>
                        <div class="w-20 h-20 mx-auto rounded-2xl bg-gradient-to-tr from-[#081c12] to-[#1b4d33] text-amber-300 flex items-center justify-center font-serif-display font-bold text-2xl shadow-lg group-hover:scale-105 transition-transform mb-4 border border-amber-300/30">
                            {{ $director['initials'] }}
                        </div>
                        <h3 class="text-lg font-bold font-serif-display text-emerald-950">{{ $director['name'] }}</h3>
                        <p class="text-[11px] font-bold text-emerald-800 uppercase tracking-wider mt-0.5">{{ $director['role'] }}</p>
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
            <a href="{{ route('about') }}" class="inline-flex items-center gap-2 text-xs sm:text-sm font-semibold text-emerald-800 hover:text-emerald-950 underline underline-offset-4">
                <span>Learn more about SMECA's history, Bihar operating hubs & governance</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>

    </div>
</section>

@endsection

@push('scripts')
<script>
    // Phyto-Active Botanical Inspector (Hero Interactive Showcase)
    const herbData = {
        saffron: {
            title: "Kumkumadi Miraculous Beauty Tailam",
            desc: "24 Classical Botanicals Infused with Kashmiri Saffron & Pure Mysore Chandana for Cellular Complexion Radiance.",
            image: "https://images.unsplash.com/photo-1608248597359-22a36b4d3701?auto=format&fit=crop&w=1200&q=85",
            badge: "98.4% Crocin Active",
            info: "<strong>Pampore Saffron:</strong> Hand-plucked stigmas hydro-infused in Sesame oil."
        },
        chandana: {
            title: "Mysore Chandana Calming Face Elixir",
            desc: "Steam-distilled pure Santalum Album oil to soothe reactive skin, balance melanin production, and refine pore texture.",
            image: "https://images.unsplash.com/photo-1556228720-195a672e8a03?auto=format&fit=crop&w=1200&q=85",
            badge: "92.0% Santalol Active",
            info: "<strong>Mysore Chandana:</strong> Ethical wood core hydro-distillation with cooling properties."
        },
        bhringraj: {
            title: "Maha Bhringraj Intensive Hair Root Nectar",
            desc: "Kshirpak Vidhi boiled Bhringraj, Amalaki & Brahmi clinically blended to rejuvenate dormant follicles and prevent greying.",
            image: "https://images.unsplash.com/photo-1608248543803-ba4f8c70ae0b?auto=format&fit=crop&w=1200&q=85",
            badge: "Pure Wedelolactone Bio-Active",
            info: "<strong>Kshirpak Vidhi:</strong> Boiled in copper kettles with organic cow milk decoctions."
        },
        vetiver: {
            title: "Pure Bihar Vetiver & Aloe Hydragel",
            desc: "Ultra-light soothing hydration distilled from wild Khus roots harvested across Gaya and South Bihar riverbeds.",
            image: "https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?auto=format&fit=crop&w=1200&q=85",
            badge: "Pure Khus Hydrosol 100%",
            info: "<strong>Gaya Vetiver:</strong> Native wild roots distilled for deep cooling and barrier defense."
        }
    };

    function inspectHerb(key) {
        const item = herbData[key];
        if (!item) return;

        document.getElementById('heroShowcaseTitle').textContent = item.title;
        document.getElementById('heroShowcaseDesc').textContent = item.desc;
        document.getElementById('heroShowcaseImage').src = item.image;
        document.getElementById('activePotencyBadge').textContent = item.badge;
        document.getElementById('herbInfoBox').innerHTML = `<span>${item.info}</span><span class="text-emerald-700 font-bold shrink-0 ml-2">AYUSH Phyto</span>`;

        // Update active tab styles
        document.querySelectorAll('.herb-tab').forEach(tab => {
            tab.className = "herb-tab py-1.5 px-1 rounded-lg bg-white text-slate-700 hover:bg-stone-200/80 transition";
        });
        const activeTab = document.getElementById('pill-' + key);
        if (activeTab) {
            activeTab.className = "herb-tab py-1.5 px-1 rounded-lg bg-emerald-900 text-amber-200 border border-emerald-800 transition";
        }
    }
</script>
@endpush
