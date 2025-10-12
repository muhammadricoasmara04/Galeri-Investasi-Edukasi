<nav class="bg-white border-gray-200">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2">
        <a href="#" class="flex items-center space-x-2 rtl:space-x-reverse">
            <i class="fa-solid fa-graduation-cap text-white bg-blue-700 p-4 rounded-full text-lg"></i>
            <div class="flex flex-col">
                <span class="self-center text-2xl font-semibold whitespace-nowrap">Galeri Investasi
                    Edukasi</span>
                <span class="text-[14px] text-gray-500 font-semibold whitespace-nowrap">SMA Negeri 1 Pelaihari</span>
            </div>
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul
                class="font-medium flex flex-col space-y-2 md:space-y-0 p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-6 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white">

                <li>
                    <a href="#"
                        class="group relative block py-2 px-3 text-white bg-blue-700 rounded-sm md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500">
                        Beranda
                        <span
                            class="absolute left-0 -bottom-1 w-full h-0.5 bg-yellow-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span></a>
                    </a>
                </li>

                <li>
                    <a href="#"
                        class="group relative block py-2 px-3 text-gray-900 rounded-sm hover:text-blue-700 md:hover:bg-transparent md:border-0 md:p-0 md:dark:hover:text-blue-500 transition-colors duration-300">
                        Tentang
                        <span
                            class="absolute left-0 -bottom-1 w-full h-0.5 bg-yellow-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span></a>
                </li>

                <li>
                    <a href="#"
                        class="group relative block py-2 px-3 text-gray-900 rounded-sm hover:text-blue-700 md:hover:bg-transparent md:border-0 md:p-0 md:dark:hover:text-blue-500 transition-colors duration-300">
                        Edukasi
                        <span
                            class="absolute left-0 -bottom-1 w-full h-0.5 bg-yellow-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span></a>
                </li>

                <li>
                    <a href="#"
                        class="group relative block py-2 px-3 text-gray-900 rounded-sm hover:text-blue-700 md:hover:bg-transparent md:border-0 md:p-0 md:dark:hover:text-blue-500 transition-colors duration-300">
                        Tools
                        <span
                            class="absolute left-0 -bottom-1 w-full h-0.5 bg-yellow-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span></a>
                </li>

                <li>
                    <a href="#"
                        class="group relative block py-2 px-3 text-gray-900 rounded-sm hover:text-blue-700 md:hover:bg-transparent md:border-0 md:p-0 md:dark:hover:text-blue-500 transition-colors duration-300">
                        Galeri
                        <span
                            class="absolute left-0 -bottom-1 w-full h-0.5 bg-yellow-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span></a>
                </li>

                <li>
                    <a href="#"
                        class="group relative block py-2 px-3 text-gray-900 rounded-sm hover:text-blue-700 md:hover:bg-transparent md:border-0 md:p-0 md:dark:hover:text-blue-500 transition-colors duration-300">
                        Kontak
                        <span
                            class="absolute left-0 -bottom-1 w-full h-0.5 bg-yellow-500 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span></a>
                </li>

            </ul>


        </div>
    </div>
</nav>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleButton = document.querySelector('[data-collapse-toggle="navbar-default"]');
        const navMenu = document.getElementById('navbar-default');

        toggleButton.addEventListener('click', () => {
            navMenu.classList.toggle('hidden');
        });
    });
</script>
