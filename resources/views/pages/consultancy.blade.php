@extends('layouts.app')

@section('title', 'Consultancy & Marketing Advisory | SMECA INDUSTRY PRIVATE LIMITED')

@section('content')

<!-- Header Banner -->
<section class="bg-gradient-to-b from-emerald-950 via-emerald-900 to-emerald-950 text-white py-16 sm:py-24 relative overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(#52b788_1px,transparent_1px)] [background-size:20px_20px] opacity-15"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative text-center space-y-4">
        <span class="inline-block text-xs font-bold uppercase tracking-widest text-amber-300 bg-emerald-800/80 px-3.5 py-1 rounded-full border border-amber-300/30">
            Strategic Brand Growth
        </span>
        <h1 class="text-3xl sm:text-5xl font-bold font-serif-display tracking-tight text-white">
            Consultancy & Marketing Solutions
        </h1>
        <p class="text-sm sm:text-base text-emerald-100 max-w-2xl mx-auto leading-relaxed">
            Empowering beauty, cosmetic, and Ayurvedic enterprises with business advisory, retail distribution grooming, and performance marketing strategies.
        </p>
    </div>
</section>

<!-- Services Grid -->
<section class="py-16 sm:py-20 bg-white border-b border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto space-y-3 mb-14">
            <span class="text-xs font-bold uppercase tracking-wider text-emerald-800 bg-emerald-50 px-3 py-1 rounded-full border border-emerald-200">
                Advisory Expertise
            </span>
            <h2 class="text-3xl sm:text-4xl font-bold font-serif-display text-emerald-950">
                Comprehensive Brand Acceleration Services
            </h2>
            <p class="text-sm sm:text-base text-slate-600">
                Drawing upon our directors' extensive field experience across Bihar, North India, and national retail networks, we help brands navigate formulation, sales, and digital scale.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach($consultancyServices as $service)
                <div class="bg-stone-50 rounded-3xl p-8 border border-stone-200 hover:shadow-lg transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-emerald-800 text-amber-300 flex items-center justify-center mb-5">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                        <h3 class="text-xl font-bold font-serif-display text-emerald-950 mb-3">
                            {{ $service['title'] }}
                        </h3>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed mb-6">
                            {{ $service['description'] }}
                        </p>

                        <div class="space-y-2 pt-2 border-t border-stone-200">
                            <span class="text-xs font-bold uppercase tracking-wider text-emerald-900 block">Key Deliverables:</span>
                            @foreach($service['deliverables'] as $item)
                                <div class="flex items-center gap-2 text-xs text-slate-700">
                                    <svg class="w-4 h-4 text-emerald-700 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                                    <span>{{ $item }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="mt-8 pt-4 border-t border-stone-200">
                        <button onclick="openEnquiryModal('Advisory: {{ addslashes($service['title']) }}', null, 'consultancy')"
                                class="bg-emerald-800 hover:bg-emerald-900 text-white text-xs font-semibold px-5 py-2.5 rounded-xl transition shadow-xs flex items-center gap-2">
                            <span>Book Consultation Session</span>
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>

<!-- Retail Personnel & Distribution Training Spotlight -->
<section class="py-16 bg-stone-50 border-b border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-emerald-950 text-white rounded-3xl p-8 sm:p-12 relative overflow-hidden shadow-xl">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-8 space-y-4">
                    <span class="text-xs font-bold uppercase tracking-wider text-amber-300">
                        Practical Field Grooming
                    </span>
                    <h3 class="text-2xl sm:text-3xl font-bold font-serif-display text-white">
                        Retail Counter & Field Sales Training in Bihar
                    </h3>
                    <p class="text-sm text-emerald-100/90 leading-relaxed">
                        Selling Ayurvedic and premium skincare requires product education. We conduct structured training bootcamps in Aurangabad and Gaya for in-store promoters, pharmacy sales staff, and stockist sales representatives, dramatically improving conversion rates.
                    </p>
                    <div class="flex flex-wrap gap-4 pt-2 text-xs text-amber-200">
                        <span class="flex items-center gap-1.5 font-semibold">✓ Ingredient Explanation Training</span>
                        <span class="flex items-center gap-1.5 font-semibold">✓ Customer Skin Objection Handling</span>
                        <span class="flex items-center gap-1.5 font-semibold">✓ Local Market Stock Rotation</span>
                    </div>
                </div>
                <div class="lg:col-span-4 text-center lg:text-right">
                    <button onclick="openEnquiryModal('Retail Training Program Inquiry', null, 'consultancy')" 
                            class="bg-amber-400 hover:bg-amber-300 text-emerald-950 font-bold text-sm px-6 py-3.5 rounded-xl transition shadow-lg w-full sm:w-auto">
                        Inquire for Staff Training
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
