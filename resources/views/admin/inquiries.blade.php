@extends('admin.layouts.admin')

@section('title', 'Customer & B2B Inquiry Desk | SMECA Admin')
@section('page_name', 'Customer Inquiries & Leads')
@section('module_name', 'INQUIRIES DESK')

@section('content')

<!-- Welcome & Action Summary -->
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-6">
    <div>
        <h1 class="text-2xl sm:text-3xl font-serif-display font-medium text-[#203a31]">
            Customer Inquiries & B2B Leads
        </h1>
        <p class="text-xs text-slate-500 mt-1">
            Real-time inquiries received from website product cards, OEM forms, and contact requests.
        </p>
    </div>
    
    <div class="flex items-center gap-2.5">
        <span class="text-xs text-slate-600 font-semibold bg-white border border-stone-200 px-3.5 py-1.5 rounded-xl shadow-2xs">
            Total Leads: <strong class="text-slate-900">{{ $stats['total'] }}</strong>
        </span>
        <button type="button" onclick="openManualInquiryModal()" 
                class="bg-blue-600 hover:bg-blue-700 text-white text-xs font-semibold px-4 py-2 rounded-xl transition flex items-center gap-1.5 shadow-xs cursor-pointer">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
            <span>Log Offline Lead</span>
        </button>
    </div>
</div>

<!-- Flash Status Alerts -->
@if(session('status_updated'))
    <div class="mb-6 p-4 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-900 text-xs font-semibold flex items-center justify-between gap-3 shadow-xs">
        <div class="flex items-center gap-2.5">
            <span class="w-5 h-5 rounded-full bg-emerald-600 text-white flex items-center justify-center shrink-0 text-xs">✓</span>
            <span>{{ session('status_updated') }}</span>
        </div>
        <button onclick="this.parentElement.remove()" class="text-emerald-700 hover:text-emerald-900 text-base">&times;</button>
    </div>
@endif

@if(session('success_message'))
    <div class="mb-6 p-4 rounded-2xl bg-blue-50 border border-blue-200 text-blue-900 text-xs font-semibold flex items-center justify-between gap-3 shadow-xs">
        <div class="flex items-center gap-2.5">
            <span class="w-5 h-5 rounded-full bg-blue-600 text-white flex items-center justify-center shrink-0 text-xs">✓</span>
            <span>{{ session('success_message') }}</span>
        </div>
        <button onclick="this.parentElement.remove()" class="text-blue-700 hover:text-blue-900 text-base">&times;</button>
    </div>
@endif

<!-- Analytics KPI Cards (Exact Styling from Reference Image) -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4 mb-8">
    
    <!-- Card 1: Emerald/Mint Gradient (Total Inquiries) -->
    <div class="stat-card-glass stat-card-gradient-1 p-5 text-white flex flex-col justify-between">
        <div class="stat-card-watermark"></div>
        <div>
            <div class="flex items-center justify-between gap-2">
                <div class="flex items-center gap-1.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-white/80"></span>
                    <span class="text-[10px] font-bold tracking-widest uppercase text-white/95">Total Inquiries</span>
                </div>
                <div class="w-8 h-8 rounded-xl bg-white/20 backdrop-blur-xs border border-white/30 flex items-center justify-center text-white shrink-0 shadow-xs">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                </div>
            </div>
            <div class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight mt-2.5 font-sans">
                {{ $stats['total'] }}
            </div>
        </div>
        <div class="border-t border-white/25 mt-3 pt-2 text-[10px] font-semibold text-white/90 uppercase tracking-wider">
            All-Time Received Leads
        </div>
    </div>

    <!-- Card 2: Purple/Violet Gradient (New / Unread) -->
    <div class="stat-card-glass stat-card-gradient-2 p-5 text-white flex flex-col justify-between">
        <div class="stat-card-watermark"></div>
        <div>
            <div class="flex items-center justify-between gap-2">
                <div class="flex items-center gap-1.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-white/80 animate-ping"></span>
                    <span class="text-[10px] font-bold tracking-widest uppercase text-white/95">New / Unread</span>
                </div>
                <div class="w-8 h-8 rounded-xl bg-white/20 backdrop-blur-xs border border-white/30 flex items-center justify-center text-white shrink-0 shadow-xs">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                    </svg>
                </div>
            </div>
            <div class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight mt-2.5 font-sans">
                {{ $stats['new'] }}
            </div>
        </div>
        <div class="border-t border-white/25 mt-3 pt-2 text-[10px] font-semibold text-white/90 uppercase tracking-wider">
            Requires Follow-Up Action
        </div>
    </div>

    <!-- Card 3: Golden Amber Gradient (B2B & OEM) -->
    <div class="stat-card-glass stat-card-gradient-3 p-5 text-white flex flex-col justify-between">
        <div class="stat-card-watermark"></div>
        <div>
            <div class="flex items-center justify-between gap-2">
                <div class="flex items-center gap-1.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-white/80"></span>
                    <span class="text-[10px] font-bold tracking-widest uppercase text-white/95">B2B & OEM</span>
                </div>
                <div class="w-8 h-8 rounded-xl bg-white/20 backdrop-blur-xs border border-white/30 flex items-center justify-center text-white shrink-0 shadow-xs">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                </div>
            </div>
            <div class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight mt-2.5 font-sans">
                {{ $stats['b2b'] }}
            </div>
        </div>
        <div class="border-t border-white/25 mt-3 pt-2 text-[10px] font-semibold text-white/90 uppercase tracking-wider">
            Contract Packaging Deals
        </div>
    </div>

    <!-- Card 4: Coral Orange Gradient (Product Boxes) -->
    <div class="stat-card-glass stat-card-gradient-4 p-5 text-white flex flex-col justify-between">
        <div class="stat-card-watermark"></div>
        <div>
            <div class="flex items-center justify-between gap-2">
                <div class="flex items-center gap-1.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-white/80"></span>
                    <span class="text-[10px] font-bold tracking-widest uppercase text-white/95">Product Boxes</span>
                </div>
                <div class="w-8 h-8 rounded-xl bg-white/20 backdrop-blur-xs border border-white/30 flex items-center justify-center text-white shrink-0 shadow-xs">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                    </svg>
                </div>
            </div>
            <div class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight mt-2.5 font-sans">
                {{ $stats['products'] }}
            </div>
        </div>
        <div class="border-t border-white/25 mt-3 pt-2 text-[10px] font-semibold text-white/90 uppercase tracking-wider">
            Retail Skincare Orders
        </div>
    </div>

    <!-- Card 5: Royal Blue / Indigo Gradient (Closed / Solved) -->
    <div class="stat-card-glass stat-card-gradient-5 p-5 text-white flex flex-col justify-between col-span-1 sm:col-span-2 lg:col-span-1">
        <div class="stat-card-watermark"></div>
        <div>
            <div class="flex items-center justify-between gap-2">
                <div class="flex items-center gap-1.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-white/80"></span>
                    <span class="text-[10px] font-bold tracking-widest uppercase text-white/95">Closed / Solved</span>
                </div>
                <div class="w-8 h-8 rounded-xl bg-white/20 backdrop-blur-xs border border-white/30 flex items-center justify-center text-white shrink-0 shadow-xs">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
            </div>
            <div class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight mt-2.5 font-sans">
                {{ $stats['closed'] ?? 0 }}
            </div>
        </div>
        <div class="border-t border-white/25 mt-3 pt-2 text-[10px] font-semibold text-white/90 uppercase tracking-wider">
            Completed Records
        </div>
    </div>

</div>

<!-- Filter & Search Controls -->
<div class="bg-white p-5 rounded-2xl border border-stone-200 shadow-2xs mb-6">
    <form method="GET" action="{{ route('admin.inquiries') }}" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-12 gap-3 items-center">
        
        <!-- Search Input -->
        <div class="lg:col-span-5 relative">
            <input type="text" name="search" value="{{ request('search') }}" 
                   placeholder="Search client name, company, phone, email, product..."
                   class="w-full bg-[#f6f8f3] border border-stone-300 rounded-xl pl-9 pr-4 py-2.5 text-xs focus:bg-white focus:border-[#203a31] focus:outline-hidden">
            <svg class="w-4 h-4 text-slate-400 absolute left-3 top-3 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
        </div>

        <!-- Inquiry Type Filter -->
        <div class="lg:col-span-3">
            <select name="type" class="w-full bg-[#f6f8f3] border border-stone-300 rounded-xl px-3 py-2.5 text-xs focus:bg-white focus:border-[#203a31] focus:outline-hidden">
                <option value="all">All Inquiry Categories</option>
                <option value="product" {{ request('type') == 'product' ? 'selected' : '' }}>SMECA Product Boxes</option>
                <option value="b2b_oem" {{ request('type') == 'b2b_oem' ? 'selected' : '' }}>Third-Party OEM / Private Label</option>
                <option value="distributorship" {{ request('type') == 'distributorship' ? 'selected' : '' }}>Distributor / Stockist</option>
                <option value="consultancy" {{ request('type') == 'consultancy' ? 'selected' : '' }}>Advisory & Consultancy</option>
                <option value="general" {{ request('type') == 'general' ? 'selected' : '' }}>General Corporate</option>
            </select>
        </div>

        <!-- Status Filter -->
        <div class="lg:col-span-2">
            <select name="status" class="w-full bg-[#f6f8f3] border border-stone-300 rounded-xl px-3 py-2.5 text-xs focus:bg-white focus:border-[#203a31] focus:outline-hidden">
                <option value="all">All Statuses</option>
                <option value="new" {{ request('status') == 'new' ? 'selected' : '' }}>New (Unread)</option>
                <option value="contacted" {{ request('status') == 'contacted' ? 'selected' : '' }}>Contacted</option>
                <option value="in_discussion" {{ request('status') == 'in_discussion' ? 'selected' : '' }}>In Discussion</option>
                <option value="closed" {{ request('status') == 'closed' ? 'selected' : '' }}>Closed</option>
            </select>
        </div>

        <!-- Action Buttons -->
        <div class="lg:col-span-2 flex items-center gap-2">
            <button type="submit" class="w-full bg-[#203a31] hover:bg-[#121c0f] text-white text-xs font-semibold py-2.5 px-4 rounded-xl shadow-xs transition cursor-pointer">
                Apply Filter
            </button>
            @if(request()->hasAny(['search', 'type', 'status']))
                <a href="{{ route('admin.inquiries') }}" class="px-3 py-2.5 rounded-xl border border-stone-300 text-xs font-semibold text-slate-600 hover:bg-stone-100 transition text-center" title="Reset Filters">
                    Reset
                </a>
            @endif
        </div>

    </form>
</div>

<!-- Inquiries Data Table Card -->
<div class="bg-white rounded-2xl border border-stone-200 shadow-sm overflow-hidden">
    
    <div class="px-6 py-4 border-b border-stone-200 flex items-center justify-between bg-stone-50/70">
        <div class="flex items-center gap-2.5">
            <h3 class="text-sm font-bold text-[#203a31] uppercase tracking-wider">Customer Leads Database</h3>
            <span class="bg-[#c0caa7]/40 text-[#203a31] text-[11px] font-bold px-2.5 py-0.5 rounded-full">
                {{ $inquiries->total() }} records
            </span>
        </div>
        <div class="text-xs text-slate-500">
            Showing page {{ $inquiries->currentPage() }} of {{ max(1, $inquiries->lastPage()) }}
        </div>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left text-xs text-slate-600">
            <thead class="bg-stone-50 border-b border-stone-200 text-slate-700 uppercase font-bold text-[10px] tracking-wider">
                <tr>
                    <th class="py-3.5 px-5">Received Date</th>
                    <th class="py-3.5 px-5">Client / Brand</th>
                    <th class="py-3.5 px-5">Quick Contact</th>
                    <th class="py-3.5 px-5">Inquiry Focus</th>
                    <th class="py-3.5 px-5">Requirement Snippet</th>
                    <th class="py-3.5 px-5">Status Pipeline</th>
                    <th class="py-3.5 px-5 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-stone-100">
                @forelse($inquiries as $inquiry)
                    <tr class="hover:bg-[#f6f8f3] transition group">
                        
                        <!-- Date -->
                        <td class="py-4 px-5 whitespace-nowrap text-slate-400 text-[11px]">
                            <div class="font-semibold text-slate-700">{{ $inquiry->created_at->format('d M Y') }}</div>
                            <div class="text-[10px]">{{ $inquiry->created_at->format('h:i A') }}</div>
                        </td>

                        <!-- Client Name & Org -->
                        <td class="py-4 px-5">
                            <div class="flex items-center gap-2.5">
                                <div class="w-8 h-8 rounded-full bg-[#203a31] text-white flex items-center justify-center font-bold font-serif-display shrink-0 text-xs">
                                    {{ substr($inquiry->name, 0, 1) }}
                                </div>
                                <div>
                                    <div class="font-bold text-[#203a31] text-sm">{{ $inquiry->name }}</div>
                                    <div class="text-[11px] text-slate-500">
                                        {{ $inquiry->company_name ?: 'Individual Client' }}
                                    </div>
                                </div>
                            </div>
                        </td>

                        <!-- Quick Contact Links (WhatsApp, Call, Mail) -->
                        <td class="py-4 px-5 whitespace-nowrap">
                            <div class="space-y-1">
                                <div class="flex items-center gap-1.5">
                                    @php
                                        $cleanedPhone = preg_replace('/[^0-9]/', '', $inquiry->phone);
                                        if(strlen($cleanedPhone) == 10) $cleanedPhone = '91' . $cleanedPhone;
                                        $waText = urlencode("Hello {$inquiry->name}, this is SMECA Industry Private Limited regarding your inquiry about {$inquiry->product_name}. How can we assist you today?");
                                    @endphp
                                    <a href="https://wa.me/{{ $cleanedPhone }}?text={{ $waText }}" target="_blank"
                                       class="inline-flex items-center gap-1 text-[11px] font-bold text-emerald-700 hover:text-emerald-900 bg-emerald-50 hover:bg-emerald-100 px-2 py-0.5 rounded transition"
                                       title="Chat directly on WhatsApp">
                                        <span>WhatsApp</span> &rarr;
                                    </a>
                                    <a href="tel:{{ $inquiry->phone }}" class="text-slate-500 hover:text-slate-700 text-[11px] underline" title="Call">
                                        {{ $inquiry->phone }}
                                    </a>
                                </div>
                                <div>
                                    <a href="mailto:{{ $inquiry->email }}?subject=SMECA Inquiry Follow-up - {{ urlencode($inquiry->product_name) }}" class="text-slate-500 hover:text-[#203a31] text-[11px] underline">
                                        {{ $inquiry->email }}
                                    </a>
                                </div>
                            </div>
                        </td>

                        <!-- Category & Product -->
                        <td class="py-4 px-5">
                            <span class="inline-block px-2.5 py-0.5 rounded-full text-[10px] font-bold mb-1
                                {{ $inquiry->inquiry_type == 'b2b_oem' ? 'bg-amber-100 text-amber-900 border border-amber-200' : '' }}
                                {{ $inquiry->inquiry_type == 'product' ? 'bg-emerald-100 text-emerald-900 border border-emerald-200' : '' }}
                                {{ $inquiry->inquiry_type == 'distributorship' ? 'bg-blue-100 text-blue-900 border border-blue-200' : '' }}
                                {{ $inquiry->inquiry_type == 'consultancy' ? 'bg-purple-100 text-purple-900 border border-purple-200' : '' }}
                                {{ $inquiry->inquiry_type == 'general' ? 'bg-stone-100 text-stone-700 border border-stone-200' : '' }}">
                                {{ strtoupper(str_replace('_', ' ', $inquiry->inquiry_type)) }}
                            </span>
                            <div class="font-semibold text-slate-800 line-clamp-1">
                                {{ $inquiry->product_name ?: 'General Corporate Query' }}
                            </div>
                        </td>

                        <!-- Requirement Message Snippet -->
                        <td class="py-4 px-5 max-w-xs">
                            <p class="text-xs text-slate-600 line-clamp-2 leading-relaxed cursor-pointer hover:text-slate-900"
                               onclick="viewInquiryDetail('{{ addslashes($inquiry->name) }}', '{{ addslashes($inquiry->company_name ?? 'Individual') }}', '{{ $inquiry->phone }}', '{{ $inquiry->email }}', '{{ addslashes($inquiry->product_name ?? 'General Query') }}', '{{ addslashes(str_replace('_', ' ', $inquiry->inquiry_type)) }}', '{{ addslashes($inquiry->message) }}', '{{ $inquiry->created_at->format('d M Y, h:i A') }}')">
                                {{ $inquiry->message }}
                            </p>
                            <button type="button" 
                                    onclick="viewInquiryDetail('{{ addslashes($inquiry->name) }}', '{{ addslashes($inquiry->company_name ?? 'Individual') }}', '{{ $inquiry->phone }}', '{{ $inquiry->email }}', '{{ addslashes($inquiry->product_name ?? 'General Query') }}', '{{ addslashes(str_replace('_', ' ', $inquiry->inquiry_type)) }}', '{{ addslashes($inquiry->message) }}', '{{ $inquiry->created_at->format('d M Y, h:i A') }}')"
                                    class="text-[10px] text-blue-600 hover:underline font-semibold mt-1">
                                Read Full Message &rarr;
                            </button>
                        </td>

                        <!-- Status Pipeline Selector -->
                        <td class="py-4 px-5 whitespace-nowrap">
                            <form action="{{ route('admin.inquiries.status', $inquiry) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <select name="status" onchange="this.form.submit()"
                                        class="text-xs font-bold rounded-lg px-2.5 py-1.5 border shadow-2xs cursor-pointer focus:outline-hidden
                                            {{ $inquiry->status == 'new' ? 'text-emerald-800 bg-emerald-50 border-emerald-300' : '' }}
                                            {{ $inquiry->status == 'contacted' ? 'text-blue-800 bg-blue-50 border-blue-300' : '' }}
                                            {{ $inquiry->status == 'in_discussion' ? 'text-amber-800 bg-amber-50 border-amber-300' : '' }}
                                            {{ $inquiry->status == 'closed' ? 'text-slate-600 bg-slate-100 border-slate-300' : '' }}">
                                    <option value="new" {{ $inquiry->status == 'new' ? 'selected' : '' }}>● New / Unread</option>
                                    <option value="contacted" {{ $inquiry->status == 'contacted' ? 'selected' : '' }}>● Contacted</option>
                                    <option value="in_discussion" {{ $inquiry->status == 'in_discussion' ? 'selected' : '' }}>● In Discussion</option>
                                    <option value="closed" {{ $inquiry->status == 'closed' ? 'selected' : '' }}>● Closed</option>
                                </select>
                            </form>
                        </td>

                        <!-- Actions -->
                        <td class="py-4 px-5 text-right whitespace-nowrap">
                            <div class="flex items-center justify-end gap-2">
                                <button type="button" 
                                        onclick="viewInquiryDetail('{{ addslashes($inquiry->name) }}', '{{ addslashes($inquiry->company_name ?? 'Individual') }}', '{{ $inquiry->phone }}', '{{ $inquiry->email }}', '{{ addslashes($inquiry->product_name ?? 'General Query') }}', '{{ addslashes(str_replace('_', ' ', $inquiry->inquiry_type)) }}', '{{ addslashes($inquiry->message) }}', '{{ $inquiry->created_at->format('d M Y, h:i A') }}')"
                                        class="p-1.5 rounded-lg text-slate-500 hover:text-slate-800 hover:bg-stone-200 transition" title="Inspect Full Record">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                </button>
                                
                                <form action="{{ route('admin.inquiries.destroy', $inquiry) }}" method="POST" onsubmit="return confirm('Delete this inquiry record permanently?');" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-1.5 rounded-lg text-rose-500 hover:text-rose-700 hover:bg-rose-50 transition" title="Delete Inquiry">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                    </button>
                                </form>
                            </div>
                        </td>

                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center py-16 px-4">
                            <div class="max-w-md mx-auto space-y-3">
                                <div class="w-12 h-12 mx-auto rounded-full bg-stone-100 flex items-center justify-center text-slate-400">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/></svg>
                                </div>
                                <h4 class="text-base font-bold text-slate-800">No Inquiries Found</h4>
                                <p class="text-xs text-slate-500">
                                    {{ request()->hasAny(['search', 'type', 'status']) ? 'No inquiries matched your filter criteria. Try resetting filters.' : 'No customer inquiries submitted yet. Inquiries submitted via website modals or offline entry will automatically appear here!' }}
                                </p>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination Bar -->
    <div class="px-6 py-4 border-t border-stone-200 bg-stone-50/50">
        {{ $inquiries->links() }}
    </div>

</div>

<!-- Inquiry Full Detail Inspection Modal -->
<div id="detailModal" class="fixed inset-0 z-50 hidden overflow-y-auto bg-slate-950/70 backdrop-blur-xs flex items-center justify-center p-4">
    <div class="relative bg-white rounded-2xl shadow-2xl max-w-xl w-full border border-stone-200 overflow-hidden transform transition-all duration-300">
        
        <div class="bg-[#1b2b24] text-white p-6 relative">
            <button onclick="closeInquiryDetail()" class="absolute top-5 right-5 text-white/70 hover:text-white p-1 rounded transition text-xl">
                &times;
            </button>
            <span class="text-[10px] font-bold uppercase tracking-widest text-[#c0caa7] block mb-1" id="modalDetailCategory">
                Inquiry Details
            </span>
            <h3 class="text-xl font-serif-display font-medium text-white" id="modalDetailSubject">
                Subject / Product
            </h3>
            <p class="text-xs text-[#c0caa7]/90 mt-1" id="modalDetailDate"></p>
        </div>

        <div class="p-6 space-y-4">
            
            <div class="grid grid-cols-2 gap-4 bg-stone-50 p-4 rounded-xl border border-stone-200 text-xs">
                <div>
                    <span class="text-slate-400 block text-[10px] font-bold uppercase">Customer Name</span>
                    <span class="font-bold text-slate-900 text-sm" id="modalDetailName"></span>
                </div>
                <div>
                    <span class="text-slate-400 block text-[10px] font-bold uppercase">Company / Brand</span>
                    <span class="font-bold text-slate-900 text-sm" id="modalDetailCompany"></span>
                </div>
                <div>
                    <span class="text-slate-400 block text-[10px] font-bold uppercase">Phone Number</span>
                    <span class="font-bold text-emerald-800" id="modalDetailPhone"></span>
                </div>
                <div>
                    <span class="text-slate-400 block text-[10px] font-bold uppercase">Email Address</span>
                    <span class="font-bold text-slate-900" id="modalDetailEmail"></span>
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-[#203a31] mb-1.5">
                    Complete Requirements Message:
                </label>
                <div class="bg-stone-50 border border-stone-200 rounded-xl p-4 text-xs sm:text-sm text-slate-700 whitespace-pre-wrap leading-relaxed max-h-60 overflow-y-auto" id="modalDetailMessage">
                </div>
            </div>

            <div class="flex items-center justify-between pt-2 border-t border-stone-200">
                <button type="button" onclick="closeInquiryDetail()" class="px-4 py-2 text-xs font-semibold text-slate-600 hover:text-slate-800 transition">
                    Close
                </button>
                <div class="flex items-center gap-2">
                    <a id="modalWhatsAppBtn" href="#" target="_blank"
                       class="bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-semibold px-4 py-2 rounded-lg transition flex items-center gap-1.5 shadow-xs">
                        <span>Open in WhatsApp</span> &rarr;
                    </a>
                </div>
            </div>

        </div>

    </div>
</div>

<script>
    function viewInquiryDetail(name, company, phone, email, subject, category, message, date) {
        document.getElementById('modalDetailName').innerText = name;
        document.getElementById('modalDetailCompany').innerText = company;
        document.getElementById('modalDetailPhone').innerText = phone;
        document.getElementById('modalDetailEmail').innerText = email;
        document.getElementById('modalDetailSubject').innerText = subject;
        document.getElementById('modalDetailCategory').innerText = category.toUpperCase() + ' INQUIRY';
        document.getElementById('modalDetailMessage').innerText = message;
        document.getElementById('modalDetailDate').innerText = 'Received on: ' + date;

        let cleanedPhone = phone.replace(/[^0-9]/g, '');
        if (cleanedPhone.length === 10) cleanedPhone = '91' + cleanedPhone;
        const waText = encodeURIComponent(`Hello ${name}, this is SMECA Industry Private Limited regarding your inquiry about ${subject}.`);
        document.getElementById('modalWhatsAppBtn').href = `https://wa.me/${cleanedPhone}?text=${waText}`;

        document.getElementById('detailModal').classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
    }

    function closeInquiryDetail() {
        document.getElementById('detailModal').classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    }

    document.getElementById('detailModal')?.addEventListener('click', function(e) {
        if (e.target === this) {
            closeInquiryDetail();
        }
    });
</script>

@endsection
