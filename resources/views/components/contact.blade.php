@props(['id' => null])
<section id="{{ $id }}" class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Hubungi Kami</h2>
            <p class="text-xl text-gray-600">Tertarik bergabung atau memiliki pertanyaan?</p>
        </div>

        <div class="grid md:grid-cols-2 gap-12">
            <div>
                <h3 class="text-2xl font-semibold mb-6">Informasi Kontak</h3>
                <div class="space-y-4">
                    <!-- Alamat -->
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 flex items-center justify-center rounded-full bg-blue-600 flex-shrink-0">
                            <i class="fas fa-map-marker-alt text-white text-lg"></i>
                        </div>
                        <div class="flex-1">
                            <p class="font-semibold">Alamat</p>
                            <p class="text-gray-600">
                                Jl.A.Syairani Komplek Perkantoran Gagas Pelaihari Kab.Tanah Laut 70814
                            </p>
                        </div>
                    </div>

                    <!-- Telepon -->
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 flex items-center justify-center rounded-full bg-green-600 flex-shrink-0">
                            <i class="fas fa-phone text-white text-lg"></i>
                        </div>
                        <div class="flex-1">
                            <p class="font-semibold">Telepon</p>
                            <p class="text-gray-600">051221200</p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="flex items-start space-x-4">
                        <div
                            class="w-12 h-12 flex items-center justify-center rounded-full bg-purple-600 flex-shrink-0">
                            <i class="fas fa-envelope text-white text-lg"></i>
                        </div>
                        <div class="flex-1">
                            <p class="font-semibold">Email</p>
                            <p class="text-gray-600">info@sman1plh.sch.id</p>
                        </div>
                    </div>

                    <!-- Jam Operasional -->
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 flex items-center justify-center rounded-full bg-red-600 flex-shrink-0">
                            <i class="fas fa-clock text-white text-lg"></i>
                        </div>
                        <div class="flex-1">
                            <p class="font-semibold">Jam Operasional</p>
                            <p class="text-gray-600">Senin - Jumat: 07.00 - 15.00 WIB</p>
                        </div>
                    </div>
                </div>
            </div>


            <div>
                <form action="mailto:info@sma1pelaihari.sch.id" method="post" enctype="text/plain" class="space-y-4">
                    <!-- Nama Lengkap -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                        <input type="text"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500"
                            placeholder="Masukkan nama lengkap">
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500"
                            placeholder="Masukkan email">
                    </div>

                    <!-- Subjek -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Subjek</label>
                        <input type="text"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500"
                            placeholder="Subjek pesan">
                    </div>

                    <!-- Pesan -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Pesan</label>
                        <textarea rows="4" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500"
                            placeholder="Tulis pesan Anda"></textarea>
                    </div>

                    <!-- Tombol Kirim -->
                    <button type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-lg font-semibold transition duration-300">
                        Kirim Pesan
                    </button>
                </form>

            </div>
        </div>
    </div>
</section>
