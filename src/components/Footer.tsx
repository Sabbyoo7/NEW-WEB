import React from 'react';
import { Phone, Mail, MapPin, Globe, Award, Star, Sparkles } from 'lucide-react';

const Footer = () => {
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

  return (
    <footer className="relative bg-gradient-to-br from-slate-900 via-blue-900 to-indigo-900 text-white overflow-hidden">
      {/* Background Pattern */}
      <div className="absolute inset-0">
        <div className="absolute top-20 left-20 w-32 h-32 bg-gradient-to-r from-orange-500/20 to-red-500/20 rounded-full blur-xl animate-pulse"></div>
        <div className="absolute bottom-20 right-20 w-48 h-48 bg-gradient-to-r from-blue-500/20 to-purple-500/20 rounded-full blur-xl animate-pulse delay-1000"></div>
        <div className="absolute top-1/2 left-1/3 w-24 h-24 bg-gradient-to-r from-pink-500/20 to-orange-500/20 rounded-full blur-xl animate-pulse delay-500"></div>
      </div>

      <div className="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div className="grid lg:grid-cols-4 md:grid-cols-2 gap-12">
          {/* Company Info without Logo */}
          <div className="space-y-8">
            <div className="group">
              <div className="relative">
                <div className="relative">
                  <h3 className="text-4xl font-black bg-gradient-to-r from-white to-blue-200 bg-clip-text text-transparent tracking-tight group-hover:scale-105 transition-transform duration-300">
                    SUNSHINE
                  </h3>
                  <div className="flex items-center space-x-2">
                    <p className="text-xl font-bold bg-gradient-to-r from-orange-400 to-red-500 bg-clip-text text-transparent tracking-wide group-hover:from-orange-300 group-hover:to-pink-400 transition-all duration-300">
                      INDUSTRIES
                    </p>
                    <Sparkles className="w-4 h-4 text-yellow-400 animate-spin group-hover:text-orange-400 transition-colors duration-300" />
                  </div>
                </div>
              </div>
            </div>
            
            <p className="text-blue-100 leading-relaxed text-lg">
              Leading manufacturer of premium plastic products, committed to quality, innovation, and sustainability.
            </p>
            
            <div className="flex items-center space-x-3 bg-gradient-to-r from-orange-500/20 to-red-500/20 backdrop-blur-sm rounded-full px-4 py-3 border border-orange-400/30 hover:border-orange-400/50 transition-all duration-300 group">
              <Award className="w-6 h-6 text-orange-400 group-hover:scale-110 transition-transform duration-300" />
              <span className="font-bold text-orange-200">ISO 9001:2015 Certified</span>
              <Star className="w-4 h-4 text-yellow-400 animate-spin group-hover:animate-pulse" />
            </div>
          </div>

          {/* Enhanced Quick Links */}
          <div>
            <h4 className="text-2xl font-bold mb-8 bg-gradient-to-r from-white to-blue-200 bg-clip-text text-transparent">
              Quick Links
            </h4>
            <ul className="space-y-4">
              {['Home', 'About', 'Products', 'Infrastructure', 'Contact'].map((item) => (
                <li key={item}>
                  <button
                    onClick={() => scrollToSection(item.toLowerCase())}
                    className="group flex items-center text-blue-200 hover:text-white transition-all duration-300 text-lg font-medium"
                  >
                    <div className="w-2 h-2 bg-gradient-to-r from-orange-400 to-red-500 rounded-full mr-3 group-hover:scale-150 transition-transform duration-300"></div>
                    {item}
                  </button>
                </li>
              ))}
            </ul>
          </div>

          {/* Enhanced Products */}
          <div>
            <h4 className="text-2xl font-bold mb-8 bg-gradient-to-r from-white to-blue-200 bg-clip-text text-transparent">
              Our Products
            </h4>
            <ul className="space-y-4 text-blue-200">
              {['Household Products', 'Plastic Furniture', 'Industrial Products', 'Waste Management', 'Custom Solutions'].map((item) => (
                <li key={item} className="group flex items-center text-lg">
                  <div className="w-2 h-2 bg-gradient-to-r from-blue-400 to-purple-500 rounded-full mr-3 group-hover:scale-150 transition-transform duration-300"></div>
                  {item}
                </li>
              ))}
            </ul>
          </div>

          {/* Enhanced Contact Info */}
          <div>
            <h4 className="text-2xl font-bold mb-8 bg-gradient-to-r from-white to-blue-200 bg-clip-text text-transparent">
              Contact Info
            </h4>
            <div className="space-y-6">
              <div className="group flex items-start space-x-4 p-4 bg-gradient-to-r from-white/5 to-white/10 rounded-2xl hover:from-white/10 hover:to-white/15 transition-all duration-300 border border-white/10 hover:border-white/20">
                <Phone className="w-6 h-6 text-orange-400 mt-1 flex-shrink-0 group-hover:scale-110 transition-transform duration-300" />
                <div>
                  <p className="text-white font-semibold text-lg">+91-9371636220</p>
                  <p className="text-blue-200">+91-9890953585</p>
                </div>
              </div>
              
              <div className="group flex items-start space-x-4 p-4 bg-gradient-to-r from-white/5 to-white/10 rounded-2xl hover:from-white/10 hover:to-white/15 transition-all duration-300 border border-white/10 hover:border-white/20">
                <Mail className="w-6 h-6 text-blue-400 mt-1 flex-shrink-0 group-hover:scale-110 transition-transform duration-300" />
                <p className="text-blue-200 font-medium">sunshineindustries99@gmail.com</p>
              </div>
              
              <div className="group flex items-start space-x-4 p-4 bg-gradient-to-r from-white/5 to-white/10 rounded-2xl hover:from-white/10 hover:to-white/15 transition-all duration-300 border border-white/10 hover:border-white/20">
                <Globe className="w-6 h-6 text-green-400 mt-1 flex-shrink-0 group-hover:scale-110 transition-transform duration-300" />
                <p className="text-blue-200 font-medium">www.shineplastindia.com</p>
              </div>
              
              <div className="group flex items-start space-x-4 p-4 bg-gradient-to-r from-white/5 to-white/10 rounded-2xl hover:from-white/10 hover:to-white/15 transition-all duration-300 border border-white/10 hover:border-white/20">
                <MapPin className="w-6 h-6 text-purple-400 mt-1 flex-shrink-0 group-hover:scale-110 transition-transform duration-300" />
                <div>
                  <p className="text-white font-semibold mb-2">Head Office & Factory:</p>
                  <p className="text-blue-200 text-sm leading-relaxed">
                    Plot No. B-7, MIDC, Mundipar<br />
                    GONDIA, Maharashtra - 441614
                  </p>
                  <p className="text-white font-semibold mt-4 mb-2">Branch Offices:</p>
                  <p className="text-blue-200 text-sm">Raipur, Chhattisgarh</p>
                  <p className="text-blue-200 text-sm">Nagpur, Maharashtra</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        {/* Enhanced Bottom Bar */}
        <div className="border-t border-white/20 mt-16 pt-12">
          <div className="flex flex-col md:flex-row justify-between items-center space-y-6 md:space-y-0">
            <div className="flex items-center space-x-4">
              <p className="text-blue-200 text-lg">
                © 2024 <span className="font-bold bg-gradient-to-r from-orange-400 to-red-500 bg-clip-text text-transparent">Sunshine Industries</span>. All rights reserved.
              </p>
            </div>
            <div className="flex items-center space-x-3 bg-gradient-to-r from-orange-500/20 to-red-500/20 backdrop-blur-sm rounded-full px-6 py-3 border border-orange-400/30 hover:border-orange-400/50 transition-all duration-300 group">
              <Star className="w-5 h-5 text-yellow-400 animate-spin group-hover:animate-pulse" />
              <span className="text-orange-200 font-bold">Manufacturers of Premium Plastic Products</span>
              <Sparkles className="w-4 h-4 text-yellow-400 animate-pulse group-hover:animate-spin" />
            </div>
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;