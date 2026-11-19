@extends('admin.layouts.admin')

@section('title', 'Formulations & Products Catalog | SMECA Admin')
@section('page_name', 'Formulations & Products')
@section('module_name', 'FORMULATIONS CATALOG')

@section('content')

<!-- Header & Quick Action -->
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-6">
    <div>
        <h1 class="text-2xl sm:text-3xl font-serif-display font-medium text-[#203a31]">
            Active Formulations & Catalog
        </h1>
        <p class="text-xs text-slate-500 mt-1">
            Real-time formulation registry available for consumer boxes and private label contract packaging.
        </p>
    </div>

    <div class="flex items-center gap-3">
        <button type="button" onclick="openCreateProductModal()"
                class="bg-emerald-700 hover:bg-emerald-800 text-white text-xs font-semibold px-4 py-2.5 rounded-xl transition flex items-center gap-1.5 shadow-xs cursor-pointer">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
            <span>+ Add Formulation</span>
        </button>

        <a href="{{ route('products.index') }}" target="_blank"
           class="bg-[#203a31] hover:bg-[#14221c] text-white text-xs font-semibold px-4 py-2.5 rounded-xl transition flex items-center gap-1.5 shadow-xs">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
            <span>Live Catalog Page</span>
        </a>
    </div>
</div>

@if(session('status_updated'))
    <div class="mb-6 p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-900 text-xs flex items-center justify-between shadow-2xs">
        <div class="flex items-center gap-2">
            <svg class="w-4 h-4 text-emerald-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
            <span class="font-semibold">{{ session('status_updated') }}</span>
        </div>
        <button type="button" onclick="this.parentElement.remove()" class="text-emerald-700 hover:text-emerald-900 font-bold px-2 py-1">&times;</button>
    </div>
@endif

@if($errors->any())
    <div class="mb-6 p-4 rounded-xl bg-red-50 border border-red-200 text-red-900 text-xs shadow-2xs">
        <div class="font-bold mb-1 flex items-center gap-2">
            <svg class="w-4 h-4 text-red-600 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
            <span>Please correct the following errors:</span>
        </div>
        <ul class="list-disc pl-6 space-y-0.5">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Category Metric Tabs (Matching Reference Design) -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
    
    <!-- Card 1: Emerald/Mint Gradient -->
    <div class="stat-card-glass stat-card-gradient-1 p-5 text-white flex flex-col justify-between">
        <div class="stat-card-watermark"></div>
        <div>
            <div class="flex items-center justify-between gap-2">
                <div class="flex items-center gap-1.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-white/80"></span>
                    <span class="text-[10px] font-bold tracking-widest uppercase text-white/95">Total Formulations</span>
                </div>
                <div class="w-8 h-8 rounded-xl bg-white/20 backdrop-blur-xs border border-white/30 flex items-center justify-center text-white shrink-0 shadow-xs">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                    </svg>
                </div>
            </div>
            <div class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight mt-2.5 font-sans">
                {{ $totalProducts }}
            </div>
        </div>
        <div class="border-t border-white/25 mt-3 pt-2 text-[10px] font-semibold text-white/90 uppercase tracking-wider">
            Database Indexed SKUs
        </div>
    </div>

    <!-- Card 2: Purple/Violet Gradient -->
    <div class="stat-card-glass stat-card-gradient-2 p-5 text-white flex flex-col justify-between">
        <div class="stat-card-watermark"></div>
        <div>
            <div class="flex items-center justify-between gap-2">
                <div class="flex items-center gap-1.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-white/80"></span>
                    <span class="text-[10px] font-bold tracking-widest uppercase text-white/95">Ayurvedic Formulations</span>
                </div>
                <div class="w-8 h-8 rounded-xl bg-white/20 backdrop-blur-xs border border-white/30 flex items-center justify-center text-white shrink-0 shadow-xs">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                </div>
            </div>
            <div class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight mt-2.5 font-sans">
                {{ \App\Models\Product::where('is_ayurvedic', true)->count() }}
            </div>
        </div>
        <div class="border-t border-white/25 mt-3 pt-2 text-[10px] font-semibold text-white/90 uppercase tracking-wider">
            Classical Texts Verified
        </div>
    </div>

    <!-- Card 3: Golden Amber Gradient -->
    <div class="stat-card-glass stat-card-gradient-3 p-5 text-white flex flex-col justify-between">
        <div class="stat-card-watermark"></div>
        <div>
            <div class="flex items-center justify-between gap-2">
                <div class="flex items-center gap-1.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-white/80"></span>
                    <span class="text-[10px] font-bold tracking-widest uppercase text-white/95">B2B OEM Ready</span>
                </div>
                <div class="w-8 h-8 rounded-xl bg-white/20 backdrop-blur-xs border border-white/30 flex items-center justify-center text-white shrink-0 shadow-xs">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                </div>
            </div>
            <div class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight mt-2.5 font-sans">
                {{ \App\Models\Product::where('b2b_available', true)->count() }}
            </div>
        </div>
        <div class="border-t border-white/25 mt-3 pt-2 text-[10px] font-semibold text-white/90 uppercase tracking-wider">
            Bulk Batch Eligible
        </div>
    </div>

    <!-- Card 4: Royal Blue / Indigo Gradient -->
    <div class="stat-card-glass stat-card-gradient-5 p-5 text-white flex flex-col justify-between">
        <div class="stat-card-watermark"></div>
        <div>
            <div class="flex items-center justify-between gap-2">
                <div class="flex items-center gap-1.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-white/80"></span>
                    <span class="text-[10px] font-bold tracking-widest uppercase text-white/95">Product Categories</span>
                </div>
                <div class="w-8 h-8 rounded-xl bg-white/20 backdrop-blur-xs border border-white/30 flex items-center justify-center text-white shrink-0 shadow-xs">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                    </svg>
                </div>
            </div>
            <div class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight mt-2.5 font-sans">
                {{ count($categories) }}
            </div>
        </div>
        <div class="border-t border-white/25 mt-3 pt-2 text-[10px] font-semibold text-white/90 uppercase tracking-wider">
            Active Verticals
        </div>
    </div>

</div>

<!-- Search & Filter Bar -->
<div class="bg-white p-4 sm:p-5 rounded-2xl border border-stone-200 shadow-2xs mb-6 w-full max-w-full min-w-0">
    <form method="GET" action="{{ route('admin.products') }}" class="flex flex-col md:flex-row items-stretch md:items-center gap-3">
        <div class="flex-1 min-w-0 relative">
            <input type="text" name="search" value="{{ request('search') }}" 
                   placeholder="Search product name, botanical actives, or tagline..."
                   class="w-full bg-[#f6f8f3] border border-stone-300 rounded-xl pl-9 pr-4 py-2.5 text-xs focus:bg-white focus:border-[#203a31] focus:outline-hidden">
            <svg class="w-4 h-4 text-slate-400 absolute left-3 top-3 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
        </div>

        <div class="w-full md:w-56 shrink-0">
            <select name="category" class="w-full bg-[#f6f8f3] border border-stone-300 rounded-xl px-3 py-2.5 text-xs focus:bg-white focus:border-[#203a31] focus:outline-hidden">
                <option value="all">All Product Categories</option>
                @foreach($categories as $category)
                    <option value="{{ $category->slug }}" {{ request('category') == $category->slug ? 'selected' : '' }}>
                        {{ $category->name }} ({{ $category->products_count }})
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="bg-[#203a31] hover:bg-[#14221c] text-white text-xs font-semibold py-2.5 px-5 rounded-xl shadow-xs transition shrink-0 cursor-pointer">
            Filter
        </button>

        @if(request()->hasAny(['search', 'category']))
            <a href="{{ route('admin.products') }}" class="px-3.5 py-2.5 rounded-xl border border-stone-300 text-xs font-semibold text-slate-600 hover:bg-stone-100 transition text-center shrink-0">
                Reset
            </a>
        @endif
    </form>
</div>

<!-- Products Table Card -->
<div class="bg-white rounded-2xl border border-stone-200 shadow-sm overflow-hidden w-full max-w-full min-w-0">
    <div class="px-5 py-4 border-b border-stone-200 flex flex-col sm:flex-row sm:items-center justify-between gap-2 bg-stone-50/70">
        <h3 class="text-sm font-bold text-[#203a31] uppercase tracking-wider">Active Formulations Directory</h3>
        <span class="text-xs text-slate-500">Showing {{ $products->count() }} of {{ $products->total() }}</span>
    </div>

    <div class="overflow-x-auto w-full max-w-full custom-theme-scroll">
        <table class="w-full text-left text-xs text-slate-600 min-w-[700px]">
            <thead class="bg-stone-50 border-b border-stone-200 text-slate-700 uppercase font-bold text-[10px] tracking-wider">
                <tr>
                    <th class="py-3.5 px-5">Formulation / SKU</th>
                    <th class="py-3.5 px-5">Category</th>
                    <th class="py-3.5 px-5">Standard Pack</th>
                    <th class="py-3.5 px-5">OEM MOQ</th>
                    <th class="py-3.5 px-5">Classification</th>
                    <th class="py-3.5 px-5">Status</th>
                    <th class="py-3.5 px-5 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-stone-100">
                @forelse($products as $product)
                    <tr class="hover:bg-[#f6f8f3] transition group">
                        
                        <!-- Formulation Name & Image -->
                        <td class="py-4 px-5">
                            <div class="flex items-center gap-3">
                                <img src="{{ $product->image_url }}" alt="{{ $product->name }}" 
                                     onerror="this.onerror=null; this.src='/images/hero-box.png';"
                                     class="w-12 h-12 rounded-xl object-cover border border-stone-200 shrink-0">
                                <div class="min-w-0">
                                    <div class="font-bold text-[#203a31] text-sm group-hover:text-emerald-800 transition">
                                        {{ $product->name }}
                                    </div>
                                    <div class="text-[11px] text-slate-400 line-clamp-1">
                                        {{ $product->tagline }}
                                    </div>
                                </div>
                            </div>
                        </td>

                        <!-- Category -->
                        <td class="py-4 px-5 whitespace-nowrap">
                            <span class="inline-block px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-stone-100 text-slate-700 border border-stone-200">
                                {{ $product->category->name }}
                            </span>
                        </td>

                        <!-- Volume -->
                        <td class="py-4 px-5 whitespace-nowrap font-semibold text-slate-800">
                            {{ $product->volume_size }}
                        </td>

                        <!-- MOQ -->
                        <td class="py-4 px-5 whitespace-nowrap">
                            <span class="font-semibold text-slate-700">{{ $product->moq }}</span>
                        </td>

                        <!-- Classification (Ayurvedic / Cosmetic) -->
                        <td class="py-4 px-5 whitespace-nowrap">
                            @if($product->is_ayurvedic)
                                <span class="px-2 py-0.5 rounded text-[10px] font-bold bg-emerald-100 text-emerald-900 border border-emerald-200">
                                    🌿 Ayurvedic
                                </span>
                            @else
                                <span class="px-2 py-0.5 rounded text-[10px] font-semibold bg-stone-100 text-slate-600">
                                    Clean Cosmetic
                                </span>
                            @endif
                        </td>

                        <!-- Status -->
                        <td class="py-4 px-5 whitespace-nowrap">
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-emerald-50 text-emerald-700 border border-emerald-200">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                {{ $product->status }}
                            </span>
                        </td>

                        <!-- Actions -->
                        <td class="py-4 px-5 text-right whitespace-nowrap">
                            <div class="inline-flex items-center gap-1.5 justify-end">
                                <!-- Edit Button -->
                                <button type="button" 
                                        onclick='openEditProductModal(@json($product))'
                                        class="inline-flex items-center gap-1 text-xs font-semibold text-amber-700 hover:text-amber-900 bg-amber-50 hover:bg-amber-100 border border-amber-200/60 px-2.5 py-1.5 rounded-lg transition cursor-pointer"
                                        title="Edit Formulation">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                    <span>Edit</span>
                                </button>

                                <!-- Live Link -->
                                <a href="{{ route('products.show', $product->slug) }}" target="_blank"
                                   class="inline-flex items-center gap-1 text-xs font-semibold text-blue-700 hover:text-blue-900 bg-blue-50 hover:bg-blue-100 border border-blue-200/60 px-2.5 py-1.5 rounded-lg transition"
                                   title="View on Live Website">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                    <span>View</span>
                                </a>

                                <!-- Delete Form -->
                                <form method="POST" action="{{ route('admin.products.destroy', $product->id) }}" class="inline" onsubmit="return confirm('Are you sure you want to remove formulation &quot;{{ addslashes($product->name) }}&quot; from catalog?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="inline-flex items-center text-xs font-semibold text-red-600 hover:text-red-800 bg-red-50 hover:bg-red-100 border border-red-200/60 p-1.5 rounded-lg transition cursor-pointer"
                                            title="Delete Formulation">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                    </button>
                                </form>
                            </div>
                        </td>

                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center py-12 text-slate-400">
                            No formulations matched your query.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="px-6 py-4 border-t border-stone-200 bg-stone-50/50">
        {{ $products->links() }}
    </div>
</div>

<!-- Formulation Master Modal (Separated Component) -->
@include('admin.partials.product-modal')

@endsection
