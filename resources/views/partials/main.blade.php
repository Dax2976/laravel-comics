    <div class="jumbotron">

    </div>
    <div class="darkbg">
        <div class="series">
            CURRENT SERIES
        </div>
        <div class="container">
            <div class="cardcont">
                @foreach ($comics as $key =>$comic)
                    <div class="box">
                        <a href="{{route('prodotto',['id' => $key])}}">
                            <img src="{{$comic['thumb']}}" alt="">
                            <div class="description">{{$comic['title']}}</div>
                        </a>
                    </div> 
                @endforeach
            </div>
        </div>
        <div class="load">
            <div class="loadmore">
                LOAD MORE
            </div>
        </div>
    </div>
    @include('partials.card')