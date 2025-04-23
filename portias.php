<?php 
$pageTitle = "Portia's Couture";
include 'includes/header.php'; 
?>

<main class="relative isolate px-6 pt-14 lg:px-8">
  <!-- Decorative background elements -->
  <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
    <div class="relative left-[calc(50%-11rem)] aspect-1155/678 w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
  </div>

  <!-- Hero Section -->
  <section class="relative min-h-[90vh] flex items-center justify-center bg-gray-900 overflow-hidden">
    <div class="absolute inset-0">
      <img 
        src="images/portiarev.png" 
        alt="Portia's Couture luxury fashion store showcasing elegant dresses" 
        class="w-full h-full object-cover object-center"
        loading="eager"
        decoding="async"
      >
      <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/50 to-transparent"></div>
    </div>
  
    <div class="mx-auto max-w-7xl px-6 sm:px-8 lg:px-10 text-center relative z-10 py-24">
      <div class="inline-block px-4 py-2 bg-pink-600/10 backdrop-blur-sm rounded-full mb-6">
        <span class="text-sm font-semibold tracking-wider text-pink-400 uppercase">Luxury Fashion</span>
      </div>
      <h1 class="text-5xl sm:text-7xl font-bold tracking-tight text-white [text-wrap:balance]">
        <span class="inline-block">Portia's Couture</span>
      </h1>
      <p class="mt-6 text-xl sm:text-2xl font-medium text-pink-200 max-w-3xl mx-auto">
        Premium fashion e-commerce experience
      </p>
    
      <div class="mt-14">
        <a 
          href="#project-details" 
          class="inline-flex items-center justify-center rounded-full px-8 py-3.5 text-lg font-semibold text-white bg-pink-600 hover:bg-pink-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-pink-500 transition-colors duration-200 shadow-lg shadow-pink-500/20"
          aria-label="View Portia's Couture project details"
        >
          Explore Collection
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
        <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-gray-900 mb-6">Brand Story</h2>
        <div class="h-1 w-20 bg-pink-600 mb-8"></div>
      </div>
      <div class="prose prose-lg text-gray-600">
        <p><strong>Portia's Couture</strong> is a Nairobi-based luxury fashion house specializing in bespoke and ready-to-wear collections for discerning clients. They needed an e-commerce platform that reflected their high-end brand while providing:</p>
        <ul class="mt-6 space-y-3">
          <li>Virtual try-on for select garments</li>
          <li>Personalized styling recommendations</li>
          <li>Exclusive members-only collections</li>
          <li>Seamless appointment booking for fittings</li>
        </ul>
        
        <div class="mt-8 p-6 bg-gray-50 rounded-lg border border-gray-200">
          <h3 class="text-lg font-semibold text-gray-900 mb-3">Results Achieved</h3>
          <div class="grid grid-cols-2 gap-6">
            <div>
              <p class="text-3xl font-bold text-pink-600">65%</p>
              <p class="text-sm text-gray-500">Increase in online sales</p>
            </div>
            <div>
              <p class="text-3xl font-bold text-pink-600">3.2x</p>
              <p class="text-sm text-gray-500">More newsletter signups</p>
            </div>
            <div>
              <p class="text-3xl font-bold text-pink-600">40%</p>
              <p class="text-sm text-gray-500">Reduced returns</p>
            </div>
            <div>
              <p class="text-3xl font-bold text-pink-600">4.9★</p>
              <p class="text-sm text-gray-500">Customer satisfaction</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Challenge & Solution -->
  <section class="py-16 sm:py-24">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
      <div class="relative left-[calc(50%-11rem)] aspect-1155/678 w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
        <div>
          <div class="flex items-center mb-6">
            <div class="flex-shrink-0 bg-pink-600 rounded-lg p-2">
              <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
              </svg>
            </div>
            <h2 class="ml-4 text-2xl font-bold tracking-tight text-gray-900">The Challenge</h2>
          </div>
          <div class="prose prose-lg text-gray-600">
            <p>Portia's existing online presence didn't match their boutique's luxury experience:</p>
            <ul>
              <li>Generic template design lacking sophistication</li>
              <li>No size recommendation tools leading to high returns</li>
              <li>Difficulty showcasing fabric quality and craftsmanship</li>
              <li>No integration with their VIP client program</li>
            </ul>
          </div>
        </div>
        
        <div>
          <div class="flex items-center mb-6">
            <div class="flex-shrink-0 bg-pink-600 rounded-lg p-2">
              <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
              </svg>
            </div>
            <h2 class="ml-4 text-2xl font-bold tracking-tight text-gray-900">Our Solution</h2>
          </div>
          <div class="prose prose-lg text-gray-600">
            <p>We created a custom Shopify Plus solution featuring:</p>
            <ul>
              <li>360° product views with zoomable fabric details</li>
              <li>AI-powered size recommendation engine</li>
              <li>Virtual styling consultations booking</li>
              <li>VIP portal for exclusive collections</li>
              <li>Runway-inspired visual storytelling</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Features Gallery -->
  <section class="bg-white py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="mx-auto max-w-2xl text-center mb-12 sm:mb-16">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Luxury Shopping Experience</h2>
        <p class="mt-4 text-lg text-gray-600">Premium features for fashion connoisseurs</p>
      </div>
      
      <!-- Feature 1 - Image Left -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center mb-16 lg:mb-24">
        <div class="rounded-2xl overflow-hidden shadow-lg">
          <img 
            src="images/portias.png" 
            alt="Portia's Couture virtual try-on feature" 
            class="w-full h-auto object-cover"
            loading="lazy"
            width="1200"
            height="800"
          >
        </div>
        <div>
          <h3 class="text-2xl sm:text-3xl font-semibold text-gray-900 mb-4">Virtual Styling Suite</h3>
          <p class="text-gray-600 leading-relaxed">
            Our augmented reality features create a boutique experience at home:
          </p>
          <ul class="mt-4 space-y-2 text-gray-600">
            <li class="flex items-start">
              <svg class="h-5 w-5 text-pink-500 mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
              </svg>
              <span>Virtual try-on for selected garments</span>
            </li>
            <li class="flex items-start">
              <svg class="h-5 w-5 text-pink-500 mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
              </svg>
              <span>Mix-and-match outfit builder</span>
            </li>
            <li class="flex items-start">
              <svg class="h-5 w-5 text-pink-500 mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
              </svg>
              <span>Fabric zoom with texture simulation</span>
            </li>
            <li class="flex items-start">
              <svg class="h-5 w-5 text-pink-500 mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
              </svg>
              <span>Personalized styling video consultations</span>
            </li>
          </ul>
        </div>
      </div>

      <!-- Feature 2 - Image Right -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
        <div>
          <h3 class="text-2xl sm:text-3xl font-semibold text-gray-900 mb-4">VIP Client Experience</h3>
          <p class="text-gray-600 leading-relaxed">
            Exclusive features for Portia's most valued customers:
          </p>
          <ul class="mt-4 space-y-2 text-gray-600">
            <li class="flex items-start">
              <svg class="h-5 w-5 text-pink-500 mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
              </svg>
              <span>Private appointment scheduling</span>
            </li>
            <li class="flex items-start">
              <svg class="h-5 w-5 text-pink-500 mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
              </svg>
              <span>Early access to new collections</span>
            </li>
            <li class="flex items-start">
              <svg class="h-5 w-5 text-pink-500 mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
              </svg>
              <span>Custom size profile with 3D body scanning</span>
            </li>
            <li class="flex items-start">
              <svg class="h-5 w-5 text-pink-500 mr-2 mt-0.5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
              </svg>
              <span>Dedicated client relationship manager</span>
            </li>
          </ul>
        </div>
        <div class="rounded-xl overflow-hidden shadow-lg">
          <img 
            src="images/portiass.png" 
            alt="Portia's Couture VIP client portal" 
            class="w-full h-auto object-cover"
            loading="lazy"
            width="1200"
            height="800"
          >
        </div>
      </div>
    </div>
  </section>

  <!-- Next Project -->
  <section class="py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="mx-auto max-w-2xl text-center">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Explore Our Next Project</h2>
        <p class="mt-4 text-lg text-gray-600">Discover more of our premium e-commerce solutions</p>
        <div class="mt-8">
          <a href="iko.php" class="inline-flex items-center rounded-full px-6 py-3 text-lg font-medium text-gray-900 hover:text-white hover:shadow-lg hover:bg-gray-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-4 focus-visible:outline-gray-600 border border-gray-300 transition-colors duration-200">
            View iKo Delivery Platform
            <svg class="ml-3 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
    <div class="relative left-[calc(50%+3rem)] aspect-1155/678 w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
  </div>
</main>

<?php include 'includes/footer.php'; ?>
<script src="app.js"></script>