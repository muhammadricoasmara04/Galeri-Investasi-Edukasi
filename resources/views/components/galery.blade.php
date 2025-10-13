@props(['galery', 'id' => null])
<section id="{{ $id }}" class="py-10 bg-white">
    <div class="max-w-6xl mx-auto px-4 mt-10">
        <div class="mx-auto max-w-4xl text-center">
            <h2 class="text-3xl font-bold mb-6 text-center">Galeri Kegiatan</h2>
            <p class="text-[18px] sm:text-[24px] mt-2 text-[#4B5563]">
                Dokumentasi pembelajaran dan pencapaian siswa
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-4">
            @foreach ($galery as $item)
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 ease-in-out hover:scale-105">
                    <img src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">{{ $item['title'] }}</h3>
                        <p class="text-gray-600">{{ $item['description'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
