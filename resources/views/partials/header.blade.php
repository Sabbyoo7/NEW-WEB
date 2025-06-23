<!-- Top Contact Bar -->
<div class="bg-gradient-to-r from-slate-900 via-blue-900 to-indigo-900 text-white py-3 px-4 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-blue-600/20 to-purple-600/20"></div>
    <div class="relative max-w-7xl mx-auto flex flex-wrap justify-between items-center text-sm">
        <div class="flex items-center space-x-6">
            <div class="flex items-center space-x-2 bg-white/10 backdrop-blur-sm rounded-full px-3 py-1">
                <svg class="w-4 h-4 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                <span class="font-medium">sunshineindustries99@gmail.com</span>
            </div>
        </div>
        <div class="flex items-center space-x-2 bg-white/10 backdrop-blur-sm rounded-full px-3 py-1">
            <svg class="w-4 h-4 text-orange-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            <span class="font-medium">Gondia, Maharashtra</span>
        </div>
    </div>
</div>

<!-- Main Header -->
<header id="main-header" class="fixed w-full z-50 transition-all duration-500 bg-white/90 backdrop-blur-lg py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
            <!-- Company Name -->
            <div class="flex items-center group cursor-pointer" onclick="scrollToSection('home')">
                <div class="relative">
                    <h1 class="text-4xl lg:text-5xl font-black bg-gradient-to-r from-slate-800 via-blue-900 to-indigo-900 bg-clip-text text-transparent tracking-tight group-hover:scale-105 transition-transform duration-300">
                        SUNSHINE
                    </h1>
                    <div class="flex items-center space-x-2">
                        <p class="text-xl font-bold bg-gradient-to-r from-orange-500 to-red-500 bg-clip-text text-transparent tracking-wider group-hover:from-orange-400 group-hover:to-pink-500 transition-all duration-300">
                            INDUSTRIES
                        </p>
                        <div class="flex space-x-1">
                            <div class="w-2 h-2 bg-gradient-to-r from-orange-400 to-red-500 rounded-full animate-pulse"></div>
                            <svg class="w-4 h-4 text-yellow-500 animate-spin group-hover:text-orange-500 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3l14 9-14 9V3z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex space-x-1">
                @foreach(['Home', 'About', 'Products', 'Infrastructure', 'Contact'] as $item)
                <button onclick="scrollToSection('{{ strtolower($item) }}')" class="relative px-6 py-3 text-gray-700 hover:text-white font-semibold transition-all duration-300 rounded-xl group overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-r from-orange-500 to-red-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left rounded-xl"></div>
                    <span class="relative z-10">{{ $item }}</span>
                </button>
                @endforeach
            </nav>

            <!-- CTA Button -->
            <div class="hidden md:block">
                <button onclick="scrollToSection('contact')" class="relative group overflow-hidden bg-gradient-to-r from-orange-500 via-red-500 to-pink-500 text-white px-8 py-4 rounded-2xl font-bold shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
                    <div class="absolute inset-0 bg-gradient-to-r from-pink-500 via-red-500 to-orange-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <span class="relative z-10 flex items-center">
                        Get Quote
                        <svg class="w-4 h-4 ml-2 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3l14 9-14 9V3z"></path>
                        </svg>
                    </span>
                </button>
            </div>

            <!-- Mobile Menu Button -->
            <button onclick="toggleMobileMenu()" class="md:hidden p-3 rounded-xl bg-gradient-to-r from-orange-500 to-red-500 text-white hover:shadow-lg transform hover:scale-105 transition-all duration-200">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white/95 backdrop-blur-xl border-t border-gray-200/50 shadow-2xl">
        <div class="px-4 py-6 space-y-3">
            @foreach(['Home', 'About', 'Products', 'Infrastructure', 'Contact'] as $item)
            <button onclick="scrollToSection('{{ strtolower($item) }}'); toggleMobileMenu();" class="block w-full text-left px-6 py-4 text-gray-700 hover:text-white font-semibold rounded-xl transition-all duration-300 hover:bg-gradient-to-r hover:from-orange-500 hover:to-red-500 hover:shadow-lg transform hover:scale-105">
                {{ $item }}
            </button>
            @endforeach
            <button onclick="scrollToSection('contact'); toggleMobileMenu();" class="w-full bg-gradient-to-r from-orange-500 to-red-500 text-white px-6 py-4 rounded-xl font-bold mt-4 shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 flex items-center justify-center">
                Get Quote
                <svg class="w-4 h-4 ml-2 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3l14 9-14 9V3z"></path>
                </svg>
            </button>
        </div>
    </div>
</header>