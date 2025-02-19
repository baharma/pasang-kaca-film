<x-app-layout>

    <x-navbar.index :profile="$profileHero" />
    <x-main-hero.index />
    <x-our-service-hero.index :heroOutservice="$heroOutservice" />
    <x-our-portfolio.index :heroPortfolio="$heroPortfolio" />
    <x-about-us.index />
    <x-footer.index />


    <a href="https://api.whatsapp.com/send?phone={{ $profileHero->tlp ?? '' }}&text={{ urlencode('Halo mau Pesan kaca film') }}"
        target="_blank" class="whatsapp-button" title="Chat via WhatsApp">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp Icon">
    </a>
</x-app-layout>
