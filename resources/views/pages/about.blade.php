<x-layouts.app title="About — NexaStudio">

    {{-- HERO ABOUT --}}
    <section class="relative py-24 bg-gradient-to-br from-violet-50 via-white to-pink-50 overflow-hidden">
        <div class="absolute top-10 right-10 w-64 h-64 bg-violet-200 rounded-full mix-blend-multiply filter blur-xl opacity-60 animate-pulse"></div>
        <div class="absolute bottom-10 left-10 w-64 h-64 bg-pink-200 rounded-full mix-blend-multiply filter blur-xl opacity-60 animate-pulse"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 bg-violet-100 text-violet-700 px-4 py-2 rounded-full text-sm font-medium mb-6">
                <span class="w-2 h-2 bg-violet-500 rounded-full animate-pulse"></span>
                Tentang Kami
            </div>
            <h1 class="text-5xl md:text-6xl font-extrabold text-gray-900 mb-6">
                Kami adalah
                <span class="bg-gradient-to-r from-violet-600 to-pink-500 bg-clip-text text-transparent">
                    NexaStudio
                </span>
            </h1>
            <p class="text-xl text-gray-500 max-w-2xl mx-auto leading-relaxed">
                Tim kreatif yang berdedikasi membantu bisnis Anda berkembang di era digital dengan solusi inovatif dan desain yang memukau.
            </p>
        </div>
    </section>

    {{-- STORY SECTION --}}
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">

                {{-- Gambar --}}
                <div class="relative">
                    <div class="w-full h-96 rounded-3xl bg-gradient-to-br from-violet-400 to-pink-400 flex items-center justify-center text-8xl">
                        🚀
                    </div>
                    <div class="absolute -bottom-6 -right-6 w-48 h-48 rounded-2xl bg-gradient-to-br from-yellow-400 to-pink-400 flex items-center justify-center text-5xl shadow-xl">
                        💡
                    </div>
                </div>

                {{-- Konten --}}
                <div>
                    <h2 class="text-4xl font-extrabold text-gray-900 mb-6">Cerita Kami</h2>
                    <p class="text-gray-500 leading-relaxed mb-6">
                        NexaStudio didirikan pada tahun 2019 dengan satu misi sederhana: membantu bisnis lokal Indonesia tampil profesional di dunia digital. Berawal dari sebuah tim kecil yang penuh semangat, kini kami telah berkembang menjadi agency digital terpercaya dengan portofolio lebih dari 50 project sukses.
                    </p>
                    <p class="text-gray-500 leading-relaxed mb-8">
                        Kami percaya bahwa setiap bisnis, besar maupun kecil, berhak mendapatkan kehadiran digital yang kuat dan berkesan. Itulah mengapa kami selalu menghadirkan solusi yang tidak hanya indah secara visual, tetapi juga efektif secara bisnis.
                    </p>
                    <div class="flex gap-4">
                        <a href="{{ route('contact') }}"
                            class="px-6 py-3 rounded-full bg-gradient-to-r from-violet-600 to-pink-500 text-white font-semibold hover:opacity-90 transition">
                            Hubungi Kami
                        </a>
                        <a href="{{ route('portfolio') }}"
                            class="px-6 py-3 rounded-full border-2 border-gray-200 text-gray-700 font-semibold hover:border-violet-400 hover:text-violet-600 transition">
                            Lihat Portfolio
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- VISI MISI --}}
    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Visi & Misi</h2>
                <p class="text-gray-500 text-lg">Yang mendorong kami setiap harinya</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="p-10 rounded-3xl bg-gradient-to-br from-violet-600 to-pink-500 text-white">
                    <div class="text-5xl mb-6">🎯</div>
                    <h3 class="text-2xl font-extrabold mb-4">Visi</h3>
                    <p class="leading-relaxed opacity-90">
                        Menjadi agency digital terdepan di Indonesia yang dikenal karena kreativitas, kualitas, dan dampak nyata bagi pertumbuhan bisnis klien kami.
                    </p>
                </div>

                <div class="p-10 rounded-3xl bg-white border-2 border-gray-100 shadow-lg">
                    <div class="text-5xl mb-6">💪</div>
                    <h3 class="text-2xl font-extrabold text-gray-900 mb-4">Misi</h3>
                    <ul class="space-y-3 text-gray-500">
                        <li class="flex items-start gap-3">
                            <span class="text-violet-500 font-bold mt-1">✓</span>
                            Menghadirkan solusi digital yang inovatif dan berkualitas tinggi
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-violet-500 font-bold mt-1">✓</span>
                            Membantu UMKM dan startup Indonesia go digital
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-violet-500 font-bold mt-1">✓</span>
                            Memberikan layanan terbaik dengan harga yang terjangkau
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-violet-500 font-bold mt-1">✓</span>
                            Terus berinovasi mengikuti perkembangan teknologi
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- TEAM SECTION --}}
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Tim Kami</h2>
                <p class="text-gray-500 text-lg">Orang-orang hebat di balik NexaStudio</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ([
                    ['name' => 'Andi Pratama', 'role' => 'CEO & Founder', 'emoji' => '👨‍💼', 'color' => 'from-violet-400 to-purple-500'],
                    ['name' => 'Sari Dewi', 'role' => 'Lead Designer', 'emoji' => '👩‍🎨', 'color' => 'from-pink-400 to-rose-500'],
                    ['name' => 'Budi Santoso', 'role' => 'Lead Developer', 'emoji' => '👨‍💻', 'color' => 'from-blue-400 to-violet-500'],
                ] as $member)
                <div class="text-center group">
                    <div class="w-32 h-32 rounded-3xl bg-gradient-to-br {{ $member['color'] }} flex items-center justify-center text-5xl mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        {{ $member['emoji'] }}
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-1">{{ $member['name'] }}</h3>
                    <p class="text-violet-500 font-medium">{{ $member['role'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

</x-layouts.app>
