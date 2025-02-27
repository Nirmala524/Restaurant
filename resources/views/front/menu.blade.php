@extends('front.index')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('storage/multi/' . $multi->image) }});"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center mb-4">
                    <h1 class="mb-2 bread">{{ $multi->mname }}</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Menu <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="ftco-search">
                <div class="row">
                    <div class="col-md-12 nav-link-wrap">
                        <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            @foreach ($menus as $menu)
                                <a class="nav-link ftco-animate {{ $loop->iteration == 1 ? 'active' : '' }}"
                                    id="{{ $menu->class_id }}-tab" data-toggle="pill" href="#{{ $menu->class_id }}"
                                    role="tab" aria-controls="{{ $menu->class_id }}"
                                    aria-selected="true">{{ $menu->menu }}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-12 tab-wrap">
                        <div class="tab-content" id="v-pills-tabContent">
                            @foreach ($menus as $menu)
                                <div class="tab-pane fade {{ $loop->iteration == 1 ? 'show active' : '' }}"
                                    id="{{ $menu->class_id }}" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
                                    <div class="row no-gutters d-flex align-items-stretch">
                                        @php
                                            $count = 1;
                                        @endphp
                                        @foreach ($dishes as $dish)
                                            @if ($dish->class === $menu->class_id)
                                                <div class="col-md-12 col-lg-6 d-flex align-self-stretch">
                                                    <div class="menus d-sm-flex ftco-animate align-items-stretch">
                                                        <div class="menu-img img {{ $count == 3 || $count == 4 ? 'order-md-last' : '' }}"
                                                            style="background-image: url({{ asset('storage/dish/' . $dish->image) }});">
                                                        </div>
                                                        <div class="text d-flex align-items-center">
                                                            <div>
                                                                <div class="d-flex">
                                                                    <div class="one-half">
                                                                        <h3>{{ $dish->name }}</h3>
                                                                    </div>
                                                                    <div class="one-forth">
                                                                        <span class="price">
                                                                            {{ $dish->price }}</span>
                                                                    </div>
                                                                </div>
                                                                <p>{{$dish->title}}
                                                                </p>
                                                                <p><a href="#" class="btn btn-primary">Order now</a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @php
                                                    if ($count != 4) {
                                                        $count++;
                                                    } else {
                                                        $count = 1;
                                                    }

                                                @endphp
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
