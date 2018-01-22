<div class="scrollable-section" data-section-title="Home">
    <div class="fullscreen-box parallax" style="background: url('{{ asset($banner->background) }}');background-size: cover;" data-stellar-background-ratio="0.4" data-overlay="rgba(0,0,0,.6)">
        <div class="t-center fullscreen-content">

            <h2 class="font-60 heavy white uppercase fx" style="line-height: 1" data-animate="fadeInUp" data-animation-delay="500">{!! $banner->title !!}</h2>

            <h3 class="light-font white fx" style="line-height: 1" data-animate="fadeInUp" data-animation-delay="800">{!! $banner->description !!}</h3>

            <div class="button-group">
                <a class="btn btn-lg main-bg fx" href="{{ $banner->permalink }}" data-animate="fadeInRight" data-animation-delay="1300"><i class="fa fa-crop"></i>{{ $banner->button }}</a>
            </div>

        </div>
    </div>
</div>
