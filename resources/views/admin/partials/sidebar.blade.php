<!-- Left Sidebar Navigation -->
<aside id="adminSidebar" class="fixed inset-y-0 left-0 z-50 w-72 bg-white text-[#203a31] flex flex-col justify-between border-r border-stone-200/90 shadow-xl">
    
    <!-- Top Brand & User Profile -->
    <div>
        <!-- Brand Header (Pure White Background) -->
        <div class="h-20 flex items-center justify-between px-6 border-b border-stone-200/80 bg-white sidebar-brand-box">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3">
                <img src="{{ asset('images/smeca-logo.png') }}" alt="SMECA Logo" class="h-10 w-auto object-contain bg-stone-100 p-1.5 rounded-xl border border-stone-200/60 shadow-2xs">
                <div class="flex flex-col leading-none">
                    <span class="text-xl font-bold font-serif-display text-[#1b2b24] tracking-wide">SMECA</span>
                    <span class="text-[8.5px] font-bold tracking-[0.22em] uppercase text-emerald-800 mt-1">OPERATIONS PORTAL</span>
                </div>
            </a>
            <button onclick="toggleAdminSidebar()" title="Minimize / Collapse Sidebar" 
                    class="p-1.5 rounded-lg text-slate-400 hover:text-slate-700 hover:bg-stone-100 transition cursor-pointer">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7"/>
                </svg>
            </button>
        </div>

        <!-- Logged-in Super Admin Card -->
        <div class="p-4 border-b border-stone-200/80 bg-stone-50/70 sidebar-profile-box">
            <div class="flex items-center gap-3">
                <div class="relative w-11 h-11 rounded-2xl bg-gradient-to-br from-[#203a31] to-[#395c4e] text-white flex items-center justify-center font-serif-display font-bold text-lg shadow-xs shrink-0">
                    {{ substr(auth()->user()->name ?? 'A', 0, 1) }}
                    <span class="absolute -bottom-0.5 -right-0.5 w-3 h-3 bg-emerald-500 border-2 border-white rounded-full"></span>
                </div>
                <div class="flex-1 min-w-0">
                    <h4 class="text-xs font-bold text-slate-900 truncate">{{ auth()->user()->name ?? 'Administrator' }}</h4>
                    <p class="text-[10px] text-slate-500 truncate">{{ auth()->user()->email ?? 'admin@smeca.com' }}</p>
                    <div class="flex items-center gap-1.5 mt-1">
                        <span class="inline-block px-2 py-0.5 rounded text-[9px] font-bold uppercase tracking-wider bg-emerald-100 text-emerald-800 border border-emerald-200/60">
                            Super Admin
                        </span>
                        <span class="inline-block w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation Links -->
        <nav class="p-3.5 space-y-5 overflow-y-auto max-h-[calc(100vh-270px)] custom-theme-scroll text-xs font-semibold">
            
            <!-- Group 1: Core Desk -->
            <div class="space-y-1">
                <span class="px-3 text-[10px] font-bold uppercase tracking-widest text-slate-400 block mb-1.5 sidebar-group-header">
                    Core CRM Desk
                </span>
                <a href="{{ route('admin.dashboard') }}" 
                   class="sidebar-link-item flex items-center gap-3 px-3.5 py-2.5 rounded-xl transition {{ request()->routeIs('admin.dashboard') && !request()->has('type') ? 'sidebar-link-active font-bold' : 'sidebar-link-inactive' }}">
                    <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                    <span>Dashboard Overview</span>
                </a>
                <a href="{{ route('admin.inquiries') }}" 
                   class="sidebar-link-item flex items-center justify-between px-3.5 py-2.5 rounded-xl transition {{ request()->routeIs('admin.inquiries') && !request()->has('type') ? 'sidebar-link-active font-bold' : 'sidebar-link-inactive' }}">
                    <div class="flex items-center gap-3">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/></svg>
                        <span>Customer Inquiries</span>
                    </div>
                    @php $unreadCount = \App\Models\Inquiry::where('status', 'new')->count(); @endphp
                    @if($unreadCount > 0)
                        <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-emerald-600 text-white shadow-xs">
                            {{ $unreadCount }}
                        </span>
                    @endif
                </a>
            </div>

            <!-- Group 2: Business Channels -->
            <div class="space-y-1">
                <span class="px-3 text-[10px] font-bold uppercase tracking-widest text-slate-400 block mb-1.5 sidebar-group-header">
                    Channels & Verticals
                </span>
                <a href="{{ route('admin.inquiries', ['type' => 'b2b_oem']) }}" 
                   class="sidebar-link-item flex items-center gap-3 px-3.5 py-2.5 rounded-xl transition {{ request('type') == 'b2b_oem' ? 'sidebar-link-active font-bold' : 'sidebar-link-inactive' }}">
                    <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    <span>B2B & OEM Leads</span>
                </a>
                <a href="{{ route('admin.inquiries', ['type' => 'product']) }}" 
                   class="sidebar-link-item flex items-center gap-3 px-3.5 py-2.5 rounded-xl transition {{ request('type') == 'product' ? 'sidebar-link-active font-bold' : 'sidebar-link-inactive' }}">
                    <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                    <span>Skincare Box Orders</span>
                </a>
                <a href="{{ route('admin.inquiries', ['type' => 'distributorship']) }}" 
                   class="sidebar-link-item flex items-center gap-3 px-3.5 py-2.5 rounded-xl transition {{ request('type') == 'distributorship' ? 'sidebar-link-active font-bold' : 'sidebar-link-inactive' }}">
                    <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                    <span>Distributorship Desk</span>
                </a>
            </div>

            <!-- Group 3: Formulations Catalog -->
            <div class="space-y-1">
                <span class="px-3 text-[10px] font-bold uppercase tracking-widest text-slate-400 block mb-1.5 sidebar-group-header">
                    Catalog & Products
                </span>
                <a href="{{ route('admin.products') }}" 
                   class="sidebar-link-item flex items-center gap-3 px-3.5 py-2.5 rounded-xl transition {{ request()->routeIs('admin.products') ? 'sidebar-link-active font-bold' : 'sidebar-link-inactive' }}">
                    <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                    <span>Formulations Catalog</span>
                </a>
            </div>

            <!-- Group 4: Appearance & Settings Studio -->
            <div class="space-y-1">
                <span class="px-3 text-[10px] font-bold uppercase tracking-widest text-slate-400 block mb-1.5 sidebar-group-header">
                    Appearance & Studio
                </span>
                <button type="button" onclick="window.SmecaTheme.openDrawer()" 
                        class="w-full text-left sidebar-link-item flex items-center justify-between px-3.5 py-2.5 rounded-xl transition hover:bg-stone-100 text-slate-700 cursor-pointer group">
                    <div class="flex items-center gap-3">
                        <span class="text-base leading-none">🎨</span>
                        <span>Theme & Appearance</span>
                    </div>
                    <span class="text-[9px] uppercase px-1.5 py-0.5 rounded font-bold bg-amber-100 text-amber-800 border border-amber-200">
                        Customize
                    </span>
                </button>
            </div>

            <!-- Group 5: Quick Tools -->
            <div class="space-y-1">
                <span class="px-3 text-[10px] font-bold uppercase tracking-widest text-slate-400 block mb-1.5 sidebar-group-header">
                    Export & Tools
                </span>
                <a href="{{ route('admin.inquiries.export') }}" 
                   class="sidebar-link-item flex items-center gap-3 px-3.5 py-2.5 rounded-xl hover:bg-stone-100 text-slate-700 transition">
                    <svg class="w-4 h-4 shrink-0 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                    <span>Export CSV / Excel</span>
                </a>
                <button type="button" onclick="openManualInquiryModal()" 
                        class="w-full text-left flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-blue-600 hover:bg-blue-50 transition cursor-pointer font-semibold">
                    <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                    <span>Log Offline Lead</span>
                </button>
                <a href="{{ route('home') }}" target="_blank" 
                   class="sidebar-link-item flex items-center gap-3 px-3.5 py-2.5 rounded-xl hover:bg-stone-100 text-slate-700 transition">
                    <svg class="w-4 h-4 shrink-0 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                    <span>View Live Website</span>
                </a>
            </div>

        </nav>
    </div>

    <!-- Bottom Logout Action (Crisp Red Button as Requested) -->
    <div class="p-4 border-t border-stone-200/80 bg-white sidebar-footer-box">
        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button type="submit" 
                    class="w-full bg-rose-600 hover:bg-rose-700 active:bg-rose-800 text-white font-semibold text-xs py-2.5 px-4 rounded-xl transition duration-200 flex items-center justify-center gap-2 cursor-pointer shadow-sm hover:shadow">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                <span>Secure Sign Out</span>
            </button>
        </form>
    </div>

</aside>
