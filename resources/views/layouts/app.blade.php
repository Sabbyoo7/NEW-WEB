<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sunshine Industries - Premium Plastic Products Manufacturer')</title>
    <meta name="description" content="Leading manufacturer of high-quality plastic household goods, furniture, and industrial products. ISO 9001:2015 certified with 25+ years of experience.">
    <meta name="keywords" content="plastic products, household goods, plastic furniture, industrial products, waste management, injection molding, Sunshine Industries">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom Styles -->
    <style>
        html { scroll-behavior: smooth; }
        
        button:focus-visible, a:focus-visible {
            outline: 2px solid #f97316;
            outline-offset: 2px;
            border-radius: 8px;
        }
        
        * {
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 300ms;
        }
        
        .animate-pulse-slow { animation: pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite; }
        .animate-spin-slow { animation: spin 3s linear infinite; }
        
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .fade-in-up { animation: fadeInUp 0.6s ease-out; }
    </style>
</head>
<body class="min-h-screen bg-white">
    @include('partials.header')
    
    @yield('content')
    
    @include('partials.footer')
    
    <!-- JavaScript for smooth scrolling and interactions -->
    <script>
        // Smooth scrolling function
        function scrollToSection(sectionId) {
            const element = document.getElementById(sectionId);
            if (element) {
                const headerHeight = 120;
                const targetPosition = element.offsetTop - headerHeight;
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        }
        
        // Mobile menu toggle
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
        
        // Header scroll effect
        window.addEventListener('scroll', function() {
            const header = document.getElementById('main-header');
            if (window.scrollY > 50) {
                header.classList.add('bg-white/95', 'backdrop-blur-xl', 'shadow-2xl', 'py-3', 'border-b', 'border-gray-200/50');
                header.classList.remove('bg-white/90', 'backdrop-blur-lg', 'py-6');
            } else {
                header.classList.remove('bg-white/95', 'backdrop-blur-xl', 'shadow-2xl', 'py-3', 'border-b', 'border-gray-200/50');
                header.classList.add('bg-white/90', 'backdrop-blur-lg', 'py-6');
            }
        });
        
        // Product slider functionality
        let currentSlide = 0;
        const productImages = document.querySelectorAll('.product-slide');
        const totalSlides = productImages.length;
        
        function showSlide(index) {
            const slider = document.getElementById('product-slider');
            if (slider) {
                slider.style.transform = `translateX(-${index * 100}%)`;
                currentSlide = index;
                
                // Update indicators
                document.querySelectorAll('.slide-indicator').forEach((indicator, i) => {
                    if (i === index) {
                        indicator.classList.add('bg-white', 'scale-125', 'shadow-lg');
                        indicator.classList.remove('bg-white/50');
                    } else {
                        indicator.classList.remove('bg-white', 'scale-125', 'shadow-lg');
                        indicator.classList.add('bg-white/50');
                    }
                });
            }
        }
        
        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            showSlide(currentSlide);
        }
        
        function prevSlide() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            showSlide(currentSlide);
        }
        
        // Auto-advance slides
        setInterval(nextSlide, 5000);
        
        // Keyboard navigation
        document.addEventListener('keydown', function(e) {
            if (e.key === 'ArrowLeft') prevSlide();
            if (e.key === 'ArrowRight') nextSlide();
        });
        
        // Form submission handling
        document.addEventListener('DOMContentLoaded', function() {
            const contactForm = document.getElementById('contact-form');
            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    const submitBtn = document.getElementById('submit-btn');
                    const submitText = document.getElementById('submit-text');
                    const submitSpinner = document.getElementById('submit-spinner');
                    
                    if (submitBtn && submitText && submitSpinner) {
                        submitBtn.disabled = true;
                        submitText.textContent = 'Sending...';
                        submitSpinner.classList.remove('hidden');
                    }
                });
            }
        });
    </script>
</body>
</html>