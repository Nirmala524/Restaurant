@extends('front.index')
@section('content')
  
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('storage/multi/'.$multi->image)}}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate text-center mb-4">
          <h1 class="mb-2 bread">{{$multi->name}}</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>
<section class="ftco-section ftco-wrap-about">
    <div class="container">
        <div class="row">
            <div class="col-md-7 d-flex">
                <div class="img img-1 mr-md-2" style="background-image: url({{asset('storage/about/'.$about->fimg)}})"></div>
                <div class="img img-2 ml-md-2" style="background-image: url({{ asset('storage/about/' . $about->simg) }})"></div>
            </div>
            <div class="col-md-5 wrap-about pt-5 pt-md-5 pb-md-3 ftco-animate">
                <div class="heading-section mb-4 my-5 my-md-0">
                    <span class="subheading">{{$about->name}}</span>
                    <h2 class="mb-4">{{$about->title}}</h2>
                </div>
                <p>{{$about->desc}}</p>
                <pc class="time">
                    <span>{{$about->date}}</span>
                    <span><a href="#">{{$about->contact}}</a></span>
                    </p>
            </div>
        </div>             
    </div>
</section>

<section class="ftco-section ftco-counter img ftco-no-pt" id="section-counter">
    <div class="container">
        <div class="row d-md-flex">
            <div class="col-md-9">
                <div class="row d-md-flex align-items-center">
                    @foreach ($happy as $happyitem)
                        
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="text" id="{{$happyitem->id}}">
                                <strong class="number" data-number="{{$happyitem->number}}">0</strong>
                                <span>{{$happyitem->name}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-3 text-center text-md-left">
                <p>{{$about->detail}}</p>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-12 text-center heading-section ftco-animate">
                <span class="subheading">{{$ourservice->name}}</span>
                <h2 class="mb-4">{{$ourservice->title}}</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($service as $serviceitem)
                
            <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
                <div class="media block-6 services d-block">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class={{$serviceitem->icon}}></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">{{$serviceitem->name}}</h3>
                        <p>{{$serviceitem->desc}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-12 text-center heading-section ftco-animate">
                <span class="subheading">{{$title->cname}}</span>
                <h2 class="mb-4">{{$title->ctitle}}</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($team as $teamitem)
                
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="staff">
                    <div class="img" style="background-image: url({{asset('storage/team/'.$teamitem->image)}})"></div>
                    <div class="text pt-4">
                        <h3>{{$teamitem->name}}</h3>
                        <span class="position mb-2">{{$teamitem->role}}</span>
                        <div class="faded">
                            <ul class="ftco-social d-flex">
                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a>
                                </li>
                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a>
                                </li>
                                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a>
                                </li>
                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

           
        </div>
    </div>
</section>
{{-- <section class="ftco-section img" style="background-image: url({{asset('front/images/bg_3.jpg')}})" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-7 ftco-animate makereservation p-4 px-md-5 pb-md-5">
                <div class="heading-section ftco-animate mb-5 text-center">
                    <span class="subheading">{{$title->fname}}</span>
                    <h2 class="mb-4">{{$title->ftitle}}</h2>
                </div>
                <form action="#">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control" placeholder="Your Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text" class="form-control" id="book_date" placeholder="Date">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Time</label>
                                <input type="text" class="form-control" id="book_time" placeholder="Time">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Person</label>
                                <div class="select-wrap one-third">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="" id="" class="form-control">
                                        <option value="">Person</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4+</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="form-group text-center">
                                <input type="submit" value="Make a Reservation" class="btn btn-primary py-3 px-5">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section> --}}
<section class="ftco-section testimony-section img">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-12 text-center heading-section ftco-animate">
                <span class="subheading">{{$title->hname}}</span>
                <h2 class="mb-4">{{$title->htitle}}</h2>
            </div>
        </div>
        <div class="row ftco-animate justify-content-center">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    @foreach ($customer as $customeritem)
                        
                    <div class="item">
                        <div class="testimony-wrap text-center pb-5">
                            <div class="user-img mb-4" style="background-image: url({{asset('storage/customer/'.$customeritem->image)}})">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text p-3">
                                <p class="mb-4">{{$customeritem->desc}}</p>
                                <p class="name">{{$customeritem->name}}</p>
                                <span class="position">{{$customeritem->user}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

