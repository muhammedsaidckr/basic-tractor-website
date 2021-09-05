<x-master-layout>
    <section class="grey page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-left">
                    <h1>{{$activity->title}}</h1>
                </div>
                <div class="col-md-6 text-right">
                    <div class="bread">
                        <ol class="breadcrumb">
                            <li><a href="/">Ana Sayfa</a></li>
                            <li class="active">{{$activity->title}}</li>
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
                                        <li class="active">{{$activity->title}}</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-wrapper">
                        <div class="blog-title">
                            <span class="category_title">Yabancı Dil Kursları</span>
                            <h2>{{$activity->title}}</h2>
                        </div>
                        <div class="blog-image">
                            <a href="#" title=""><img
                                    src="{{asset('images/' . $activity->photo_path)}}" alt=""
                                    class="img-responsive"></a>
                        </div>
                        <div class="blog-desc">
                            {!! $activity->description !!}
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
            </div>
        </div>
    </section>
</x-master-layout>
