@extends('layouts.index')

@section('title', 'Jadwal Dokter - Klinik Umum')

@section('content')

    <div class="bg-brand-dark text-white py-32">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h1 class="text-3xl md:text-4xl font-bold mb-4">Tim Dokter Kami</h1>
            <p class="text-gray-300 max-w-2xl mx-auto">
                Pilih dokter terbaik kami dan sesuaikan dengan jadwal luang Anda.
                Pendaftaran mudah tanpa antri lama.
            </p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-6 -mt-8 relative z-10 mb-12">
        <div class="bg-white p-4 rounded-xl shadow-lg flex flex-col md:flex-row gap-4 items-center justify-between">
            <div class="relative w-full md:w-1/2">
                <input type="text" placeholder="Cari nama dokter..." class="input input-bordered w-full pl-10" />
                <span class="absolute left-3 top-3 text-gray-400">🔍</span>
            </div>
            <div class="flex gap-2 w-full md:w-auto">
                <select class="select select-bordered w-full md:w-auto">
                    <option disabled selected>Filter Hari</option>
                    <option>Senin</option>
                    <option>Selasa</option>
                    <option>Rabu</option>
                </select>
                <button class="btn bg-brand-secondary text-white border-none">Cari</button>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-6 pb-20">
        @if(count($doctors) > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($doctors as $doctor)
                    @include('components.doctor-card', ['doctor' => $doctor])
                @endforeach
            </div>
        @else
            <div class="text-center py-20">
                <div class="text-6xl mb-4">👨‍⚕️</div>
                <h3 class="text-xl font-bold text-gray-800">Belum Ada Data Dokter</h3>
                <p class="text-gray-500">Mohon maaf, data dokter sedang tidak tersedia saat ini.</p>
            </div>
        @endif
    </div>
    @vite('resources/js/utility/navbar_jadwal.js')
@endsection
