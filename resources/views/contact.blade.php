<x-layouts.app>
    <!-- PAGE HEADER -->
    <section class="pt-[140px] pb-[80px] bg-primary text-primary-dark">
        <div class="container mx-auto px-6 max-w-[1320px] text-center">
            <h1 class="text-4xl lg:text-[48px] font-bold leading-[1.2] mb-6 max-w-4xl mx-auto">
                Mari Berkolaborasi untuk Masa Depan yang Lebih Baik
            </h1>
            <p class="text-primary-dark/80 max-w-2xl mx-auto leading-relaxed text-lg">
                Punya pertanyaan atau ingin berdiskusi lebih lanjut? Kami siap membantu Anda.
            </p>
        </div>
    </section>

    <!-- CONTACT HERO & FORM -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6 max-w-[1320px]">
            <div class="grid lg:grid-cols-2 gap-16">
                <!-- Left: Info & Map -->
                <div class="flex flex-col gap-6">
                    <!-- Info Card -->
                    <div class="bg-[#F8FAFB] p-6 lg:p-8 rounded-3xl border border-gray-100 shadow-sm">
                        <h2 class="text-xl font-bold text-[#141414] mb-6">Informasi Kontak</h2>

                        <div class="space-y-6">
                            <div class="flex items-start gap-4 group">
                                <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center shrink-0 shadow-sm group-hover:bg-primary transition-colors">
                                    <x-icon name="lucide-map-pin" class="w-4 h-4 text-primary group-hover:text-primary-dark transition-colors" />
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-[#141414] mb-1">Kantor Pusat</h4>
                                    <p class="text-xs text-[#585857] leading-relaxed">Jl. P.P.A No.24, RT.5/RW.4, Ceger,<br/>Kec. Cipayung, Kota Jakarta Timur 13820</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4 group">
                                <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center shrink-0 shadow-sm group-hover:bg-primary transition-colors">
                                    <x-icon name="lucide-mail" class="w-4 h-4 text-primary group-hover:text-primary-dark transition-colors" />
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-[#141414] mb-1">Email</h4>
                                    <p class="text-xs text-[#585857]">info@passolving.com</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4 group">
                                <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center shrink-0 shadow-sm group-hover:bg-primary transition-colors">
                                    <x-icon name="lucide-phone" class="w-4 h-4 text-primary group-hover:text-primary-dark transition-colors" />
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-[#141414] mb-1">Telepon</h4>
                                    <p class="text-xs text-[#585857]">+62 21 1234 5678</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4 group">
                                <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center shrink-0 shadow-sm group-hover:bg-primary transition-colors">
                                    <x-icon name="lucide-clock" class="w-4 h-4 text-primary group-hover:text-primary-dark transition-colors" />
                                </div>
                                <div>
                                    <h4 class="text-sm font-bold text-[#141414] mb-1">Jam Operasional</h4>
                                    <p class="text-xs text-[#585857]">Senin - Jumat, 08:00 - 17:00 WIB</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Map Card -->
                    <div class="h-[250px] lg:h-[300px] rounded-3xl overflow-hidden shadow-sm border border-gray-100 bg-gray-200">
                        <iframe src="https://maps.google.com/maps?q=-6.3182419,106.8956369&t=&z=16&ie=UTF8&iwloc=&output=embed" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="border-0"></iframe>
                    </div>
                </div>

                <!-- Right: Form -->
                <div>
                    <livewire:contact-form />
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
