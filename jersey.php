<?php
require 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BLXCK PRODUCTION | Premium Custom Jerseys</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
    }
    .gradient-bg {
      background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
    }
    .jersey-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }
  </style>
</head>
<body class="gradient-bg text-gray-100">

  <!-- Modern Navbar -->
  <header class="bg-black/90 backdrop-blur-sm sticky top-0 z-50 border-b border-gray-800">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
      <div class="flex items-center space-x-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
        </svg>
        <span class="text-2xl font-bold bg-gradient-to-r from-orange-500 to-yellow-400 bg-clip-text text-transparent">BLXCK</span>
      </div>
      <nav class="hidden md:flex space-x-8">
        <a href="index.html" class="hover:text-orange-400 transition-colors">Home</a>
        <a href="#" class="text-orange-400 font-semibold">Jerseys</a>
        <a href="#" class="hover:text-orange-400 transition-colors">Collections</a>
        <a href="#" class="hover:text-orange-400 transition-colors">About Us</a>
        <a href="#" class="hover:text-orange-400 transition-colors">Contact</a>
      </nav>
      <button class="md:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="relative">
    <div class="absolute inset-0 bg-black/50 z-10"></div>
    <img src="https://images.unsplash.com/photo-1574629810360-7efbbe195018?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80" 
         alt="Team jerseys on display" 
         class="w-full h-[400px] md:h-[500px] object-cover">
    <div class="absolute inset-0 z-20 flex flex-col items-center justify-center text-center px-4">
      <h1 class="text-4xl md:text-6xl font-bold mb-4">CUSTOM TEAM JERSEYS</h1>
      <p class="text-xl md:text-2xl mb-8 max-w-2xl">Premium quality jerseys tailored to your team's identity</p>
      <div class="flex flex-col sm:flex-row gap-4">
        <a href="#products" class="bg-orange-500 hover:bg-orange-600 px-8 py-3 font-semibold rounded-full transition-colors shadow-lg">SHOP NOW</a>
        <a href="#customizer" class="bg-white text-black hover:bg-gray-200 px-8 py-3 font-semibold rounded-full transition-colors shadow-lg">CUSTOMIZE</a>
      </div>
    </div>
  </section>

  <!-- Search Bar -->
  <div class="container mx-auto px-4 mt-12">
    <div class="max-w-2xl mx-auto relative">
      <input type="text" 
             id="searchInput" 
             placeholder="Search by team name or product..." 
             class="w-full p-4 pl-12 rounded-full bg-gray-800 border border-gray-700 focus:border-orange-500 focus:outline-none text-white">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 absolute left-4 top-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
      </svg>
    </div>
  </div>

  <!-- Product Grid -->
  <section id="products" class="container mx-auto px-4 py-16">
    <h2 class="text-3xl font-bold mb-12 text-center">OUR JERSEY COLLECTION</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8" id="productGrid">
      <?php
      $teams = ['Arsenal', 'Barcelona', 'Chelsea', 'Liverpool', 'Manchester', 'PSG'];
      foreach ($teams as $team) {
        echo '
        <div class="jersey-card bg-gray-800 rounded-xl overflow-hidden transition-all duration-300">
          <div class="h-64 bg-gradient-to-br from-gray-700 to-gray-900 flex items-center justify-center">
            <div class="text-4xl font-bold opacity-20">'.substr($team, 0, 1).'</div>
          </div>
          <div class="p-6">
            <div class="flex justify-between items-start mb-2">
              <h3 class="text-xl font-bold">'.$team.' Jersey</h3>
              <span class="bg-orange-500/20 text-orange-400 px-3 py-1 rounded-full text-sm">New</span>
            </div>
            <p class="text-gray-400 mb-4">Premium quality team jersey with moisture-wicking fabric</p>
            <div class="flex justify-between items-center">
              <span class="font-bold">$59.99</span>
              <div class="flex gap-2">
                <button class="bg-gray-700 hover:bg-gray-600 px-4 py-2 rounded-lg transition-colors">Details</button>
                <button class="bg-orange-500 hover:bg-orange-600 px-4 py-2 rounded-lg transition-colors">Order</button>
              </div>
            </div>
          </div>
        </div>';
      }
      ?>
    </div>
  </section>

  <!-- Custom Jersey Section -->
  <section id="customizer" class="bg-gray-800/50 py-16">
    <div class="container mx-auto px-4">
      <div class="max-w-4xl mx-auto bg-gradient-to-r from-gray-900 to-gray-800 rounded-2xl overflow-hidden shadow-xl">
        <div class="md:flex">
          <div class="md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
            <h2 class="text-3xl font-bold mb-4">CREATE YOUR OWN JERSEY</h2>
            <p class="text-gray-300 mb-6">Your design, our passion. Together, we make it real. Design a custom jersey that represents your team's unique identity.</p>
            <ul class="space-y-3 mb-8">
              <li class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-500 mr-2" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                Premium quality materials
              </li>
              <li class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-500 mr-2" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                Fast turnaround (7-10 days)
              </li>
              <li class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-500 mr-2" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                Worldwide shipping
              </li>
            </ul>
            <a href="#" class="bg-orange-500 hover:bg-orange-600 text-white font-semibold py-3 px-8 rounded-full inline-flex items-center justify-center transition-colors shadow-lg">
              START DESIGNING
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
              </svg>
            </a>
          </div>
          <div class="md:w-1/2 bg-gray-700 flex items-center justify-center p-8">
            <div class="relative">
              <div class="absolute -inset-4 bg-orange-500/20 rounded-xl blur"></div>
              <div class="relative bg-gray-900 rounded-lg p-6">
                <div class="h-48 w-48 bg-gradient-to-br from-blue-900 to-red-900 rounded flex items-center justify-center">
                  <span class="text-white text-xl font-bold opacity-70">YOUR LOGO</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section class="py-16 bg-black/20">
    <div class="container mx-auto px-4">
      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-gray-800/50 p-8 rounded-xl border border-gray-700 hover:border-orange-500 transition-colors">
          <div class="bg-orange-500/10 p-3 rounded-full w-12 h-12 flex items-center justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
            </svg>
          </div>
          <h3 class="text-xl font-bold mb-2">Premium Materials</h3>
          <p class="text-gray-400">High-performance fabrics designed for comfort and durability during intense gameplay.</p>
        </div>
        <div class="bg-gray-800/50 p-8 rounded-xl border border-gray-700 hover:border-orange-500 transition-colors">
          <div class="bg-orange-500/10 p-3 rounded-full w-12 h-12 flex items-center justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <h3 class="text-xl font-bold mb-2">Fast Production</h3>
          <p class="text-gray-400">Most orders ship within 7-10 business days. Rush options available.</p>
        </div>
        <div class="bg-gray-800/50 p-8 rounded-xl border border-gray-700 hover:border-orange-500 transition-colors">
          <div class="bg-orange-500/10 p-3 rounded-full w-12 h-12 flex items-center justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
            </svg>
          </div>
          <h3 class="text-xl font-bold mb-2">Worldwide Shipping</h3>
          <p class="text-gray-400">We ship to over 100 countries with reliable logistics partners.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-black py-12">
    <div class="container mx-auto px-4">
      <div class="grid md:grid-cols-4 gap-8 mb-8">
        <div>
          <div class="flex items-center space-x-2 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <span class="text-2xl font-bold">BLXCK</span>
          </div>
          <p class="text-gray-400">Premium custom jerseys for teams and individuals worldwide.</p>
        </div>
        <div>
          <h4 class="text-lg font-semibold mb-4">Shop</h4>
          <ul class="space-y-2">
            <li><a href="#" class="text-gray-400 hover:text-orange-400 transition-colors">All Jerseys</a></li>
            <li><a href="#" class="text-gray-400 hover:text-orange-400 transition-colors">New Arrivals</a></li>
            <li><a href="#" class="text-gray-400 hover:text-orange-400 transition-colors">Best Sellers</a></li>
            <li><a href="#" class="text-gray-400 hover:text-orange-400 transition-colors">Custom Jerseys</a></li>
          </ul>
        </div>
        <div>
          <h4 class="text-lg font-semibold mb-4">Company</h4>
          <ul class="space-y-2">
            <li><a href="#" class="text-gray-400 hover:text-orange-400 transition-colors">About Us</a></li>
            <li><a href="#" class="text-gray-400 hover:text-orange-400 transition-colors">Contact</a></li>
            <li><a href="#" class="text-gray-400 hover:text-orange-400 transition-colors">Blog</a></li>
            <li><a href="#" class="text-gray-400 hover:text-orange-400 transition-colors">Careers</a></li>
          </ul>
        </div>
        <div>
          <h4 class="text-lg font-semibold mb-4">Support</h4>
          <ul class="space-y-2">
            <li><a href="#" class="text-gray-400 hover:text-orange-400 transition-colors">FAQs</a></li>
            <li><a href="#" class="text-gray-400 hover:text-orange-400 transition-colors">Shipping Policy</a></li>
            <li><a href="#" class="text-gray-400 hover:text-orange-400 transition-colors">Returns & Exchanges</a></li>
            <li><a href="#" class="text-gray-400 hover:text-orange-400 transition-colors">Size Guide</a></li>
          </ul>
        </div>
      </div>
      <div class="pt-8 border-t border-gray-800 text-center text-gray-500 text-sm">
        <p>© 2023 BLXCK PRODUCTION. All rights reserved. Premium quality guarantee, fast service and worldwide delivery.</p>
      </div>
    </div>
  </footer>

  <script>
    // Enhanced search functionality
    document.getElementById("searchInput").addEventListener("keyup", function() {
      const filter = this.value.toLowerCase();
      const cards = document.querySelectorAll("#productGrid > div");
      
      cards.forEach(card => {
        const title = card.querySelector("h3").textContent.toLowerCase();
        const description = card.querySelector("p").textContent.toLowerCase();
        card.style.display = (title.includes(filter) || description.includes(filter)) ? "" : "none";
      });
    });

    // Mobile menu toggle would go here
  </script>
</body>
</html>
