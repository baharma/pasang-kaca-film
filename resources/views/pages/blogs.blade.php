<x-app-layout>

    <x-navbar.index :profile="$profileHero" />
    <div class="sofax-breadcrumb">
        <div class="container">
            <h1 class="post__title">Our Blog</h1>
            <nav class="breadcrumbs">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><img src="assets/images/about/arrow.png" alt=""></li>
                    <li aria-current="page"> Our Blog</li>
                </ul>
            </nav>

        </div>
    </div>
    <section class="sofax-section-padding2">
        <div class="container">
            <div class="row">
                <div class="col">
                    @foreach ($paginatedBlogs as $item)
                        <div class="sofax-inner-blog-wrap wow fadeInUpX">
                            <div class="sofax-inner-blog-img">
                                <img src="{{ $item['image'] }}" alt="">
                            </div>
                            <div class="sofax-inner-blog-content">
                                <div class="sofax-inner-blog-meta">
                                    <a href="{{ route('blog-detail', $item['id']) }}">
                                        <ul>
                                            <li>{{ \Carbon\Carbon::parse($item['created_at'])->format('F d, Y') }}</li>
                                        </ul>
                                    </a>
                                </div>
                                <div class="sofax-inner-blog-text">
                                    <a href="{{ route('blog-detail', $item['id']) }}">
                                        <h3>{{ $item['name'] }}</h3>
                                    </a>
                                    <p>{{ $item['short_description'] }}</p>
                                </div>
                                <a class="sofax-icon-btn sofax-blog-icon-btn"
                                    href="{{ route('blog-detail', $item['id']) }}">Baca Lagi <img
                                        src="{{ asset('assets/images/v1/arrow-right.png') }}" alt=""></a>
                            </div>
                        </div>
                    @endforeach

                    <!-- Pagination Controls -->
                    <div class="sofax-navigation">
                        <nav class="navigation pagination" aria-label="Posts">
                            <div class="nav-links">
                                <!-- Previous Page Link -->
                                @if ($paginatedBlogs->currentPage() > 1)
                                    <a class="next page-numbers" href="{{ $paginatedBlogs->previousPageUrl() }}">
                                        <i class="ri-arrow-left-s-line">
                                            <img src="assets/images/blog/left-arrow.png" alt="">
                                        </i>
                                    </a>
                                @else
                                    <span class="page-numbers prev disabled">
                                        <i class="ri-arrow-left-s-line">
                                            <img src="assets/images/blog/left-arrow.png" alt="">
                                        </i>
                                    </span>
                                @endif

                                <!-- Page Numbers -->
                                @foreach ($paginatedBlogs->links() as $link)
                                    <a class="page-numbers {{ $link->active ? 'current' : '' }}"
                                        href="{{ $link->url }}">
                                        {{ $link->label }}
                                    </a>
                                @endforeach

                                <!-- Next Page Link -->
                                @if ($paginatedBlogs->hasMorePages())
                                    <a class="next page-numbers" href="{{ $paginatedBlogs->nextPageUrl() }}">
                                        <i class="ri-arrow-right-s-line">
                                            <img src="assets/images/blog/right-arrow.png" alt="">
                                        </i>
                                    </a>
                                @else
                                    <span class="page-numbers next disabled">
                                        <i class="ri-arrow-right-s-line">
                                            <img src="assets/images/blog/right-arrow.png" alt="">
                                        </i>
                                    </span>
                                @endif
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sofax-service-slider">
        <div class="sofax-slider-service-section">
            <div class="sofax-service-slider-wrap">
                <div class="sofax-service-slider-icon">
                    <img src="assets/images/service/icon1.png" alt="">
                </div>
                <div class="sofax-service-slider-data light-color">
                    <h2>Kaca Filem Riben</h2>
                </div>
            </div>
            <div class="sofax-service-slider-wrap">
                <div class="sofax-service-slider-icon">
                    <img src="assets/images/service/icon1.png" alt="">
                </div>
                <div class="sofax-service-slider-data light-color">
                    <h2>Kaca Filem One Way</h2>
                </div>
            </div>
            <div class="sofax-service-slider-wrap">
                <div class="sofax-service-slider-icon">
                    <img src="assets/images/service/icon1.png" alt="">
                </div>
                <div class="sofax-service-slider-data light-color">
                    <h2>Sandblast</h2>
                </div>
            </div>
            <div class="sofax-service-slider-wrap">
                <div class="sofax-service-slider-icon">
                    <img src="assets/images/service/icon1.png" alt="">
                </div>
                <div class="sofax-service-slider-data light-color">
                    <h2>Kaca Filem Riben</h2>
                </div>
            </div>
            <div class="sofax-service-slider-wrap">
                <div class="sofax-service-slider-icon">
                    <img src="assets/images/service/icon1.png" alt="">
                </div>
                <div class="sofax-service-slider-data light-color">
                    <h2>Kaca Filem One Way</h2>
                </div>
            </div>
            <div class="sofax-service-slider-wrap">
                <div class="sofax-service-slider-icon">
                    <img src="assets/images/service/icon1.png" alt="">
                </div>
                <div class="sofax-service-slider-data light-color">
                    <h2>Sandblast</h2>
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
