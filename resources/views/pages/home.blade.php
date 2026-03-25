<x-layouts.app title="Home — NexaStudio">

    {{-- HERO SECTION --}}
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-violet-50 via-white to-pink-50">

        {{-- Background decorative circles --}}
        <div class="absolute top-20 left-10 w-72 h-72 bg-violet-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-72 h-72 bg-pink-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse"></div>
        <div class="absolute top-40 right-40 w-48 h-48 bg-yellow-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

            {{-- Badge --}}
            <div class="inline-flex items-center gap-2 bg-violet-100 text-violet-700 px-4 py-2 rounded-full text-sm font-medium mb-6">
                <span class="w-2 h-2 bg-violet-500 rounded-full animate-pulse"></span>
                Creative Digital Agency
            </div>

            {{-- Heading --}}
            <h1 class="text-5xl md:text-7xl font-extrabold text-gray-900 leading-tight mb-6">
                We Build
                <span class="bg-gradient-to-r from-violet-600 to-pink-500 bg-clip-text text-transparent">
                    Digital
                </span>
                <br>Experiences
            </h1>

            {{-- Subheading --}}
            <p class="text-xl text-gray-500 max-w-2xl mx-auto mb-10 leading-relaxed">
                NexaStudio membantu bisnis Anda tampil profesional di dunia digital.
                Dari website, branding, hingga aplikasi mobile.
            </p>

            {{-- CTA Buttons --}}
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('portfolio') }}"
                    class="px-8 py-4 rounded-full bg-gradient-to-r from-violet-600 to-pink-500 text-white font-semibold text-lg hover:opacity-90 transition shadow-lg shadow-violet-200">
                    Lihat Portfolio
                </a>
                <a href="{{ route('contact') }}"
                    class="px-8 py-4 rounded-full border-2 border-gray-200 text-gray-700 font-semibold text-lg hover:border-violet-400 hover:text-violet-600 transition">
                    Hubungi Kami
                </a>
            </div>

            {{-- Stats --}}
            <div class="grid grid-cols-3 gap-8 max-w-lg mx-auto mt-20">
                <div>
                    <div class="text-4xl font-extrabold bg-gradient-to-r from-violet-600 to-pink-500 bg-clip-text text-transparent">50+</div>
                    <div class="text-gray-500 text-sm mt-1">Projects Done</div>
                </div>
                <div>
                    <div class="text-4xl font-extrabold bg-gradient-to-r from-violet-600 to-pink-500 bg-clip-text text-transparent">30+</div>
                    <div class="text-gray-500 text-sm mt-1">Happy Clients</div>
                </div>
                <div>
                    <div class="text-4xl font-extrabold bg-gradient-to-r from-violet-600 to-pink-500 bg-clip-text text-transparent">5+</div>
                    <div class="text-gray-500 text-sm mt-1">Years Experience</div>
                </div>
            </div>

        </div>
    </section>

    {{-- SERVICES SECTION --}}
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-16">
                <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Layanan Kami</h2>
                <p class="text-gray-500 text-lg max-w-xl mx-auto">Solusi digital terlengkap untuk kebutuhan bisnis Anda</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <div class="group p-8 rounded-2xl border border-gray-100 hover:border-violet-200 hover:shadow-xl hover:shadow-violet-100 transition-all duration-300">
                    <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-violet-500 to-pink-500 flex items-center justify-center text-2xl mb-6">🌐</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Web Development</h3>
                    <p class="text-gray-500 leading-relaxed">Website profesional, cepat, dan SEO-friendly untuk bisnis Anda.</p>
                </div>

                <div class="group p-8 rounded-2xl border border-gray-100 hover:border-violet-200 hover:shadow-xl hover:shadow-violet-100 transition-all duration-300">
                    <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-pink-500 to-yellow-400 flex items-center justify-center text-2xl mb-6">🎨</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">UI/UX Design</h3>
                    <p class="text-gray-500 leading-relaxed">Desain interface yang indah dan pengalaman pengguna yang luar biasa.</p>
                </div>

                <div class="group p-8 rounded-2xl border border-gray-100 hover:border-violet-200 hover:shadow-xl hover:shadow-violet-100 transition-all duration-300">
                    <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-blue-500 to-violet-500 flex items-center justify-center text-2xl mb-6">📱</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Mobile App</h3>
                    <p class="text-gray-500 leading-relaxed">Aplikasi mobile Android & iOS yang powerful dan mudah digunakan.</p>
                </div>

            </div>

            <div class="text-center mt-12">
                <a href="{{ route('services') }}"
                    class="inline-flex items-center gap-2 text-violet-600 font-semibold hover:gap-4 transition-all">
                    Lihat Semua Layanan →
                </a>
            </div>

        </div>
    </section>

    {{-- CTA SECTION --}}
    <section class="py-24 bg-gradient-to-r from-violet-600 to-pink-500">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-extrabold text-white mb-6">Siap Memulai Project Anda?</h2>
            <p class="text-violet-100 text-lg mb-10">Mari diskusikan ide Anda bersama kami. Konsultasi pertama gratis!</p>
            <a href="{{ route('contact') }}"
                class="px-8 py-4 rounded-full bg-white text-violet-600 font-bold text-lg hover:bg-violet-50 transition shadow-lg">
                Mulai Sekarang →
            </a>
        </div>
    </section>

</x-layouts.app>