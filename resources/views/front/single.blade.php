<x-master-layout>
    <section class="grey page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-left">
                    <h1>{{$header}}</h1>
                </div>
                <div class="col-md-6 text-right">
                    <div class="bread">
                        <ol class="breadcrumb">
                            <li><a href="/">Ana Sayfa</a></li>
                            <li class="active">{{$header}}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if($link == 'kurumsal')
        <section class="white section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="media-element">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="{{asset('images/slider/new-holland-slider.png')}}" alt=""
                                             class="img-responsive">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="content-widget">
                            <div class="widget-title">
                                <h4>KURUMSAL</h4>
                                <hr>
                            </div>
                            <p>1989 da Kütahya Aslanapa ilçesinde kurulan işletmemiz Traktör ve Zirai Aletler Sıfır ve 2.El satışı yaptaktadır. Ayrıca Traktör ve Zirai aletler yedek parça ve madeni yağ satışı da yapan işletmemiz, güven ve satış sonrası menmuniyet ilkesini kendisine prensip edinmiştir.</p>

                        </div>
                    </div>
                </div>
                <hr class="invis1">
            </div>
        </section>
    @elseif($link == 'araclar')
        <x-uyeler :background="'white'" :vehicles="$vehicles"/>
    @elseif($link == 'iletisim')
        <section class="white section">
            <div class="container">

                <div class="row" style="margin-top: 30px;">
                    <div class="col-md-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12363.80128234093!2d29.8756906!3d39.221294!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x318dcff4a70a1320!2zxZ5BSMSwTiBUUkFLVMOWUiBLw5xUQUhZQQ!5e0!3m2!1str!2str!4v1630765236087!5m2!1str!2str" height="450" style="border:0;width: 100%" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>

            </div>
        </section>

    @endif
</x-master-layout>
