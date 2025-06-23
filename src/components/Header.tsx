import React, { useState, useEffect } from 'react';
import { Menu, X, Mail, MapPin, Sparkles } from 'lucide-react';

const Header = () => {
  const [isMenuOpen, setIsMenuOpen] = useState(false);
  const [isScrolled, setIsScrolled] = useState(false);

  useEffect(() => {
    const handleScroll = () => {
      setIsScrolled(window.scrollY > 50);
    };
    window.addEventListener('scroll', handleScroll);
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  const scrollToSection = (sectionId: string) => {
    const element = document.getElementById(sectionId);
    if (element) {
      const headerHeight = 120;
      const targetPosition = element.offsetTop - headerHeight;
      window.scrollTo({
        top: targetPosition,
        behavior: 'smooth'
      });
      setIsMenuOpen(false);
    }
  };

  return (
    <>
      {/* Top Contact Bar */}
      <div className="bg-gradient-to-r from-slate-900 via-blue-900 to-indigo-900 text-white py-3 px-4 relative overflow-hidden">
        <div className="absolute inset-0 bg-gradient-to-r from-blue-600/20 to-purple-600/20"></div>
        <div className="relative max-w-7xl mx-auto flex flex-wrap justify-between items-center text-sm">
          <div className="flex items-center space-x-6">
            <div className="flex items-center space-x-2 bg-white/10 backdrop-blur-sm rounded-full px-3 py-1">
              <Mail className="w-4 h-4 text-blue-300" />
              <span className="font-medium">sunshineindustries99@gmail.com</span>
            </div>
          </div>
          <div className="flex items-center space-x-2 bg-white/10 backdrop-blur-sm rounded-full px-3 py-1">
            <MapPin className="w-4 h-4 text-orange-300" />
            <span className="font-medium">Gondia, Maharashtra</span>
          </div>
        </div>
      </div>

      {/* Main Header */}
      <header className={`fixed w-full z-50 transition-all duration-500 ${
        isScrolled 
          ? 'bg-white/95 backdrop-blur-xl shadow-2xl py-3 border-b border-gray-200/50' 
          : 'bg-white/90 backdrop-blur-lg py-6'
      }`}>
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="flex justify-between items-center">
            {/* Company Name Only */}
            <div className="flex items-center group cursor-pointer" onClick={() => scrollToSection('home')}>
              <div className="relative">
                <div className="relative">
                  <h1 className="text-4xl lg:text-5xl font-black bg-gradient-to-r from-slate-800 via-blue-900 to-indigo-900 bg-clip-text text-transparent tracking-tight group-hover:scale-105 transition-transform duration-300">
                    SUNSHINE
                  </h1>
                  <div className="flex items-center space-x-2">
                    <p className="text-xl font-bold bg-gradient-to-r from-orange-500 to-red-500 bg-clip-text text-transparent tracking-wider group-hover:from-orange-400 group-hover:to-pink-500 transition-all duration-300">
                      INDUSTRIES
                    </p>
                    <div className="flex space-x-1">
                      <div className="w-2 h-2 bg-gradient-to-r from-orange-400 to-red-500 rounded-full animate-pulse"></div>
                      <Sparkles className="w-4 h-4 text-yellow-500 animate-spin group-hover:text-orange-500 transition-colors duration-300" />
                    </div>
                  </div>
                </div>
              </div>
            </div>

            {/* Desktop Navigation */}
            <nav className="hidden md:flex space-x-1">
              {['Home', 'About', 'Products', 'Infrastructure', 'Contact'].map((item) => (
                <button
                  key={item}
                  onClick={() => scrollToSection(item.toLowerCase())}
                  className="relative px-6 py-3 text-gray-700 hover:text-white font-semibold transition-all duration-300 rounded-xl group overflow-hidden"
                >
                  <div className="absolute inset-0 bg-gradient-to-r from-orange-500 to-red-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left rounded-xl"></div>
                  <span className="relative z-10">{item}</span>
                </button>
              ))}
            </nav>

            {/* Enhanced CTA Button */}
            <div className="hidden md:block">
              <button
                onClick={() => scrollToSection('contact')}
                className="relative group overflow-hidden bg-gradient-to-r from-orange-500 via-red-500 to-pink-500 text-white px-8 py-4 rounded-2xl font-bold shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300"
              >
                <div className="absolute inset-0 bg-gradient-to-r from-pink-500 via-red-500 to-orange-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <span className="relative z-10 flex items-center">
                  Get Quote
                  <Sparkles className="w-4 h-4 ml-2 animate-spin" />
                </span>
              </button>
            </div>

            {/* Mobile Menu Button */}
            <button
              onClick={() => setIsMenuOpen(!isMenuOpen)}
              className="md:hidden p-3 rounded-xl bg-gradient-to-r from-orange-500 to-red-500 text-white hover:shadow-lg transform hover:scale-105 transition-all duration-200"
              aria-label="Toggle menu"
            >
              {isMenuOpen ? <X className="w-6 h-6" /> : <Menu className="w-6 h-6" />}
            </button>
          </div>
        </div>

        {/* Enhanced Mobile Menu */}
        {isMenuOpen && (
          <div className="md:hidden bg-white/95 backdrop-blur-xl border-t border-gray-200/50 shadow-2xl">
            <div className="px-4 py-6 space-y-3">
              {['Home', 'About', 'Products', 'Infrastructure', 'Contact'].map((item) => (
                <button
                  key={item}
                  onClick={() => scrollToSection(item.toLowerCase())}
                  className="block w-full text-left px-6 py-4 text-gray-700 hover:text-white font-semibold rounded-xl transition-all duration-300 hover:bg-gradient-to-r hover:from-orange-500 hover:to-red-500 hover:shadow-lg transform hover:scale-105"
                >
                  {item}
                </button>
              ))}
              <button
                onClick={() => scrollToSection('contact')}
                className="w-full bg-gradient-to-r from-orange-500 to-red-500 text-white px-6 py-4 rounded-xl font-bold mt-4 shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 flex items-center justify-center"
              >
                Get Quote
                <Sparkles className="w-4 h-4 ml-2 animate-spin" />
              </button>
            </div>
          </div>
        )}
      </header>
    </>
  );
};

export default Header;