<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-white text-[#203a31] antialiased selection:bg-[#203a31] selection:text-[#c0caa7]">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'SMECA Box for Beautiful Skin | SMECA INDUSTRY PRIVATE LIMITED')</title>
    <meta name="description" content="@yield('meta_description', 'SMECA Industry Private Limited offers a set of organic cosmetics and authentic Ayurvedic formulations for everyday skin treatment and radiant wellness.')">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="SMECA INDUSTRY PRIVATE LIMITED">
    <meta property="og:title" content="@yield('title', 'SMECA Box for Beautiful Skin | SMECA INDUSTRY PRIVATE LIMITED')">
    <meta property="og:description" content="@yield('meta_description', 'SMECA Industry Private Limited offers a set of organic cosmetics and authentic Ayurvedic formulations for everyday skin treatment and radiant wellness.')">
    <meta property="og:image" content="{{ asset('images/smeca-logo.png') }}">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'SMECA Box for Beautiful Skin | SMECA INDUSTRY PRIVATE LIMITED')">
    <meta name="twitter:description" content="@yield('meta_description', 'SMECA Industry Private Limited offers a set of organic cosmetics and authentic Ayurvedic formulations for everyday skin treatment and radiant wellness.')">
    <meta name="twitter:image" content="{{ asset('images/smeca-logo.png') }}">

    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
    {!! json_encode([
      chr(64) . 'context' => 'https://schema.org',
      chr(64) . 'type' => 'Organization',
      'name' => 'SMECA Industry Private Limited',
      'alternateName' => 'SMECA Professional',
      'url' => url('/'),
      'logo' => asset('images/smeca-logo.png'),
      'description' => 'Manufacturer of premium organic cosmetics, Ayurvedic skincare, and contract B2B cosmetic formulations in Bihar, India.',
      'address' => [
        chr(64) . 'type' => 'PostalAddress',
        'addressRegion' => 'Bihar',
        'addressCountry' => 'IN',
      ],
      'founder' => [
        [chr(64) . 'type' => 'Person', 'name' => 'Sanjit Kumar'],
        [chr(64) . 'type' => 'Person', 'name' => 'Sonu Kumar'],
        [chr(64) . 'type' => 'Person', 'name' => 'Sarina Kumari'],
        [chr(64) . 'type' => 'Person', 'name' => 'Yogendra Das'],
      ],
    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/smeca-logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/smeca-logo.png') }}">

    <!-- Fonts: Playfair Display & Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;0,800;1,500;1,600&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        .font-serif-display {
            font-family: 'Playfair Display', Georgia, Cambria, serif;
        }
        body {
            font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-full flex flex-col {{ request()->routeIs('home') ? 'bg-[#c0caa7]' : 'bg-white' }} text-[#203a31] overflow-x-hidden">

    <!-- Scroll Progress Indicator (GSAP ScrollTrigger) -->
    <div id="scroll-progress"></div>

    <!-- Integrated Sage Navigation Bar (Exact Match to User Reference Image) -->
    <header class="w-full {{ request()->routeIs('home') ? 'bg-[#c0caa7]' : 'bg-white border-b border-stone-200 shadow-2xs' }} z-40 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12">
            <div class="flex items-center justify-between h-20 sm:h-24">
                
                <!-- Brand Identity with Official SMECA Logo -->
                <a href="{{ route('home') }}" class="group flex items-center gap-3">
                    <img src="{{ asset('images/smeca-logo.png') }}" alt="SMECA Logo" class="h-11 sm:h-13 w-auto object-contain transition-transform group-hover:scale-105">
                    <div class="flex flex-col items-start leading-none">
                        <span class="text-xl sm:text-[22px] font-bold tracking-tight text-[#203a31] font-serif-display">
                            SMECA
                        </span>
                        <span class="text-[8px] sm:text-[8.5px] font-semibold text-[#445437] tracking-[0.22em] uppercase mt-1">
                            INDUSTRY PVT. LTD.
                        </span>
                    </div>
                </a>

                <!-- Center Minimalist Navigation Links -->
                <nav class="hidden md:flex items-center gap-7 lg:gap-10 text-xs sm:text-[13px] font-medium text-[#203a31]/90 tracking-wide">
                    <a href="{{ route('about') }}" class="hover:text-[#121c0f] transition-colors {{ request()->routeIs('about') ? 'font-bold text-[#121c0f]' : '' }}">
                        About
                    </a>
                    <a href="{{ route('products.index') }}" class="hover:text-[#121c0f] transition-colors {{ request()->routeIs('products.*') ? 'font-bold text-[#121c0f]' : '' }}">
                        Formulations
                    </a>
                    <a href="{{ route('services.b2b') }}" class="hover:text-[#121c0f] transition-colors {{ request()->routeIs('services.b2b') ? 'font-bold text-[#121c0f]' : '' }}">
                        B2B & OEM
                    </a>
                    <a href="{{ route('home') }}#testimonials" class="hover:text-[#121c0f] transition-colors">
                        Testimonials
                    </a>
                    <a href="{{ route('blog.index') }}" class="hover:text-[#121c0f] transition-colors {{ request()->routeIs('blog.*') ? 'font-bold text-[#121c0f]' : '' }}">
                        Blog
                    </a>
                    <a href="{{ route('contact.index') }}" class="hover:text-[#121c0f] transition-colors {{ request()->routeIs('contact.*') ? 'font-bold text-[#121c0f]' : '' }}">
                        Contacts
                    </a>
                </nav>

                <!-- Right Action Button (Matching 'Order Shine Box Now') -->
                <div class="hidden sm:flex items-center gap-4">
                    <button onclick="openEnquiryModal('SMECA Curated Skincare Box', null, 'product')" 
                            class="shine-effect bg-blue-600 hover:bg-blue-700 text-white text-xs sm:text-[12.5px] font-medium px-6 py-2.5 rounded-xs tracking-wide shadow-xs transition duration-200 cursor-pointer">
                        Order SMECA Box Now
                    </button>
                </div>

                <!-- Mobile Menu Button -->
                <div class="flex items-center md:hidden">
                    <button id="mobileMenuBtn" aria-label="Toggle navigation" class="p-2 text-[#203a31] hover:opacity-80 transition">
                        <svg id="menuIcon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7h16M4 12h16M4 17h16"/></svg>
                        <svg id="closeIcon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                </div>

            </div>
        </div>

        <!-- Mobile Drawer -->
        <div id="mobileMenu" class="hidden md:hidden {{ request()->routeIs('home') ? 'bg-[#c0caa7]' : 'bg-white' }} border-t border-stone-200 px-6 pt-3 pb-6 space-y-3">
            <a href="{{ route('home') }}" class="block py-2 text-sm font-medium text-[#203a31]">
                Home
            </a>
            <a href="{{ route('about') }}" class="block py-2 text-sm font-medium text-[#203a31]">
                About Us & Directors
            </a>
            <a href="{{ route('products.index') }}" class="block py-2 text-sm font-medium text-[#203a31]">
                Formulations Catalog
            </a>
            <a href="{{ route('services.b2b') }}" class="block py-2 text-sm font-medium text-[#203a31]">
                B2B & OEM Services
            </a>
            <a href="{{ route('home') }}#testimonials" class="block py-2 text-sm font-medium text-[#203a31]">
                Testimonials
            </a>
            <a href="{{ route('blog.index') }}" class="block py-2 text-sm font-medium text-[#203a31] {{ request()->routeIs('blog.*') ? 'font-bold' : '' }}">
                Blog & Journal
            </a>
            <a href="{{ route('home') }}#faq" class="block py-2 text-sm font-medium text-[#203a31]">
                FAQ
            </a>
            <a href="{{ route('services.consultancy') }}" class="block py-2 text-sm font-medium text-[#203a31]">
                Consultancy & Advisory
            </a>
            <a href="{{ route('contact.index') }}" class="block py-2 text-sm font-medium text-[#203a31]">
                Contacts (Aurangabad & Gaya)
            </a>
            <div class="pt-2">
                <button onclick="openEnquiryModal('SMECA Curated Skincare Box', null, 'product')" 
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white text-xs font-semibold py-3 rounded-xs text-center shadow-xs cursor-pointer">
                    Order SMECA Box Now
                </button>
            </div>
        </div>
    </header>

    <!-- Global Flash Notification -->
    @if(session('success_message'))
        <div class="max-w-7xl mx-auto px-6 sm:px-10 mt-2 relative z-30">
            <div class="bg-white/90 backdrop-blur-md border border-[#203a31]/20 rounded-md px-4 py-3 text-[#203a31] shadow-xs flex items-center justify-between gap-3">
                <div class="flex items-center gap-3">
                    <span class="w-6 h-6 rounded-full bg-[#263e32] text-white flex items-center justify-center shrink-0">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                    </span>
                    <p class="text-xs font-medium">{{ session('success_message') }}</p>
                </div>
                <button onclick="this.parentElement.parentElement.remove()" class="text-[#203a31] hover:opacity-75 p-1">
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
        <div class="relative bg-[#f6f8f3] rounded-2xl shadow-2xl max-w-xl w-full border border-[#203a31]/20 overflow-hidden transform transition-all duration-300">
            
            <!-- Modal Header -->
            <div class="bg-[#263e32] text-white p-6 sm:p-7 relative">
                <button onclick="closeEnquiryModal()" class="absolute top-5 right-5 text-white/70 hover:text-white p-1 rounded transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
                <div class="text-[10px] font-bold uppercase tracking-widest text-[#c0caa7] mb-1">
                    SMECA Direct Business Desk
                </div>
                <h3 class="text-2xl font-serif-display font-medium text-white">Order or Enquire About SMECA Box</h3>
                <p class="text-xs text-[#c0caa7]/90 mt-1" id="modalSubtitle">
                    Interested in retail boxes, custom Ayurvedic formulations, or wholesale OEM production?
                </p>
            </div>

            <!-- Modal Form -->
            <form action="{{ route('contact.store') }}" method="POST" class="p-6 sm:p-7 space-y-4">
                @csrf
                <input type="hidden" name="product_id" id="modalProductId" value="">

                <div>
                    <label class="block text-[11px] font-bold text-[#203a31] uppercase tracking-wider mb-1">Selected Product / Focus</label>
                    <input type="text" name="product_name" id="modalProductName" readonly
                        class="w-full bg-[#e6ebdd] border border-[#203a31]/20 rounded px-3.5 py-2.5 text-xs sm:text-sm font-semibold text-[#203a31] focus:outline-hidden">
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-semibold text-[#203a31] mb-1">Full Name <span class="text-rose-600">*</span></label>
                        <input type="text" name="name" required placeholder="e.g. Rahul Sharma"
                            class="w-full bg-white border border-stone-300 rounded px-3.5 py-2.5 text-xs sm:text-sm focus:border-[#263e32] focus:outline-hidden">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-[#203a31] mb-1">Company / Brand (Optional)</label>
                        <input type="text" name="company_name" placeholder="Business name"
                            class="w-full bg-white border border-stone-300 rounded px-3.5 py-2.5 text-xs sm:text-sm focus:border-[#263e32] focus:outline-hidden">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-semibold text-[#203a31] mb-1">Phone / WhatsApp <span class="text-rose-600">*</span></label>
                        <input type="tel" name="phone" required placeholder="+91 94700 00000"
                            class="w-full bg-white border border-stone-300 rounded px-3.5 py-2.5 text-xs sm:text-sm focus:border-[#263e32] focus:outline-hidden">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-[#203a31] mb-1">Email Address <span class="text-rose-600">*</span></label>
                        <input type="email" name="email" required placeholder="name@domain.com"
                            class="w-full bg-white border border-stone-300 rounded px-3.5 py-2.5 text-xs sm:text-sm focus:border-[#263e32] focus:outline-hidden">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-[#203a31] mb-1">Inquiry Category</label>
                    <select name="inquiry_type" id="modalInquiryType"
                        class="w-full bg-white border border-stone-300 rounded px-3.5 py-2.5 text-xs sm:text-sm focus:border-[#263e32] focus:outline-hidden">
                        <option value="product">Order SMECA Skincare Box</option>
                        <option value="b2b_oem">Third-Party OEM / Private Labeling</option>
                        <option value="distributorship">Super Stockist / Distributorship</option>
                        <option value="consultancy">Consultancy & Advisory</option>
                        <option value="general">General Corporate Query</option>
                    </select>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-[#203a31] mb-1">Requirements / Message <span class="text-rose-600">*</span></label>
                    <textarea name="message" id="modalMessage" rows="3" required placeholder="Specify your desired box quantity, delivery location, or custom formulation details..."
                        class="w-full bg-white border border-stone-300 rounded p-3 text-xs sm:text-sm focus:border-[#263e32] focus:outline-hidden"></textarea>
                </div>

                <div class="flex items-center justify-end gap-3 pt-2">
                    <button type="button" onclick="closeEnquiryModal()" class="px-4 py-2 text-xs font-semibold text-slate-600 hover:text-slate-800 transition">
                        Cancel
                    </button>
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium text-xs sm:text-sm px-6 py-2.5 rounded-xs shadow-xs transition cursor-pointer">
                        Submit Order / Inquiry
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Corporate Minimalist Footer -->
    <footer class="bg-[#202716] text-[#c0caa7] border-t border-[#12170c] pt-16 pb-10">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 lg:px-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-12 border-b border-white/10">
                
                <!-- Col 1: Brand Info -->
                <div class="lg:col-span-2 space-y-4">
                    <a href="{{ route('home') }}" class="inline-flex items-center gap-3 bg-white/10 hover:bg-white/15 backdrop-blur-xs border border-white/15 px-4 py-2.5 rounded-xl transition">
                        <img src="{{ asset('images/smeca-logo.png') }}" alt="SMECA Logo" class="h-10 w-auto object-contain">
                        <div class="flex flex-col items-start leading-none">
                            <span class="text-xl font-serif-display font-medium text-white tracking-tight">SMECA</span>
                            <span class="block text-[8.5px] tracking-[0.22em] uppercase text-[#c0caa7]/90 font-semibold mt-1">INDUSTRY PVT. LTD.</span>
                        </div>
                    </a>
                    <p class="text-xs sm:text-sm text-[#c0caa7]/80 leading-relaxed max-w-md">
                        SMECA Industry Private Limited manufactures premium organic cosmetics, skincare treatments, and authentic Ayurvedic wellness formulations in Bihar (Aurangabad & Gaya).
                    </p>
                    <div class="pt-1 text-xs text-[#c0caa7]/90 space-y-1">
                        <p><strong class="text-white">Operating Region:</strong> Bihar, India – Aurangabad & Gaya Districts</p>
                        <p><strong class="text-white">Directors:</strong> Sanjit Kumar, Sonu Kumar, Sarina Kumari, Yogendra Das</p>
                    </div>
                </div>

                <!-- Col 2: Navigation -->
                <div>
                    <h4 class="text-xs font-bold uppercase tracking-widest text-white mb-4">Navigation</h4>
                    <ul class="space-y-2 text-xs text-[#c0caa7]/80">
                        <li><a href="{{ route('home') }}" class="hover:text-white transition">Home</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-white transition">About Us</a></li>
                        <li><a href="{{ route('products.index') }}" class="hover:text-white transition">Formulations</a></li>
                        <li><a href="{{ route('services.b2b') }}" class="hover:text-white transition">B2B & OEM</a></li>
                        <li><a href="{{ route('services.consultancy') }}" class="hover:text-white transition">Consultancy</a></li>
                        <li><a href="{{ route('blog.index') }}" class="hover:text-white transition">Blog & Journal</a></li>
                        <li><a href="{{ route('contact.index') }}" class="hover:text-white transition">Contacts</a></li>
                    </ul>
                </div>

                <!-- Col 3: Categories -->
                <div>
                    <h4 class="text-xs font-bold uppercase tracking-widest text-white mb-4">Categories</h4>
                    <ul class="space-y-2 text-xs text-[#c0caa7]/80">
                        <li><a href="{{ route('products.index', ['category' => 'ayurvedic']) }}" class="hover:text-white transition">Ayurvedic Tailams</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'skincare']) }}" class="hover:text-white transition">Skincare & Serums</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'haircare']) }}" class="hover:text-white transition">Haircare Therapy</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'perfumes']) }}" class="hover:text-white transition">Artisanal Perfumes</a></li>
                        <li><a href="{{ route('products.index', ['category' => 'cosmetics']) }}" class="hover:text-white transition">Organic Cosmetics</a></li>
                    </ul>
                </div>

                <!-- Col 4: Operations -->
                <div>
                    <h4 class="text-xs font-bold uppercase tracking-widest text-white mb-4">Operations</h4>
                    <p class="text-xs text-[#c0caa7]/80 leading-relaxed mb-4">
                        Aurangabad Manufacturing Facility & Gaya Botanical Hub.
                    </p>
                    <p class="text-xs text-[#c0caa7]/60">
                        Bihar, India • Certified cGMP Facilities
                    </p>
                </div>

            </div>

            <!-- Bottom Copyright -->
            <div class="pt-8 flex flex-col sm:flex-row justify-between items-center gap-4 text-xs text-[#c0caa7]/60">
                <p>© 2026 SMECA Industry Private Limited. All Rights Reserved.</p>
                <div class="flex items-center gap-4 text-[11px]">
                    <span>✓ 100% Organic & Ayurvedic</span>
                    <span>✓ cGMP Cleanroom Quality</span>
                    <span>✓ Bihar, India</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Fallback Handlers if bundle is deferred -->
    <script>
        if (!window.openEnquiryModal) {
            window.openEnquiryModal = function(productName = 'SMECA Skincare Box', productId = null, type = 'product') {
                const modal = document.getElementById('enquiryModal');
                const nameInput = document.getElementById('modalProductName');
                const idInput = document.getElementById('modalProductId');
                const typeInput = document.getElementById('modalInquiryType');
                const messageInput = document.getElementById('modalMessage');

                if (modal) {
                    if (nameInput) nameInput.value = productName;
                    if (idInput) idInput.value = productId || '';
                    if (typeInput) typeInput.value = type;
                    if (messageInput) {
                        messageInput.placeholder = `Please share your quantity requirement, delivery location, or private label details for ${productName}...`;
                    }
                    modal.classList.remove('hidden');
                    document.body.classList.add('overflow-hidden');
                }
            };
        }

        if (!window.closeEnquiryModal) {
            window.closeEnquiryModal = function() {
                const modal = document.getElementById('enquiryModal');
                if (modal) {
                    modal.classList.add('hidden');
                    document.body.classList.remove('overflow-hidden');
                }
            };
        }
    </script>

    @stack('scripts')
</body>
</html>
