<section id="products" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Product Range</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Comprehensive collection of high-quality plastic products for household, industrial, and commercial applications
            </p>
        </div>

        <!-- Product Image Slider -->
        <div class="mb-20">
            <div class="relative max-w-6xl mx-auto">
                <div class="relative h-[500px] rounded-3xl overflow-hidden shadow-2xl bg-gradient-to-br from-gray-100 to-gray-200">
                    <div id="product-slider" class="flex transition-transform duration-700 ease-in-out h-full">
                        @php
                        $productImages = [
                            [
                                'src' => 'https://images.pexels.com/photos/4386321/pexels-photo-4386321.jpeg?auto=compress&cs=tinysrgb&w=800',
                                'title' => 'Household Products Collection',
                                'description' => 'Mugs, Soapdishes, Dustpans, and Essential Items'
                            ],
                            [
                                'src' => 'https://images.pexels.com/photos/6195125/pexels-photo-6195125.jpeg?auto=compress&cs=tinysrgb&w=800',
                                'title' => 'Buckets and Storage Solutions',
                                'description' => 'Spiral Buckets, Nova Buckets, Basin Tubs, and Variety Tubs'
                            ],
                            [
                                'src' => 'https://images.pexels.com/photos/1350789/pexels-photo-1350789.jpeg?auto=compress&cs=tinysrgb&w=800',
                                'title' => 'Industrial and Furniture Products',
                                'description' => 'Plastic Chairs, Industrial Pallets, and Storage Crates'
                            ],
                            [
                                'src' => 'https://images.pexels.com/photos/3735218/pexels-photo-3735218.jpeg?auto=compress&cs=tinysrgb&w=800',
                                'title' => 'Waste Management Solutions',
                                'description' => 'Dustbins, Garbage Containers, and Waste Management Systems'
                            ]
                        ];
                        @endphp
                        
                        @foreach($productImages as $index => $image)
                        <div class="product-slide w-full h-full flex-shrink-0 relative group">
                            <img src="{{ $image['src'] }}" alt="{{ $image['title'] }}" class="w-full h-full object-contain bg-white p-8 cursor-pointer transition-transform duration-300 group-hover:scale-105" loading="lazy">
                            
                            <!-- Image Overlay -->
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent p-8">
                                <h3 class="text-2xl font-bold text-white mb-2">{{ $image['title'] }}</h3>
                                <p class="text-gray-200 text-lg">{{ $image['description'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Navigation Buttons -->
                    <button onclick="prevSlide()" class="absolute left-6 top-1/2 transform -translate-y-1/2 bg-white/90 backdrop-blur-sm hover:bg-white text-gray-800 p-4 rounded-full transition-all duration-200 hover:scale-110 shadow-lg">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </button>
                    <button onclick="nextSlide()" class="absolute right-6 top-1/2 transform -translate-y-1/2 bg-white/90 backdrop-blur-sm hover:bg-white text-gray-800 p-4 rounded-full transition-all duration-200 hover:scale-110 shadow-lg">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>

                    <!-- Slide Indicators -->
                    <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex space-x-3">
                        @foreach($productImages as $index => $image)
                        <button onclick="showSlide({{ $index }})" class="slide-indicator w-4 h-4 rounded-full transition-all duration-300 {{ $index === 0 ? 'bg-white scale-125 shadow-lg' : 'bg-white/50 hover:bg-white/75 hover:scale-110' }}"></button>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Categories -->
        <div class="grid md:grid-cols-2 gap-8 mb-16">
            @php
            $productCategories = [
                [
                    'icon' => 'M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z',
                    'title' => 'Household Products',
                    'description' => 'Essential items for daily use',
                    'items' => [
                        'Mugs (1 ltr & 1.5 ltr)',
                        'Soapdishes',
                        'Dustpans',
                        'Spiral Buckets (7-22 ltr)',
                        'Nova Buckets (9-22 ltr)',
                        'Basin Tubs (16-22 ltr)',
                        'Variety of Tubs',
                        'Shaktimaan Ghamelas (16-24 inches)'
                    ],
                    'color' => 'from-blue-500 to-blue-600',
                    'bgColor' => 'bg-blue-50'
                ],
                [
                    'icon' => 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4',
                    'title' => 'Furniture',
                    'description' => 'Durable and stylish plastic furniture',
                    'items' => [
                        'Plastic Chairs (Various Designs)',
                        'Dining Sets',
                        'Garden Furniture',
                        'Office Chairs',
                        'Tables (Multiple Sizes)',
                        'Stools and Seating Solutions'
                    ],
                    'color' => 'from-green-500 to-green-600',
                    'bgColor' => 'bg-green-50'
                ],
                [
                    'icon' => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z',
                    'title' => 'Industrial Products',
                    'description' => 'Heavy-duty solutions for commercial use',
                    'items' => [
                        'Industrial Pallets',
                        'Storage Crates (Multiple Sizes)',
                        'Material Handling Equipment',
                        'Industrial Containers',
                        'Warehouse Solutions',
                        'Heavy-Duty Storage Systems'
                    ],
                    'color' => 'from-orange-500 to-orange-600',
                    'bgColor' => 'bg-orange-50'
                ],
                [
                    'icon' => 'M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16',
                    'title' => 'Waste Management',
                    'description' => 'Complete waste management solutions',
                    'items' => [
                        'Swachh Bharat Waste Containers (10-12 ltr)',
                        'Swing Bins (10-60 ltr)',
                        'Roadside Swing Bins with Stand (60-110 ltr)',
                        'Dome Shaped Bins',
                        'Wheeled Waste Bins (12-240 ltr)',
                        'Garbage Rickshaws',
                        'Large Garbage Containers (450-1100 ltr)',
                        'Bio-Medical Waste Bins'
                    ],
                    'color' => 'from-purple-500 to-purple-600',
                    'bgColor' => 'bg-purple-50'
                ]
            ];
            @endphp
            
            @foreach($productCategories as $category)
            <div class="group {{ $category['bgColor'] }} rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100">
                <div class="flex items-center mb-6">
                    <div class="w-16 h-16 bg-gradient-to-br {{ $category['color'] }} rounded-2xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $category['icon'] }}"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900">{{ $category['title'] }}</h3>
                        <p class="text-gray-600">{{ $category['description'] }}</p>
                    </div>
                </div>
                
                <div class="grid md:grid-cols-2 gap-3">
                    @foreach($category['items'] as $item)
                    <div class="bg-white rounded-lg p-3 shadow-sm hover:shadow-md transition-shadow duration-200">
                        <div class="flex items-center">
                            <div class="w-2 h-2 bg-gradient-to-r from-orange-500 to-red-500 rounded-full mr-3 flex-shrink-0"></div>
                            <span class="text-sm font-medium text-gray-800">{{ $item }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>

        <!-- CTA Section -->
        <div class="text-center">
            <div class="bg-gradient-to-r from-blue-900 via-blue-800 to-orange-600 rounded-3xl p-12 text-white relative overflow-hidden">
                <!-- Background Pattern -->
                <div class="absolute inset-0 opacity-10">
                    <div class="absolute top-10 left-10 w-32 h-32 bg-white rounded-full blur-xl"></div>
                    <div class="absolute bottom-10 right-10 w-48 h-48 bg-orange-400 rounded-full blur-xl"></div>
                </div>
                
                <div class="relative z-10">
                    <h3 class="text-4xl font-bold mb-4">Need Custom Solutions?</h3>
                    <p class="text-xl mb-8 text-blue-100 max-w-2xl mx-auto">
                        We offer customized plastic products tailored to your specific requirements with our advanced manufacturing capabilities
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <button onclick="scrollToSection('contact')" class="bg-white text-blue-900 px-8 py-4 rounded-full font-semibold hover:shadow-lg transform hover:scale-105 transition-all duration-200 flex items-center justify-center">
                            Request Custom Quote
                        </button>
                        <button onclick="scrollToSection('infrastructure')" class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-blue-900 transition-all duration-200">
                            View Our Facility
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>