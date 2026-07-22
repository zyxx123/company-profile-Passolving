<div class="flex min-h-screen bg-white w-full">
        <!-- Left Side: Branding (Hidden on mobile) -->
        <div class="hidden lg:flex lg:w-1/2 bg-[#00a6a6] relative flex-col justify-center p-16 xl:p-24 overflow-hidden">
            <!-- Decorative Elements -->
            <div class="absolute top-10 left-10 opacity-20">
                <svg width="120" height="120" fill="none" viewBox="0 0 100 100">
                    <pattern id="login-dots" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <circle fill="#ffffff" cx="2" cy="2" r="2"></circle>
                    </pattern>
                    <rect x="0" y="0" width="100" height="100" fill="url(#login-dots)"></rect>
                </svg>
            </div>
            <div class="absolute -bottom-20 -left-20 w-[400px] h-[400px] bg-white/10 rounded-full blur-[80px]"></div>
            
            <div class="relative z-10 max-w-xl">
                <!-- Brand Logo -->
                <img src="{{ asset('logo-white-trimmed.png') }}" alt="PASSolving Logo" class="h-10 mb-20">
                
                <!-- Copywriting -->
                <span class="text-[#f5c242] font-bold tracking-[0.2em] uppercase text-sm mb-4 block">
                    System Administration
                </span>
                <h1 class="text-white text-5xl xl:text-6xl font-black leading-[1.1] mb-6 uppercase">
                    Manage &<br>
                    <span class="text-[#f5c242]">Transform.</span>
                </h1>
                <p class="text-white/90 text-lg leading-relaxed">
                    Securely access the administrative portal to manage portfolios, services, and evaluate organizational data to drive impactful decisions.
                </p>
            </div>
        </div>

        <!-- Right Side: Login Form -->
        <div class="w-full lg:w-1/2 flex flex-col justify-center p-8 lg:p-16 xl:p-24 bg-white relative">
            <!-- Mobile Logo (Visible only on mobile) -->
            <div class="lg:hidden mb-12">
                <img src="{{ asset('logo-black-trimmed.png') }}" alt="PASSolving Logo" class="h-8">
            </div>

            <div class="w-full max-w-md mx-auto">
                <span class="text-[#00a6a6] font-bold tracking-widest uppercase text-xs mb-2 block">
                    Welcome Back
                </span>
                <h2 class="text-[#081f5b] text-3xl lg:text-4xl font-black mb-10 uppercase leading-tight">
                    Access Your<br>Dashboard
                </h2>

                <form wire:submit="authenticate" class="space-y-6">
                    {{ $this->form }}

                    <!-- Custom Submit Button overriding Filament default -->
                    <button type="submit" class="w-full bg-[#f5c242] hover:bg-[#dfb038] text-[#141414] font-bold py-4 rounded-[14px] shadow-[0_10px_25px_rgba(244,180,0,0.20)] transition-all duration-300 hover:-translate-y-1 mt-4 flex justify-center items-center gap-2">
                        LOGIN TO DASHBOARD
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                    </button>
                </form>
                
                <div class="mt-12 text-center text-sm text-[#6B7280]">
                    &copy; {{ date('Y') }} PT Palsindo Utama. All rights reserved.
                </div>
            </div>
        </div>
    </div>
