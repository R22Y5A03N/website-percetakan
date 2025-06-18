@extends('layouts.admin')

@section('header', 'Daftar Produk')

@section('content')
<div class="container mx-auto">
    <div class="bg-white rounded-lg shadow-md p-6">
        <!-- Header with stats -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
            <div class="bg-gradient-to-r from-green-500 to-green-600 rounded-lg shadow p-4 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm uppercase font-medium">Total Produk</p>
                        <p class="text-2xl font-bold">{{ $produks->total() }}</p>
                    </div>
                    <div class="bg-white bg-opacity-30 rounded-full p-3">
                        <i class="fas fa-box text-xl"></i>
                    </div>
                </div>
            </div>
            
            <div class="bg-gradient-to-r from-blue-500 to-blue-600 rounded-lg shadow p-4 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm uppercase font-medium">Halaman</p>
                        <p class="text-2xl font-bold">{{ $produks->currentPage() }} dari {{ $produks->lastPage() }}</p>
                    </div>
                    <div class="bg-white bg-opacity-30 rounded-full p-3">
                        <i class="fas fa-file-alt text-xl"></i>
                    </div>
                </div>
            </div>
            
            <div class="bg-gradient-to-r from-purple-500 to-purple-600 rounded-lg shadow p-4 text-white">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm uppercase font-medium">Per Halaman</p>
                        <p class="text-2xl font-bold">{{ $produks->perPage() }}</p>
                    </div>
                    <div class="bg-white bg-opacity-30 rounded-full p-3">
                        <i class="fas fa-list text-xl"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Flash message -->
        @if(session('success'))
            <div class="mb-6 bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded relative" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
                <button class="absolute top-0 bottom-0 right-0 px-4 py-3" onclick="this.parentElement.style.display='none'">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        @endif

        <!-- Action buttons and search -->
        <div class="flex flex-col sm:flex-row justify-between items-center mb-6 gap-4">
            <h2 class="text-xl font-bold text-gray-800">
                <i class="fas fa-box mr-2"></i>
                Data Produk
            </h2>
            
            <div class="flex flex-col sm:flex-row gap-3">
                <!-- Search form -->
                <form method="GET" action="{{ route('admin.produk.index') }}" class="flex">
                    <div class="relative">
                        <input type="text" 
                               name="search" 
                               value="{{ request('search') }}"
                               placeholder="Cari produk..." 
                               class="pl-10 pr-4 py-2 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-search text-gray-400"></i>
                        </div>
                    </div>
                    <button type="submit" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-r-lg transition duration-200">
                        Cari
                    </button>
                </form>
                
                <a href="{{ route('admin.produk.create') }}" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg transition duration-200 flex items-center">
                    <i class="fas fa-plus mr-2"></i>
                    Tambah Produk
                </a>
            </div>
        </div>

        <!-- Pagination info -->
        <div class="mb-4 text-sm text-gray-600">
            Menampilkan {{ $produks->firstItem() ?? 0 }} - {{ $produks->lastItem() ?? 0 }} dari {{ $produks->total() }} produk
            @if(request('search'))
                untuk pencarian "<strong>{{ request('search') }}</strong>"
                <a href="{{ route('admin.produk.index') }}" class="ml-2 text-green-600 hover:underline">
                    <i class="fas fa-times"></i> Hapus filter
                </a>
            @endif
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-lg overflow-hidden shadow">
                <thead class="bg-gray-100 text-gray-700">
                    <tr>
                        <th class="py-3 px-4 text-left">No</th>
                        <th class="py-3 px-4 text-left">Gambar</th>
                        <th class="py-3 px-4 text-left">Nama Produk</th>
                        <th class="py-3 px-4 text-left">Deskripsi</th>
                        <th class="py-3 px-4 text-left">Harga</th>
                        <th class="py-3 px-4 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse($produks as $index => $produk)
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-4">{{ $produks->firstItem() + $index }}</td>
                            <td class="py-3 px-4">
                                @if($produk->gambar)
                                    <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama }}" class="h-16 w-16 object-cover rounded">
                                @else
                                    <div class="h-16 w-16 bg-gray-200 rounded flex items-center justify-center">
                                        <i class="fas fa-image text-gray-400 text-2xl"></i>
                                    </div>
                                @endif
                            </td>
                            <td class="py-3 px-4 font-medium">{{ $produk->nama }}</td>
                            <td class="py-3 px-4 max-w-xs truncate">{{ $produk->deskripsi }}</td>
                            <td class="py-3 px-4 font-medium text-green-600">
                                Rp {{ number_format($produk->harga, 0, ',', '.') }}
                            </td>
                            <td class="py-3 px-4 text-center">
                                <div class="flex justify-center space-x-2">
                                    <a href="{{ route('admin.produk.edit', $produk->id) }}" 
                                       class="bg-blue-500 hover:bg-blue-600 text-white p-2 rounded-lg transition duration-200" 
                                       title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button type="button" 
                                            onclick="confirmDelete('{{ $produk->id }}', '{{ $produk->nama }}')"
                                            class="bg-red-500 hover:bg-red-600 text-white p-2 rounded-lg transition duration-200" 
                                            title="Hapus">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    
                                    <form id="delete-form-{{ $produk->id }}" action="{{ route('admin.produk.destroy', $produk->id) }}" method="POST" class="hidden">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="py-8 text-center text-gray-500">
                                <div class="flex flex-col items-center justify-center">
                                    <i class="fas fa-box-open text-4xl mb-3"></i>
                                    @if(request('search'))
                                        <p>Tidak ada produk yang ditemukan untuk pencarian "{{ request('search') }}"</p>
                                        <a href="{{ route('admin.produk.index') }}" class="mt-3 text-green-600 hover:underline">
                                            Lihat semua produk
                                        </a>
                                    @else
                                        <p>Belum ada produk yang ditambahkan</p>
                                        <a href="{{ route('admin.produk.create') }}" class="mt-3 text-green-600 hover:underline">
                                            Tambah produk sekarang
                                        </a>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Custom Pagination -->
        @if($produks->hasPages())
            <div class="mt-6 flex flex-col sm:flex-row items-center justify-between gap-4">
                <!-- Pagination Info -->
                <div class="text-sm text-gray-700">
                    Menampilkan {{ $produks->firstItem() }} - {{ $produks->lastItem() }} dari {{ $produks->total() }} hasil
                </div>
                
                <!-- Pagination Links -->
                <nav class="flex items-center space-x-1">
                    {{-- Previous Page Link --}}
                    @if ($produks->onFirstPage())
                        <span class="px-3 py-2 text-gray-400 bg-gray-100 rounded-md cursor-not-allowed">
                            <i class="fas fa-chevron-left"></i>
                        </span>
                    @else
                        <a href="{{ $produks->previousPageUrl() }}" class="px-3 py-2 text-gray-600 bg-white border border-gray-300 rounded-md hover:bg-gray-50 transition duration-200">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($produks->getUrlRange(1, $produks->lastPage()) as $page => $url)
                        @if ($page == $produks->currentPage())
                            <span class="px-3 py-2 text-white bg-green-600 border border-green-600 rounded-md font-medium">
                                {{ $page }}
                            </span>
                        @else
                            <a href="{{ $url }}" class="px-3 py-2 text-gray-600 bg-white border border-gray-300 rounded-md hover:bg-gray-50 transition duration-200">
                                {{ $page }}
                            </a>
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($produks->hasMorePages())
                        <a href="{{ $produks->nextPageUrl() }}" class="px-3 py-2 text-gray-600 bg-white border border-gray-300 rounded-md hover:bg-gray-50 transition duration-200">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    @else
                        <span class="px-3 py-2 text-gray-400 bg-gray-100 rounded-md cursor-not-allowed">
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    @endif
                </nav>
            </div>
        @endif
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div id="deleteModal" class="fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50 hidden flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg p-6 max-w-md mx-auto">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-bold text-gray-900">Konfirmasi Hapus</h3>
            <button onclick="closeModal()" class="text-gray-400 hover:text-gray-600">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="mb-4">
            <p class="text-gray-700">Apakah Anda yakin ingin menghapus produk <span id="productName" class="font-bold"></span>?</p>
            <p class="text-sm text-gray-500 mt-2">Tindakan ini tidak dapat dibatalkan.</p>
        </div>
        <div class="flex justify-end space-x-3">
            <button onclick="closeModal()" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300 transition duration-200">
                Batal
            </button>
            <button onclick="deleteProduct()" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition duration-200">
                Hapus
            </button>
        </div>
    </div>
</div>

<script>
    let productIdToDelete = null;
    
    function confirmDelete(id, name) {
        productIdToDelete = id;
        document.getElementById('productName').textContent = name;
        document.getElementById('deleteModal').classList.remove('hidden');
    }
    
    function closeModal() {
        document.getElementById('deleteModal').classList.add('hidden');
    }
    
    function deleteProduct() {
        if (productIdToDelete) {
            document.getElementById(`delete-form-${productIdToDelete}`).submit();
        }
    }
    
    // Close modal on background click
    document.getElementById('deleteModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeModal();
        }
    });
</script>
@endsection