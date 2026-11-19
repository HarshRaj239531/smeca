@extends('admin.layouts.admin')

@section('title', 'Formulations & Products Catalog | SMECA Admin')
@section('page_name', 'Formulations & Products')

@section('content')

<!-- Header & Quick Action -->
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
    <div>
        <h1 class="text-2xl sm:text-3xl font-serif-display font-medium text-[#203a31]">
            Active Formulations & Catalog
        </h1>
        <p class="text-xs text-slate-500 mt-1">
            Real-time formulation registry available for consumer boxes and private label contract packaging.
        </p>
    </div>

    <div class="flex items-center gap-3">
        <a href="{{ route('products.index') }}" target="_blank"
           class="bg-[#203a31] hover:bg-[#14221c] text-white text-xs font-semibold px-4 py-2 rounded-xl transition flex items-center gap-1.5 shadow-xs">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
            <span>Live Catalog Page</span>
        </a>
    </div>
</div>

<!-- Category Metric Tabs -->
<div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mb-6">
    <div class="bg-white p-5 rounded-2xl border border-stone-200 shadow-2xs">
        <div class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Total Formulations</div>
        <div class="text-3xl font-serif-display font-medium text-slate-900 mt-1">{{ $totalProducts }}</div>
        <div class="text-[11px] text-slate-400 mt-0.5">Database indexed</div>
    </div>

    <div class="bg-white p-5 rounded-2xl border border-emerald-200 shadow-2xs">
        <div class="text-xs font-bold text-emerald-800 uppercase tracking-wider">Ayurvedic Formulations</div>
        <div class="text-3xl font-serif-display font-bold text-emerald-700 mt-1">
            {{ \App\Models\Product::where('is_ayurvedic', true)->count() }}
        </div>
        <div class="text-[11px] text-emerald-700/80 mt-0.5">Classical texts verified</div>
    </div>

    <div class="bg-white p-5 rounded-2xl border border-amber-200 shadow-2xs">
        <div class="text-xs font-bold text-amber-800 uppercase tracking-wider">B2B OEM Ready</div>
        <div class="text-3xl font-serif-display font-bold text-amber-700 mt-1">
            {{ \App\Models\Product::where('b2b_available', true)->count() }}
        </div>
        <div class="text-[11px] text-amber-700/80 mt-0.5">Bulk batch eligible</div>
    </div>

    <div class="bg-white p-5 rounded-2xl border border-blue-200 shadow-2xs">
        <div class="text-xs font-bold text-blue-800 uppercase tracking-wider">Categories</div>
        <div class="text-3xl font-serif-display font-bold text-blue-700 mt-1">
            {{ count($categories) }}
        </div>
        <div class="text-[11px] text-blue-700/80 mt-0.5">Product verticals</div>
    </div>
</div>

<!-- Search & Filter Bar -->
<div class="bg-white p-5 rounded-2xl border border-stone-200 shadow-2xs mb-6">
    <form method="GET" action="{{ route('admin.products') }}" class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
        <div class="flex-1 relative">
            <input type="text" name="search" value="{{ request('search') }}" 
                   placeholder="Search product name, botanical actives, or tagline..."
                   class="w-full bg-[#f6f8f3] border border-stone-300 rounded-xl pl-9 pr-4 py-2.5 text-xs focus:bg-white focus:border-[#203a31] focus:outline-hidden">
            <svg class="w-4 h-4 text-slate-400 absolute left-3 top-3 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
        </div>

        <div class="sm:w-56">
            <select name="category" class="w-full bg-[#f6f8f3] border border-stone-300 rounded-xl px-3 py-2.5 text-xs focus:bg-white focus:border-[#203a31] focus:outline-hidden">
                <option value="all">All Product Categories</option>
                @foreach($categories as $category)
                    <option value="{{ $category->slug }}" {{ request('category') == $category->slug ? 'selected' : '' }}>
                        {{ $category->name }} ({{ $category->products_count }})
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="bg-[#203a31] hover:bg-[#14221c] text-white text-xs font-semibold py-2.5 px-5 rounded-xl shadow-xs transition">
            Filter
        </button>

        @if(request()->hasAny(['search', 'category']))
            <a href="{{ route('admin.products') }}" class="px-3.5 py-2.5 rounded-xl border border-stone-300 text-xs font-semibold text-slate-600 hover:bg-stone-100 transition text-center">
                Reset
            </a>
        @endif
    </form>
</div>

<!-- Products Table Card -->
<div class="bg-white rounded-2xl border border-stone-200 shadow-sm overflow-hidden">
    <div class="px-6 py-4 border-b border-stone-200 flex items-center justify-between bg-stone-50/70">
        <h3 class="text-sm font-bold text-[#203a31] uppercase tracking-wider">Active Formulations Directory</h3>
        <span class="text-xs text-slate-500">Showing {{ $products->count() }} of {{ $products->total() }}</span>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left text-xs text-slate-600">
            <thead class="bg-stone-50 border-b border-stone-200 text-slate-700 uppercase font-bold text-[10px] tracking-wider">
                <tr>
                    <th class="py-3.5 px-5">Formulation / SKU</th>
                    <th class="py-3.5 px-5">Category</th>
                    <th class="py-3.5 px-5">Standard Pack</th>
                    <th class="py-3.5 px-5">OEM MOQ</th>
                    <th class="py-3.5 px-5">Classification</th>
                    <th class="py-3.5 px-5">Status</th>
                    <th class="py-3.5 px-5 text-right">Preview</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-stone-100">
                @forelse($products as $product)
                    <tr class="hover:bg-[#f6f8f3] transition group">
                        
                        <!-- Formulation Name & Image -->
                        <td class="py-4 px-5">
                            <div class="flex items-center gap-3">
                                <img src="{{ $product->image_url }}" alt="{{ $product->name }}" 
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

                        <!-- Live Link -->
                        <td class="py-4 px-5 text-right whitespace-nowrap">
                            <a href="{{ route('products.show', $product->slug) }}" target="_blank"
                               class="inline-flex items-center gap-1 text-xs font-semibold text-blue-600 hover:text-blue-800 bg-blue-50 px-3 py-1 rounded-lg transition">
                                <span>Inspect</span> &rarr;
                            </a>
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

@endsection
