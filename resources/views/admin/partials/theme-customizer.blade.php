<!-- Off-Canvas Backdrop for Theme Studio Drawer -->
<div id="themeDrawerBackdrop" onclick="window.SmecaTheme.closeDrawer()" class="fixed inset-0 bg-slate-950/60 backdrop-blur-xs z-50 hidden transition-opacity"></div>

<!-- Theme & Appearance Customizer Drawer -->
<aside id="themeCustomizerDrawer" class="fixed inset-y-0 right-0 z-50 w-full sm:w-96 bg-white shadow-2xl border-l border-stone-200 transform translate-x-full transition-transform duration-300 flex flex-col justify-between">
    
    <!-- Top Header -->
    <div class="p-5 border-b border-stone-200 bg-stone-50 flex items-center justify-between">
        <div class="flex items-center gap-2.5">
            <span class="w-8 h-8 rounded-xl bg-amber-100 text-amber-800 flex items-center justify-center text-base shadow-2xs">🎨</span>
            <div>
                <h3 class="text-sm font-bold text-slate-900 leading-tight">Theme & Appearance Studio</h3>
                <p class="text-[11px] text-slate-500">Live customize colors, sidebar, and fonts</p>
            </div>
        </div>
        <button onclick="window.SmecaTheme.closeDrawer()" class="p-1.5 rounded-lg text-slate-400 hover:text-slate-700 hover:bg-stone-200/60 transition cursor-pointer">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
    </div>

    <!-- Scrollable Customizer Form Body -->
    <div class="flex-1 overflow-y-auto p-5 space-y-6 custom-theme-scroll text-xs">
        
        <!-- 1. PRESET THEMES -->
        <div>
            <div class="flex items-center justify-between mb-2.5">
                <label class="font-bold text-slate-800 uppercase tracking-wider text-[11px]">Theme Modes (1-Click)</label>
                <span class="text-[10px] text-slate-500 font-semibold">Presets</span>
            </div>
            <div class="grid grid-cols-2 gap-2">
                <button type="button" data-preset-btn="light" onclick="window.SmecaTheme.setPreset('light')"
                        class="p-2.5 rounded-xl border border-stone-200 hover:border-slate-400 text-left transition flex items-center gap-2.5 bg-white cursor-pointer group shadow-2xs">
                    <span class="text-base">☀️</span>
                    <div>
                        <div class="font-bold text-slate-900 leading-none">Light Executive</div>
                        <div class="text-[9px] text-slate-500 mt-0.5">Pure White Sidebar</div>
                    </div>
                </button>

                <button type="button" data-preset-btn="dark" onclick="window.SmecaTheme.setPreset('dark')"
                        class="p-2.5 rounded-xl border border-stone-200 hover:border-slate-400 text-left transition flex items-center gap-2.5 bg-slate-900 text-white cursor-pointer group shadow-2xs">
                    <span class="text-base">🌙</span>
                    <div>
                        <div class="font-bold text-white leading-none">Midnight Dark</div>
                        <div class="text-[9px] text-slate-300 mt-0.5">Deep Slate UI</div>
                    </div>
                </button>

                <button type="button" data-preset-btn="smeca-forest" onclick="window.SmecaTheme.setPreset('smeca-forest')"
                        class="p-2.5 rounded-xl border border-stone-200 hover:border-slate-400 text-left transition flex items-center gap-2.5 bg-[#f4f6f0] cursor-pointer group shadow-2xs">
                    <span class="text-base">🌿</span>
                    <div>
                        <div class="font-bold text-[#203a31] leading-none">Ayurvedic Forest</div>
                        <div class="text-[9px] text-[#525e3b] mt-0.5">Herbal Sage Tones</div>
                    </div>
                </button>

                <button type="button" data-preset-btn="warm-ivory" onclick="window.SmecaTheme.setPreset('warm-ivory')"
                        class="p-2.5 rounded-xl border border-stone-200 hover:border-slate-400 text-left transition flex items-center gap-2.5 bg-[#faf8f5] cursor-pointer group shadow-2xs">
                    <span class="text-base">☕</span>
                    <div>
                        <div class="font-bold text-[#2c2420] leading-none">Champagne Ivory</div>
                        <div class="text-[9px] text-stone-500 mt-0.5">Luxury Warm Canvas</div>
                    </div>
                </button>

                <button type="button" data-preset-btn="oceanic" onclick="window.SmecaTheme.setPreset('oceanic')"
                        class="p-2.5 rounded-xl border border-stone-200 hover:border-slate-400 text-left transition flex items-center gap-2.5 bg-[#f0f4f8] cursor-pointer group shadow-2xs">
                    <span class="text-base">🌊</span>
                    <div>
                        <div class="font-bold text-[#0f172a] leading-none">Oceanic Slate</div>
                        <div class="text-[9px] text-slate-500 mt-0.5">Corporate Navy</div>
                    </div>
                </button>

                <button type="button" data-preset-btn="high-contrast" onclick="window.SmecaTheme.setPreset('high-contrast')"
                        class="p-2.5 rounded-xl border border-stone-900 hover:border-black text-left transition flex items-center gap-2.5 bg-black text-white cursor-pointer group shadow-2xs">
                    <span class="text-base">⚡</span>
                    <div>
                        <div class="font-bold text-white leading-none">High Contrast</div>
                        <div class="text-[9px] text-stone-300 mt-0.5">Maximum Stark</div>
                    </div>
                </button>
            </div>
        </div>

        <!-- 2. SIDEBAR BACKGROUND COLOR -->
        <div class="pt-4 border-t border-stone-200">
            <div class="flex items-center justify-between mb-2.5">
                <label class="font-bold text-slate-800 uppercase tracking-wider text-[11px]">Sidebar Color</label>
                <span class="text-[10px] text-emerald-700 font-semibold">Auto-contrast text</span>
            </div>
            
            <div class="grid grid-cols-6 gap-2 mb-3">
                <button type="button" onclick="window.SmecaTheme.setSidebarColor('#ffffff')" title="Pure White"
                        class="h-8 rounded-lg border-2 border-stone-300 bg-white hover:scale-105 transition shadow-2xs cursor-pointer"></button>
                <button type="button" onclick="window.SmecaTheme.setSidebarColor('#0f172a')" title="Midnight Slate"
                        class="h-8 rounded-lg border-2 border-slate-700 bg-slate-900 hover:scale-105 transition shadow-2xs cursor-pointer"></button>
                <button type="button" onclick="window.SmecaTheme.setSidebarColor('#1b2b24')" title="Deep Ayurvedic Green"
                        class="h-8 rounded-lg border-2 border-[#14221c] bg-[#1b2b24] hover:scale-105 transition shadow-2xs cursor-pointer"></button>
                <button type="button" onclick="window.SmecaTheme.setSidebarColor('#e6ece2')" title="Soft Sage"
                        class="h-8 rounded-lg border-2 border-[#c0caa7] bg-[#e6ece2] hover:scale-105 transition shadow-2xs cursor-pointer"></button>
                <button type="button" onclick="window.SmecaTheme.setSidebarColor('#faf8f5')" title="Warm Linen"
                        class="h-8 rounded-lg border-2 border-[#e8e2d5] bg-[#faf8f5] hover:scale-105 transition shadow-2xs cursor-pointer"></button>
                <button type="button" onclick="window.SmecaTheme.setSidebarColor('#1e1b4b')" title="Deep Indigo"
                        class="h-8 rounded-lg border-2 border-[#1e1b4b] bg-[#1e1b4b] hover:scale-105 transition shadow-2xs cursor-pointer"></button>
            </div>

            <div class="flex items-center gap-3 bg-stone-50 p-2.5 rounded-xl border border-stone-200">
                <input type="color" id="themeSidebarBgInput" value="#ffffff"
                       onchange="window.SmecaTheme.setSidebarColor(this.value)"
                       class="w-8 h-8 rounded-lg border border-stone-300 cursor-pointer p-0 bg-transparent">
                <div class="flex-1">
                    <span class="text-[11px] font-bold text-slate-700">Custom Sidebar Color</span>
                    <p class="text-[10px] text-slate-500">Pick any custom hex code</p>
                </div>
            </div>
        </div>

        <!-- 3. TYPOGRAPHY & FONT SELECTION -->
        <div class="pt-4 border-t border-stone-200">
            <div class="flex items-center justify-between mb-2">
                <label class="font-bold text-slate-800 uppercase tracking-wider text-[11px]">Typography / Font Family</label>
                <span class="text-[10px] text-slate-500 font-semibold">Live Google Fonts</span>
            </div>

            <div class="space-y-3">
                <div>
                    <label class="block text-[11px] font-semibold text-slate-600 mb-1">Body & Interface Font</label>
                    <select id="themeFontSelect" onchange="window.SmecaTheme.setFont(this.value)"
                            class="w-full bg-stone-50 border border-stone-300 rounded-xl px-3 py-2 text-xs font-medium text-slate-800 focus:bg-white focus:border-slate-800 focus:outline-hidden">
                        <option value="Plus Jakarta Sans">Plus Jakarta Sans (Executive Clean)</option>
                        <option value="Inter">Inter (Universal System)</option>
                        <option value="Outfit">Outfit (Contemporary Modern)</option>
                        <option value="Montserrat">Montserrat (Geometric Sans)</option>
                        <option value="Playfair Display">Playfair Display (Editorial Serif)</option>
                        <option value="Cinzel">Cinzel (Heritage Classical)</option>
                        <option value="Space Grotesk">Space Grotesk (Tech Monospace)</option>
                    </select>
                </div>

                <div>
                    <label class="block text-[11px] font-semibold text-slate-600 mb-1">Headings & Titles Font</label>
                    <select id="themeHeadingFontSelect" onchange="window.SmecaTheme.setHeadingFont(this.value)"
                            class="w-full bg-stone-50 border border-stone-300 rounded-xl px-3 py-2 text-xs font-medium text-slate-800 focus:bg-white focus:border-slate-800 focus:outline-hidden">
                        <option value="Playfair Display">Playfair Display (Heritage Serif)</option>
                        <option value="Cinzel">Cinzel (Classical Luxury)</option>
                        <option value="Plus Jakarta Sans">Plus Jakarta Sans (Executive Bold)</option>
                        <option value="Outfit">Outfit (Modern Clean)</option>
                        <option value="Inter">Inter (Minimal Product)</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- 4. TEXT COLOR SELECTION -->
        <div class="pt-4 border-t border-stone-200">
            <div class="flex items-center justify-between mb-2">
                <label class="font-bold text-slate-800 uppercase tracking-wider text-[11px]">Primary Text Color</label>
            </div>
            
            <div class="grid grid-cols-5 gap-2 mb-3">
                <button type="button" onclick="window.SmecaTheme.setTextColor('#1e293b')" title="Slate Charcoal"
                        class="h-7 rounded-lg bg-[#1e293b] hover:scale-105 transition shadow-2xs cursor-pointer"></button>
                <button type="button" onclick="window.SmecaTheme.setTextColor('#203a31')" title="Ayurvedic Forest"
                        class="h-7 rounded-lg bg-[#203a31] hover:scale-105 transition shadow-2xs cursor-pointer"></button>
                <button type="button" onclick="window.SmecaTheme.setTextColor('#0f172a')" title="Midnight Black"
                        class="h-7 rounded-lg bg-[#0f172a] hover:scale-105 transition shadow-2xs cursor-pointer"></button>
                <button type="button" onclick="window.SmecaTheme.setTextColor('#2c2420')" title="Rich Espresso"
                        class="h-7 rounded-lg bg-[#2c2420] hover:scale-105 transition shadow-2xs cursor-pointer"></button>
                <button type="button" onclick="window.SmecaTheme.setTextColor('#f8fafc')" title="Crisp White"
                        class="h-7 rounded-lg bg-[#f8fafc] border border-stone-300 hover:scale-105 transition shadow-2xs cursor-pointer"></button>
            </div>

            <div class="flex items-center gap-3 bg-stone-50 p-2.5 rounded-xl border border-stone-200">
                <input type="color" id="themeTextColorInput" value="#1e293b"
                       onchange="window.SmecaTheme.setTextColor(this.value)"
                       class="w-8 h-8 rounded-lg border border-stone-300 cursor-pointer p-0 bg-transparent">
                <div class="flex-1">
                    <span class="text-[11px] font-bold text-slate-700">Custom Text Color</span>
                    <p class="text-[10px] text-slate-500">Pick any custom heading & body shade</p>
                </div>
            </div>
        </div>

        <!-- 5. ACCENT & BRAND HIGHLIGHT COLOR -->
        <div class="pt-4 border-t border-stone-200">
            <div class="flex items-center justify-between mb-2">
                <label class="font-bold text-slate-800 uppercase tracking-wider text-[11px]">Brand Accent / Highlight</label>
            </div>
            
            <div class="grid grid-cols-6 gap-2 mb-3">
                <button type="button" onclick="window.SmecaTheme.setAccentColor('#203a31')" title="SMECA Heritage Green"
                        class="h-7 rounded-lg bg-[#203a31] hover:scale-105 transition shadow-2xs cursor-pointer"></button>
                <button type="button" onclick="window.SmecaTheme.setAccentColor('#059669')" title="Vivid Emerald"
                        class="h-7 rounded-lg bg-emerald-600 hover:scale-105 transition shadow-2xs cursor-pointer"></button>
                <button type="button" onclick="window.SmecaTheme.setAccentColor('#2563eb')" title="Royal Blue"
                        class="h-7 rounded-lg bg-blue-600 hover:scale-105 transition shadow-2xs cursor-pointer"></button>
                <button type="button" onclick="window.SmecaTheme.setAccentColor('#d97706')" title="Warm Amber"
                        class="h-7 rounded-lg bg-amber-600 hover:scale-105 transition shadow-2xs cursor-pointer"></button>
                <button type="button" onclick="window.SmecaTheme.setAccentColor('#7c3aed')" title="Royal Violet"
                        class="h-7 rounded-lg bg-violet-600 hover:scale-105 transition shadow-2xs cursor-pointer"></button>
                <button type="button" onclick="window.SmecaTheme.setAccentColor('#e11d48')" title="Crimson Rose"
                        class="h-7 rounded-lg bg-rose-600 hover:scale-105 transition shadow-2xs cursor-pointer"></button>
            </div>

            <div class="flex items-center gap-3 bg-stone-50 p-2.5 rounded-xl border border-stone-200">
                <input type="color" id="themeAccentColorInput" value="#203a31"
                       onchange="window.SmecaTheme.setAccentColor(this.value)"
                       class="w-8 h-8 rounded-lg border border-stone-300 cursor-pointer p-0 bg-transparent">
                <div class="flex-1">
                    <span class="text-[11px] font-bold text-slate-700">Custom Accent Color</span>
                    <p class="text-[10px] text-slate-500">Affects active links and highlights</p>
                </div>
            </div>
        </div>

        <!-- 6. CANVAS BACKGROUND TONE -->
        <div class="pt-4 border-t border-stone-200">
            <div class="flex items-center justify-between mb-2">
                <label class="font-bold text-slate-800 uppercase tracking-wider text-[11px]">Main Canvas Background</label>
            </div>
            
            <div class="grid grid-cols-5 gap-2 mb-3">
                <button type="button" onclick="window.SmecaTheme.setCanvasBg('#f8fafc')" title="Slate Soft"
                        class="h-7 rounded-lg bg-[#f8fafc] border border-stone-200 hover:scale-105 transition shadow-2xs cursor-pointer"></button>
                <button type="button" onclick="window.SmecaTheme.setCanvasBg('#f4f6f0')" title="Ayurvedic Sage"
                        class="h-7 rounded-lg bg-[#f4f6f0] border border-[#c0caa7]/40 hover:scale-105 transition shadow-2xs cursor-pointer"></button>
                <button type="button" onclick="window.SmecaTheme.setCanvasBg('#faf8f5')" title="Warm Sand"
                        class="h-7 rounded-lg bg-[#faf8f5] border border-stone-200 hover:scale-105 transition shadow-2xs cursor-pointer"></button>
                <button type="button" onclick="window.SmecaTheme.setCanvasBg('#ffffff')" title="Pure White"
                        class="h-7 rounded-lg bg-white border border-stone-300 hover:scale-105 transition shadow-2xs cursor-pointer"></button>
                <button type="button" onclick="window.SmecaTheme.setCanvasBg('#0b0f17')" title="Midnight Charcoal"
                        class="h-7 rounded-lg bg-[#0b0f17] border border-slate-700 hover:scale-105 transition shadow-2xs cursor-pointer"></button>
            </div>

            <div class="flex items-center gap-3 bg-stone-50 p-2.5 rounded-xl border border-stone-200">
                <input type="color" id="themeCanvasBgInput" value="#f8fafc"
                       onchange="window.SmecaTheme.setCanvasBg(this.value)"
                       class="w-8 h-8 rounded-lg border border-stone-300 cursor-pointer p-0 bg-transparent">
                <div class="flex-1">
                    <span class="text-[11px] font-bold text-slate-700">Custom Canvas Color</span>
                    <p class="text-[10px] text-slate-500">Pick any page background shade</p>
                </div>
            </div>
        </div>

    </div>

    <!-- Bottom Action Controls -->
    <div class="p-4 border-t border-stone-200 bg-stone-50 flex items-center justify-between gap-3">
        <button type="button" onclick="window.SmecaTheme.reset()" 
                class="px-3.5 py-2 text-xs font-semibold text-rose-600 hover:text-rose-800 hover:bg-rose-50 rounded-xl transition cursor-pointer">
            ↺ Reset to Default
        </button>
        <button type="button" onclick="window.SmecaTheme.closeDrawer()" 
                class="px-5 py-2 text-xs font-bold text-white bg-slate-900 hover:bg-slate-800 rounded-xl transition shadow-xs cursor-pointer">
            Done & Apply
        </button>
    </div>

</aside>
