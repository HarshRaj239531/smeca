@extends('layouts.app')

@section('title', $product->name . ' | SMECA Industry Private Limited')

@section('content')

<!-- Breadcrumb -->
<div class="bg-stone-100/70 border-b border-stone-200 py-3 text-xs text-slate-500">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center gap-2">
        <a href="{{ route('home') }}" class="hover:text-emerald-800">Home</a>
        <span>/</span>
        <a href="{{ route('products.index') }}" class="hover:text-emerald-800">Products</a>
        <span>/</span>
        <a href="{{ route('products.index', ['category' => $product->category->slug]) }}" class="hover:text-emerald-800">{{ $product->category->name }}</a>
        <span>/</span>
        <span class="text-slate-800 font-semibold truncate">{{ $product->name }}</span>
    </div>
</div>

<!-- Product Details Section -->
<section class="py-12 sm:py-16 bg-white border-b border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            
            <!-- Left Column: Product Imagery -->
            <div class="lg:col-span-5 space-y-4">
                <div class="rounded-3xl overflow-hidden border border-stone-200 shadow-md bg-stone-50 relative group">
                    <img src="{{ $product->image_url }}" alt="{{ $product->name }}"
                         class="w-full h-96 sm:h-[480px] object-cover group-hover:scale-105 transition-transform duration-500">
                    
                    @if($product->is_ayurvedic)
                        <div class="absolute top-4 left-4 bg-[#243c30] text-[#c0caa7] text-xs font-semibold px-3 py-1.5 rounded-full flex items-center gap-1.5 shadow-md">
                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a8 8 0 100 16 8 8 0 000-16zm1 11H9v-2h2v2zm0-4H9V5h2v4z"/></svg>
                            Classical Ayurvedic Formulation
                        </div>
                    @endif

                    <div class="absolute bottom-4 right-4 bg-white/95 text-slate-800 text-xs font-bold px-3 py-1.5 rounded-xl shadow-xs border border-stone-200">
                        {{ $product->volume_size }}
                    </div>
                </div>

                <div class="bg-stone-50 rounded-2xl p-4 border border-stone-200 flex items-center justify-between text-xs text-slate-600">
                    <span class="flex items-center gap-1.5 font-semibold text-emerald-800">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        Batch Tested for Purity
                    </span>
                    <span class="flex items-center gap-1.5 font-semibold text-emerald-800">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        Paraben & Toxin Free
                    </span>
                </div>
            </div>

            <!-- Right Column: Specs & Enquiry -->
            <div class="lg:col-span-7 space-y-6">
                
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-emerald-800 bg-emerald-50 px-3 py-1 rounded-full border border-emerald-200">
                        {{ $product->category->name }}
                    </span>
                    <h1 class="text-3xl sm:text-4xl font-bold font-serif-display text-emerald-950 mt-3">
                        {{ $product->name }}
                    </h1>
                    <p class="text-sm font-semibold text-amber-800 mt-1">
                        {{ $product->tagline }}
                    </p>
                </div>

                <p class="text-sm sm:text-base text-slate-600 leading-relaxed">
                    {{ $product->description ?? $product->short_description }}
                </p>

                <!-- Technical Specification Grid -->
                <div class="bg-stone-50 rounded-2xl p-6 border border-stone-200 space-y-3.5 text-xs">
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-2 pb-3 border-b border-stone-200/80">
                        <strong class="text-slate-500 uppercase tracking-wider">Key Ingredients</strong>
                        <div class="sm:col-span-2 font-medium text-slate-800">{{ $product->key_ingredients }}</div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-2 pb-3 border-b border-stone-200/80">
                        <strong class="text-slate-500 uppercase tracking-wider">Clinical / Skin Benefits</strong>
                        <div class="sm:col-span-2 font-medium text-slate-800">{{ $product->benefits ?? 'Therapeutic skin & hair nourishment' }}</div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-2 pb-3 border-b border-stone-200/80">
                        <strong class="text-slate-500 uppercase tracking-wider">Packaging Sizes</strong>
                        <div class="sm:col-span-2 font-medium text-slate-800">{{ $product->volume_size }} (Custom bottles/jars on OEM demand)</div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-2 pb-3 border-b border-stone-200/80">
                        <strong class="text-slate-500 uppercase tracking-wider">B2B Minimum Order Qty</strong>
                        <div class="sm:col-span-2 font-bold text-emerald-900">{{ $product->moq }}</div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-2">
                        <strong class="text-slate-500 uppercase tracking-wider">Manufacturing Origin</strong>
                        <div class="sm:col-span-2 font-medium text-slate-800">SMECA Industrial Facility, Aurangabad & Gaya, Bihar</div>
                    </div>
                </div>

                <!-- Call to Action Box -->
                <div class="p-6 rounded-2xl bg-gradient-to-r from-emerald-50 via-white to-stone-50 border border-emerald-200 flex flex-col sm:flex-row items-center justify-between gap-4">
                    <div>
                        <div class="text-xs font-bold text-emerald-900 uppercase tracking-wide">Interested in this Formulation?</div>
                        <div class="text-xs text-slate-600 mt-0.5">Order retail batches, request a physical sample, or discuss OEM contract packaging.</div>
                    </div>
                    <button onclick="openEnquiryModal('{{ addslashes($product->name) }}', {{ $product->id }}, 'product')"
                            class="shrink-0 bg-[#243c30] hover:bg-[#182a21] text-white font-medium text-xs sm:text-sm px-6 py-3 rounded-xl transition shadow-xs flex items-center gap-2 cursor-pointer">
                        <span>Enquire About This Product</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </button>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- Related Formulations -->
@if(count($relatedProducts) > 0)
<section class="py-16 bg-stone-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h3 class="text-2xl font-bold font-serif-display text-emerald-950 mb-8">
            Related Formulations in {{ $product->category->name }}
        </h3>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            @foreach($relatedProducts as $related)
                <div class="bg-white rounded-2xl border border-stone-200 p-5 shadow-xs hover:shadow-md transition">
                    <img src="{{ $related->image_url }}" alt="{{ $related->name }}" class="h-44 w-full object-cover rounded-xl mb-4">
                    <h4 class="font-bold text-sm text-emerald-950 font-serif-display">
                        <a href="{{ route('products.show', $related->slug) }}" class="hover:underline">{{ $related->name }}</a>
                    </h4>
                    <p class="text-xs text-slate-500 mt-1 line-clamp-2">{{ $related->short_description }}</p>
                    <div class="mt-4 pt-3 border-t border-stone-100 flex items-center justify-between">
                        <span class="text-[11px] font-semibold text-emerald-800">{{ $related->volume_size }}</span>
                        <button onclick="openEnquiryModal('{{ addslashes($related->name) }}', {{ $related->id }}, 'product')"
                                class="text-xs font-bold text-emerald-800 hover:underline">
                            Enquire &rarr;
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

@endsection
