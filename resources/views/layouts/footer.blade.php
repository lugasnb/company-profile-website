<footer class="bg-gray-900 text-gray-400 mt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            {{-- BRAND --}}
            <div>
                <div class="flex items-center gap-2 mb-4">
                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-violet-500 to-pink-500"></div>
                    <span class="text-xl font-bold text-white">NexaStudio</span>
                </div>
                <p class="text-sm leading-relaxed">
                    Creative digital agency yang membantu bisnis Anda berkembang di era digital.
                </p>
            </div>

            {{-- MENU --}}
            <div>
                <h4 class="text-white font-semibold mb-4">Menu</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('home') }}" class="hover:text-violet-400 transition">Home</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-violet-400 transition">About</a></li>
                    <li><a href="{{ route('services') }}" class="hover:text-violet-400 transition">Services</a></li>
                    <li><a href="{{ route('portfolio') }}" class="hover:text-violet-400 transition">Portfolio</a></li>
                    <li><a href="{{ route('blog') }}" class="hover:text-violet-400 transition">Blog</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-violet-400 transition">Contact</a></li>
                </ul>
            </div>

            {{-- KONTAK --}}
            <div>
                <h4 class="text-white font-semibold mb-4">Hubungi Kami</h4>
                <ul class="space-y-2 text-sm">
                    <li>📧 hello@nexastudio.com</li>
                    <li>📱 +62 812 3456 7890</li>
                    <li>📍 Jakarta, Indonesia</li>
                </ul>
            </div>

        </div>

        <div class="border-t border-gray-800 mt-10 pt-6 text-center text-sm">
            © {{ date('Y') }} NexaStudio. All rights reserved.
        </div>
    </div>
</footer>