@props(['background'=>'grey', 'vehicles'])
<section class="{{$background}} section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h4>ARAÇLAR</h4>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="row space-y-4">
        @foreach($vehicles as $key=>$vehicle)
            <!-- Analitik -->
                <div class="col-md-3">
                    <a href="/araclar/{{$vehicle->slug}}">
                            <img src="{!! $vehicle->getMedia()->count() > 0 ? $vehicle->getMedia()[0]->getUrl() : ''  !!}" alt="{{$vehicle->name}}"
                                 class="img-responsive img-thumbnail">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
