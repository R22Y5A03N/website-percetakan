@extends('layouts.admin')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Edit Produk</h1>

    <form action="{{ route('admin.produk.update', $produk) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')

        <div>
            <label class="block font-medium">Nama Produk</label>
            <input type="text" name="nama" class="w-full border rounded px-3 py-2" value="{{ $produk->nama }}" required>
        </div>

        <div>
            <label class="block font-medium">Deskripsi</label>
            <textarea name="deskripsi" class="w-full border rounded px-3 py-2">{{ $produk->deskripsi }}</textarea>
        </div>

        <div>
            <label class="block font-medium">Harga</label>
            <input type="number" name="harga" class="w-full border rounded px-3 py-2" value="{{ $produk->harga }}" required>
        </div>

        <div>
            <label class="block font-medium">Gambar Produk</label>
            @if($produk->gambar)
                <img src="{{ asset('storage/' . $produk->gambar) }}" class="w-24 mb-2">
            @endif
            <input type="file" name="gambar" class="w-full border rounded px-3 py-2">
        </div>

        <div>
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded">Update</button>
            <a href="{{ route('admin.produk.index') }}" class="ml-3 text-gray-600">Batal</a>
        </div>
    </form>
@endsection
