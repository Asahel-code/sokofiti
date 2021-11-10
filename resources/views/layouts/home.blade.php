@extends('welcome')

@section('navigation')

@endsection

@section('content')
<div class="image-section">

    <div class="img-slider">
        <div class="slide active">
            <img src="{{asset('assets/images/apartment-2.jpeg')}}" alt>
        </div>
        <div class="slide">
            <img src="{{asset('assets/images/apartment-3.jpg')}}" alt>
        </div>
        <div class="slide">
            <img src="{{asset('assets/images/img-1.jpg')}}" alt>
        </div>
        <div class="slide">
            <img src="{{asset('assets/images/vehicle-3.jpg')}}" alt>
        </div>
        <div class="navigation">
            <div class="btn active"></div>
            <div class="btn"></div>
            <div class="btn"></div>
            <div class="btn"></div>
        </div>
    </div>

</div>
<div class="search-section">
    <div class="search-title">
        <h2>welcome to sokofiti</h2>
    </div>
    <div class="search-txt">
        <p>search anything you want we have it all for you from apartment, vehicles, Electronics and many more
        </p>
    </div>
    <div class="search-bar">
        <div class="search-col">
            <select name="cat" class="w-96">
                <option value="Categories">Categories</option>
                <option value="apartment">Apartments</option>
                <option value="phone and laptops">Phones & amp; laptops</option>
                <option value="services">Services</option>
            </select>
        </div>
        <div class="search-col">
            <select name="location" class="w-96">
                <option value="0">location</option>
                <option value="Nairobi">Nairobi</option>
                <option value="Kitale">Kitale</option>
                <option value="Malindi">Malindi</option>
            </select>
        </div>
        <div class="search-col">
            <input class="w-96" type="text" name="keyword" placeholder="Enter keywords">
            <i class="bi bi-search"></i>
        </div>
        <div class="search-col">
            <button class="bg-blue-900 text-white w-52"><strong>Search</strong></button>
        </div>

    </div>
</div>

<section class="categories-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-8 ml-8">
                <h3 class="section-title text-4xl text-gray-600 font-light">8 Categories</h3>
            </div>
            <a href="{{route('category')}}">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="category-box wow fadeInUpQuick animated" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
                        <div class="category-header">
                            <h4>Apartments</h4>
                        </div>
                        <div class="category-image">
                            <img src="{{asset('assets/images/apartment-3.jpg')}}" alt="" />
                        </div>
                        <div class="category-content">
                            <ul class="left">
                                <li>Kilimani</li>
                                <li>Hazina</li>
                                <li>Uprising</li>
                            </ul>
                            <ul class="right">
                                <li>Malindi</li>
                                <li>Goldies</li>
                                <li>Uwezo</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </a>

            <a href="{{route('category')}}">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="category-box wow fadeInUpQuick animated" data-wow-delay="0.6s" style="visibility: visible;-webkit-animation-delay: 0.6s; -moz-animation-delay: 0.6s; animation-delay: 0.6s;">
                        <div class="category-header">
                            <h4>Electronics</h4>
                        </div>
                        <div class="category-image">
                            <img src="{{asset('assets/images/Electronics-1.jpeg')}}" alt="" />
                        </div>
                        <div class="category-content">
                            <ul class="left">
                                <li>Kilimani</li>
                                <li>Hazina</li>
                                <li>Uprising</li>
                            </ul>
                            <ul class="right">
                                <li>Malindi</li>
                                <li>Goldies</li>
                                <li>Uwezo</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </a>

            <a href="{{route('category')}}">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="category-box wow fadeInUpQuick animated" data-wow-delay="0.9s" style="visibility: visible;-webkit-animation-delay: 0.9; -moz-animation-delay: 0.9s; animation-delay: 0.9s;">
                        <div class="category-header">
                            <h4>Vehicles</h4>
                        </div>
                        <div class="category-image">
                            <img src="{{asset('assets/images/vehicle-3.jpg')}}" alt="" />
                        </div>
                        <div class="category-content">
                            <ul class="left">
                                <li>Kilimani</li>
                                <li>Hazina</li>
                                <li>Uprising</li>
                            </ul>
                            <ul class="right">
                                <li>Malindi</li>
                                <li>Goldies</li>
                                <li>Uwezo</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{route('category')}}">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="category-box wow fadeInUpQuick animated" data-wow-delay="1.2s" style="visibility: visible;-webkit-animation-delay: 0.3s; -moz-animation-delay: 1.2s; animation-delay: 1.2s;">
                        <div class="category-header">
                            <h4>Phones &amp; laptops</h4>
                        </div>
                        <div class="category-image">
                            <img src="{{asset('assets/images/phone.jpg')}}" alt="" />
                        </div>
                        <div class="category-content">
                            <ul class="left">
                                <li>Kilimani</li>
                                <li>Hazina</li>
                                <li>Uprising</li>
                            </ul>
                            <ul class="right">
                                <li>Malindi</li>
                                <li>Goldies</li>
                                <li>Uwezo</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{route('category')}}">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="category-box wow fadeInUpQuick animated" data-wow-delay="1.5s" style="visibility: visible;-webkit-animation-delay: 1.5s; -moz-animation-delay: 1.5s; animation-delay: 1.5s;">
                        <div class="category-header">
                            <h4>Services</h4>
                        </div>
                        <div class="category-image">
                            <img src="{{asset('assets/images/service-1.jpg')}}" alt="" />
                        </div>
                        <div class="category-content">
                            <ul class="left">
                                <li>Kilimani</li>
                                <li>Hazina</li>
                                <li>Uprising</li>
                            </ul>
                            <ul class="right">
                                <li>Malindi</li>
                                <li>Goldies</li>
                                <li>Uwezo</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{route('category')}}">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="category-box wow fadeInUpQuick animated" data-wow-delay="1.8s" style="visibility: visible;-webkit-animation-delay: 1.8s; -moz-animation-delay: 1.8s; animation-delay: 1.8s;">
                        <div class="category-header">
                            <h4>Foods</h4>
                        </div>
                        <div class="category-image">
                            <img src="{{asset('assets/images/food.jpeg')}}" alt="" />
                        </div>
                        <div class="category-content">
                            <ul class="left">
                                <li>Kilimani</li>
                                <li>Hazina</li>
                                <li>Uprising</li>
                            </ul>
                            <ul class="right">
                                <li>Malindi</li>
                                <li>Goldies</li>
                                <li>Uwezo</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{route('category')}}">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="category-box wow fadeInUpQuick animated" data-wow-delay="2.1s" style="visibility: visible;-webkit-animation-delay: 2.1s; -moz-animation-delay: 2.1s; animation-delay: 2.1s;">
                        <div class="category-header">
                            <h4>Jobs</h4>
                        </div>
                        <div class="category-image">
                            <img src="{{asset('assets/images/job-1.jpeg')}}" alt="" />
                        </div>
                        <div class="category-content">
                            <ul class="left">
                                <li>Kilimani</li>
                                <li>Hazina</li>
                                <li>Uprising</li>
                            </ul>
                            <ul class="right">
                                <li>Malindi</li>
                                <li>Goldies</li>
                                <li>Uwezo</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </a>
            <a href="{{route('category')}}">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="category-box wow fadeInUpQuick animated" data-wow-delay="2.4s" style="visibility: visible;-webkit-animation-delay: 2.4s; -moz-animation-delay: 2.4s; animation-delay: 2.4s;">
                        <div class="category-header">
                            <h4>Books</h4>
                        </div>
                        <div class="category-image">
                            <img src="{{asset('assets/images/books.jpg')}}" alt="" />
                        </div>
                        <div class="category-content">
                            <ul class="left">
                                <li>Kilimani</li>
                                <li>Hazina</li>
                                <li>Uprising</li>
                            </ul>
                            <ul class="right">
                                <li>Malindi</li>
                                <li>Goldies</li>
                                <li>Uwezo</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </a>

        </div>
    </div>
</section>
<section class="featured-list">
    <div class="container">
        <div class="row">
            <div class="col-md-12 wow fadeIn" data-wow-delay="0.5s">
                <h3 class="section-title">Featured Ads</h3>
                <div id="new-products" class="owl-carousel">
                    <marquee>
                        <div class="item">
                            <div class="product-item">
                                <div class="carousel-thumb">
                                    <img src="{{asset('assets/images/apartment-3.jpg')}}" alt="">
                                    <div class="overlay">
                                        <a href="ads-details.html"><i class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                                <a href="ads-details.html" class="item-name">Lorem ipsum dolor sit</a>
                                <span class="price">KES 150</span>
                            </div>
                        </div>
                    </marquee>
                    <marquee>
                        <div class="item">
                            <div class="product-item">
                                <div class="carousel-thumb">
                                    <img src="{{asset('assets/images/vehicle-3.jpg')}}" alt="">
                                    <div class="overlay">
                                        <a href="ads-details.html"><i class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                                <a href="ads-details.html" class="item-name">Lorem ipsum dolor sit</a>
                                <span class="price">KES 150</span>
                            </div>
                        </div>
                    </marquee>
                    <marquee>
                        <div class="item">
                            <div class="product-item">
                                <div class="carousel-thumb">
                                    <img src="{{asset('assets/images/service-1.jpg')}}" alt="">
                                    <div class="overlay">
                                        <a href="ads-details.html"><i class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                                <a href="ads-details.html" class="item-name">Lorem ipsum dolor sit</a>
                                <span class="price">KES 150</span>
                            </div>
                        </div>
                    </marquee>
                    <marquee>
                        <div class="item">
                            <div class="product-item">
                                <div class="carousel-thumb">
                                    <img src="{{asset('assets/images/job-1.jpeg')}}" alt="">
                                    <div class="overlay">
                                        <a href="ads-details.html"><i class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                                <a href="ads-details.html" class="item-name">Lorem ipsum dolor sit</a>
                                <span class="price">KES 150</span>
                            </div>
                        </div>
                    </marquee>
                    <marquee>
                        <div class="item">
                            <div class="product-item">
                                <div class="carousel-thumb">
                                    <img src="{{asset('assets/images/Electronics-1.jpeg')}}" alt="">
                                    <div class="overlay">
                                        <a href="ads-details.html"><i class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                                <a href="ads-details.html" class="item-name">Lorem ipsum dolor sit</a>
                                <span class="price">KES 150</span>
                            </div>
                        </div>
                    </marquee>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection