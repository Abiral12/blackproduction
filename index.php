<?php
require 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="relative overflow-hidden">
    <?php include 'navbar.php'; ?>
    
 <!-- Background Video -->
    <video autoplay muted loop playsinline class="fixed top-0 left-0 w-full h-full object-cover z-[-1]">
        <source src="your-video.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

  <!-- Main Section -->
  <section class="min-h-screen flex flex-col items-center justify-center px-4 text-center relative">
    <h1 class="text-4xl md:text-6xl font-extrabold mb-4 ">
      YOUR <span class="text-orange-500">STYLE.</span> YOUR<br>
      <span class="text-orange-500">JERSEY.</span>
    </h1>
    <p class="text-gray-300 mb-8 text-lg">
      Create custom jerseys for your squad, club, or fans – fast and easy.
    </p>

    <!-- Buttons -->
    <div class="flex gap-4 mb-12">
      <button class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-2 rounded-full font-semibold">
        CUSTOMIZE
      </button>
      <button class="border border-orange-500 text-orange-500 hover:bg-orange-500 hover:text-white px-6 py-2 rounded-full font-semibold">
        BUY NOW
      </button>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8">
      <div class="border border-gray-500 rounded-full w-6 h-10 flex items-start justify-center p-1">
        <div class="w-1 h-2 bg-gray-500 rounded-full animate-bounce"></div>
      </div>
    </div>

    <!-- Logo Cards
    <div class="absolute right-4 top-20 space-y-4">
      <div class="bg-white text-black px-4 py-6 w-40 shadow-lg text-center text-sm font-medium">
        International <br> team c LOGO
      </div>
      <div class="bg-[#70524e] text-black px-4 py-6 w-40 shadow-lg text-center text-sm font-medium">
        national team c <br> LOGO
      </div>
    </div> -->
  </section>
</body>
</html>