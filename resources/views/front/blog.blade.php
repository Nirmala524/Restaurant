@extends('front.index')
@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('storage/multi/'.$multi->image)}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate text-center mb-4">
          <h1 class="mb-2 bread">{{$multi->sname}}</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>
      
      <section class="ftco-section bg-light">
          <div class="container">
              <div class="row">
                @foreach ($blog as $item)
                    
        <div class="col-md-4 ftco-animate">
          <div class="blog-entry">
            <a href="{{url('singleblog/'.$item->id)}}" class="block-20" style="background-image: url({{asset('storage/blog/'.$item->image)}});">
            </a>
            <div class="text pt-3 pb-4 px-4">
              <div class="meta">
                <div><a href="{{url('singleblog/'.$item->id)}}">{{$item->date}}</a></div>
                <div><a href="{{url('singleblog/'.$item->id)}}">{{$item->role==1?'Admin':'User'}}</a></div>
              </div>
              <h3 class="heading"><a href="#">{{$item->name}}</a></h3>
              <p class="clearfix">
                <a href="{{url('singleblog/'.$item->id)}}" class="float-left read">Read more</a>
                <a href="{{url('singleblog/'.$item->id)}}" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
              </p>
            </div>
          </div>
        </div>
        @endforeach

        
      </div>
      {{-- <div class="row no-gutters my-5">
        <div class="col text-center">
          <div class="block-27">
            <ul>
              <li><a href="#">&lt;</a></li>
              <li class="active"><span>1</span></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&gt;</a></li>
            </ul>
          </div>
        </div>
      </div> --}}
          </div>
      </section>
    
@endsection