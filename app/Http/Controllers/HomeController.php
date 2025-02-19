<?php

namespace App\Http\Controllers;

use App\Traits\RetryTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    use RetryTrait;

    public function index()
    {
        $response = $this->executeWithRetry(function () {
            return Http::timeout(30)->get('https://api.apexhub.id/api/web-base/code/pasangkacafilm');
        });

        // Jika response kosong atau tidak valid, log error dan tampilkan pesan error
        if (!$response || !$response->successful()) {
            Log::error('Gagal mengambil data dari API');
            return view('pages.home', ['error' => 'Gagal mengambil data dari API']);
        }

        // Ambil data dari response
        $data = $response->json();

        // Pastikan struktur data ada sebelum mengaksesnya
        if (!isset($data['data']) || !isset($data['data']['hero'])) {
            Log::error('Struktur data API tidak sesuai', ['response' => $data]);
            return view('pages.home', ['error' => 'Data dari API tidak valid']);
        }

        // Ambil elemen-elemen yang diharapkan
        $heroOutservice = $data['data']['hero'][0] ?? null;
        $heroPortfolio = $data['data']['hero'][1] ?? null;
        $aboutUs = $data['data']['hero'][2] ?? null;
        $profileHero = $data;

        return view('pages.home', compact('heroOutservice', 'heroPortfolio', 'aboutUs', 'profileHero'));
    }
}
