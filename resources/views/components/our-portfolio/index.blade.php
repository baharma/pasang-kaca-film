@props(['heroPortfolio' => null])
<section class="sofax-section-padding2">
    <div class="container">
        <div class="sofax-section-title center">
            <div class="tg-heading-subheading animation-style3">
                <h2>Our Portfolio</h2>
            </div>
        </div>
    </div>
    <div class="sofax-testimonial-slider">
        @foreach ($heroPortfolio['hero_image'] as $item)
            <div class="sofax-testimonial-content">
                <div class="card text-center p-3">
                    <img src="{{ $item['image'] }}" class="img-fluid rounded mb-3" alt="Derrick Turner"
                        style="width: 200px;height: 200px">
                    <h5 class="card-title">{{ $item['name'] }}</h5>
                </div>
            </div>
        @endforeach
    </div>
    <div class="sofax-testimonial-slider-2">
        @foreach ($heroPortfolio['hero_image'] as $item)
            <div class="sofax-testimonial-content">
                <div class="card text-center p-3">
                    <img src="{{ $item['image'] }}" class="img-fluid rounded mb-3" alt="Derrick Turner"
                        style="width: 200px;height: 200px">
                    <h5 class="card-title">{{ $item['name'] }}</h5>
                </div>
            </div>
        @endforeach

    </div>
</section>
