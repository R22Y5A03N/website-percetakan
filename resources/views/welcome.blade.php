<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PrintMaster - Jasa Percetakan Profesional</title>
    <meta name="description" content="Layanan percetakan berkualitas tinggi untuk kebutuhan bisnis dan personal Anda">

    <!-- Tailwind CSS -->
    @vite('resources/css/app.css')

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-white">
    <!-- Header/Navbar -->
    <header class="fixed w-full bg-white shadow-md z-50">
        <nav class="container mx-auto px-4 py-4 flex items-center justify-between">
            <div class="flex items-center">
                <a href="#" class="text-2xl font-bold text-blue-600">Print<span class="text-gray-800">Master</span></a>
            </div>

            <div class="flex items-center lg:order-2">
                <a href="{{ route('login') }}" class="text-gray-800 hover:text-blue-600 font-medium mr-4 transition-colors duration-300">Masuk</a>
                <a href="{{ route('register') }}" class="text-white bg-blue-600 hover:bg-blue-700 px-5 py-2 rounded-lg font-medium transition-colors duration-300 shadow-md">Daftar</a>
                <button type="button" class="inline-flex items-center p-2 ml-4 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" data-collapse-toggle="mobile-menu">
                    <span class="sr-only">Buka menu utama</span>
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-8">
                <a href="#beranda" class="text-gray-800 hover:text-blue-600 transition-colors">Beranda</a>
                <a href="#layanan" class="text-gray-800 hover:text-blue-600 transition-colors">Layanan</a>
                <a href="#testimonial" class="text-gray-800 hover:text-blue-600 transition-colors">Testimonial</a>
                <a href="#harga" class="text-gray-800 hover:text-blue-600 transition-colors">Harga</a>
                <a href="{{ route('produk.index') }}" class="text-gray-800 hover:text-blue-600 transition-colors">Produk Kami</a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-800 hover:text-blue-600 focus:outline-none">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </nav>

    </header>

    <!-- Hero Section -->
    <section id="beranda" class="pt-32 pb-20 bg-gradient-to-r from-blue-50 to-blue-100">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-10 md:mb-0">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Kualitas Cetak Terbaik untuk Bisnis Anda
                </h1>
                <p class="text-xl text-gray-600 mb-8">Kami menyediakan layanan percetakan profesional dengan teknologi
                    modern dan hasil cetak berkualitas tinggi untuk kebutuhan bisnis dan personal Anda.</p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#layanan"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-6 rounded-lg transition-colors text-center">
                        Jelajahi Layanan
                    </a>
                    <a href="#kontak"
                        class="bg-white border-2 border-blue-600 text-blue-600 font-medium py-3 px-6 rounded-lg hover:bg-blue-50 transition-colors text-center">
                        Hubungi Kami
                    </a>
                </div>
            </div>
            <div class="md:w-1/2">
                <img src="{{ asset('images/Finishing.jpg') }}" alt="Percetakan Modern" class="rounded-lg shadow-xl">
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Mengapa Memilih Kami?</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Kami berkomitmen untuk memberikan layanan percetakan
                    terbaik dengan keunggulan yang tidak dimiliki oleh percetakan lain.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="bg-blue-100 p-4 rounded-full inline-block mb-4">
                        <i class="fas fa-print text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Teknologi Modern</h3>
                    <p class="text-gray-600">Kami menggunakan mesin cetak digital dan offset terbaru untuk menghasilkan
                        cetakan dengan kualitas terbaik.</p>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="bg-blue-100 p-4 rounded-full inline-block mb-4">
                        <i class="fas fa-clock text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Pengerjaan Cepat</h3>
                    <p class="text-gray-600">Kami menjamin pengerjaan yang cepat tanpa mengorbankan kualitas untuk
                        memenuhi tenggat waktu Anda.</p>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="bg-blue-100 p-4 rounded-full inline-block mb-4">
                        <i class="fas fa-star text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Hasil Berkualitas</h3>
                    <p class="text-gray-600">Kami mengutamakan kualitas terbaik untuk setiap proyek percetakan dengan
                        bahan premium dan finishing profesional.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="layanan" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Layanan Kami</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Kami menyediakan berbagai layanan percetakan untuk
                    memenuhi semua kebutuhan Anda.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service Card 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <img src="{{ asset('images/kartunama.jpg') }}" alt="Kartu Nama" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Kartu Nama</h3>
                        <p class="text-gray-600 mb-4">Cetak kartu nama premium dengan berbagai pilihan kertas dan
                            finishing untuk menunjang profesionalitas bisnis Anda.</p>
                        <a href="#kontak"
                            class="text-blue-600 hover:text-blue-800 font-medium inline-flex items-center">
                            Pesan Sekarang
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Service Card 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <img src="{{ asset('images/brodur.jpg') }}" alt="Brosur" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Brosur & Flyer</h3>
                        <p class="text-gray-600 mb-4">Cetak brosur dan flyer dengan desain menarik untuk promosi produk
                            atau layanan bisnis Anda.</p>
                        <a href="#kontak"
                            class="text-blue-600 hover:text-blue-800 font-medium inline-flex items-center">
                            Pesan Sekarang
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Service Card 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <img src="{{ asset('images/banner.jpg') }}" alt="Banner" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Banner & Spanduk</h3>
                        <p class="text-gray-600 mb-4">Cetak banner dan spanduk dengan ukuran kustom untuk kebutuhan
                            promosi indoor maupun outdoor.</p>
                        <a href="#kontak"
                            class="text-blue-600 hover:text-blue-800 font-medium inline-flex items-center">
                            Pesan Sekarang
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Service Card 4 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <img src="{{ asset('images/kalender.jpg') }}" alt="Kalender" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Kalender</h3>
                        <p class="text-gray-600 mb-4">Cetak kalender meja atau dinding dengan desain kustom untuk
                            keperluan promosi atau souvenir perusahaan.</p>
                        <a href="#kontak"
                            class="text-blue-600 hover:text-blue-800 font-medium inline-flex items-center">
                            Pesan Sekarang
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Service Card 5 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <img src="{{ asset('images/packaging.jpg') }}" alt="Packaging" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Packaging</h3>
                        <p class="text-gray-600 mb-4">Cetak kemasan produk dengan desain menarik dan bahan berkualitas
                            untuk meningkatkan nilai jual produk Anda.</p>
                        <a href="#kontak"
                            class="text-blue-600 hover:text-blue-800 font-medium inline-flex items-center">
                            Pesan Sekarang
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Service Card 6 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <img src="{{ asset('images/undangan.jpg') }}" alt="Undangan" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Undangan</h3>
                        <p class="text-gray-600 mb-4">Cetak undangan pernikahan, ulang tahun, atau acara khusus lainnya
                            dengan desain elegan dan personal.</p>
                        <a href="#kontak"
                            class="text-blue-600 hover:text-blue-800 font-medium inline-flex items-center">
                            Pesan Sekarang
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Proses Kerja Kami</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Kami memiliki alur kerja yang efisien untuk
                    memastikan hasil terbaik untuk setiap proyek.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="text-center">
                    <div
                        class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6">
                        1</div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Konsultasi</h3>
                    <p class="text-gray-600">Diskusikan kebutuhan dan ekspektasi Anda dengan tim kami untuk mendapatkan
                        solusi terbaik.</p>
                </div>

                <!-- Step 2 -->
                <div class="text-center">
                    <div
                        class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6">
                        2</div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Desain</h3>
                    <p class="text-gray-600">Tim desain kami akan membuat atau menyesuaikan desain sesuai dengan
                        kebutuhan Anda.</p>
                </div>

                <!-- Step 3 -->
                <div class="text-center">
                    <div
                        class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6">
                        3</div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Produksi</h3>
                    <p class="text-gray-600">Setelah desain disetujui, kami akan memulai proses cetak dengan mesin dan
                        bahan berkualitas.</p>
                </div>

                <!-- Step 4 -->
                <div class="text-center">
                    <div
                        class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6">
                        4</div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Pengiriman</h3>
                    <p class="text-gray-600">Kami akan mengirimkan hasil cetak tepat waktu sesuai dengan jadwal yang
                        telah disepakati.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section id="testimonial" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Testimoni Klien</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Apa kata klien kami tentang layanan percetakan yang
                    kami berikan.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-500 flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="ml-2 text-gray-600">5.0/5.0</span>
                    </div>
                    <p class="text-gray-600 italic mb-6">"Kualitas cetak yang sangat memuaskan dan pengerjaan tepat
                        waktu. Tim customer service juga sangat responsif dalam membantu saya memilih material yang
                        tepat untuk proyek saya."</p>
                    <div class="flex items-center">
                        <img src="/storage/testimonial-1.jpg" alt="Testimonial 1"
                            class="w-12 h-12 rounded-full object-cover">
                        <div class="ml-4">
                            <h4 class="font-bold text-gray-800">Budi Santoso</h4>
                            <p class="text-gray-600 text-sm">Pemilik Restoran</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-500 flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span class="ml-2 text-gray-600">5.0/5.0</span>
                    </div>
                    <p class="text-gray-600 italic mb-6">"Sangat puas dengan hasil cetak undangan pernikahan kami. Bahan
                        premium dan finishing yang elegan membuat undangan tampak eksklusif. Harga juga sangat
                        terjangkau untuk kualitas sebagus ini."</p>
                    <div class="flex items-center">
                        <img src="/storage/testimonial-2.jpg" alt="Testimonial 2"
                            class="w-12 h-12 rounded-full object-cover">
                        <div class="ml-4">
                            <h4 class="font-bold text-gray-800">Anita Wijaya</h4>
                            <p class="text-gray-600 text-sm">Wedding Planner</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-500 flex">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="ml-2 text-gray-600">4.5/5.0</span>
                    </div>
                    <p class="text-gray-600 italic mb-6">"Sebagai agensi event, kami sangat terbantu dengan layanan
                        cetak banner dan spanduk yang cepat dan berkualitas. Hasil cetak sesuai dengan ekspektasi dan
                        selalu tepat waktu."</p>
                    <div class="flex items-center">
                        <img src="/storage/testimonial-3.jpg" alt="Testimonial 3"
                            class="w-12 h-12 rounded-full object-cover">
                        <div class="ml-4">
                            <h4 class="font-bold text-gray-800">Rudi Hartono</h4>
                            <p class="text-gray-600 text-sm">Event Organizer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="harga" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Paket Harga</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Kami menawarkan paket harga yang kompetitif untuk
                    berbagai kebutuhan percetakan Anda.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Pricing Card 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="bg-blue-600 text-white p-6 text-center">
                        <h3 class="text-2xl font-bold mb-2">Paket Starter</h3>
                        <p class="text-3xl font-bold">Rp 499.000</p>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>100 pcs Kartu Nama</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>100 pcs Brosur (A5)</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>1 pcs Banner (60x160 cm)</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Desain Gratis</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-times text-red-500 mt-1 mr-2"></i>
                                <span>Pengiriman Gratis</span>
                            </li>
                        </ul>
                        <a href="#kontak"
                            class="block text-center bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-6 rounded-lg transition-colors">
                            Pesan Sekarang
                        </a>
                    </div>
                </div>

                <!-- Pricing Card 2 -->
                <div class="bg-white rounded-xl shadow-xl overflow-hidden transform scale-105 border-2 border-blue-600">
                    <div class="bg-blue-600 text-white p-6 text-center">
                        <h3 class="text-2xl font-bold mb-2">Paket Business</h3>
                        <p class="text-3xl font-bold">Rp 999.000</p>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>250 pcs Kartu Nama Premium</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>250 pcs Brosur (A4)</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>2 pcs Banner (80x200 cm)</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Desain Gratis</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Pengiriman Gratis</span>
                            </li>
                        </ul>
                        <a href="#kontak"
                            class="block text-center bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-6 rounded-lg transition-colors">
                            Pesan Sekarang
                        </a>
                    </div>
                </div>

                <!-- Pricing Card 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow">
                    <div class="bg-blue-600 text-white p-6 text-center">
                        <h3 class="text-2xl font-bold mb-2">Paket Enterprise</h3>
                        <p class="text-3xl font-bold">Rp 1.999.000</p>
                    </div>
                    <div class="p-6">
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>500 pcs Kartu Nama Premium</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>500 pcs Brosur (A4)</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>4 pcs Banner (100x200 cm)</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Desain Gratis Unlimited Revisi</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Pengiriman Gratis</span>
                            </li>
                        </ul>
                        <a href="#kontak"
                            class="block text-center bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-6 rounded-lg transition-colors">
                            Pesan Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-blue-600">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-white mb-6">Siap untuk Mencetak Proyek Anda?</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-3xl mx-auto">Hubungi kami sekarang untuk mendapatkan penawaran
                terbaik dan konsultasi gratis untuk kebutuhan percetakan Anda.</p>
            <a href="#kontak"
                class="inline-block bg-white text-blue-600 font-bold py-3 px-8 rounded-lg hover:bg-blue-50 transition-colors">
                Hubungi Kami
            </a>
        </div>
    </section>


        <!-- Google Maps (Placeholder) -->
        <div class="mt-8 rounded-xl overflow-hidden shadow-lg h-64 bg-gray-200">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126890.61728411156!2d106.70566499999999!3d-6.229728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e945e34b9d%3A0x5371bf0fdad786a2!2sJakarta%20Selatan%2C%20Jakarta!5e0!3m2!1sid!2sid!4v1682826200000!5m2!1sid!2sid"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    </div>
    </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Pertanyaan Umum</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Beberapa pertanyaan yang sering ditanyakan oleh klien
                    kami.</p>
            </div>

            <div class="max-w-3xl mx-auto">
                <div class="space-y-6">
                    <!-- FAQ Item 1 -->
                    <div class="border border-gray-200 rounded-lg overflow-hidden">
                        <button class="faq-toggle w-full flex items-center justify-between p-6 focus:outline-none">
                            <h3 class="text-xl font-medium text-gray-800">Berapa lama waktu pengerjaan untuk pesanan
                                cetak?</h3>
                            <i class="fas fa-chevron-down text-gray-600 transform transition-transform"></i>
                        </button>
                        <div class="faq-content hidden px-6 pb-6">
                            <p class="text-gray-600">Waktu pengerjaan tergantung pada jenis produk, kuantitas, dan
                                tingkat kesulitan. Secara umum, untuk pesanan standar membutuhkan waktu 2-3 hari kerja.
                                Untuk pesanan urgent, kami juga menyediakan layanan express dengan biaya tambahan.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="border border-gray-200 rounded-lg overflow-hidden">
                        <button class="faq-toggle w-full flex items-center justify-between p-6 focus:outline-none">
                            <h3 class="text-xl font-medium text-gray-800">Apakah saya bisa mendapatkan sampel cetak
                                sebelum memesan dalam jumlah besar?</h3>
                            <i class="fas fa-chevron-down text-gray-600 transform transition-transform"></i>
                        </button>
                        <div class="faq-content hidden px-6 pb-6">
                            <p class="text-gray-600">Ya, kami menyediakan layanan sampel cetak dengan biaya tertentu.
                                Sampel ini bisa menjadi referensi untuk Anda sebelum memesan dalam jumlah besar. Biaya
                                sampel cetak akan dikurangkan dari total pesanan jika Anda melanjutkan pemesanan.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="border border-gray-200 rounded-lg overflow-hidden">
                        <button class="faq-toggle w-full flex items-center justify-between p-6 focus:outline-none">
                            <h3 class="text-xl font-medium text-gray-800">Apakah PrintMaster menyediakan layanan desain?
                            </h3>
                            <i class="fas fa-chevron-down text-gray-600 transform transition-transform"></i>
                        </button>
                        <div class="faq-content hidden px-6 pb-6">
                            <p class="text-gray-600">Ya, kami memiliki tim desain profesional yang siap membantu Anda
                                membuat desain sesuai dengan kebutuhan. Kami menyediakan layanan desain untuk berbagai
                                produk cetak seperti kartu nama, brosur, banner, dan lainnya.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="border border-gray-200 rounded-lg overflow-hidden">
                        <button class="faq-toggle w-full flex items-center justify-between p-6 focus:outline-none">
                            <h3 class="text-xl font-medium text-gray-800">Bagaimana cara memesan layanan percetakan?
                            </h3>
                            <i class="fas fa-chevron-down text-gray-600 transform transition-transform"></i>
                        </button>
                        <div class="faq-content hidden px-6 pb-6">
                            <p class="text-gray-600">Anda dapat memesan melalui website ini dengan mengisi formulir
                                pesanan, menghubungi kami melalui telepon, email, atau WhatsApp. Anda juga bisa langsung
                                datang ke toko kami untuk konsultasi langsung dengan tim kami.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 5 -->
                    <div class="border border-gray-200 rounded-lg overflow-hidden">
                        <button class="faq-toggle w-full flex items-center justify-between p-6 focus:outline-none">
                            <h3 class="text-xl font-medium text-gray-800">Metode pembayaran apa saja yang tersedia?</h3>
                            <i class="fas fa-chevron-down text-gray-600 transform transition-transform"></i>
                        </button>
                        <div class="faq-content hidden px-6 pb-6">
                            <p class="text-gray-600">Kami menerima pembayaran melalui transfer bank, kartu kredit/debit,
                                e-wallet (OVO, GoPay, DANA), dan tunai untuk pembelian langsung di toko kami.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <!-- Company Info -->
                <div>
                    <h3 class="text-2xl font-bold mb-4">Print<span class="text-blue-400">Master</span></h3>
                    <p class="text-gray-400 mb-4">Layanan percetakan profesional dengan hasil berkualitas untuk
                        kebutuhan bisnis dan personal Anda.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-bold mb-4">Link Cepat</h4>
                    <ul class="space-y-2">
                        <li><a href="#beranda" class="text-gray-400 hover:text-white transition-colors">Beranda</a></li>
                        <li><a href="#layanan" class="text-gray-400 hover:text-white transition-colors">Layanan</a></li>
                        <li><a href="#portfolio" class="text-gray-400 hover:text-white transition-colors">Portfolio</a>
                        </li>
                        <li><a href="#testimonial"
                                class="text-gray-400 hover:text-white transition-colors">Testimonial</a></li>
                        <li><a href="#harga" class="text-gray-400 hover:text-white transition-colors">Harga</a></li>
                        <li><a href="#kontak" class="text-gray-400 hover:text-white transition-colors">Kontak</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h4 class="text-lg font-bold mb-4">Layanan Kami</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Kartu Nama</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Brosur & Flyer</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Banner & Spanduk</a>
                        </li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Kalender</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Packaging</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Undangan</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="text-lg font-bold mb-4">Kontak Kami</h4>
                    <ul class="space-y-2">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-2 text-blue-400"></i>
                            <span class="text-gray-400">Jl. Percetakan Raya No. 123, Jakarta Selatan, 12345</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-phone-alt mt-1 mr-2 text-blue-400"></i>
                            <span class="text-gray-400">+62 21 1234 5678</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-envelope mt-1 mr-2 text-blue-400"></i>
                            <span class="text-gray-400">info@printmaster.id</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-clock mt-1 mr-2 text-blue-400"></i>
                            <span class="text-gray-400">Senin - Jumat: 08.00 - 17.00</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-700 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-400 mb-4 md:mb-0">© 2025 PrintMaster. All Rights Reserved.</p>
                    <div class="flex space-x-6">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">Syarat & Ketentuan</a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">Kebijakan Privasi</a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">Kebijakan Cookie</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="back-to-top"
        class="fixed bottom-6 right-6 bg-blue-600 text-white p-3 rounded-full shadow-lg hidden hover:bg-blue-700 transition-colors">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Scripts -->
    <script>
        // Mobile Menu Toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // FAQ Toggle
        const faqToggles = document.querySelectorAll('.faq-toggle');

        faqToggles.forEach(toggle => {
            toggle.addEventListener('click', () => {
                const content = toggle.nextElementSibling;
                const icon = toggle.querySelector('i');

                content.classList.toggle('hidden');
                icon.classList.toggle('rotate-180');
            });
        });

        // Back to Top Button
        const backToTopButton = document.getElementById('back-to-top');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                backToTopButton.classList.remove('hidden');
            } else {
                backToTopButton.classList.add('hidden');
            }
        });

        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>
</body>

</html>