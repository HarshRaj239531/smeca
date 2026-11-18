@extends('layouts.app')

@section('title', 'Contact Us & Business Enquiries | SMECA INDUSTRY PRIVATE LIMITED')

@section('content')

<!-- Header Banner -->
<section class="bg-white text-[#203a31] py-14 sm:py-18 relative overflow-hidden border-b border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative text-center space-y-4">
        <span class="inline-block text-xs font-bold uppercase tracking-widest text-[#203a31] bg-[#c0caa7]/30 px-3.5 py-1 rounded-full border border-[#203a31]/20">
            Get in Touch
        </span>
        <h1 class="text-3xl sm:text-5xl font-bold font-serif-display tracking-tight text-[#203a31]">
            Contact SMECA Industry Private Limited
        </h1>
        <p class="text-sm sm:text-base text-slate-600 max-w-2xl mx-auto leading-relaxed">
            Have questions about our Ayurvedic and cosmetic products, need private label contract manufacturing, or wish to explore regional distributorship in Bihar? We are here to assist.
        </p>
    </div>
</section>

<!-- Main Contact Section -->
<section class="py-16 bg-stone-50 border-b border-stone-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            
            <!-- Left Column: Contact Details, Corporate Information & Locations -->
            <div class="lg:col-span-5 space-y-8">
                
                <!-- Corporate Registry Card -->
                <div class="bg-white p-7 rounded-3xl border border-stone-200 shadow-xs space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-800 flex items-center justify-center">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                        </div>
                        <div>
                            <h3 class="text-base font-bold font-serif-display text-emerald-950">Corporate Registry</h3>
                            <p class="text-xs text-slate-500">Government Registered Private Limited Entity</p>
                        </div>
                    </div>

                    <div class="space-y-2.5 text-xs text-slate-600 border-t border-stone-100 pt-3">
                        <div class="flex justify-between py-1 border-b border-stone-100">
                            <span class="font-semibold text-slate-500">Entity Name:</span>
                            <span class="font-bold text-slate-800 text-right">SMECA INDUSTRY PRIVATE LIMITED</span>
                        </div>
                        <div class="flex justify-between py-1 border-b border-stone-100">
                            <span class="font-semibold text-slate-500">Industry:</span>
                            <span class="font-medium text-slate-800 text-right">Cosmetics, Skincare, Wellness</span>
                        </div>
                        <div class="flex justify-between py-1 border-b border-stone-100">
                            <span class="font-semibold text-slate-500">Specialty:</span>
                            <span class="font-medium text-slate-800 text-right">Herbal & Ayurvedic Formulations</span>
                        </div>
                        <div class="flex justify-between py-1">
                            <span class="font-semibold text-slate-500">Operating Region:</span>
                            <span class="font-medium text-slate-800 text-right">Bihar, India (Aurangabad & Gaya)</span>
                        </div>
                    </div>
                </div>

                <!-- Operating Hubs in Bihar -->
                <div class="bg-white p-7 rounded-3xl border border-stone-200 shadow-xs space-y-6">
                    <h3 class="text-base font-bold font-serif-display text-emerald-950 flex items-center gap-2">
                        <svg class="w-5 h-5 text-emerald-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        District Operating Hubs
                    </h3>

                    <!-- Aurangabad Office Placeholders -->
                    <div class="space-y-1.5 text-xs border-l-2 border-emerald-700 pl-4">
                        <div class="font-bold text-slate-800 text-sm">Aurangabad Central Hub</div>
                        <p class="text-slate-600">
                            SMECA Industry Complex, GT Road Corridor,<br>
                            Aurangabad District, Bihar – 824101, India
                        </p>
                        <p class="text-emerald-800 font-medium">Focus: Manufacturing Facilities & OEM Operations</p>
                    </div>

                    <!-- Gaya Office Placeholders -->
                    <div class="space-y-1.5 text-xs border-l-2 border-amber-600 pl-4">
                        <div class="font-bold text-slate-800 text-sm">Gaya Botanical & Logistics Node</div>
                        <p class="text-slate-600">
                            Station Road Commercial Zone / Bodhgaya Link,<br>
                            Gaya District, Bihar – 823001, India
                        </p>
                        <p class="text-amber-800 font-medium">Focus: Herb Sourcing, Distribution & Sales Training</p>
                    </div>

                    <!-- Direct Contacts -->
                    <div class="pt-4 border-t border-stone-100 space-y-2.5 text-xs">
                        <div class="flex items-center gap-3">
                            <span class="w-7 h-7 rounded-lg bg-emerald-50 text-emerald-800 flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </span>
                            <span class="text-slate-700 font-medium">+91 94700 00000 / +91 98765 43210</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="w-7 h-7 rounded-lg bg-emerald-50 text-emerald-800 flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </span>
                            <span class="text-slate-700 font-medium">contact@smecaindustry.com / oem@smecaindustry.com</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="w-7 h-7 rounded-lg bg-emerald-50 text-emerald-800 flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </span>
                            <span class="text-slate-700 font-medium">Monday – Saturday: 9:30 AM to 6:30 PM IST</span>
                        </div>
                    </div>

                </div>

                <!-- Board of Directors Verification Summary -->
                <div class="bg-white text-[#203a31] p-6 rounded-3xl border border-stone-200 shadow-xs space-y-3">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-[#384e42] font-serif-display">Directors on Record</h4>
                    <p class="text-xs text-slate-600">Corporate inquiries can also be routed directly to the executive directors:</p>
                    <div class="grid grid-cols-2 gap-2 text-xs text-[#203a31] font-semibold pt-1">
                        <div>• Sanjit Kumar</div>
                        <div>• Sonu Kumar</div>
                        <div>• Sarina Kumari</div>
                        <div>• Yogendra Das</div>
                    </div>
                </div>

            </div>

            <!-- Right Column: Interactive Inquiry & Requirement Collection Form -->
            <div class="lg:col-span-7">
                <div class="bg-white p-8 sm:p-10 rounded-3xl border border-stone-200 shadow-sm relative">
                    
                    <div class="space-y-2 mb-8">
                        <span class="text-xs font-bold uppercase tracking-wider text-emerald-800 bg-emerald-50 px-3 py-1 rounded-full border border-emerald-200">
                            Query Collection Portal
                        </span>
                        <h2 class="text-2xl sm:text-3xl font-bold font-serif-display text-emerald-950">
                            Send Us an Inquiry
                        </h2>
                        <p class="text-xs sm:text-sm text-slate-600">
                            Fill out the form below. If you clicked "Enquire Now" on a product card, your interested product has been auto-selected below.
                        </p>
                    </div>

                    @if ($errors->any())
                        <div class="mb-6 p-4 rounded-xl bg-rose-50 border border-rose-200 text-rose-800 text-xs">
                            <ul class="list-disc list-inside space-y-1">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
                        @csrf

                        <!-- Row 1: Name and Company -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1">Your Full Name <span class="text-rose-500">*</span></label>
                                <input type="text" name="name" value="{{ old('name') }}" required placeholder="e.g. Anand Prakash"
                                       class="w-full bg-stone-50 border border-stone-300 rounded-xl px-3.5 py-2.5 text-sm focus:bg-white focus:border-emerald-600 focus:outline-hidden">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1">Company / Organisation</label>
                                <input type="text" name="company_name" value="{{ old('company_name') }}" placeholder="Firm or brand name (if business query)"
                                       class="w-full bg-stone-50 border border-stone-300 rounded-xl px-3.5 py-2.5 text-sm focus:bg-white focus:border-emerald-600 focus:outline-hidden">
                            </div>
                        </div>

                        <!-- Row 2: Phone and Email -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1">Phone / WhatsApp Number <span class="text-rose-500">*</span></label>
                                <input type="tel" name="phone" value="{{ old('phone') }}" required placeholder="+91 94700 00000"
                                       class="w-full bg-stone-50 border border-stone-300 rounded-xl px-3.5 py-2.5 text-sm focus:bg-white focus:border-emerald-600 focus:outline-hidden">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1">Email Address <span class="text-rose-500">*</span></label>
                                <input type="email" name="email" value="{{ old('email') }}" required placeholder="your.name@domain.com"
                                       class="w-full bg-stone-50 border border-stone-300 rounded-xl px-3.5 py-2.5 text-sm focus:bg-white focus:border-emerald-600 focus:outline-hidden">
                            </div>
                        </div>

                        <!-- Row 3: Inquiry Type & Interested Product -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1">Inquiry Category <span class="text-rose-500">*</span></label>
                                <select name="inquiry_type" required
                                        class="w-full bg-stone-50 border border-stone-300 rounded-xl px-3.5 py-2.5 text-sm focus:bg-white focus:border-emerald-600 focus:outline-hidden">
                                    <option value="product" {{ (old('inquiry_type', $selectedType) === 'product') ? 'selected' : '' }}>Product Purchase / Pricing</option>
                                    <option value="b2b_oem" {{ (old('inquiry_type', $selectedType) === 'b2b_oem') ? 'selected' : '' }}>Third-Party OEM / Private Label</option>
                                    <option value="distributorship" {{ (old('inquiry_type', $selectedType) === 'distributorship') ? 'selected' : '' }}>Distributorship / Stockist</option>
                                    <option value="consultancy" {{ (old('inquiry_type', $selectedType) === 'consultancy') ? 'selected' : '' }}>Consultancy & Marketing Advisory</option>
                                    <option value="general" {{ (old('inquiry_type', $selectedType) === 'general') ? 'selected' : '' }}>General Corporate Query</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-slate-700 mb-1">Interested Product (Optional)</label>
                                <select name="product_id" id="contactProductSelect"
                                        class="w-full bg-stone-50 border border-stone-300 rounded-xl px-3.5 py-2.5 text-sm focus:bg-white focus:border-emerald-600 focus:outline-hidden">
                                    <option value="">-- Choose Formulation (or none) --</option>
                                    @foreach($products as $p)
                                        <option value="{{ $p->id }}" {{ (old('product_id', $selectedProduct) == $p->id || old('product_name', $selectedProduct) == $p->name) ? 'selected' : '' }}>
                                            {{ $p->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Row 4: Requirement / Message -->
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1">Requirement / Message <span class="text-rose-500">*</span></label>
                            <textarea name="message" rows="5" required placeholder="Please provide specific details such as batch quantity, target delivery timeline, custom fragrance preferences, or retail store location in Bihar..."
                                      class="w-full bg-stone-50 border border-stone-300 rounded-xl p-3.5 text-sm focus:bg-white focus:border-emerald-600 focus:outline-hidden">{{ old('message') }}</textarea>
                        </div>

                        <!-- Action Submit -->
                        <div class="pt-2">
                            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium text-sm py-3.5 rounded-xl shadow-xs transition cursor-pointer">
                                Submit Formal Inquiry
                            </button>
                            <p class="text-[11px] text-slate-500 text-center mt-3">
                                Inquiries are securely stored in our query management system. A confirmation and response will be provided within 24 business hours.
                            </p>
                        </div>

                    </form>

                </div>
            </div>

        </div>

    </div>
</section>

@endsection
