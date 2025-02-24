<?php

namespace App\Http\Controllers;

use App\Traits\RetryTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    use RetryTrait;

    public function index()
    {
        $response = $this->executeWithRetry(function () {
            return Http::timeout(30)->get('https://api.apexhub.id/api/web-base/code/pasangkacafilm');
        });


        if (!$response || !$response->successful()) {
            return view('pages.home');
        }

        $data = $response->json();


        if (!isset($data['data']) || !isset($data['data']['hero'])) {
            return view('pages.home');
        }

        $heroOutservice = $data['data']['hero'][0] ?? null;
        $heroPortfolio = $data['data']['hero'][1] ?? null;
        $aboutUs = $data['data']['hero'][2] ?? null;
        $profileHero = $data;

        return view('pages.home', compact('heroOutservice', 'heroPortfolio', 'aboutUs', 'profileHero'));
    }
}
