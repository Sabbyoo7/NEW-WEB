<footer class="relative bg-gradient-to-br from-slate-900 via-blue-900 to-indigo-900 text-white overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0">
        <div class="absolute top-20 left-20 w-32 h-32 bg-gradient-to-r from-orange-500/20 to-red-500/20 rounded-full blur-xl animate-pulse"></div>
        <div class="absolute bottom-20 right-20 w-48 h-48 bg-gradient-to-r from-blue-500/20 to-purple-500/20 rounded-full blur-xl animate-pulse-slow"></div>
        <div class="absolute top-1/2 left-1/3 w-24 h-24 bg-gradient-to-r from-pink-500/20 to-orange-500/20 rounded-full blur-xl animate-pulse"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-12">
            <!-- Company Info -->
            <div class="space-y-8">
                <div class="group">
                    <div class="relative">
                        <h3 class="text-4xl font-black bg-gradient-to-r from-white to-blue-200 bg-clip-text text-transparent tracking-tight group-hover:scale-105 transition-transform duration-300">
                            SUNSHINE
                        </h3>
                        <div class="flex items-center space-x-2">
                            <p class="text-xl font-bold bg-gradient-to-r from-orange-400 to-red-500 bg-clip-text text-transparent tracking-wide group-hover:from-orange-300 group-hover:to-pink-400 transition-all duration-300">
                                INDUSTRIES
                            </p>
                            <svg class="w-4 h-4 text-yellow-400 animate-spin group-hover:text-orange-400 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3l14 9-14 9V3z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                
                <p class="text-blue-100 leading-relaxed text-lg">
                    Leading manufacturer of premium plastic products, committed to quality, innovation, and sustainability.
                </p>
                
                <div class="flex items-center space-x-3 bg-gradient-to-r from-orange-500/20 to-red-500/20 backdrop-blur-sm rounded-full px-4 py-3 border border-orange-400/30 hover:border-orange-400/50 transition-all duration-300 group">
                    <svg class="w-6 h-6 text-orange-400 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                    </svg>
                    <span class="font-bold text-orange-200">ISO 9001:2015 Certified</span>
                    <svg class="w-4 h-4 text-yellow-400 animate-spin group-hover:animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                    </svg>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-2xl font-bold mb-8 bg-gradient-to-r from-white to-blue-200 bg-clip-text text-transparent">
                    Quick Links
                </h4>
                <ul class="space-y-4">
                    @foreach(['Home', 'About', 'Products', 'Infrastructure', 'Contact'] as $item)
                    <li>
                        <button onclick="scrollToSection('{{ strtolower($item) }}')" class="group flex items-center text-blue-200 hover:text-white transition-all duration-300 text-lg font-medium">
                            <div class="w-2 h-2 bg-gradient-to-r from-orange-400 to-red-500 rounded-full mr-3 group-hover:scale-150 transition-transform duration-300"></div>
                            {{ $item }}
                        </button>
                    </li>
                    @endforeach
                </ul>
            </div>

            <!-- Products -->
            <div>
                <h4 class="text-2xl font-bold mb-8 bg-gradient-to-r from-white to-blue-200 bg-clip-text text-transparent">
                    Our Products
                </h4>
                <ul class="space-y-4 text-blue-200">
                    @foreach(['Household Products', 'Plastic Furniture', 'Industrial Products', 'Waste Management', 'Custom Solutions'] as $item)
                    <li class="group flex items-center text-lg">
                        <div class="w-2 h-2 bg-gradient-to-r from-blue-400 to-purple-500 rounded-full mr-3 group-hover:scale-150 transition-transform duration-300"></div>
                        {{ $item }}
                    </li>
                    @endforeach
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h4 class="text-2xl font-bold mb-8 bg-gradient-to-r from-white to-blue-200 bg-clip-text text-transparent">
                    Contact Info
                </h4>
                <div class="space-y-6">
                    <div class="group flex items-start space-x-4 p-4 bg-gradient-to-r from-white/5 to-white/10 rounded-2xl hover:from-white/10 hover:to-white/15 transition-all duration-300 border border-white/10 hover:border-white/20">
                        <svg class="w-6 h-6 text-orange-400 mt-1 flex-shrink-0 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <div>
                            <p class="text-white font-semibold text-lg">+91-9371636220</p>
                            <p class="text-blue-200">+91-9890953585</p>
                        </div>
                    </div>
                    
                    <div class="group flex items-start space-x-4 p-4 bg-gradient-to-r from-white/5 to-white/10 rounded-2xl hover:from-white/10 hover:to-white/15 transition-all duration-300 border border-white/10 hover:border-white/20">
                        <svg class="w-6 h-6 text-blue-400 mt-1 flex-shrink-0 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <p class="text-blue-200 font-medium">sunshineindustries99@gmail.com</p>
                    </div>
                    
                    <div class="group flex items-start space-x-4 p-4 bg-gradient-to-r from-white/5 to-white/10 rounded-2xl hover:from-white/10 hover:to-white/15 transition-all duration-300 border border-white/10 hover:border-white/20">
                        <svg class="w-6 h-6 text-green-400 mt-1 flex-shrink-0 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9"></path>
                        </svg>
                        <p class="text-blue-200 font-medium">www.shineplastindia.com</p>
                    </div>
                    
                    <div class="group flex items-start space-x-4 p-4 bg-gradient-to-r from-white/5 to-white/10 rounded-2xl hover:from-white/10 hover:to-white/15 transition-all duration-300 border border-white/10 hover:border-white/20">
                        <svg class="w-6 h-6 text-purple-400 mt-1 flex-shrink-0 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <div>
                            <p class="text-white font-semibold mb-2">Head Office & Factory:</p>
                            <p class="text-blue-200 text-sm leading-relaxed">
                                Plot No. B-7, MIDC, Mundipar<br>
                                GONDIA, Maharashtra - 441614
                            </p>
                            <p class="text-white font-semibold mt-4 mb-2">Branch Offices:</p>
                            <p class="text-blue-200 text-sm">Raipur, Chhattisgarh</p>
                            <p class="text-blue-200 text-sm">Nagpur, Maharashtra</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="border-t border-white/20 mt-16 pt-12">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-6 md:space-y-0">
                <div class="flex items-center space-x-4">
                    <p class="text-blue-200 text-lg">
                        © 2024 <span class="font-bold bg-gradient-to-r from-orange-400 to-red-500 bg-clip-text text-transparent">Sunshine Industries</span>. All rights reserved.
                    </p>
                </div>
                <div class="flex items-center space-x-3 bg-gradient-to-r from-orange-500/20 to-red-500/20 backdrop-blur-sm rounded-full px-6 py-3 border border-orange-400/30 hover:border-orange-400/50 transition-all duration-300 group">
                    <svg class="w-5 h-5 text-yellow-400 animate-spin group-hover:animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                    </svg>
                    <span class="text-orange-200 font-bold">Manufacturers of Premium Plastic Products</span>
                    <svg class="w-4 h-4 text-yellow-400 animate-pulse group-hover:animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3l14 9-14 9V3z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</footer>