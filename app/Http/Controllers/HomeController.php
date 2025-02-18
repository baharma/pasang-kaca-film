<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $response = Http::get('https://api.apexhub.id/api/web-base/code/pasangkacafilm');

        if ($response->successful()) {
            $data = $response->json(); // Ubah response menjadi array
        } else {
            $data = ['error' => 'Gagal mengambil data dari API'];
        }
        $heroOutservice = $data['data']['hero'][0];
        $heroPortfolio = $data['data']['hero'][1];
        $aboutUs = $data['data']['hero'][2];
        $profileHero = $data;

        return view('pages.home',compact('heroOutservice','heroPortfolio','aboutUs','profileHero'));
    }
}
