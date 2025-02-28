<x-app-layout>
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
