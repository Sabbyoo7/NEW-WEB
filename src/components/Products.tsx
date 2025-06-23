import React, { useState } from 'react';
import { ChevronLeft, ChevronRight, Home, Briefcase, Trash2, Package, ZoomIn } from 'lucide-react';

const Products = () => {
  const [currentSlide, setCurrentSlide] = useState(0);
  const [selectedImage, setSelectedImage] = useState<string | null>(null);

  const productImages = [
    {
      src: '/images/products/1748370316960-7781b6d3-d572-4426-8025-cd9c0511d00c_5.jpg',
      title: 'Household Products Collection',
      description: 'Mugs, Soapdishes, Dustpans, and Essential Items'
    },
    {
      src: '/images/products/1748370316960-7781b6d3-d572-4426-8025-cd9c0511d00c_6.jpg',
      title: 'Buckets and Storage Solutions',
      description: 'Spiral Buckets, Nova Buckets, Basin Tubs, and Variety Tubs'
    },
    {
      src: '/images/products/1748370316960-7781b6d3-d572-4426-8025-cd9c0511d00c_7.jpg',
      title: 'Industrial and Furniture Products',
      description: 'Plastic Chairs, Industrial Pallets, and Storage Crates'
    },
    {
      src: '/images/products/1748370316960-7781b6d3-d572-4426-8025-cd9c0511d00c_8.jpg',
      title: 'Waste Management Solutions',
      description: 'Dustbins, Garbage Containers, and Waste Management Systems'
    }
  ];

  const productCategories = [
    {
      icon: Home,
      title: "Household Products",
      description: "Essential items for daily use",
      items: [
        "Mugs (1 ltr & 1.5 ltr)",
        "Soapdishes",
        "Dustpans",
        "Spiral Buckets (7-22 ltr)",
        "Nova Buckets (9-22 ltr)",
        "Basin Tubs (16-22 ltr)",
        "Variety of Tubs",
        "Shaktimaan Ghamelas (16-24 inches)"
      ],
      color: "from-blue-500 to-blue-600",
      bgColor: "bg-blue-50"
    },
    {
      icon: Package,
      title: "Furniture",
      description: "Durable and stylish plastic furniture",
      items: [
        "Plastic Chairs (Various Designs)",
        "Dining Sets",
        "Garden Furniture",
        "Office Chairs",
        "Tables (Multiple Sizes)",
        "Stools and Seating Solutions"
      ],
      color: "from-green-500 to-green-600",
      bgColor: "bg-green-50"
    },
    {
      icon: Briefcase,
      title: "Industrial Products",
      description: "Heavy-duty solutions for commercial use",
      items: [
        "Industrial Pallets",
        "Storage Crates (Multiple Sizes)",
        "Material Handling Equipment",
        "Industrial Containers",
        "Warehouse Solutions",
        "Heavy-Duty Storage Systems"
      ],
      color: "from-orange-500 to-orange-600",
      bgColor: "bg-orange-50"
    },
    {
      icon: Trash2,
      title: "Waste Management",
      description: "Complete waste management solutions",
      items: [
        "Swachh Bharat Waste Containers (10-12 ltr)",
        "Swing Bins (10-60 ltr)",
        "Roadside Swing Bins with Stand (60-110 ltr)",
        "Dome Shaped Bins",
        "Wheeled Waste Bins (12-240 ltr)",
        "Garbage Rickshaws",
        "Large Garbage Containers (450-1100 ltr)",
        "Bio-Medical Waste Bins"
      ],
      color: "from-purple-500 to-purple-600",
      bgColor: "bg-purple-50"
    }
  ];

  const nextSlide = () => {
    setCurrentSlide((prev) => (prev + 1) % productImages.length);
  };

  const prevSlide = () => {
    setCurrentSlide((prev) => (prev - 1 + productImages.length) % productImages.length);
  };

  const goToSlide = (index: number) => {
    setCurrentSlide(index);
  };

  const openImageModal = (imageSrc: string) => {
    setSelectedImage(imageSrc);
    document.body.style.overflow = 'hidden';
  };

  const closeImageModal = () => {
    setSelectedImage(null);
    document.body.style.overflow = 'auto';
  };

  const scrollToSection = (sectionId: string) => {
    const element = document.getElementById(sectionId);
    if (element) {
      const headerHeight = 120;
      const targetPosition = element.offsetTop - headerHeight;
      window.scrollTo({
        top: targetPosition,
        behavior: 'smooth'
      });
    }
  };

  // Keyboard navigation
  React.useEffect(() => {
    const handleKeyDown = (e: KeyboardEvent) => {
      if (selectedImage) {
        if (e.key === 'Escape') {
          closeImageModal();
        }
        return;
      }
      
      if (e.key === 'ArrowLeft') {
        prevSlide();
      } else if (e.key === 'ArrowRight') {
        nextSlide();
      }
    };

    window.addEventListener('keydown', handleKeyDown);
    return () => window.removeEventListener('keydown', handleKeyDown);
  }, [selectedImage]);

  return (
    <section id="products" className="py-20 bg-white">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {/* Header */}
        <div className="text-center mb-16">
          <h2 className="text-4xl font-bold text-gray-900 mb-4">Our Product Range</h2>
          <p className="text-xl text-gray-600 max-w-3xl mx-auto">
            Comprehensive collection of high-quality plastic products for household, industrial, and commercial applications
          </p>
        </div>

        {/* Enhanced 3D Product Image Slider */}
        <div className="mb-20">
          <div className="relative max-w-6xl mx-auto">
            <div className="relative h-[500px] rounded-3xl overflow-hidden shadow-2xl bg-gradient-to-br from-gray-100 to-gray-200">
              <div 
                className="flex transition-transform duration-700 ease-in-out h-full"
                style={{ transform: `translateX(-${currentSlide * 100}%)` }}
              >
                {productImages.map((image, index) => (
                  <div key={index} className="w-full h-full flex-shrink-0 relative group">
                    <img
                      src={image.src}
                      alt={image.title}
                      className="w-full h-full object-contain bg-white p-8 cursor-pointer transition-transform duration-300 group-hover:scale-105"
                      onClick={() => openImageModal(image.src)}
                      onError={(e) => {
                        const target = e.target as HTMLImageElement;
                        target.src = `https://images.pexels.com/photos/4386321/pexels-photo-4386321.jpeg?auto=compress&cs=tinysrgb&w=800`;
                      }}
                      loading="lazy"
                    />
                    
                    {/* Image Overlay with Info */}
                    <div className="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent p-8">
                      <h3 className="text-2xl font-bold text-white mb-2">{image.title}</h3>
                      <p className="text-gray-200 text-lg">{image.description}</p>
                      <button
                        onClick={(e) => {
                          e.stopPropagation();
                          openImageModal(image.src);
                        }}
                        className="mt-4 inline-flex items-center bg-white/20 backdrop-blur-sm text-white px-4 py-2 rounded-full hover:bg-white/30 transition-all duration-200"
                      >
                        <ZoomIn className="w-4 h-4 mr-2" />
                        View Details
                      </button>
                    </div>
                  </div>
                ))}
              </div>

              {/* Enhanced Navigation Buttons */}
              <button
                onClick={prevSlide}
                className="absolute left-6 top-1/2 transform -translate-y-1/2 bg-white/90 backdrop-blur-sm hover:bg-white text-gray-800 p-4 rounded-full transition-all duration-200 hover:scale-110 shadow-lg"
                aria-label="Previous image"
              >
                <ChevronLeft className="w-6 h-6" />
              </button>
              <button
                onClick={nextSlide}
                className="absolute right-6 top-1/2 transform -translate-y-1/2 bg-white/90 backdrop-blur-sm hover:bg-white text-gray-800 p-4 rounded-full transition-all duration-200 hover:scale-110 shadow-lg"
                aria-label="Next image"
              >
                <ChevronRight className="w-6 h-6" />
              </button>

              {/* Enhanced Slide Indicators */}
              <div className="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex space-x-3">
                {productImages.map((_, index) => (
                  <button
                    key={index}
                    onClick={() => goToSlide(index)}
                    className={`w-4 h-4 rounded-full transition-all duration-300 ${
                      index === currentSlide 
                        ? 'bg-white scale-125 shadow-lg' 
                        : 'bg-white/50 hover:bg-white/75 hover:scale-110'
                    }`}
                    aria-label={`Go to slide ${index + 1}`}
                  />
                ))}
              </div>
            </div>

            {/* Thumbnail Navigation */}
            <div className="flex justify-center mt-6 space-x-4">
              {productImages.map((image, index) => (
                <button
                  key={index}
                  onClick={() => goToSlide(index)}
                  className={`w-20 h-20 rounded-xl overflow-hidden border-2 transition-all duration-200 ${
                    index === currentSlide 
                      ? 'border-blue-500 scale-110 shadow-lg' 
                      : 'border-gray-300 hover:border-blue-300 hover:scale-105'
                  }`}
                >
                  <img
                    src={image.src}
                    alt={`Thumbnail ${index + 1}`}
                    className="w-full h-full object-cover"
                    onError={(e) => {
                      const target = e.target as HTMLImageElement;
                      target.src = `https://images.pexels.com/photos/4386321/pexels-photo-4386321.jpeg?auto=compress&cs=tinysrgb&w=200`;
                    }}
                    loading="lazy"
                  />
                </button>
              ))}
            </div>
          </div>
        </div>

        {/* Enhanced Product Categories */}
        <div className="grid md:grid-cols-2 gap-8 mb-16">
          {productCategories.map((category, index) => {
            const IconComponent = category.icon;
            return (
              <div
                key={index}
                className={`group ${category.bgColor} rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100`}
              >
                <div className="flex items-center mb-6">
                  <div className={`w-16 h-16 bg-gradient-to-br ${category.color} rounded-2xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300`}>
                    <IconComponent className="w-8 h-8 text-white" />
                  </div>
                  <div>
                    <h3 className="text-2xl font-bold text-gray-900">{category.title}</h3>
                    <p className="text-gray-600">{category.description}</p>
                  </div>
                </div>
                
                <div className="grid md:grid-cols-2 gap-3">
                  {category.items.map((item, itemIndex) => (
                    <div key={itemIndex} className="bg-white rounded-lg p-3 shadow-sm hover:shadow-md transition-shadow duration-200">
                      <div className="flex items-center">
                        <div className="w-2 h-2 bg-gradient-to-r from-orange-500 to-red-500 rounded-full mr-3 flex-shrink-0"></div>
                        <span className="text-sm font-medium text-gray-800">{item}</span>
                      </div>
                    </div>
                  ))}
                </div>
              </div>
            );
          })}
        </div>

        {/* CTA Section */}
        <div className="text-center">
          <div className="bg-gradient-to-r from-blue-900 via-blue-800 to-orange-600 rounded-3xl p-12 text-white relative overflow-hidden">
            {/* Background Pattern */}
            <div className="absolute inset-0 opacity-10">
              <div className="absolute top-10 left-10 w-32 h-32 bg-white rounded-full blur-xl"></div>
              <div className="absolute bottom-10 right-10 w-48 h-48 bg-orange-400 rounded-full blur-xl"></div>
            </div>
            
            <div className="relative z-10">
              <h3 className="text-4xl font-bold mb-4">Need Custom Solutions?</h3>
              <p className="text-xl mb-8 text-blue-100 max-w-2xl mx-auto">
                We offer customized plastic products tailored to your specific requirements with our advanced manufacturing capabilities
              </p>
              <div className="flex flex-col sm:flex-row gap-4 justify-center">
                <button
                  onClick={() => scrollToSection('contact')}
                  className="bg-white text-blue-900 px-8 py-4 rounded-full font-semibold hover:shadow-lg transform hover:scale-105 transition-all duration-200 flex items-center justify-center"
                >
                  Request Custom Quote
                </button>
                <button
                  onClick={() => scrollToSection('infrastructure')}
                  className="border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-blue-900 transition-all duration-200"
                >
                  View Our Facility
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>

      {/* Image Modal */}
      {selectedImage && (
        <div 
          className="fixed inset-0 bg-black/90 z-50 flex items-center justify-center p-4" 
          onClick={closeImageModal}
        >
          <div className="relative max-w-6xl max-h-full">
            <button
              onClick={closeImageModal}
              className="absolute -top-12 right-0 text-white hover:text-gray-300 text-2xl font-bold z-10"
              aria-label="Close modal"
            >
              ✕
            </button>
            <img
              src={selectedImage}
              alt="Product details"
              className="max-w-full max-h-full object-contain rounded-lg"
              onClick={(e) => e.stopPropagation()}
            />
          </div>
        </div>
      )}
    </section>
  );
};

export default Products;