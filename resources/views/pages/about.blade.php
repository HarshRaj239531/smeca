@extends('layouts.app')

@section('title', 'About Us | SMECA INDUSTRY PRIVATE LIMITED - Bihar, India')

@section('content')

<!-- Header Banner -->
<section class="bg-gradient-to-b from-emerald-950 to-emerald-900 text-white py-16 sm:py-24 relative overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(#52b788_1px,transparent_1px)] [background-size:20px_20px] opacity-15"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative text-center space-y-4">
        <span class="inline-block text-xs font-bold uppercase tracking-widest text-amber-300 bg-emerald-800/80 px-3.5 py-1 rounded-full border border-amber-300/30">
            Corporate Profile & Heritage
        </span>
        <h1 class="text-3xl sm:text-5xl font-bold font-serif-display tracking-tight text-white">
            About SMECA Industry Private Limited
        </h1>
        <p class="text-sm sm:text-base text-emerald-100 max-w-2xl mx-auto leading-relaxed">
            Pioneering ethical cosmetics, herbal skincare, and classical Ayurvedic wellness formulations rooted in the fertile lands of Bihar, India.
        </p>
    </div>
</section>

<!-- Company Identity & Background -->
<section class="py-16 sm:py-20 bg-white border-b border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-6 space-y-6">
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-800 bg-emerald-50 px-3 py-1 rounded-full border border-emerald-200">
                    Who We Are
                </span>
                <h2 class="text-3xl sm:text-4xl font-bold font-serif-display text-emerald-950">
                    Rooted in Purity, Driven by Scientific Formulation
                </h2>
                <p class="text-sm sm:text-base text-slate-600 leading-relaxed">
                    <strong>SMECA INDUSTRY PRIVATE LIMITED</strong> was incorporated to bridge the ancient healing legacy of Indian Ayurveda with contemporary, dermatologically-validated cosmetic sciences. Our operations center on providing safe, toxin-free, and nutrient-dense formulations for everyday personal care.
                </p>
                <p class="text-sm sm:text-base text-slate-600 leading-relaxed">
                    Headquartered and actively operating in Bihar—with core operational clusters in the <strong>Aurangabad and Gaya districts</strong>—SMECA harnesses indigenous botanicals, sustainable farming networks, and GMP-certified manufacturing processes to serve both conscious consumer families (B2C) and progressive business partners (B2B/OEM).
                </p>

                <!-- Company Info Table / Grid -->
                <div class="bg-stone-50 rounded-2xl p-6 border border-stone-200 grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs">
                    <div>
                        <strong class="text-slate-500 uppercase tracking-wider block text-[10px]">Legal Entity Name</strong>
                        <span class="font-bold text-slate-800 text-sm">SMECA INDUSTRY PRIVATE LIMITED</span>
                    </div>
                    <div>
                        <strong class="text-slate-500 uppercase tracking-wider block text-[10px]">Primary Industry</strong>
                        <span class="font-bold text-slate-800 text-sm">Cosmetics, Skincare & Wellness</span>
                    </div>
                    <div>
                        <strong class="text-slate-500 uppercase tracking-wider block text-[10px]">Specialty Niche</strong>
                        <span class="font-bold text-slate-800 text-sm">Herbal & Ayurvedic Formulations</span>
                    </div>
                    <div>
                        <strong class="text-slate-500 uppercase tracking-wider block text-[10px]">Operating Footprint</strong>
                        <span class="font-bold text-slate-800 text-sm">Aurangabad & Gaya, Bihar (India)</span>
                    </div>
                </div>
            </div>

            <!-- Visual Collage -->
            <div class="lg:col-span-6">
                <div class="grid grid-cols-2 gap-4">
                    <div class="space-y-4">
                        <img src="https://images.unsplash.com/photo-1556228720-195a672e8a03?auto=format&fit=crop&w=600&q=80" 
                             alt="Botanical extracts" class="rounded-2xl shadow-md object-cover h-56 w-full">
                        <div class="bg-emerald-900 text-white p-5 rounded-2xl">
                            <span class="text-2xl font-bold font-serif-display text-amber-300">AYUSH</span>
                            <p class="text-xs text-emerald-100 mt-1">Formulations adhere to classical Ayurvedic pharmacopoeia texts and safety monographs.</p>
                        </div>
                    </div>
                    <div class="space-y-4 pt-8">
                        <div class="bg-amber-100/70 text-amber-950 p-5 rounded-2xl border border-amber-200">
                            <span class="text-2xl font-bold font-serif-display text-emerald-950">Bihar Hub</span>
                            <p class="text-xs text-slate-700 mt-1">Fostering local agricultural empowerment across Aurangabad and Gaya districts.</p>
                        </div>
                        <img src="https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?auto=format&fit=crop&w=600&q=80" 
                             alt="Aloe vera and herbs" class="rounded-2xl shadow-md object-cover h-56 w-full">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="py-16 bg-stone-50 border-b border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <div class="bg-white p-8 sm:p-10 rounded-3xl border border-stone-200 shadow-xs relative overflow-hidden">
                <div class="w-12 h-12 rounded-xl bg-emerald-100 text-emerald-800 flex items-center justify-center mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="text-2xl font-bold font-serif-display text-emerald-950 mb-3">Our Mission</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    To deliver uncompromised herbal authenticity and clean cosmetic innovations that enhance skin, hair, and bodily vitality. We are dedicated to providing sustainable, affordable, and high-efficacy personal care products while serving as a reliable contract manufacturing backbone for global beauty brands.
                </p>
                <div class="mt-6 flex items-center gap-2 text-xs font-semibold text-emerald-800">
                    <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                    <span>100% Transparency in Formulation & Ingredient Labeling</span>
                </div>
            </div>

            <div class="bg-white p-8 sm:p-10 rounded-3xl border border-stone-200 shadow-xs relative overflow-hidden">
                <div class="w-12 h-12 rounded-xl bg-amber-100 text-amber-800 flex items-center justify-center mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                </div>
                <h3 class="text-2xl font-bold font-serif-display text-emerald-950 mb-3">Our Vision</h3>
                <p class="text-sm text-slate-600 leading-relaxed">
                    To establish Bihar as a globally acknowledged hub of botanical science and cosmetic manufacturing. We envision SMECA INDUSTRY PRIVATE LIMITED as India's most trusted name in ethical beauty, driving sustainable regional employment, industrial growth, and wellness education.
                </p>
                <div class="mt-6 flex items-center gap-2 text-xs font-semibold text-emerald-800">
                    <span class="w-2 h-2 rounded-full bg-amber-500"></span>
                    <span>Global Benchmark Quality from South Bihar Hubs</span>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Operating Region: Aurangabad & Gaya Districts of Bihar -->
<section class="py-16 bg-white border-b border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto space-y-3 mb-12">
            <span class="text-xs font-bold uppercase tracking-wider text-emerald-800 bg-emerald-50 px-3 py-1 rounded-full border border-emerald-200">
                Geographic Presence
            </span>
            <h2 class="text-3xl sm:text-4xl font-bold font-serif-display text-emerald-950">
                Operating Region: Aurangabad & Gaya, Bihar
            </h2>
            <p class="text-sm sm:text-base text-slate-600">
                Our strategic presence in South Bihar connects rich agro-botanical cultivations with major freight corridors, enabling rapid distribution across Eastern and Northern India.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <div class="bg-gradient-to-br from-emerald-950 to-emerald-900 text-white p-8 rounded-3xl relative overflow-hidden shadow-lg">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-2xl font-bold font-serif-display text-amber-300">Aurangabad Operations</h3>
                    <span class="text-xs bg-emerald-800/80 px-2.5 py-1 rounded-full text-emerald-200 font-semibold">Central Facility</span>
                </div>
                <p class="text-sm text-emerald-100/90 leading-relaxed mb-6">
                    Our Aurangabad operational facilities house primary formulation vessels, cosmetic batch mixing units, quality verification laboratories, and warehousing depots.
                </p>
                <ul class="space-y-2 text-xs text-emerald-200/90">
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        GMP-compliant blending & bottle filling lines
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        Bulk cosmetic storage & wholesale dispatches
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        Administrative coordination & client OEM meetings
                    </li>
                </ul>
            </div>

            <div class="bg-gradient-to-br from-stone-900 to-emerald-950 text-white p-8 rounded-3xl relative overflow-hidden shadow-lg">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-2xl font-bold font-serif-display text-amber-300">Gaya Botanical Node</h3>
                    <span class="text-xs bg-emerald-800/80 px-2.5 py-1 rounded-full text-emerald-200 font-semibold">Herbal & Transit Hub</span>
                </div>
                <p class="text-sm text-emerald-100/90 leading-relaxed mb-6">
                    Gaya serves as our botanical collection nexus, partnering with regional growers of medicinal herbs, and our high-speed transit node connecting with rail and road freight.
                </p>
                <ul class="space-y-2 text-xs text-emerald-200/90">
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        Ethical herb sourcing & primary solar drying yards
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        Regional retail distribution across Magadh division
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        Training center for sales personnel & Ayurvedic retail vaidyas
                    </li>
                </ul>
            </div>

        </div>
    </div>
</section>

<!-- Full Leadership Section: Board of Directors -->
<section class="py-20 bg-stone-50 border-b border-stone-200" id="leadership">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto space-y-3 mb-16">
            <span class="text-xs font-bold uppercase tracking-wider text-emerald-800 bg-emerald-100/80 px-3.5 py-1 rounded-full border border-emerald-300">
                Corporate Governance & Board
            </span>
            <h2 class="text-3xl sm:text-4xl font-bold font-serif-display text-emerald-950">
                Meet the Board of Directors
            </h2>
            <p class="text-sm sm:text-base text-slate-600">
                The strategic direction and operational integrity of SMECA INDUSTRY PRIVATE LIMITED are governed by our four founding directors.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach($directors as $director)
                <div class="bg-white rounded-3xl p-8 border border-stone-200 shadow-xs hover:shadow-xl transition-all duration-300 flex flex-col sm:flex-row gap-6 items-start">
                    
                    <!-- Director Avatar/Image placeholder -->
                    <div class="w-24 h-24 sm:w-28 sm:h-28 rounded-2xl bg-gradient-to-tr from-emerald-800 to-emerald-950 text-white flex items-center justify-center font-serif-display font-bold text-3xl shrink-0 shadow-md border-2 border-emerald-100">
                        {{ substr($director['name'], 0, 1) }}
                    </div>

                    <!-- Details -->
                    <div class="space-y-2 flex-1">
                        <div class="flex items-center justify-between">
                            <h3 class="text-xl font-bold font-serif-display text-emerald-950">{{ $director['name'] }}</h3>
                            <span class="bg-emerald-50 text-emerald-800 text-xs font-bold px-2.5 py-1 rounded-lg border border-emerald-200">
                                {{ $director['title'] }}
                            </span>
                        </div>
                        <p class="text-xs font-bold text-amber-700 tracking-wide">{{ $director['focus'] }}</p>
                        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed pt-1">
                            {{ $director['bio'] }}
                        </p>
                        <div class="pt-3 flex items-center gap-2 text-[11px] text-slate-500 font-medium">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span>
                            <span>Board of Directors • SMECA Industry Pvt Ltd</span>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>

    </div>
</section>

<!-- Corporate Milestone Timeline -->
<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl sm:text-3xl font-bold font-serif-display text-emerald-950 text-center mb-10">
            Journey & Operational Milestones
        </h2>

        <div class="space-y-8 relative before:absolute before:inset-0 before:left-4 md:before:left-1/2 before:w-0.5 before:bg-emerald-200">
            @foreach($milestones as $index => $milestone)
                <div class="relative flex flex-col md:flex-row items-start md:items-center gap-6 {{ $index % 2 == 0 ? 'md:flex-row-reverse' : '' }}">
                    
                    <!-- Center Circle Marker -->
                    <div class="absolute left-4 md:left-1/2 -translate-x-1/2 w-8 h-8 rounded-full bg-emerald-800 text-white flex items-center justify-center font-bold text-xs border-4 border-white shadow-md z-10">
                        {{ $index + 1 }}
                    </div>

                    <!-- Content Card -->
                    <div class="ml-10 md:ml-0 md:w-1/2 {{ $index % 2 == 0 ? 'md:pl-10 text-left' : 'md:pr-10 md:text-right' }}">
                        <div class="bg-stone-50 p-5 rounded-2xl border border-stone-200 shadow-2xs">
                            <span class="text-xs font-bold text-amber-700 uppercase tracking-wider">{{ $milestone['year'] }}</span>
                            <h4 class="text-base font-bold font-serif-display text-emerald-950 mt-1">{{ $milestone['title'] }}</h4>
                            <p class="text-xs text-slate-600 mt-1.5 leading-relaxed">{{ $milestone['description'] }}</p>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
