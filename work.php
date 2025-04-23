<?php 
$pageTitle = "work";
include 'includes/header.php'; 
?>
      <!-- Main Content -->
      <main class="relative isolate px-6 pt-14 lg:px-8">
        <!-- Decorative background elements -->
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
          <div class="relative left-[calc(50%-11rem)] aspect-1155/678 w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>

        <!-- Projects Section -->
        <section aria-labelledby="projects-heading" class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-24 lg:px-8">
          <h3 id="projects-heading" class="text-3xl tracking-tight text-gray-900 sm:text-4xl mb-12 underline">All Projects</h3>
          
          <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-2 xl:gap-x-8">
            <!-- Project 1 -->
            <article class="group">
              <a href="mmotors.php" class="block focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2 rounded-lg">
                <div class="aspect-square w-full overflow-hidden rounded-xl bg-gray-200">
                  <img 
                    src="images/motorsbg.webp" 
                    alt="M-motors motorcycle store showcase" 
                    class="h-full w-full object-cover object-center group-hover:opacity-75 transition-opacity"
                    width="600"
                    height="600"
                    loading="lazy"
                  >
                </div>
                <h2 class="mt-4 text-2xl font-semibold text-gray-700">M-motors</h2>
                <p class="mt-1 text-gray-500">Motorcycle e-commerce platform</p>
              </a>
            </article>

            <!-- Project 2 -->
            <article class="group">
              <a href="portias.php" class="block focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2 rounded-lg">
                <div class="aspect-square w-full overflow-hidden rounded-xl bg-gray-200">
                  <img 
                    src="images/portiass.png" 
                    alt="Portia's Couture fashion store" 
                    class="h-full w-full object-cover object-center group-hover:opacity-75 transition-opacity"
                    width="600"
                    height="600"
                    loading="lazy"
                  >
                </div>
                <h2 class="mt-4 text-2xl font-semibold text-gray-700">Portia's Couture</h2>
                <p class="mt-1 text-gray-500">Fashion e-commerce platform</p>
              </a>
            </article>

            <!-- Project 3 -->
            <article class="group">
              <a href="iko.php" class="block focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2 rounded-lg">
                <div class="aspect-square w-full overflow-hidden rounded-xl bg-gray-200">
                  <img 
                    src="images/ikogall.png" 
                    alt="iKo parcel delivery service" 
                    class="h-full w-full object-cover object-center group-hover:opacity-75 transition-opacity"
                    width="600"
                    height="600"
                    loading="lazy"
                  >
                </div>
                <h2 class="mt-4 text-2xl font-semibold text-gray-700">iKo</h2>
                <p class="mt-1 text-gray-500">Parcel delivery service platform</p>
              </a>
            </article>

            <!-- Project 4 -->
            <article class="group">
              <a href="#" class="block focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2 rounded-lg">
                <div class="aspect-square w-full overflow-hidden rounded-xl bg-gray-200">
                  <img 
                    src="images/games_key.webp" 
                    alt="Game Hub e-commerce platform" 
                    class="h-full w-full object-cover object-center group-hover:opacity-75 transition-opacity"
                    width="600"
                    height="600"
                    loading="lazy"
                  >
                </div>
                <h2 class="mt-4 text-2xl font-semibold text-gray-900">Game Keys</h2>
                <p class="mt-1 text-gray-500">Digital game distribution platform</p>
              </a>
            </article>
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