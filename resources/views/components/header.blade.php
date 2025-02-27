<div class="py-1 bg-black top">
    <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
            <div class="col-lg-12 d-block">
                <div class="row d-flex">
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span
                                class="icon-phone2"></span></div>
                        <span class="text">+{{ setting()->contact }}</span>
                    </div>
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span
                                class="icon-paper-plane"></span></div>
                        <span class="text">{{ setting()->email }}</span>
                    </div>
                    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
                        <p class="mb-0 register-link"><span>Open hours:</span> <span>Monday - Sunday</span> <span>8:00AM
                                - 9:00PM</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">{{ setting()->name }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{ url('/about') }}" class="nav-link">About</a></li>
                <li class="nav-item"><a href="{{ url('/menu') }}" class="nav-link">Menu</a></li>
                <li class="nav-item"><a href="{{ url('/blog') }}" class="nav-link">Stories</a></li>
                <li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
                @php
                    $emailSession = Session::get('email');
                    $nameSession = Session::get('name');
                @endphp

                @if (isset($nameSession))
                    <li class="nav-item" >

                       <a href="" class="nav-link" > {{ $nameSession }}</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('logout') }}">logout</a><span class="arrow_carrot-down"></span>
                    </li>
                @else
                    <li class="nav-item">

                        <a class="nav-link" href="{{ route('customlogin') }}">Sign in</a> <span class="arrow_carrot-down"></span>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('customregister') }}">Register</a> <span class="arrow_carrot-down"></span>
                    </li>
                @endif

                <li class="nav-item cta">
                    <a href="{{ url('/reservation') }}" class="nav-link">Book a table</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
