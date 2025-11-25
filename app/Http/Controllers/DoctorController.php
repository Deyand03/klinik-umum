<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DoctorController extends Controller
{
    public function index()
    {
        // Tembak API Backend
        $response = Http::get(env('API_URL') . '/klinik-umum/doctors', [
            'klinik_id' => env('CLINIC_ID'),
        ]);

        // Ambil datanya
        $doctors = $response->json()['data'] ?? [];
        // Kirim ke View
        return view('pasien.jadwal', compact('doctors'));
    }
}
