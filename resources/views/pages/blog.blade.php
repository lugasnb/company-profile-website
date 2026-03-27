<x-layouts.app title="Blog — NexaStudio">

    {{-- HERO BLOG --}}
    <section class="relative py-24 bg-gradient-to-br from-violet-50 via-white to-pink-50 overflow-hidden">
        <div class="absolute top-10 right-10 w-64 h-64 bg-violet-200 rounded-full mix-blend-multiply filter blur-xl opacity-60 animate-pulse"></div>
        <div class="absolute bottom-10 left-10 w-64 h-64 bg-pink-200 rounded-full mix-blend-multiply filter blur-xl opacity-60 animate-pulse"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 bg-violet-100 text-violet-700 px-4 py-2 rounded-full text-sm font-medium mb-6">
                <span class="w-2 h-2 bg-violet-500 rounded-full animate-pulse"></span>
                Blog & Artikel
            </div>
            <h1 class="text-5xl md:text-6xl font-extrabold text-gray-900 mb-6">
                Insight &
                <span class="bg-gradient-to-r from-violet-600 to-pink-500 bg-clip-text text-transparent">
                    Inspirasi
                </span>
            </h1>
            <p class="text-xl text-gray-500 max-w-2xl mx-auto leading-relaxed">
                Tips, trik, dan insight seputar dunia digital, desain, dan teknologi dari tim NexaStudio.
            </p>
        </div>
    </section>

    {{-- BLOG GRID --}}
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Featured Post --}}
            <div class="group rounded-3xl overflow-hidden border-2 border-gray-100 hover:border-violet-200 hover:shadow-2xl hover:shadow-violet-100 transition-all duration-300 mb-16">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="h-72 md:h-auto bg-gradient-to-br from-violet-500 to-pink-500 flex items-center justify-center text-8xl">
                        🚀
                    </div>
                    <div class="p-10 flex flex-col justify-center">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="px-3 py-1 rounded-full bg-violet-100 text-violet-600 text-xs font-semibold">Featured</span>
                            <span class="px-3 py-1 rounded-full bg-pink-100 text-pink-600 text-xs font-semibold">Web Development</span>
                        </div>
                        <h2 class="text-3xl font-extrabold text-gray-900 mb-4 group-hover:text-violet-600 transition">
                            10 Tren Web Development yang Wajib Anda Ketahui di 2025
                        </h2>
                        <p class="text-gray-500 leading-relaxed mb-6">
                            Dunia web development terus berkembang pesat. Dari AI-powered tools hingga Web Components, inilah tren yang akan mendominasi industri tahun ini.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-violet-400 to-pink-400 flex items-center justify-center text-lg">
                                    👨‍💻
                                </div>
                                <div>
                                    <div class="text-sm font-semibold text-gray-900">Budi Santoso</div>
                                    <div class="text-xs text-gray-500">15 Januari 2025 · 8 menit baca</div>
                                </div>
                            </div>
                            <a href="#" class="text-violet-600 font-semibold hover:gap-2 flex items-center gap-1 transition-all">
                                Baca →
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Blog Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ([
                    [
                        'emoji' => '🎨',
                        'color' => 'from-pink-400 to-rose-500',
                        'category' => 'UI/UX Design',
                        'cat_color' => 'bg-pink-100 text-pink-600',
                        'title' => 'Panduan Lengkap Membuat Design System dari Nol',
                        'desc' => 'Design system adalah fondasi dari UI yang konsisten. Pelajari cara membuatnya step by step.',
                        'author' => 'Sari Dewi',
                        'date' => '10 Januari 2025',
                        'read' => '6 menit baca',
                    ],
                    [
                        'emoji' => '📱',
                        'color' => 'from-blue-400 to-cyan-500',
                        'category' => 'Mobile Dev',
                        'cat_color' => 'bg-blue-100 text-blue-600',
                        'title' => 'Flutter vs React Native: Mana yang Lebih Baik di 2025?',
                        'desc' => 'Perbandingan mendalam dua framework mobile development terpopuler untuk membantu Anda memilih.',
                        'author' => 'Andi Pratama',
                        'date' => '5 Januari 2025',
                        'read' => '10 menit baca',
                    ],
                    [
                        'emoji' => '📈',
                        'color' => 'from-green-400 to-teal-500',
                        'category' => 'Digital Marketing',
                        'cat_color' => 'bg-green-100 text-green-600',
                        'title' => '7 Strategi SEO yang Terbukti Meningkatkan Traffic Website',
                        'desc' => 'Teknik SEO yang sudah terbukti efektif untuk mendatangkan lebih banyak pengunjung organik.',
                        'author' => 'Sari Dewi',
                        'date' => '28 Desember 2024',
                        'read' => '7 menit baca',
                    ],
                    [
                        'emoji' => '⚡',
                        'color' => 'from-yellow-400 to-orange-500',
                        'category' => 'Performance',
                        'cat_color' => 'bg-yellow-100 text-yellow-600',
                        'title' => 'Cara Optimasi Website agar Loading Super Cepat',
                        'desc' => 'Website yang lambat = pengunjung kabur. Pelajari teknik optimasi yang bisa langsung diterapkan.',
                        'author' => 'Budi Santoso',
                        'date' => '20 Desember 2024',
                        'read' => '5 menit baca',
                    ],
                    [
                        'emoji' => '🔐',
                        'color' => 'from-gray-600 to-gray-800',
                        'category' => 'Security',
                        'cat_color' => 'bg-gray-100 text-gray-600',
                        'title' => 'Keamanan Website: 10 Hal yang Sering Diabaikan Developer',
                        'desc' => 'Celah keamanan kecil bisa berakibat fatal. Pastikan website Anda terlindungi dengan baik.',
                        'author' => 'Budi Santoso',
                        'date' => '15 Desember 2024',
                        'read' => '9 menit baca',
                    ],
                    [
                        'emoji' => '🤖',
                        'color' => 'from-violet-400 to-purple-500',
                        'category' => 'AI & Tech',
                        'cat_color' => 'bg-violet-100 text-violet-600',
                        'title' => 'AI dalam Web Development: Peluang atau Ancaman?',
                        'desc' => 'Bagaimana artificial intelligence mengubah cara kita membangun website dan apa artinya bagi developer.',
                        'author' => 'Andi Pratama',
                        'date' => '10 Desember 2024',
                        'read' => '8 menit baca',
                    ],
                ] as $post)
                <div class="group rounded-2xl overflow-hidden border-2 border-gray-100 hover:border-violet-200 hover:shadow-xl hover:shadow-violet-100 transition-all duration-300">

                    {{-- Thumbnail --}}
                    <div class="h-48 bg-gradient-to-br {{ $post['color'] }} flex items-center justify-center text-5xl">
                        {{ $post['emoji'] }}
                    </div>

                    {{-- Content --}}
                    <div class="p-6">
                        <span class="px-3 py-1 rounded-full {{ $post['cat_color'] }} text-xs font-semibold">
                            {{ $post['category'] }}
                        </span>
                        <h3 class="text-lg font-bold text-gray-900 mt-3 mb-2 group-hover:text-violet-600 transition leading-snug">
                            {{ $post['title'] }}
                        </h3>
                        <p class="text-gray-500 text-sm leading-relaxed mb-4">
                            {{ $post['desc'] }}
                        </p>
                        <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                            <div>
                                <div class="text-xs font-semibold text-gray-900">{{ $post['author'] }}</div>
                                <div class="text-xs text-gray-400">{{ $post['date'] }} · {{ $post['read'] }}</div>
                            </div>
                            <a href="#" class="text-violet-600 text-sm font-semibold hover:underline">Baca →</a>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>

            {{-- Load More --}}
            <div class="text-center mt-16">
                <button class="px-8 py-4 rounded-full border-2 border-violet-200 text-violet-600 font-semibold hover:bg-violet-600 hover:text-white hover:border-violet-600 transition">
                    Muat Lebih Banyak
                </button>
            </div>

        </div>
    </section>

    {{-- NEWSLETTER --}}
    <section class="py-24 bg-gradient-to-r from-violet-600 to-pink-500">
        <div class="max-w-2xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-extrabold text-white mb-4">Subscribe Newsletter</h2>
            <p class="text-violet-100 text-lg mb-10">Dapatkan artikel terbaru langsung di inbox Anda. Gratis, tanpa spam!</p>
            <div class="flex flex-col sm:flex-row gap-3">
                <input
                    type="email"
                    placeholder="Masukkan email Anda..."
                    class="flex-1 px-6 py-4 rounded-full text-gray-900 outline-none focus:ring-4 focus:ring-white/30"
                >
                <button class="px-8 py-4 rounded-full bg-white text-violet-600 font-bold hover:bg-violet-50 transition whitespace-nowrap">
                    Subscribe →
                </button>
            </div>
        </div>
    </section>

</x-layouts.app>
