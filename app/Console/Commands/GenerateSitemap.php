<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Support\Carbon;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate the sitemap.xml file';

    public function handle()
    {
        $apiURL = env('API_APEX_HUB');

        $this->info('Mengambil Website ID...');
        $response = Http::timeout(30)->get("$apiURL/web-base/code/pasangkacafilm")->json();
        $websiteId = $response['data']['website_profile']['id'] ?? null;

        if (!$websiteId) {
            $this->error('Gagal mendapatkan Website ID');
            return 1;
        }

        $this->info("Website ID ditemukan: $websiteId");
        $responseBlog = Http::timeout(30)->get("$apiURL/blog/{$websiteId}")->json();
        $raw = $responseBlog['data'] ?? [];

        $sitemap = Sitemap::create()
            ->add(Url::create(url('/')))
            ->add(Url::create(url('/blogs')));

        foreach ($raw as $item) {
            $slug = $item['blog']['slug'] ?? null;
            $updated = $item['blog']['updated_at'] ?? null;

            if ($slug) {
                $sitemap->add(
                    Url::create(url("/blog/{$slug}"))
                        ->setLastModificationDate(Carbon::parse($updated))
                        ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                        ->setPriority(0.8)
                );
            }
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap berhasil dibuat di public/sitemap.xml ✅');
        return 0;
    }
}
