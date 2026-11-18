@extends('layouts.app')

@section('title', 'Our Products & Formulations | SMECA INDUSTRY PRIVATE LIMITED')

@section('content')

<!-- Page Hero Header -->
<section class="bg-white text-[#203a31] py-14 sm:py-18 relative overflow-hidden border-b border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative text-center space-y-4">
        <span class="inline-block text-xs font-bold uppercase tracking-widest text-[#203a31] bg-[#c0caa7]/30 px-3.5 py-1 rounded-full border border-[#203a31]/20">
            Dynamic Formulation Catalog
        </span>
        <h1 class="text-3xl sm:text-5xl font-bold font-serif-display tracking-tight text-[#203a31]">
            Ayurvedic, Cosmetic & Wellness Products
        </h1>
        <p class="text-sm sm:text-base text-slate-600 max-w-2xl mx-auto leading-relaxed">
            Explore our data-driven catalog of certified formulations. Each product is available for consumer retail purchase, bulk commercial supply, or third-party private labeling.
        </p>
    </div>
</section>

<!-- Filter, Search & Category Navigation Bar -->
<section class="bg-white border-b border-stone-200 sticky top-20 z-30 shadow-xs">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
        
        <!-- Search & Filter Controls -->
        <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
            
            <!-- Category Tabs (Horizontal Scrollable on mobile) -->
            <div class="flex items-center gap-2 overflow-x-auto pb-2 lg:pb-0 scrollbar-none text-xs font-semibold">
                <a href="{{ route('products.index', ['category' => 'all']) }}" 
                   class="category-filter-btn shrink-0 px-4 py-2 rounded-xl transition {{ $selectedCategory === 'all' ? 'bg-emerald-800 text-white shadow-xs' : 'bg-stone-100 text-slate-700 hover:bg-stone-200' }}"
                   data-cat="all">
                    All Formulations ({{ $products->total() }})
                </a>
                @foreach($categories as $category)
                    <a href="{{ route('products.index', ['category' => $category->slug]) }}" 
                       class="category-filter-btn shrink-0 px-4 py-2 rounded-xl transition {{ $selectedCategory === $category->slug ? 'bg-emerald-800 text-white shadow-xs' : 'bg-stone-100 text-slate-700 hover:bg-stone-200' }}"
                       data-cat="{{ $category->slug }}">
                        {{ $category->name }}
                        <span class="ml-1 opacity-75 text-[10px]">({{ $category->products_count }})</span>
                    </a>
                @endforeach
            </div>

            <!-- Search & Quick Toggles -->
            <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 shrink-0">
                
                <!-- Live Search Input -->
                <div class="relative w-full sm:w-72">
                    <input type="text" id="liveSearchInput" placeholder="Search by herb, name, benefit..."
                           value="{{ $searchQuery }}"
                           class="w-full bg-stone-50 border border-stone-300 rounded-xl pl-9 pr-8 py-2 text-xs focus:bg-white focus:border-emerald-700 focus:ring-1 focus:ring-emerald-700 focus:outline-hidden">
                    <svg class="w-4 h-4 text-slate-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    <button id="clearSearchBtn" class="hidden absolute right-2.5 top-2 text-slate-400 hover:text-slate-600">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                </div>

                <!-- Ayurvedic Only Toggle -->
                <label class="flex items-center gap-2 cursor-pointer text-xs font-semibold text-slate-700 bg-stone-50 px-3 py-2 rounded-xl border border-stone-300 select-none">
                    <input type="checkbox" id="ayurvedicToggle" {{ $isAyurvedicOnly ? 'checked' : '' }} class="rounded text-emerald-700 focus:ring-emerald-600">
                    <span>Ayurvedic Only</span>
                </label>

            </div>

        </div>

    </div>
</section>

<!-- Dynamic Product Grid Section -->
<section class="py-12 bg-stone-50 min-h-[500px]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Live Counter Info -->
        <div class="flex items-center justify-between text-xs text-slate-500 mb-6">
            <div>
                Showing <span id="visibleProductCount" class="font-bold text-slate-800">{{ $products->count() }}</span> formulations in catalog
            </div>
            <div class="text-[11px] text-emerald-800 font-medium hidden sm:block">
                All formulations customizable for private label contract orders.
            </div>
        </div>

        <!-- Products Container -->
        <div id="productsGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @include('partials.product-cards', ['products' => $products])
        </div>

        <!-- Pagination Links -->
        <div class="mt-12">
            {{ $products->links() }}
        </div>

    </div>
</section>

<!-- Custom Formulation Callout Banner -->
<section class="py-16 bg-white border-t border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white border border-stone-200 rounded-3xl p-8 sm:p-12 text-[#203a31] flex flex-col lg:flex-row items-center justify-between gap-8 shadow-xs">
            <div class="space-y-3 max-w-2xl">
                <span class="text-xs font-bold uppercase tracking-wider text-[#384e42] bg-[#c0caa7]/30 px-3 py-1 rounded-full border border-[#203a31]/15 inline-block">
                    Need a Custom Formulation?
                </span>
                <h3 class="text-2xl sm:text-3xl font-bold font-serif-display text-[#203a31]">
                    Can't find your specific botanical requirement?
                </h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    SMECA operates a specialized formulation lab in Bihar equipped to compound custom Ayurvedic extracts, organic sunscreen lotions, anti-blemish creams, and specialty fine attars tailored to your exact active percentage and target cost.
                </p>
            </div>
            <div class="shrink-0 flex flex-col sm:flex-row gap-3 w-full lg:w-auto">
                <button onclick="openEnquiryModal('Custom Formulation R&D Project', null, 'b2b_oem')" 
                        class="bg-blue-600 hover:bg-blue-700 text-white font-medium text-xs sm:text-sm px-6 py-3.5 rounded-xl transition text-center shadow-xs cursor-pointer">
                    Request Custom Lab Sample
                </button>
                <a href="{{ route('services.b2b') }}" 
                   class="bg-stone-100 hover:bg-stone-200 text-[#203a31] font-medium text-xs sm:text-sm px-6 py-3.5 rounded-xl transition text-center border border-stone-300">
                    Learn About OEM Services
                </a>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    // Fast Client-Side Search & Filter Handler
    const searchInput = document.getElementById('liveSearchInput');
    const clearBtn = document.getElementById('clearSearchBtn');
    const ayurvedicToggle = document.getElementById('ayurvedicToggle');
    const productItems = document.querySelectorAll('.product-item');
    const visibleCounter = document.getElementById('visibleProductCount');

    function filterProducts() {
        const query = searchInput.value.toLowerCase().trim();
        const ayurvedicOnly = ayurvedicToggle.checked;
        let visibleCount = 0;

        if (query.length > 0) {
            clearBtn.classList.remove('hidden');
        } else {
            clearBtn.classList.add('hidden');
        }

        productItems.forEach(item => {
            const name = item.dataset.name || '';
            const ingredients = item.dataset.ingredients || '';
            const category = item.dataset.category || '';
            const isAyurvedic = item.dataset.ayurvedic === '1';

            const matchesQuery = !query || 
                name.includes(query) || 
                ingredients.includes(query) || 
                category.includes(query);

            const matchesAyurvedic = !ayurvedicOnly || isAyurvedic;

            if (matchesQuery && matchesAyurvedic) {
                item.style.display = 'flex';
                visibleCount++;
            } else {
                item.style.display = 'none';
            }
        });

        if (visibleCounter) {
            visibleCounter.textContent = visibleCount;
        }
    }

    if (searchInput) {
        searchInput.addEventListener('input', filterProducts);
    }

    if (clearBtn) {
        clearBtn.addEventListener('click', () => {
            searchInput.value = '';
            filterProducts();
            searchInput.focus();
        });
    }

    if (ayurvedicToggle) {
        ayurvedicToggle.addEventListener('change', filterProducts);
    }
</script>
@endpush
