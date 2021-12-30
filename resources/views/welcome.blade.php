<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sokofiti</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/styles/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/styles/jasny-bootstrap.min.css')}}" type="text/css">
    <!-- Material CSS -->
    <link rel="stylesheet" href="{{asset('assets/styles/material-kit.css')}}" type="text/css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/styles/font-awesome.min.css')}}" type="text/css">
    <!-- Main Styles -->
    <link rel="stylesheet" href="{{asset('assets/styles/main.css')}}" />
    <!-- Responsive CSS Styles -->
    <link rel="stylesheet" href="{{asset('assets/styles/responsive.css')}}" />
    <!-- Animate CSS-->
    <link rel="stylesheet" href="{{asset('assets/styles/extras/animate.css')}}" type="text/css">
    <!-- Bootstrap Select -->
    <link rel="stylesheet" href="{{asset('assets/styles/bootstrap-select.min.css')}}">
    <!-- Bootrap icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Tailwind css -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>

<body>
    <main>
        <header>
            <div class="navbar">
                <div class="logo">
                    <h1><a href="/">sokofiti</a></h1>
                    <span>We connect you to whatever you want from jobs to apartments vehicles and many more come and explore more</span>
                </div>

                <div class="links">
                    <nav>
                        <ul class="navbar-nav ml-auto">
                            <li><a href="/#about">About us</a></li>
                            <!-- Authentication Links -->
                            @guest
                            @if (Route::has('login'))
                            <li><a href="{{route('login')}}">{{ __('Login') }}</a></li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li> -->
                            @endif

                            @if (Route::has('register'))
                            <li><a href="{{route('register')}}">{{ __('Register') }}</a></li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li> -->
                            @endif
                            @else
                            <li class="nav-item dropdown  nav-item">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-center nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                    <div class="dropdown-item">
                                        @if(Auth::user()->role_as == 0)
                                        <a href="{{route('account.index')}}"><i class="bi bi-person-fill mr-2"></i>Account</a>
                                        @elseif(Auth::user()->role_as == 1)
                                        <a href="{{route('admin_category.index')}}"><i class="bi bi-person-fill mr-2"></i>Account</a>
                                        @endif
                                    </div>
                                    <div class="dropdown-item">
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa-solid fa-power-off mr-2"></i> {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>

                                </div>

                            </li>
                            <li><a class="bg-yellow-700 px-4 text-white rounded-lg hover:bg-yellow-600 hover:text-white" href="{{route('ad.create')}}">Post-ad</a></li>
                            @endguest
                        </ul>
                        <!-- <ul>
                            <li><a href="{{route('login')}}">login</a></li>
                            <li><a href="{{route('register')}}">signup</a></li>
                        </ul> -->
                    </nav>
                </div>
            </div>

            <div class="underline"></div>
            <div class="categories-links">
                <ul>
                    @yield('navigation')
                </ul>
            </div>
        </header>

        @yield('content')

        <section class="footer">
            <div class="section-1 pt-10">
                <div class="about" id="about">
                    <h2 class="pb-4">About us</h2>
                    <div class="about-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et dui sed turpis sodales
                            viverra. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                            curae;
                            Suspendisse non luctus enim, eu vulputate mi. Cras a dolor quis ex porta porttitor.
                            Suspendisse eget velit quam. Phasellus vel leo id lacus luctus dictum eget in est. Sed
                            mollis turpis id dolor pellentesque,
                            vel semper felis ultrices.
                        </p>
                    </div>
                </div>
                <div class="links">
                    <h2 class="text-3xl font-semibold">Links</h2>
                    <div class="links-list pt-4">
                        <li><a href="/">home</a></li>
                        <li><a href="#about">about</a></li>
                    </div>
                </div>
                <div class=categories-links>
                    <h2 class="text-3xl font-semibold">Categories</h2>
                    <div class="links pt-4">
                        @yield('navigation')
                    </div>
                </div>
                <div class="Newsletter">
                    <h3 class="text-3xl font-semibold">Newsletter Subscription</h3>
                    <div class="newsletter-content">
                        <input type="text" placeholder="Your Email" />
                        <button class="subscribe-btn primary bg-blue-900 w-52">subscribe</button>
                    </div>
                </div>
            </div>
            <div class="section-2">
                <div class=copyright>
                    <p>All rights reserved.&copy;2021 Sokofiti</p>
                </div>
                <div class="social-media-links">
                    <li><a href="https://www.facebook.com"><i class="bi bi-facebook"></i></a></li>
                    <li><a href="https://www.twitter.com"><i class="bi bi-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com"><i class="bi bi-instagram"></i></a></li>
                    <li><a href="https://www.linkedin.com"><i class="bi bi-linkedin"></i></a></li>
                </div>
            </div>
        </section>
    </main>

    <script type="text/javascript" src="{{asset('assets/js/slide-images.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/pass-show-hide.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery-min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.parallax.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jasny-bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap-select.min.js')}}"></script>
    @livewireScripts
</body>

</html>