<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dennis Maina | Expert Web Development | Ecommerce Solutions & Portfolio Websites</title>
    
    <!-- Meta Description for SEO -->
    <meta name="description" content="Dennis Maina provides professional web development services, specializing in custom ecommerce solutions, online shops, and stunning portfolio websites. Let's build your online success!" />

    <!-- Keywords for SEO -->
    <meta name="keywords" content="Dennis Maina, web development, ecommerce solutions, online shops, portfolio websites, custom websites, professional web development" />

    <!-- Robots Meta Tag -->
    <meta name="robots" content="index, follow" />

    <!-- Open Graph Tags for Social Media -->
    <meta property="og:title" content="Dennis Maina | Expert Web Development | Ecommerce Solutions & Portfolio Websites" />
    <meta property="og:description" content="Dennis Maina offers custom web development services specializing in ecommerce and portfolio websites. Building your success online!" />
    <meta property="og:image" content="your-image-url.jpg" />
    <meta property="og:url" content="your-page-url.com" />
    <meta property="og:type" content="website" />

    <!-- Twitter Card Tags -->
    <meta name="twitter:title" content="Dennis Maina | Expert Web Development | Ecommerce Solutions & Portfolio Websites" />
    <meta name="twitter:description" content="Professional web development services by Dennis Maina specializing in custom ecommerce solutions, online shops, and stunning portfolio websites." />
    <meta name="twitter:image" content="your-image-url.jpg" />
    <meta name="twitter:card" content="summary_large_image" />

    <!-- Favicon -->
    <link rel="icon" href="src/dmm.png" type="image/png">
    <!-- Canonical Link for SEO -->
    <link rel="canonical" href="your-page-url.com" />

    <!-- TailwindCSS Script -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

  <body>
    <div class="bg-white">
      <header class="absolute inset-x-0 top-0 z-50">
        <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
          <div class="flex lg:flex-1">
            <a href="index.php" class="-m-1.5 p-1.5">
              <span class="sr-only">Dennis Maina</span>
              <img class="h-8 w-auto" src="src/dmm.png" alt="DM Logo">
            </a>
          </div>
          <div class="flex lg:hidden">
            <button type="button" id="mobile-menu-button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
              <span class="sr-only">Open main menu</span>
              <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
            </button>
          </div>
          <div class="hidden lg:flex lg:gap-x-12">
            <a href="work.php" class="text-sm/6 font-semibold text-gray-900">Work</a>
            <a href="about.php" class="text-sm/6 font-semibold text-gray-900">About</a>
            <a href="gallery.php" class="text-sm/6 font-semibold text-gray-900">Gallery</a>
            <a href="contact.php" class="text-sm/6 font-semibold text-gray-900">Contact</a>
          </div>
        </nav>
        <!-- Mobile menu, show/hide based on menu open state. -->
        <div class="lg:hidden hidden" role="dialog" aria-modal="true" id="mobile-menu">
          <!-- Background backdrop, show/hide based on slide-over state. -->
          <div class="fixed inset-0 z-50 bg-black bg-opacity-50" id="mobile-menu-backdrop"></div>
          <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
              <a href="index.php" class="-m-1.5 p-1.5">
                <span class="sr-only">Dennis Maina</span>
                <img class="h-8 w-auto" src="src/dmm.png" alt="DM Logo">
              </a>
              <button type="button" id="mobile-menu-close-button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Close menu</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
            <div class="mt-6 flow-root">
              <div class="-my-6 divide-y divide-gray-500/10">
                <div class="space-y-2 py-6">
                  <a href="work.php" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Work</a>
                  <a href="about.php" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">About</a>
                  <a href="gallery.php" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Gallery</a>
                  <a href="contact.php" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Contacts</a>
                </div>
                <div class="py-6">
                  <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">dev@dennismaina.xyz</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
    