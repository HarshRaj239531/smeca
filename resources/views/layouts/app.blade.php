<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-[#fbfaf7] text-slate-900 antialiased selection:bg-emerald-950 selection:text-amber-200">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'SMECA INDUSTRY PRIVATE LIMITED | Botanical Cosmetics & Ayurvedic Formulations')</title>
    <meta name="description" content="@yield('meta_description', 'SMECA Industry Private Limited is an Indian manufacturer of certified Cosmetics, Skincare, Personal Care and Ayurvedic Formulations headquartered in Bihar (Aurangabad & Gaya). Leading B2C wellness and turnkey B2B/OEM contract manufacturing.')">

    <!-- Fonts: Cormorant Garamond, Playfair Display & Plus Jakarta Sans -->
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
<body class="min-h-full flex flex-col bg-[#fbfaf7] text-slate-900 overflow-x-hidden">

    <!-- Subtle Minimalist Top Micro-Ribbon -->
    <div class="bg-[#0b2417] text-emerald-200 text-[11px] py-1.5 px-4 sm:px-8 border-b border-emerald-950/90 relative z-40">
        <div class="max-w-7xl mx-auto flex justify-between items-center gap-4">
            <!-- Left: Regional Status -->
            <div class="flex items-center gap-2">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-400"></span>
                </span>
                <span class="font-semibold text-emerald-100 uppercase tracking-widest text-[9.5px]">OPERATIONAL HUB:</span>
                <span class="text-emerald-300/90 hidden sm:inline">Aurangabad & Gaya Districts, Bihar</span>
                <span class="text-emerald-700 hidden md:inline">•</span>
                <span class="text-amber-300/90 font-medium hidden md:inline">AYUSH & GMP Standard Compliant</span>
            </div>

            <!-- Right: Direct Helpline -->
            <div class="flex items-center gap-4 sm:gap-6 text-emerald-200/90 font-medium">
                <a href="tel:+919470000000" class="hover:text-amber-200 transition flex items-center gap-1.5">
                    <svg class="w-3 h-3 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    <span>+91 94700 00000</span>
                </a>
                <span class="text-emerald-800 hidden sm:inline">|</span>
                <a href="mailto:contact@smecaindustry.com" class="hover:text-amber-200 transition hidden sm:flex items-center gap-1.5">
                    <svg class="w-3 h-3 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    <span>contact@smecaindustry.com</span>
                </a>
                <span class="text-emerald-800 hidden lg:inline">|</span>
                <a href="{{ route('admin.inquiries') }}" class="hidden lg:inline text-emerald-400 hover:text-white uppercase tracking-wider text-[10px] font-bold">
                    Staff Portal &rarr;
                </a>
            </div>
        </div>
    </div>

    <!-- Award-Winning Floating Island Capsule Navbar -->
    <div class="sticky top-2 sm:top-4 z-50 px-3 sm:px-6 lg:px-8 transition-all duration-300">
        <header class="max-w-7xl mx-auto">
            <div class="bg-white/85 backdrop-blur-2xl border border-stone-200/90 shadow-[0_12px_40px_rgba(8,28,18,0.07)] rounded-2xl sm:rounded-full px-4 sm:px-6 py-2.5 sm:py-3 flex items-center justify-between gap-4 transition-all">
                
                <!-- Brand Seal & Logo -->
                <a href="{{ route('home') }}" class="flex items-center gap-3 shrink-0 group">
                    <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-xl sm:rounded-2xl bg-gradient-to-br from-[#081c12] via-[#0f2e1e] to-[#1b4d33] p-0.5 shadow-md shadow-emerald-950/20 group-hover:scale-105 transition-all duration-300">
                        <div class="w-full h-full rounded-[10px] sm:rounded-[14px] bg-[#0b2417] border border-amber-400/30 flex items-center justify-center">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-amber-300 group-hover:rotate-6 transition-transform duration-300" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22l1-2.3A4.49 4.49 0 0 0 8 20C19 20 22 3 22 3c-1 2-8 2.25-13 3.25S2 11.5 2 13.5s1.75 3.75 1.75 3.75C7 8 17 8 17 8z"/>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center gap-1.5 leading-none">
                            <span class="text-xl sm:text-2xl font-black tracking-tight text-[#081c12] font-serif-display">SMECA</span>
                            <span class="text-[9px] font-bold uppercase tracking-wider text-amber-800 bg-amber-50 px-1.5 py-0.2 rounded border border-amber-300/80">PVT LTD</span>
                        </div>
                        <p class="text-[9.5px] sm:text-[10px] font-bold text-emerald-800 uppercase tracking-[0.14em] mt-0.5">
                            Ayurvedic & Cosmetics
                        </p>
                    </div>
                </a>

                <!-- Desktop Haute Navigation Links -->
                <nav class="hidden lg:flex items-center gap-1 xl:gap-1.5 text-xs font-semibold text-slate-700 tracking-wide">
                    
                    <!-- Home -->
                    <a href="{{ route('home') }}" 
                       class="px-3.5 py-2 rounded-full transition-all duration-200 {{ request()->routeIs('home') ? 'bg-[#0b2417] text-amber-200 font-bold shadow-xs' : 'hover:text-[#0b2417] hover:bg-stone-100' }}">
                        Home
                    </a>

                    <!-- About Us -->
                    <a href="{{ route('about') }}" 
                       class="px-3.5 py-2 rounded-full transition-all duration-200 {{ request()->routeIs('about') ? 'bg-[#0b2417] text-amber-200 font-bold shadow-xs' : 'hover:text-[#0b2417] hover:bg-stone-100' }}">
                        About Us
                    </a>

                    <!-- Formulations Mega Dropdown -->
                    <div class="relative group">
                        <a href="{{ route('products.index') }}" 
                           class="px-3.5 py-2 rounded-full transition-all duration-200 inline-flex items-center gap-1.5 {{ request()->routeIs('products.*') ? 'bg-[#0b2417] text-amber-200 font-bold shadow-xs' : 'hover:text-[#0b2417] hover:bg-stone-100' }}">
                            <span>Formulations</span>
                            <span class="w-1.5 h-1.5 rounded-full {{ request()->routeIs('products.*') ? 'bg-amber-300' : 'bg-emerald-600' }}"></span>
                            <svg class="w-3.5 h-3.5 opacity-60 group-hover:rotate-180 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </a>

                        <!-- Floating Luxury Dropdown Menu -->
                        <div class="absolute left-1/2 -translate-x-1/2 top-full pt-3 w-80 opacity-0 translate-y-2 pointer-events-none group-hover:opacity-100 group-hover:translate-y-0 group-hover:pointer-events-auto transition-all duration-200 z-50">
                            <div class="bg-white/98 backdrop-blur-2xl rounded-2xl shadow-2xl border border-stone-200/90 p-3.5 space-y-1.5">
                                <div class="px-2 py-1 text-[10px] font-bold uppercase tracking-wider text-slate-400 border-b border-stone-100 pb-1">
                                    Dynamic Formulation Segments
                                </div>
                                <a href="{{ route('products.index', ['category' => 'ayurvedic']) }}" class="flex items-center justify-between p-2 rounded-xl hover:bg-emerald-50/80 transition">
                                    <div class="flex items-center gap-2.5">
                                        <span class="text-sm">🌿</span>
                                        <div>
                                            <div class="text-xs font-bold text-slate-800">Ayurvedic Formulations</div>
                                            <div class="text-[10px] text-slate-500">Classical Tailam & Lepams</div>
                                        </div>
                                    </div>
                                    <span class="text-[10px] text-emerald-800 font-bold">&rarr;</span>
                                </a>
                                <a href="{{ route('products.index', ['category' => 'skincare']) }}" class="flex items-center justify-between p-2 rounded-xl hover:bg-emerald-50/80 transition">
                                    <div class="flex items-center gap-2.5">
                                        <span class="text-sm">✨</span>
                                        <div>
                                            <div class="text-xs font-bold text-slate-800">Skincare & Serums</div>
                                            <div class="text-[10px] text-slate-500">Vitamin C & Aloe Hydragels</div>
                                        </div>
                                    </div>
                                    <span class="text-[10px] text-emerald-800 font-bold">&rarr;</span>
                                </a>
                                <a href="{{ route('products.index', ['category' => 'haircare']) }}" class="flex items-center justify-between p-2 rounded-xl hover:bg-emerald-50/80 transition">
                                    <div class="flex items-center gap-2.5">
                                        <span class="text-sm">💧</span>
                                        <div>
                                            <div class="text-xs font-bold text-slate-800">Haircare & Scalp Therapy</div>
                                            <div class="text-[10px] text-slate-500">Bhringraj & Red Onion Oils</div>
                                        </div>
                                    </div>
                                    <span class="text-[10px] text-emerald-800 font-bold">&rarr;</span>
                                </a>
                                <a href="{{ route('products.index', ['category' => 'perfumes']) }}" class="flex items-center justify-between p-2 rounded-xl hover:bg-emerald-50/80 transition">
                                    <div class="flex items-center gap-2.5">
                                        <span class="text-sm">🌸</span>
                                        <div>
                                            <div class="text-xs font-bold text-slate-800">Artisanal Perfumes & Attars</div>
                                            <div class="text-[10px] text-slate-500">Mitti & Royal Oudh Blends</div>
                                        </div>
                                    </div>
                                    <span class="text-[10px] text-emerald-800 font-bold">&rarr;</span>
                                </a>
                                <div class="pt-2 border-t border-stone-100 text-center">
                                    <a href="{{ route('products.index') }}" class="text-[11px] font-bold text-emerald-900 hover:underline block py-0.5">
                                        View All 12+ Dynamic Products &rarr;
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- B2B & OEM Services -->
                    <a href="{{ route('services.b2b') }}" 
                       class="px-3.5 py-2 rounded-full transition-all duration-200 inline-flex items-center gap-1.5 {{ request()->routeIs('services.b2b') ? 'bg-[#0b2417] text-amber-200 font-bold shadow-xs' : 'hover:text-[#0b2417] hover:bg-stone-100' }}">
                        <span>B2B & OEM</span>
                        <span class="text-[9px] font-bold bg-amber-100 text-amber-900 px-1.5 py-0.2 rounded-full">Contract Mfg</span>
                    </a>

                    <!-- Consultancy -->
                    <a href="{{ route('services.consultancy') }}" 
                       class="px-3.5 py-2 rounded-full transition-all duration-200 {{ request()->routeIs('services.consultancy') ? 'bg-[#0b2417] text-amber-200 font-bold shadow-xs' : 'hover:text-[#0b2417] hover:bg-stone-100' }}">
                        Consultancy
                    </a>

                    <!-- Contact -->
                    <a href="{{ route('contact.index') }}" 
                       class="px-3.5 py-2 rounded-full transition-all duration-200 {{ request()->routeIs('contact.*') ? 'bg-[#0b2417] text-amber-200 font-bold shadow-xs' : 'hover:text-[#0b2417] hover:bg-stone-100' }}">
                        Contact
                    </a>
                </nav>

                <!-- Right Action Cluster -->
                <div class="flex items-center gap-2 sm:gap-3">
                    
                    <!-- Search / Dynamic Products Icon Link -->
                    <a href="{{ route('products.index') }}" title="Search Products"
                       class="w-9 h-9 rounded-full bg-stone-100 hover:bg-emerald-50 text-slate-700 hover:text-emerald-900 flex items-center justify-center transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    </a>

                    <!-- Luxury CTA Button with Light Sheen -->
                    <button onclick="openEnquiryModal('Enterprise B2B / OEM Consultation', null, 'b2b_oem')" 
                            class="relative overflow-hidden group bg-gradient-to-r from-[#081c12] via-[#0f2e1e] to-[#1b4d33] hover:from-[#0b2417] hover:to-[#081c12] text-white px-4 sm:px-5 py-2.5 rounded-full font-bold text-xs tracking-wide shadow-md shadow-emerald-950/20 hover:shadow-lg transition-all duration-300 border border-emerald-700/40 shrink-0">
                        <span class="absolute inset-0 w-1/2 h-full bg-gradient-to-r from-transparent via-white/20 to-transparent skew-x-12 -translate-x-full group-hover:translate-x-[300%] transition-transform duration-1000"></span>
                        <div class="relative flex items-center gap-1.5">
                            <span class="text-amber-200">Request OEM Quote</span>
                            <svg class="w-3.5 h-3.5 text-amber-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </div>
                    </button>

                    <!-- Mobile Hamburger Button -->
                    <button id="mobileMenuBtn" aria-label="Toggle navigation" 
                            class="lg:hidden w-9 h-9 rounded-full bg-stone-100 hover:bg-stone-200 text-slate-800 flex items-center justify-center transition border border-stone-200">
                        <svg id="menuIcon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7h16M4 12h16M4 17h16"/></svg>
                        <svg id="closeIcon" class="w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                </div>

            </div>

            <!-- Mobile Floating Menu Card -->
            <div id="mobileMenu" class="hidden lg:hidden mt-2 bg-white/98 backdrop-blur-2xl border border-stone-200 rounded-3xl p-5 shadow-2xl space-y-2">
                <a href="{{ route('home') }}" class="block px-4 py-2.5 rounded-xl text-xs font-bold {{ request()->routeIs('home') ? 'bg-[#0b2417] text-amber-200' : 'text-slate-700 hover:bg-stone-50' }}">
                    Home
                </a>
                <a href="{{ route('about') }}" class="block px-4 py-2.5 rounded-xl text-xs font-bold {{ request()->routeIs('about') ? 'bg-[#0b2417] text-amber-200' : 'text-slate-700 hover:bg-stone-50' }}">
                    About Us & Board of Directors
                </a>
                <a href="{{ route('products.index') }}" class="block px-4 py-2.5 rounded-xl text-xs font-bold {{ request()->routeIs('products.*') ? 'bg-[#0b2417] text-amber-200' : 'text-slate-700 hover:bg-stone-50' }}">
                    Dynamic Formulations Catalog
                </a>
                <a href="{{ route('services.b2b') }}" class="block px-4 py-2.5 rounded-xl text-xs font-bold {{ request()->routeIs('services.b2b') ? 'bg-[#0b2417] text-amber-200' : 'text-slate-700 hover:bg-stone-50' }}">
                    B2B & OEM Contract Manufacturing
                </a>
                <a href="{{ route('services.consultancy') }}" class="block px-4 py-2.5 rounded-xl text-xs font-bold {{ request()->routeIs('services.consultancy') ? 'bg-[#0b2417] text-amber-200' : 'text-slate-700 hover:bg-stone-50' }}">
                    Consultancy & Marketing Advisory
                </a>
                <a href="{{ route('contact.index') }}" class="block px-4 py-2.5 rounded-xl text-xs font-bold {{ request()->routeIs('contact.*') ? 'bg-[#0b2417] text-amber-200' : 'text-slate-700 hover:bg-stone-50' }}">
                    Contact Us (Aurangabad & Gaya)
                </a>

                <div class="pt-3 border-t border-stone-100 flex flex-col gap-2">
                    <button onclick="openEnquiryModal('Mobile Enterprise Quotation', null, 'b2b_oem')" 
                            class="w-full bg-[#081c12] text-amber-200 font-bold text-xs py-3 rounded-xl shadow-md text-center">
                        Request OEM Proposal
                    </button>
                    <div class="text-[10px] text-slate-500 text-center">
                        Aurangabad & Gaya Operational Footprint (Bihar)
                    </div>
                </div>
            </div>

        </header>
    </div>

    <!-- Global Flash Notification -->
    @if(session('success_message'))
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-3 relative z-30">
            <div class="bg-emerald-50 border border-emerald-300 rounded-2xl px-4 py-3 text-emerald-950 shadow-sm flex items-center justify-between gap-3">
                <div class="flex items-center gap-3">
                    <span class="w-7 h-7 rounded-full bg-emerald-800 text-amber-300 flex items-center justify-center shrink-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    </span>
                    <p class="text-xs font-semibold">{{ session('success_message') }}</p>
                </div>
                <button onclick="this.parentElement.parentElement.remove()" class="text-emerald-800 hover:text-emerald-950 p-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
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
