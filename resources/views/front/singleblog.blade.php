@extends('front.index')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('storage/multi/'.$multi->image)}})"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center mb-4">
                    <h1 class="mb-2 bread">Blog</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a
                                href="blog.html">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog Single<i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <input type="hidden" id="" name="id" value="">

                <div class="col-lg-8 ftco-animate">
                    <h2 class="mb-3">{{ $blog->name }}</h2>
                    <p>
                        <img src="{{ asset('storage/blog/' . $blog->image) }}" alt="" class="img-fluid">
                    </p>
                    <h2 class="mb-3 mt-5">{{ $blog->title }}</h2>
                    <p>{!! $blog->detail !!}</p>
                   

               
                </div><!-- END COL -->
                <div class="col-lg-4 sidebar ftco-animate">
                    {{-- <div class="sidebar-box">
                      <form action="#" class="search-form">
                        <div class="form-group">
                          <span class="icon icon-search"></span>
                          <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                        </div>
                      </form>
                    </div> --}}
                    {{-- <div class="sidebar-box ftco-animate">
                        <h3>Category</h3>
                      <ul class="categories">
                        <li><a href="#">Breakfast <span>(6)</span></a></li>
                        <li><a href="#">Lunch <span>(8)</span></a></li>
                        <li><a href="#">Dinner <span>(2)</span></a></li>
                        <li><a href="#">Desserts <span>(2)</span></a></li>
                        <li><a href="#">Drinks <span>(2)</span></a></li>
                        <li><a href="#">Wine <span>(2)</span></a></li>
                      </ul>
                    </div> --}}
        
                    <div class="sidebar-box ftco-animate">
                      <h3>Popular Articles</h3>
                      @foreach ($recentblog as $item)
                          
                      <div class="block-21 mb-4 d-flex">
                        <a href="{{url('singleblog/'.$item->id)}}" class="blog-img mr-4" style="background-image: url({{asset('storage/blog/'.$item->image)}})"></a>
                        <div class="text">
                          <h3 class="heading"><a href="{{url('singleblog/'.$item->id)}}">{{ substr($item->title, 0, 59) }}</a></h3>
                          <div class="meta">
                            <div><a href="{{url('singleblog/'.$item->id)}}"><span class="icon-calendar"></span>{{$item->date}}</a></div>
                            <div><a href="{{url('singleblog/'.$item->id)}}"><span class="icon-person"></span>{{$item->role==1?'Admin':'User'}}</a></div>
                            <div><a href="{{url('singleblog/'.$item->id)}}"><span class="icon-chat"></span> 19</a></div>
                          </div>
                        </div>
                      </div>
                      @endforeach

                      {{-- <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                        <div class="text">
                          <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                          <div class="meta">
                            <div><a href="#"><span class="icon-calendar"></span> June 25, 2019</a></div>
                            <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
                            <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                          </div>
                        </div>
                      </div>
                      <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                        <div class="text">
                          <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                          <div class="meta">
                            <div><a href="#"><span class="icon-calendar"></span> June 25, 2019</a></div>
                            <div><a href="#"><span class="icon-person"></span> Dave Lewis</a></div>
                            <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                          </div>
                        </div>
                      </div> --}}
                    </div>
        
                    {{-- <div class="sidebar-box ftco-animate">
                      <h3>Tag Cloud</h3>
                      <ul class="tagcloud m-0 p-0">
                        <a href="#" class="tag-cloud-link">Dish</a>
                        <a href="#" class="tag-cloud-link">Food</a>
                        <a href="#" class="tag-cloud-link">Lunch</a>
                        <a href="#" class="tag-cloud-link">Menu</a>
                        <a href="#" class="tag-cloud-link">Dessert</a>
                        <a href="#" class="tag-cloud-link">Drinks</a>
                        <a href="#" class="tag-cloud-link">Sweets</a>
                      </ul>
                    </div> --}}
        
                    {{-- <div class="sidebar-box ftco-animate">
                        <h3>Archives</h3>
                      <ul class="categories">
                          <li><a href="#">January 2019 <span>(20)</span></a></li>
                          <li><a href="#">December 2018 <span>(30)</span></a></li>
                          <li><a href="#">Novemmber 2018 <span>(20)</span></a></li>
                        <li><a href="#">September 2018 <span>(6)</span></a></li>
                        <li><a href="#">August 2018 <span>(8)</span></a></li>
                      </ul>
                    </div> --}}
        
        
                    <div class="sidebar-box ftco-animate">
                      <h3>Paragraph</h3>
                      <p>{{setting()->desc}}</p>
                    </div>
                  </div><!-- END COL -->
            </div>
        </div>
    </section>
@endsection
