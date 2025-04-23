<?php 
$pageTitle = "iKo Delivery - Custom Logistics Solution";
$metaDescription = "Discover our custom-built delivery management platform for iKo. We create tailored web solutions that streamline logistics operations and enhance customer experiences.";
include 'includes/header.php'; 
?>

<main class="relative isolate px-6 pt-14 lg:px-8">
  <!-- Decorative background elements -->
  <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
    <div class="relative left-[calc(50%-11rem)] aspect-1155/678 w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#16a34a] to-[#1e40af] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
  </div>

  <!-- Hero Section -->
  <section class="relative min-h-[90vh] flex items-center justify-center bg-gray-900 overflow-hidden">
    <div class="absolute inset-0">
      <img 
        src="images/iko.png" 
        alt="iKo Delivery management platform dashboard interface" 
        class="w-full h-full object-cover object-center"
        loading="eager"
        decoding="async"
      >
      <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/50 to-transparent"></div>
    </div>
  
    <div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-10 text-center relative z-10 py-24">
      <div class="inline-block px-4 py-2 bg-green-600/10 backdrop-blur-sm rounded-full mb-6">
        <span class="text-sm font-semibold tracking-wider text-green-400 uppercase">Logistics Technology</span>
      </div>
      <h1 class="text-5xl sm:text-7xl font-bold tracking-tight text-white [text-wrap:balance]">
        <span class="inline-block">Custom Delivery Platform</span>
      </h1>
      <p class="mt-6 text-xl sm:text-2xl font-medium text-green-200 max-w-3xl mx-auto">
        Bespoke logistics management system built for efficiency
      </p>
    
      <div class="mt-14">
        <a 
          href="#project-details" 
          class="inline-flex items-center justify-center rounded-full px-8 py-3.5 text-lg font-semibold text-white bg-green-600 hover:bg-green-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-green-500 transition-colors duration-200 shadow-lg shadow-green-500/20"
          aria-label="View iKo Delivery platform details"
        >
          See Platform Features
          <svg class="ml-3 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
          </svg>
        </a>
      </div>
    </div>
  
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-10 animate-bounce">
      <svg class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
      </svg>
    </div>
  </section>
  
  <!-- Project Overview -->
  <section id="project-details" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16 sm:py-24">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-start">
      <div>
        <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-gray-900 mb-6">Custom Logistics Solution</h2>
        <div class="h-1 w-20 bg-green-600 mb-8"></div>
        <p class="text-lg text-gray-600">We built iKo Delivery from the ground up to address specific pain points in last-mile delivery operations.</p>
      </div>
      <div class="prose prose-lg text-gray-600">
        <p><strong>iKo Delivery</strong> is a Nairobi-based logistics company needing a custom platform to manage their growing delivery network. They required:</p>
        <ul class="mt-6 space-y-3">
          <li>Real-time package tracking with GPS integration</li>
          <li>Automated dispatch routing algorithms</li>
          <li>Customer notification system via SMS/email</li>
          <li>Driver performance analytics dashboard</li>
          <li>Custom API integrations with major e-commerce platforms</li>
        </ul>
        
        <div class="mt-8 p-6 bg-gray-50 rounded-lg border border-gray-200">
          <h3 class="text-lg font-semibold text-gray-900 mb-3">Performance Metrics</h3>
          <div class="grid grid-cols-2 gap-6">
            <div>
              <p class="text-3xl font-bold text-green-600">78%</p>
              <p class="text-sm text-gray-500">Faster dispatch times</p>
            </div>
            <div>
              <p class="text-3xl font-bold text-green-600">45%</p>
              <p class="text-sm text-gray-500">Reduced failed deliveries</p>
            </div>
            <div>
              <p class="text-3xl font-bold text-green-600">92%</p>
              <p class="text-sm text-gray-500">Customer satisfaction rate</p>
            </div>
            <div>
              <p class="text-3xl font-bold text-green-600">3.5x</p>
              <p class="text-sm text-gray-500">More daily deliveries</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Challenge & Solution -->
  <section class="py-16 sm:py-24">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
      <div class="relative left-[calc(50%-11rem)] aspect-1155/678 w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#16a34a] to-[#1e40af] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
        <div>
          <div class="flex items-center mb-6">
            <div class="flex-shrink-0 bg-green-600 rounded-lg p-2">
              <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
              </svg>
            </div>
            <h2 class="ml-4 text-2xl font-bold tracking-tight text-gray-900">Delivery Challenges</h2>
          </div>
          <div class="prose prose-lg text-gray-600">
            <p>iKo was struggling with off-the-shelf solutions that didn't fit their operations:</p>
            <ul>
              <li>Generic software couldn't handle Nairobi's unique addressing system</li>
              <li>No integration with local payment providers</li>
              <li>Inefficient routing increased fuel costs</li>
              <li>Lack of real-time tracking led to customer complaints</li>
              <li>Manual processes slowed down scaling</li>
            </ul>
          </div>
        </div>
        
        <div>
          <div class="flex items-center mb-6">
            <div class="flex-shrink-0 bg-green-600 rounded-lg p-2">
              <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
              </svg>
            </div>
            <h2 class="ml-4 text-2xl font-bold tracking-tight text-gray-900">Our Custom Solution</h2>
          </div>
          <div class="prose prose-lg text-gray-600">
            <p>We developed a tailored logistics platform with:</p>
            <ul>
              <li>Custom address recognition for local landmarks</li>
              <li>Intelligent routing optimized for Nairobi traffic patterns</li>
              <li>Integrated M-Pesa and other local payment options</li>
              <li>Real-time tracking with driver ETA predictions</li>
              <li>Automated customer notifications at each delivery stage</li>
              <li>Custom admin dashboard for operations management</li>
            </ul>
            <p class="mt-4 font-semibold text-green-700">This custom-built solution transformed their delivery operations.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Key Features -->
  <section class="py-16 sm:py-24 bg-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="mx-auto max-w-2xl text-center mb-12 sm:mb-16">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Custom-Built Logistics Features</h2>
        <p class="mt-4 text-lg text-gray-600">Tailored specifically for iKo's operations and growth</p>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Feature 1 -->
        <div class="bg-gray-50 p-8 rounded-xl">
          <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-3">Smart Routing</h3>
          <p class="text-gray-600">Our custom algorithm analyzes traffic patterns, delivery windows, and vehicle capacity to optimize routes in real-time.</p>
        </div>
        
        <!-- Feature 2 -->
        <div class="bg-gray-50 p-8 rounded-xl">
          <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-3">Real-time Tracking</h3>
          <p class="text-gray-600">Customers and dispatchers see precise package locations with predictive ETAs based on current traffic conditions.</p>
        </div>
        
        <!-- Feature 3 -->
        <div class="bg-gray-50 p-8 rounded-xl">
          <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-3">Payment Integration</h3>
          <p class="text-gray-600">Seamless integration with M-Pesa, credit cards, and cash-on-delivery with automatic reconciliation.</p>
        </div>
        
        <!-- Feature 4 -->
        <div class="bg-gray-50 p-8 rounded-xl">
          <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-3">Security</h3>
          <p class="text-gray-600">Custom security protocols including OTP verification, photo proof of delivery, and digital signatures.</p>
        </div>
        
        <!-- Feature 5 -->
        <div class="bg-gray-50 p-8 rounded-xl">
          <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/>
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-3">Notifications</h3>
          <p class="text-gray-600">Automated SMS/email updates at each delivery stage with customizable messaging.</p>
        </div>
        
        <!-- Feature 6 -->
        <div class="bg-gray-50 p-8 rounded-xl">
          <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-3">Analytics</h3>
          <p class="text-gray-600">Custom reporting dashboard with KPIs for drivers, routes, delivery times, and customer satisfaction.</p>
        </div>
      </div>
    </div>
  </section>

  

  <!-- Next Project -->
  <section class="py-16 sm:py-24 bg-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="mx-auto max-w-2xl text-center">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Ready for Your Custom Project?</h2>
        <p class="mt-4 text-lg text-gray-600">We specialize in building tailored web solutions that drive business results</p>
        <div class="mt-8">
          <a href="work.php" class="inline-flex items-center rounded-full px-6 py-3 text-lg font-medium text-gray-900 hover:text-white hover:shadow-lg hover:bg-gray-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-gray-600 border border-gray-300 transition-colors duration-200">
            View More Custom Projects
            <svg class="ml-3 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
    <div class="relative left-[calc(50%+3rem)] aspect-1155/678 w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#16a34a] to-[#1e40af] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
  </div>
</main>

<?php include 'includes/footer.php'; ?>
<script src="app.js"></script>