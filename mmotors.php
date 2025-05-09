<?php 
$pageTitle = "mmotors";
include 'includes/header.php'; 
?>

      <!-- Main Content -->
      <main class="relative isolate px-6 pt-14 lg:px-8">
        <!-- Decorative background elements -->
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
          <div class="relative left-[calc(50%-11rem)] aspect-1155/678 w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>

 <!-- Project Showcase Hero -->
<section class="relative min-h-[90vh] flex items-center justify-center bg-gray-900 overflow-hidden">
    <!-- Background Image with Gradient Overlay -->
    <div class="absolute inset-0">
      <img 
        src="images/motorsbg.webp" 
        alt="M-Motors motorcycle e-commerce platform interface" 
        class="w-full h-full object-cover object-center"
        loading="eager"
        decoding="async"
      >
      <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/50 to-transparent"></div>
    </div>
  
    <!-- Project Title & Meta -->
    <div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-10 text-center relative z-10 py-24">
      <div class="inline-block px-4 py-2 bg-indigo-600/10 backdrop-blur-sm rounded-full mb-6">
        <span class="text-sm font-semibold tracking-wider text-indigo-400 uppercase">Featured Project</span>
      </div>
      <h1 class="text-5xl sm:text-7xl font-bold tracking-tight text-white [text-wrap:balance]">
        <span class="inline-block">M-Motors</span>
      </h1>
      <p class="mt-6 text-xl sm:text-2xl font-medium text-indigo-200 max-w-3xl mx-auto">
        Premium motorcycle e-commerce platform
      </p>
    
      <!-- CTA Button -->
      <div class="mt-14">
        <a 
          href="#project-details" 
          class="inline-flex items-center justify-center rounded-full px-8 py-3.5 text-lg font-semibold text-white bg-indigo-600 hover:bg-indigo-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-indigo-500 transition-colors duration-200 shadow-lg shadow-indigo-500/20"
          aria-label="View M-Motors project details"
        >
          Explore Project
          <svg class="ml-3 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
          </svg>
        </a>
      </div>
    </div>
  
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-10 animate-bounce">
      <svg class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
      </svg>
    </div>
  </section>
  
  <!-- Project Overview Section -->
  <section id="project-details" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16 sm:py-24">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-start">
      <div>
        <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-gray-900 mb-6">Project Overview</h2>
        <div class="h-1 w-20 bg-indigo-600 mb-8"></div>
        
      </div>
      <div class="prose prose-lg text-gray-600">
        <p><strong>M-Motors</strong> approached us to transform their traditional motorcycle dealership into a digital powerhouse. The challenge was to create an e-commerce experience that could handle:</p>
        <ul class="mt-6 space-y-3">
          <li>300+ motorcycle models with complex specifications</li>
          <li>Dual inventory system (local stock + import options)</li>
          <li>Custom financing calculator</li>
          <li>Test ride scheduling integration</li>
        </ul>
        
        <div class="mt-8 p-6 bg-gray-50 rounded-lg border border-gray-200">
          <h3 class="text-lg font-semibold text-gray-900 mb-3">Results Achieved</h3>
          <div class="grid grid-cols-2 gap-6">
            <div>
              <p class="text-3xl font-bold text-indigo-600">40%</p>
              <p class="text-sm text-gray-500">Increase in online sales</p>
            </div>
            <div>
              <p class="text-3xl font-bold text-indigo-600">2.5x</p>
              <p class="text-sm text-gray-500">More leads generated</p>
            </div>
            <div>
              <p class="text-3xl font-bold text-indigo-600">25%</p>
              <p class="text-sm text-gray-500">Reduced support queries</p>
            </div>
            <div>
              <p class="text-3xl font-bold text-indigo-600">4.8★</p>
              <p class="text-sm text-gray-500">Customer satisfaction</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Challenge & Solution Section -->
  <section class=" py-16 sm:py-24">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-1155/678 w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
      </div>
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
        <div>
          <div class="flex items-center mb-6">
            <div class="flex-shrink-0 bg-indigo-600 rounded-lg p-2">
              <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
              </svg>
            </div>
            <h2 class="ml-4 text-2xl font-bold tracking-tight text-gray-900">The Challenge</h2>
          </div>
          <div class="prose prose-lg text-gray-600">
            <p>M-Motors' existing website couldn't handle their growing inventory or provide the premium experience their customers expected. Key pain points included:</p>
            <ul>
              <li>Outdated design that didn't reflect their premium brand</li>
              <li>No real-time inventory management</li>
              <li>Complex purchase process requiring phone calls</li>
              <li>No mobile optimization for on-the-go buyers</li>
            </ul>
          </div>
        </div>
        
        <div>
          <div class="flex items-center mb-6">
            <div class="flex-shrink-0 bg-indigo-600 rounded-lg p-2">
              <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
              </svg>
            </div>
            <h2 class="ml-4 text-2xl font-bold tracking-tight text-gray-900">Our Solution</h2>
          </div>
          <div class="prose prose-lg text-gray-600">
            <p>We delivered a custom Shopify Plus solution with:</p>
            <ul>
              <li>Visual motorcycle configurator with 360° views</li>
              <li>Integrated financing calculator</li>
              <li>AI-powered recommendation engine</li>
              <li>Seamless CRM integration</li>
              <li>Mobile-first responsive design</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  
<!-- Gallery Section with Alternating Layout -->
<section class="bg-white py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="mx-auto max-w-2xl text-center mb-12 sm:mb-16">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Platform Features</h2>
        <p class="mt-4 text-lg text-gray-600">Innovative tools designed for motorcycle enthusiasts</p>
      </div>
      
      <!-- Feature 1 - Image Left -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center mb-16 lg:mb-24">
        
        <div>
          <h3 class="text-2xl sm:text-3xl font-semibold text-gray-900 mb-4">Smart Search & Filtering</h3>
          <p class="text-gray-600 leading-relaxed">
            Our intuitive filtering system allows customers to easily find their perfect bike:
          </p>
          <ul class="mt-4 space-y-2 text-gray-600">
            <li class="flex items-start">
              <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
              </svg>
              <span>Price range filters (Ksh 50,000-500,000+)</span>
            </li>
            <li class="flex items-start">
              <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
              </svg>
              <span>Engine size categories (100cc to 1000cc+)</span>
            </li>
            <li class="flex items-start">
              <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
              </svg>
              <span>Riding style preferences (Sport, Cruiser, Off-road)</span>
            </li>
            <li class="flex items-start">
              <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
              </svg>
              <span>AI-powered recommendations based on browsing behavior</span>
            </li>
          </ul>
        </div>
        <div class=" rounded-xl overflow-hidden">
            <img 
              src="images/KaiW3.png" 
              alt="M-Motors advanced filtering interface showing price range sliders and brand selection" 
              class="w-full h-auto object-cover"
              loading="lazy"
              width="1200"
              height="800"
            >
          </div>
      </div>
  
      <!-- Feature 2 - Image Right -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
        <div class=" rounded-xl overflow-hidden">
            <img 
              src="images/KaiW4.png" 
              alt="M-Motors inventory dashboard showing color-coded stock availability" 
              class="w-full h-auto object-cover"
              loading="lazy"
              width="1200"
              height="800"
            >
          </div>
        <div>
          <h3 class="text-2xl sm:text-3xl font-semibold text-gray-900 mb-4">Real-Time Inventory System</h3>
          <p class="text-gray-600 leading-relaxed">
            Our integrated inventory management provides:
          </p>
          <ul class="mt-4 space-y-2 text-gray-600">
            <li class="flex items-start">
              <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
              </svg>
              <span>Instant stock status indicators (Nairobi warehouse vs imports)</span>
            </li>
            <li class="flex items-start">
              <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
              </svg>
              <span>Accurate delivery estimates (Same-day pickup or 2-4 week import)</span>
            </li>
            <li class="flex items-start">
              <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
              </svg>
              <span>SAP warehouse management integration</span>
            </li>
            <li class="flex items-start">
              <svg class="h-5 w-5 text-indigo-500 mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
              </svg>
              <span>Automated restock notifications</span>
            </li>
          </ul>
        </div>
        
      </div>
    </div>
  </section>
  
  <!-- Next Project Section -->
  <section class=" py-16 sm:py-4">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="mx-auto max-w-2xl text-center">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Ready to see the next project?</h2>
        <p class="mt-4 text-lg text-gray-600">Explore more of our e-commerce and web development work</p>
        <div class="mt-8">
          <a href="portias.php" class="inline-flex items-center rounded-full px-6 py-3 text-lg font-medium text-gray-900 hover:text-white hover:shadow-lg hover:bg-gray-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 border border-gray-300 transition-colors duration-200">
            View Portia's Couture Project
            <svg class="ml-3 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </section>


        <!-- Decorative background elements -->
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
          <div class="relative left-[calc(50%+3rem)] aspect-1155/678 w-[36.125rem] -translate-x-1/2 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
      </main>
    </div>
    <?php include 'includes/footer.php'; ?>
    <script src="app.js"></script>
