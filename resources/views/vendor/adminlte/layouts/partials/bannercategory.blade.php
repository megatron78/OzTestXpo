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
                        @if(!empty($bannerData[0]->url1))
                            <a style="color: #0073B7;" href="{{ $bannerData[0]->url1 }}" target="_blank">
                                <img style="width: 100%; height: auto;" src="{{ asset($bannerData[0]->photo1_url) }}" alt="">
                            </a>
                        @else
                            <img style="width: 100%; height: auto;" src="{{ asset($bannerData[0]->photo1_url) }}" alt="">
                        @endif
                    </div>
                @endif
                @if(!empty($bannerData[0]->photo2_url))
                    <div class="item">
                        @if(!empty($bannerData[0]->url2))
                            <a style="color: #0073B7;" href="{{ $bannerData[0]->url2 }}" target="_blank">
                                <img style="width: 100%; height: auto;" src="{{ asset($bannerData[0]->photo2_url) }}" alt="">
                            </a>
                        @else
                            <img style="width: 100%; height: auto;" src="{{ asset($bannerData[0]->photo2_url) }}" alt="">
                        @endif
                    </div>
                @endif
                @if(!empty($bannerData[0]->photo3_url))
                    <div class="item">
                        @if(!empty($bannerData[0]->url3))
                            <a style="color: #0073B7;" href="{{ $bannerData[0]->url3 }}" target="_blank">
                                <img style="width: 100%; height: auto;" src="{{ asset($bannerData[0]->photo3_url) }}" alt="">
                            </a>
                        @else
                            <img style="width: 100%; height: auto;" src="{{ asset($bannerData[0]->photo3_url) }}" alt="">
                        @endif
                    </div>
                @endif
                @if(!empty($bannerData[0]->photo4_url))
                    <div class="item">
                        @if(!empty($bannerData[0]->url4))
                            <a style="color: #0073B7;" href="{{ $bannerData[0]->url4 }}" target="_blank">
                                <img style="width: 100%; height: auto;" src="{{ asset($bannerData[0]->photo4_url) }}" alt="">
                            </a>
                        @else
                            <img style="width: 100%; height: auto;" src="{{ asset($bannerData[0]->photo4_url) }}" alt="">
                        @endif
                    </div>
                @endif
                @if(!empty($bannerData[0]->photo5_url))
                    <div class="item">
                        @if(!empty($bannerData[0]->url5))
                            <a style="color: #0073B7;" href="{{ $bannerData[0]->url5 }}" target="_blank">
                                <img style="width: 100%; height: auto;" src="{{ asset($bannerData[0]->photo5_url) }}" alt="">
                            </a>
                        @else
                            <img style="width: 100%; height: auto;" src="{{ asset($bannerData[0]->photo5_url) }}" alt="">
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>