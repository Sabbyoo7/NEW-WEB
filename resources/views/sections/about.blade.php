<section id="about" class="py-24 bg-gradient-to-br from-gray-50 via-blue-50 to-indigo-50 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0">
        <div class="absolute top-20 left-20 w-32 h-32 bg-gradient-to-r from-orange-400/20 to-red-500/20 rounded-full blur-xl animate-pulse"></div>
        <div class="absolute bottom-20 right-20 w-48 h-48 bg-gradient-to-r from-blue-400/20 to-purple-500/20 rounded-full blur-xl animate-pulse-slow"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-20">
            <div class="inline-flex items-center bg-gradient-to-r from-orange-500/20 to-red-500/20 backdrop-blur-sm rounded-full px-6 py-3 mb-6 border border-orange-400/30">
                <svg class="w-5 h-5 text-orange-500 mr-2 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3l14 9-14 9V3z"></path>
                </svg>
                <span class="font-bold text-orange-600">About Our Company</span>
            </div>
            <h2 class="text-5xl lg:text-6xl font-black mb-6">
                <span class="bg-gradient-to-r from-slate-800 via-blue-900 to-indigo-900 bg-clip-text text-transparent">
                    SUNSHINE INDUSTRIES
                </span>
            </h2>
            <p class="text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                Leading the plastic manufacturing industry with innovation, quality, and sustainability at our core
            </p>
        </div>

        <!-- Main Content -->
        <div class="grid lg:grid-cols-2 gap-16 mb-20">
            <div class="space-y-8">
                <div class="relative">
                    <h3 class="text-3xl font-bold text-gray-900 mb-6 flex items-center">
                        Who We Are
                        <svg class="w-8 h-8 ml-3 text-yellow-500 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                    </h3>
                </div>
                <div class="space-y-6 text-gray-600 text-lg leading-relaxed">
                    <p>
                        We are a leading manufacturer specializing in high-quality plastic products that cater to a diverse range of industries and applications. Whether it's enhancing the comfort and style of your home with our durable plastic household products and furniture, or providing reliable, high-performance solutions for industrial applications, we are committed to delivering products that offer both innovation and value.
                    </p>
                    <p>
                        Our product portfolio includes everything from functional household essentials and stylish plastic furniture to robust industrial components designed to withstand the demands of commercial and manufacturing environments. Each item is crafted with precision, using sustainable materials and advanced manufacturing techniques.
                    </p>
                </div>
                
                <!-- Key Features -->
                <div class="grid grid-cols-2 gap-6 mt-10">
                    @php
                    $keyFeatures = [
                        ['text' => 'ISO 9001:2015 Certified', 'icon' => 'M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z', 'color' => 'from-blue-500 to-blue-600'],
                        ['text' => 'Eco-Friendly Production', 'icon' => 'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15', 'color' => 'from-green-500 to-green-600'],
                        ['text' => 'Advanced Technology', 'icon' => 'M13 10V3L4 14h7v7l9-11h-7z', 'color' => 'from-purple-500 to-purple-600'],
                        ['text' => 'Quality Assurance', 'icon' => 'M9 12l2 2 4-4m6-2a9 9 0 11-18 0 9 9 0 0118 0z', 'color' => 'from-orange-500 to-orange-600']
                    ];
                    @endphp
                    
                    @foreach($keyFeatures as $feature)
                    <div class="group flex items-center space-x-4 bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105 border border-gray-100">
                        <div class="w-12 h-12 bg-gradient-to-r {{ $feature['color'] }} rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $feature['icon'] }}"></path>
                            </svg>
                        </div>
                        <span class="text-gray-800 font-semibold text-lg">{{ $feature['text'] }}</span>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="space-y-8">
                <!-- Vision -->
                <div class="group bg-gradient-to-br from-white to-blue-50 rounded-3xl p-10 shadow-2xl hover:shadow-3xl transition-all duration-300 transform hover:-translate-y-2 border border-blue-100">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-3xl font-bold text-gray-900">Our Vision</h3>
                            <svg class="w-6 h-6 text-blue-500 animate-pulse mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3l14 9-14 9V3z"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-700 leading-relaxed text-lg">
                        To be the leading manufacturer of sustainable, high-quality plastic consumer goods that enhance daily living, while reducing environmental impact through innovation and responsible production practices.
                    </p>
                </div>

                <!-- Mission -->
                <div class="group bg-gradient-to-br from-white to-orange-50 rounded-3xl p-10 shadow-2xl hover:shadow-3xl transition-all duration-300 transform hover:-translate-y-2 border border-orange-100">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-r from-orange-500 to-red-600 rounded-2xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-3xl font-bold text-gray-900">Our Mission</h3>
                            <svg class="w-6 h-6 text-orange-500 animate-spin mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-700 leading-relaxed text-lg">
                        Our mission is to design and manufacture plastic consumer products that combine functionality, aesthetics, sustainability and affordability. We strive to exceed customer expectations through efficient production, consistent quality, and a commitment to continuous improvement.
                    </p>
                </div>
            </div>
        </div>

        <!-- Values -->
        <div class="grid md:grid-cols-3 gap-10">
            @php
            $values = [
                [
                    'icon' => 'M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z',
                    'title' => 'Quality Excellence',
                    'description' => 'Committed to delivering products that meet the highest industry standards with rigorous quality control.',
                    'color' => 'from-blue-500 to-blue-600',
                    'bgColor' => 'from-blue-50 to-blue-100'
                ],
                [
                    'icon' => 'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15',
                    'title' => 'Sustainability',
                    'description' => 'Dedicated to eco-friendly practices and reducing environmental impact through responsible manufacturing.',
                    'color' => 'from-green-500 to-green-600',
                    'bgColor' => 'from-green-50 to-green-100'
                ],
                [
                    'icon' => 'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z',
                    'title' => 'Customer Focus',
                    'description' => 'Putting customer satisfaction at the heart of everything we do with personalized service and support.',
                    'color' => 'from-orange-500 to-orange-600',
                    'bgColor' => 'from-orange-50 to-orange-100'
                ]
            ];
            @endphp
            
            @foreach($values as $value)
            <div class="group text-center">
                <div class="relative bg-gradient-to-br {{ $value['bgColor'] }} rounded-3xl p-10 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-3 border border-gray-200">
                    <div class="absolute top-6 right-6">
                        <svg class="w-6 h-6 text-yellow-500 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3l14 9-14 9V3z"></path>
                        </svg>
                    </div>
                    <div class="w-20 h-20 bg-gradient-to-br {{ $value['color'] }} rounded-3xl flex items-center justify-center mx-auto mb-8 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $value['icon'] }}"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ $value['title'] }}</h3>
                    <p class="text-gray-600 text-lg leading-relaxed">{{ $value['description'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>