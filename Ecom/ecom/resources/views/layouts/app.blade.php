<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> -->
    <link href="https://fonts.googleapis.com/css2?family=Battambang:wght@400;700&family=Bayon&family=Roboto+Slab&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/design.css') }}" rel="stylesheet">
       @notifyCss
     @include('notify::messages')
        @notifyJs  
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-danger bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        @if(Auth::check())
                      <li class="nav-item">  <a class="nav-link" href="{{route('order')}}">Order</a></li>
                      @endif



                        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   <span class="caret"> Menu </span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    
                                    @foreach(App\Category::all() as $category)
                                    <a class="dropdown-item" href="{{route('product.list',[$category->slug])}}">{{$category->name}}
                                    </a>
                                    @endforeach
                                    
                                </div>
                            </li>
                       
                        <!-- Authentication Links -->
                        <a href="{{route('cart.show')}}" class="nav-link">
                            <span class="fas fa-shopping-cart">
                             ({{session()->has('cart')?session()->get('cart')->totalQty:'0'}})
                            </span>
                        </a>
                       
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else



                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
<!-- Site footer -->
<footer class="site-footer">
    <div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6">
        <h6>About</h6>
        <p class="text-justify">
            Personal Information means information identifiable to any person, including, but not limited to, information that relates to a person's name, health, finances, education, business, use or receipt of governmental services or other activities, addresses, telephone numbers, social security numbers, driver license numbers  
        </p>
        </div>

        <div class="col-xs-6 col-md-3">
        <h6>Categories</h6>
        <ul class="footer-links">
            <li><a href="http://www.tunchanty.com/category/c-language/">C</a></li>
            <li><a href="http://www.tunchanty.com/category/front-end-development/">UI Design</a></li>
            <li><a href="http://www.tunchanty.com/category/back-end-development/">PHP</a></li>
            <li><a href="http://www.tunchanty.com/category/java-programming-language/">Java</a></li>
            <li><a href="http://www.tunchanty.com/category/android/">Android</a></li>
            <li><a href="http://www.tunchanty.com/category/templates/">Templates</a></li>
        </ul>
        </div>

        <div class="col-xs-6 col-md-3">
        <h6>Quick Links</h6>
        <ul class="footer-links">
            <li><a href="http://www.tunchanty.com/about/">About Us</a></li>
            <li><a href="http://www.tunchanty.com/contact/">Contact Us</a></li>
            <li><a href="http://www.tunchanty.com/contribute-at-scanfcode/">Contribute</a></li>
            <li><a href="http://www.tunchanty.com/privacy-policy/">Privacy Policy</a></li>
            <li><a href="http://www.tunchanty.com/sitemap/">Sitemap</a></li>
        </ul>
        </div>
    </div>
    <hr>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
        <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by 
        <a href="#">TUN Chanty</a>.
        </p>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
        <ul class="social-icons">
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
        </ul>
        </div>
    </div>
    </div>
</footer>
<!-- End Site footer -->
</body>
</html>
