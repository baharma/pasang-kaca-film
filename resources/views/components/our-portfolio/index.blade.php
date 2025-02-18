@props(['heroPortfolio'=>null])
    <section class="sofax-section-padding2">
        <div class="container">
            <div class="sofax-section-title center">
                <div class="tg-heading-subheading animation-style3">
                    <h2>See what our users have to say about it</h2>
                </div>
            </div>
        </div>
        <div class="sofax-testimonial-slider">
            @foreach ($heroPortfolio['hero_image'] as $item)
            <div class="sofax-testimonial-content">
                <div class="card text-center p-3">
                        <img src="{{ 'https://api.apexhub.id/assets/'.$item['image'] }}" class="img-fluid rounded mb-3" alt="Derrick Turner" style="max-width: 400px;">
                        <h5 class="card-title">{{ $item['name'] }}</h5>
                </div>
            </div>
            @endforeach
        </div>
        <div class="sofax-testimonial-slider-2">
            @foreach ( $heroPortfolio['hero_image'] as $item )
            <div class="sofax-testimonial-content">
                <div class="card text-center p-3">
                        <img src="{{ 'https://api.apexhub.id/assets/'.$item['image'] }}" class="img-fluid rounded mb-3" alt="Derrick Turner" style="max-width: 400px;">
                        <h5 class="card-title">{{ $item['name'] }}</h5>
                </div>
            </div>
            @endforeach

        </div>
    </section>
