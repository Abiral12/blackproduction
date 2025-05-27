<?php
require 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Custom Jersey Maker | Design Your Perfect Teamwear</title>
  <meta name="description" content="Create custom jerseys, hoodies, and tracksuits for your team with premium quality and unique designs.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      scroll-behavior: smooth;
    }
    .hero-text {
      text-shadow: 0 2px 4px rgba(0,0,0,0.3);
    }
    /* .floating {
      animation: floating 3s ease-in-out infinite;
    }
    @keyframes floating {
      0% { transform: translateY(0px); }
      50% { transform: translateY(-15px); }
      100% { transform: translateY(0px); }
    } */
    .gradient-text {
      background: linear-gradient(45deg, #F67011, #F9A826);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
  </style>
</head>
<body class="text-white bg-gray-900">

  <?php include 'navbar.php'; ?>

  <!-- Hero Section -->
  <section class="min-h-screen flex flex-col items-center justify-center px-4 text-center relative bg-cover bg-center bg-fixed" style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('./images/bg.jpg');">
    <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/50 to-black/70 z-0"></div>

    <div class="relative z-10 max-w-6xl mx-auto">
      <h1 class="text-5xl md:text-7xl lg:text-8xl font-extrabold mb-6 tracking-tight leading-tight hero-text animate__animated animate__fadeInDown">
        YOUR <span class="gradient-text">STYLE.</span> YOUR<br>
        <span class="gradient-text">JERSEY.</span>
      </h1>
      <p class="text-gray-300 mb-10 text-xl max-w-2xl mx-auto animate__animated animate__fadeIn animate__delay-1s">
        Premium custom jerseys tailored for your squad. Express your identity with unique designs, delivered fast.
      </p>

      <!-- Buttons -->
      <div class="flex flex-wrap gap-6 justify-center mb-16 animate__animated animate__fadeInUp animate__delay-1s">
        <button class="bg-gradient-to-r from-[#F67011] to-[#F9A826] hover:from-[#F67011] hover:to-[#F67011] text-white px-10 py-4 rounded-full text-lg font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg shadow-orange-500/30">
          START DESIGNING
        </button>
        <button class="border-2 border-[#F67011] text-[#F67011] hover:bg-[#F67011] hover:text-white px-10 py-4 rounded-full text-lg font-semibold transition-all duration-300 transform hover:scale-105">
          SHOP COLLECTIONS
        </button>
      </div>
      
    </div>

    <!-- Scroll Indicator -->
    <a href="#what-we-offer" class="absolute bottom-8 z-10 animate-bounce">
      <div class="border-2 border-gray-300 rounded-full w-8 h-14 flex items-start justify-center p-1">
        <div class="w-1 h-3 bg-gradient-to-b from-[#F67011] to-[#F9A826] rounded-full animate-bounce"></div>
      </div>
    </a>
  </section>

  <!-- What We Offer Section -->
<section id="what-we-offer" class="relative bg-gradient-to-b from-gray-900 via-[#0a0a0a] to-[#0F0F0F] text-white py-28 px-6 overflow-hidden">
  <!-- Animated background elements -->
  <div class="absolute inset-0 overflow-hidden">
    <div class="absolute -left-20 -top-20 w-96 h-96 bg-[#F67011]/5 rounded-full filter blur-3xl animate-pulse"></div>
    <div class="absolute -right-20 bottom-1/3 w-80 h-80 bg-[#F9A826]/5 rounded-full filter blur-3xl animate-pulse animation-delay-2000"></div>
    <div class="absolute right-1/4 top-1/4 w-64 h-64 bg-[#F67011]/10 rounded-full filter blur-3xl animate-pulse animation-delay-4000"></div>
  </div>

  <!-- Floating particles -->
  <div class="particles absolute inset-0 overflow-hidden">
    <?php for($i=0; $i<30; $i++): ?>
      <div class="absolute rounded-full bg-[#F67011]/20" style="
        width: <?= rand(2, 6) ?>px;
        height: <?= rand(2, 6) ?>px;
        top: <?= rand(0, 100) ?>%;
        left: <?= rand(0, 100) ?>%;
        animation: float <?= rand(10, 30) ?>s linear infinite;
        animation-delay: -<?= rand(0, 20) ?>s;
      "></div>
    <?php endfor; ?>
  </div>

  <div class="max-w-7xl mx-auto relative z-10">
    <div class="text-center mb-24">
      <span class="text-[#F67011] font-semibold tracking-widest text-sm uppercase">Exclusive Collections</span>
      <h2 class="text-5xl md:text-6xl font-extrabold mt-4 mb-8">
        <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#F67011] via-[#F9A826] to-[#F67011] animate-gradient-x">Premium</span> Offerings
      </h2>
      <div class="w-24 h-1.5 bg-gradient-to-r from-transparent via-[#F67011] to-transparent mx-auto"></div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
      <!-- Jersey -->
      <div class="group relative">
        <div class="absolute inset-0 bg-gradient-to-br from-[#F67011]/30 to-[#F9A826]/10 rounded-3xl transform group-hover:scale-105 transition-all duration-700 opacity-0 group-hover:opacity-100 -z-10"></div>
        
        <div class="h-full bg-[#1A191D]/80 backdrop-blur-sm border border-gray-800/50 rounded-3xl p-8 transition-all duration-500 group-hover:border-[#F67011]/30 group-hover:shadow-2xl group-hover:shadow-[#F67011]/10 overflow-hidden">
          <div class="relative">
            <!-- Floating image container -->
            <div class="bg-gradient-to-br from-[#1A191D] to-gray-900 rounded-2xl p-1 mb-8 h-60 flex items-center justify-center overflow-hidden border border-gray-800/50 group-hover:border-[#F67011]/30 transition-all duration-500">
              <div class="absolute inset-0 bg-[url('./images/dot-pattern.png')] opacity-10"></div>
              <img src="./images/jersey1.png" alt="Jersey" class="relative z-10 h-full object-contain transition-transform duration-700 group-hover:scale-110">
            </div>
            
            <h3 class="text-2xl font-bold mb-4 text-transparent bg-clip-text bg-gradient-to-r from-[#F67011] to-[#F9A826]">Elite Jersey Series</h3>
            <p class="text-gray-300/90 mb-6 leading-relaxed">Professional-grade jerseys with nano-fiber technology for ultimate performance.</p>
            
            <div class="flex justify-between items-center">
              <a href="#" class="flex items-center text-[#F67011] group-hover:text-[#F9A826] transition-colors font-medium">
                Discover More
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 transition-transform group-hover:translate-x-1" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </a>
              <!-- <span class="text-xs text-gray-500 group-hover:text-[#F9A826]/70 transition-colors">Starting at $89</span> -->
            </div>
          </div>
          
          <!-- Hover shine effect -->
          <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -inset-12 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
              <div class="absolute inset-0 bg-gradient-to-r from-transparent via-[#F67011]/10 to-transparent transform rotate-45 translate-x-full group-hover:-translate-x-full transition-transform duration-1000"></div>
            </div>
          </div>
        </div>
      </div>

      <!-- Hoodie -->
      <div class="group relative">
        <div class="absolute inset-0 bg-gradient-to-br from-[#F67011]/30 to-[#F9A826]/10 rounded-3xl transform group-hover:scale-105 transition-all duration-700 opacity-0 group-hover:opacity-100 -z-10"></div>
        
        <div class="h-full bg-[#1A191D]/80 backdrop-blur-sm border border-gray-800/50 rounded-3xl p-8 transition-all duration-500 group-hover:border-[#F67011]/30 group-hover:shadow-2xl group-hover:shadow-[#F67011]/10 overflow-hidden">
          <div class="relative">
            <!-- Floating image container -->
            <div class="bg-gradient-to-br from-[#1A191D] to-gray-900 rounded-2xl p-1 mb-8 h-60 flex items-center justify-center overflow-hidden border border-gray-800/50 group-hover:border-[#F67011]/30 transition-all duration-500">
              <div class="absolute inset-0 bg-[url('./images/dot-pattern.png')] opacity-10"></div>
              <img src="./images/hoodie.png" alt="Hoodie" class="relative z-10 h-full object-contain transition-transform duration-700 group-hover:scale-110">
            </div>
            
            <h3 class="text-2xl font-bold mb-4 text-transparent bg-clip-text bg-gradient-to-r from-[#F67011] to-[#F9A826]">Luxury Hoodie Line</h3>
            <p class="text-gray-300/90 mb-6 leading-relaxed">Premium heavyweight hoodies with custom embroidery and metallic foil options. Limited edition designs available.</p>
            
            <div class="flex justify-between items-center">
              <a href="#" class="flex items-center text-[#F67011] group-hover:text-[#F9A826] transition-colors font-medium">
                Discover More
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 transition-transform group-hover:translate-x-1" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </a>
              <!-- <span class="text-xs text-gray-500 group-hover:text-[#F9A826]/70 transition-colors">Starting at $79</span> -->
            </div>
          </div>
          
          <!-- Hover shine effect -->
          <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -inset-12 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
              <div class="absolute inset-0 bg-gradient-to-r from-transparent via-[#F67011]/10 to-transparent transform rotate-45 translate-x-full group-hover:-translate-x-full transition-transform duration-1000"></div>
            </div>
          </div>
        </div>
      </div>

      <!-- Track Suit -->
      <div class="group relative">
        <div class="absolute inset-0 bg-gradient-to-br from-[#F67011]/30 to-[#F9A826]/10 rounded-3xl transform group-hover:scale-105 transition-all duration-700 opacity-0 group-hover:opacity-100 -z-10"></div>
        
        <div class="h-full bg-[#1A191D]/80 backdrop-blur-sm border border-gray-800/50 rounded-3xl p-8 transition-all duration-500 group-hover:border-[#F67011]/30 group-hover:shadow-2xl group-hover:shadow-[#F67011]/10 overflow-hidden">
          <div class="relative">
            <!-- Floating image container -->
            <div class="bg-gradient-to-br from-[#1A191D] to-gray-900 rounded-2xl p-1 mb-8 h-60 flex items-center justify-center overflow-hidden border border-gray-800/50 group-hover:border-[#F67011]/30 transition-all duration-500">
              <div class="absolute inset-0 bg-[url('./images/dot-pattern.png')] opacity-10"></div>
              <img src="./images/tracksuit1.png" alt="Track Suit" class="relative z-10 h-full object-contain transition-transform duration-700 group-hover:scale-110">
            </div>
            
            <h3 class="text-2xl font-bold mb-4 text-transparent bg-clip-text bg-gradient-to-r from-[#F67011] to-[#F9A826]">Pro Track Collection</h3>
            <p class="text-gray-300/90 mb-6 leading-relaxed">High-performance tracksuits with aerodynamic design. Custom team colors and premium breathable fabric.</p>
            
            <div class="flex justify-between items-center">
              <a href="#" class="flex items-center text-[#F67011] group-hover:text-[#F9A826] transition-colors font-medium">
                Discover More
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 transition-transform group-hover:translate-x-1" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </a>
              <!-- <span class="text-xs text-gray-500 group-hover:text-[#F9A826]/70 transition-colors">Starting at $129</span> -->
            </div>
          </div>
          
          <!-- Hover shine effect -->
          <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -inset-12 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
              <div class="absolute inset-0 bg-gradient-to-r from-transparent via-[#F67011]/10 to-transparent transform rotate-45 translate-x-full group-hover:-translate-x-full transition-transform duration-1000"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <style>
    @keyframes float {
      0% { transform: translateY(0) translateX(0); }
      50% { transform: translateY(-100px) translateX(20px); }
      100% { transform: translateY(0) translateX(0); }
    }
    .animate-gradient-x {
      background-size: 200% 200%;
      animation: gradient-x 6s ease infinite;
    }
    @keyframes gradient-x {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }
    .animation-delay-2000 {
      animation-delay: 2s;
    }
    .animation-delay-4000 {
      animation-delay: 4s;
    }
  </style>
</section>

  <!-- Testimonials Section -->
  <section class="py-24 px-6 bg-[#0F0F0F]">
    <div class="max-w-7xl mx-auto">
      <div class="text-center mb-20">
        <span class="text-[#F67011] font-semibold">CUSTOMER STORIES</span>
        <h2 class="text-4xl md:text-5xl font-extrabold mt-3 mb-6">
          <span class="gradient-text">What Our</span> Clients Say
        </h2>
        <div class="w-20 h-1 bg-gradient-to-r from-[#F67011] to-[#F9A826] mx-auto"></div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Testimonial 1 -->
        <div class="bg-[#1A191D] rounded-2xl p-8 border border-gray-800 hover:border-[#F67011]/50 transition-all duration-300">
          <div class="flex items-center mb-6">
            <div class="w-12 h-12 rounded-full overflow-hidden mr-4 border-2 border-[#F67011]">
              <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Client" class="w-full h-full object-cover">
            </div>
            <div>
              <h4 class="font-bold">Michael T.</h4>
              <div class="flex text-[#F9A826] mt-1">
                <?php for($i=0; $i<5; $i++): ?>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                  </svg>
                <?php endfor; ?>
              </div>
            </div>
          </div>
          <p class="text-gray-300 italic">"The custom jerseys we ordered for our soccer team were perfect! The quality exceeded our expectations and the design came out exactly as we envisioned."</p>
        </div>

        <!-- Testimonial 2 -->
        <div class="bg-[#1A191D] rounded-2xl p-8 border border-gray-800 hover:border-[#F67011]/50 transition-all duration-300">
          <div class="flex items-center mb-6">
            <div class="w-12 h-12 rounded-full overflow-hidden mr-4 border-2 border-[#F67011]">
              <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Client" class="w-full h-full object-cover">
            </div>
            <div>
              <h4 class="font-bold">Sarah K.</h4>
              <div class="flex text-[#F9A826] mt-1">
                <?php for($i=0; $i<5; $i++): ?>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                  </svg>
                <?php endfor; ?>
              </div>
            </div>
          </div>
          <p class="text-gray-300 italic">"I ordered custom hoodies for my basketball team and they arrived sooner than expected. The material is super comfortable and the print quality is excellent."</p>
        </div>

        <!-- Testimonial 3 -->
        <div class="bg-[#1A191D] rounded-2xl p-8 border border-gray-800 hover:border-[#F67011]/50 transition-all duration-300">
          <div class="flex items-center mb-6">
            <div class="w-12 h-12 rounded-full overflow-hidden mr-4 border-2 border-[#F67011]">
              <img src="https://randomuser.me/api/portraits/men/67.jpg" alt="Client" class="w-full h-full object-cover">
            </div>
            <div>
              <h4 class="font-bold">David R.</h4>
              <div class="flex text-[#F9A826] mt-1">
                <?php for($i=0; $i<4; $i++): ?>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                  </svg>
                <?php endfor; ?>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
              </div>
            </div>
          </div>
          <p class="text-gray-300 italic">"The tracksuits we ordered for our coaching staff were a hit! Great quality and the customization options were exactly what we needed."</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="py-20 px-6 bg-gradient-to-r from-[#1A191D] to-[#0F0F0F]">
    <div class="max-w-5xl mx-auto bg-[#1A191D] rounded-3xl p-12 text-center relative overflow-hidden border border-[#F67011]/20">
      <div class="absolute -right-20 -top-20 w-64 h-64 rounded-full bg-[#F67011]/10 blur-3xl"></div>
      <div class="absolute -left-20 -bottom-20 w-64 h-64 rounded-full bg-[#F9A826]/10 blur-3xl"></div>
      
      <div class="relative z-10">
        <h2 class="text-3xl md:text-4xl font-extrabold mb-6">
          Ready to <span class="gradient-text">Create Your</span> Custom Gear?
        </h2>
        <p class="text-gray-300 mb-8 max-w-2xl mx-auto">
          Start designing your custom jerseys, hoodies, or tracksuits today. Our team is ready to bring your vision to life with premium quality and fast turnaround.
        </p>
        <button class="bg-gradient-to-r from-[#F67011] to-[#F9A826] hover:from-[#F67011] hover:to-[#F67011] text-white px-12 py-4 rounded-full text-lg font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg shadow-orange-500/30">
          START DESIGNING NOW
        </button>
      </div>
    </div>
  </section>

  

</body>
</html>