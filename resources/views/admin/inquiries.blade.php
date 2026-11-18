@extends('layouts.app')

@section('title', 'Inquiry Management Dashboard | SMECA Industry')

@section('content')

<div class="bg-stone-100 py-8 border-b border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div>
                <span class="text-xs font-bold uppercase tracking-wider text-emerald-800 bg-emerald-50 px-2.5 py-1 rounded-md border border-emerald-200">
                    Staff Portal
                </span>
                <h1 class="text-2xl sm:text-3xl font-bold font-serif-display text-emerald-950 mt-1">
                    Customer & B2B Inquiry Collection
                </h1>
                <p class="text-xs text-slate-500">Live query repository collected from product cards, OEM forms, and contact requests.</p>
            </div>
            <div class="flex items-center gap-3">
                <a href="{{ route('contact.index') }}" class="bg-white text-emerald-900 border border-stone-300 hover:bg-stone-50 text-xs font-semibold px-4 py-2 rounded-xl transition">
                    Open Public Form
                </a>
            </div>
        </div>

        <!-- Metrics Cards -->
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mt-6">
            <div class="bg-white p-4 rounded-2xl border border-stone-200 shadow-2xs">
                <div class="text-xs text-slate-500 font-medium">Total Inquiries</div>
                <div class="text-2xl font-bold font-serif-display text-slate-900 mt-1">{{ $stats['total'] }}</div>
            </div>
            <div class="bg-white p-4 rounded-2xl border border-stone-200 shadow-2xs">
                <div class="text-xs text-emerald-700 font-medium">New / Uncontacted</div>
                <div class="text-2xl font-bold font-serif-display text-emerald-700 mt-1">{{ $stats['new'] }}</div>
            </div>
            <div class="bg-white p-4 rounded-2xl border border-stone-200 shadow-2xs">
                <div class="text-xs text-amber-700 font-medium">B2B & OEM Inquiries</div>
                <div class="text-2xl font-bold font-serif-display text-amber-700 mt-1">{{ $stats['b2b'] }}</div>
            </div>
            <div class="bg-white p-4 rounded-2xl border border-stone-200 shadow-2xs">
                <div class="text-xs text-blue-700 font-medium">Product-Wise Inquiries</div>
                <div class="text-2xl font-bold font-serif-display text-blue-700 mt-1">{{ $stats['products'] }}</div>
            </div>
        </div>
    </div>
</div>

<div class="py-10 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        @if(session('status_updated'))
            <div class="mb-6 p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-900 text-xs font-medium">
                {{ session('status_updated') }}
            </div>
        @endif

        <!-- Filter bar -->
        <form method="GET" action="{{ route('admin.inquiries') }}" class="mb-6 flex flex-wrap items-center gap-3 bg-stone-50 p-4 rounded-2xl border border-stone-200">
            <div class="w-full sm:w-64">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Search client name, phone, email..."
                       class="w-full bg-white border border-stone-300 rounded-xl px-3 py-2 text-xs focus:border-emerald-600 focus:outline-hidden">
            </div>

            <div class="w-full sm:w-44">
                <select name="type" class="w-full bg-white border border-stone-300 rounded-xl px-3 py-2 text-xs focus:border-emerald-600 focus:outline-hidden">
                    <option value="all">All Inquiry Types</option>
                    <option value="product" {{ request('type') == 'product' ? 'selected' : '' }}>Product Specific</option>
                    <option value="b2b_oem" {{ request('type') == 'b2b_oem' ? 'selected' : '' }}>B2B & OEM</option>
                    <option value="distributorship" {{ request('type') == 'distributorship' ? 'selected' : '' }}>Distributorship</option>
                    <option value="consultancy" {{ request('type') == 'consultancy' ? 'selected' : '' }}>Consultancy</option>
                    <option value="general" {{ request('type') == 'general' ? 'selected' : '' }}>General Query</option>
                </select>
            </div>

            <div class="w-full sm:w-36">
                <select name="status" class="w-full bg-white border border-stone-300 rounded-xl px-3 py-2 text-xs focus:border-emerald-600 focus:outline-hidden">
                    <option value="all">All Statuses</option>
                    <option value="new" {{ request('status') == 'new' ? 'selected' : '' }}>New</option>
                    <option value="contacted" {{ request('status') == 'contacted' ? 'selected' : '' }}>Contacted</option>
                    <option value="in_discussion" {{ request('status') == 'in_discussion' ? 'selected' : '' }}>In Discussion</option>
                    <option value="closed" {{ request('status') == 'closed' ? 'selected' : '' }}>Closed</option>
                </select>
            </div>

            <button type="submit" class="bg-emerald-800 hover:bg-emerald-900 text-white text-xs font-semibold px-4 py-2 rounded-xl transition">
                Filter
            </button>
            <a href="{{ route('admin.inquiries') }}" class="text-xs text-slate-500 hover:underline">Reset</a>
        </form>

        <!-- Inquiries Table -->
        <div class="overflow-x-auto border border-stone-200 rounded-2xl">
            <table class="w-full text-left text-xs text-slate-600">
                <thead class="bg-stone-50 border-b border-stone-200 text-slate-700 uppercase font-semibold text-[10px]">
                    <tr>
                        <th class="py-3 px-4">Date</th>
                        <th class="py-3 px-4">Contact Person</th>
                        <th class="py-3 px-4">Company / Org</th>
                        <th class="py-3 px-4">Type</th>
                        <th class="py-3 px-4">Product / Subject</th>
                        <th class="py-3 px-4">Message Summary</th>
                        <th class="py-3 px-4">Status</th>
                        <th class="py-3 px-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-stone-100">
                    @forelse($inquiries as $inquiry)
                        <tr class="hover:bg-stone-50/70 transition">
                            <td class="py-3.5 px-4 whitespace-nowrap text-slate-400">
                                {{ $inquiry->created_at->format('d M Y, h:i A') }}
                            </td>
                            <td class="py-3.5 px-4">
                                <div class="font-bold text-slate-800">{{ $inquiry->name }}</div>
                                <div class="text-[11px] text-emerald-800">{{ $inquiry->phone }}</div>
                                <div class="text-[11px] text-slate-500">{{ $inquiry->email }}</div>
                            </td>
                            <td class="py-3.5 px-4 font-medium text-slate-700">
                                {{ $inquiry->company_name ?? 'Individual Customer' }}
                            </td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <span class="px-2 py-0.5 rounded-full text-[10px] font-bold 
                                    {{ $inquiry->inquiry_type == 'b2b_oem' ? 'bg-amber-100 text-amber-900' : '' }}
                                    {{ $inquiry->inquiry_type == 'product' ? 'bg-emerald-100 text-emerald-900' : '' }}
                                    {{ $inquiry->inquiry_type == 'distributorship' ? 'bg-blue-100 text-blue-900' : '' }}
                                    {{ $inquiry->inquiry_type == 'consultancy' ? 'bg-purple-100 text-purple-900' : '' }}
                                    {{ $inquiry->inquiry_type == 'general' ? 'bg-stone-100 text-stone-700' : '' }}">
                                    {{ strtoupper(str_replace('_', ' ', $inquiry->inquiry_type)) }}
                                </span>
                            </td>
                            <td class="py-3.5 px-4 font-semibold text-slate-800">
                                {{ $inquiry->product_name ?? 'General / Not Specified' }}
                            </td>
                            <td class="py-3.5 px-4 max-w-xs truncate" title="{{ $inquiry->message }}">
                                {{ $inquiry->message }}
                            </td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <form action="{{ route('admin.inquiries.status', $inquiry) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <select name="status" onchange="this.form.submit()"
                                            class="text-[11px] font-semibold rounded-lg px-2 py-1 border border-stone-200 bg-white
                                                {{ $inquiry->status == 'new' ? 'text-emerald-700 font-bold bg-emerald-50' : 'text-slate-600' }}">
                                        <option value="new" {{ $inquiry->status == 'new' ? 'selected' : '' }}>New</option>
                                        <option value="contacted" {{ $inquiry->status == 'contacted' ? 'selected' : '' }}>Contacted</option>
                                        <option value="in_discussion" {{ $inquiry->status == 'in_discussion' ? 'selected' : '' }}>In Discussion</option>
                                        <option value="closed" {{ $inquiry->status == 'closed' ? 'selected' : '' }}>Closed</option>
                                    </select>
                                </form>
                            </td>
                            <td class="py-3.5 px-4 text-right whitespace-nowrap">
                                <form action="{{ route('admin.inquiries.destroy', $inquiry) }}" method="POST" onsubmit="return confirm('Delete this inquiry record?');" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-rose-500 hover:text-rose-700 p-1">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center py-10 text-slate-400">
                                No inquiries recorded yet. Test by submitting a query from the website!
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-6">
            {{ $inquiries->links() }}
        </div>

    </div>
</div>

@endsection
