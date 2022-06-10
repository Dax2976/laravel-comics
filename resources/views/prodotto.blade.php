@extends('layout.layout')
@section('content')
    <div class="jumbotron">

    </div>
    <div class="blu">
      <div class="comic-thumb">
          <div class="blu-comic-thumb">COMICS BOOK</div>
          <img src="{{$comics['thumb']}}" alt="">
          <div class="blu-comic-thumb">VIEW GALLERY</div>
      </div>
    </div>
    <div class="one-comic">
        <div class="comic-description">
          <h2 class="uppercase">
              {{$comics['title']}}
          </h2>
          <div class="green">
              <span class="" style="color: white">U.S Price: {{$comics['price']}}</span>
              <div class="d-flex">
                  <div class="disponibile">
                      AVAIABLE
                  </div>
                  <div class="">
                      <h4>Check Availability</h4>
                  </div>
              </div>
          </div>
          <p class="comics-txt">{{$comics['description']}}</p>
        </div>
        <div class="">
          <h5 class="uppercase">advertimente</h5>
            <div class="imgadv">
                <img src="{{('/images/adv.jpg')}}" alt="">
            </div>
        </div>
    </div>
    <div class="bottom-cont">
        <div class="w-60">
            <div class="w-50">
                <h3 class="padding-bottom border-bottom">
                    Talent
                </h3>
                <div class="lists border-bottom">
                    <div style="white-space:nowrap;">
                        Art by:
                    </div>
                    <ul class="list-artist">
                        @foreach ( $comics['artists'] as $artist )  
                        <li>
                            <a href="">{{$artist}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="lists">
                    <div style="white-space:nowrap;">
                        Written by:
                    </div>
                    <ul class="list-artist">
                        @foreach ( $comics['writers'] as $artist )  
                        <li>
                            <a href="">{{$artist}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="w-50">
                <h3 class="padding-bottom border-bottom">
                    Specs
                </h3>
                <div>
                    <div class="border-bottom">
                        <span>Series:</span>
                        <span>{{$comics['series']}}</span>
                    </div>
                    <div class="border-bottom">
                        <span>US Price:</span>
                        <span>{{$comics['price']}}</span>
                    </div>
                    <div class="border-bottom">
                        <span>On Sale Date:</span>
                        <span>{{$comics['sale_date']}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <h5>DIGITAL COMICS</h5>
        <img src="{{('/images/cta-icons.png')}}" alt="">
    </div>
@endsection