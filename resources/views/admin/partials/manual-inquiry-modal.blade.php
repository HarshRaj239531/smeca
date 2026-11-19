<!-- Manual Offline Inquiry Logging Modal -->
<div id="manualInquiryModal" class="fixed inset-0 z-50 hidden overflow-y-auto bg-slate-950/70 backdrop-blur-xs flex items-center justify-center p-4">
    <div class="relative bg-white rounded-2xl shadow-2xl max-w-lg w-full border border-stone-200 overflow-hidden transform transition-all duration-300">
        <div class="bg-[#203a31] text-white p-6 relative">
            <button onclick="closeManualInquiryModal()" class="absolute top-5 right-5 text-white/70 hover:text-white text-xl p-1 cursor-pointer">&times;</button>
            <div class="text-[10px] font-bold uppercase tracking-widest text-[#c0caa7]">Direct Lead Entry</div>
            <h3 class="text-xl font-serif-display font-medium text-white">Log Offline Phone / Direct Lead</h3>
        </div>
        
        <form action="{{ route('admin.inquiries.manual') }}" method="POST" class="p-6 space-y-4">
            @csrf
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold text-slate-800 mb-1">Customer Name <span class="text-rose-600">*</span></label>
                    <input type="text" name="name" required placeholder="e.g. Anand Kumar"
                           class="w-full bg-[#f6f8f3] border border-stone-300 rounded-xl px-3 py-2 text-xs focus:bg-white focus:border-[#203a31] focus:outline-hidden">
                </div>
                <div>
                    <label class="block text-xs font-bold text-slate-800 mb-1">Company / Brand</label>
                    <input type="text" name="company_name" placeholder="Business name (Optional)"
                           class="w-full bg-[#f6f8f3] border border-stone-300 rounded-xl px-3 py-2 text-xs focus:bg-white focus:border-[#203a31] focus:outline-hidden">
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold text-slate-800 mb-1">Phone / WhatsApp <span class="text-rose-600">*</span></label>
                    <input type="tel" name="phone" required placeholder="+91 94310 00000"
                           class="w-full bg-[#f6f8f3] border border-stone-300 rounded-xl px-3 py-2 text-xs focus:bg-white focus:border-[#203a31] focus:outline-hidden">
                </div>
                <div>
                    <label class="block text-xs font-bold text-slate-800 mb-1">Email ID <span class="text-rose-600">*</span></label>
                    <input type="email" name="email" required placeholder="name@domain.com"
                           class="w-full bg-[#f6f8f3] border border-stone-300 rounded-xl px-3 py-2 text-xs focus:bg-white focus:border-[#203a31] focus:outline-hidden">
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold text-slate-800 mb-1">Inquiry Category</label>
                    <select name="inquiry_type" class="w-full bg-[#f6f8f3] border border-stone-300 rounded-xl px-3 py-2 text-xs focus:bg-white focus:border-[#203a31] focus:outline-hidden">
                        <option value="product">SMECA Skincare Box Order</option>
                        <option value="b2b_oem">Third-Party OEM / Contract Mfg</option>
                        <option value="distributorship">Stockist / Distributorship</option>
                        <option value="consultancy">Consultancy & Advisory</option>
                        <option value="general">General Query</option>
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-bold text-slate-800 mb-1">Initial Status</label>
                    <select name="status" class="w-full bg-[#f6f8f3] border border-stone-300 rounded-xl px-3 py-2 text-xs focus:bg-white focus:border-[#203a31] focus:outline-hidden">
                        <option value="new">New (Uncontacted)</option>
                        <option value="contacted">Contacted</option>
                        <option value="in_discussion" selected>In Discussion</option>
                        <option value="closed">Closed</option>
                    </select>
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-800 mb-1">Target Product / Subject</label>
                <input type="text" name="product_name" placeholder="e.g. Kumkumadi Tailam (500 units)"
                       class="w-full bg-[#f6f8f3] border border-stone-300 rounded-xl px-3 py-2 text-xs focus:bg-white focus:border-[#203a31] focus:outline-hidden">
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-800 mb-1">Requirement Notes / Message <span class="text-rose-600">*</span></label>
                <textarea name="message" rows="3" required placeholder="Enter requirements discussed with client..."
                          class="w-full bg-[#f6f8f3] border border-stone-300 rounded-xl p-3 text-xs focus:bg-white focus:border-[#203a31] focus:outline-hidden"></textarea>
            </div>

            <div class="flex items-center justify-end gap-3 pt-2">
                <button type="button" onclick="closeManualInquiryModal()" class="px-4 py-2 text-xs font-semibold text-slate-600 hover:text-slate-800 cursor-pointer">
                    Cancel
                </button>
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold text-xs px-5 py-2.5 rounded-xl shadow-xs cursor-pointer">
                    Save Lead to Database
                </button>
            </div>
        </form>
    </div>
</div>
