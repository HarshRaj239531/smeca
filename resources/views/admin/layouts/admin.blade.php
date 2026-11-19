<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'SMECA Enterprise Admin Portal')</title>

    <link rel="icon" type="image/png" href="{{ asset('images/smeca-logo.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700&family=Inter:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700&family=Outfit:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Zero-Flash Theme Initializer Script -->
    <script>
        (function() {
            try {
                var saved = localStorage.getItem('smeca_admin_customizer_v2');
                if (saved) {
                    var theme = JSON.parse(saved);
                    var root = document.documentElement;
                    root.setAttribute('data-admin-themed', 'true');
                    if (theme.mode) root.setAttribute('data-admin-mode', theme.mode);
                    if (theme.sidebarBg) root.style.setProperty('--admin-sidebar-bg', theme.sidebarBg);
                    if (theme.sidebarText) root.style.setProperty('--admin-sidebar-text', theme.sidebarText);
                    if (theme.sidebarActiveBg) root.style.setProperty('--admin-sidebar-active-bg', theme.sidebarActiveBg);
                    if (theme.sidebarActiveText) root.style.setProperty('--admin-sidebar-active-text', theme.sidebarActiveText);
                    if (theme.bg) root.style.setProperty('--admin-bg', theme.bg);
                    if (theme.cardBg) root.style.setProperty('--admin-card-bg', theme.cardBg);
                    if (theme.cardBorder) root.style.setProperty('--admin-card-border', theme.cardBorder);
                    if (theme.textMain) root.style.setProperty('--admin-text-main', theme.textMain);
                    if (theme.textMuted) root.style.setProperty('--admin-text-muted', theme.textMuted);
                    if (theme.accent) root.style.setProperty('--admin-accent', theme.accent);
                    if (theme.headerBg) root.style.setProperty('--admin-header-bg', theme.headerBg);
                    if (theme.headerBorder) root.style.setProperty('--admin-header-border', theme.headerBorder);
                    if (theme.headerText) root.style.setProperty('--admin-header-text', theme.headerText);
                }

                // Check sidebar minimized state
                var isSidebarCollapsed = localStorage.getItem('smeca_admin_sidebar_collapsed');
                if (isSidebarCollapsed === 'true' && window.innerWidth >= 1024) {
                    document.documentElement.classList.add('sidebar-collapsed');
                    document.addEventListener('DOMContentLoaded', function() {
                        document.body.classList.add('sidebar-collapsed');
                    });
                }
            } catch(e) {}
        })();
    </script>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js',
        'resources/css/admin/customizer.css',
        'resources/js/admin/theme-engine.js'
    ])
</head>
<body class="admin-body min-h-full flex antialiased bg-[#f8fafc] text-[#1e293b]">

    <!-- Sidebar Backdrop for Mobile -->
    <div id="sidebarBackdrop" onclick="toggleAdminSidebar()" class="fixed inset-0 bg-slate-950/60 backdrop-blur-xs z-40 hidden lg:hidden"></div>

    <!-- Modular Pure White Admin Sidebar -->
    @include('admin.partials.sidebar')

    <!-- Main Content Wrapper (Smoothly expands when sidebar is minimized) -->
    <div id="adminMainWrapper" class="flex-1 flex flex-col min-h-screen">
        
        <!-- Modular Top Sticky Header -->
        @include('admin.partials.header')

        <!-- Main Body Content Area -->
        <main class="flex-1 p-4 sm:p-8">
            @yield('content')
        </main>

    </div>

    <!-- Modular Live Theme & Appearance Studio Drawer -->
    @include('admin.partials.theme-customizer')

    <!-- Modular Manual Offline Lead Logging Modal -->
    @include('admin.partials.manual-inquiry-modal')

    <!-- Layout Utility Scripts -->
    <script>
        function toggleAdminSidebar() {
            const isDesktop = window.innerWidth >= 1024;
            const sidebar = document.getElementById('adminSidebar');
            const backdrop = document.getElementById('sidebarBackdrop');

            if (isDesktop) {
                // Minimize / Expand sidebar on desktop
                const isCollapsed = document.body.classList.toggle('sidebar-collapsed');
                try {
                    localStorage.setItem('smeca_admin_sidebar_collapsed', isCollapsed ? 'true' : 'false');
                } catch(e) {}
            } else {
                // Open / Close drawer on mobile
                if (!sidebar) return;
                const isOpen = sidebar.classList.toggle('mobile-open');
                if (backdrop) {
                    if (isOpen) {
                        backdrop.classList.remove('hidden');
                    } else {
                        backdrop.classList.add('hidden');
                    }
                }
            }
        }

        function openManualInquiryModal() {
            document.getElementById('manualInquiryModal').classList.remove('hidden');
        }

        function closeManualInquiryModal() {
            document.getElementById('manualInquiryModal').classList.add('hidden');
        }

        // Close drawers / modals on Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                if (window.SmecaTheme && typeof window.SmecaTheme.closeDrawer === 'function') {
                    window.SmecaTheme.closeDrawer();
                }
                closeManualInquiryModal();
            }
        });
    </script>

</body>
</html>
