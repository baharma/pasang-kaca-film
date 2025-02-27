@props(['heroOutservice' => null])
<div id="blog" class="section sofax-section-padding">
    <div class="container">
        <div class="sofax-section-title">
            <div class="row">
                <div class="col-xl-7 col-lg-8">
                    <div class="tg-heading-subheading animation-style3">
                        <h2>Our Product</h2>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-4 d-flex justify-content-end align-items-center">

                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($heroOutservice['hero_image'] as $item)
                <div class="col-lg-4 col-md-6">
                    <a>
                        <div class="sofax-testimonial-itemv8 wow fadeInUpX" data-wow-delay="0.1s">
                            <div class="sofax-testimonial-thumbv8">
                                <img src="{{ $item['image'] }}" alt="" height="300px" width="300px">
                                <div class="sofax-testimonial-btnv8 light-color">
                                    <h4>{{ $item['name'] }}</h4>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- end service section -->
