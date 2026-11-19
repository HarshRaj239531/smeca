<!-- ======================================================== -->
<!-- SMECA PRODUCT / FORMULATION MASTER MODAL                   -->
<!-- Modular Partial: resources/views/admin/partials/product-modal.blade.php -->
<!-- ======================================================== -->

<div id="productFormModal" 
     class="fixed inset-0 z-50 hidden overflow-y-auto bg-slate-950/75 backdrop-blur-xs flex items-center justify-center p-3 sm:p-6 transition-all duration-300"
     data-create-modal="createProductModal"
     data-edit-modal="editProductModal"
     onclick="if(event.target === this) closeProductModal()">
    
    <div class="relative bg-white rounded-3xl shadow-2xl border border-stone-200/90 max-w-4xl w-full my-auto overflow-hidden transform transition-all duration-300">
        
        <!-- Modal Top Executive Header Banner -->
        <div id="productModalHeaderBanner" class="p-5 sm:p-6 bg-gradient-to-r from-[#203a31] to-[#12231c] text-white flex items-center justify-between border-b border-white/10 relative overflow-hidden">
            <div class="absolute -right-8 -top-8 w-32 h-32 rounded-full bg-white/5 pointer-events-none"></div>
            
            <div class="flex items-center gap-3.5 relative z-10">
                <div id="productModalIconBox" class="w-11 h-11 rounded-2xl bg-white/15 backdrop-blur-md border border-white/20 flex items-center justify-center text-white shrink-0 shadow-inner">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                    </svg>
                </div>
                <div>
                    <div class="flex items-center gap-2">
                        <span id="productModalBadge" class="text-[9px] font-extrabold tracking-widest uppercase px-2 py-0.5 rounded-full bg-emerald-500/20 text-emerald-300 border border-emerald-400/30">
                            CATALOG REGISTRY
                        </span>
                        <span class="text-[10px] text-white/50 tracking-wider uppercase font-semibold">SMECA AYURVEDA & COSMETICS</span>
                    </div>
                    <h2 id="productModalTitle" class="text-lg sm:text-xl font-serif-display font-medium text-white tracking-wide mt-1">
                        Add New Formulation
                    </h2>
                    <p id="productModalSubtitle" class="text-xs text-white/70 line-clamp-1">
                        Register formulation profile, packaging metrics, and B2B specifications to catalog.
                    </p>
                </div>
            </div>

            <button type="button" 
                    onclick="closeProductModal()"
                    class="relative z-10 w-9 h-9 rounded-xl bg-white/10 hover:bg-white/20 text-white/80 hover:text-white flex items-center justify-center transition cursor-pointer border border-white/10">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>

        <!-- Master Form -->
        <form id="productMasterForm" method="POST" action="{{ route('admin.products.store') }}" class="p-6 sm:p-7 max-h-[calc(88vh-130px)] overflow-y-auto custom-theme-scroll space-y-6">
            @csrf
            <input type="hidden" name="_method" id="productModalMethod" value="POST">

            <!-- Section 1: Product Identification -->
            <div class="bg-stone-50/80 p-4 sm:p-5 rounded-2xl border border-stone-200">
                <div class="flex items-center gap-2 mb-3.5 pb-2 border-b border-stone-200 text-slate-800">
                    <span class="w-2 h-2 rounded-full bg-[#203a31]"></span>
                    <h3 class="text-xs font-bold uppercase tracking-wider text-slate-700">1. Formulation Identification</h3>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Name -->
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">
                            Formulation / SKU Name <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="pm_name" name="name" required 
                               placeholder="e.g. SMECA Kumkumadi Miraculous Beauty Tailam"
                               class="w-full bg-white border border-stone-300 rounded-xl px-3.5 py-2.5 text-xs text-slate-800 placeholder-slate-400 focus:border-[#203a31] focus:ring-1 focus:ring-[#203a31] focus:outline-hidden transition shadow-2xs">
                    </div>

                    <!-- Category -->
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">
                            Product Category <span class="text-red-500">*</span>
                        </label>
                        <select id="pm_category_id" name="category_id" required
                                class="w-full bg-white border border-stone-300 rounded-xl px-3.5 py-2.5 text-xs text-slate-800 focus:border-[#203a31] focus:ring-1 focus:ring-[#203a31] focus:outline-hidden transition shadow-2xs">
                            <option value="">Select Category</option>
                            @foreach($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                    <!-- Tagline -->
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Tagline / Brand Hook</label>
                        <input type="text" id="pm_tagline" name="tagline"
                               placeholder="e.g. 100% Classical Saffron & Herb Infused Radiance Oil"
                               class="w-full bg-white border border-stone-300 rounded-xl px-3.5 py-2.5 text-xs text-slate-800 placeholder-slate-400 focus:border-[#203a31] focus:ring-1 focus:ring-[#203a31] focus:outline-hidden transition shadow-2xs">
                    </div>

                    <!-- Lifecycle Status -->
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">
                            Commercial Status <span class="text-red-500">*</span>
                        </label>
                        <select id="pm_status" name="status" required
                                class="w-full bg-white border border-stone-300 rounded-xl px-3.5 py-2.5 text-xs text-slate-800 focus:border-[#203a31] focus:ring-1 focus:ring-[#203a31] focus:outline-hidden transition shadow-2xs">
                            <option value="Available" selected>Available (Ready for Dispatch)</option>
                            <option value="Formulating">Formulating (R&D In-Progress)</option>
                            <option value="Testing">Testing (Quality / Lab Validation)</option>
                            <option value="Discontinued">Discontinued</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Section 2: Pack Sizes, MOQ & Commercial Badges -->
            <div class="bg-stone-50/80 p-4 sm:p-5 rounded-2xl border border-stone-200">
                <div class="flex items-center gap-2 mb-3.5 pb-2 border-b border-stone-200 text-slate-800">
                    <span class="w-2 h-2 rounded-full bg-amber-600"></span>
                    <h3 class="text-xs font-bold uppercase tracking-wider text-slate-700">2. Packaging, Volume & Contract MOQ</h3>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Volume / Pack -->
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Standard Pack / Volume Sizes</label>
                        <input type="text" id="pm_volume_size" name="volume_size"
                               placeholder="e.g. 30 ml / 100 ml (Bulk Available)"
                               class="w-full bg-white border border-stone-300 rounded-xl px-3.5 py-2.5 text-xs text-slate-800 placeholder-slate-400 focus:border-[#203a31] focus:ring-1 focus:ring-[#203a31] focus:outline-hidden transition shadow-2xs">
                    </div>

                    <!-- MOQ -->
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">OEM / Contract Packaging MOQ</label>
                        <input type="text" id="pm_moq" name="moq"
                               placeholder="e.g. 250 Units / 50L Bulk"
                               class="w-full bg-white border border-stone-300 rounded-xl px-3.5 py-2.5 text-xs text-slate-800 placeholder-slate-400 focus:border-[#203a31] focus:ring-1 focus:ring-[#203a31] focus:outline-hidden transition shadow-2xs">
                    </div>
                </div>

                <!-- Badges & Verification Checkboxes -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mt-4">
                    <label class="flex items-center gap-3 p-3 bg-white rounded-xl border border-stone-200 hover:border-emerald-500 cursor-pointer transition select-none shadow-2xs group">
                        <input type="checkbox" id="pm_is_ayurvedic" name="is_ayurvedic" value="1" checked
                               class="w-4 h-4 rounded text-emerald-700 focus:ring-emerald-700 border-stone-300 group-hover:scale-105 transition">
                        <div>
                            <span class="text-xs font-bold text-slate-800 block">🌿 Ayurvedic</span>
                            <span class="text-[10px] text-slate-400">Classical text verified</span>
                        </div>
                    </label>

                    <label class="flex items-center gap-3 p-3 bg-white rounded-xl border border-stone-200 hover:border-amber-500 cursor-pointer transition select-none shadow-2xs group">
                        <input type="checkbox" id="pm_b2b_available" name="b2b_available" value="1" checked
                               class="w-4 h-4 rounded text-amber-600 focus:ring-amber-600 border-stone-300 group-hover:scale-105 transition">
                        <div>
                            <span class="text-xs font-bold text-slate-800 block">🏭 B2B OEM Ready</span>
                            <span class="text-[10px] text-slate-400">Private label eligible</span>
                        </div>
                    </label>

                    <label class="flex items-center gap-3 p-3 bg-white rounded-xl border border-stone-200 hover:border-blue-500 cursor-pointer transition select-none shadow-2xs group">
                        <input type="checkbox" id="pm_is_featured" name="is_featured" value="1"
                               class="w-4 h-4 rounded text-blue-600 focus:ring-blue-600 border-stone-300 group-hover:scale-105 transition">
                        <div>
                            <span class="text-xs font-bold text-slate-800 block">⭐ Featured SKU</span>
                            <span class="text-[10px] text-slate-400">Highlight in showcase</span>
                        </div>
                    </label>
                </div>
            </div>

            <!-- Section 3: Ingredients & Clinical Benefits -->
            <div class="bg-stone-50/80 p-4 sm:p-5 rounded-2xl border border-stone-200">
                <div class="flex items-center gap-2 mb-3.5 pb-2 border-b border-stone-200 text-slate-800">
                    <span class="w-2 h-2 rounded-full bg-emerald-600"></span>
                    <h3 class="text-xs font-bold uppercase tracking-wider text-slate-700">3. Botanical Actives & Cosmetic Action</h3>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Key Ingredients -->
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Key Botanical Ingredients</label>
                        <input type="text" id="pm_key_ingredients" name="key_ingredients"
                               placeholder="e.g. Kashmiri Kesar (Saffron), Chandana, Manjistha"
                               class="w-full bg-white border border-stone-300 rounded-xl px-3.5 py-2.5 text-xs text-slate-800 placeholder-slate-400 focus:border-[#203a31] focus:ring-1 focus:ring-[#203a31] focus:outline-hidden transition shadow-2xs">
                    </div>

                    <!-- Key Benefits -->
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Primary Clinical / Cosmetic Benefits</label>
                        <input type="text" id="pm_benefits" name="benefits"
                               placeholder="e.g. Complexion brightening, deep cellular regeneration"
                               class="w-full bg-white border border-stone-300 rounded-xl px-3.5 py-2.5 text-xs text-slate-800 placeholder-slate-400 focus:border-[#203a31] focus:ring-1 focus:ring-[#203a31] focus:outline-hidden transition shadow-2xs">
                    </div>
                </div>

                <!-- Product Image with Live Preview -->
                <div class="mt-4">
                    <label class="block text-xs font-bold text-slate-700 mb-1">Product Image URL / Asset Path</label>
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-xl bg-stone-100 border border-stone-200 overflow-hidden shrink-0 flex items-center justify-center shadow-inner">
                            <img id="pm_image_preview" src="/images/hero-box.png" alt="Preview" 
                                 class="w-full h-full object-cover"
                                 onerror="this.src='/images/hero-box.png'">
                        </div>
                        <div class="flex-1 min-w-0">
                            <input type="text" id="pm_image_url" name="image_url"
                                   placeholder="https://... or /images/hero-box.png"
                                   oninput="updateImagePreview(this.value)"
                                   class="w-full bg-white border border-stone-300 rounded-xl px-3.5 py-2.5 text-xs text-slate-800 placeholder-slate-400 focus:border-[#203a31] focus:ring-1 focus:ring-[#203a31] focus:outline-hidden transition shadow-2xs">
                        </div>
                    </div>
                    <div class="flex items-center gap-2 mt-2">
                        <span class="text-[10px] text-slate-400">Quick Presets:</span>
                        <button type="button" onclick="setPresetImage('/images/hero-box.png')" class="text-[10px] text-emerald-700 hover:underline">SMECA Box</button>
                        <span class="text-slate-300">•</span>
                        <button type="button" onclick="setPresetImage('/images/smeca-luxury-box.jpg')" class="text-[10px] text-emerald-700 hover:underline">Luxury Box</button>
                        <span class="text-slate-300">•</span>
                        <button type="button" onclick="setPresetImage('https://images.unsplash.com/photo-1608248597359-22a36b4d3701?auto=format&fit=crop&w=800&q=80')" class="text-[10px] text-emerald-700 hover:underline">Kumkumadi Bottle</button>
                    </div>
                </div>
            </div>

            <!-- Section 4: Descriptions -->
            <div class="bg-stone-50/80 p-4 sm:p-5 rounded-2xl border border-stone-200">
                <div class="flex items-center gap-2 mb-3.5 pb-2 border-b border-stone-200 text-slate-800">
                    <span class="w-2 h-2 rounded-full bg-blue-600"></span>
                    <h3 class="text-xs font-bold uppercase tracking-wider text-slate-700">4. Catalog & Technical Descriptions</h3>
                </div>

                <!-- Short Description -->
                <div class="mb-4">
                    <label class="block text-xs font-bold text-slate-700 mb-1">
                        Short Summary Description <span class="text-red-500">*</span>
                    </label>
                    <textarea id="pm_short_description" name="short_description" required rows="2"
                              placeholder="Brief 1-2 sentence overview shown in catalog listings and product cards..."
                              class="w-full bg-white border border-stone-300 rounded-xl p-3 text-xs text-slate-800 placeholder-slate-400 focus:border-[#203a31] focus:ring-1 focus:ring-[#203a31] focus:outline-hidden transition shadow-2xs"></textarea>
                </div>

                <!-- Detailed Description -->
                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">
                        Full Technical Description & Manufacturing Notes
                    </label>
                    <textarea id="pm_description" name="description" rows="3"
                              placeholder="Detailed formulation composition, classical method (e.g. Kshirpak Vidhi), application ritual, safety guidelines..."
                              class="w-full bg-white border border-stone-300 rounded-xl p-3 text-xs text-slate-800 placeholder-slate-400 focus:border-[#203a31] focus:ring-1 focus:ring-[#203a31] focus:outline-hidden transition shadow-2xs"></textarea>
                </div>
            </div>

            <!-- Modal Action Footer -->
            <div class="pt-4 border-t border-stone-200 flex flex-col-reverse sm:flex-row items-center justify-between gap-3 sticky bottom-0 bg-white/95 backdrop-blur-xs py-2">
                <div class="text-[11px] text-slate-400 flex items-center gap-1.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                    <span>All changes synchronize immediately to the public catalog.</span>
                </div>

                <div class="flex items-center gap-2.5 w-full sm:w-auto justify-end">
                    <button type="button" 
                            onclick="closeProductModal()"
                            class="w-full sm:w-auto px-4 py-2.5 rounded-xl border border-stone-300 text-xs font-semibold text-slate-600 hover:bg-stone-100 transition cursor-pointer">
                        Cancel
                    </button>
                    <button type="submit" 
                            id="productModalSubmitBtn"
                            class="w-full sm:w-auto px-6 py-2.5 rounded-xl bg-[#203a31] hover:bg-[#14221c] text-white text-xs font-semibold shadow-md transition flex items-center justify-center gap-2 cursor-pointer">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span id="productModalSubmitText">Save Formulation</span>
                    </button>
                </div>
            </div>

        </form>

    </div>
</div>

<!-- Scripts for Product Modal Management -->
<script>
    function updateImagePreview(url) {
        const preview = document.getElementById('pm_image_preview');
        if (preview) {
            preview.src = (url && url.trim()) ? url.trim() : '/images/hero-box.png';
        }
    }

    function setPresetImage(url) {
        const input = document.getElementById('pm_image_url');
        if (input) {
            input.value = url;
            updateImagePreview(url);
        }
    }

    function openCreateProductModal() {
        const modal = document.getElementById('productFormModal');
        const form = document.getElementById('productMasterForm');
        if (!modal || !form) return;

        // Reset form
        form.reset();
        form.action = "{{ route('admin.products.store') }}";
        document.getElementById('productModalMethod').value = 'POST';

        // Update header texts & styles
        document.getElementById('productModalTitle').textContent = 'Add New Formulation';
        document.getElementById('productModalSubtitle').textContent = 'Register formulation profile, packaging metrics, and B2B specifications to catalog.';
        document.getElementById('productModalBadge').textContent = 'CREATE FORMULATION';
        document.getElementById('productModalSubmitText').textContent = 'Publish to Catalog';

        const header = document.getElementById('productModalHeaderBanner');
        header.className = "p-5 sm:p-6 bg-gradient-to-r from-[#203a31] to-[#12231c] text-white flex items-center justify-between border-b border-white/10 relative overflow-hidden";

        // Default checks
        document.getElementById('pm_is_ayurvedic').checked = true;
        document.getElementById('pm_b2b_available').checked = true;
        document.getElementById('pm_is_featured').checked = false;
        document.getElementById('pm_status').value = 'Available';
        updateImagePreview('/images/hero-box.png');

        modal.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
    }

    function openEditProductModal(product) {
        const modal = document.getElementById('productFormModal');
        const form = document.getElementById('productMasterForm');
        if (!modal || !form || !product) return;

        // Configure Form for PUT update
        form.action = '/admin/products/' + product.id;
        document.getElementById('productModalMethod').value = 'PUT';

        // Populate Form Fields
        document.getElementById('pm_name').value = product.name || '';
        document.getElementById('pm_category_id').value = product.category_id || '';
        document.getElementById('pm_tagline').value = product.tagline || '';
        document.getElementById('pm_volume_size').value = product.volume_size || '';
        document.getElementById('pm_moq').value = product.moq || '';
        document.getElementById('pm_status').value = product.status || 'Available';
        document.getElementById('pm_key_ingredients').value = product.key_ingredients || '';
        document.getElementById('pm_benefits').value = product.benefits || '';
        document.getElementById('pm_image_url').value = product.image_url || '';
        document.getElementById('pm_short_description').value = product.short_description || '';
        document.getElementById('pm_description').value = product.description || '';

        document.getElementById('pm_is_ayurvedic').checked = Boolean(product.is_ayurvedic);
        document.getElementById('pm_b2b_available').checked = Boolean(product.b2b_available);
        document.getElementById('pm_is_featured').checked = Boolean(product.is_featured);

        updateImagePreview(product.image_url);

        // Update header for Edit Mode
        document.getElementById('productModalTitle').textContent = 'Edit Formulation: ' + (product.name || '');
        document.getElementById('productModalSubtitle').textContent = 'Update formulation specifications, contract packaging limits, or commercial status.';
        document.getElementById('productModalBadge').textContent = 'EDIT SKU #' + product.id;
        document.getElementById('productModalSubmitText').textContent = 'Update Formulation';

        const header = document.getElementById('productModalHeaderBanner');
        header.className = "p-5 sm:p-6 bg-gradient-to-r from-amber-900 to-[#203a31] text-white flex items-center justify-between border-b border-white/10 relative overflow-hidden";

        modal.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
    }

    function closeProductModal() {
        const modal = document.getElementById('productFormModal');
        if (modal) {
            modal.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }
    }

    // Aliases for compatibility
    function closeCreateProductModal() { closeProductModal(); }
    function closeEditProductModal() { closeProductModal(); }

    // Keyboard & URL Helpers
    window.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeProductModal();
        }
    });

    document.addEventListener('DOMContentLoaded', function() {
        const params = new URLSearchParams(window.location.search);
        if (params.get('create') === '1' || params.get('action') === 'create') {
            openCreateProductModal();
        }
    });
</script>
