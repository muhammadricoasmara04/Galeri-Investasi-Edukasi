@props(['id' => null])
<section id="{{ $id }}" class="w-full bg-white border-gray-200 py-20 px-4 sm:px-6 lg:px-8">
    <!-- Header -->
    <div class="mx-auto max-w-5xl text-center">
        <h1 class="text-[28px] sm:text-[40px] lg:text-[42px] text-black font-extrabold">
            Materi Edukasi
        </h1>
        <p class="text-[16px] sm:text-[20px] lg:text-[22px] mt-3 text-[#4B5563]">
            Pelajari konsep keuangan dari dasar hingga mahir
        </p>
    </div>

    <!-- Grid Card -->
    <div onclick="openModal('all-modules-modal')"
        class="bg-white p-6 rounded-xl shadow-lg cursor-pointer transition-transform duration-300 ease-in-out hover:scale-105 hover:shadow-xl max-w-5xl mx-auto">

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
            <!-- Ikon & Modul 1 -->
            <div class="flex items-start space-x-4">
                <div class="bg-red-500 w-12 h-12 rounded-lg flex items-center justify-center">
                    <i class="fas fa-piggy-bank text-white"></i>
                </div>
                <div>
                    <h3 class="text-lg font-semibold">Dasar Menabung</h3>
                    <p class="text-gray-600 text-sm">
                        Memahami pentingnya menabung dan cara memulai kebiasaan menabung
                    </p>
                </div>
            </div>

            <!-- Ikon & Modul 2 -->
            <div class="flex items-start space-x-4">
                <div class="bg-blue-500 w-12 h-12 rounded-lg flex items-center justify-center">
                    <i class="fas fa-credit-card text-white"></i>
                </div>
                <div>
                    <h3 class="text-lg font-semibold">Manajemen Utang</h3>
                    <p class="text-gray-600 text-sm">
                        Cara bijak mengelola utang dan menghindari jebakan utang
                    </p>
                </div>
            </div>

            <!-- Ikon & Modul 3 -->
            <div class="flex items-start space-x-4">
                <div class="bg-green-500 w-12 h-12 rounded-lg flex items-center justify-center">
                    <i class="fas fa-seedling text-white"></i>
                </div>
                <div>
                    <h3 class="text-lg font-semibold">Investasi Pemula</h3>
                    <p class="text-gray-600 text-sm">
                        Pengenalan instrumen investasi dan cara memulai investasi
                    </p>
                </div>
            </div>

            <!-- Ikon & Modul 4 -->
            <div class="flex items-start space-x-4">
                <div class="bg-purple-500 w-12 h-12 rounded-lg flex items-center justify-center">
                    <i class="fas fa-shield-alt text-white"></i>
                </div>
                <div>
                    <h3 class="text-lg font-semibold">Asuransi & Proteksi</h3>
                    <p class="text-gray-600 text-sm">
                        Memahami pentingnya proteksi finansial dan jenis-jenis asuransi
                    </p>
                </div>
            </div>
        </div>

        <div class="text-right">
            <span class="text-blue-600 text-sm font-medium">Lihat Detail Semua Modul →</span>
        </div>
    </div>


    <!-- Gambar Responsive -->
    <div class="w-full flex justify-center mt-12">
        <img class="w-full max-w-[900px] sm:max-w-[1000px] p-4 rounded-xl object-cover mx-auto"
            src="/img/education/education.png" alt="education" />
    </div>

    <!-- Footer Text -->
    <div class="mx-auto max-w-4xl text-center mt-6">
        <p class="text-[16px] sm:text-[20px] lg:text-[22px] text-[#4B5563]">
            Pembelajaran interaktif dengan teknologi terdepan untuk memberikan pengalaman belajar yang menyenangkan dan
            efektif
        </p>
    </div>
</section>
