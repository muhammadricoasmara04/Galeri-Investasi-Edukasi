@props(['id' => null])
<div id="{{ $id }}" class="w-full bg-white border-gray-200 h-auto p-4">
    <div class="mx-auto max-w-4xl text-center">
        <h1 class="text-[32px] sm:text-[42px] text-black font-extrabold mt-20">
            Tentang Galeri Investasi Edukasi 
        </h1>
        <p class="text-[18px] sm:text-[24px] mt-2 text-[#4B5563]">
            Program inovatif SMA Negeri 1 Pelaihari untuk mempersiapkan generasi muda yang melek finansial dan teknologi
        </p>
    </div>

    <div class="flex flex-col lg:flex-row gap-6 mt-8">
        <div class="flex-1 bg-gradient-to-br from-blue-50 to-indigo-100 p-8 rounded-xl text-center transition-transform duration-300 ease-in-out hover:scale-105">
            <div class="bg-blue-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                <i class="fas fa-chart-line text-white text-2xl"></i>
            </div>
            <h3 class="text-xl font-semibold mb-4">Literasi Keuangan</h3>
            <p class="text-gray-600">
                Memahami konsep dasar keuangan, investasi, dan perencanaan finansial untuk masa depan
            </p>
        </div>

        <div class="flex-1 bg-gradient-to-br from-green-50 to-emerald-100 p-8 rounded-xl text-center transition-transform duration-300 ease-in-out hover:scale-105 ">
            <div class="bg-green-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                <i class="fas fa-laptop text-white text-2xl"></i>
            </div>
            <h3 class="text-xl font-semibold mb-4">Teknologi Digital</h3>
            <p class="text-gray-600">
                Menggunakan aplikasi dan platform digital untuk mengelola keuangan dan berinvestasi
            </p>
        </div>

        <div class="flex-1 bg-gradient-to-br from-purple-50 to-violet-100 p-8 rounded-xl text-center transition-transform duration-300 ease-in-out hover:scale-105">
            <div class="bg-purple-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                <i class="fas fa-users text-white text-2xl"></i>
            </div>
            <h3 class="text-xl font-semibold mb-4">Pembelajaran Kolaboratif</h3>
            <p class="text-gray-600">
                Belajar bersama melalui diskusi, simulasi, dan praktik langsung dengan teman sebaya
            </p>
        </div>
    </div>
</div>
