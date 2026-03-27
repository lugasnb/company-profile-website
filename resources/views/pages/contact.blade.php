<x-layouts.app title="Contact — NexaStudio">

    {{-- HERO CONTACT --}}
    <section class="relative py-24 bg-gradient-to-br from-violet-50 via-white to-pink-50 overflow-hidden">
        <div class="absolute top-10 right-10 w-64 h-64 bg-violet-200 rounded-full mix-blend-multiply filter blur-xl opacity-60 animate-pulse"></div>
        <div class="absolute bottom-10 left-10 w-64 h-64 bg-pink-200 rounded-full mix-blend-multiply filter blur-xl opacity-60 animate-pulse"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 bg-violet-100 text-violet-700 px-4 py-2 rounded-full text-sm font-medium mb-6">
                <span class="w-2 h-2 bg-violet-500 rounded-full animate-pulse"></span>
                Hubungi Kami
            </div>
            <h1 class="text-5xl md:text-6xl font-extrabold text-gray-900 mb-6">
                Mari
                <span class="bg-gradient-to-r from-violet-600 to-pink-500 bg-clip-text text-transparent">
                    Berkolaborasi
                </span>
            </h1>
            <p class="text-xl text-gray-500 max-w-2xl mx-auto leading-relaxed">
                Punya project atau pertanyaan? Kami siap mendengarkan dan membantu Anda mewujudkan ide menjadi kenyataan.
            </p>
        </div>
    </section>

    {{-- CONTACT SECTION --}}
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">

                {{-- INFO KONTAK --}}
                <div>
                    <h2 class="text-3xl font-extrabold text-gray-900 mb-8">Informasi Kontak</h2>

                    <div class="space-y-6 mb-12">
                        @foreach ([
                            ['icon' => '📧', 'label' => 'Email', 'value' => 'hello@nexastudio.com', 'color' => 'from-violet-500 to-purple-600'],
                            ['icon' => '📱', 'label' => 'WhatsApp', 'value' => '+62 812 3456 7890', 'color' => 'from-green-500 to-teal-500'],
                            ['icon' => '📍', 'label' => 'Alamat', 'value' => 'Jl. Sudirman No. 123, Jakarta Pusat, DKI Jakarta 10220', 'color' => 'from-pink-500 to-rose-500'],
                            ['icon' => '🕐', 'label' => 'Jam Kerja', 'value' => 'Senin - Jumat, 09.00 - 18.00 WIB', 'color' => 'from-yellow-500 to-orange-500'],
                        ] as $info)
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-br {{ $info['color'] }} flex items-center justify-center text-xl flex-shrink-0">
                                {{ $info['icon'] }}
                            </div>
                            <div>
                                <div class="text-sm font-semibold text-gray-500 mb-1">{{ $info['label'] }}</div>
                                <div class="text-gray-900 font-medium">{{ $info['value'] }}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    {{-- Social Media --}}
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Ikuti Kami</h3>
                    <div class="flex gap-4">
                        @foreach ([
                            ['icon' => '📘', 'label' => 'Facebook', 'color' => 'hover:bg-blue-100 hover:text-blue-600'],
                            ['icon' => '📸', 'label' => 'Instagram', 'color' => 'hover:bg-pink-100 hover:text-pink-600'],
                            ['icon' => '🐦', 'label' => 'Twitter', 'color' => 'hover:bg-sky-100 hover:text-sky-600'],
                            ['icon' => '💼', 'label' => 'LinkedIn', 'color' => 'hover:bg-blue-100 hover:text-blue-700'],
                        ] as $social)
                        <a href="#"
                            class="w-12 h-12 rounded-xl border-2 border-gray-200 flex items-center justify-center text-xl {{ $social['color'] }} transition"
                            title="{{ $social['label'] }}">
                            {{ $social['icon'] }}
                        </a>
                        @endforeach
                    </div>

                    {{-- Map Placeholder --}}
                    <div class="mt-10 h-64 rounded-2xl bg-gradient-to-br from-violet-100 to-pink-100 flex items-center justify-center border-2 border-violet-100">
                        <div class="text-center">
                            <div class="text-5xl mb-3">🗺️</div>
                            <p class="text-gray-500 font-medium">Google Maps</p>
                            <p class="text-gray-400 text-sm">Jakarta, Indonesia</p>
                        </div>
                    </div>
                </div>

                {{-- FORM KONTAK --}}
                <div class="bg-gray-50 rounded-3xl p-10">
                    <h2 class="text-3xl font-extrabold text-gray-900 mb-2">Kirim Pesan</h2>
                    <p class="text-gray-500 mb-8">Isi form di bawah dan kami akan membalas dalam 1x24 jam.</p>

                    <form class="space-y-6">

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Nama Lengkap *</label>
                                <input
                                    type="text"
                                    placeholder="John Doe"
                                    class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-violet-400 focus:outline-none transition bg-white"
                                >
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Email *</label>
                                <input
                                    type="email"
                                    placeholder="john@email.com"
                                    class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-violet-400 focus:outline-none transition bg-white"
                                >
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">No. WhatsApp</label>
                            <input
                                type="text"
                                placeholder="+62 812 3456 7890"
                                class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-violet-400 focus:outline-none transition bg-white"
                            >
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Layanan yang Dibutuhkan</label>
                            <select class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-violet-400 focus:outline-none transition bg-white text-gray-700">
                                <option value="">Pilih layanan...</option>
                                <option>Web Development</option>
                                <option>UI/UX Design</option>
                                <option>Mobile App</option>
                                <option>Digital Marketing</option>
                                <option>E-Commerce</option>
                                <option>Lainnya</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Budget Estimasi</label>
                            <select class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-violet-400 focus:outline-none transition bg-white text-gray-700">
                                <option value="">Pilih range budget...</option>
                                <option>< Rp 5 Juta</option>
                                <option>Rp 5 - 15 Juta</option>
                                <option>Rp 15 - 50 Juta</option>
                                <option>> Rp 50 Juta</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Pesan *</label>
                            <textarea
                                rows="5"
                                placeholder="Ceritakan project atau kebutuhan Anda..."
                                class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-violet-400 focus:outline-none transition bg-white resize-none"
                            ></textarea>
                        </div>

                        <button
                            type="submit"
                            class="w-full py-4 rounded-xl bg-gradient-to-r from-violet-600 to-pink-500 text-white font-bold text-lg hover:opacity-90 transition shadow-lg shadow-violet-200">
                            Kirim Pesan 🚀
                        </button>

                    </form>
                </div>

            </div>
        </div>
    </section>

</x-layouts.app>
