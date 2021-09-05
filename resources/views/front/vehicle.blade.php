<x-master-layout>
    @push('style')
        <style>
            * {
                box-sizing: border-box;
            }

            img {
                max-width: 100%;
                vertical-align: top;
            }

            .gallery {
                display: flex;
                margin: 10px auto;
                max-width: 600px;
                position: relative;
                padding-top: 66.6666666667%;
            }

            @media screen and (min-width: 600px) {
                .gallery {
                    padding-top: 400px;
                }
            }

            .gallery__img {
                position: absolute;
                top: 0;
                left: 0;
                opacity: 0;
                transition: opacity 0.3s ease-in-out;
            }

            .gallery__thumb {
                padding-top: 6px;
                margin: 6px;
                display: block;
            }

            .gallery__selector {
                position: absolute;
                opacity: 0;
                visibility: hidden;
            }

            .gallery__selector:checked + .gallery__img {
                opacity: 1;
            }

            .gallery__selector:checked ~ .gallery__thumb > img {
                box-shadow: 0 0 0 3px #0be2f6;
            }

        </style>
    @endpush
    <section class="grey page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-left">
                    <h1>{{$vehicle->name}}</h1>
                </div>
                <div class="col-md-6 text-right">
                    <div class="bread">
                        <ol class="breadcrumb">
                            <li><a href="/">Ana Sayfa</a></li>
                            <li><a href="/araclar">Araçlar</a></li>
                            <li class="active">{{$vehicle->name}}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <section class="gallery">
                    @foreach($vehicle->getMedia() as $key => $media)
                        <div class="gallery__item">
                            <input type="radio" id="img-{{$key +1}}" checked name="gallery" class="gallery__selector"/>
                            <img class="gallery__img" src="{{$media->getUrl()}}" alt=""/>
                            <label for="img-{{$key+1}}" class="gallery__thumb">
                                <img src="{{$media->getUrl('thumb')}}"
                                     alt=""/></label>
                        </div>
                    @endforeach

                </section>
            </div>
            <div class="col-md-6">
                <h3 style="color:#3c3c3a;font-weight: bold">{{number_format($vehicle->price, 2, '.', ',')}} ₺</h3>
                <div class="row course-list teacher-list">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="">
                            <div class="">
                                <strong>Model</strong>
                                <div class="magnifier">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-8">
                        <div class="">
                            <div class="shopmeta">
                                <span class="pull-left">{{$vehicle->model ?: '-'}} </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="">
                            <div class="">
                                <strong>Vites</strong>
                                <div class="magnifier">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-8">
                        <div class="">
                            <div class="shopmeta">
                                <span class="pull-left">{{$vehicle->gear ?: '-'}} </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="">
                            <div class="">
                                <strong>Motor Gücü (hp)</strong>
                                <div class="magnifier">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-8">
                        <div class="">
                            <div class="shopmeta">
                                <span class="pull-left">{{$vehicle->hp ?: '-'}} </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="">
                            <div class="">
                                <strong>Açıklama</strong>
                                <div class="magnifier">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-8">
                        <div class="">
                            <div class="shopmeta">
                                <span class="pull-left">{{$vehicle->description ?: '-'}} </span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</x-master-layout>
