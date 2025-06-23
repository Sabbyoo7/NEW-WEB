import React from 'react';
import { Factory, Cog, Shield, Recycle, Users, Award } from 'lucide-react';

const Infrastructure = () => {
  const features = [
    {
      icon: Factory,
      title: "State-of-the-Art Facility",
      description: "Modern manufacturing facility equipped with latest injection molding technology",
      color: "from-blue-500 to-blue-600"
    },
    {
      icon: Cog,
      title: "Advanced Machinery",
      description: "Precision injection molding machines for complex and intricate designs",
      color: "from-green-500 to-green-600"
    },
    {
      icon: Shield,
      title: "Quality Control",
      description: "Rigorous testing at CIPET Labs ensuring highest quality standards",
      color: "from-orange-500 to-orange-600"
    },
    {
      icon: Recycle,
      title: "Sustainable Practices",
      description: "Eco-conscious production with advanced waste management systems",
      color: "from-purple-500 to-purple-600"
    },
    {
      icon: Users,
      title: "Skilled Team",
      description: "Expert technicians and engineers ensuring precision manufacturing",
      color: "from-red-500 to-red-600"
    },
    {
      icon: Award,
      title: "ISO Certified",
      description: "ISO 9001:2015 certified processes maintaining international standards",
      color: "from-indigo-500 to-indigo-600"
    }
  ];

  return (
    <section id="infrastructure" className="py-20 bg-gray-50">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {/* Header */}
        <div className="text-center mb-16">
          <h2 className="text-4xl font-bold text-gray-900 mb-4">Factory & Infrastructure</h2>
          <p className="text-xl text-gray-600 max-w-3xl mx-auto">
            Our state-of-the-art manufacturing facility combines cutting-edge technology with sustainable practices
          </p>
        </div>

        {/* Main Content */}
        <div className="grid lg:grid-cols-2 gap-12 mb-16">
          <div className="space-y-6">
            <h3 className="text-2xl font-bold text-gray-900">Manufacturing Excellence</h3>
            <p className="text-gray-600 leading-relaxed">
              Our state-of-the-art manufacturing facility is equipped with the latest injection molding technology, 
              enabling us to produce a wide variety of plastic products that meet the highest industry standards. 
              With a dedicated focus on quality, efficiency, and sustainability, our infrastructure supports the 
              production of plastic household goods, stylish furniture, and durable industrial products — all under one roof.
            </p>
            <p className="text-gray-600 leading-relaxed">
              Our facility is home to a diverse range of precision injection molding machines, allowing us to create 
              complex and intricate designs with consistent accuracy and high output. These machines are operated by 
              a skilled team of technicians and engineers who ensure that each product is manufactured to exacting 
              standards of durability, functionality, and design.
            </p>
            
            {/* Key Stats */}
            <div className="grid grid-cols-2 gap-6 mt-8">
              <div className="bg-white rounded-xl p-6 shadow-lg">
                <div className="text-3xl font-bold text-blue-600 mb-2">25+</div>
                <div className="text-gray-700">Injection Molding Machines</div>
              </div>
              <div className="bg-white rounded-xl p-6 shadow-lg">
                <div className="text-3xl font-bold text-green-600 mb-2">50,000</div>
                <div className="text-gray-700">Sq. Ft. Facility</div>
              </div>
              <div className="bg-white rounded-xl p-6 shadow-lg">
                <div className="text-3xl font-bold text-orange-600 mb-2">100+</div>
                <div className="text-gray-700">Skilled Workers</div>
              </div>
              <div className="bg-white rounded-xl p-6 shadow-lg">
                <div className="text-3xl font-bold text-purple-600 mb-2">24/7</div>
                <div className="text-gray-700">Production Capacity</div>
              </div>
            </div>
          </div>

          <div className="space-y-6">
            <div className="bg-gradient-to-br from-blue-900 to-orange-600 rounded-2xl p-8 text-white">
              <h3 className="text-2xl font-bold mb-4">Quality Assurance</h3>
              <p className="text-blue-100 mb-6">
                With robust quality control systems in place, our factory ensures that each plastic product, 
                whether it's for the home, office, or industrial use, undergoes rigorous testing at CIPET Labs 
                to meet customer expectations.
              </p>
              <div className="space-y-3">
                <div className="flex items-center">
                  <div className="w-2 h-2 bg-orange-400 rounded-full mr-3"></div>
                  <span>CIPET Lab Testing</span>
                </div>
                <div className="flex items-center">
                  <div className="w-2 h-2 bg-orange-400 rounded-full mr-3"></div>
                  <span>ISO 9001:2015 Certified</span>
                </div>
                <div className="flex items-center">
                  <div className="w-2 h-2 bg-orange-400 rounded-full mr-3"></div>
                  <span>100% Quality Inspection</span>
                </div>
                <div className="flex items-center">
                  <div className="w-2 h-2 bg-orange-400 rounded-full mr-3"></div>
                  <span>Advanced Testing Equipment</span>
                </div>
              </div>
            </div>

            <div className="bg-white rounded-2xl p-8 shadow-lg">
              <h3 className="text-2xl font-bold text-gray-900 mb-4">Sustainability Focus</h3>
              <p className="text-gray-600 mb-6">
                We prioritize sustainable practices in every phase of production, incorporating recyclable 
                materials and optimizing energy efficiency throughout the facility.
              </p>
              <div className="space-y-3">
                <div className="flex items-center">
                  <div className="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
                  <span className="text-gray-700">Recyclable Materials</span>
                </div>
                <div className="flex items-center">
                  <div className="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
                  <span className="text-gray-700">Energy Efficient Processes</span>
                </div>
                <div className="flex items-center">
                  <div className="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
                  <span className="text-gray-700">Waste Management Systems</span>
                </div>
                <div className="flex items-center">
                  <div className="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
                  <span className="text-gray-700">Environmental Compliance</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        {/* Features Grid */}
        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          {features.map((feature, index) => {
            const IconComponent = feature.icon;
            return (
              <div
                key={index}
                className="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2"
              >
                <div className={`w-16 h-16 bg-gradient-to-br ${feature.color} rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300`}>
                  <IconComponent className="w-8 h-8 text-white" />
                </div>
                
                <h3 className="text-xl font-bold text-gray-900 mb-3">{feature.title}</h3>
                <p className="text-gray-600">{feature.description}</p>
              </div>
            );
          })}
        </div>

        {/* Location Info */}
        <div className="mt-16 bg-white rounded-2xl p-8 shadow-lg">
          <div className="grid md:grid-cols-3 gap-8">
            <div>
              <h3 className="text-2xl font-bold text-gray-900 mb-4">Head Office & Factory</h3>
              <p className="text-gray-600 mb-2">M/s. Sunshine Industries</p>
              <p className="text-gray-600 mb-2">Plot No. B-7, MIDC</p>
              <p className="text-gray-600 mb-2">Mundipar</p>
              <p className="text-gray-600">GONDIA, Maharashtra - 441614</p>
            </div>
            <div>
              <h3 className="text-2xl font-bold text-gray-900 mb-4">Branch Office - Raipur</h3>
              <p className="text-gray-600 mb-2">Chandra Complex, Hotel Capital</p>
              <p className="text-gray-600 mb-2">Near HDFC Bank, Fafadih Chowk</p>
              <p className="text-gray-600">Raipur, Chhattisgarh - 492001</p>
            </div>
            <div>
              <h3 className="text-2xl font-bold text-gray-900 mb-4">Branch Office - Nagpur</h3>
              <p className="text-gray-600">Nagpur, Maharashtra</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Infrastructure;