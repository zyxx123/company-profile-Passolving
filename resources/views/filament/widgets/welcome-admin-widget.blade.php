<x-filament-widgets::widget>
    <div class="relative overflow-hidden bg-white border border-gray-100 rounded-[24px] p-10 flex flex-col justify-between items-start lg:flex-row lg:items-center shadow-[0_8px_30px_rgb(0,0,0,0.04)] group hover:shadow-[0_8px_30px_rgb(0,0,0,0.08)] transition-shadow duration-500">
        
        <!-- Very Subtle Grid Background -->
        <div class="absolute inset-0 z-0 opacity-[0.03]" style="background-image: radial-gradient(#000 1px, transparent 1px); background-size: 24px 24px;"></div>
        
        <!-- Ambient Glowing Orb (Teal) -->
        <div class="absolute -top-32 -left-32 w-[400px] h-[400px] bg-[#00a6a6]/5 rounded-full blur-[100px] pointer-events-none group-hover:bg-[#00a6a6]/10 transition-colors duration-1000"></div>
        <div class="absolute -bottom-32 -right-32 w-[300px] h-[300px] bg-[#f5c242]/5 rounded-full blur-[80px] pointer-events-none group-hover:bg-[#f5c242]/10 transition-colors duration-1000"></div>

        <div class="relative z-10 w-full lg:w-2/3">
            <div class="flex items-center gap-3 mb-6">
                <span class="inline-block w-2 h-2 rounded-full bg-[#00a6a6] animate-[pulse_2s_ease-in-out_infinite]"></span>
                <span class="text-[11px] font-bold tracking-[0.2em] uppercase text-gray-500 font-['Outfit']">Workspace Active</span>
            </div>
            
            <h2 class="text-4xl lg:text-5xl font-extrabold text-gray-900 tracking-tight leading-[1.1] mb-5 font-['Outfit']">
                Welcome back, <br/> <span class="text-[#00a6a6]">{{ auth()->user()?->name ?? 'Admin' }}</span>.
            </h2>
            
            <p class="text-gray-500 text-lg max-w-xl font-['Inter'] font-light leading-relaxed">
                Monitor organizational metrics, manage consulting portfolios, and streamline service transformations from your central command center.
            </p>
        </div>

        <div class="relative z-10 mt-8 lg:mt-0 w-full lg:w-1/3 flex justify-end">
            <!-- Quick Actions Card -->
            <div class="bg-gray-50/80 backdrop-blur-sm border border-gray-100 rounded-2xl p-6 shadow-sm w-full max-w-sm hover:bg-gray-50 transition-colors duration-300">
                <div class="flex items-center justify-between mb-4">
                    <div class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Quick Actions</div>
                    <svg class="w-4 h-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                
                <div class="space-y-3">
                    <a href="/admin/portfolios" class="flex items-center justify-between group/btn bg-white border border-gray-200 px-4 py-3 rounded-xl hover:border-[#00a6a6] hover:shadow-sm transition-all duration-300">
                        <span class="text-sm font-semibold text-gray-700 group-hover/btn:text-[#00a6a6] transition-colors">Manage Portfolios</span>
                        <svg class="w-4 h-4 text-gray-400 group-hover/btn:text-[#00a6a6] group-hover/btn:translate-x-1 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                    
                    <a href="/admin/services" class="flex items-center justify-between group/btn bg-white border border-gray-200 px-4 py-3 rounded-xl hover:border-[#f5c242] hover:shadow-sm transition-all duration-300">
                        <span class="text-sm font-semibold text-gray-700 group-hover/btn:text-[#f5c242] transition-colors">Manage Services</span>
                        <svg class="w-4 h-4 text-gray-400 group-hover/btn:text-[#f5c242] group-hover/btn:translate-x-1 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-filament-widgets::widget>
