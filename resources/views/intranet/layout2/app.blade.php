<!doctype html>
<html lang="es" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Fundación</title>
    @include('intranet.layout2.head')
    @yield('css_pagina')
</head>

<body class="  ">
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body">
            </div>
        </div>
    </div>
    <!-- loader END -->
    <!-- aside  -->
    @include('intranet.layout2.sidebar')

    <!-- aside END -->

    <main class="main-content">
        <div class="position-relative iq-banner">
            <!--Nav Start-->
            @include('intranet.layout2.navbar')
            <div class="iq-navbar-header" style="height: 215px;">
                <div class="container-fluid iq-container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="flex-wrap d-flex justify-content-between align-items-center">
                                <div>
                                    <h1>@yield('tituloPagina')</h1>
                                    <p>@yield('subTituloPagina')</p>
                                </div>
                                <div>
                                    @yield('botones_card')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="iq-header-img">
                    <img src="{{ asset('hope/assets/images/dashboard/top-header.png') }}" alt="header"
                        class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX">
                    <img src="{{ asset('hope/assets/images/dashboard/top-header1.png') }}" alt="header"
                        class="theme-color-purple-img img-fluid w-100 h-100 animated-scaleX">
                    <img src="{{ asset('hope/assets/images/dashboard/top-header2.png') }}" alt="header"
                        class="theme-color-blue-img img-fluid w-100 h-100 animated-scaleX">
                    <img src="{{ asset('hope/assets/images/dashboard/top-header3.png') }}" alt="header"
                        class="theme-color-green-img img-fluid w-100 h-100 animated-scaleX">
                    <img src="{{ asset('hope/assets/images/dashboard/top-header4.png') }}" alt="header"
                        class="theme-color-yellow-img img-fluid w-100 h-100 animated-scaleX">
                    <img src="{{ asset('hope/assets/images/dashboard/top-header5.png') }}" alt="header"
                        class="theme-color-pink-img img-fluid w-100 h-100 animated-scaleX">
                </div>
            </div>
            @yield('breadcrumb')
            <!-- Nav Header Component End -->
            <!--Nav End-->
        </div>
        <div class="conatiner-fluid content-inner mt-n5 py-0">
            <div class="row">
                <div class="col-12 card rounded" style="box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);min-height: 70vh; border-left: 1px solid black">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                @include('includes.mensaje')
                                @include('includes.error-form')
                            </div>
                        </div>
                        @yield('cuerpoPagina')
                    </div>
                </div>
            </div>
        <!--</div>
        <div class="btn-download">
            <a class="btn btn-success px-3 py-2"
                href="#">
                <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4"
                        d="M17.554 7.29614C20.005 7.29614 22 9.35594 22 11.8876V16.9199C22 19.4453 20.01 21.5 17.564 21.5L6.448 21.5C3.996 21.5 2 19.4412 2 16.9096V11.8773C2 9.35181 3.991 7.29614 6.438 7.29614H7.378L17.554 7.29614Z"
                        fill="currentColor"></path>
                    <path
                        d="M12.5464 16.0374L15.4554 13.0695C15.7554 12.7627 15.7554 12.2691 15.4534 11.9634C15.1514 11.6587 14.6644 11.6597 14.3644 11.9654L12.7714 13.5905L12.7714 3.2821C12.7714 2.85042 12.4264 2.5 12.0004 2.5C11.5754 2.5 11.2314 2.85042 11.2314 3.2821L11.2314 13.5905L9.63742 11.9654C9.33742 11.6597 8.85043 11.6587 8.54843 11.9634C8.39743 12.1168 8.32142 12.3168 8.32142 12.518C8.32142 12.717 8.39743 12.9171 8.54643 13.0695L11.4554 16.0374C11.6004 16.1847 11.7964 16.268 12.0004 16.268C12.2054 16.268 12.4014 16.1847 12.5464 16.0374Z"
                        fill="currentColor"></path>
                </svg>
            </a>
        </div>-->
        <!-- Footer Section Start -->
        @include('intranet.layout2.footer')
        <!-- Footer Section End -->
    </main>
    @include('intranet.layout2.parametrizacion')
    @yield('modales')
    @include('intranet.layout2.script')
    @yield('script_pagina')
</body>

</html>
