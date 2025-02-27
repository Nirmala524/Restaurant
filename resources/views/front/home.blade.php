@extends('front.index')
@section('content')
    <section class="home-slider owl-carousel js-fullheight">
        @foreach ($data as $item)
            <div class="slider-item js-fullheight"
                style="background-image: url({{ asset('storage/slider/' . $item->image) }})">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text js-fullheight justify-content-center align-items-center"
                        data-scrollax-parent="true">

                        <div class="col-md-12 col-sm-12 text-center ftco-animate">
                            <span class="subheading">{{ $item->name }}</span>
                            <h1 class="mb-4">{{ $item->title }}</h1>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach



    </section>
    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="featured">

                        <div class="row">
                            @foreach ($limitdish as $dishitem)
                                <div class="col-md-3">
                                    <div class="featured-menus ftco-animate">
                                        <div class="menu-img img"
                                            style="background-image: url({{ asset('storage/dish/' . $dishitem->image) }})">
                                        </div>
                                        <div class="text text-center">
                                            <h3>{{ $dishitem->name }}</h3>
                                            <p>{{ $dishitem->title }}</p>
                                        </div>
                                    </div>

                                </div>
                            @endforeach

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section ftco-wrap-about">
        <div class="container">
            <div class="row">
                <div class="col-md-7 d-flex">
                    <div class="img img-1 mr-md-2"
                        style="background-image: url({{ asset('storage/about/' . $about->fimg) }})"></div>
                    <div class="img img-2 ml-md-2"
                        style="background-image: url({{ asset('storage/about/' . $about->simg) }})"></div>
                </div>
                <div class="col-md-5 wrap-about pt-5 pt-md-5 pb-md-3 ftco-animate">
                    <div class="heading-section mb-4 my-5 my-md-0">
                        <span class="subheading">{{ $about->name }}</span>
                        <h2 class="mb-4">{{ $about->title }}</h2>
                    </div>
                    <p>{{ $about->desc }}</p>
                    <pc class="time">
                        <span>{{ $about->date }}</span>
                        <span><a href="#">{{ $about->contact }}</a></span>
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
                            <div
                                class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18">
                                    <div class="text" id="{{ $happyitem->id }}">
                                        <strong class="number" data-number="{{ $happyitem->number }}">0</strong>
                                        <span>{{ $happyitem->name }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-3 text-center text-md-left">
                    <p>{{ $about->detail }}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-12 text-center heading-section ftco-animate">
                    <span class="subheading">{{ $ourservice->name }}</span>
                    <h2 class="mb-4">{{ $ourservice->title }}</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($service as $serviceitem)
                    <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
                        <div class="media block-6 services d-block">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class={{ $serviceitem->icon }}></span>
                            </div>
                            <div class="media-body p-2 mt-3">
                                <h3 class="heading">{{ $serviceitem->name }}</h3>
                                <p>{{ $serviceitem->desc }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row no-gutters justify-content-center mb-5 pb-2">
                <div class="col-md-12 text-center heading-section ftco-animate">
                    <span class="subheading">{{ $title->name }}</span>
                    <h2 class="mb-4">{{ $title->title }}</h2>
                </div>
            </div>
            <div class="row no-gutters d-flex align-items-stretch">
                @php
                    $count = 1;
                @endphp
                @foreach ($dish as $item)
                    <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                        <div class="menus d-sm-flex ftco-animate align-items-stretch fadeInUp ftco-animated">
                            <div class="menu-img img {{ $count == 1 || $count == 2 ? '' : 'order-md-last' }}"
                                style="background-image: url({{ asset('storage/dish/' . $item->image) }})">
                            </div>
                            <div class="text d-flex align-items-center">
                                <div>
                                    <div class="d-flex">
                                        <div class="one-half">
                                            <h3>{{ $item->name }}</h3>
                                        </div>
                                        <div class="one-forth">
                                            <span class="price">${{ $item->price }}</span>
                                        </div>
                                    </div>
                                    <p><span>{{ $item->title }}</p>
                                    <p class="btn btn-primary">Order now</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    @php
                        if ($count == 4) {
                            $count = 1;
                        } else {
                            $count++;
                        }
                    @endphp
                @endforeach


            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-12 text-center heading-section ftco-animate">
                    <span class="subheading">{{ $title->cname }}</span>
                    <h2 class="mb-4">{{ $title->ctitle }}</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($team as $teamitem)
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="staff">
                            <div class="img"
                                style="background-image: url({{ asset('storage/team/' . $teamitem->image) }})"></div>
                            <div class="text pt-4">
                                <h3>{{ $teamitem->name }}</h3>
                                <span class="position mb-2">{{ $teamitem->role }}</span>
                                <div class="faded">
                                    <ul class="ftco-social d-flex">
                                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a>
                                        </li>
                                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a>
                                        </li>
                                        <li class="ftco-animate"><a href="#"><span
                                                    class="icon-google-plus"></span></a>
                                        </li>
                                        <li class="ftco-animate"><a href="#"><span
                                                    class="icon-instagram"></span></a>
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

   

    <section class="ftco-section testimony-section img">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-12 text-center heading-section ftco-animate">
                    <span class="subheading">{{ $title->hname }}</span>
                    <h2 class="mb-4">{{ $title->htitle }}</h2>
                </div>
            </div>
            <div class="row ftco-animate justify-content-center">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        @foreach ($customer as $customeritem)
                            <div class="item">
                                <div class="testimony-wrap text-center pb-5">
                                    <div class="user-img mb-4"
                                        style="background-image: url({{ asset('storage/customer/' . $customeritem->image) }})">
                                        <span class="quote d-flex align-items-center justify-content-center">
                                            <i class="icon-quote-left"></i>
                                        </span>
                                    </div>
                                    <div class="text p-3">
                                        <p class="mb-4">{{ $customeritem->desc }}</p>
                                        <p class="name">{{ $customeritem->name }}</p>
                                        <span class="position">{{ $customeritem->user }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">{{ $title->bname }}</span>
                    <h2 class="mb-4">{{ $title->btitle }}</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($blog as $blogitem)
                    <div class="col-md-4 ftco-animate">
                        <div class="blog-entry">
                            <a href="{{url('singleblog/'.$blogitem->id)}}" class="block-20"
                                style="background-image: url({{ asset('storage/blog/' . $blogitem->image) }});">
                            </a>
                            <div class="text pt-3 pb-4 px-4">
                                <div class="meta">
                                    <div><a href="{{url('singleblog/'.$blogitem->id)}}">{{ $blogitem->date }}</a></div>
                                    <div><a href="{{url('singleblog/'.$blogitem->id)}}">{{ $blogitem->role == 1 ? 'Admin' : 'User' }}</a></div>
                                </div>
                                {{-- <h3 class="heading"><a href="#"> {{ substr($blogitem->title, 0, 20) }}</a></h3> --}}
                                <h3 class="heading"><a href="{{url('singleblog/'.$blogitem->id)}}"> {{ $blogitem->name }}</a></h3>
                                <p class="clearfix">
                                    <a href="{{url('singleblog/'.$blogitem->id)}}" class="float-left read">Read more</a>
                                    <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
@endsection
