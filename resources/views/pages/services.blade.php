<x-layouts.app title="Services — NexaStudio">

    {{-- HERO SERVICES --}}
    <section class="relative py-24 bg-gradient-to-br from-violet-50 via-white to-pink-50 overflow-hidden">
        <div class="absolute top-10 right-10 w-64 h-64 bg-violet-200 rounded-full mix-blend-multiply filter blur-xl opacity-60 animate-pulse"></div>
        <div class="absolute bottom-10 left-10 w-64 h-64 bg-pink-200 rounded-full mix-blend-multiply filter blur-xl opacity-60 animate-pulse"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 bg-violet-100 text-violet-700 px-4 py-2 rounded-full text-sm font-medium mb-6">
                <span class="w-2 h-2 bg-violet-500 rounded-full animate-pulse"></span>
                Layanan Kami
            </div>
            <h1 class="text-5xl md:text-6xl font-extrabold text-gray-900 mb-6">
                Solusi Digital
                <span class="bg-gradient-to-r from-violet-600 to-pink-500 bg-clip-text text-transparent">
                    Terlengkap
                </span>
            </h1>
            <p class="text-xl text-gray-500 max-w-2xl mx-auto leading-relaxed">
                Kami menyediakan berbagai layanan digital untuk membantu bisnis Anda berkembang dan bersaing di era modern.
            </p>
        </div>
    </section>

    {{-- SERVICES LIST --}}
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ([
                    [
                        'emoji' => '🌐',
                        'title' => 'Web Development',
                        'color' => 'from-violet-500 to-purple-600',
                        'bg' => 'hover:border-violet-200 hover:shadow-violet-100',
                        'desc' => 'Website profesional, cepat, dan SEO-friendly menggunakan teknologi terkini seperti Laravel, React, dan Vue.js.',
                        'features' => ['Company Profile', 'Landing Page', 'E-Commerce', 'Web App'],
                    ],
                    [
                        'emoji' => '🎨',
                        'title' => 'UI/UX Design',
                        'color' => 'from-pink-500 to-rose-500',
                        'bg' => 'hover:border-pink-200 hover:shadow-pink-100',
                        'desc' => 'Desain interface yang indah, intuitif, dan berfokus pada pengalaman pengguna yang menyenangkan.',
                        'features' => ['Wireframing', 'Prototyping', 'Design System', 'User Research'],
                    ],
                    [
                        'emoji' => '📱',
                        'title' => 'Mobile App',
                        'color' => 'from-blue-500 to-violet-500',
                        'bg' => 'hover:border-blue-200 hover:shadow-blue-100',
                        'desc' => 'Aplikasi mobile Android & iOS yang powerful, ringan, dan mudah digunakan oleh pengguna.',
                        'features' => ['Android App', 'iOS App', 'Flutter', 'React Native'],
                    ],
                    [
                        'emoji' => '📈',
                        'title' => 'Digital Marketing',
                        'color' => 'from-green-500 to-teal-500',
                        'bg' => 'hover:border-green-200 hover:shadow-green-100',
                        'desc' => 'Strategi pemasaran digital yang efektif untuk meningkatkan brand awareness dan konversi bisnis Anda.',
                        'features' => ['SEO', 'Social Media', 'Google Ads', 'Content Marketing'],
                    ],
                    [
                        'emoji' => '🛒',
                        'title' => 'E-Commerce',
                        'color' => 'from-yellow-500 to-orange-500',
                        'bg' => 'hover:border-yellow-200 hover:shadow-yellow-100',
                        'desc' => 'Toko online yang lengkap dengan fitur manajemen produk, pembayaran, dan pengiriman terintegrasi.',
                        'features' => ['Toko Online', 'Payment Gateway', 'Manajemen Stok', 'Laporan Penjualan'],
                    ],
                    [
                        'emoji' => '🔧',
                        'title' => 'Maintenance & Support',
                        'color' => 'from-gray-600 to-gray-800',
                        'bg' => 'hover:border-gray-200 hover:shadow-gray-100',
                        'desc' => 'Layanan pemeliharaan dan dukungan teknis untuk memastikan website dan aplikasi Anda selalu berjalan optimal.',
                        'features' => ['Bug Fixing', 'Update Berkala', 'Backup Data', 'Monitoring'],
                    ],
                ] as $service)
                <div class="group p-8 rounded-2xl border-2 border-gray-100 {{ $service['bg'] }} hover:shadow-xl transition-all duration-300">
                    <div class="w-14 h-14 rounded-xl bg-gradient-to-br {{ $service['color'] }} flex items-center justify-center text-2xl mb-6">
                        {{ $service['emoji'] }}
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ $service['title'] }}</h3>
                    <p class="text-gray-500 leading-relaxed mb-6">{{ $service['desc'] }}</p>
                    <ul class="space-y-2">
                        @foreach ($service['features'] as $feature)
                        <li class="flex items-center gap-2 text-sm text-gray-600">
                            <span class="w-1.5 h-1.5 rounded-full bg-gradient-to-r {{ $service['color'] }}"></span>
                            {{ $feature }}
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- PRICING SECTION --}}
    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Paket Harga</h2>
                <p class="text-gray-500 text-lg">Pilih paket yang sesuai dengan kebutuhan bisnis Anda</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ([
                    [
                        'name' => 'Starter',
                        'price' => '2.5',
                        'color' => 'border-gray-200',
                        'btn' => 'border-2 border-violet-600 text-violet-600 hover:bg-violet-600 hover:text-white',
                        'popular' => false,
                        'features' => ['1 Halaman Landing Page', 'Desain Responsif', 'Form Kontak', 'SEO Basic', '1 Bulan Support'],
                    ],
                    [
                        'name' => 'Professional',
                        'price' => '7.5',
                        'color' => 'border-violet-500 ring-4 ring-violet-100',
                        'btn' => 'bg-gradient-to-r from-violet-600 to-pink-500 text-white hover:opacity-90',
                        'popular' => true,
                        'features' => ['5 Halaman Website', 'Desain Custom', 'CMS Admin Panel', 'SEO Advanced', 'Integrasi Media Sosial', '3 Bulan Support'],
                    ],
                    [
                        'name' => 'Enterprise',
                        'price' => '15',
                        'color' => 'border-gray-200',
                        'btn' => 'border-2 border-violet-600 text-violet-600 hover:bg-violet-600 hover:text-white',
                        'popular' => false,
                        'features' => ['Unlimited Halaman', 'Desain Premium', 'E-Commerce Lengkap', 'Mobile App', 'SEO & Marketing', '12 Bulan Support'],
                    ],
                ] as $plan)
                <div class="relative p-8 rounded-2xl bg-white border-2 {{ $plan['color'] }} transition-all duration-300">
                    @if ($plan['popular'])
                    <div class="absolute -top-4 left-1/2 -translate-x-1/2 px-4 py-1 rounded-full bg-gradient-to-r from-violet-600 to-pink-500 text-white text-sm font-semibold">
                        Most Popular
                    </div>
                    @endif

                    <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $plan['name'] }}</h3>
                    <div class="flex items-end gap-1 mb-6">
                        <span class="text-4xl font-extrabold text-gray-900">{{ $plan['price'] }}jt</span>
                        <span class="text-gray-500 mb-1">/project</span>
                    </div>

                    <ul class="space-y-3 mb-8">
                        @foreach ($plan['features'] as $feature)
                        <li class="flex items-center gap-3 text-gray-600">
                            <span class="text-violet-500">✓</span>
                            {{ $feature }}
                        </li>
                        @endforeach
                    </ul>

                    <a href="{{ route('contact') }}"
                        class="block text-center px-6 py-3 rounded-full font-semibold transition {{ $plan['btn'] }}">
                        Mulai Sekarang
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="py-24 bg-gradient-to-r from-violet-600 to-pink-500">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-extrabold text-white mb-6">Tidak Menemukan Yang Anda Cari?</h2>
            <p class="text-violet-100 text-lg mb-10">Hubungi kami untuk mendiskusikan kebutuhan khusus Anda. Kami siap membuat solusi yang tepat!</p>
            <a href="{{ route('contact') }}"
                class="px-8 py-4 rounded-full bg-white text-violet-600 font-bold text-lg hover:bg-violet-50 transition shadow-lg">
                Konsultasi Gratis →
            </a>
        </div>
    </section>

</x-layouts.app>