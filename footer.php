<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <title>Footer Design</title>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#FF6B35',
            secondary: '#004E89',
            dark: '#1A1A2E',
            light: '#F5F5F5',
          },
          fontFamily: {
            sans: ['Inter', 'sans-serif'],
          },
        }
      }
    }
  </script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
    
    body {
      font-family: 'Inter', sans-serif;
    }
    
    .hover-scale {
      transition: all 0.3s ease;
    }
    
    .hover-scale:hover {
      transform: translateY(-3px);
    }
    
    .social-icon {
      transition: all 0.3s ease;
    }
    
    .social-icon:hover {
      transform: scale(1.2);
    }
    
    .gradient-text {
      background: linear-gradient(45deg, #FF6B35, #FFBE0B);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
  </style>
</head>
<body class="bg-dark text-gray-300">
  <footer class="px-8 py-8 bg-dark">
    <div class="max-w-7xl mx-auto">
      <!-- Main Content -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
        <!-- Contact Info -->
        <div class="hover-scale">
          <h3 class="text-xl font-bold text-white mb-6 flex items-center">
            <span class="gradient-text">Contact Info</span>
            <span class="ml-2 text-primary"><i class="fas fa-address-card"></i></span>
          </h3>
          <ul class="space-y-4">
            <li class="flex items-start">
              <span class="text-primary mr-3 mt-1"><i class="fas fa-map-marker-alt"></i></span>
              <div>
                <p class="font-medium text-gray-200">Headquarters</p>
                <p class="text-gray-400">123 Sports Avenue, New York, NY 10001</p>
              </div>
            </li>
            <li class="flex items-center">
              <span class="text-primary mr-3"><i class="fas fa-phone-alt"></i></span>
              <p class="text-gray-400">+1 (555) 123-4567</p>
            </li>
            <li class="flex items-center">
              <span class="text-primary mr-3"><i class="fas fa-envelope"></i></span>
              <p class="text-gray-400">info@blxckproduction.com</p>
            </li>
            <li class="flex items-center">
              <span class="text-primary mr-3"><i class="fas fa-clock"></i></span>
              <p class="text-gray-400">Mon-Fri: 9AM-6PM EST</p>
            </li>
          </ul>
          <div class="mt-6 flex space-x-4">
            <a href="#" class="social-icon text-gray-400 hover:text-primary text-xl"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-icon text-gray-400 hover:text-primary text-xl"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-icon text-gray-400 hover:text-primary text-xl"><i class="fab fa-instagram"></i></a>
            <a href="#" class="social-icon text-gray-400 hover:text-primary text-xl"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>

        <!-- Quick Contact -->
        <div class="hover-scale">
          <h3 class="text-xl font-bold text-white mb-6 flex items-center">
            <span class="gradient-text">Quick Contact</span>
            <span class="ml-2 text-primary"><i class="fas fa-paper-plane"></i></span>
          </h3>
          <form class="space-y-4">
            <div class="relative">
              <input 
                type="text" 
                placeholder="Your Name" 
                class="w-full px-4 py-3 pl-10 bg-gray-800 border border-gray-700 rounded-lg text-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition duration-300"
              >
              <span class="absolute left-3 top-3.5 text-gray-500"><i class="fas fa-user"></i></span>
            </div>
            <div class="relative">
              <input 
                type="email" 
                placeholder="Your Email" 
                class="w-full px-4 py-3 pl-10 bg-gray-800 border border-gray-700 rounded-lg text-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition duration-300"
              >
              <span class="absolute left-3 top-3.5 text-gray-500"><i class="fas fa-envelope"></i></span>
            </div>
            <div class="relative">
              <textarea 
                placeholder="Your Message" 
                rows="3"
                class="w-full px-4 py-3 pl-10 bg-gray-800 border border-gray-700 rounded-lg text-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition duration-300"
              ></textarea>
              <span class="absolute left-3 top-3.5 text-gray-500"><i class="fas fa-comment"></i></span>
            </div>
            <button 
              type="submit" 
              class="w-full py-3 bg-gradient-to-r from-primary to-orange-400 text-white font-bold rounded-lg hover:opacity-90 transition duration-300 flex items-center justify-center"
            >
              Send Message
              <span class="ml-2"><i class="fas fa-arrow-right"></i></span>
            </button>
          </form>
        </div>

        <!-- Map and Updates -->
        <div class="hover-scale">
          <div class="mb-8">
            <h3 class="text-xl font-bold text-white mb-6 flex items-center">
              <span class="gradient-text">Visit Our Showroom</span>
              <span class="ml-2 text-primary"><i class="fas fa-map-marked-alt"></i></span>
            </h3>
            <div class="mt-4 bg-gradient-to-br from-gray-800 to-gray-900 p-6 rounded-xl border border-gray-700 shadow-lg">
              <div class="aspect-w-16 aspect-h-9 bg-gray-700 rounded-lg overflow-hidden mb-4">
                <div class="w-full h-full flex items-center justify-center text-gray-500">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3534.4206849000143!2d85.3472752754651!3d27.64245327621985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjfCsDM4JzMyLjgiTiA4NcKwMjAnNTkuNSJF!5e0!3m2!1sen!2snp!4v1748362160788!5m2!1sen!2snp" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
              <p class="text-center font-bold text-white">BLACK PRODUCTION</p>
              <p class="text-center text-gray-400">Lalitpur, NY</p>
              <button class="mt-4 w-full py-2 bg-gray-700 hover:bg-gray-600 text-white rounded-lg transition duration-300">
                Get Directions
              </button>
            </div>
          </div>

          <h3 class="text-xl font-bold text-white mb-6 flex items-center">
            <span class="gradient-text">Stay Updated</span>
            <span class="ml-2 text-primary"><i class="fas fa-bell"></i></span>
          </h3>
          <form>
            <div class="relative">
              <input 
                type="email" 
                placeholder="Your Email" 
                class="w-full px-4 py-3 pl-10 bg-gray-800 border border-gray-700 rounded-lg text-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition duration-300 mb-3"
              >
              <span class="absolute left-3 top-3.5 text-gray-500"><i class="fas fa-envelope"></i></span>
            </div>
            <button 
              type="submit" 
              class="w-full py-3 bg-gradient-to-r from-secondary to-blue-400 text-white font-bold rounded-lg hover:opacity-90 transition duration-300 flex items-center justify-center"
            >
              Subscribe
              <span class="ml-2"><i class="fas fa-paper-plane"></i></span>
            </button>
          </form>
        </div>
      </div>

      <!-- Links Section -->
      <!-- <div class="mt-16 border-t border-gray-800 pt-12 grid grid-cols-1 md:grid-cols-3 gap-8"> -->
        <!-- Products -->
        <!-- <div>
          <h3 class="text-white font-bold text-lg mb-4 gradient-text">Products</h3>
          <ul class="space-y-3">
            <li><a href="#" class="text-gray-400 hover:text-primary transition duration-300 flex items-center"><span class="mr-2 text-xs"><i class="fas fa-chevron-right"></i></span> Custom Jerseys</a></li>
            <li><a href="#" class="text-gray-400 hover:text-primary transition duration-300 flex items-center"><span class="mr-2 text-xs"><i class="fas fa-chevron-right"></i></span> Team Uniforms</a></li>
            <li><a href="#" class="text-gray-400 hover:text-primary transition duration-300 flex items-center"><span class="mr-2 text-xs"><i class="fas fa-chevron-right"></i></span> Hoodies & Apparel</a></li>
            <li><a href="#" class="text-gray-400 hover:text-primary transition duration-300 flex items-center"><span class="mr-2 text-xs"><i class="fas fa-chevron-right"></i></span> Accessories</a></li>
            <li><a href="#" class="text-gray-400 hover:text-primary transition duration-300 flex items-center"><span class="mr-2 text-xs"><i class="fas fa-chevron-right"></i></span> Limited Editions</a></li>
          </ul>
        </div> -->

        <!-- Services -->
        <!-- <div>
          <h3 class="text-white font-bold text-lg mb-4 gradient-text">Services</h3>
          <ul class="space-y-3">
            <li><a href="#" class="text-gray-400 hover:text-primary transition duration-300 flex items-center"><span class="mr-2 text-xs"><i class="fas fa-chevron-right"></i></span> Custom Design</a></li>
            <li><a href="#" class="text-gray-400 hover:text-primary transition duration-300 flex items-center"><span class="mr-2 text-xs"><i class="fas fa-chevron-right"></i></span> Bulk Orders</a></li>
            <li><a href="#" class="text-gray-400 hover:text-primary transition duration-300 flex items-center"><span class="mr-2 text-xs"><i class="fas fa-chevron-right"></i></span> Team Consultation</a></li>
            <li><a href="#" class="text-gray-400 hover:text-primary transition duration-300 flex items-center"><span class="mr-2 text-xs"><i class="fas fa-chevron-right"></i></span> Express Delivery</a></li>
            <li><a href="#" class="text-gray-400 hover:text-primary transition duration-300 flex items-center"><span class="mr-2 text-xs"><i class="fas fa-chevron-right"></i></span> Design Workshops</a></li>
          </ul>
        </div> -->

        <!-- Company -->
        <!-- <div>
          <h3 class="text-white font-bold text-lg mb-4 gradient-text">Company</h3>
          <ul class="space-y-3">
            <li><a href="#" class="text-gray-400 hover:text-primary transition duration-300 flex items-center"><span class="mr-2 text-xs"><i class="fas fa-chevron-right"></i></span> About Us</a></li>
            <li><a href="#" class="text-gray-400 hover:text-primary transition duration-300 flex items-center"><span class="mr-2 text-xs"><i class="fas fa-chevron-right"></i></span> Our Story</a></li>
            <li><a href="#" class="text-gray-400 hover:text-primary transition duration-300 flex items-center"><span class="mr-2 text-xs"><i class="fas fa-chevron-right"></i></span> Careers</a></li>
            <li><a href="#" class="text-gray-400 hover:text-primary transition duration-300 flex items-center"><span class="mr-2 text-xs"><i class="fas fa-chevron-right"></i></span> Press</a></li>
            <li><a href="#" class="text-gray-400 hover:text-primary transition duration-300 flex items-center"><span class="mr-2 text-xs"><i class="fas fa-chevron-right"></i></span> Sustainability</a></li>
          </ul>
        </div>
      </div> -->

      <!-- Copyright -->
      <div class="mt-16 text-center">
        <div class="flex justify-center mb-6">
          <div class="bg-gradient-to-r from-primary to-secondary p-1 rounded-full">
            <div class="bg-dark rounded-full p-2">
              <span class="text-2xl font-bold gradient-text">BLACK PRODUCTION</span>
            </div>
          </div>
        </div>
        <div class="foot flex justify-between items-center">
            <div class="left"><p class="text-gray-500 text-sm ">&copy; 2024 BLACK PRODUCTION. All rights reserved.</p></div>
        <div class="right"> <p class="mt-4 flex flex-wrap justify-center gap-4 text-sm">
          <a href="#" class="text-gray-500 hover:text-primary transition duration-300">Privacy Policy</a>
          <span class="text-gray-700">•</span>
          <a href="#" class="text-gray-500 hover:text-primary transition duration-300">Terms of Service</a>
          <span class="text-gray-700">•</span>
          <a href="#" class="text-gray-500 hover:text-primary transition duration-300">Cookie Policy</a>
          <span class="text-gray-700">•</span>
          <a href="#" class="text-gray-500 hover:text-primary transition duration-300">Sitemap</a>
        </p></div>
       
        </div>
       
        
      </div>
    </div>
  </footer>
</body>
</html>