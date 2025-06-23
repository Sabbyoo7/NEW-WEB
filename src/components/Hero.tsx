import React from 'react';
import { ArrowRight, Award, Users, Factory, Recycle, Phone, Sparkles, Star, Zap } from 'lucide-react';

const Hero = () => {
  const scrollToSection = (sectionId: string) => {
    const element = document.getElementById(sectionId);
    if (element) {
      element.scrollIntoView({ behavior: 'smooth' });
    }
  };

  return (
    <section id="home" className="relative min-h-screen flex items-center justify-center overflow-hidden">
      {/* Enhanced Background with multiple gradients */}
      <div className="absolute inset-0 bg-gradient-to-br from-slate-900 via-blue-900 to-indigo-900"></div>
      <div className="absolute inset-0 bg-gradient-to-tr from-orange-500/20 via-red-500/10 to-pink-500/20"></div>
      
      {/* Animated background elements */}
      <div className="absolute inset-0">
        <div className="absolute top-20 left-10 w-32 h-32 bg-gradient-to-r from-orange-400/30 to-pink-500/30 rounded-full blur-xl animate-pulse"></div>
        <div className="absolute bottom-20 right-10 w-48 h-48 bg-gradient-to-r from-blue-400/20 to-purple-500/20 rounded-full blur-xl animate-pulse delay-1000"></div>
        <div className="absolute top-1/2 left-1/4 w-24 h-24 bg-gradient-to-r from-yellow-400/20 to-orange-500/20 rounded-full blur-xl animate-pulse delay-500"></div>
        <div className="absolute top-1/3 right-1/3 w-16 h-16 bg-gradient-to-r from-pink-400/30 to-red-500/30 rounded-full blur-xl animate-pulse delay-700"></div>
      </div>

      <div className="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20">
        <div className="grid lg:grid-cols-2 gap-12 items-center">
          {/* Enhanced Content */}
          <div className="text-white space-y-8">
            <div className="space-y-6">
              <div className="inline-flex items-center bg-gradient-to-r from-orange-500/20 to-red-500/20 backdrop-blur-sm rounded-full px-6 py-3 text-sm font-bold border border-orange-400/30">
                <Award className="w-5 h-5 mr-3 text-orange-400" />
                <span className="bg-gradient-to-r from-orange-300 to-yellow-300 bg-clip-text text-transparent">
                  ISO 9001:2015 Certified Excellence
                </span>
                <Sparkles className="w-4 h-4 ml-3 text-yellow-400 animate-spin" />
              </div>
              
              <div className="relative">
                <h1 className="text-6xl lg:text-8xl font-black leading-tight">
                  <span className="block bg-gradient-to-r from-white via-blue-100 to-indigo-200 bg-clip-text text-transparent">
                    SUNSHINE
                  </span>
                  <span className="block bg-gradient-to-r from-orange-400 via-red-500 to-pink-500 bg-clip-text text-transparent animate-pulse">
                    INDUSTRIES
                  </span>
                </h1>
                <div className="absolute -top-4 -right-4 w-8 h-8 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full animate-bounce">
                  <Star className="w-8 h-8 text-white p-1" />
                </div>
              </div>
              
              <div className="relative">
                <h2 className="text-3xl lg:text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-200 to-purple-200 mb-4">
                  Premium Plastic Products
                </h2>
                <p className="text-xl text-blue-100 leading-relaxed max-w-2xl">
                  Leading manufacturer of high-quality plastic household goods, furniture, and industrial products. 
                  Combining innovation, sustainability, and excellence in every product we create.
                </p>
              </div>
            </div>

            {/* Dealership Information - Enhanced */}
            <div className="relative group">
              <div className="absolute inset-0 bg-gradient-to-r from-orange-500/30 to-red-500/30 rounded-3xl blur-lg group-hover:blur-xl transition-all duration-300"></div>
              <div className="relative bg-gradient-to-r from-orange-500/20 to-red-500/20 backdrop-blur-sm rounded-3xl p-8 border border-orange-400/30 hover:border-orange-400/50 transition-all duration-300">
                <div className="flex items-center mb-6">
                  <div className="w-12 h-12 bg-gradient-to-r from-orange-400 to-red-500 rounded-2xl flex items-center justify-center mr-4">
                    <Phone className="w-6 h-6 text-white" />
                  </div>
                  <div>
                    <h3 className="text-2xl font-bold text-white flex items-center">
                      Apply for Dealership
                      <Zap className="w-6 h-6 ml-2 text-yellow-400 animate-pulse" />
                    </h3>
                    <p className="text-orange-200 text-sm">Join our growing network</p>
                  </div>
                </div>
                <div className="grid grid-cols-1 sm:grid-cols-2 gap-4">
                  <a 
                    href="tel:+919890953585" 
                    className="group/phone flex items-center justify-center bg-gradient-to-r from-white/20 to-white/10 hover:from-white/30 hover:to-white/20 text-white px-6 py-4 rounded-2xl font-bold transition-all duration-300 hover:scale-105 hover:shadow-xl border border-white/20 hover:border-white/40"
                  >
                    <Phone className="w-5 h-5 mr-3 group-hover/phone:animate-bounce" />
                    <span className="text-lg">9890953585</span>
                  </a>
                  <a 
                    href="tel:+917498708181" 
                    className="group/phone flex items-center justify-center bg-gradient-to-r from-white/20 to-white/10 hover:from-white/30 hover:to-white/20 text-white px-6 py-4 rounded-2xl font-bold transition-all duration-300 hover:scale-105 hover:shadow-xl border border-white/20 hover:border-white/40"
                  >
                    <Phone className="w-5 h-5 mr-3 group-hover/phone:animate-bounce" />
                    <span className="text-lg">7498708181</span>
                  </a>
                </div>
              </div>
            </div>

            {/* Enhanced Stats */}
            <div className="grid grid-cols-3 gap-6">
              <div className="text-center group">
                <div className="relative">
                  <div className="text-4xl font-black bg-gradient-to-r from-orange-400 to-red-500 bg-clip-text text-transparent group-hover:scale-110 transition-transform duration-300">
                    25+
                  </div>
                  <Sparkles className="absolute -top-2 -right-2 w-4 h-4 text-yellow-400 animate-spin" />
                </div>
                <div className="text-sm text-blue-200 font-semibold">Years Experience</div>
              </div>
              <div className="text-center group">
                <div className="relative">
                  <div className="text-4xl font-black bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent group-hover:scale-110 transition-transform duration-300">
                    500+
                  </div>
                  <Star className="absolute -top-2 -right-2 w-4 h-4 text-yellow-400 animate-pulse" />
                </div>
                <div className="text-sm text-blue-200 font-semibold">Products</div>
              </div>
              <div className="text-center group">
                <div className="relative">
                  <div className="text-4xl font-black bg-gradient-to-r from-green-400 to-blue-500 bg-clip-text text-transparent group-hover:scale-110 transition-transform duration-300">
                    100%
                  </div>
                  <Award className="absolute -top-2 -right-2 w-4 h-4 text-yellow-400 animate-bounce" />
                </div>
                <div className="text-sm text-blue-200 font-semibold">Quality Assured</div>
              </div>
            </div>

            {/* Enhanced CTA Buttons */}
            <div className="flex flex-col sm:flex-row gap-6">
              <button
                onClick={() => scrollToSection('products')}
                className="group relative overflow-hidden bg-gradient-to-r from-orange-500 via-red-500 to-pink-500 text-white px-10 py-5 rounded-2xl font-bold hover:shadow-2xl transform hover:scale-105 transition-all duration-300 flex items-center justify-center"
              >
                <div className="absolute inset-0 bg-gradient-to-r from-pink-500 via-red-500 to-orange-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <span className="relative z-10 flex items-center text-lg">
                  Explore Products
                  <ArrowRight className="w-6 h-6 ml-3 group-hover:translate-x-2 transition-transform duration-300" />
                </span>
              </button>
              <button
                onClick={() => scrollToSection('contact')}
                className="group border-2 border-white/50 hover:border-white text-white hover:bg-white hover:text-slate-900 px-10 py-5 rounded-2xl font-bold transition-all duration-300 backdrop-blur-sm hover:shadow-xl transform hover:scale-105"
              >
                <span className="flex items-center text-lg">
                  Get Quote
                  <Sparkles className="w-5 h-5 ml-3 group-hover:animate-spin" />
                </span>
              </button>
            </div>
          </div>

          {/* Enhanced Features Grid */}
          <div className="grid grid-cols-2 gap-6">
            <div className="group bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-sm rounded-3xl p-8 hover:from-white/20 hover:to-white/10 transition-all duration-300 transform hover:scale-105 border border-white/20 hover:border-white/40">
              <div className="w-16 h-16 bg-gradient-to-r from-blue-400 to-purple-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                <Factory className="w-8 h-8 text-white" />
              </div>
              <h3 className="text-xl font-bold text-white mb-3">Advanced Manufacturing</h3>
              <p className="text-blue-100">State-of-the-art injection molding technology</p>
            </div>
            
            <div className="group bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-sm rounded-3xl p-8 hover:from-white/20 hover:to-white/10 transition-all duration-300 transform hover:scale-105 border border-white/20 hover:border-white/40">
              <div className="w-16 h-16 bg-gradient-to-r from-green-400 to-blue-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                <Recycle className="w-8 h-8 text-white" />
              </div>
              <h3 className="text-xl font-bold text-white mb-3">Eco-Friendly</h3>
              <p className="text-blue-100">Sustainable materials and processes</p>
            </div>
            
            <div className="group bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-sm rounded-3xl p-8 hover:from-white/20 hover:to-white/10 transition-all duration-300 transform hover:scale-105 border border-white/20 hover:border-white/40">
              <div className="w-16 h-16 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                <Award className="w-8 h-8 text-white" />
              </div>
              <h3 className="text-xl font-bold text-white mb-3">Quality Certified</h3>
              <p className="text-blue-100">ISO 9001:2015 certified processes</p>
            </div>
            
            <div className="group bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-sm rounded-3xl p-8 hover:from-white/20 hover:to-white/10 transition-all duration-300 transform hover:scale-105 border border-white/20 hover:border-white/40">
              <div className="w-16 h-16 bg-gradient-to-r from-pink-400 to-red-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                <Users className="w-8 h-8 text-white" />
              </div>
              <h3 className="text-xl font-bold text-white mb-3">Customer Focus</h3>
              <p className="text-blue-100">Dedicated to customer satisfaction</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Hero;