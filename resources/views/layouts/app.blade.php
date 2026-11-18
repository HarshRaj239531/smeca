<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-stone-50 text-slate-800 antialiased">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'SMECA INDUSTRY PRIVATE LIMITED | Ayurvedic, Cosmetics & Wellness Manufacturing')</title>
    <meta name="description" content="@yield('meta_description', 'SMECA Industry Private Limited is a premier manufacturer of Cosmetics, Skincare, Personal Care and Ayurvedic Formulations headquartered in Bihar (Aurangabad & Gaya). Specializing in B2C wellness and B2B/OEM private labeling.')">

    <!-- Google Fonts: Plus Jakarta Sans & Playfair Display -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        .font-serif-display {
            font-family: 'Playfair Display', Georgia, serif;
        }
        body {
            font-family: 'Plus Jakarta Sans', system-ui, sans-serif;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-full flex flex-col bg-white text-slate-800">

    <!-- Top Announcement Bar -->
    <div class="bg-emerald-950 text-emerald-100 text-xs py-2 px-4 border-b border-emerald-900/60">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-2">
            <div class="flex items-center gap-3">
                <span class="inline-flex items-center gap-1.5 bg-emerald-800/60 text-emerald-200 px-2 py-0.5 rounded-full text-[11px] font-medium tracking-wide">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                    GMP & AYUSH Standards
                </span>
                <span class="text-emerald-200/90 hidden md:inline">
                    Authentic Herbal & Ayurvedic Formulations • Operating in Aurangabad & Gaya (Bihar, India)
                </span>
            </div>
            <div class="flex items-center gap-5 text-[11px] tracking-wide text-emerald-200/90">
                <a href="tel:+919876543210" class="hover:text-white transition flex items-center gap-1.5">
                    <svg class="w-3.5 h-3.5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    <span>+91 94700 00000 / 06186-00000</span>
                </a>
                <span class="text-emerald-800 hidden sm:inline">|</span>
                <a href="mailto:info@smecaindustry.com" class="hover:text-white transition flex items-center gap-1.5">
                    <svg class="w-3.5 h-3.5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    <span>contact@smecaindustry.com</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Main Navigation Header -->
    <header class="sticky top-0 z-40 bg-white/95 backdrop-blur-md border-b border-stone-200 transition-all duration-200 shadow-xs">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Brand Logo & Identity -->
                <a href="{{ route('home') }}" class="group flex items-center gap-3.5">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-emerald-800 to-emerald-950 flex items-center justify-center text-white shadow-md shadow-emerald-900/10 group-hover:scale-105 transition-transform duration-200">
                        <!-- Ayurvedic leaf / cosmetic pestle emblem -->
                        <svg class="w-7 h-7 text-emerald-300" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22l1-2.3A4.49 4.49 0 0 0 8 20C19 20 22 3 22 3c-1 2-8 2.25-13 3.25S2 11.5 2 13.5s1.75 3.75 1.75 3.75C7 8 17 8 17 8z"/>
                        </svg>
                    </div>
                    <div>
                        <div class="flex items-center gap-1.5">
                            <span class="text-xl sm:text-2xl font-black tracking-tight text-emerald-950 font-serif-display">SMECA</span>
                            <span class="text-[10px] tracking-widest uppercase font-bold text-amber-700 bg-amber-50 px-1.5 py-0.5 rounded border border-amber-200/60">Pvt Ltd</span>
                        </div>
                        <p class="text-[10px] sm:text-[11px] font-medium text-emerald-800 tracking-wider uppercase">Cosmetics • Skincare • Ayurveda</p>
                    </div>
                </a>

                <!-- Desktop Navigation Links -->
                <nav class="hidden lg:flex items-center gap-1 xl:gap-2">
                    <a href="{{ route('home') }}" class="px-3.5 py-2 rounded-lg text-sm font-semibold transition-colors {{ request()->routeIs('home') ? 'text-emerald-800 bg-emerald-50' : 'text-slate-600 hover:text-emerald-800 hover:bg-stone-50' }}">
                        Home
                    </a>
                    <a href="{{ route('about') }}" class="px-3.5 py-2 rounded-lg text-sm font-semibold transition-colors {{ request()->routeIs('about') ? 'text-emerald-800 bg-emerald-50' : 'text-slate-600 hover:text-emerald-800 hover:bg-stone-50' }}">
                        About Us
                    </a>
                    <a href="{{ route('products.index') }}" class="px-3.5 py-2 rounded-lg text-sm font-semibold transition-colors {{ request()->routeIs('products.*') ? 'text-emerald-800 bg-emerald-50' : 'text-slate-600 hover:text-emerald-800 hover:bg-stone-50' }}">
                        Our Products
                        <span class="ml-1 inline-flex items-center px-1.5 py-0.2 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-800">Dynamic</span>
                    </a>
                    <a href="{{ route('services.b2b') }}" class="px-3.5 py-2 rounded-lg text-sm font-semibold transition-colors {{ request()->routeIs('services.b2b') ? 'text-emerald-800 bg-emerald-50' : 'text-slate-600 hover:text-emerald-800 hover:bg-stone-50' }}">
                        B2B & OEM Services
                    </a>
                    <a href="{{ route('services.consultancy') }}" class="px-3.5 py-2 rounded-lg text-sm font-semibold transition-colors {{ request()->routeIs('services.consultancy') ? 'text-emerald-800 bg-emerald-50' : 'text-slate-600 hover:text-emerald-800 hover:bg-stone-50' }}">
                        Consultancy & Marketing
                    </a>
                    <a href="{{ route('contact.index') }}" class="px-3.5 py-2 rounded-lg text-sm font-semibold transition-colors {{ request()->routeIs('contact.*') ? 'text-emerald-800 bg-emerald-50' : 'text-slate-600 hover:text-emerald-800 hover:bg-stone-50' }}">
                        Contact Us
                    </a>
                </nav>

                <!-- Header CTA Button -->
                <div class="hidden sm:flex items-center gap-3">
                    <button onclick="openEnquiryModal('General Enterprise Enquiry', null, 'b2b_oem')" class="inline-flex items-center gap-2 bg-emerald-800 hover:bg-emerald-900 text-white font-medium text-xs sm:text-sm px-4 sm:px-5 py-2.5 rounded-xl shadow-sm hover:shadow-md transition-all duration-200">
                        <span>Get B2B Quote</span>
                        <svg class="w-4 h-4 text-emerald-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </button>
                </div>

                <!-- Mobile Menu Button -->
                <div class="flex items-center lg:hidden">
                    <button id="mobileMenuBtn" aria-label="Toggle navigation menu" class="p-2.5 rounded-lg text-slate-600 hover:text-emerald-800 hover:bg-stone-100 transition">
                        <svg id="menuIcon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                        <svg id="closeIcon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Drawer Menu -->
        <div id="mobileMenu" class="hidden lg:hidden border-t border-stone-200 bg-white px-4 pt-3 pb-6 space-y-2 shadow-xl">
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded-lg text-base font-medium {{ request()->routeIs('home') ? 'bg-emerald-50 text-emerald-800 font-semibold' : 'text-slate-700 hover:bg-stone-50' }}">
                Home
            </a>
            <a href="{{ route('about') }}" class="block px-3 py-2 rounded-lg text-base font-medium {{ request()->routeIs('about') ? 'bg-emerald-50 text-emerald-800 font-semibold' : 'text-slate-700 hover:bg-stone-50' }}">
                About Us
            </a>
            <a href="{{ route('products.index') }}" class="block px-3 py-2 rounded-lg text-base font-medium {{ request()->routeIs('products.*') ? 'bg-emerald-50 text-emerald-800 font-semibold' : 'text-slate-700 hover:bg-stone-50' }}">
                Our Products (Dynamic)
            </a>
            <a href="{{ route('services.b2b') }}" class="block px-3 py-2 rounded-lg text-base font-medium {{ request()->routeIs('services.b2b') ? 'bg-emerald-50 text-emerald-800 font-semibold' : 'text-slate-700 hover:bg-stone-50' }}">
                B2B & OEM Services
            </a>
            <a href="{{ route('services.consultancy') }}" class="block px-3 py-2 rounded-lg text-base font-medium {{ request()->routeIs('services.consultancy') ? 'bg-emerald-50 text-emerald-800 font-semibold' : 'text-slate-700 hover:bg-stone-50' }}">
                Consultancy & Marketing
            </a>
            <a href="{{ route('contact.index') }}" class="block px-3 py-2 rounded-lg text-base font-medium {{ request()->routeIs('contact.*') ? 'bg-emerald-50 text-emerald-800 font-semibold' : 'text-slate-700 hover:bg-stone-50' }}">
                Contact Us
            </a>
            <div class="pt-3 border-t border-stone-200">
                <button onclick="openEnquiryModal('General Mobile Inquiry', null, 'b2b_oem')" class="w-full text-center bg-emerald-800 text-white font-medium py-3 rounded-xl shadow-sm">
                    Request B2B Quotation / Catalog
                </button>
            </div>
        </div>
    </header>

    <!-- Global Flash Notification -->
    @if(session('success_message'))
        <div class="bg-emerald-50 border-b border-emerald-200 px-4 py-3.5 text-emerald-900 shadow-xs">
            <div class="max-w-7xl mx-auto flex items-center justify-between gap-3">
                <div class="flex items-center gap-3">
                    <span class="w-8 h-8 rounded-full bg-emerald-600 text-white flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    </span>
                    <p class="text-sm font-medium">{{ session('success_message') }}</p>
                </div>
                <button onclick="this.parentElement.parentElement.remove()" class="text-emerald-700 hover:text-emerald-950 p-1">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
        </div>
    @endif

    <!-- Main Body Content -->
    <main class="flex-1">
        @yield('content')
    </main>

    <!-- Universal Product / Service Enquiry Modal -->
    <div id="enquiryModal" class="fixed inset-0 z-50 hidden overflow-y-auto bg-slate-900/60 backdrop-blur-xs flex items-center justify-center p-4">
        <div class="relative bg-white rounded-2xl shadow-2xl max-w-xl w-full border border-stone-200 overflow-hidden transform transition-all">
            <!-- Modal Header -->
            <div class="bg-gradient-to-r from-emerald-950 via-emerald-900 to-emerald-950 text-white p-6 relative">
                <button onclick="closeEnquiryModal()" class="absolute top-5 right-5 text-emerald-200 hover:text-white p-1 rounded-lg hover:bg-emerald-800/40 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
                <div class="flex items-center gap-2 text-xs font-semibold uppercase tracking-wider text-amber-300 mb-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    SMECA Direct Inquiry
                </div>
                <h3 class="text-2xl font-serif-display font-bold">Product & Business Enquiry</h3>
                <p class="text-xs text-emerald-200/90 mt-1" id="modalSubtitle">
                    Interested in wholesale orders, OEM manufacturing, or custom formulation? Submit your query below.
                </p>
            </div>

            <!-- Modal Form -->
            <form action="{{ route('contact.store') }}" method="POST" class="p-6 space-y-4">
                @csrf
                <input type="hidden" name="product_id" id="modalProductId" value="">

                <div>
                    <label class="block text-xs font-semibold text-slate-700 uppercase tracking-wider mb-1">Selected Product / Subject</label>
                    <input type="text" name="product_name" id="modalProductName" readonly
                        class="w-full bg-emerald-50/70 border border-emerald-200 rounded-xl px-3.5 py-2.5 text-sm font-semibold text-emerald-950 focus:outline-hidden">
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1">Full Name <span class="text-rose-500">*</span></label>
                        <input type="text" name="name" required placeholder="Your full name"
                            class="w-full border border-stone-300 rounded-xl px-3.5 py-2 text-sm focus:border-emerald-600 focus:ring-1 focus:ring-emerald-600 focus:outline-hidden">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1">Company / Brand (Optional)</label>
                        <input type="text" name="company_name" placeholder="Business name or firm"
                            class="w-full border border-stone-300 rounded-xl px-3.5 py-2 text-sm focus:border-emerald-600 focus:ring-1 focus:ring-emerald-600 focus:outline-hidden">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1">Phone / WhatsApp <span class="text-rose-500">*</span></label>
                        <input type="tel" name="phone" required placeholder="+91 98765 43210"
                            class="w-full border border-stone-300 rounded-xl px-3.5 py-2 text-sm focus:border-emerald-600 focus:ring-1 focus:ring-emerald-600 focus:outline-hidden">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1">Email Address <span class="text-rose-500">*</span></label>
                        <input type="email" name="email" required placeholder="contact@example.com"
                            class="w-full border border-stone-300 rounded-xl px-3.5 py-2 text-sm focus:border-emerald-600 focus:ring-1 focus:ring-emerald-600 focus:outline-hidden">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-700 mb-1">Inquiry Type</label>
                    <select name="inquiry_type" id="modalInquiryType"
                        class="w-full border border-stone-300 rounded-xl px-3.5 py-2 text-sm bg-white focus:border-emerald-600 focus:ring-1 focus:ring-emerald-600 focus:outline-hidden">
                        <option value="product">Product Pricing & Purchase</option>
                        <option value="b2b_oem">Third-Party OEM / Private Labeling</option>
                        <option value="distributorship">Retail Distributorship / Stockist</option>
                        <option value="consultancy">Consultancy & Advisory Services</option>
                        <option value="general">General Corporate Query</option>
                    </select>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-700 mb-1">Requirements / Message <span class="text-rose-500">*</span></label>
                    <textarea name="message" id="modalMessage" rows="3" required placeholder="Describe quantity needed, customized packaging desires, or questions..."
                        class="w-full border border-stone-300 rounded-xl p-3 text-sm focus:border-emerald-600 focus:ring-1 focus:ring-emerald-600 focus:outline-hidden"></textarea>
                </div>

                <div class="flex items-center justify-end gap-3 pt-2">
                    <button type="button" onclick="closeEnquiryModal()" class="px-4 py-2 text-sm font-medium text-slate-600 hover:text-slate-800 transition">
                        Cancel
                    </button>
                    <button type="submit" class="bg-emerald-800 hover:bg-emerald-900 text-white font-medium text-sm px-6 py-2.5 rounded-xl shadow-sm hover:shadow transition">
                        Submit Enquiry
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Corporate Footer -->
    <footer class="bg-emerald-950 text-white border-t border-emerald-900 pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-12 border-b border-emerald-900/60">
                
                <!-- Col 1: Brand Info -->
                <div class="lg:col-span-2 space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-lg bg-emerald-800 flex items-center justify-center text-white">
                            <svg class="w-6 h-6 text-emerald-300" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22l1-2.3A4.49 4.49 0 0 0 8 20C19 20 22 3 22 3c-1 2-8 2.25-13 3.25S2 11.5 2 13.5s1.75 3.75 1.75 3.75C7 8 17 8 17 8z"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-xl font-bold font-serif-display tracking-tight text-white">SMECA INDUSTRY</span>
                            <span class="block text-[10px] tracking-widest uppercase text-emerald-300 font-semibold">Private Limited</span>
                        </div>
                    </div>
                    <p class="text-sm text-emerald-200/80 leading-relaxed max-w-md">
                        SMECA Industry Private Limited is a specialized Indian manufacturing enterprise dedicated to natural Cosmetics, Skincare, Haircare, Perfumes, and authentic Ayurvedic herbal wellness solutions.
                    </p>
                    <div class="pt-2 text-xs text-emerald-300/90 space-y-1">
                        <p><strong class="text-white">Primary Industry:</strong> Cosmetics, Skincare, Personal Care & Wellness</p>
                        <p><strong class="text-white">Specialty Niche:</strong> Herbal & Ayurvedic Formulations</p>
                        <p><strong class="text-white">Operating Region:</strong> Bihar, India – particularly Aurangabad and Gaya districts</p>
                    </div>
                </div>

                <!-- Col 2: Quick Links -->
                <div>
                    <h4 class="text-sm font-bold uppercase tracking-wider text-amber-300 mb-4 font-serif-display">Company</h4>
                    <ul class="space-y-2.5 text-sm text-emerald-200/80">
                        <li><a href="{{ route('home') }}" class="hover:text-white transition">Home</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-white transition">About Us</a></li>
                        <li><a href="{{ route('products.index') }}" class="hover:text-white transition">Our Products</a></li>
                        <li><a href="{{ route('services.b2b') }}" class="hover:text-white transition">B2B & OEM Services</a></li>
                        <li><a href="{{ route('services.consultancy') }}" class="hover:text-white transition">Consultancy & Marketing</a></li>
                        <li><a href="{{ route('contact.index') }}" class="hover:text-white transition">Contact Us</a></li>
                    </ul>
                </div>

                <!-- Col 3: Product Segments -->
                <div>
                    <h4 class="text-sm font-bold uppercase tracking-wider text-amber-300 mb-4 font-serif-display">Formulations</h4>
                    <ul class="space-y-2.5 text-sm text-emerald-200/80">
                        <li><a href="{{ route('products.index', ['category' => 'ayurvedic']) }}" class="hover:text-white transition">Ayurvedic Formulations</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'skincare']) }}" class="hover:text-white transition">Skincare & Face Serums</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'haircare']) }}" class="hover:text-white transition">Haircare & Scalp Oils</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'perfumes']) }}" class="hover:text-white transition">Perfumes & Pure Attars</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'cosmetics']) }}" class="hover:text-white transition">Clean Herbal Cosmetics</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'wellness']) }}" class="hover:text-white transition">Therapeutic Wellness</a></li>
                    </ul>
                </div>

                <!-- Col 4: Corporate Governance & Board -->
                <div>
                    <h4 class="text-sm font-bold uppercase tracking-wider text-amber-300 mb-4 font-serif-display">Board of Directors</h4>
                    <ul class="space-y-2 text-xs text-emerald-200/80">
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                            <span><strong>Sanjit Kumar</strong> – Director</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                            <span><strong>Sonu Kumar</strong> – Director</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                            <span><strong>Sarina Kumari</strong> – Director</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                            <span><strong>Yogendra Das</strong> – Director</span>
                        </li>
                    </ul>
                    <div class="mt-5 pt-4 border-t border-emerald-900/60">
                        <a href="{{ route('admin.inquiries') }}" class="inline-flex items-center gap-1.5 text-xs text-emerald-400 hover:text-white transition">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            <span>Staff Inquiry Portal</span>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Bottom Badges & Copyright -->
            <div class="pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-emerald-300/70">
                <p>© {{ date('Y') }} SMECA INDUSTRY PRIVATE LIMITED. All rights reserved. Registered under Companies Act, India.</p>
                <div class="flex flex-wrap items-center gap-4 text-[11px]">
                    <span class="inline-flex items-center gap-1 text-emerald-300">
                        <svg class="w-3.5 h-3.5 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        100% Ayurvedic & Herbal Purity
                    </span>
                    <span class="inline-flex items-center gap-1 text-emerald-300">
                        <svg class="w-3.5 h-3.5 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        GMP & Quality Standard Compliant
                    </span>
                    <span class="inline-flex items-center gap-1 text-emerald-300">
                        <svg class="w-3.5 h-3.5 text-amber-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        Aurangabad & Gaya Operational Footprint
                    </span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Interactive Scripts for Menu & Modal -->
    <script>
        // Mobile menu toggle
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

        // Universal Enquiry Modal Functions
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

        // Close on backdrop click
        document.getElementById('enquiryModal')?.addEventListener('click', function(e) {
            if (e.target === this) {
                closeEnquiryModal();
            }
        });
    </script>

    @stack('scripts')
</body>
</html>
