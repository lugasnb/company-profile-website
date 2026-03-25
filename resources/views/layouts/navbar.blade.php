<nav class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-md shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">

            {{-- LOGO --}}
            <a href="{{ route('home') }}" class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-violet-500 to-pink-500"></div>
                <span class="text-xl font-bold bg-gradient-to-r from-violet-600 to-pink-500 bg-clip-text text-transparent">
                    NexaStudio
                </span>
            </a>

            {{-- MENU DESKTOP --}}
            <div class="hidden md:flex items-center gap-8">
                <a href="{{ route('home') }}" class="text-gray-600 hover:text-violet-600 font-medium transition">Home</a>
                <a href="{{ route('about') }}" class="text-gray-600 hover:text-violet-600 font-medium transition">About</a>
                <a href="{{ route('services') }}" class="text-gray-600 hover:text-violet-600 font-medium transition">Services</a>
                <a href="{{ route('portfolio') }}" class="text-gray-600 hover:text-violet-600 font-medium transition">Portfolio</a>
                <a href="{{ route('blog') }}" class="text-gray-600 hover:text-violet-600 font-medium transition">Blog</a>
                <a href="{{ route('contact') }}" class="px-4 py-2 rounded-full bg-gradient-to-r from-violet-600 to-pink-500 text-white font-medium hover:opacity-90 transition">
                    Contact Us
                </a>
            </div>

            {{-- HAMBURGER MOBILE --}}
            <button
                x-data="{ open: false }"
                @click="open = !open"
                class="md:hidden p-2 rounded-lg text-gray-600 hover:bg-gray-100"
            >
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>

        </div>
    </div>
</nav>

{{-- SPACER agar konten tidak tertutup navbar --}}
<div class="h-16"></div>