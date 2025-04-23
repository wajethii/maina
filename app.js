document.addEventListener('DOMContentLoaded', function() {
  // Mobile Menu Functionality
  const mobileMenuButton = document.getElementById('mobile-menu-button');
  const mobileMenuCloseButton = document.getElementById('mobile-menu-close-button');
  const mobileMenu = document.getElementById('mobile-menu');
  const mobileMenuBackdrop = document.getElementById('mobile-menu-backdrop');
  
  // Toggle menu function
  function toggleMobileMenu() {
      mobileMenu.classList.toggle('hidden');
      mobileMenuBackdrop.classList.toggle('hidden');
      document.body.style.overflow = mobileMenu.classList.contains('hidden') ? '' : 'hidden';
  }

  // Event Listeners
  mobileMenuButton.addEventListener('click', toggleMobileMenu);
  mobileMenuCloseButton.addEventListener('click', toggleMobileMenu);
  mobileMenuBackdrop.addEventListener('click', toggleMobileMenu);

  // Close menu when clicking on menu items
  const menuItems = mobileMenu.querySelectorAll('a');
  menuItems.forEach(item => {
      item.addEventListener('click', toggleMobileMenu);
  });

  // Close menu when pressing Escape key
  document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape' && !mobileMenu.classList.contains('hidden')) {
          toggleMobileMenu();
      }
  });

  // Smooth scrolling for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
          e.preventDefault();
          const target = document.querySelector(this.getAttribute('href'));
          if (target) {
              target.scrollIntoView({
                  behavior: 'smooth',
                  block: 'start'
              });
          }
      });
  });

  // Add schema markup dynamically
  const schemaScript = document.createElement('script');
  schemaScript.type = 'application/ld+json';
  schemaScript.text = JSON.stringify({
      "@context": "https://schema.org",
      "@type": "ProfessionalService",
      "name": "Dennis Maina Web Design",
      "image": "https://dennismaina.xyz/images/logo.webp",
      "@id": "https://dennismaina.xyz",
      "url": "https://dennismaina.xyz",
      "telephone": "+254717340777",
      "priceRange": "$$",
      "address": {
          "@type": "PostalAddress",
          "addressLocality": "Nairobi",
          "addressRegion": "Nairobi",
          "addressCountry": "KE"
      },
      "openingHoursSpecification": {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": [
              "Monday",
              "Tuesday",
              "Wednesday",
              "Thursday",
              "Friday"
          ],
          "opens": "09:00",
          "closes": "17:00"
      },
      "sameAs": [
          "https://medium.com/@Wamwagii",
          "https://www.linkedin.com/in/maina-mwangi/"
      ]
  });
  document.head.appendChild(schemaScript);

  // Lazy loading for images
  if ('IntersectionObserver' in window) {
      const lazyImages = document.querySelectorAll('img[loading="lazy"]');
      const imageObserver = new IntersectionObserver((entries) => {
          entries.forEach(entry => {
              if (entry.isIntersecting) {
                  const img = entry.target;
                  img.src = img.dataset.src || img.src;
                  img.removeAttribute('data-src');
                  imageObserver.unobserve(img);
              }
          });
      });

      lazyImages.forEach(img => {
          if (img.dataset.src) {
              imageObserver.observe(img);
          }
      });
  }
});