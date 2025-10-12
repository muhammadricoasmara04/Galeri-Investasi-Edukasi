  <nav class="bg-white border-b border-gray-200">
      <div class="max-w-screen-xl flex items-center justify-between mx-auto p-3 relative">
          {{-- Logo --}}
          <a href="#" class="flex items-center space-x-2 rtl:space-x-reverse min-w-0">
              <i class="fa-solid fa-graduation-cap text-white bg-blue-700 p-4 rounded-full text-lg flex-shrink-0"></i>
              <div class="flex flex-col min-w-0">
                  <span class="text-xl font-semibold text-gray-900 whitespace-nowrap truncate">
                      Galeri Investasi Edukasi
                  </span>
                  <span class="text-sm text-gray-500 font-semibold whitespace-nowrap truncate">
                      SMA Negeri 1 Pelaihari
                  </span>
              </div>
          </a>


          {{-- Tombol Hamburger --}}
          <button data-collapse-toggle="navbar-default" type="button"
              class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
              aria-controls="navbar-default" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                  viewBox="0 0 17 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M1 1h15M1 7h15M1 13h15" />
              </svg>
          </button>

          {{-- Menu --}}
          <div id="navbar-default"
              class="hidden absolute top-full left-0 w-full md:static md:block md:w-auto bg-white md:bg-transparent shadow-md md:shadow-none z-50 transition-all duration-300 ease-in-out">
              <ul
                  class="font-medium flex flex-col space-y-2 md:flex-row md:space-x-6 md:space-y-0 p-4 md:p-0 mt-4 md:mt-0 border border-gray-100 rounded-lg md:border-0 bg-gray-50 md:bg-transparent">
                  <li>
                      <a href="#"
                          class="group relative block py-2 px-3 mt-2 text-white bg-blue-700 rounded-sm md:bg-transparent md:text-blue-700 md:p-0">
                          Beranda
                          <span
                              class="absolute left-0 -bottom-1 w-full h-0.5 bg-yellow-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>
                      </a>
                  </li>
                  <li>
                      <a href="#"
                          class="group relative block py-2 px-3 text-gray-900 rounded-sm hover:text-blue-700 transition-colors duration-300">
                          Tentang
                          <span
                              class="absolute left-0 -bottom-1 w-full h-0.5 bg-yellow-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>
                      </a>
                  </li>
                  <li>
                      <a href="#"
                          class="group relative block py-2 px-3 text-gray-900 rounded-sm hover:text-blue-700 transition-colors duration-300">
                          Edukasi
                          <span
                              class="absolute left-0 -bottom-1 w-full h-0.5 bg-yellow-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>
                      </a>
                  </li>
                  <li>
                      <a href="#"
                          class="group relative block py-2 px-3 text-gray-900 rounded-sm hover:text-blue-700 transition-colors duration-300">
                          Tools
                          <span
                              class="absolute left-0 -bottom-1 w-full h-0.5 bg-yellow-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>
                      </a>
                  </li>
                  <li>
                      <a href="#"
                          class="group relative block py-2 px-3 text-gray-900 rounded-sm hover:text-blue-700 transition-colors duration-300">
                          Galeri
                          <span
                              class="absolute left-0 -bottom-1 w-full h-0.5 bg-yellow-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>
                      </a>
                  </li>
                  <li>
                      <a href="#"
                          class="group relative block py-2 px-3 text-gray-900 rounded-sm hover:text-blue-700 transition-colors duration-300">
                          Kontak
                          <span
                              class="absolute left-0 -bottom-1 w-full h-0.5 bg-yellow-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>
                      </a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>

  {{-- Hero Section --}}
  <section class="text-center py-16 bg-blue-700 text-white">
      <h1 class="text-3xl md:text-4xl font-bold mb-4">Membangun Literasi Keuangan Digital</h1>
      <p class="max-w-xl mx-auto text-lg mb-6">
          Belajar investasi dan mengelola keuangan dengan teknologi modern untuk masa depan yang lebih cerah.
      </p>
      <button class="bg-yellow-400 text-gray-800 px-6 py-3 rounded-full font-semibold hover:bg-yellow-500">
          Mulai Belajar
      </button>
  </section>

  <script>
      document.addEventListener('DOMContentLoaded', function() {
          const toggleButton = document.querySelector('[data-collapse-toggle="navbar-default"]');
          const navMenu = document.getElementById('navbar-default');

          if (toggleButton && navMenu) {
              toggleButton.addEventListener('click', () => {
                  navMenu.classList.toggle('hidden');
              });
          }
      });
  </script>
