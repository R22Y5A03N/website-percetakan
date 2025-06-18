<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Kami</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">
    <!-- Header/Navbar -->
    <header class="bg-white shadow-md">
        <nav class="container mx-auto px-4 py-4 flex items-center justify-between">
            <div class="flex items-center">
                <a href="/" class="text-2xl font-bold text-blue-600">Print<span class="text-gray-800">Master</span></a>
            </div>
            <div class="flex items-center space-x-4">
                <a href="/" class="text-gray-800 hover:text-blue-600 transition-colors">Beranda</a>
            </div>
        </nav>
    </header>

    <section class="py-16 container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-8 text-center text-blue-600">Produk Percetakan Kami</h2>
        <p class="text-center text-gray-600 max-w-2xl mx-auto mb-12">Kami menyediakan berbagai produk percetakan berkualitas tinggi untuk kebutuhan bisnis dan personal Anda.</p>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($produks as $produk)
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 flex flex-col">
                <div class="h-48 overflow-hidden">
                    <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama }}" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                </div>
                <div class="p-6 flex-grow">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $produk->nama }}</h3>
                    <p class="text-gray-600 mb-4 line-clamp-3">{{ $produk->deskripsi }}</p>
                </div>
                <div class="px-6 pb-6 pt-2 flex justify-between items-center">
                    <span class="text-blue-600 font-bold text-xl">Rp {{ number_format($produk->harga, 0, ',', '.') }}</span>
                    <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition-colors duration-300 flex items-center">
                        <i class="fas fa-shopping-cart mr-2"></i> Pesan
                    </a>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-12">
                <i class="fas fa-box-open text-gray-300 text-5xl mb-4"></i>
                <p class="text-gray-500 text-xl">Belum ada produk tersedia.</p>
            </div>
            @endforelse
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between">
                <div class="mb-6 md:mb-0">
                    <h3 class="text-2xl font-bold mb-4">Print<span class="text-blue-400">Master</span></h3>
                    <p class="text-gray-400 max-w-md">Layanan percetakan berkualitas tinggi untuk kebutuhan bisnis dan personal Anda.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Hubungi Kami</h4>
                    <p class="text-gray-400"><i class="fas fa-map-marker-alt mr-2"></i> Jl. Percetakan No. 123, Kota</p>
                    <p class="text-gray-400"><i class="fas fa-phone mr-2"></i> (021) 123-4567</p>
                    <p class="text-gray-400"><i class="fas fa-envelope mr-2"></i> info@printmaster.com</p>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} PrintMaster. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>
</body>
</html>