<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="max-w-md mx-auto mt-10 bg-white p-6 rounded shadow">
        <h2 class="text-2xl font-bold mb-4">Daftar</h2>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <input name="name" type="text" placeholder="Nama" required class="w-full mb-4 p-2 border rounded" value="{{ old('name') }}">
            <input name="email" type="email" placeholder="Email" required class="w-full mb-4 p-2 border rounded" value="{{ old('email') }}">
            <input name="password" type="password" placeholder="Password" required class="w-full mb-4 p-2 border rounded">
            <input name="password_confirmation" type="password" placeholder="Konfirmasi Password" required class="w-full mb-4 p-2 border rounded">
            <button class="w-full bg-green-700 text-white py-2 rounded">Daftar</button>
        </form>
    </div>
</body>
</html>