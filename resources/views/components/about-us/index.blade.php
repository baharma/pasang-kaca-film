@props(['aboutUs' => null])
<div class="sofax-hero-section overflow-hidden">
    <div class="container">
        <div class="sofax-hero-content center">
            <h1 class="slider-custom-anim-left" data-ani="slider-custom-anim-left" data-ani-delay="0.3s">About Us</h1>
            <p>
                {{ $aboutUs['hero_description'][0]['description'] }}
            </p>
        </div>
        <div class="sofax-subscription-field blog-details-subscribe-btn sofax-rating-icon">
        </div>
        <div class="sofax-hero-thumb1 wow fadeInUpX">
            <div class="sofax-hero-shape2">
                <img src="assets/images/v1/shape2.png" alt="">
            </div>
        </div>
    </div>
</div>
