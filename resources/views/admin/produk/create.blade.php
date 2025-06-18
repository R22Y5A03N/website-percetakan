@extends('layouts.admin')

@section('header', 'Tambah Produk')

@section('content')
<div class="container mx-auto">
    <div class="bg-white rounded-lg shadow-md p-6">
        <!-- Header -->
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl font-bold text-gray-800">
                <i class="fas fa-plus-circle mr-2"></i>
                Tambah Produk Baru
            </h2>
            <a href="{{ route('admin.produk.index') }}" class="text-gray-600 hover:text-gray-900 flex items-center">
                <i class="fas fa-arrow-left mr-2"></i>
                Kembali
            </a>
        </div>

        <!-- Error message -->
        @if ($errors->any())
            <div class="mb-6 bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded">
                <p class="font-bold">Terjadi kesalahan:</p>
                <ul class="mt-2 list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form -->
        <form action="{{ route('admin.produk.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Left Column -->
                <div class="space-y-6">
                    <div>
                        <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama Produk <span class="text-red-500">*</span></label>
                        <input type="text" name="nama" id="nama" value="{{ old('nama') }}" placeholder="Masukkan nama produk" 
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 @error('nama') border-red-500 @enderror" required>
                    </div>
                    
                    <div>
                        <label for="harga" class="block text-sm font-medium text-gray-700 mb-1">Harga <span class="text-red-500">*</span></label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span class="text-gray-500">Rp</span>
                            </div>
                            <input type="number" name="harga" id="harga" value="{{ old('harga') }}" placeholder="0" min="0" step="1000"
                                   class="w-full pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 @error('harga') border-red-500 @enderror" required>
                        </div>
                        <p class="text-xs text-gray-500 mt-1">Masukkan harga dalam rupiah tanpa tanda titik atau koma</p>
                    </div>
                    
                    <div>
                        <label for="stok" class="block text-sm font-medium text-gray-700 mb-1">Stok</label>
                        <input type="number" name="stok" id="stok" value="{{ old('stok', 0) }}" min="0"
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                        <p class="text-xs text-gray-500 mt-1">Biarkan 0 jika stok tidak terbatas</p>
                    </div>
                </div>
                
                <!-- Right Column -->
                <div class="space-y-6">
                    <div>
                        <label for="gambar" class="block text-sm font-medium text-gray-700 mb-1">Gambar Produk</label>
                        <div class="flex items-center justify-center w-full">
                            <label for="gambar" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <i class="fas fa-cloud-upload-alt mb-3 text-gray-400 text-3xl"></i>
                                    <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Klik untuk upload</span> atau drag and drop</p>
                                    <p class="text-xs text-gray-500">PNG, JPG atau JPEG (Maks. 2MB)</p>
                                </div>
                                <input id="gambar" name="gambar" type="file" class="hidden" accept="image/png, image/jpeg, image/jpg" />
                            </label>
                        </div>
                        <div id="image-preview" class="mt-3 hidden">
                            <div class="relative">
                                <img id="preview-image" src="#" alt="Preview" class="h-48 w-full object-contain border rounded">
                                <button type="button" id="remove-image" class="absolute top-2 right-2 bg-red-500 text-white rounded-full p-1 hover:bg-red-600">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Description - Full Width -->
            <div class="mt-6">
                <label for="deskripsi" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi Produk <span class="text-red-500">*</span></label>
                <textarea name="deskripsi" id="deskripsi" rows="6" placeholder="Tuliskan deskripsi lengkap produk di sini..."
                          class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 @error('deskripsi') border-red-500 @enderror" required>{{ old('deskripsi') }}</textarea>
            </div>

            <!-- Submit Button -->
            <div class="mt-8 flex justify-end">
                <button type="reset" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300 transition duration-200 mr-4">
                    Reset
                </button>
                <button type="submit" class="px-6 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition duration-200 flex items-center">
                    <i class="fas fa-save mr-2"></i>
                    Simpan Produk
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    // Preview uploaded image
    document.getElementById('gambar').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('preview-image').src = e.target.result;
                document.getElementById('image-preview').classList.remove('hidden');
            }
            reader.readAsDataURL(file);
        }
    });

    // Remove image preview
    document.getElementById('remove-image').addEventListener('click', function() {
        document.getElementById('gambar').value = '';
        document.getElementById('image-preview').classList.add('hidden');
    });
</script>
@endsection