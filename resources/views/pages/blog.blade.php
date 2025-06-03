<x-app-layout>
    <x-slot name="metaHead">
        <x-seo-head
        canonicalUrl="{{ $seo['canonical_url'] }}"
        ogTitle="{{ $seo['seo_og_title']  }}"
        ogDescription="{{ $seo['seo_og_description']  }}"
        ogImage="{{ $seo['seo_og_image']  }}"
        keyword="{{ $seo['seo_keyword']   }}"
        description="{{ $seo['seo_description']   }}"
        name="{{ $seo['name'] }}"
    />
    </x-slot>
    <x-slot name="metaBody">
        <x-seo-body
            name="{{ $seo['name'] }}"
            description="{{ $seo['seo_description'] }}"
            canonicalUrl="{{ $seo['canonical_url'] }}"
        />
    </x-slot>
    <x-navbar.index :profile="$profileHero" />

    <section class="sofax-section-padding2">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="sofax-inner-blog-details-wrap">
                        <h1>
                            {{ $blog['name'] }}
                        </h1>
                        <div class="sofax-inner-blog-details-img wow fadeInUpX">
                            <img src=" {{ $blog['image'] }}" alt="">
                        </div>
                        <div class="sofax-inner-blog-details-content">
                            {!! $blog['blog'] !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-footer.index />


    <a href="https://api.whatsapp.com/send?phone={{ $profileHero->tlp ?? '' }}&text={{ urlencode('Halo mau Pesan kaca film') }}"
        target="_blank" class="whatsapp-button" title="Chat via WhatsApp">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp Icon">
    </a>
</x-app-layout>
