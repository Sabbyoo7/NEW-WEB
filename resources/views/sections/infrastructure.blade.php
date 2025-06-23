<section id="infrastructure" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Factory & Infrastructure</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Our state-of-the-art manufacturing facility combines cutting-edge technology with sustainable practices
            </p>
        </div>

        <!-- Main Content -->
        <div class="grid lg:grid-cols-2 gap-12 mb-16">
            <div class="space-y-6">
                <h3 class="text-2xl font-bold text-gray-900">Manufacturing Excellence</h3>
                <p class="text-gray-600 leading-relaxed">
                    Our state-of-the-art manufacturing facility is equipped with the latest injection molding technology, 
                    enabling us to produce a wide variety of plastic products that meet the highest industry standards. 
                    With a dedicated focus on quality, efficiency, and sustainability, our infrastructure supports the 
                    production of plastic household goods, stylish furniture, and durable industrial products — all under one roof.
                </p>
                <p class="text-gray-600 leading-relaxed">
                    Our facility is home to a diverse range of precision injection molding machines, allowing us to create 
                    complex and intricate designs with consistent accuracy and high output. These machines are operated by 
                    a skilled team of technicians and engineers who ensure that each product is manufactured to exacting 
                    standards of durability, functionality, and design.
                </p>
                
                <!-- Key Stats -->
                <div class="grid grid-cols-2 gap-6 mt-8">
                    @php
                    $stats = [
                        ['number' => '25+', 'label' => 'Injection Molding Machines', 'color' => 'text-blue-600'],
                        ['number' => '50,000', 'label' => 'Sq. Ft. Facility', 'color' => 'text-green-600'],
                        ['number' => '100+', 'label' => 'Skilled Workers', 'color' => 'text-orange-600'],
                        ['number' => '24/7', 'label' => 'Production Capacity', 'color' => 'text-purple-600']
                    ];
                    @endphp
                    
                    @foreach($stats as $stat)
                    <div class="bg-white rounded-xl p-6 shadow-lg">
                        <div class="text-3xl font-bold {{ $stat['color'] }} mb-2">{{ $stat['number'] }}</div>
                        <div class="text-gray-700">{{ $stat['label'] }}</div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="space-y-6">
                <div class="bg-gradient-to-br from-blue-900 to-orange-600 rounded-2xl p-8 text-white">
                    <h3 class="text-2xl font-bold mb-4">Quality Assurance</h3>
                    <p class="text-blue-100 mb-6">
                        With robust quality control systems in place, our factory ensures that each plastic product, 
                        whether it's for the home, office, or industrial use, undergoes rigorous testing at CIPET Labs 
                        to meet customer expectations.
                    </p>
                    <div class="space-y-3">
                        @foreach(['CIPET Lab Testing', 'ISO 9001:2015 Certified', '100% Quality Inspection', 'Advanced Testing Equipment'] as $item)
                        <div class="flex items-center">
                            <div class="w-2 h-2 bg-orange-400 rounded-full mr-3"></div>
                            <span>{{ $item }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Sustainability Focus</h3>
                    <p class="text-gray-600 mb-6">
                        We prioritize sustainable practices in every phase of production, incorporating recyclable 
                        materials and optimizing energy efficiency throughout the facility.
                    </p>
                    <div class="space-y-3">
                        @foreach(['Recyclable Materials', 'Energy Efficient Processes', 'Waste Management Systems', 'Environmental Compliance'] as $item)
                        <div class="flex items-center">
                            <div class="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
                            <span class="text-gray-700">{{ $item }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Features Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
            $features = [
                [
                    'icon' => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z',
                    'title' => 'State-of-the-Art Facility',
                    'description' => 'Modern manufacturing facility equipped with latest injection molding technology',
                    'color' => 'from-blue-500 to-blue-600'
                ],
                [
                    'icon' => 'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z',
                    'title' => 'Advanced Machinery',
                    'description' => 'Precision injection molding machines for complex and intricate designs',
                    'color' => 'from-green-500 to-green-600'
                ],
                [
                    'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
                    'title' => 'Quality Control',
                    'description' => 'Rigorous testing at CIPET Labs ensuring highest quality standards',
                    'color' => 'from-orange-500 to-orange-600'
                ],
                [
                    'icon' => 'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15',
                    'title' => 'Sustainable Practices',
                    'description' => 'Eco-conscious production with advanced waste management systems',
                    'color' => 'from-purple-500 to-purple-600'
                ],
                [
                    'icon' => 'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z',
                    'title' => 'Skilled Team',
                    'description' => 'Expert technicians and engineers ensuring precision manufacturing',
                    'color' => 'from-red-500 to-red-600'
                ],
                [
                    'icon' => 'M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z',
                    'title' => 'ISO Certified',
                    'description' => 'ISO 9001:2015 certified processes maintaining international standards',
                    'color' => 'from-indigo-500 to-indigo-600'
                ]
            ];
            @endphp
            
            @foreach($features as $feature)
            <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="w-16 h-16 bg-gradient-to-br {{ $feature['color'] }} rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $feature['icon'] }}"></path>
                    </svg>
                </div>
                
                <h3 class="text-xl font-bold text-gray-900 mb-3">{{ $feature['title'] }}</h3>
                <p class="text-gray-600">{{ $feature['description'] }}</p>
            </div>
            @endforeach
        </div>

        <!-- Location Info -->
        <div class="mt-16 bg-white rounded-2xl p-8 shadow-lg">
            <div class="grid md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Head Office & Factory</h3>
                    <p class="text-gray-600 mb-2">M/s. Sunshine Industries</p>
                    <p class="text-gray-600 mb-2">Plot No. B-7, MIDC</p>
                    <p class="text-gray-600 mb-2">Mundipar</p>
                    <p class="text-gray-600">GONDIA, Maharashtra - 441614</p>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Branch Office - Raipur</h3>
                    <p class="text-gray-600 mb-2">Chandra Complex, Hotel Capital</p>
                    <p class="text-gray-600 mb-2">Near HDFC Bank, Fafadih Chowk</p>
                    <p class="text-gray-600">Raipur, Chhattisgarh - 492001</p>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Branch Office - Nagpur</h3>
                    <p class="text-gray-600">Nagpur, Maharashtra</p>
                </div>
            </div>
        </div>
    </div>
</section>