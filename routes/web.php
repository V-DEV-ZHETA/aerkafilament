<?php

use Illuminate\Support\Facades\Route;
use App\Models\Anggota;
use App\Models\Berita;
use App\Models\Dokumentasi;

Route::get('/', function () {
    $anggotas = Anggota::where('status', true)->get();
    $beritas = Berita::orderBy('tanggal', 'desc')->take(5)->get();
    $dokumentasis = Dokumentasi::all();

    // Data untuk chart distribusi member berdasarkan region
    $memberDistribution = Anggota::where('status', true)
        ->selectRaw('region, COUNT(*) as count')
        ->groupBy('region')
        ->get()
        ->pluck('count', 'region')
        ->toArray();

    // Data untuk chart jenis kendaraan
    $vehicleTypes = Anggota::where('status', true)
        ->selectRaw('jeniskendaraan, COUNT(*) as count')
        ->groupBy('jeniskendaraan')
        ->get()
        ->pluck('count', 'jeniskendaraan')
        ->toArray();

    // Hitung total member aktif
    $totalMembers = Anggota::where('status', true)->count();

    // Hitung total itasha
    $totalItasha = Anggota::where('status', true)->whereNotNull('itasha')->where('itasha', '!=', '')->count();

    // Hitung jumlah event dari berita
    $totalEvents = Berita::count();

    // Hitung jumlah region unik
    $totalCities = Anggota::where('status', true)->distinct('region')->count('region');

    return view('community', compact(
        'anggotas',
        'beritas',
        'dokumentasis',
        'memberDistribution',
        'vehicleTypes',
        'totalMembers',
        'totalItasha',
        'totalEvents',
        'totalCities'
    ));
});

Route::get('/profile/{id}', function ($id) {
    $anggota = Anggota::where('status', true)->findOrFail($id);

    return view('profile', compact('anggota'));
})->name('profile');
