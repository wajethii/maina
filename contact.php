<?php 
$pageTitle = "Contact - Web Design & Development Services";
$metaDescription = "Get in touch for custom web design and development services. Contact via WhatsApp, email, or view our transparent pricing rate card.";
include 'includes/header.php'; 
?>

<main class="relative isolate px-6 pt-14 lg:px-8" itemscope itemtype="https://schema.org/ContactPage">
  <!-- Decorative background -->
  <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
    <div class="relative left-[calc(50%-11rem)] aspect-1155/678 w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
  </div>

  <!-- Contact Section -->
  <section class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-24 lg:px-8">
    <div class="min-h-[60vh] flex items-center">
      <div class="max-w-3xl">
        <h1 class="text-4xl sm:text-6xl font-bold tracking-tight text-gray-900" itemprop="headline">
          Let's Create Something Amazing
          <img src="src/Wave.png" alt="Waving hand emoji" class="inline-block w-12 h-12 ml-2" width="48" height="48" loading="lazy">
        </h1>
        
        <p class="mt-6 text-xl text-gray-600" itemprop="description">
          Ready to discuss your project? Reach out through any of these channels:
        </p>
        
        <div class="mt-12 space-y-8">
          <!-- WhatsApp -->
          <div class="group" itemprop="contactPoint" itemscope itemtype="https://schema.org/ContactPoint">
            <h2 class="text-sm text-gray-400 font-bold">WhatsApp</h2>
            <a href="https://api.whatsapp.com/send?phone=+254717340777" 
               class="block text-xl sm:text-2xl text-gray-900 hover:text-indigo-600 transition-colors"
               target="_blank" 
               rel="noopener noreferrer"
               itemprop="url">
              <span itemprop="telephone">+254 717 340 777</span>
            </a>
            <meta itemprop="contactType" content="customer service">
            <meta itemprop="areaServed" content="Kenya">
          </div>
          
          <hr class="border-gray-200">
          
          <!-- Email -->
          <div class="group" itemprop="contactPoint" itemscope itemtype="https://schema.org/ContactPoint">
            <h2 class="text-sm font-bold text-gray-500">Email</h2>
            <a href="mailto:dev@dennismaina.xyz" 
               class="block text-2xl sm:text-2xl text-gray-900 hover:text-indigo-600 transition-colors"
               target="_blank" 
               rel="noopener noreferrer"
               itemprop="email">
              dev@dennismaina.xyz
            </a>
            <meta itemprop="contactType" content="customer support">
          </div>
          
          <hr class="border-gray-200">
          
          <!-- Rate Card -->
          <div class="py-16">
            <h2 class="text-sm font-bold text-gray-500">Pricing</h2>
            <p class="mt-2 text-lg text-gray-600">
            Great design should be stress free, and so should pricing. Click below to check out my rate card no guesswork, just clear and fair pricing. If you have something unique in mind, let’s chat and make it happen!
            </p>
            <div class="mt-4 pt-2">
              <a href="ratecard.php" 
                 class="inline-flex items-center border-b text-base font-medium  text-indigo-600 "
                 target="_blank" 
                 rel="noopener noreferrer"
                 aria-label="Download Web Design Rate Card PDF">
                View Rate Card
               
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  
</main>

<?php include 'includes/footer.php'; ?>
<script src="app.js"></script>