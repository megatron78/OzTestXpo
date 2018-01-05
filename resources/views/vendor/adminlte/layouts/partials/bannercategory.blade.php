<div class="row centered">
    <div class="col-lg-12 col-lg-offset-0">
        <div id="carousel-example-generic" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                @if(!empty($bannerData[0]->photo1_url))
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                @endif
                @if(!empty($bannerData[0]->photo2_url))
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                @endif
                @if(!empty($bannerData[0]->photo3_url))
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                @endif
                @if(!empty($bannerData[0]->photo4_url))
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                @endif
                @if(!empty($bannerData[0]->photo5_url))
                    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                @endif
            </ol>

            <!-- Wrapper for slides -->
            <div style="max-height: 450px;" class="carousel-inner">
                @if(!empty($bannerData[0]->photo1_url))
                    <div class="item active">
                        <img style="width: 100%; height: auto;" src="{{ asset($bannerData[0]->photo1_url) }}" alt="">
                    </div>
                @endif
                @if(!empty($bannerData[0]->photo2_url))
                    <div class="item">
                        <img style="width: 100%; height: auto;" src="{{ asset($bannerData[0]->photo2_url) }}" alt="">
                    </div>
                @endif
                @if(!empty($bannerData[0]->photo3_url))
                    <div class="item">
                        <img style="width: 100%; height: auto;" src="{{ asset($bannerData[0]->photo3_url) }}" alt="">
                    </div>
                @endif
                @if(!empty($bannerData[0]->photo4_url))
                    <div class="item">
                        <img style="width: 100%; height: auto;" src="{{ asset($bannerData[0]->photo4_url) }}" alt="">
                    </div>
                @endif
                @if(!empty($bannerData[0]->photo5_url))
                    <div class="item">
                        <img style="width: 100%; height: auto;" src="{{ asset($bannerData[0]->photo5_url) }}" alt="">
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>