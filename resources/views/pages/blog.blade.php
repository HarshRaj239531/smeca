@extends('layouts.app')

@section('title', '01 — BLOG | SMECA Botanical Journal & Editorial')
@section('meta_description', 'Read Ayurvedic skincare tips, cosmetic formulation reviews, and botanical science by SMECA Industry Private Limited.')

@section('content')

<!-- =========================================================================
     EDITORIAL HERO: Asymmetric Magazine Mosaic Grid (100% Edge-to-Edge Full Bleed)
     ========================================================================= -->
<section class="w-full bg-white border-b border-stone-200 overflow-hidden">
    <!-- Seamless Full-Bleed Editorial Mosaic Grid (Edge-to-Edge, zero margin, full screen cover) -->
    <div class="w-full grid grid-cols-1 md:grid-cols-12 bg-white">
        
        <!-- ========================================================
             COLUMN 1 (Left): Tall Organic Bottles & Branches Photo
             ======================================================== -->
        <div class="md:col-span-4 relative bg-[#f2ede6] min-h-[460px] md:min-h-[680px] lg:min-h-[720px] border-b md:border-b-0 md:border-r border-stone-200 group overflow-hidden">
            <img src="https://images.unsplash.com/photo-1556228720-195a672e8a03?auto=format&fit=crop&w=1200&q=80" 
                 alt="SMECA Organic Skincare Bottles with Botanical Branches" 
                 class="w-full h-full object-cover group-hover:scale-102 transition-transform duration-700">
            <div class="absolute bottom-6 left-6 bg-white/95 backdrop-blur-xs text-[#203a31] text-[10.5px] font-bold uppercase tracking-widest px-4 py-2 rounded-sm border border-stone-200 shadow-xs">
                SMECA Organics
            </div>
        </div>

        <!-- ========================================================
             COLUMN 2 (Center): 3 Stacked Flush Rows
             ======================================================== -->
        <div class="md:col-span-4 flex flex-col border-b md:border-b-0 md:border-r border-stone-200">
            
            <!-- Row 1: Solid Brand Color Block '01 — BLOG' -->
            <div class="bg-[#203a31] text-white p-8 sm:p-10 lg:p-14 flex flex-col justify-center min-h-[200px] sm:min-h-[230px] lg:min-h-[250px] relative overflow-hidden">
                <div class="flex items-center gap-4 mb-2">
                    <span class="text-3xl sm:text-4xl lg:text-5xl font-serif-display font-medium text-white tracking-tight">01</span>
                    <span class="w-16 sm:w-24 h-0.5 bg-white/70 inline-block"></span>
                </div>
                <h1 class="text-5xl sm:text-6xl lg:text-[68px] font-serif-display font-medium tracking-wider text-white uppercase leading-none">
                    BLOG
                </h1>
            </div>

            <!-- Row 2: Author Card with Left Protruding Colored Tab & Avatar (No Text Overlap) -->
            <div class="bg-white p-5 sm:p-7 border-t border-b border-stone-200 flex items-center justify-between gap-4 relative group">
                <!-- Left Tab: 'About Author' -->
                <div class="z-20 absolute -left-2.5 top-1/2 -translate-y-1/2 bg-[#203a31] text-[#c0caa7] text-[8.5px] font-bold uppercase tracking-wider py-4 px-1 rounded-sm shadow-xs [writing-mode:vertical-lr] rotate-180 flex items-center justify-center">
                    About Author
                </div>

                <!-- Clean Pl-6 Spacing So Tab Never Overlaps Headline -->
                <div class="pl-6 space-y-1 flex-1">
                    <h3 class="text-xs sm:text-sm lg:text-[15px] font-bold text-slate-900 leading-snug">
                        Hey I'm Dr. Sarina, Welcome To SMECA Journal
                    </h3>
                    <p class="text-[11px] sm:text-xs text-slate-500 line-clamp-2 leading-relaxed">
                        Curating authentic Ayurvedic formulation wisdom, herb extractions & clinical skincare.
                    </p>
                    <a href="{{ route('blog.show', $heroMainPost['slug']) }}" 
                       class="inline-block text-[10.5px] font-bold uppercase tracking-wider text-[#203a31] hover:text-blue-600 transition pt-1 underline underline-offset-2">
                        READ MORE...
                    </a>
                </div>

                <!-- Author Avatar Image -->
                <div class="shrink-0 w-16 h-16 sm:w-20 sm:h-20 rounded-xl overflow-hidden border border-stone-200 shadow-2xs">
                    <img src="{{ $authorSpotlight['avatar'] }}" alt="{{ $authorSpotlight['name'] }}" class="w-full h-full object-cover">
                </div>
            </div>

            <!-- Row 3: 'PERFUMES & SCENTS' Dark Card with Bottom-Left Arrow Tab -->
            <div class="relative bg-stone-900 flex-1 min-h-[220px] lg:min-h-[270px] overflow-hidden group">
                <img src="{{ $perfumesPost['image_url'] }}" 
                     alt="{{ $perfumesPost['title'] }}" 
                     class="w-full h-full object-cover opacity-90 group-hover:scale-105 transition-transform duration-500">
                
                <!-- Top Text Overlay: PERFUMES & SCENTS -->
                <div class="absolute top-6 left-6 text-white text-[11px] font-bold uppercase tracking-[0.2em] drop-shadow-md">
                    PERFUMES & SCENTS
                </div>

                <!-- Bottom Left Arrow Tab Button -->
                <a href="{{ route('blog.show', $perfumesPost['slug']) }}" 
                   aria-label="Read Perfumes Article"
                   class="absolute bottom-6 left-0 bg-[#203a31] hover:bg-blue-600 text-white w-11 h-11 rounded-r-md flex items-center justify-center shadow-lg transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                </a>
            </div>

        </div>

        <!-- ========================================================
             COLUMN 3 (Right): 2 Stacked Flush Rows
             ======================================================== -->
        <div class="md:col-span-4 flex flex-col">
            
            <!-- Row 1: 'COSMETICS' Photo Card -->
            <div class="relative bg-stone-100 min-h-[210px] sm:min-h-[240px] lg:min-h-[270px] overflow-hidden border-b border-stone-200 group">
                <img src="https://images.unsplash.com/photo-1596462502278-27bfdc403348?auto=format&fit=crop&w=800&q=80" 
                     alt="SMECA Cosmetics Collection" 
                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute bottom-5 left-6 text-[#203a31] text-[11px] font-bold uppercase tracking-[0.2em] bg-white/95 backdrop-blur-xs px-3.5 py-1.5 rounded-sm shadow-2xs border border-stone-200">
                    COSMETICS
                </div>
            </div>

            <!-- Row 2: Solid Brand Color Block with Full Article Copy & 'READ MORE...' -->
            <div class="bg-[#203a31] text-white p-8 sm:p-10 lg:p-12 flex-1 flex flex-col justify-between">
                <div>
                    <h2 class="text-xl sm:text-2xl font-serif-display font-medium text-white leading-snug">
                        {{ $heroMainPost['title'] }}
                    </h2>
                    <p class="text-xs sm:text-sm text-white/80 mt-3.5 leading-relaxed">
                        {{ $heroMainPost['excerpt'] }}
                    </p>
                </div>

                <div class="pt-6 mt-6 border-t border-white/15">
                    <a href="{{ route('blog.show', $heroMainPost['slug']) }}" 
                       class="inline-block text-[11.5px] font-bold uppercase tracking-wider text-white hover:text-[#c0caa7] transition underline underline-offset-2">
                        READ MORE...
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- =========================================================================
     CATEGORY FILTER & COMPLETE ARTICLE DIRECTORY
     ========================================================================= -->
<section class="py-14 sm:py-20 bg-white border-t border-stone-200">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header & Category Pills -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 pb-8 border-b border-stone-200">
            <div>
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-800 bg-emerald-50 px-3 py-1 rounded-full border border-emerald-200">
                    SMECA Knowledge Repository
                </span>
                <h3 class="text-2xl sm:text-3xl font-serif-display font-medium text-[#203a31] mt-2">
                    Browse All Editorial Articles
                </h3>
                <p class="text-xs sm:text-sm text-slate-600 mt-1">
                    Authentic guides on Ayurvedic rituals, cosmetic formulations, and contract manufacturing.
                </p>
            </div>

            <!-- Category Filter Pills -->
            <div class="flex flex-wrap gap-2">
                @foreach($categories as $cat)
                    <a href="{{ route('blog.index', ['category' => $cat['slug']]) }}" 
                       class="text-xs font-semibold px-3.5 py-1.5 rounded-full transition {{ $selectedCategory === $cat['slug'] ? 'bg-[#203a31] text-white shadow-xs' : 'bg-stone-100 text-slate-700 hover:bg-stone-200' }}">
                        {{ $cat['name'] }}
                    </a>
                @endforeach
            </div>
        </div>

        <!-- Articles Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 pt-10">
            @forelse($filteredArticles as $article)
                <article class="bg-[#f6f8f3] rounded-2xl border border-stone-200 overflow-hidden shadow-xs hover:shadow-xl transition-all duration-300 flex flex-col justify-between group">
                    <div>
                        <!-- Article Thumbnail -->
                        <div class="relative h-56 overflow-hidden bg-stone-200">
                            <img src="{{ $article['image_url'] }}" 
                                 alt="{{ $article['title'] }}" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute top-3 left-3 bg-[#203a31]/90 backdrop-blur-xs text-white text-[10px] font-bold uppercase tracking-wider px-2.5 py-1 rounded-sm shadow-xs">
                                {{ $article['category'] }}
                            </div>
                            <div class="absolute bottom-3 right-3 bg-white/95 backdrop-blur-xs text-slate-800 text-[10px] font-semibold px-2 py-0.5 rounded-sm shadow-xs">
                                {{ $article['read_time'] }}
                            </div>
                        </div>

                        <!-- Article Content -->
                        <div class="p-6">
                            <div class="text-[11px] text-slate-500 mb-2 font-medium">
                                {{ $article['date'] }}
                            </div>
                            <h4 class="text-lg font-serif-display font-medium text-[#203a31] group-hover:text-blue-700 transition leading-snug line-clamp-2">
                                <a href="{{ route('blog.show', $article['slug']) }}">
                                    {{ $article['title'] }}
                                </a>
                            </h4>
                            <p class="text-xs text-slate-600 mt-2.5 line-clamp-3 leading-relaxed">
                                {{ $article['excerpt'] }}
                            </p>
                        </div>
                    </div>

                    <!-- Footer / Author / Read Button -->
                    <div class="p-6 pt-0 border-t border-stone-200/60 mt-4 flex items-center justify-between">
                        <div class="flex items-center gap-2.5">
                            <img src="{{ $article['author_avatar'] }}" alt="{{ $article['author'] }}" class="w-7 h-7 rounded-full object-cover">
                            <div>
                                <span class="block text-[11px] font-bold text-slate-800 leading-none">{{ $article['author'] }}</span>
                                <span class="block text-[9.5px] text-slate-500 leading-none mt-0.5">{{ $article['author_role'] }}</span>
                            </div>
                        </div>
                        <a href="{{ route('blog.show', $article['slug']) }}" 
                           class="bg-blue-600 hover:bg-blue-700 text-white text-xs font-semibold px-4 py-2 rounded-xs shadow-xs transition">
                            Read &rarr;
                        </a>
                    </div>
                </article>
            @empty
                <div class="col-span-full py-16 text-center bg-stone-50 rounded-2xl p-8 border border-stone-200">
                    <h4 class="text-lg font-serif-display text-[#203a31]">No articles found in this topic</h4>
                    <p class="text-xs text-slate-500 mt-1">Try switching categories or view all topics.</p>
                    <a href="{{ route('blog.index') }}" class="mt-4 inline-block bg-blue-600 text-white text-xs font-semibold px-4 py-2 rounded-xs">
                        View All Articles
                    </a>
                </div>
            @endforelse
        </div>

    </div>
</section>

<!-- =========================================================================
     B2B FORMULATION CALLOUT BANNER
     ========================================================================= -->
<section class="py-16 bg-[#202716] text-[#c0caa7] border-t border-[#12170c]">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-8 bg-white/5 border border-white/10 rounded-2xl p-8 sm:p-10">
            <div class="space-y-2 max-w-2xl">
                <span class="text-[10px] font-bold uppercase tracking-widest text-[#c0caa7] bg-white/10 px-3 py-1 rounded-sm inline-block">
                    Research & Contract Manufacturing
                </span>
                <h3 class="text-2xl sm:text-3xl font-serif-display font-medium text-white">
                    Want to Formulate an Ayurvedic or Cosmetic Line?
                </h3>
                <p class="text-xs sm:text-sm text-[#c0caa7]/80 leading-relaxed">
                    SMECA's formulation scientists and Bihar cleanroom compounding plant support emerging D2C brands, doctors, and retail chains with custom OEM research, batch stability testing, and AYUSH dossiers.
                </p>
            </div>
            <div class="shrink-0 flex flex-col sm:flex-row gap-3 w-full lg:w-auto">
                <button onclick="openEnquiryModal('Custom Blog Formulation Inquiry', null, 'b2b_oem')" 
                        class="bg-blue-600 hover:bg-blue-700 text-white font-medium text-xs sm:text-sm px-7 py-3.5 rounded-xs tracking-wide shadow-xs transition cursor-pointer text-center">
                    Discuss Formulation Project &rarr;
                </button>
                <a href="{{ route('contact.index') }}" 
                   class="bg-white/10 hover:bg-white/15 text-white font-medium text-xs sm:text-sm px-6 py-3.5 rounded-xs tracking-wide border border-white/20 transition text-center">
                    Contact R&D Desk
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
