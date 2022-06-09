<main>
    <div class="jumbotron">

    </div>
    <div class="darkbg">
        <div class="series">
            CURRENT SERIES
        </div>
        <div class="container">
            <div class="cardcont">
                @foreach ($comics as $comic)
                    <div class="box">
                        <img src="{{$comic['thumb']}}" alt="">
                        <div class="description">{{$comic['title']}}</div>
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
</main>