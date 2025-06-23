<section id="contact" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Contact Us</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Get in touch with us for quotes, inquiries, or to discuss your plastic product requirements
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Contact Information -->
            <div class="space-y-8">
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Get In Touch</h3>
                    <p class="text-gray-600 mb-8">
                        We're here to help you with all your plastic product needs. Reach out to us through any of the following channels:
                    </p>
                </div>

                <!-- Contact Cards -->
                <div class="space-y-6">
                    @php
                    $contactInfo = [
                        [
                            'icon' => 'M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z',
                            'title' => 'Phone Numbers',
                            'details' => ['+91-9371636220', '+91-9890953585'],
                            'color' => 'from-blue-500 to-blue-600'
                        ],
                        [
                            'icon' => 'M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                            'title' => 'Email Addresses',
                            'details' => ['sunshineindustries99@gmail.com', 'ranjeetsingh.gulati@gmail.com'],
                            'color' => 'from-green-500 to-green-600'
                        ],
                        [
                            'icon' => 'M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9',
                            'title' => 'Website',
                            'details' => ['www.shineplastindia.com'],
                            'color' => 'from-orange-500 to-orange-600'
                        ]
                    ];
                    @endphp
                    
                    @foreach($contactInfo as $info)
                    <div class="bg-gray-50 rounded-2xl p-6 hover:shadow-lg transition-shadow">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-br {{ $info['color'] }} rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $info['icon'] }}"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-900 mb-2">{{ $info['title'] }}</h4>
                                @foreach($info['details'] as $detail)
                                <p class="text-gray-600 mb-1">{{ $detail }}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Office Locations -->
                <div class="bg-gradient-to-br from-blue-900 to-orange-600 rounded-2xl p-8 text-white">
                    <h4 class="text-xl font-bold mb-6">Our Locations</h4>
                    
                    <div class="space-y-6">
                        <div>
                            <div class="flex items-center mb-2">
                                <svg class="w-5 h-5 mr-2 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span class="font-semibold">Head Office</span>
                            </div>
                            <p class="text-blue-100 ml-7">
                                Plot No. B-7, MIDC, Mundipar<br>
                                GONDIA, Maharashtra - 441614
                            </p>
                        </div>
                        
                        <div>
                            <div class="flex items-center mb-2">
                                <svg class="w-5 h-5 mr-2 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span class="font-semibold">Branch Office - Raipur</span>
                            </div>
                            <p class="text-blue-100 ml-7">
                                Chandra Complex, Hotel Capital<br>
                                Near HDFC Bank, Fafadih Chowk<br>
                                Raipur, Chhattisgarh - 492001
                            </p>
                        </div>

                        <div>
                            <div class="flex items-center mb-2">
                                <svg class="w-5 h-5 mr-2 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span class="font-semibold">Branch Office - Nagpur</span>
                            </div>
                            <p class="text-blue-100 ml-7">
                                Nagpur, Maharashtra
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Business Hours -->
                <div class="bg-gray-50 rounded-2xl p-6">
                    <div class="flex items-center mb-4">
                        <svg class="w-6 h-6 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <h4 class="text-lg font-semibold text-gray-900">Business Hours</h4>
                    </div>
                    <div class="space-y-2 text-gray-600">
                        <div class="flex justify-between">
                            <span>Monday - Friday:</span>
                            <span>9:00 AM - 6:00 PM</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Saturday:</span>
                            <span>9:00 AM - 2:00 PM</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Sunday:</span>
                            <span>Closed</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-gray-50 rounded-2xl p-8">
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Send us a Message</h3>
                
                @if(session('success'))
                <div class="bg-green-50 border border-green-200 rounded-lg p-4 text-green-800 mb-6">
                    {{ session('success') }}
                </div>
                @endif
                
                @if(session('error'))
                <div class="bg-red-50 border border-red-200 rounded-lg p-4 text-red-800 mb-6">
                    {{ session('error') }}
                </div>
                @endif
                
                <form id="contact-form" action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                                Full Name *
                            </label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all @error('name') border-red-500 @enderror" placeholder="Your full name">
                            @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                Email Address *
                            </label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all @error('email') border-red-500 @enderror" placeholder="your.email@example.com">
                            @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                                Phone Number
                            </label>
                            <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all @error('phone') border-red-500 @enderror" placeholder="+91-XXXXXXXXXX">
                            @error('phone')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div>
                            <label for="company" class="block text-sm font-medium text-gray-700 mb-2">
                                Company Name
                            </label>
                            <input type="text" id="company" name="company" value="{{ old('company') }}" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all @error('company') border-red-500 @enderror" placeholder="Your company name">
                            @error('company')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">
                            Message *
                        </label>
                        <textarea id="message" name="message" required rows="6" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all resize-none @error('message') border-red-500 @enderror" placeholder="Tell us about your requirements, quantity needed, or any questions you have...">{{ old('message') }}</textarea>
                        @error('message')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <button id="submit-btn" type="submit" class="w-full bg-gradient-to-r from-blue-600 to-orange-600 text-white py-4 px-6 rounded-lg font-semibold flex items-center justify-center space-x-2 transition-all duration-200 hover:shadow-lg transform hover:scale-105">
                        <div id="submit-spinner" class="hidden w-5 h-5 border-2 border-white border-t-transparent rounded-full animate-spin"></div>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                        </svg>
                        <span id="submit-text">Send Message</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>