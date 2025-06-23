@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <!-- Enhanced Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-blue-900 to-indigo-900"></div>
    <div class="absolute inset-0 bg-gradient-to-tr from-orange-500/20 via-red-500/10 to-pink-500/20"></div>
    
    <!-- Animated background elements -->
    <div class="absolute inset-0">
        <div class="absolute top-20 left-10 w-32 h-32 bg-gradient-to-r from-orange-400/30 to-pink-500/30 rounded-full blur-xl animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-48 h-48 bg-gradient-to-r from-blue-400/20 to-purple-500/20 rounded-full blur-xl animate-pulse-slow"></div>
        <div class="absolute top-1/2 left-1/4 w-24 h-24 bg-gradient-to-r from-yellow-400/20 to-orange-500/20 rounded-full blur-xl animate-pulse"></div>
        <div class="absolute top-1/3 right-1/3 w-16 h-16 bg-gradient-to-r from-pink-400/30 to-red-500/30 rounded-full blur-xl animate-pulse"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Content -->
            <div class="text-white space-y-8 fade-in-up">
                <div class="space-y-6">
                    <div class="inline-flex items-center bg-gradient-to-r from-orange-500/20 to-red-500/20 backdrop-blur-sm rounded-full px-6 py-3 text-sm font-bold border border-orange-400/30">
                        <svg class="w-5 h-5 mr-3 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                        </svg>
                        <span class="bg-gradient-to-r from-orange-300 to-yellow-300 bg-clip-text text-transparent">
                            ISO 9001:2015 Certified Excellence
                        </span>
                        <svg class="w-4 h-4 ml-3 text-yellow-400 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3l14 9-14 9V3z"></path>
                        </svg>
                    </div>
                    
                    <div class="relative">
                        <h1 class="text-6xl lg:text-8xl font-black leading-tight">
                            <span class="block bg-gradient-to-r from-white via-blue-100 to-indigo-200 bg-clip-text text-transparent">
                                SUNSHINE
                            </span>
                            <span class="block bg-gradient-to-r from-orange-400 via-red-500 to-pink-500 bg-clip-text text-transparent animate-pulse">
                                INDUSTRIES
                            </span>
                        </h1>
                        <div class="absolute -top-4 -right-4 w-8 h-8 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full animate-bounce">
                            <svg class="w-8 h-8 text-white p-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="relative">
                        <h2 class="text-3xl lg:text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-200 to-purple-200 mb-4">
                            Premium Plastic Products
                        </h2>
                        <p class="text-xl text-blue-100 leading-relaxed max-w-2xl">
                            Leading manufacturer of high-quality plastic household goods, furniture, and industrial products. 
                            Combining innovation, sustainability, and excellence in every product we create.
                        </p>
                    </div>
                </div>

                <!-- Dealership Information -->
                <div class="relative group">
                    <div class="absolute inset-0 bg-gradient-to-r from-orange-500/30 to-red-500/30 rounded-3xl blur-lg group-hover:blur-xl transition-all duration-300"></div>
                    <div class="relative bg-gradient-to-r from-orange-500/20 to-red-500/20 backdrop-blur-sm rounded-3xl p-8 border border-orange-400/30 hover:border-orange-400/50 transition-all duration-300">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-r from-orange-400 to-red-500 rounded-2xl flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-white flex items-center">
                                    Apply for Dealership
                                    <svg class="w-6 h-6 ml-2 text-yellow-400 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </h3>
                                <p class="text-orange-200 text-sm">Join our growing network</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <a href="tel:+919890953585" class="group/phone flex items-center justify-center bg-gradient-to-r from-white/20 to-white/10 hover:from-white/30 hover:to-white/20 text-white px-6 py-4 rounded-2xl font-bold transition-all duration-300 hover:scale-105 hover:shadow-xl border border-white/20 hover:border-white/40">
                                <svg class="w-5 h-5 mr-3 group-hover/phone:animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                <span class="text-lg">9890953585</span>
                            </a>
                            <a href="tel:+917498708181" class="group/phone flex items-center justify-center bg-gradient-to-r from-white/20 to-white/10 hover:from-white/30 hover:to-white/20 text-white px-6 py-4 rounded-2xl font-bold transition-all duration-300 hover:scale-105 hover:shadow-xl border border-white/20 hover:border-white/40">
                                <svg class="w-5 h-5 mr-3 group-hover/phone:animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                <span class="text-lg">7498708181</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-3 gap-6">
                    <div class="text-center group">
                        <div class="relative">
                            <div class="text-4xl font-black bg-gradient-to-r from-orange-400 to-red-500 bg-clip-text text-transparent group-hover:scale-110 transition-transform duration-300">
                                25+
                            </div>
                            <svg class="absolute -top-2 -right-2 w-4 h-4 text-yellow-400 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3l14 9-14 9V3z"></path>
                            </svg>
                        </div>
                        <div class="text-sm text-blue-200 font-semibold">Years Experience</div>
                    </div>
                    <div class="text-center group">
                        <div class="relative">
                            <div class="text-4xl font-black bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent group-hover:scale-110 transition-transform duration-300">
                                500+
                            </div>
                            <svg class="absolute -top-2 -right-2 w-4 h-4 text-yellow-400 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                            </svg>
                        </div>
                        <div class="text-sm text-blue-200 font-semibold">Products</div>
                    </div>
                    <div class="text-center group">
                        <div class="relative">
                            <div class="text-4xl font-black bg-gradient-to-r from-green-400 to-blue-500 bg-clip-text text-transparent group-hover:scale-110 transition-transform duration-300">
                                100%
                            </div>
                            <svg class="absolute -top-2 -right-2 w-4 h-4 text-yellow-400 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                            </svg>
                        </div>
                        <div class="text-sm text-blue-200 font-semibold">Quality Assured</div>
                    </div>
                </div>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-6">
                    <button onclick="scrollToSection('products')" class="group relative overflow-hidden bg-gradient-to-r from-orange-500 via-red-500 to-pink-500 text-white px-10 py-5 rounded-2xl font-bold hover:shadow-2xl transform hover:scale-105 transition-all duration-300 flex items-center justify-center">
                        <div class="absolute inset-0 bg-gradient-to-r from-pink-500 via-red-500 to-orange-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <span class="relative z-10 flex items-center text-lg">
                            Explore Products
                            <svg class="w-6 h-6 ml-3 group-hover:translate-x-2 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </span>
                    </button>
                    <button onclick="scrollToSection('contact')" class="group border-2 border-white/50 hover:border-white text-white hover:bg-white hover:text-slate-900 px-10 py-5 rounded-2xl font-bold transition-all duration-300 backdrop-blur-sm hover:shadow-xl transform hover:scale-105">
                        <span class="flex items-center text-lg">
                            Get Quote
                            <svg class="w-5 h-5 ml-3 group-hover:animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3l14 9-14 9V3z"></path>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>

            <!-- Features Grid -->
            <div class="grid grid-cols-2 gap-6 fade-in-up">
                @php
                $features = [
                    ['icon' => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z', 'title' => 'Advanced Manufacturing', 'desc' => 'State-of-the-art injection molding technology', 'color' => 'from-blue-400 to-purple-500'],
                    ['icon' => 'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15', 'title' => 'Eco-Friendly', 'desc' => 'Sustainable materials and processes', 'color' => 'from-green-400 to-blue-500'],
                    ['icon' => 'M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z', 'title' => 'Quality Certified', 'desc' => 'ISO 9001:2015 certified processes', 'color' => 'from-yellow-400 to-orange-500'],
                    ['icon' => 'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z', 'title' => 'Customer Focus', 'desc' => 'Dedicated to customer satisfaction', 'color' => 'from-pink-400 to-red-500']
                ];
                @endphp
                
                @foreach($features as $feature)
                <div class="group bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-sm rounded-3xl p-8 hover:from-white/20 hover:to-white/10 transition-all duration-300 transform hover:scale-105 border border-white/20 hover:border-white/40">
                    <div class="w-16 h-16 bg-gradient-to-r {{ $feature['color'] }} rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $feature['icon'] }}"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">{{ $feature['title'] }}</h3>
                    <p class="text-blue-100">{{ $feature['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@include('sections.about')
@include('sections.products')
@include('sections.infrastructure')
@include('sections.contact')
@endsection