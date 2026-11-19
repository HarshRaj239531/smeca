/**
 * SMECA Admin Appearance & Customizer Engine
 * High-performance, zero-dependency theme engine with localStorage persistence.
 */

(function () {
    const STORAGE_KEY = 'smeca_admin_customizer_v2';

    const FONTS = {
        'Plus Jakarta Sans': "'Plus Jakarta Sans', system-ui, -apple-system, sans-serif",
        'Inter': "'Inter', system-ui, -apple-system, sans-serif",
        'Outfit': "'Outfit', system-ui, -apple-system, sans-serif",
        'Playfair Display': "'Playfair Display', Georgia, serif",
        'Cinzel': "'Cinzel', Georgia, serif",
        'Montserrat': "'Montserrat', system-ui, sans-serif",
        'Space Grotesk': "'Space Grotesk', system-ui, sans-serif"
    };

    const PRESETS = {
        'light': {
            name: 'Light Executive',
            sidebarBg: '#ffffff', // Pure white
            sidebarText: '#203a31',
            sidebarActiveBg: '#203a31',
            sidebarActiveText: '#ffffff',
            sidebarBorder: '#e2e8f0',
            sidebarHover: '#f8fafc',
            bg: '#f8fafc',
            cardBg: '#ffffff',
            cardBorder: '#e2e8f0',
            cardHover: '#f1f5f9',
            textMain: '#1e293b',
            textMuted: '#64748b',
            accent: '#203a31',
            headerBg: '#ffffff',
            headerBorder: '#e2e8f0',
            headerText: '#0f172a',
            fontFamily: 'Plus Jakarta Sans',
            fontHeading: 'Playfair Display'
        },
        'dark': {
            name: 'Midnight Dark',
            sidebarBg: '#0f172a',
            sidebarText: '#f8fafc',
            sidebarActiveBg: '#38bdf8',
            sidebarActiveText: '#0f172a',
            sidebarBorder: '#1e293b',
            sidebarHover: '#1e293b',
            bg: '#0b0f17',
            cardBg: '#151e2e',
            cardBorder: '#1e293b',
            cardHover: '#1e293b',
            textMain: '#f8fafc',
            textMuted: '#94a3b8',
            accent: '#38bdf8',
            headerBg: '#0f172a',
            headerBorder: '#1e293b',
            headerText: '#f8fafc',
            fontFamily: 'Inter',
            fontHeading: 'Inter'
        },
        'smeca-forest': {
            name: 'SMECA Ayurvedic Forest',
            sidebarBg: '#ffffff', // pure white sidebar with botanical green accents
            sidebarText: '#1b2b24',
            sidebarActiveBg: '#1b2b24',
            sidebarActiveText: '#c0caa7',
            sidebarBorder: '#e6ebdd',
            sidebarHover: '#f4f6f0',
            bg: '#f4f6f0',
            cardBg: '#ffffff',
            cardBorder: '#e6ebdd',
            cardHover: '#edf2e7',
            textMain: '#203a31',
            textMuted: '#525e3b',
            accent: '#203a31',
            headerBg: '#ffffff',
            headerBorder: '#e6ebdd',
            headerText: '#203a31',
            fontFamily: 'Plus Jakarta Sans',
            fontHeading: 'Playfair Display'
        },
        'warm-ivory': {
            name: 'Luxury Champagne',
            sidebarBg: '#ffffff',
            sidebarText: '#382e2b',
            sidebarActiveBg: '#92400e',
            sidebarActiveText: '#ffffff',
            sidebarBorder: '#f0ece1',
            sidebarHover: '#faf8f5',
            bg: '#faf8f5',
            cardBg: '#ffffff',
            cardBorder: '#f0ece1',
            cardHover: '#f5f0e6',
            textMain: '#2c2420',
            textMuted: '#786c65',
            accent: '#92400e',
            headerBg: '#ffffff',
            headerBorder: '#f0ece1',
            headerText: '#2c2420',
            fontFamily: 'Outfit',
            fontHeading: 'Playfair Display'
        },
        'oceanic': {
            name: 'Oceanic Corporate',
            sidebarBg: '#ffffff',
            sidebarText: '#1e3a8a',
            sidebarActiveBg: '#2563eb',
            sidebarActiveText: '#ffffff',
            sidebarBorder: '#dbeafe',
            sidebarHover: '#f0f4f8',
            bg: '#f0f4f8',
            cardBg: '#ffffff',
            cardBorder: '#dbeafe',
            cardHover: '#eff6ff',
            textMain: '#0f172a',
            textMuted: '#475569',
            accent: '#2563eb',
            headerBg: '#ffffff',
            headerBorder: '#dbeafe',
            headerText: '#0f172a',
            fontFamily: 'Inter',
            fontHeading: 'Inter'
        },
        'high-contrast': {
            name: 'High Contrast Stark',
            sidebarBg: '#000000',
            sidebarText: '#ffffff',
            sidebarActiveBg: '#ffffff',
            sidebarActiveText: '#000000',
            sidebarBorder: '#333333',
            sidebarHover: '#1f1f1f',
            bg: '#ffffff',
            cardBg: '#ffffff',
            cardBorder: '#000000',
            cardHover: '#f4f4f4',
            textMain: '#000000',
            textMuted: '#333333',
            accent: '#000000',
            headerBg: '#ffffff',
            headerBorder: '#000000',
            headerText: '#000000',
            fontFamily: 'Plus Jakarta Sans',
            fontHeading: 'Plus Jakarta Sans'
        }
    };

    function isColorDark(hexColor) {
        if (!hexColor || typeof hexColor !== 'string') return false;
        let c = hexColor.replace('#', '');
        if (c.length === 3) {
            c = c[0] + c[0] + c[1] + c[1] + c[2] + c[2];
        }
        if (c.length !== 6) return false;
        const r = parseInt(c.substring(0, 2), 16);
        const g = parseInt(c.substring(2, 4), 16);
        const b = parseInt(c.substring(4, 6), 16);
        // Formula for relative luminance
        const yiq = ((r * 299) + (g * 587) + (b * 114)) / 1000;
        return yiq < 128;
    }

    function getSavedTheme() {
        try {
            const raw = localStorage.getItem(STORAGE_KEY);
            if (raw) {
                return JSON.parse(raw);
            }
        } catch (e) {
            console.error('Failed to read theme from localStorage', e);
        }
        return { ...PRESETS.light, mode: 'light' };
    }

    function saveTheme(theme) {
        try {
            localStorage.setItem(STORAGE_KEY, JSON.stringify(theme));
        } catch (e) {
            console.error('Failed to save theme to localStorage', e);
        }
    }

    function applyTheme(theme) {
        const root = document.documentElement;
        
        const isDark = isColorDark(theme.bg);
        const isSidebarDark = isColorDark(theme.sidebarBg);

        // Mark as themed
        root.setAttribute('data-admin-themed', 'true');
        root.setAttribute('data-admin-mode', theme.mode || 'custom');
        root.setAttribute('data-admin-dark', isDark ? 'true' : 'false');
        root.setAttribute('data-sidebar-dark', isSidebarDark ? 'true' : 'false');
        root.classList.toggle('dark', isDark);

        // Font family
        const sansFont = FONTS[theme.fontFamily] || FONTS['Plus Jakarta Sans'];
        const serifFont = FONTS[theme.fontHeading] || FONTS['Playfair Display'];
        root.style.setProperty('--admin-font-sans', sansFont);
        root.style.setProperty('--admin-font-serif', serifFont);

        // Sidebar Styling (Pure white by default or user chosen)
        root.style.setProperty('--admin-sidebar-bg', theme.sidebarBg);
        root.style.setProperty('--admin-sidebar-text', theme.sidebarText);
        root.style.setProperty('--admin-sidebar-border', theme.sidebarBorder || '#e2e8f0');
        root.style.setProperty('--admin-sidebar-hover', theme.sidebarHover || (isColorDark(theme.sidebarBg) ? 'rgba(255,255,255,0.08)' : '#f8fafc'));
        root.style.setProperty('--admin-sidebar-active-bg', theme.sidebarActiveBg);
        root.style.setProperty('--admin-sidebar-active-text', theme.sidebarActiveText);

        // Sidebar muted text
        root.style.setProperty('--admin-sidebar-muted', isSidebarDark ? 'rgba(255,255,255,0.45)' : '#94a3b8');

        // Canvas & Cards
        root.style.setProperty('--admin-bg', theme.bg);
        root.style.setProperty('--admin-card-bg', theme.cardBg);
        root.style.setProperty('--admin-card-border', theme.cardBorder);
        root.style.setProperty('--admin-card-hover', theme.cardHover || '#f1f5f9');
        root.style.setProperty('--admin-text-main', theme.textMain);
        root.style.setProperty('--admin-text-muted', theme.textMuted);

        // Header & Accent
        root.style.setProperty('--admin-header-bg', theme.headerBg);
        root.style.setProperty('--admin-header-border', theme.headerBorder);
        root.style.setProperty('--admin-header-text', theme.headerText);
        root.style.setProperty('--admin-accent', theme.accent);

        // Update inputs in UI if drawer is present
        syncUiInputs(theme);
    }

    function syncUiInputs(theme) {
        const sidebarBgInput = document.getElementById('themeSidebarBgInput');
        if (sidebarBgInput && theme.sidebarBg) sidebarBgInput.value = theme.sidebarBg;

        const bgInput = document.getElementById('themeCanvasBgInput');
        if (bgInput && theme.bg) bgInput.value = theme.bg;

        const textInput = document.getElementById('themeTextColorInput');
        if (textInput && theme.textMain) textInput.value = theme.textMain;

        const accentInput = document.getElementById('themeAccentColorInput');
        if (accentInput && theme.accent) accentInput.value = theme.accent;

        const fontSelect = document.getElementById('themeFontSelect');
        if (fontSelect && theme.fontFamily) fontSelect.value = theme.fontFamily;

        const headingFontSelect = document.getElementById('themeHeadingFontSelect');
        if (headingFontSelect && theme.fontHeading) headingFontSelect.value = theme.fontHeading;

        // Highlight active preset badge
        document.querySelectorAll('[data-preset-btn]').forEach(btn => {
            const preset = btn.getAttribute('data-preset-btn');
            if (preset === theme.mode) {
                btn.classList.add('ring-2', 'ring-emerald-500', 'border-emerald-500');
            } else {
                btn.classList.remove('ring-2', 'ring-emerald-500', 'border-emerald-500');
            }
        });
    }

    // Public API
    window.SmecaTheme = {
        init: function () {
            const theme = getSavedTheme();
            applyTheme(theme);
        },
        setPreset: function (presetKey) {
            if (!PRESETS[presetKey]) return;
            const newTheme = { ...PRESETS[presetKey], mode: presetKey };
            saveTheme(newTheme);
            applyTheme(newTheme);
        },
        setSidebarColor: function (color) {
            const theme = getSavedTheme();
            theme.sidebarBg = color;
            theme.mode = 'custom';
            
            // Adjust text contrast automatically
            if (isColorDark(color)) {
                theme.sidebarText = '#f1f5f9';
                theme.sidebarHover = 'rgba(255,255,255,0.08)';
                theme.sidebarBorder = 'rgba(255,255,255,0.1)';
            } else {
                theme.sidebarText = '#203a31';
                theme.sidebarHover = '#f8fafc';
                theme.sidebarBorder = '#e2e8f0';
            }
            saveTheme(theme);
            applyTheme(theme);
        },
        setCanvasBg: function (color) {
            const theme = getSavedTheme();
            theme.bg = color;
            theme.mode = 'custom';
            if (isColorDark(color)) {
                theme.cardBg = '#151e2e';
                theme.cardBorder = '#1e293b';
                theme.textMain = '#f8fafc';
                theme.textMuted = '#94a3b8';
            }
            saveTheme(theme);
            applyTheme(theme);
        },
        setTextColor: function (color) {
            const theme = getSavedTheme();
            theme.textMain = color;
            theme.mode = 'custom';
            saveTheme(theme);
            applyTheme(theme);
        },
        setAccentColor: function (color) {
            const theme = getSavedTheme();
            theme.accent = color;
            theme.sidebarActiveBg = color;
            theme.mode = 'custom';
            saveTheme(theme);
            applyTheme(theme);
        },
        setFont: function (fontName) {
            if (!FONTS[fontName]) return;
            const theme = getSavedTheme();
            theme.fontFamily = fontName;
            theme.mode = 'custom';
            saveTheme(theme);
            applyTheme(theme);
        },
        setHeadingFont: function (fontName) {
            if (!FONTS[fontName]) return;
            const theme = getSavedTheme();
            theme.fontHeading = fontName;
            theme.mode = 'custom';
            saveTheme(theme);
            applyTheme(theme);
        },
        reset: function () {
            localStorage.removeItem(STORAGE_KEY);
            const defaultTheme = { ...PRESETS.light, mode: 'light' };
            applyTheme(defaultTheme);
        },
        openDrawer: function () {
            const drawer = document.getElementById('themeCustomizerDrawer');
            const backdrop = document.getElementById('themeDrawerBackdrop');
            if (drawer && backdrop) {
                backdrop.classList.remove('hidden');
                setTimeout(() => {
                    drawer.classList.remove('translate-x-full');
                    drawer.classList.add('translate-x-0');
                }, 10);
                syncUiInputs(getSavedTheme());
            }
        },
        closeDrawer: function () {
            const drawer = document.getElementById('themeCustomizerDrawer');
            const backdrop = document.getElementById('themeDrawerBackdrop');
            if (drawer && backdrop) {
                drawer.classList.remove('translate-x-0');
                drawer.classList.add('translate-x-full');
                setTimeout(() => {
                    backdrop.classList.add('hidden');
                }, 300);
            }
        }
    };

    // Auto-initialize on load
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', window.SmecaTheme.init);
    } else {
        window.SmecaTheme.init();
    }
})();
