<x-master-layout>
    <section class="grey page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-left">
                    <h1>{{$news->title}}</h1>
                </div>
                <div class="col-md-6 text-right">
                    <div class="bread">
                        <ol class="breadcrumb">
                            <li><a href="/">Ana Sayfa</a></li>
                            <li class="active">{{$news->title}}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="grey section">
    <div class="container">
        <div class="row">
            <div id="content" class="col-md-8 col-sm-8 col-xs-12">
                <div class="blog-wrapper">
                    <div class="row second-bread">
                        <div class="col-md-6 text-left">
                            <h1></h1>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="bread">
                                <ol class="breadcrumb">
                                    <li><a href="{{route('welcome')}}">Ana sayfa</a></li>
                                    <li class="active">{{$news->title}}</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-wrapper">
                    <div class="blog-title">
                        <a class="category_title" href="{{'front.single', 'bizden-haberler'}}" title="">Bizden Haberler</a>
                        <h2>{{$news->title}}</h2>
                    </div>
                    <div class="blog-image">
                        <a href="#" title=""><img
                                src="{{asset($news->photo_path)}}" alt=""
                                class="img-responsive"></a>
                    </div>
                    {{--                                <div class="blog-desc">--}}
                    {{--                                    <div class="post-date">--}}
                    {{--                                        <span class="day">21</span>--}}
                    {{--                                        <span class="month">Şub</span>--}}
                    {{--                                    </div>--}}
                    {{--                                    <a href="#" class="readmore">Devamını Oku</a>--}}
                    {{--                                </div>--}}
                </div>
                {{--                        <nav class="text-center">--}}
                {{--                            <ul class="pagination">--}}
                {{--                                <li>--}}
                {{--                                    <a href="#" aria-label="Previous">--}}
                {{--                                        <span aria-hidden="true">&laquo;</span>--}}
                {{--                                    </a>--}}
                {{--                                </li>--}}
                {{--                                <li><a href="#">1</a></li>--}}
                {{--                                <li><a href="#">2</a></li>--}}
                {{--                                <li><a href="#">3</a></li>--}}
                {{--                                <li><a href="#">4</a></li>--}}
                {{--                                <li><a href="#">5</a></li>--}}
                {{--                                <li>--}}
                {{--                                    <a href="#" aria-label="Next">--}}
                {{--                                        <span aria-hidden="true">&raquo;</span>--}}
                {{--                                    </a>--}}
                {{--                                </li>--}}
                {{--                            </ul>--}}
                {{--                        </nav>--}}
            </div>
            <div id="sidebar" class="col-md-4 col-sm-4 col-xs-12">
                <div class="widget">
                    <div class="searchform">
                        <form>
                            <input type="text" class="form-control" placeholder="Hızlı Arama">
                        </form>
                    </div>
                </div>
                {{--                        <div class="widget">--}}
                {{--                            <div class="widget-title">--}}
                {{--                                <h4>En çok görüntülenenler</h4>--}}
                {{--                                <hr>--}}
                {{--                            </div>--}}
                {{--                            <ul class="popular-courses">--}}
                {{--                                <li>--}}
                {{--                                    <a href="#" title=""><img class="img-thumbnail"--}}
                {{--                                                              src="upload/xservice_01.png.pagespeed.ic.2iuJZT3CaV.png"--}}
                {{--                                                              alt=""></a>--}}
                {{--                                </li>--}}
                {{--                                <li>--}}
                {{--                                    <a href="#" title=""><img class="img-thumbnail"--}}
                {{--                                                              src="upload/xservice_02.png.pagespeed.ic.c6RThoxSWC.png"--}}
                {{--                                                              alt=""></a>--}}
                {{--                                </li>--}}
                {{--                                <li>--}}
                {{--                                    <a href="#" title=""><img class="img-thumbnail"--}}
                {{--                                                              src="upload/xservice_03.png.pagespeed.ic.E_Ew4wn4ZP.png"--}}
                {{--                                                              alt=""></a>--}}
                {{--                                </li>--}}
                {{--                                <li>--}}
                {{--                                    <a href="#" title=""><img class="img-thumbnail"--}}
                {{--                                                              src="upload/xservice_04.png.pagespeed.ic.NGi9jRXTXk.png"--}}
                {{--                                                              alt=""></a>--}}
                {{--                                </li>--}}
                {{--                                <li>--}}
                {{--                                    <a href="#" title=""><img class="img-thumbnail"--}}
                {{--                                                              src="upload/xservice_05.png.pagespeed.ic.2iuJZT3CaV.png"--}}
                {{--                                                              alt=""></a>--}}
                {{--                                </li>--}}
                {{--                                <li>--}}
                {{--                                    <a href="#" title=""><img class="img-thumbnail"--}}
                {{--                                                              src="upload/xservice_06.png.pagespeed.ic.o2Uniwq-y5.png"--}}
                {{--                                                              alt=""></a>--}}
                {{--                                </li>--}}
                {{--                                <li>--}}
                {{--                                    <a href="#" title=""><img class="img-thumbnail"--}}
                {{--                                                              src="upload/xservice_07.png.pagespeed.ic.H-fRTeeP8u.png"--}}
                {{--                                                              alt=""></a>--}}
                {{--                                </li>--}}
                {{--                                <li>--}}
                {{--                                    <a href="#" title=""><img class="img-thumbnail"--}}
                {{--                                                              src="upload/xservice_08.png.pagespeed.ic.76ek5JLaEY.png"--}}
                {{--                                                              alt=""></a>--}}
                {{--                                </li>--}}
                {{--                                <li>--}}
                {{--                                    <a href="#" title=""><img class="img-thumbnail"--}}
                {{--                                                              src="upload/xservice_09.png.pagespeed.ic.FJcG938KC-.png"--}}
                {{--                                                              alt=""></a>--}}
                {{--                                </li>--}}
                {{--                            </ul>--}}
                {{--                        </div>--}}
            </div>
        </div>
    </div>
</section>
</x-master-layout>
