<?php 
$pageTitle = "about";
include 'includes/header.php'; 
?>
      <!-- Main Content -->
      <main class="relative isolate px-6 pt-14 lg:px-8">
        <!-- Decorative background elements -->
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
          <div class="relative left-[calc(50%-11rem)] aspect-1155/678 w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>

        <!-- Hero Section -->
        <section class="min-h-screen flex items-center">
          <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-14 lg:px-8 text-center">
            <h1 class="text-5xl sm:text-7xl tracking-tight text-gray-900">
              Crafting Digital Solutions With <span class="block italic text-indigo-600">Precision & Creativity</span>
            </h1>
          </div>
        </section>

        <!-- About Image -->
        <section class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 mb-16">
          <img src="src/header.jpg" alt="Dennis Maina at work" class="w-full rounded-2xl" loading="lazy">
        </section>

        <!-- Introduction -->
        <section class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 mb-24">
          <div class="prose prose-lg text-gray-700">
            <p class="text-xl leading-8">
              I’m Dennis Maina — a web developer and network technician who’s passionate about crafting digital solutions and building connections that matter. 🌐⚡

              By day, I engineer sleek websites and reliable networks with creativity and precision. By night, I explore new ideas and innovations, always inspired by what’s next. 🚀✨
              
              I am here to turn big ideas into digital realities that connect, inspire, and grow. Ready to launch something extraordinary together? 
            </p>
            
            <p class="text-xl leading-8">
              Let’s connect! 🌟
            </p>
          </div>
        </section>

        <!-- Gallery Images -->
        <section class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 mb-24">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <img src="src/services.jpg" alt="Design work by Dennis Maina" class="w-full rounded-2xl object-cover" loading="lazy">
            <img src="images/bg.webp" alt="Design work by Dennis Maina" class="w-full rounded-2xl object-cover" loading="lazy">
          </div>
        </section>

        <!-- Benefits Section -->
        <section>
          <div class="overflow-hidden bg-white py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
              <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                <div class="lg:pt-4 lg:pr-8">
                  <div class="lg:max-w-lg">
                    <h2 class="text-base/7 font-semibold text-indigo-600">My design Philosophy:</h2>
                    <p class="mt-2 text-4xl tracking-tight text-pretty text-gray-900 sm:text-5xl">Building Bridges Through Code & Creativity</p>
                    <p class="mt-6 text-lg/8 text-gray-700">My career was born from a simple conviction: great design shouldn't be limited by resources or circumstance. Having taught myself to code with just a laptop and relentless curiosity, I intimately understand the challenges of bringing visionary ideas to life.</p>
                    <p class="mt-6 text-lg/8 text-gray-700">I specialize in being the creative equalizer for ambitious projects - the designer who speaks developer, the strategist who sweats the pixels.</p>

                  </div>
                </div>
                <img src="images/bc.webp" alt="Product screenshot" class="object-scale-down rounded-xl shadow-xl">
              </div>
            </div>
          </div>
          
        </section>

<!-- Skills Section -->
<section class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 mb-16 md:mb-24">
  <h2 class="text-3xl sm:text-4xl md:text-5xl tracking-tight text-gray-900 mb-8 md:mb-12">My Skills & Toolset</h2>
  
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
    <!-- Design & Prototyping Card -->
    <div class="bg-white rounded shadow-lg p-4 md:p-6 hover:shadow-xl transition-shadow duration-300">
      <h3 class="text-xl md:text-2xl font-semibold text-gray-800 mb-4 md:mb-6 pb-2 flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
        </svg>
        Design & Prototyping
      </h3>
      <div class="grid grid-cols-2 gap-3 sm:gap-4 sm:grid-cols-3">
        <div class="flex items-center gap-2 rounded-lg p-2 sm:p-3">
          <img src="https://img.icons8.com/?size=100&id=W0YEwBDDfTeu&format=png&color=000000" alt="Figma" class="w-8 h-8 sm:w-10 sm:h-10">
          <span class="text-sm sm:text-lg">Figma</span>
        </div>
        <div class="flex items-center gap-2 rounded-lg p-2 sm:p-3">
          <img src="https://img.icons8.com/?size=100&id=js8pNS2UtYKY&format=png&color=000000" alt="Framer" class="w-8 h-8 sm:w-10 sm:h-10">
          <span class="text-sm sm:text-lg">Framer</span>
        </div>
        <div class="flex items-center gap-2 rounded-lg p-2 sm:p-3">
          <img src="https://img.icons8.com/?size=100&id=NeNPFdj7MzXi&format=png&color=000000" alt="Photoshop" class="w-8 h-8 sm:w-10 sm:h-10">
          <span class="text-sm sm:text-lg">Photoshop</span>
        </div>
        <div class="flex items-center gap-2 rounded-lg p-2 sm:p-3">
          <img src="https://img.icons8.com/?size=100&id=QaT9iepDXQab&format=png&color=000000" alt="Illustrator" class="w-8 h-8 sm:w-10 sm:h-10">
          <span class="text-sm sm:text-lg">Illustrator</span>
        </div>
        <div class="flex items-center gap-2 rounded-lg p-2 sm:p-3">
          <img src="src/protopie-2.svg" alt="ProtoPie" class="w-8 h-8 sm:w-10 sm:h-10">
          <span class="text-sm sm:text-lg">ProtoPie</span>
        </div>
        <div class="flex items-center gap-2 rounded-lg p-2 sm:p-3">
          <img src="https://img.icons8.com/?size=100&id=MU45yL8cD9cF&format=png&color=000000" alt="Miro" class="w-8 h-8 sm:w-10 sm:h-10">
          <span class="text-sm sm:text-lg">Miro</span>
        </div>
      </div>
    </div>

    <!-- Web Development Card -->
    <div class="bg-white rounded shadow-lg p-4 md:p-6 hover:shadow-xl transition-shadow duration-300">
      <h3 class="text-xl md:text-2xl font-semibold text-gray-800 mb-4 md:mb-6 pb-2 flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
        </svg>
        Web Development
      </h3>
      <div class="grid grid-cols-2 gap-3 sm:gap-4 sm:grid-cols-3">
        <div class="flex items-center gap-2 rounded-lg p-2 sm:p-3">
          <img src="https://img.icons8.com/?size=100&id=cdYUlRaag9G9&format=png&color=000000" alt="HTML" class="w-8 h-8 sm:w-10 sm:h-10">
          <span class="text-sm sm:text-lg">Docker</span>
        </div>
        <div class="flex items-center gap-2 rounded-lg p-2 sm:p-3">
          <img src="src/php.png" alt="CSS" class="w-8 h-8 sm:w-10 sm:h-10">
          <span class="text-sm sm:text-lg">PHP</span>
        </div>
        <div class="flex items-center gap-2 rounded-lg p-2 sm:p-3">
          <img src="src/js.png" alt="JavaScript" class="w-8 h-8 sm:w-10 sm:h-10">
          <span class="text-sm sm:text-lg">JavaScript</span>
        </div>
        <div class="flex items-center gap-2 rounded-lg p-2 sm:p-3">
          <img src="https://img.icons8.com/?size=100&id=CIAZz2CYc6Kc&format=png&color=000000" alt="Tailwind CSS" class="w-8 h-8 sm:w-10 sm:h-10">
          <span class="text-sm sm:text-lg">Tailwind</span>
        </div>
        <div class="flex items-center gap-2 rounded-lg p-2 sm:p-3">
          <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg" alt="Git" class="w-8 h-8 sm:w-10 sm:h-10">
          <span class="text-sm sm:text-lg">Git</span>
        </div>
        <div class="flex items-center gap-2 rounded-lg p-2 sm:p-3">
          <img src="https://img.icons8.com/?size=100&id=9nLaR5KFGjN0&format=png&color=000000" alt="SQL" class="w-8 h-8 sm:w-10 sm:h-10">
          <span class="text-sm sm:text-lg">Mysql</span>
        </div>
      </div>
    </div>

    <!-- CMS Platforms Card -->
    <div class="bg-white rounded shadow-lg p-4 md:p-6 hover:shadow-xl transition-shadow duration-300">
      <h3 class="text-xl md:text-2xl font-semibold text-gray-800 mb-4 md:mb-6 pb-2 flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
        </svg>
        CMS Platforms
      </h3>
      <div class="grid grid-cols-2 gap-3 sm:gap-4 sm:grid-cols-3">
        <div class="flex items-center gap-2 rounded-lg p-2 sm:p-3">
          <img src="src/wordpress.png" alt="WordPress" class="w-8 h-8 sm:w-10 sm:h-10">
          <span class="text-sm sm:text-lg">WordPress</span>
        </div>
        <div class="flex items-center gap-2 rounded-lg p-2 sm:p-3">
          <img src="https://img.icons8.com/?size=100&id=cQfKnWABsKk9&format=png&color=000000" alt="Wix" class="w-8 h-8 sm:w-10 sm:h-10">
          <span class="text-sm sm:text-lg">Wix</span>
        </div>
        <div class="flex items-center gap-2 rounded-lg p-2 sm:p-3">
          <img src="https://img.icons8.com/?size=100&id=p3RaQI4XTc5b&format=png&color=000000" alt="Squarespace" class="w-8 h-8 sm:w-10 sm:h-10">
          <span class="text-sm sm:text-lg">Squarespace</span>
        </div>
      </div>
    </div>

    <!-- Networking & Infrastructure Card -->
    <div class="bg-white rounded shadow-lg p-4 md:p-6 hover:shadow-xl transition-shadow duration-300">
      <h3 class="text-xl md:text-2xl font-semibold text-gray-800 mb-4 md:mb-6 pb-2 flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
        </svg>
        Networking & Infrastructure
      </h3>
      <div class="grid grid-cols-2 gap-3 sm:gap-4 sm:grid-cols-3">
        <div class="flex items-center gap-2 rounded-lg p-2 sm:p-3">
          <img src="src/ip-address.png" alt="IP Addressing" class="w-8 h-8 sm:w-10 sm:h-10">
          <span class="text-sm sm:text-lg">IP Networking</span>
        </div>
        <div class="flex items-center gap-2 rounded-lg p-2 sm:p-3">
          <img src="src/dns.png" alt="DNS" class="w-8 h-8 sm:w-10 sm:h-10">
          <span class="text-sm sm:text-lg">DNS Management</span>
        </div>
        <div class="flex items-center gap-2 rounded-lg p-2 sm:p-3">
          <img src="src/cloud-computing.png" alt="Cloud" class="w-8 h-8 sm:w-10 sm:h-10">
          <span class="text-sm sm:text-lg">Cloud Deployment</span>
        </div>
        <div class="flex items-center gap-2 rounded-lg p-2 sm:p-3">
          <img src="src/network.png" alt="Security" class="w-8 h-8 sm:w-10 sm:h-10">
          <span class="text-sm sm:text-lg">Basic Security</span>
        </div>
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