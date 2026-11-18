@extends('layouts.app')

@section('title', $article['title'] . ' | SMECA Botanical Journal')
@section('meta_description', $article['excerpt'])

@section('content')

<!-- Breadcrumb -->
<div class="bg-stone-100/70 border-b border-stone-200 py-3 text-xs text-slate-500">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center gap-2">
        <a href="{{ route('home') }}" class="hover:text-[#203a31]">Home</a>
        <span>/</span>
        <a href="{{ route('blog.index') }}" class="hover:text-[#203a31]">Blog</a>
        <span>/</span>
        <span class="text-slate-800 font-semibold truncate">{{ $article['title'] }}</span>
    </div>
</div>

<!-- Article Header Section -->
<article class="py-12 sm:py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Category & Meta -->
        <div class="flex flex-wrap items-center gap-3 mb-4">
            <span class="text-[11px] font-bold uppercase tracking-wider text-emerald-800 bg-emerald-50 px-3 py-1 rounded-full border border-emerald-200">
                {{ $article['category'] }}
            </span>
            <span class="text-xs text-slate-500">• {{ $article['date'] }}</span>
            <span class="text-xs text-slate-500">• {{ $article['read_time'] }}</span>
        </div>

        <!-- Article Title -->
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-serif-display font-medium text-[#203a31] leading-tight">
            {{ $article['title'] }}
        </h1>

        <!-- Author Card -->
        <div class="flex items-center gap-4 py-6 my-6 border-t border-b border-stone-200">
            <img src="{{ $article['author_avatar'] }}" alt="{{ $article['author'] }}" class="w-12 h-12 rounded-full object-cover border border-stone-200">
            <div>
                <div class="text-sm font-bold text-slate-900">{{ $article['author'] }}</div>
                <div class="text-xs text-slate-500">{{ $article['author_role'] }} • SMECA Industry Pvt. Ltd.</div>
            </div>
        </div>

        <!-- Featured Image -->
        <div class="rounded-3xl overflow-hidden shadow-lg border border-stone-200 mb-10 bg-stone-100">
            <img src="{{ $article['image_url'] }}" alt="{{ $article['title'] }}" class="w-full h-80 sm:h-[450px] object-cover">
        </div>

        <!-- Article Body -->
        <div class="prose prose-stone max-w-none text-slate-700 leading-relaxed text-sm sm:text-base space-y-6">
            <p class="text-base sm:text-lg text-[#203a31] font-medium leading-relaxed bg-[#f6f8f3] p-6 rounded-2xl border-l-4 border-[#203a31]">
                {{ $article['excerpt'] }}
            </p>

            @foreach($article['content'] as $para)
                <p>{{ $para }}</p>
            @endforeach

            <!-- Editorial Callout Box -->
            <div class="bg-gradient-to-r from-emerald-50 via-white to-stone-50 border border-emerald-200 rounded-2xl p-6 my-8">
                <div class="flex items-start gap-4">
                    <span class="text-3xl">🌿</span>
                    <div>
                        <h4 class="text-base font-serif-display font-bold text-emerald-950">SMECA Quality & Formulation Standard</h4>
                        <p class="text-xs text-slate-600 mt-1 leading-relaxed">
                            Every botanical active featured in this journal is sustainably cultivated in Bihar, cold-processed under strict cGMP protocols, and tested against pesticide residues, heavy metals, and microbiological contaminants before batch release.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Article Share & Action Links -->
        <div class="mt-12 pt-6 border-t border-stone-200 flex flex-col sm:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                <span>Share Article:</span>
                <a href="https://wa.me/?text={{ urlencode($article['title'] . ' ' . url()->current()) }}" target="_blank" class="px-3 py-1.5 rounded-lg bg-emerald-50 text-emerald-800 hover:bg-emerald-100 transition">
                    WhatsApp
                </a>
                <a href="https://twitter.com/intent/tweet?text={{ urlencode($article['title']) }}&url={{ urlencode(url()->current()) }}" target="_blank" class="px-3 py-1.5 rounded-lg bg-stone-100 text-slate-800 hover:bg-stone-200 transition">
                    Twitter / X
                </a>
            </div>

            <a href="{{ route('blog.index') }}" class="text-xs font-bold text-blue-600 hover:text-blue-800 hover:underline">
                &larr; Back to SMECA Journal
            </a>
        </div>

        <!-- Formulation Inquiry Callout Box -->
        <div class="mt-14 p-8 rounded-3xl bg-[#203a31] text-white flex flex-col sm:flex-row items-center justify-between gap-6 shadow-md">
            <div>
                <h3 class="text-xl font-serif-display font-medium">Interested in this Formulation?</h3>
                <p class="text-xs text-[#c0caa7]/90 mt-1 max-w-md">
                    Discuss custom retail packaging, OEM contract compounding, or wholesale trial batches with our formulation team.
                </p>
            </div>
            <button onclick="openEnquiryModal('{{ addslashes($article['title']) }}', null, 'b2b_oem')"
                    class="shrink-0 bg-blue-600 hover:bg-blue-700 text-white font-medium text-xs sm:text-sm px-6 py-3 rounded-xs shadow-xs transition cursor-pointer">
                Submit Product Enquiry &rarr;
            </button>
        </div>

    </div>
</article>

<!-- Related Articles Section -->
@if(!empty($relatedArticles))
<section class="py-16 bg-[#f6f8f3] border-t border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h3 class="text-2xl font-serif-display font-medium text-[#203a31] mb-8">
            Related Editorial Reads
        </h3>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($relatedArticles as $related)
                <div class="bg-white rounded-2xl border border-stone-200 overflow-hidden shadow-xs hover:shadow-lg transition flex flex-col justify-between group">
                    <div>
                        <img src="{{ $related['image_url'] }}" alt="{{ $related['title'] }}" class="h-48 w-full object-cover">
                        <div class="p-6">
                            <span class="text-[10px] font-bold uppercase tracking-wider text-emerald-800">{{ $related['category'] }}</span>
                            <h4 class="text-base font-serif-display font-medium text-[#203a31] group-hover:text-blue-700 transition mt-1 line-clamp-2">
                                <a href="{{ route('blog.show', $related['slug']) }}">{{ $related['title'] }}</a>
                            </h4>
                            <p class="text-xs text-slate-500 mt-2 line-clamp-2">{{ $related['excerpt'] }}</p>
                        </div>
                    </div>
                    <div class="p-6 pt-0 border-t border-stone-100 flex items-center justify-between">
                        <span class="text-[11px] text-slate-400">{{ $related['read_time'] }}</span>
                        <a href="{{ route('blog.show', $related['slug']) }}" class="text-xs font-bold text-blue-600 hover:underline">
                            Read Article &rarr;
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

@endsection
