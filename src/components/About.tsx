import React from 'react';
import { Target, Eye, CheckCircle, Leaf, Award, Users, Sparkles, Star, Zap } from 'lucide-react';

const About = () => {
  return (
    <section id="about" className="py-24 bg-gradient-to-br from-gray-50 via-blue-50 to-indigo-50 relative overflow-hidden">
      {/* Background Pattern */}
      <div className="absolute inset-0">
        <div className="absolute top-20 left-20 w-32 h-32 bg-gradient-to-r from-orange-400/20 to-red-500/20 rounded-full blur-xl animate-pulse"></div>
        <div className="absolute bottom-20 right-20 w-48 h-48 bg-gradient-to-r from-blue-400/20 to-purple-500/20 rounded-full blur-xl animate-pulse delay-1000"></div>
      </div>

      <div className="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {/* Enhanced Header */}
        <div className="text-center mb-20">
          <div className="inline-flex items-center bg-gradient-to-r from-orange-500/20 to-red-500/20 backdrop-blur-sm rounded-full px-6 py-3 mb-6 border border-orange-400/30">
            <Sparkles className="w-5 h-5 text-orange-500 mr-2 animate-spin" />
            <span className="font-bold text-orange-600">About Our Company</span>
          </div>
          <h2 className="text-5xl lg:text-6xl font-black mb-6">
            <span className="bg-gradient-to-r from-slate-800 via-blue-900 to-indigo-900 bg-clip-text text-transparent">
              SUNSHINE INDUSTRIES
            </span>
          </h2>
          <p className="text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
            Leading the plastic manufacturing industry with innovation, quality, and sustainability at our core
          </p>
        </div>

        {/* Enhanced Main Content */}
        <div className="grid lg:grid-cols-2 gap-16 mb-20">
          <div className="space-y-8">
            <div className="relative">
              <h3 className="text-3xl font-bold text-gray-900 mb-6 flex items-center">
                Who We Are
                <Star className="w-8 h-8 ml-3 text-yellow-500 animate-pulse" />
              </h3>
            </div>
            <div className="space-y-6 text-gray-600 text-lg leading-relaxed">
              <p>
                We are a leading manufacturer specializing in high-quality plastic products that cater to a diverse range of industries and applications. Whether it's enhancing the comfort and style of your home with our durable plastic household products and furniture, or providing reliable, high-performance solutions for industrial applications, we are committed to delivering products that offer both innovation and value.
              </p>
              <p>
                Our product portfolio includes everything from functional household essentials and stylish plastic furniture to robust industrial components designed to withstand the demands of commercial and manufacturing environments. Each item is crafted with precision, using sustainable materials and advanced manufacturing techniques.
              </p>
            </div>
            
            {/* Enhanced Key Features */}
            <div className="grid grid-cols-2 gap-6 mt-10">
              {[
                { text: "ISO 9001:2015 Certified", icon: Award, color: "from-blue-500 to-blue-600" },
                { text: "Eco-Friendly Production", icon: Leaf, color: "from-green-500 to-green-600" },
                { text: "Advanced Technology", icon: Zap, color: "from-purple-500 to-purple-600" },
                { text: "Quality Assurance", icon: CheckCircle, color: "from-orange-500 to-orange-600" }
              ].map((feature, index) => {
                const IconComponent = feature.icon;
                return (
                  <div key={index} className="group flex items-center space-x-4 bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105 border border-gray-100">
                    <div className={`w-12 h-12 bg-gradient-to-r ${feature.color} rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300`}>
                      <IconComponent className="w-6 h-6 text-white" />
                    </div>
                    <span className="text-gray-800 font-semibold text-lg">{feature.text}</span>
                  </div>
                );
              })}
            </div>
          </div>

          <div className="space-y-8">
            {/* Enhanced Vision */}
            <div className="group bg-gradient-to-br from-white to-blue-50 rounded-3xl p-10 shadow-2xl hover:shadow-3xl transition-all duration-300 transform hover:-translate-y-2 border border-blue-100">
              <div className="flex items-center mb-6">
                <div className="w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                  <Eye className="w-8 h-8 text-white" />
                </div>
                <div>
                  <h3 className="text-3xl font-bold text-gray-900">Our Vision</h3>
                  <Sparkles className="w-6 h-6 text-blue-500 animate-pulse mt-1" />
                </div>
              </div>
              <p className="text-gray-700 leading-relaxed text-lg">
                To be the leading manufacturer of sustainable, high-quality plastic consumer goods that enhance daily living, while reducing environmental impact through innovation and responsible production practices.
              </p>
            </div>

            {/* Enhanced Mission */}
            <div className="group bg-gradient-to-br from-white to-orange-50 rounded-3xl p-10 shadow-2xl hover:shadow-3xl transition-all duration-300 transform hover:-translate-y-2 border border-orange-100">
              <div className="flex items-center mb-6">
                <div className="w-16 h-16 bg-gradient-to-r from-orange-500 to-red-600 rounded-2xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                  <Target className="w-8 h-8 text-white" />
                </div>
                <div>
                  <h3 className="text-3xl font-bold text-gray-900">Our Mission</h3>
                  <Star className="w-6 h-6 text-orange-500 animate-spin mt-1" />
                </div>
              </div>
              <p className="text-gray-700 leading-relaxed text-lg">
                Our mission is to design and manufacture plastic consumer products that combine functionality, aesthetics, sustainability and affordability. We strive to exceed customer expectations through efficient production, consistent quality, and a commitment to continuous improvement.
              </p>
            </div>
          </div>
        </div>

        {/* Enhanced Values */}
        <div className="grid md:grid-cols-3 gap-10">
          {[
            {
              icon: Award,
              title: "Quality Excellence",
              description: "Committed to delivering products that meet the highest industry standards with rigorous quality control.",
              color: "from-blue-500 to-blue-600",
              bgColor: "from-blue-50 to-blue-100"
            },
            {
              icon: Leaf,
              title: "Sustainability",
              description: "Dedicated to eco-friendly practices and reducing environmental impact through responsible manufacturing.",
              color: "from-green-500 to-green-600",
              bgColor: "from-green-50 to-green-100"
            },
            {
              icon: Users,
              title: "Customer Focus",
              description: "Putting customer satisfaction at the heart of everything we do with personalized service and support.",
              color: "from-orange-500 to-orange-600",
              bgColor: "from-orange-50 to-orange-100"
            }
          ].map((value, index) => {
            const IconComponent = value.icon;
            return (
              <div key={index} className="group text-center">
                <div className={`relative bg-gradient-to-br ${value.bgColor} rounded-3xl p-10 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-3 border border-gray-200`}>
                  <div className="absolute top-6 right-6">
                    <Sparkles className="w-6 h-6 text-yellow-500 animate-pulse" />
                  </div>
                  <div className={`w-20 h-20 bg-gradient-to-br ${value.color} rounded-3xl flex items-center justify-center mx-auto mb-8 group-hover:scale-110 transition-transform duration-300 shadow-lg`}>
                    <IconComponent className="w-10 h-10 text-white" />
                  </div>
                  <h3 className="text-2xl font-bold text-gray-900 mb-4">{value.title}</h3>
                  <p className="text-gray-600 text-lg leading-relaxed">{value.description}</p>
                </div>
              </div>
            );
          })}
        </div>
      </div>
    </section>
  );
};

export default About;