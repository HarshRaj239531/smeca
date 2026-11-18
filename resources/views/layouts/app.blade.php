<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-stone-50 text-slate-900 antialiased selection:bg-emerald-900 selection:text-amber-200">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'SMECA INDUSTRY PRIVATE LIMITED | Botanical Cosmetics & Ayurvedic Formulations')</title>
    <meta name="description" content="@yield('meta_description', 'SMECA Industry Private Limited is an Indian premier manufacturer of certified Cosmetics, Skincare, Personal Care and Ayurvedic Formulations headquartered in Bihar (Aurangabad & Gaya). Leading B2C wellness and turnkey B2B/OEM contract manufacturing.')">

    <!-- Premium Google Fonts: Playfair Display, Cormorant Garamond & Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500;1,600&family=Playfair+Display:ital,wght@0,500;0,600;0,700;0,800;1,500;1,600&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        .font-serif-display {
            font-family: 'Playfair Display', Georgia, Cambria, serif;
        }
        .font-cormorant {
            font-family: 'Cormorant Garamond', Georgia, serif;
        }
        body {
            font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-full flex flex-col bg-[#faf9f6] text-slate-900 overflow-x-hidden">

    <!-- Top Announcement & Operational Status Bar -->
    <div class="bg-[#081c12] text-emerald-200 text-xs py-2 px-4 sm:px-8 border-b border-emerald-950/80 relative z-50">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-2">
            
            <!-- Live Regional Status Indicator -->
            <div class="flex items-center gap-2.5 text-[11px] font-medium tracking-wide">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                </span>
                <span class="text-emerald-100 font-semibold uppercase tracking-wider text-[10px]">OPERATIONAL HUB:</span>
                <span class="text-emerald-300/90 hidden sm:inline">Aurangabad & Gaya Districts (Bihar, India)</span>
                <span class="text-emerald-700 hidden md:inline">•</span>
                <span class="text-amber-300 font-medium hidden md:inline">AYUSH & GMP Standards Compliant</span>
            </div>

            <!-- Quick Direct Communications -->
            <div class="flex items-center gap-4 sm:gap-6 text-[11px] text-emerald-200/90 font-medium tracking-wide">
                <a href="tel:+919470000000" class="hover:text-white transition flex items-center gap-1.5 group">
                    <svg class="w-3.5 h-3.5 text-amber-400 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    <span>+91 94700 00000</span>
                </a>
                <span class="text-emerald-800">/</span>
                <a href="mailto:contact@smecaindustry.com" class="hover:text-white transition flex items-center gap-1.5 group">
                    <svg class="w-3.5 h-3.5 text-amber-400 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    <span class="hidden md:inline">contact@smecaindustry.com</span>
                    <span class="md:hidden">Email Desk</span>
                </a>
                <span class="text-emerald-800 hidden lg:inline">|</span>
                <a href="{{ route('admin.inquiries') }}" class="hidden lg:flex items-center gap-1 text-emerald-400 hover:text-white text-[10px] tracking-wider uppercase font-semibold transition">
                    <span>Staff Portal</span>
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </a>
            </div>

        </div>
    </div>

    <!-- Award-Winning Luxury Frosted Navigation Header -->
    <header class="sticky top-0 z-40 bg-white/90 backdrop-blur-xl border-b border-stone-200/80 transition-all duration-300 shadow-[0_4px_24px_rgba(15,46,30,0.04)]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-22 sm:h-24">
                
                <!-- Bespoke Luxury Brand Identity / Seal -->
                <a href="{{ route('home') }}" class="group flex items-center gap-3.5 sm:gap-4 shrink-0">
                    <!-- Custom Botanical Emblem with Gold Leaf Accents -->
                    <div class="relative w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-gradient-to-br from-[#081c12] via-[#0f2e1e] to-[#1b4d33] p-0.5 shadow-lg shadow-emerald-950/20 group-hover:shadow-emerald-900/30 transition-all duration-300 group-hover:scale-[1.03]">
                        <div class="w-full h-full rounded-[14px] bg-[#0b2417] border border-amber-400/30 flex items-center justify-center relative overflow-hidden">
                            <!-- Subtle golden radial glint -->
                            <div class="absolute inset-0 bg-radial from-amber-400/20 via-transparent to-transparent opacity-60"></div>
                            <svg class="w-7 h-7 sm:w-8 sm:h-8 text-amber-300 transform group-hover:rotate-6 transition-transform duration-500" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22l1-2.3A4.49 4.49 0 0 0 8 20C19 20 22 3 22 3c-1 2-8 2.25-13 3.25S2 11.5 2 13.5s1.75 3.75 1.75 3.75C7 8 17 8 17 8z"/>
                            </svg>
                        </div>
                    </div>

                    <!-- Typography with Corporate Authority -->
                    <div class="space-y-0.5">
                        <div class="flex items-center gap-2">
                            <span class="text-2xl sm:text-3xl font-extrabold tracking-[-0.03em] text-[#081c12] font-serif-display">
                                SMECA
                            </span>
                            <span class="text-[9px] font-bold uppercase tracking-widest text-amber-800 bg-amber-50 px-1.5 py-0.5 rounded border border-amber-300/70">
                                PVT LTD
                            </span>
                        </div>
                        <p class="text-[10px] sm:text-[11px] font-bold text-emerald-800 uppercase tracking-[0.16em]">
                            Ayurvedic & Cosmetic Science
                        </p>
                    </div>
                </a>

                <!-- Desktop Haute Navigation Links with Interactive Mega-Menu -->
                <nav class="hidden lg:flex items-center gap-1 xl:gap-2 text-[13px] font-semibold text-slate-700 tracking-wide">
                    
                    <!-- Home -->
                    <a href="{{ route('home') }}" 
                       class="px-3.5 py-2.5 rounded-xl transition-all duration-200 relative group {{ request()->routeIs('home') ? 'text-emerald-900 font-bold bg-emerald-50/80' : 'hover:text-emerald-900 hover:bg-stone-50' }}">
                        <span>Home</span>
                        @if(request()->routeIs('home'))
                            <span class="absolute bottom-1 left-1/2 -translate-x-1/2 w-4 h-0.5 bg-emerald-800 rounded-full"></span>
                        @endif
                    </a>

                    <!-- About Us -->
                    <a href="{{ route('about') }}" 
                       class="px-3.5 py-2.5 rounded-xl transition-all duration-200 relative group {{ request()->routeIs('about') ? 'text-emerald-900 font-bold bg-emerald-50/80' : 'hover:text-emerald-900 hover:bg-stone-50' }}">
                        <span>About & Governance</span>
                        @if(request()->routeIs('about'))
                            <span class="absolute bottom-1 left-1/2 -translate-x-1/2 w-4 h-0.5 bg-emerald-800 rounded-full"></span>
                        @endif
                    </a>

                    <!-- Formulations / Dynamic Products with Dropdown Menu -->
                    <div class="relative group" id="productsMenuWrapper">
                        <a href="{{ route('products.index') }}" 
                           class="px-3.5 py-2.5 rounded-xl transition-all duration-200 inline-flex items-center gap-1.5 {{ request()->routeIs('products.*') ? 'text-emerald-900 font-bold bg-emerald-50/80' : 'hover:text-emerald-900 hover:bg-stone-50' }}">
                            <span>Formulations</span>
                            <span class="inline-flex items-center px-1.5 py-0.5 rounded-full text-[9px] font-bold bg-emerald-100 text-emerald-900">
                                Dynamic
                            </span>
                            <svg class="w-3.5 h-3.5 text-slate-400 group-hover:text-emerald-900 transition-transform duration-200 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </a>

                        <!-- Dropdown Panel -->
                        <div class="absolute left-0 top-full pt-2 w-80 opacity-0 translate-y-2 pointer-events-none group-hover:opacity-100 group-hover:translate-y-0 group-hover:pointer-events-auto transition-all duration-200 z-50">
                            <div class="bg-white/95 backdrop-blur-2xl rounded-2xl shadow-2xl border border-stone-200/90 p-4 space-y-2">
                                <div class="px-2 py-1 text-[10px] font-bold uppercase tracking-wider text-slate-400 border-b border-stone-100 pb-1.5">
                                    Product Categories
                                </div>
                                <div class="space-y-1">
                                    <a href="{{ route('products.index', ['category' => 'ayurvedic']) }}" class="flex items-center justify-between p-2 rounded-xl hover:bg-emerald-50/70 transition group/item">
                                        <div class="flex items-center gap-2.5">
                                            <span class="w-7 h-7 rounded-lg bg-emerald-100 text-emerald-800 flex items-center justify-center text-xs">🌿</span>
                                            <div>
                                                <div class="text-xs font-bold text-slate-900 group-hover/item:text-emerald-900">Ayurvedic Formulations</div>
                                                <div class="text-[10px] text-slate-500">Classical Tailam, Lepas & Asavas</div>
                                            </div>
                                        </div>
                                        <svg class="w-3.5 h-3.5 text-slate-300 group-hover/item:text-emerald-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                                    </a>

                                    <a href="{{ route('products.index', ['category' => 'skincare']) }}" class="flex items-center justify-between p-2 rounded-xl hover:bg-emerald-50/70 transition group/item">
                                        <div class="flex items-center gap-2.5">
                                            <span class="w-7 h-7 rounded-lg bg-emerald-100 text-emerald-800 flex items-center justify-center text-xs">✨</span>
                                            <div>
                                                <div class="text-xs font-bold text-slate-900 group-hover/item:text-emerald-900">Skincare & Facial Care</div>
                                                <div class="text-[10px] text-slate-500">Active Vitamin C & Aloe Serums</div>
                                            </div>
                                        </div>
                                        <svg class="w-3.5 h-3.5 text-slate-300 group-hover/item:text-emerald-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                                    </a>

                                    <a href="{{ route('products.index', ['category' => 'haircare']) }}" class="flex items-center justify-between p-2 rounded-xl hover:bg-emerald-50/70 transition group/item">
                                        <div class="flex items-center gap-2.5">
                                            <span class="w-7 h-7 rounded-lg bg-emerald-100 text-emerald-800 flex items-center justify-center text-xs">💧</span>
                                            <div>
                                                <div class="text-xs font-bold text-slate-900 group-hover/item:text-emerald-900">Haircare & Scalp Therapy</div>
                                                <div class="text-[10px] text-slate-500">Bhringraj & Red Onion Oils</div>
                                            </div>
                                        </div>
                                        <svg class="w-3.5 h-3.5 text-slate-300 group-hover/item:text-emerald-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                                    </a>

                                    <a href="{{ route('products.index', ['category' => 'perfumes']) }}" class="flex items-center justify-between p-2 rounded-xl hover:bg-emerald-50/70 transition group/item">
                                        <div class="flex items-center gap-2.5">
                                            <span class="w-7 h-7 rounded-lg bg-emerald-100 text-emerald-800 flex items-center justify-center text-xs">🌸</span>
                                            <div>
                                                <div class="text-xs font-bold text-slate-900 group-hover/item:text-emerald-900">Artisanal Perfumes & Attar</div>
                                                <div class="text-[10px] text-slate-500">Pure Mitti & Royal Oudh</div>
                                            </div>
                                        </div>
                                        <svg class="w-3.5 h-3.5 text-slate-300 group-hover/item:text-emerald-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                                    </a>
                                </div>
                                <div class="pt-2 border-t border-stone-100 text-center">
                                    <a href="{{ route('products.index') }}" class="text-[11px] font-bold text-emerald-800 hover:text-emerald-950 block py-1">
                                        Browse Complete Catalog &rarr;
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- B2B & OEM Services -->
                    <a href="{{ route('services.b2b') }}" 
                       class="px-3.5 py-2.5 rounded-xl transition-all duration-200 inline-flex items-center gap-1.5 {{ request()->routeIs('services.b2b') ? 'text-emerald-900 font-bold bg-emerald-50/80' : 'hover:text-emerald-900 hover:bg-stone-50' }}">
                        <span>B2B & OEM</span>
                        <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                    </a>

                    <!-- Consultancy -->
                    <a href="{{ route('services.consultancy') }}" 
                       class="px-3.5 py-2.5 rounded-xl transition-all duration-200 {{ request()->routeIs('services.consultancy') ? 'text-emerald-900 font-bold bg-emerald-50/80' : 'hover:text-emerald-900 hover:bg-stone-50' }}">
                        <span>Consultancy</span>
                    </a>

                    <!-- Contact -->
                    <a href="{{ route('contact.index') }}" 
                       class="px-3.5 py-2.5 rounded-xl transition-all duration-200 {{ request()->routeIs('contact.*') ? 'text-emerald-900 font-bold bg-emerald-50/80' : 'hover:text-emerald-900 hover:bg-stone-50' }}">
                        <span>Contact</span>
                    </a>
                </nav>

                <!-- Right Action Cluster: High-Conversion OEM Button with Sheen -->
                <div class="hidden sm:flex items-center gap-3">
                    <button onclick="openEnquiryModal('Enterprise B2B / OEM Consultation', null, 'b2b_oem')" 
                            class="relative overflow-hidden group bg-gradient-to-r from-[#081c12] via-[#0f2e1e] to-[#1b4d33] hover:from-[#0b2417] hover:to-[#081c12] text-white px-5 sm:px-6 py-3 rounded-xl font-bold text-xs sm:text-sm tracking-wide shadow-md shadow-emerald-950/20 hover:shadow-xl transition-all duration-300 border border-emerald-700/30">
                        <!-- Shimmer animation bar -->
                        <span class="absolute inset-0 w-1/2 h-full bg-gradient-to-r from-transparent via-white/20 to-transparent skew-x-12 -translate-x-full group-hover:translate-x-[300%] transition-transform duration-1000"></span>
                        
                        <div class="relative flex items-center gap-2">
                            <span>Request OEM Quote</span>
                            <svg class="w-4 h-4 text-amber-300 group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </div>
                    </button>
                </div>

                <!-- Mobile Menu Button -->
                <div class="flex items-center lg:hidden">
                    <button id="mobileMenuBtn" aria-label="Toggle navigation" 
                            class="p-2.5 rounded-xl text-slate-800 hover:text-emerald-900 hover:bg-stone-100 transition border border-stone-200">
                        <svg id="menuIcon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7h16M4 12h16M4 17h16"/></svg>
                        <svg id="closeIcon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                </div>

            </div>
        </div>

        <!-- Mobile Drawer with Luxury Editorial Layout -->
        <div id="mobileMenu" class="hidden lg:hidden border-t border-stone-200 bg-white/98 backdrop-blur-2xl px-5 pt-4 pb-8 space-y-3 shadow-2xl">
            <div class="space-y-1 text-sm font-semibold">
                <a href="{{ route('home') }}" class="block px-3.5 py-2.5 rounded-xl {{ request()->routeIs('home') ? 'bg-emerald-50 text-emerald-900 font-bold' : 'text-slate-700 hover:bg-stone-50' }}">
                    Home
                </a>
                <a href="{{ route('about') }}" class="block px-3.5 py-2.5 rounded-xl {{ request()->routeIs('about') ? 'bg-emerald-50 text-emerald-900 font-bold' : 'text-slate-700 hover:bg-stone-50' }}">
                    About Us & Board of Directors
                </a>
                <a href="{{ route('products.index') }}" class="block px-3.5 py-2.5 rounded-xl {{ request()->routeIs('products.*') ? 'bg-emerald-50 text-emerald-900 font-bold' : 'text-slate-700 hover:bg-stone-50' }}">
                    Dynamic Formulations Catalog
                </a>
                <a href="{{ route('services.b2b') }}" class="block px-3.5 py-2.5 rounded-xl {{ request()->routeIs('services.b2b') ? 'bg-emerald-50 text-emerald-900 font-bold' : 'text-slate-700 hover:bg-stone-50' }}">
                    B2B & OEM Contract Manufacturing
                </a>
                <a href="{{ route('services.consultancy') }}" class="block px-3.5 py-2.5 rounded-xl {{ request()->routeIs('services.consultancy') ? 'bg-emerald-50 text-emerald-900 font-bold' : 'text-slate-700 hover:bg-stone-50' }}">
                    Consultancy & Marketing Advisory
                </a>
                <a href="{{ route('contact.index') }}" class="block px-3.5 py-2.5 rounded-xl {{ request()->routeIs('contact.*') ? 'bg-emerald-50 text-emerald-900 font-bold' : 'text-slate-700 hover:bg-stone-50' }}">
                    Contact Us (Aurangabad & Gaya)
                </a>
            </div>

            <div class="pt-4 border-t border-stone-200 space-y-3">
                <button onclick="openEnquiryModal('Mobile Enterprise Quotation', null, 'b2b_oem')" 
                        class="w-full bg-[#081c12] text-amber-200 font-bold text-sm py-3.5 rounded-xl shadow-md text-center">
                    Request B2B OEM Quotation
                </button>
                <div class="p-3 bg-stone-50 rounded-xl text-xs text-slate-500 text-center">
                    Registered in Bihar • Aurangabad & Gaya Districts
                </div>
            </div>
        </div>
    </header>

    <!-- Global Flash Notification -->
    @if(session('success_message'))
        <div class="bg-emerald-50 border-b border-emerald-300 px-4 py-3.5 text-emerald-950 shadow-xs relative z-30">
            <div class="max-w-7xl mx-auto flex items-center justify-between gap-3">
                <div class="flex items-center gap-3">
                    <span class="w-8 h-8 rounded-full bg-emerald-800 text-amber-300 flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    </span>
                    <p class="text-xs sm:text-sm font-semibold">{{ session('success_message') }}</p>
                </div>
                <button onclick="this.parentElement.parentElement.remove()" class="text-emerald-800 hover:text-emerald-950 p-1">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
        </div>
    @endif

    <!-- Main Content Area -->
    <main class="flex-1">
        @yield('content')
    </main>

    <!-- Universal Product / Service Enquiry Modal -->
    <div id="enquiryModal" class="fixed inset-0 z-50 hidden overflow-y-auto bg-slate-950/70 backdrop-blur-md flex items-center justify-center p-4">
        <div class="relative bg-white rounded-3xl shadow-2xl max-w-xl w-full border border-stone-200 overflow-hidden transform transition-all duration-300">
            <!-- Modal Header -->
            <div class="bg-gradient-to-r from-[#081c12] via-[#0f2e1e] to-[#1b4d33] text-white p-6 sm:p-7 relative">
                <button onclick="closeEnquiryModal()" class="absolute top-5 right-5 text-emerald-200 hover:text-white p-1.5 rounded-xl hover:bg-white/10 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
                <div class="flex items-center gap-2 text-[10px] font-bold uppercase tracking-widest text-amber-300 mb-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    SMECA Direct Business Desk
                </div>
                <h3 class="text-2xl sm:text-3xl font-serif-display font-bold">Inquiry & Quotation Request</h3>
                <p class="text-xs text-emerald-200/90 mt-1" id="modalSubtitle">
                    Interested in retail samples, private label contract manufacturing, or distributorship? Submit your requirement.
                </p>
            </div>

            <!-- Modal Form -->
            <form action="{{ route('contact.store') }}" method="POST" class="p-6 sm:p-7 space-y-4">
                @csrf
                <input type="hidden" name="product_id" id="modalProductId" value="">

                <div>
                    <label class="block text-[11px] font-bold text-slate-700 uppercase tracking-wider mb-1">Selected Product / Focus</label>
                    <input type="text" name="product_name" id="modalProductName" readonly
                        class="w-full bg-emerald-50/70 border border-emerald-300/80 rounded-xl px-3.5 py-2.5 text-xs sm:text-sm font-bold text-emerald-950 focus:outline-hidden">
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1">Full Name <span class="text-rose-500">*</span></label>
                        <input type="text" name="name" required placeholder="e.g. Rahul Singhania"
                            class="w-full border border-stone-300 rounded-xl px-3.5 py-2.5 text-xs sm:text-sm focus:border-emerald-700 focus:outline-hidden">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1">Company / Brand Name</label>
                        <input type="text" name="company_name" placeholder="Firm or retail name"
                            class="w-full border border-stone-300 rounded-xl px-3.5 py-2.5 text-xs sm:text-sm focus:border-emerald-700 focus:outline-hidden">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1">Phone / WhatsApp <span class="text-rose-500">*</span></label>
                        <input type="tel" name="phone" required placeholder="+91 94700 00000"
                            class="w-full border border-stone-300 rounded-xl px-3.5 py-2.5 text-xs sm:text-sm focus:border-emerald-700 focus:outline-hidden">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1">Email Address <span class="text-rose-500">*</span></label>
                        <input type="email" name="email" required placeholder="partner@domain.com"
                            class="w-full border border-stone-300 rounded-xl px-3.5 py-2.5 text-xs sm:text-sm focus:border-emerald-700 focus:outline-hidden">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-700 mb-1">Inquiry Classification</label>
                    <select name="inquiry_type" id="modalInquiryType"
                        class="w-full border border-stone-300 rounded-xl px-3.5 py-2.5 text-xs sm:text-sm bg-white focus:border-emerald-700 focus:outline-hidden">
                        <option value="product">Product Pricing & Purchase</option>
                        <option value="b2b_oem">Third-Party OEM / Private Labeling</option>
                        <option value="distributorship">Super Stockist / Distributorship</option>
                        <option value="consultancy">Consultancy & Advisory Services</option>
                        <option value="general">General Corporate Query</option>
                    </select>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-700 mb-1">Requirement / Specifications <span class="text-rose-500">*</span></label>
                    <textarea name="message" id="modalMessage" rows="3" required placeholder="Specify quantity desired, delivery location, or custom packaging specifications..."
                        class="w-full border border-stone-300 rounded-xl p-3 text-xs sm:text-sm focus:border-emerald-700 focus:outline-hidden"></textarea>
                </div>

                <div class="flex items-center justify-end gap-3 pt-2">
                    <button type="button" onclick="closeEnquiryModal()" class="px-4 py-2 text-xs font-semibold text-slate-500 hover:text-slate-800 transition">
                        Cancel
                    </button>
                    <button type="submit" class="bg-[#081c12] hover:bg-[#0f2e1e] text-amber-300 font-bold text-xs sm:text-sm px-6 py-2.5 rounded-xl shadow-md transition">
                        Submit Official Inquiry
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Corporate Footer -->
    <footer class="bg-[#081c12] text-white border-t border-emerald-950 pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-12 border-b border-emerald-900/40">
                
                <!-- Col 1: Brand Info -->
                <div class="lg:col-span-2 space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-[#0f2e1e] border border-amber-400/30 flex items-center justify-center text-amber-300">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22l1-2.3A4.49 4.49 0 0 0 8 20C19 20 22 3 22 3c-1 2-8 2.25-13 3.25S2 11.5 2 13.5s1.75 3.75 1.75 3.75C7 8 17 8 17 8z"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-xl font-bold font-serif-display tracking-tight text-white">SMECA INDUSTRY</span>
                            <span class="block text-[10px] tracking-widest uppercase text-amber-300 font-semibold">Private Limited</span>
                        </div>
                    </div>
                    <p class="text-xs sm:text-sm text-emerald-200/80 leading-relaxed max-w-md">
                        SMECA Industry Private Limited is an Indian enterprise specializing in authentic Ayurvedic wellness formulations, clean cosmetics, and advanced contract manufacturing.
                    </p>
                    <div class="pt-2 text-xs text-emerald-300/90 space-y-1">
                        <p><strong class="text-white">Specialty Niche:</strong> Herbal & Ayurvedic Formulations</p>
                        <p><strong class="text-white">Operating Region:</strong> Bihar, India – Aurangabad & Gaya Districts</p>
                    </div>
                </div>

                <!-- Col 2: Quick Links -->
                <div>
                    <h4 class="text-xs font-bold uppercase tracking-widest text-amber-300 mb-4 font-serif-display">Navigation</h4>
                    <ul class="space-y-2 text-xs text-emerald-200/80 font-medium">
                        <li><a href="{{ route('home') }}" class="hover:text-white transition">Home</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-white transition">About Us</a></li>
                        <li><a href="{{ route('products.index') }}" class="hover:text-white transition">Dynamic Formulations</a></li>
                        <li><a href="{{ route('services.b2b') }}" class="hover:text-white transition">B2B & OEM Services</a></li>
                        <li><a href="{{ route('services.consultancy') }}" class="hover:text-white transition">Consultancy & Advisory</a></li>
                        <li><a href="{{ route('contact.index') }}" class="hover:text-white transition">Contact Us</a></li>
                    </ul>
                </div>

                <!-- Col 3: Product Segments -->
                <div>
                    <h4 class="text-xs font-bold uppercase tracking-widest text-amber-300 mb-4 font-serif-display">Formulations</h4>
                    <ul class="space-y-2 text-xs text-emerald-200/80 font-medium">
                        <li><a href="{{ route('products.index', ['category' => 'ayurvedic']) }}" class="hover:text-white transition">Ayurvedic Tailams</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'skincare']) }}" class="hover:text-white transition">Vitamin C & Aloe Serums</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'haircare']) }}" class="hover:text-white transition">Bhringraj & Scalp Therapy</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'perfumes']) }}" class="hover:text-white transition">Artisanal Botanical Attars</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'cosmetics']) }}" class="hover:text-white transition">Organic Pigments & Kajal</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'wellness']) }}" class="hover:text-white transition">Therapeutic Muscle Rubs</a></li>
                    </ul>
                </div>

                <!-- Col 4: Corporate Governance & Board -->
                <div>
                    <h4 class="text-xs font-bold uppercase tracking-widest text-amber-300 mb-4 font-serif-display">Board of Directors</h4>
                    <ul class="space-y-1.5 text-xs text-emerald-200/80 font-medium">
                        <li><strong>Sanjit Kumar</strong> – Director</li>
                        <li><strong>Sonu Kumar</strong> – Director</li>
                        <li><strong>Sarina Kumari</strong> – Director</li>
                        <li><strong>Yogendra Das</strong> – Director</li>
                    </ul>
                    <div class="mt-4 pt-3 border-t border-emerald-900/60">
                        <a href="{{ route('admin.inquiries') }}" class="inline-flex items-center gap-1.5 text-xs text-amber-300 hover:text-white transition font-semibold">
                            <span>Staff Query Repository &rarr;</span>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Bottom Badges & Copyright -->
            <div class="pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-emerald-300/70">
                <p>© {{ date('Y') }} SMECA INDUSTRY PRIVATE LIMITED. All rights reserved.</p>
                <div class="flex flex-wrap items-center gap-4 text-[11px]">
                    <span class="inline-flex items-center gap-1 text-emerald-300 font-medium">
                        ✓ 100% Herbal Purity
                    </span>
                    <span class="inline-flex items-center gap-1 text-emerald-300 font-medium">
                        ✓ cGMP & AYUSH Compliant
                    </span>
                    <span class="inline-flex items-center gap-1 text-emerald-300 font-medium">
                        ✓ Aurangabad & Gaya Operational Footprint
                    </span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Interactive Scripts for Mobile Drawer & Enquiry Modal -->
    <script>
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        const menuIcon = document.getElementById('menuIcon');
        const closeIcon = document.getElementById('closeIcon');

        if (mobileMenuBtn) {
            mobileMenuBtn.addEventListener('click', () => {
                const isHidden = mobileMenu.classList.contains('hidden');
                if (isHidden) {
                    mobileMenu.classList.remove('hidden');
                    menuIcon.classList.add('hidden');
                    closeIcon.classList.remove('hidden');
                } else {
                    mobileMenu.classList.add('hidden');
                    menuIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                }
            });
        }

        function openEnquiryModal(productName = 'General Inquiry', productId = null, type = 'product') {
            const modal = document.getElementById('enquiryModal');
            const nameInput = document.getElementById('modalProductName');
            const idInput = document.getElementById('modalProductId');
            const typeInput = document.getElementById('modalInquiryType');
            const messageInput = document.getElementById('modalMessage');

            if (modal) {
                nameInput.value = productName;
                idInput.value = productId || '';
                if (typeInput) {
                    typeInput.value = type;
                }
                if (messageInput && productId) {
                    messageInput.placeholder = `Please share your quantity requirement, delivery location, or private label details for ${productName}...`;
                }
                modal.classList.remove('hidden');
                document.body.classList.add('overflow-hidden');
            }
        }

        function closeEnquiryModal() {
            const modal = document.getElementById('enquiryModal');
            if (modal) {
                modal.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            }
        }

        document.getElementById('enquiryModal')?.addEventListener('click', function(e) {
            if (e.target === this) {
                closeEnquiryModal();
            }
        });
    </script>

    @stack('scripts')
</body>
</html>
