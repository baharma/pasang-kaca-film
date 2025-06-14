<?php

namespace App\Http\Controllers;

use App\Traits\RetryTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    use RetryTrait;
    protected $apiURL;
    public function __construct()
    {
        $this->apiURL = env('API_APEX_HUB');
    }
    public function index()
    {
        $response = $this->executeWithRetry(function () {
            return Http::timeout(30)->get($this->apiURL .'/web-base/code/pasangkacafilm');
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
        $profile = $data['data']['website_profile'];
        $responseSeo = $this->executeWithRetry(function () use ($profile) {
            return Http::timeout(30)->get($this->apiURL . '/seo/' . $profile['seo_id']);
        })->json();
        $seo = $responseSeo['data'];

        return view('pages.home', compact('heroOutservice','seo', 'heroPortfolio', 'aboutUs', 'profileHero', 'profile'));
    }

    public function allBlog($id)
    {
        $response = $this->executeWithRetry(function () use ($id) {
            return Http::timeout(30)->get("https://api.apexhub.id/api/blog/{$id}");
        });

        $responseResult = $this->executeWithRetry(function () {
            return Http::timeout(30)->get('https://api.apexhub.id/api/web-base/code/pasangkacafilm');
        });

        if ($response === null) {
            throw new \Exception("Failed to fetch blog data after retries.");
        }

        $data = $responseResult->json();
        $blogData = $response->json();
        $blog = collect($blogData['data']);  // Convert data to Collection
        $profileHero = $data;

        // Use proper Laravel pagination
        $page = request()->get('page', 1);
        $perPage = 5;
        $paginatedBlogs = new \Illuminate\Pagination\LengthAwarePaginator(
            $blog->forPage($page, $perPage),
            $blog->count(),
            $perPage,
            $page,
            ['path' => request()->url()]
        );

        return view('pages.blogs', compact('profileHero', 'paginatedBlogs'));
    }

    public function blog($id)
    {
        $response = $this->executeWithRetry(function () use ($id) {
            return Http::timeout(30)->get("https://api.apexhub.id/api/blog/show/{$id}");
        });
        $responseResult = $this->executeWithRetry(function () {
            return Http::timeout(30)->get('https://api.apexhub.id/api/web-base/code/pasangkacafilm');
        });
        $profileHero = $responseResult->json();
        $blogsData = $response->json();
        $profile = $responseResult['data']['website_profile'];
        $blog = $blogsData['data'];
            $responseSeo = $this->executeWithRetry(function () use ($blog) {
            return Http::timeout(30)->get($this->apiURL . '/seo/' . $blog['seo_id']);
        })->json();
        $seo = $responseSeo['data'];
        return view('pages.blog', compact('profileHero', 'blog','seo'));
    }
}
