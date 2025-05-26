<?php
require 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neon Navbar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <style>
        .menu-icon div {
            background-color: #00ffff;
        }
    </style> -->
</head>
<body class="bg-[#1A191D] text-white">
    <div class="flex justify-between items-center px-8 py-4 max-w-6xl mx-auto mt-3 bg-[#16151A] rounded-full shadow-md shadow-[#D1FDEE]">
        <div class="flex space-x-8">
            <a href="#" class="text-lg hover:text-[#F67011] relative">Home</a>
            <a href="#" class="text-lg hover:text-[#F67011] relative">Products</a>
        </div>
        <img src="./images/logo 2.png" alt="Black-Production-Logo" class="h-[8vh] w-[8vw]">
        <div class="flex space-x-8">
            <a href="#" class="text-lg hover:text-[#F67011] relative">Contact us</a>
            <a href="#" class="text-lg hover:text-[#F67011] relative">Know us</a>
        </div>
        
    </div>
<div class="menu-icon flex flex-col justify-center items-center w-13 h-13 border-2 border-[#D1FDEE] rounded-xl cursor-pointer absolute top-8 right-8">
    <div class="w-5 h-0.5 mb-2.5 bg-[#F67011]"></div>
    <div class="w-5 h-0.5 bg-[#F67011]"></div>
</div>
</body>
</html>

