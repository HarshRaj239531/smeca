<!-- Top Sticky Header -->
<header id="adminHeader" class="h-20 bg-white border-b border-stone-200/80 sticky top-0 z-30 shadow-2xs flex items-center justify-between px-4 sm:px-8">
    
    <div class="flex items-center gap-4">
        <!-- Mobile Sidebar Toggle Button -->
        <button onclick="toggleAdminSidebar()" class="lg:hidden p-2 rounded-xl text-slate-700 hover:bg-stone-100 transition cursor-pointer">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
        </button>

        <!-- Page Breadcrumbs -->
        <div class="flex items-center gap-2 text-xs font-semibold text-slate-500">
            <a href="{{ route('admin.dashboard') }}" class="hover:text-slate-900 transition">Admin Portal</a>
            <span>/</span>
            <span class="text-slate-900 font-bold">@yield('page_name', 'Operations Desk')</span>
        </div>
    </div>

    <!-- Top Right Action Controls -->
    <div class="flex items-center gap-2.5 sm:gap-3">
        
        <!-- Live Theme & Appearance Customizer Trigger -->
        <button type="button" onclick="window.SmecaTheme.openDrawer()" 
                title="Open Theme & Appearance Customizer"
                class="bg-stone-100 hover:bg-stone-200 text-slate-800 border border-stone-200/80 text-xs font-semibold px-3.5 py-2 rounded-xl transition flex items-center gap-2 shadow-2xs cursor-pointer group">
            <span class="text-sm group-hover:scale-110 transition-transform">🎨</span>
            <span class="hidden md:inline font-bold">Customize UI</span>
        </button>

        <!-- Log Lead Action -->
        <button type="button" onclick="openManualInquiryModal()" 
                class="bg-blue-600 hover:bg-blue-700 text-white text-xs font-semibold px-3.5 sm:px-4 py-2 rounded-xl transition flex items-center gap-1.5 shadow-xs cursor-pointer">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
            <span class="hidden sm:inline">Log Lead</span>
        </button>

        <!-- Export CSV Action -->
        <a href="{{ route('admin.inquiries.export') }}" 
           class="bg-stone-100 hover:bg-stone-200 text-slate-700 border border-stone-200 text-xs font-semibold px-3 sm:px-3.5 py-2 rounded-xl transition flex items-center gap-1.5 shadow-2xs">
            <svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
            <span class="hidden sm:inline">Export</span>
        </a>

    </div>

</header>
