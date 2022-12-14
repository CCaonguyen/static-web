

 @section('content')
     <!-- Stylesheet -->
     <link rel="stylesheet" href="{{ asset('css/albums.css') }}">

    @foreach($audio as $audio)
                <!-- Single Album Area -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="single-album-area">
                        <div class="album-thumb">
                           
                                <img width="400" height="400" src="{{ $audio->Image }}">
                            <!-- Album Price -->
        
                            <!-- Play Icon -->
                            <div class="play-icon">
                                <a href="#" class="video--play--btn"><span class="icon-play-button"></span></a>
                            </div>
                        </div>
                        <div class="album-info">
                            <a href="#">
                                <h5>{{ $audio->name_product }}</h5>
                            </a>

                            <audio preload="auto" controls>
                                <source src="{{ $audio->link }}">
                            </audio>
                        </div>
                    </div>
                </div>
            @endforeach

    @if (session('sucmessage'))
    <span >
       <strong>{{ session('sucmessage') }}</strong></span>
    @endif