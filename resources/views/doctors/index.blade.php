<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testing</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="p-10 bg-gray-100">
    <h1 class="text-2xl font-bold mb-5">Dokter di Klinik Umum</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @forelse($doctors as $doc)
            <div class="bg-white p-5 rounded shadow">
                <h2 class="font-bold text-xl">{{ $doc['nama'] }}</h2>
                <p class="text-gray-600">{{ $doc['spesialisasi'] }}</p>
            </div>
        @empty
            <p class="text-red-500">Tidak ada dokter ditemukan atau Gagal Konek Backend!</p>
        @endforelse
    </div>
</body>
</html>
