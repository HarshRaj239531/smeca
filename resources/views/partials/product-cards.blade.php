@forelse($products as $product)
    <div class="product-item bg-white rounded-2xl border border-stone-200 overflow-hidden shadow-xs hover:shadow-xl transition-all duration-300 flex flex-col group"
         data-category="{{ $product->category->slug }}"
         data-name="{{ strtolower($product->name) }}"
         data-ingredients="{{ strtolower($product->key_ingredients) }}"
         data-ayurvedic="{{ $product->is_ayurvedic ? '1' : '0' }}"
         data-b2b="{{ $product->b2b_available ? '1' : '0' }}">
        
        <!-- Image Container -->
        <div class="relative h-64 overflow-hidden bg-stone-100">
            <img src="{{ $product->image_url }}" alt="{{ $product->name }}"
                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
            
            <!-- Category and Ayurvedic Badges -->
            <div class="absolute top-3 left-3 flex flex-wrap gap-1.5">
                <span class="bg-emerald-950/90 backdrop-blur-xs text-white text-[11px] font-semibold px-2.5 py-0.5 rounded-full shadow-2xs">
                    {{ $product->category->name }}
                </span>
                @if($product->is_ayurvedic)
                    <span class="bg-amber-500/95 backdrop-blur-xs text-white text-[10px] font-bold px-2 py-0.5 rounded-full flex items-center gap-1 shadow-2xs">
                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a8 8 0 100 16 8 8 0 000-16zm1 11H9v-2h2v2zm0-4H9V5h2v4z"/></svg>
                        Ayurvedic
                    </span>
                @endif
            </div>

            <!-- Volume / Size Badge -->
            <div class="absolute bottom-3 right-3 bg-white/95 backdrop-blur-xs text-slate-800 text-[11px] font-semibold px-2.5 py-1 rounded-md shadow-xs border border-stone-200/60">
                {{ $product->volume_size }}
            </div>

            <!-- Status Indicator -->
            <div class="absolute top-3 right-3 bg-emerald-100 text-emerald-800 text-[10px] font-bold px-2 py-0.5 rounded-md border border-emerald-200">
                {{ $product->status }}
            </div>
        </div>

        <!-- Product Details -->
        <div class="p-6 flex-1 flex flex-col justify-between">
            <div>
                <p class="text-xs font-semibold text-emerald-700 tracking-wide mb-1">{{ $product->tagline }}</p>
                <h3 class="text-lg font-bold font-serif-display text-emerald-950 group-hover:text-emerald-800 transition line-clamp-1">
                    <a href="{{ route('products.show', $product->slug) }}">{{ $product->name }}</a>
                </h3>
                <p class="text-xs text-slate-600 mt-2 line-clamp-2 leading-relaxed">
                    {{ $product->short_description }}
                </p>

                <!-- Herbal Ingredients & Actives -->
                <div class="mt-4 pt-3 border-t border-stone-100 space-y-1.5 text-[11px]">
                    <div class="text-slate-600">
                        <strong class="text-slate-800">Key Botanicals:</strong> {{ $product->key_ingredients }}
                    </div>
                    @if($product->benefits)
                        <div class="text-slate-600">
                            <strong class="text-slate-800">Primary Benefits:</strong> {{ $product->benefits }}
                        </div>
                    @endif
                    <div class="text-emerald-800 font-medium pt-1">
                        <strong class="text-slate-800">B2B / OEM MOQ:</strong> {{ $product->moq }}
                    </div>
                </div>
            </div>

            <!-- Card Actions -->
            <div class="mt-6 pt-4 border-t border-stone-100 flex items-center justify-between gap-3">
                <a href="{{ route('products.show', $product->slug) }}" 
                   class="text-xs font-semibold text-slate-600 hover:text-emerald-800 transition underline underline-offset-2">
                    View Specifications
                </a>

                <!-- Enquire Now button carries product details to modal -->
                <button type="button"
                        onclick="openEnquiryModal('{{ addslashes($product->name) }}', {{ $product->id }}, 'product')"
                        class="bg-[#243c30] hover:bg-[#182a21] text-white text-xs font-medium px-4 py-2 rounded-xl transition flex items-center gap-1.5 shadow-2xs cursor-pointer">
                    <span>Enquire Now</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </button>
            </div>
        </div>

    </div>
@empty
    <div class="col-span-full py-16 text-center bg-white rounded-3xl border border-stone-200 p-8">
        <div class="w-16 h-16 mx-auto rounded-full bg-emerald-50 text-emerald-800 flex items-center justify-center mb-4">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
        </div>
        <h3 class="text-xl font-bold font-serif-display text-emerald-950">No Formulations Found</h3>
        <p class="text-xs sm:text-sm text-slate-500 mt-1 max-w-md mx-auto">
            Try adjusting your search keyword or switching category tabs to find matching cosmetic and Ayurvedic products.
        </p>
        <a href="{{ route('products.index') }}" class="mt-4 inline-flex items-center gap-2 bg-emerald-800 text-white text-xs font-semibold px-4 py-2 rounded-xl">
            Reset Filters
        </a>
    </div>
@endforelse
