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
        $data = $response->json();

        if (!$response || !$response->successful()) {
            return view('pages.home');
        }

        $data = $response->json();


        if (!isset($data['data']['website_profile']) || !isset($data['data']['website_profile']['hero'])) {
            return view('pages.home');
        }

        $heroOutservice = $data['data']['website_profile']['hero'][0] ?? null;
        $heroPortfolio = $data['data']['website_profile']['hero'][1] ?? null;
        $aboutUs = $data['data']['website_profile']['hero'][2] ?? null;
        $profileHero = $data;
        return view('pages.home', compact('heroOutservice', 'heroPortfolio', 'aboutUs', 'profileHero'));
    }

    public function allBlog($id) {
        $response = $this->executeWithRetry(function () {
            return Http::timeout(30)->get('https://api.apexhub.id/api/blog/$id');
        });
        $data = $response->json();
    }

    public function blog($id) {}
}
