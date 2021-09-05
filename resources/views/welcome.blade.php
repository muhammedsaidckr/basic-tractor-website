<x-master-layout>
    <section class="slider-section container">
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="500"
                        data-thumb="upload/slider_new_01.jpg" data-saveperformance="off" data-title="Şahin Traktör">
                        <img src="images/slider/new-holland-slider.png" alt="fullslide1" data-bgposition="center top" data-bgfit="cover"
                             data-bgrepeat="no-repeat">
                        <div class="tp-caption slider_layer_01 text-center lft tp-resizeme" data-x="center" data-y="220"
                             data-speed="1000" data-start="600" data-easing="Power3.easeInOut" data-splitin="none"
                             data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                             data-endspeed="1000"
                             style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><img style="height: 48px" src="images/logo-sahin.png"
                                                                                                              alt="">
                        </div>
                    </li>
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="500"
                        data-thumb="upload/slider_new_01.jpg" data-saveperformance="off" data-title="Şahin Traktör">
                        <img src="images/slider/yesil-traktor.png" alt="fullslide1" data-bgposition="center top" data-bgfit="cover"
                             data-bgrepeat="no-repeat">
                        <div class="tp-caption slider_layer_01 text-center lft tp-resizeme" data-x="center" data-y="220"
                             data-speed="1000" data-start="600" data-easing="Power3.easeInOut" data-splitin="none"
                             data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                             data-endspeed="1000"
                             style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><img style="height: 48px" src="images/logo-sahin.png"
                                                                                                              alt="">
                        </div>
                    </li>
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="500"
                        data-thumb="upload/slider_new_01.jpg" data-saveperformance="off" data-title="Şahin Traktör">
                        <img src="images/slider/sahin-tc.png" alt="fullslide1" data-bgposition="center top" data-bgfit="cover"
                             data-bgrepeat="no-repeat">
                        <div class="tp-caption slider_layer_01 text-center lft tp-resizeme" data-x="center" data-y="220"
                             data-speed="1000" data-start="600" data-easing="Power3.easeInOut" data-splitin="none"
                             data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                             data-endspeed="1000"
                             style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><img style="height: 48px" src="images/logo-sahin.png"
                                                                                                              alt="">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="grey section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h4>FİRMAMIZDAN KARELER</h4>
                    </div>
                </div>
            </div>
            <div id="owl-featured" class="owl-custom">
                <div class="owl-featured">
                    <div class="shop-item-list entry">
                        <div class="">
                            <img src="{{asset('images/1.jpeg')}}" alt="LGS Kursları">
                            <div class="magnifier">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-featured">
                    <div class="shop-item-list entry">
                        <div class="">
                            <img src="{{asset('images/2.jpeg')}}" alt="">
                            <div class="magnifier">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-featured">
                    <div class="shop-item-list entry">
                        <div class="">
                            <img src="{{asset('images/5.jpeg')}}" alt="">
                            <div class="magnifier">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="owl-featured">
                    <div class="shop-item-list entry">
                        <div class="">
                            <img src="{{asset('images/10.jpeg')}}" alt="">
                            <div class="magnifier">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section darkskin fullscreen paralbackground parallax"
             style="background-image:url(images/bg-traktor.jpg)" data-img-width="1627"
             data-img-height="868" data-diff="100">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h4>Kütahya Şahin Traktör</h4>

                    </div>
                </div>
            </div>
            <div class="row service-center">
                <div class="col-md-4 col-sm-6">
                    <div class="feature-list" style="margin: 0 auto">
                        <i class="fa fa-info"></i>

                        <p><strong><a style="color: #FFF" href="{{route('front.single', 'kurumsal')}}" target="_blank">Kurumsal</a></strong></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="feature-list" style="margin: 0 auto">
                        <i class="fa fa-list"></i>
                        <p><strong><a style="color: #FFF" href="{{route('front.single', 'araclar')}}"
                                      target="_blank">Araçlar</a></strong></p>

                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="feature-list" style="margin: 0 auto">
                        <i class="fa fa-phone"></i>
                        <p><strong><a style="color: #FFF"
                                      href="{{route('front.single', 'iletisim')}}">İletişim</a></strong></p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-uyeler :vehicles="$vehicles"/>

</x-master-layout>
