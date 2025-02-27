<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">{{ setting()->name }}</h2>
                    <p>{{ setting()->desc }}</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                        <li class="ftco-animate"><a target="blank" href="{{ setting()->twitter }}"><span
                                    class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a target="blank" href="{{ setting()->facebook }}"><span
                                    class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a target="blank" href="{{ setting()->instagram }}"><span
                                    class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">{{ setting()->Open }}</h2>
                    <ul class="list-unstyled open-hours">
                        <li class="d-flex">{!! setting()->openhours !!}</li>

                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">{{ setting()->insname }}</h2>

                    <div class="thumb d-sm-flex">
                        @foreach (instagram() as $item)
                            <a href="#" class="thumb-menu img"
                                style="background-image: url({{ asset('storage/instagram/' . $item->image) }})">
                            </a>
                        @endforeach
                    </div>

                    <div class="thumb d-flex">
                        @foreach (insta() as $instaitem)
                            <a href="#" class="thumb-menu img"
                                style="background-image: url({{ asset('storage/instagram/' . $instaitem->image) }})">
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">{{ setting()->newsletter }}</h2>
                    <p>{{ setting()->detail }}</p>
                    <form action="#" class="subscribe-form">
                        <div class="form-group">
                            <input type="text" class="form-control mb-2 text-center"
                                placeholder="Enter email address">
                            <input type="submit" value="Subscribe" class="form-control submit px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="icon-heart"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</footer>
