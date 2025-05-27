<?php
require 'connect.php';
?>
<style>
  .hide-links {
    display: none !important;
  }

   /* Smooth fade-in for overlay */
  #overlay {
    opacity: 0;
    transition: opacity 0.4s ease;
  }
  #overlay.show {
    opacity: 1;
  }

  /* Slide and fade animation for mobile menu */
  #mobile-menu {
    opacity: 0;
    transform: translateY(-20px);
    transition: opacity 0.4s ease, transform 0.4s ease;
  }
  #mobile-menu.show {
    opacity: 1;
    transform: translateY(0);
  }

  /* Hamburger animation */
  .bar-transform-1 {
    transform: translateY(6px) rotate(45deg);
  }
  .bar-transform-2 {
    transform: translateY(-6px) rotate(-45deg);
  }

  /* Nav links fade in one by one */
  .fade-in {
  opacity: 0;
  color: #F67011;
  animation: fadeInLink 0.6s ease forwards;
}

@keyframes fadeInLink {
  0% {
    opacity: 0;
    color: #F67011;
    transform: translateY(10px);
  }
  100% {
    opacity: 1;
    color: white; /* Change this to your default text color if needed */
    transform: translateY(0);
  }
}


  /* Hide desktop nav on all sizes */
  .hide-links {
    display: none !important;
  }
</style>

<!-- Overlay for dim background -->
<div id="overlay" class="hidden fixed inset-0 bg-black bg-opacity-70 z-30 transition-opacity duration-300"></div>

<nav class="w-full absolute top-0 left-0 z-40 text-white">
  <div class="flex justify-between items-center px-4 md:px-8 py-4 max-w-7xl mx-auto">

    <!-- Logo - Always on the left -->
    <a href="./index.php">
      <img src="./images/logo 2.png" alt="Black-Production-Logo" class="h-12 w-auto">
    </a>

    <!-- Navigation Links - Now inside wrapper for toggle -->
    <div id="nav-links" class="nav-links md:flex space-x-8 lg:space-x-20">
      <a href="#" class="text-lg hover:text-[#F67011] transition font-medium">Home</a>
      <a href="#" class="text-lg hover:text-[#F67011] transition font-medium">Products</a>
      <a href="#" class="text-lg hover:text-[#F67011] transition font-medium">Contact Us</a>
      <a href="#" class="text-lg hover:text-[#F67011] transition font-medium">Know Us</a>
    </div>

    <!-- Hamburger Button -->
    <button id="mobile-menu-button" class="flex flex-col justify-center items-center w-10 h-10 border-2 border-white rounded-xl cursor-pointer z-50">
      <div class="w-6 h-0.5 mb-1.5 bg-[#F67011] transition-transform duration-300" id="bar1"></div>
      <div class="w-6 h-0.5 bg-[#F67011] transition-transform duration-300" id="bar2"></div>
    </button>
  </div>

  <!-- Mobile Menu (also used for desktop now) -->
  <div id="mobile-menu" class="hidden bg-black w-full absolute left-0 top-full py-4 px-4 z-50">
    <div class="flex flex-col space-y-4 items-center">
      <a href="#" class="text-lg hover:text-[#F67011] transition font-medium py-2">Home</a>
      <a href="#" class="text-lg hover:text-[#F67011] transition font-medium py-2">Products</a>
      <a href="#" class="text-lg hover:text-[#F67011] transition font-medium py-2">Contact Us</a>
      <a href="#" class="text-lg hover:text-[#F67011] transition font-medium py-2">Know Us</a>
      <a href="#" class="text-lg hover:text-[#F67011] transition font-medium py-2">Our services</a>
      <a href="#" class="text-lg hover:text-[#F67011] transition font-medium py-2">Our Gallery</a>
      <a href="#" class="text-lg hover:text-[#F67011] transition font-medium py-2">Social Links</a>
    </div>
  </div>
</nav>


 <script src="script.js"></script>

