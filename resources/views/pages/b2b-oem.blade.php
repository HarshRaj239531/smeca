@extends('layouts.app')

@section('title', 'B2B & OEM Contract Manufacturing | SMECA INDUSTRY PRIVATE LIMITED')

@section('content')

<!-- Header Banner -->
<section class="bg-gradient-to-b from-emerald-950 via-emerald-900 to-emerald-950 text-white py-16 sm:py-24 relative overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(#52b788_1px,transparent_1px)] [background-size:20px_20px] opacity-15"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative text-center space-y-4">
        <span class="inline-block text-xs font-bold uppercase tracking-widest text-amber-300 bg-emerald-800/80 px-3.5 py-1 rounded-full border border-amber-300/30">
            Enterprise Solutions
        </span>
        <h1 class="text-3xl sm:text-5xl font-bold font-serif-display tracking-tight text-white">
            B2B, OEM & Third-Party Manufacturing
        </h1>
        <p class="text-sm sm:text-base text-emerald-100 max-w-2xl mx-auto leading-relaxed">
            Turnkey cosmetic and Ayurvedic contract manufacturing for emerging D2C brands, national retail labels, and institutional super stockists.
        </p>
    </div>
</section>

<!-- Overview Grid -->
<section class="py-16 sm:py-20 bg-white border-b border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto space-y-3 mb-14">
            <span class="text-xs font-bold uppercase tracking-wider text-emerald-800 bg-emerald-50 px-3 py-1 rounded-full border border-emerald-200">
                End-To-End Manufacturing
            </span>
            <h2 class="text-3xl sm:text-4xl font-bold font-serif-display text-emerald-950">
                From Custom Formulation to Shelf-Ready Packaging
            </h2>
            <p class="text-sm sm:text-base text-slate-600">
                SMECA eliminates manufacturing bottlenecks so you can focus on brand marketing and consumer acquisition.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($oemCapabilities as $capability)
                <div class="bg-stone-50 rounded-2xl p-7 border border-stone-200 hover:border-emerald-600/30 hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-[11px] font-bold text-amber-800 bg-amber-100/80 px-2.5 py-0.5 rounded-full border border-amber-200">
                                {{ $capability['badge'] }}
                            </span>
                            <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-800 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold font-serif-display text-emerald-950 mb-2">
                            {{ $capability['title'] }}
                        </h3>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                            {{ $capability['description'] }}
                        </p>
                    </div>

                    <div class="mt-6 pt-4 border-t border-stone-200">
                        <button onclick="openEnquiryModal('OEM Inquiry: {{ addslashes($capability['title']) }}', null, 'b2b_oem')"
                                class="text-xs font-bold text-emerald-800 hover:text-emerald-950 flex items-center gap-1.5 transition">
                            <span>Request Specifications</span>
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>

<!-- 5-Step Process Timeline -->
<section class="py-16 sm:py-20 bg-stone-50 border-b border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-2xl mx-auto space-y-3 mb-14">
            <span class="text-xs font-bold uppercase tracking-wider text-emerald-800 bg-emerald-100/80 px-3 py-1 rounded-full border border-emerald-300">
                Workflow
            </span>
            <h2 class="text-3xl sm:text-4xl font-bold font-serif-display text-emerald-950">
                Our 5-Stage OEM Partnership Roadmap
            </h2>
            <p class="text-sm text-slate-600">
                Transparent milestones from signing the mutual Non-Disclosure Agreement (NDA) to nationwide dispatch.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-5 gap-6">
            @foreach($processSteps as $step)
                <div class="bg-white p-6 rounded-2xl border border-stone-200 relative shadow-xs flex flex-col justify-between">
                    <div>
                        <span class="text-3xl font-extrabold text-emerald-200 font-serif-display block mb-2">{{ $step['step'] }}</span>
                        <h4 class="text-base font-bold font-serif-display text-emerald-950 mb-2">{{ $step['title'] }}</h4>
                        <p class="text-xs text-slate-600 leading-relaxed">{{ $step['desc'] }}</p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-stone-100 text-[10px] uppercase font-bold text-emerald-800">
                        Milestone {{ $step['step'] }}
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>

<!-- Direct B2B Quotation Form Box -->
<section class="py-16 bg-white" id="b2b-form">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-stone-50 rounded-3xl p-8 sm:p-10 border border-stone-200 shadow-sm">
            <div class="text-center space-y-2 mb-8">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-800 bg-emerald-100 px-3 py-1 rounded-full">
                    Direct Quotation Desk
                </span>
                <h3 class="text-2xl sm:text-3xl font-bold font-serif-display text-emerald-950">
                    Request an OEM or Distributorship Proposal
                </h3>
                <p class="text-xs sm:text-sm text-slate-600 max-w-xl mx-auto">
                    Fill in your product concept, batch volume requirement, and target delivery timeframe. Our B2B director will contact you with sample terms and pricing.
                </p>
            </div>

            <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
                @csrf
                <input type="hidden" name="inquiry_type" value="b2b_oem">

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1">Your Full Name <span class="text-rose-500">*</span></label>
                        <input type="text" name="name" required placeholder="e.g. Ramesh Chandra"
                               class="w-full bg-white border border-stone-300 rounded-xl px-3.5 py-2.5 text-sm focus:border-emerald-600 focus:outline-hidden">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1">Company / Brand Name <span class="text-rose-500">*</span></label>
                        <input type="text" name="company_name" required placeholder="e.g. Vedic Luxe Botanicals Pvt Ltd"
                               class="w-full bg-white border border-stone-300 rounded-xl px-3.5 py-2.5 text-sm focus:border-emerald-600 focus:outline-hidden">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1">Phone / WhatsApp Number <span class="text-rose-500">*</span></label>
                        <input type="tel" name="phone" required placeholder="+91 98765 43210"
                               class="w-full bg-white border border-stone-300 rounded-xl px-3.5 py-2.5 text-sm focus:border-emerald-600 focus:outline-hidden">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1">Business Email <span class="text-rose-500">*</span></label>
                        <input type="email" name="email" required placeholder="partner@yourbrand.com"
                               class="w-full bg-white border border-stone-300 rounded-xl px-3.5 py-2.5 text-sm focus:border-emerald-600 focus:outline-hidden">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-700 mb-1">Interested Product Category</label>
                    <input type="text" name="product_name" placeholder="e.g. Kumkumadi Face Serums, Herbal Hair Oils, Ayurvedic Pain Balm"
                           class="w-full bg-white border border-stone-300 rounded-xl px-3.5 py-2.5 text-sm focus:border-emerald-600 focus:outline-hidden">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-700 mb-1">Manufacturing Specifications & Estimated Units <span class="text-rose-500">*</span></label>
                    <textarea name="message" rows="4" required placeholder="Specify your desired MOQ (e.g. 1000 bottles), bottle packaging preference, formulation active ingredients, and whether you need custom lab samples..."
                              class="w-full bg-white border border-stone-300 rounded-xl p-3.5 text-sm focus:border-emerald-600 focus:outline-hidden"></textarea>
                </div>

                <div class="text-center pt-2">
                    <button type="submit" class="bg-emerald-800 hover:bg-emerald-900 text-white font-bold text-sm px-8 py-3.5 rounded-xl shadow-md transition w-full sm:w-auto">
                        Submit OEM Manufacturing Inquiry
                    </button>
                    <p class="text-[11px] text-slate-500 mt-2">
                        All project inquiries are protected under strict commercial confidentiality & NDA protocols.
                    </p>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
