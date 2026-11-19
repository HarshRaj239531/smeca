<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-100/80 text-[#203a31]">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'SMECA Enterprise Admin Portal')</title>

    <link rel="icon" type="image/png" href="{{ asset('images/smeca-logo.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

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
<body class="min-h-full flex antialiased bg-[#f4f6f0] text-[#203a31] selection:bg-[#203a31] selection:text-[#c0caa7]">

    <!-- Sidebar Backdrop for Mobile -->
    <div id="sidebarBackdrop" onclick="toggleAdminSidebar()" class="fixed inset-0 bg-slate-950/60 backdrop-blur-xs z-40 hidden lg:hidden"></div>

    <!-- Left Sidebar Navigation -->
    <aside id="adminSidebar" class="fixed inset-y-0 left-0 z-50 w-72 bg-[#1b2b24] text-[#c0caa7] flex flex-col justify-between transition-transform duration-300 transform -translate-x-full lg:translate-x-0 border-r border-white/10 shadow-2xl">
        
        <!-- Top Brand Header -->
        <div>
            <div class="h-20 flex items-center justify-between px-6 border-b border-white/10 bg-[#14221c]">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3">
                    <img src="{{ asset('images/smeca-logo.png') }}" alt="SMECA Logo" class="h-10 w-auto object-contain bg-white/10 p-1 rounded-xl">
                    <div class="flex flex-col leading-none">
                        <span class="text-xl font-bold font-serif-display text-white tracking-wide">SMECA</span>
                        <span class="text-[8.5px] font-bold tracking-[0.22em] uppercase text-[#c0caa7] mt-1">OPERATIONS PORTAL</span>
                    </div>
                </a>
                <button onclick="toggleAdminSidebar()" class="lg:hidden text-white/70 hover:text-white p-1">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>

            <!-- Logged-in Admin Card -->
            <div class="p-5 border-b border-white/10 bg-white/5">
                <div class="flex items-center gap-3">
                    <div class="relative w-11 h-11 rounded-2xl bg-gradient-to-br from-[#c0caa7] to-[#7f9166] text-[#1b2b24] flex items-center justify-center font-serif-display font-bold text-lg shadow-sm">
                        {{ substr(auth()->user()->name ?? 'A', 0, 1) }}
                        <span class="absolute -bottom-0.5 -right-0.5 w-3 h-3 bg-emerald-400 border-2 border-[#1b2b24] rounded-full"></span>
                    </div>
                    <div class="flex-1 min-w-0">
                        <h4 class="text-xs font-bold text-white truncate">{{ auth()->user()->name ?? 'Administrator' }}</h4>
                        <p class="text-[10px] text-[#c0caa7]/70 truncate">{{ auth()->user()->email ?? 'admin@smeca.com' }}</p>
                        <span class="inline-block mt-1 px-2 py-0.5 rounded text-[9px] font-bold uppercase tracking-wider bg-emerald-500/20 text-emerald-300 border border-emerald-500/30">
                            Super Admin
                        </span>
                    </div>
                </div>
            </div>

            <!-- Navigation Links -->
            <nav class="p-4 space-y-6 overflow-y-auto max-h-[calc(100vh-270px)] scrollbar-none text-xs font-semibold">
                
                <!-- Group 1: Core Desk -->
                <div class="space-y-1">
                    <span class="px-3 text-[10px] font-bold uppercase tracking-widest text-white/40 block mb-2">
                        Core CRM Desk
                    </span>
                    <a href="{{ route('admin.dashboard') }}" 
                       class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl transition {{ request()->routeIs('admin.dashboard') && !request()->has('type') ? 'bg-[#c0caa7] text-[#1b2b24] font-bold shadow-sm' : 'text-[#c0caa7]/90 hover:bg-white/10 hover:text-white' }}">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                        <span>Dashboard Overview</span>
                    </a>
                    <a href="{{ route('admin.inquiries') }}" 
                       class="flex items-center justify-between px-3.5 py-2.5 rounded-xl transition {{ request()->routeIs('admin.inquiries') && !request()->has('type') ? 'bg-[#c0caa7] text-[#1b2b24] font-bold shadow-sm' : 'text-[#c0caa7]/90 hover:bg-white/10 hover:text-white' }}">
                        <div class="flex items-center gap-3">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/></svg>
                            <span>Customer Inquiries</span>
                        </div>
                        @php $unreadCount = \App\Models\Inquiry::where('status', 'new')->count(); @endphp
                        @if($unreadCount > 0)
                            <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-500 text-white">
                                {{ $unreadCount }}
                            </span>
                        @endif
                    </a>
                </div>

                <!-- Group 2: Business Channels -->
                <div class="space-y-1">
                    <span class="px-3 text-[10px] font-bold uppercase tracking-widest text-white/40 block mb-2">
                        Channels & Verticals
                    </span>
                    <a href="{{ route('admin.inquiries', ['type' => 'b2b_oem']) }}" 
                       class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl transition {{ request('type') == 'b2b_oem' ? 'bg-[#c0caa7] text-[#1b2b24] font-bold shadow-sm' : 'text-[#c0caa7]/90 hover:bg-white/10 hover:text-white' }}">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                        <span>B2B & OEM Leads</span>
                    </a>
                    <a href="{{ route('admin.inquiries', ['type' => 'product']) }}" 
                       class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl transition {{ request('type') == 'product' ? 'bg-[#c0caa7] text-[#1b2b24] font-bold shadow-sm' : 'text-[#c0caa7]/90 hover:bg-white/10 hover:text-white' }}">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                        <span>Skincare Box Orders</span>
                    </a>
                    <a href="{{ route('admin.inquiries', ['type' => 'distributorship']) }}" 
                       class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl transition {{ request('type') == 'distributorship' ? 'bg-[#c0caa7] text-[#1b2b24] font-bold shadow-sm' : 'text-[#c0caa7]/90 hover:bg-white/10 hover:text-white' }}">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                        <span>Distributorship Desk</span>
                    </a>
                </div>

                <!-- Group 3: Formulations Catalog -->
                <div class="space-y-1">
                    <span class="px-3 text-[10px] font-bold uppercase tracking-widest text-white/40 block mb-2">
                        Catalog & Products
                    </span>
                    <a href="{{ route('admin.products') }}" 
                       class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl transition {{ request()->routeIs('admin.products') ? 'bg-[#c0caa7] text-[#1b2b24] font-bold shadow-sm' : 'text-[#c0caa7]/90 hover:bg-white/10 hover:text-white' }}">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                        <span>Formulations Catalog</span>
                    </a>
                </div>

                <!-- Group 4: Quick Actions -->
                <div class="space-y-1">
                    <span class="px-3 text-[10px] font-bold uppercase tracking-widest text-white/40 block mb-2">
                        Export & Tools
                    </span>
                    <a href="{{ route('admin.inquiries.export') }}" 
                       class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-[#c0caa7]/90 hover:bg-white/10 hover:text-white transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                        <span>Export CSV / Excel</span>
                    </a>
                    <button type="button" onclick="openManualInquiryModal()" 
                            class="w-full text-left flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-emerald-300 hover:bg-white/10 transition cursor-pointer">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                        <span>Log Offline Lead</span>
                    </button>
                    <a href="{{ route('home') }}" target="_blank" 
                       class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-[#c0caa7]/90 hover:bg-white/10 hover:text-white transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                        <span>View Live Website</span>
                    </a>
                </div>

            </nav>
        </div>

        <!-- Bottom Logout Action -->
        <div class="p-4 border-t border-white/10 bg-[#14221c]">
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" 
                        class="w-full bg-rose-600/90 hover:bg-rose-600 text-white font-semibold text-xs py-2.5 px-4 rounded-xl transition duration-200 flex items-center justify-center gap-2 cursor-pointer shadow-xs">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                    <span>Secure Sign Out</span>
                </button>
            </form>
        </div>

    </aside>

    <!-- Main Content Wrapper (offset by sidebar on desktop) -->
    <div class="flex-1 flex flex-col lg:pl-72 min-h-screen">
        
        <!-- Top Sticky Header -->
        <header class="h-20 bg-white border-b border-stone-200/80 sticky top-0 z-30 shadow-2xs flex items-center justify-between px-4 sm:px-8">
            
            <div class="flex items-center gap-4">
                <!-- Mobile Toggle Button -->
                <button onclick="toggleAdminSidebar()" class="lg:hidden p-2 rounded-xl text-[#203a31] hover:bg-stone-100 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>

                <!-- Page Breadcrumbs -->
                <div class="flex items-center gap-2 text-xs font-semibold text-slate-500">
                    <a href="{{ route('admin.dashboard') }}" class="hover:text-[#203a31]">Admin</a>
                    <span>/</span>
                    <span class="text-[#203a31] font-bold">@yield('page_name', 'Operations Desk')</span>
                </div>
            </div>

            <!-- Top Right Action Controls -->
            <div class="flex items-center gap-3">
                <button type="button" onclick="openManualInquiryModal()" 
                        class="bg-blue-600 hover:bg-blue-700 text-white text-xs font-semibold px-4 py-2 rounded-xl transition flex items-center gap-1.5 shadow-xs cursor-pointer">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                    <span class="hidden sm:inline">Log New Lead</span>
                </button>

                <a href="{{ route('admin.inquiries.export') }}" 
                   class="bg-stone-100 hover:bg-stone-200 text-[#203a31] border border-stone-200 text-xs font-semibold px-3.5 py-2 rounded-xl transition flex items-center gap-1.5 shadow-2xs">
                    <svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                    <span class="hidden sm:inline">Export CSV</span>
                </a>
            </div>

        </header>

        <!-- Main Body Content -->
        <main class="flex-1 p-4 sm:p-8">
            @yield('content')
        </main>

    </div>

    <!-- Manual Offline Inquiry Logging Modal -->
    <div id="manualInquiryModal" class="fixed inset-0 z-50 hidden overflow-y-auto bg-slate-950/70 backdrop-blur-xs flex items-center justify-center p-4">
        <div class="relative bg-white rounded-2xl shadow-2xl max-w-lg w-full border border-stone-200 overflow-hidden transform transition-all duration-300">
            <div class="bg-[#1b2b24] text-white p-6 relative">
                <button onclick="closeManualInquiryModal()" class="absolute top-5 right-5 text-white/70 hover:text-white text-xl p-1">&times;</button>
                <div class="text-[10px] font-bold uppercase tracking-widest text-[#c0caa7]">Direct Lead Entry</div>
                <h3 class="text-xl font-serif-display font-medium text-white">Log Offline Phone / Direct Lead</h3>
            </div>
            
            <form action="{{ route('admin.inquiries.manual') }}" method="POST" class="p-6 space-y-4">
                @csrf
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-[#203a31] mb-1">Customer Name <span class="text-rose-600">*</span></label>
                        <input type="text" name="name" required placeholder="e.g. Anand Kumar"
                               class="w-full bg-[#f6f8f3] border border-stone-300 rounded-xl px-3 py-2 text-xs focus:bg-white focus:border-[#203a31] focus:outline-hidden">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-[#203a31] mb-1">Company / Brand</label>
                        <input type="text" name="company_name" placeholder="Business name (Optional)"
                               class="w-full bg-[#f6f8f3] border border-stone-300 rounded-xl px-3 py-2 text-xs focus:bg-white focus:border-[#203a31] focus:outline-hidden">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-[#203a31] mb-1">Phone / WhatsApp <span class="text-rose-600">*</span></label>
                        <input type="tel" name="phone" required placeholder="+91 94310 00000"
                               class="w-full bg-[#f6f8f3] border border-stone-300 rounded-xl px-3 py-2 text-xs focus:bg-white focus:border-[#203a31] focus:outline-hidden">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-[#203a31] mb-1">Email ID <span class="text-rose-600">*</span></label>
                        <input type="email" name="email" required placeholder="name@domain.com"
                               class="w-full bg-[#f6f8f3] border border-stone-300 rounded-xl px-3 py-2 text-xs focus:bg-white focus:border-[#203a31] focus:outline-hidden">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-[#203a31] mb-1">Inquiry Category</label>
                        <select name="inquiry_type" class="w-full bg-[#f6f8f3] border border-stone-300 rounded-xl px-3 py-2 text-xs focus:bg-white focus:border-[#203a31] focus:outline-hidden">
                            <option value="product">SMECA Skincare Box Order</option>
                            <option value="b2b_oem">Third-Party OEM / Contract Mfg</option>
                            <option value="distributorship">Stockist / Distributorship</option>
                            <option value="consultancy">Consultancy & Advisory</option>
                            <option value="general">General Query</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-[#203a31] mb-1">Initial Status</label>
                        <select name="status" class="w-full bg-[#f6f8f3] border border-stone-300 rounded-xl px-3 py-2 text-xs focus:bg-white focus:border-[#203a31] focus:outline-hidden">
                            <option value="new">New (Uncontacted)</option>
                            <option value="contacted">Contacted</option>
                            <option value="in_discussion" selected>In Discussion</option>
                            <option value="closed">Closed</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-[#203a31] mb-1">Target Product / Subject</label>
                    <input type="text" name="product_name" placeholder="e.g. Kumkumadi Tailam (500 units)"
                           class="w-full bg-[#f6f8f3] border border-stone-300 rounded-xl px-3 py-2 text-xs focus:bg-white focus:border-[#203a31] focus:outline-hidden">
                </div>

                <div>
                    <label class="block text-xs font-bold text-[#203a31] mb-1">Requirement Notes / Message <span class="text-rose-600">*</span></label>
                    <textarea name="message" rows="3" required placeholder="Enter requirements discussed with client..."
                              class="w-full bg-[#f6f8f3] border border-stone-300 rounded-xl p-3 text-xs focus:bg-white focus:border-[#203a31] focus:outline-hidden"></textarea>
                </div>

                <div class="flex items-center justify-end gap-3 pt-2">
                    <button type="button" onclick="closeManualInquiryModal()" class="px-4 py-2 text-xs font-semibold text-slate-600 hover:text-slate-800">
                        Cancel
                    </button>
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold text-xs px-5 py-2.5 rounded-xl shadow-xs cursor-pointer">
                        Save Lead to Database
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function toggleAdminSidebar() {
            const sidebar = document.getElementById('adminSidebar');
            const backdrop = document.getElementById('sidebarBackdrop');
            if (sidebar.classList.contains('-translate-x-full')) {
                sidebar.classList.remove('-translate-x-full');
                backdrop.classList.remove('hidden');
            } else {
                sidebar.classList.add('-translate-x-full');
                backdrop.classList.add('hidden');
            }
        }

        function openManualInquiryModal() {
            document.getElementById('manualInquiryModal').classList.remove('hidden');
        }

        function closeManualInquiryModal() {
            document.getElementById('manualInquiryModal').classList.add('hidden');
        }
    </script>

</body>
</html>
