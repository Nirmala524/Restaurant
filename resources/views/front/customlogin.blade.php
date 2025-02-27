@extends('front.index')
@section('content')
    <section class="ftco-section img">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-7 ftco-animate makereservation p-4 px-md-5 pb-md-5 ">
                    <div class="heading-section ftco-animate mb-5 text-center class__form">

                        <span class="subheading">Access Account</span>
                        <h2 class="mb-4">Login</h2>
                    </div>
                    <form action="{{url('loginstore')}}" method="POST">
                        @csrf
                        <div class="row">
                            
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                            </div>

                            <div class="col-md-12 mt-3">
                                <div class="form-group text-center">
                                    <button type="submit" value="" class="btn btn-primary py-3 px-5">
                                        Login
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
