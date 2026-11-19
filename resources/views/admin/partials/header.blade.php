<!-- Top Executive Header (Matching Reference Architecture) -->
<header id="adminHeader" class="h-20 bg-white border-b border-stone-200/90 sticky top-0 z-30 shadow-2xs flex items-center justify-between px-3 sm:px-6 lg:px-8 transition-colors w-full max-w-full min-w-0 box-border">
    
    <!-- Left Section: Hamburger + Active Module Pill -->
    <div class="flex items-center gap-3 sm:gap-4 shrink-0">
        
        <!-- Sidebar Hamburger Toggle -->
        <button onclick="toggleAdminSidebar()" 
                title="Toggle Sidebar Navigation"
                class="p-2 rounded-xl text-slate-600 hover:text-slate-900 hover:bg-stone-100 transition cursor-pointer">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>

        <!-- Active Module Pill Badge (like ATTENDANCE pill in reference) -->
        <div class="hidden sm:flex items-center gap-2 bg-[#e8f7f0] border border-emerald-300/80 text-emerald-800 px-3.5 py-1.5 rounded-full text-xs font-extrabold tracking-wider uppercase shadow-2xs shrink-0">
            <svg class="w-4 h-4 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
            </svg>
            <span>@yield('module_name', 'OPERATIONS DESK')</span>
        </div>

    </div>

    <!-- Right Section: Enterprise Pill + Live Clock + Control Icons + User Avatar -->
    <div class="flex items-center gap-2 sm:gap-2.5 min-w-0">
        
        <!-- Enterprise Company Pill (like STARTUP WEB SUPPORT in reference) -->
        <div class="hidden 2xl:flex items-center gap-2 bg-stone-50 border border-stone-200/90 text-slate-700 px-3.5 py-1.5 rounded-xl text-xs font-bold shadow-2xs shrink-0">
            <svg class="w-4 h-4 text-slate-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
            </svg>
            <span class="tracking-wide">SMECA INDUSTRY PVT. LTD.</span>
        </div>

        <!-- Real-Time Live Clock Pill (like Thu, Nov 19 • 12:40:50 PM in reference) -->
        <div class="hidden xl:flex items-center gap-2 bg-stone-50 border border-stone-200/90 text-slate-800 px-3 py-1.5 rounded-xl text-xs font-bold shadow-2xs font-mono shrink-0">
            <svg class="w-3.5 h-3.5 text-slate-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <span id="headerLiveDate">Thu, Nov 19</span>
            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
            <span id="headerLiveTime" class="text-emerald-700 font-extrabold tracking-wider">--:--:--</span>
        </div>

        <!-- Group of Rounded Control Icon Buttons (Exact look from reference) -->
        <div class="flex items-center gap-1 sm:gap-1.5 bg-stone-50/80 p-1 rounded-2xl border border-stone-200/90 shadow-2xs shrink-0">
            
            <!-- Fullscreen Toggle Button -->
            <button type="button" onclick="toggleAdminFullscreen()" 
                    title="Toggle Fullscreen View"
                    class="w-8 h-8 rounded-xl bg-white border border-stone-200/80 hover:bg-stone-100 text-slate-600 hover:text-slate-900 flex items-center justify-center transition shadow-2xs cursor-pointer">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"/>
                </svg>
            </button>

            <!-- Sun / Theme Customizer Button -->
            <button type="button" onclick="window.SmecaTheme.openDrawer()" 
                    title="Appearance & Theme Customizer"
                    class="w-8 h-8 rounded-xl bg-white border border-stone-200/80 hover:bg-amber-50 text-amber-600 hover:text-amber-700 flex items-center justify-center transition shadow-2xs cursor-pointer">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                </svg>
            </button>

            <!-- Keyboard Shortcuts Button -->
            <button type="button" onclick="openShortcutsModal()" 
                    title="Keyboard Shortcuts"
                    class="w-8 h-8 rounded-xl bg-white border border-stone-200/80 hover:bg-stone-100 text-slate-600 hover:text-slate-900 flex items-center justify-center transition shadow-2xs cursor-pointer">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
            </button>

            <!-- Help / Info Button -->
            <button type="button" onclick="openHelpModal()" 
                    title="Help & Operations Guide"
                    class="w-8 h-8 rounded-xl bg-white border border-stone-200/80 hover:bg-stone-100 text-slate-600 hover:text-slate-900 flex items-center justify-center transition shadow-2xs cursor-pointer">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </button>

            <!-- Notification Bell with Counter -->
            @php $newInquiriesCount = \App\Models\Inquiry::where('status', 'new')->count(); @endphp
            <a href="{{ route('admin.inquiries', ['status' => 'new']) }}" 
               title="{{ $newInquiriesCount }} new inquiries waiting"
               class="relative w-8 h-8 rounded-xl bg-white border border-stone-200/80 hover:bg-stone-100 text-slate-600 hover:text-slate-900 flex items-center justify-center transition shadow-2xs">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                </svg>
                @if($newInquiriesCount > 0)
                    <span class="absolute -top-1 -right-1 w-4 h-4 rounded-full bg-rose-500 text-white text-[9px] font-extrabold flex items-center justify-center shadow-xs">
                        {{ $newInquiriesCount > 9 ? '9+' : $newInquiriesCount }}
                    </span>
                @endif
            </a>

            <!-- User Initials Circle Avatar (like HA in reference) -->
            <div class="relative w-8 h-8 rounded-full bg-[#101b2b] text-white flex items-center justify-center font-bold text-xs tracking-wider shadow-xs ml-0.5 cursor-pointer"
                 title="{{ auth()->user()->name ?? 'Administrator' }} (Super Admin)">
                {{ strtoupper(substr(auth()->user()->name ?? 'SA', 0, 2)) }}
                <span class="absolute bottom-0 right-0 w-2.5 h-2.5 rounded-full bg-emerald-400 border-2 border-white"></span>
            </div>

        </div>

        <!-- Quick Log Lead Action Button -->
        <button type="button" onclick="openManualInquiryModal()" 
                class="hidden sm:flex bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold px-3.5 py-2 rounded-xl transition items-center gap-1.5 shadow-xs cursor-pointer">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/>
            </svg>
            <span>Log Lead</span>
        </button>

    </div>

</header>

<!-- Keyboard Shortcuts Modal -->
<div id="shortcutsModal" class="fixed inset-0 z-50 hidden bg-slate-950/60 backdrop-blur-xs flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full border border-stone-200 overflow-hidden p-6">
        <div class="flex items-center justify-between pb-4 border-b border-stone-200">
            <div class="flex items-center gap-2">
                <span class="text-lg">⌨️</span>
                <h3 class="font-bold text-sm text-slate-900">Admin Keyboard Shortcuts</h3>
            </div>
            <button onclick="closeShortcutsModal()" class="text-slate-400 hover:text-slate-700 text-lg">&times;</button>
        </div>
        <div class="py-4 space-y-3 text-xs">
            <div class="flex justify-between items-center py-1">
                <span class="text-slate-600">Close open drawer or modal</span>
                <kbd class="px-2 py-1 bg-stone-100 border border-stone-300 rounded font-mono font-bold text-slate-800 text-[10px]">ESC</kbd>
            </div>
            <div class="flex justify-between items-center py-1">
                <span class="text-slate-600">Open UI Theme & Customizer</span>
                <kbd class="px-2 py-1 bg-stone-100 border border-stone-300 rounded font-mono font-bold text-slate-800 text-[10px]">T</kbd>
            </div>
            <div class="flex justify-between items-center py-1">
                <span class="text-slate-600">Log new offline lead</span>
                <kbd class="px-2 py-1 bg-stone-100 border border-stone-300 rounded font-mono font-bold text-slate-800 text-[10px]">L</kbd>
            </div>
            <div class="flex justify-between items-center py-1">
                <span class="text-slate-600">Toggle Fullscreen mode</span>
                <kbd class="px-2 py-1 bg-stone-100 border border-stone-300 rounded font-mono font-bold text-slate-800 text-[10px]">F</kbd>
            </div>
        </div>
        <div class="pt-3 border-t border-stone-200 text-right">
            <button onclick="closeShortcutsModal()" class="px-4 py-1.5 bg-slate-900 text-white rounded-xl text-xs font-bold">Got it</button>
        </div>
    </div>
</div>

<!-- Quick Help Modal -->
<div id="helpModal" class="fixed inset-0 z-50 hidden bg-slate-950/60 backdrop-blur-xs flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full border border-stone-200 overflow-hidden p-6">
        <div class="flex items-center justify-between pb-4 border-b border-stone-200">
            <div class="flex items-center gap-2">
                <span class="text-lg">❓</span>
                <h3 class="font-bold text-sm text-slate-900">SMECA Operations Support</h3>
            </div>
            <button onclick="closeHelpModal()" class="text-slate-400 hover:text-slate-700 text-lg">&times;</button>
        </div>
        <div class="py-4 space-y-3 text-xs text-slate-600 leading-relaxed">
            <p><strong>Operations Hub:</strong> Manage website leads, Ayurvedic and Cosmetic formulations, B2B OEM inquiries, and distributorship applications.</p>
            <p><strong>Offline Leads:</strong> Use the <em>"Log Lead"</em> button to log orders and client inquiries received via WhatsApp or phone call.</p>
            <p><strong>Theme Studio:</strong> Click the sun/palette icon in the top header or sidebar to customize themes, dark mode, colors, and typography in real-time.</p>
        </div>
        <div class="pt-3 border-t border-stone-200 text-right">
            <button onclick="closeHelpModal()" class="px-4 py-1.5 bg-emerald-700 text-white rounded-xl text-xs font-bold">Close Guide</button>
        </div>
    </div>
</div>

<!-- Header Real-Time Clock & Control Scripts -->
<script>
    function updateHeaderLiveClock() {
        const timeEl = document.getElementById('headerLiveTime');
        const dateEl = document.getElementById('headerLiveDate');
        if (!timeEl) return;
        const now = new Date();
        const options = { weekday: 'short', month: 'short', day: 'numeric' };
        if (dateEl) dateEl.textContent = now.toLocaleDateString('en-US', options);
        timeEl.textContent = now.toLocaleTimeString('en-US', { hour12: true });
    }
    setInterval(updateHeaderLiveClock, 1000);
    updateHeaderLiveClock();

    function toggleAdminFullscreen() {
        if (!document.fullscreenElement) {
            document.documentElement.requestFullscreen().catch(() => {});
        } else {
            if (document.exitFullscreen) {
                document.exitFullscreen().catch(() => {});
            }
        }
    }

    function openShortcutsModal() {
        document.getElementById('shortcutsModal').classList.remove('hidden');
    }
    function closeShortcutsModal() {
        document.getElementById('shortcutsModal').classList.add('hidden');
    }

    function openHelpModal() {
        document.getElementById('helpModal').classList.remove('hidden');
    }
    function closeHelpModal() {
        document.getElementById('helpModal').classList.add('hidden');
    }

    // Keyboard Hotkeys
    document.addEventListener('keydown', function(e) {
        if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA' || e.target.tagName === 'SELECT') {
            return;
        }
        if (e.key === 't' || e.key === 'T') {
            if (window.SmecaTheme && typeof window.SmecaTheme.openDrawer === 'function') {
                window.SmecaTheme.openDrawer();
            }
        }
        if (e.key === 'l' || e.key === 'L') {
            openManualInquiryModal();
        }
        if (e.key === 'f' || e.key === 'F') {
            toggleAdminFullscreen();
        }
    });
</script>
