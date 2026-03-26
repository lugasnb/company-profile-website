<x-layouts.app title="Portfolio — NexaStudio">

    {{-- HERO PORTFOLIO --}}
    <section class="relative py-24 bg-gradient-to-br from-violet-50 via-white to-pink-50 overflow-hidden">
        <div class="absolute top-10 right-10 w-64 h-64 bg-violet-200 rounded-full mix-blend-multiply filter blur-xl opacity-60 animate-pulse"></div>
        <div class="absolute bottom-10 left-10 w-64 h-64 bg-pink-200 rounded-full mix-blend-multiply filter blur-xl opacity-60 animate-pulse"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 bg-violet-100 text-violet-700 px-4 py-2 rounded-full text-sm font-medium mb-6">
                <span class="w-2 h-2 bg-violet-500 rounded-full animate-pulse"></span>
                Portfolio Kami
            </div>
            <h1 class="text-5xl md:text-6xl font-extrabold text-gray-900 mb-6">
                Karya
                <span class="bg-gradient-to-r from-violet-600 to-pink-500 bg-clip-text text-transparent">
                    Terbaik
                </span>
                Kami
            </h1>
            <p class="text-xl text-gray-500 max-w-2xl mx-auto leading-relaxed">
                Setiap project adalah cerita sukses yang kami banggakan. Lihat bagaimana kami membantu klien mencapai tujuan digitalnya.
            </p>
        </div>
    </section>

    {{-- FILTER + GRID --}}
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Filter Tabs --}}
            <div class="flex flex-wrap justify-center gap-3 mb-16">
                @foreach (['Semua', 'Web Development', 'UI/UX Design', 'Mobile App', 'E-Commerce'] as $filter)
                <button class="px-5 py-2 rounded-full text-sm font-medium transition
                    {{ $loop->first
                        ? 'bg-gradient-to-r from-violet-600 to-pink-500 text-white shadow-lg'
                        : 'border-2 border-gray-200 text-gray-600 hover:border-violet-400 hover:text-violet-600' }}">
                    {{ $filter }}
                </button>
                @endforeach
            </div>

            {{-- Portfolio Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ([
                    [
                        'title' => 'Toko Batik Nusantara',
                        'category' => 'E-Commerce',
                        'emoji' => '🛍️',
                        'color' => 'from-yellow-400 to-orange-500',
                        'desc' => 'Platform e-commerce batik lokal dengan fitur pembayaran lengkap dan manajemen stok.',
                        'tags' => ['Laravel', 'Vue.js', 'MySQL'],
                    ],
                    [
                        'title' => 'MediCare App',
                        'category' => 'Mobile App',
                        'emoji' => '🏥',
                        'color' => 'from-blue-400 to-cyan-500',
                        'desc' => 'Aplikasi konsultasi dokter online dengan fitur chat real-time dan booking jadwal.',
                        'tags' => ['Flutter', 'Firebase', 'REST API'],
                    ],
                    [
                        'title' => 'Arsitek Studio',
                        'category' => 'Web Development',
                        'emoji' => '🏛️',
                        'color' => 'from-violet-400 to-purple-500',
                        'desc' => 'Website company profile firma arsitektur dengan portofolio proyek yang elegan.',
                        'tags' => ['Laravel', 'Livewire', 'Tailwind'],
                    ],
                    [
                        'title' => 'FoodieApp Dashboard',
                        'category' => 'UI/UX Design',
                        'emoji' => '🍔',
                        'color' => 'from-pink-400 to-rose-500',
                        'desc' => 'Desain dashboard admin untuk aplikasi food delivery dengan UX yang intuitif.',
                        'tags' => ['Figma', 'Prototyping', 'UI Design'],
                    ],
                    [
                        'title' => 'EduLearn Platform',
                        'category' => 'Web Development',
                        'emoji' => '📚',
                        'color' => 'from-green-400 to-teal-500',
                        'desc' => 'Platform e-learning dengan fitur video streaming, kuis interaktif, dan sertifikasi.',
                        'tags' => ['Laravel', 'React', 'AWS'],
                    ],
                    [
                        'title' => 'PropNest Realty',
                        'category' => 'Web Development',
                        'emoji' => '🏠',
                        'color' => 'from-indigo-400 to-violet-500',
                        'desc' => 'Website properti dengan fitur pencarian canggih, virtual tour, dan KPR calculator.',
                        'tags' => ['Laravel', 'Alpine.js', 'Tailwind'],
                    ],
                ] as $project)
                <div class="group rounded-2xl overflow-hidden border-2 border-gray-100 hover:border-violet-200 hover:shadow-xl hover:shadow-violet-100 transition-all duration-300">

                    {{-- Thumbnail --}}
                    <div class="relative h-48 bg-gradient-to-br {{ $project['color'] }} flex items-center justify-center text-6xl overflow-hidden">
                        {{ $project['emoji'] }}
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-all duration-300"></div>
                        <div class="absolute top-4 right-4 px-3 py-1 rounded-full bg-white/90 text-xs font-semibold text-gray-700">
                            {{ $project['category'] }}
                        </div>
                    </div>

                    {{-- Content --}}
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">{{ $project['title'] }}</h3>
                        <p class="text-gray-500 text-sm leading-relaxed mb-4">{{ $project['desc'] }}</p>
                        <div class="flex flex-wrap gap-2">
                            @foreach ($project['tags'] as $tag)
                            <span class="px-3 py-1 rounded-full bg-violet-50 text-violet-600 text-xs font-medium">
                                {{ $tag }}
                            </span>
                            @endforeach
                        </div>
                    </div>

                </div>
                @endforeach
            </div>

        </div>
    </section>

    {{-- CTA --}}
    <section class="py-24 bg-gradient-to-r from-violet-600 to-pink-500">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-extrabold text-white mb-6">Punya Project Menarik?</h2>
            <p class="text-violet-100 text-lg mb-10">Mari wujudkan ide Anda bersama kami. Konsultasi pertama gratis!</p>
            <a href="{{ route('contact') }}"
                class="px-8 py-4 rounded-full bg-white text-violet-600 font-bold text-lg hover:bg-violet-50 transition shadow-lg">
                Diskusi Sekarang →
            </a>
        </div>
    </section>

</x-layouts.app>
