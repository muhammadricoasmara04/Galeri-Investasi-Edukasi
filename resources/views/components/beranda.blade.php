@props(['id' => null])
<!-- Logo Header -->
<div class="mx-auto max-w-7xl px-2 sm:px-4 lg:px-6 flex items-center justify-center">
    <img class="w-[220px] sm:w-[400px] md:w-[550px] lg:w-[650px] xl:w-[700px] h-auto" src="/img/beranda/logo-header.png"
        alt="Logo Header">
</div>


<section id="{{ $id }}" class="bg-[#6C6DD2] py-12 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

    <div
        class="max-w-screen-lg mx-auto flex flex-col lg:flex-row justify-between items-center gap-8 lg:gap-12 px-4 sm:px-6 lg:px-8">
        <!-- Text Section -->
        <div class="flex-1 text-center lg:text-left">

            <p class="mb-10 text-white text-base sm:text-lg max-w-xl mx-auto lg:mx-0">
                Belajar investasi dan mengelola keuangan dengan teknologi modern untuk masa depan yang lebih cerah
            </p>
            <h1 class="text-2xl sm:text-5xl lg:text-[42px] font-extrabold leading-tight text-white">
                PENERIMA PENDANAAN
            </h1>
            <p class="mt-4 text-white text-base sm:text-lg max-w-xl mx-auto lg:mx-0">
                Kuasai Literasi & Digital KEUANGAN, Wujudkan Masa Depan yang Lebih Baik! </p>
            <div class="mt-6 flex flex-col sm:flex-row justify-center lg:justify-start gap-4">
                <a
                    class="text-base sm:text-lg inline-block text-white bg-[#EAB308] hover:bg-[#bb8d02] focus:ring-4 focus:ring-blue-300 font-medium rounded-3xl px-6 py-3 focus:outline-none">
                    Mulai Belajar
                </a>
                <a
                    class="text-base sm:text-lg inline-block text-white bg-transparent hover:bg-white focus:ring-4 focus:ring-blue-300 font-medium rounded-3xl px-6 py-3 border-white border hover:text-black focus:outline-none">
                    Tonton Video
                </a>
            </div>
        </div>

        <!-- Image Section -->
        <div class="flex-1 flex justify-center lg:justify-end">
            <img class="w-full max-w-xs sm:max-w-md lg:max-w-[550px] rounded-xl animate-float"
                src="/img/beranda/page-beranda.png" alt="imageberanda" />
        </div>
    </div>
</section>
