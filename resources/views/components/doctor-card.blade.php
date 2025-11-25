@props(['doctor'])

<div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition duration-300 group">
    <div class="p-6 flex items-start gap-4">
        <div class="avatar">
            <div class="w-20 h-20 rounded-full ring ring-brand-primary ring-offset-base-100 ring-offset-2">
                <img src="https://ui-avatars.com/api/?name={{ urlencode($doctor['nama']) }}&background=random&size=128" alt="{{ $doctor['nama'] }}" />
            </div>
        </div>

        <div>
            <h3 class="text-xl font-bold text-brand-dark group-hover:text-brand-secondary transition">
                {{ $doctor['nama'] }}
            </h3>
            <p class="text-sm text-gray-500 font-medium mb-2">
                {{ $doctor['spesialisasi'] ?? 'Dokter Umum' }}
            </p>
            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                • Tersedia
            </span>
        </div>
    </div>

    <div class="px-6 pb-4">
        <h4 class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3">Jadwal Praktek</h4>

        <div class="space-y-2">
            @forelse($doctor['jadwal'] as $jadwal)
                <div class="flex justify-between items-center text-sm p-2 bg-gray-50 rounded-lg">
                    <div class="flex items-center gap-2">
                        <span class="text-brand-tertiary">📅</span>
                        <span class="font-semibold text-gray-700">{{ $jadwal['hari'] }}</span>
                    </div>
                    <div class="text-gray-600">
                        {{ \Carbon\Carbon::parse($jadwal['jam_mulai'])->format('H:i') }} -
                        {{ \Carbon\Carbon::parse($jadwal['jam_selesai'])->format('H:i') }}
                    </div>
                </div>
            @empty
                <p class="text-sm text-gray-400 italic">Belum ada jadwal aktif.</p>
            @endforelse
        </div>
    </div>

    <div class="p-4 bg-gray-50 border-t border-gray-100">
        <a href="/booking/create?doctor_id={{ $doctor['id'] }}" class="btn btn-block bg-brand-btn text-white hover:bg-brand-dark border-none">
            Buat Janji Temu
        </a>
    </div>
</div>
