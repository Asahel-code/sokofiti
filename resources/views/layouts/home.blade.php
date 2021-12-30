@extends('welcome')

@section('navigation')

@foreach($categories as $category_link)
<li><a href="{{route('category.name', ['category_slug'=>$category_link->slug])}}">{{$category_link->name}}</a></li>
@endforeach

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
    <form method="get" action="{{route('ad-search')}}" method="GET">
        @csrf
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
                <button type="submit" class="bg-blue-900 text-white w-52"><strong>Search</strong></button>
            </div>
        </div>
    </form>
</div>

<section class="categories-section">
    <div class="mx-44">
        <div class="row">
            <div class="col-md-12 mt-8 ml-8">
                <h3 class="section-title text-4xl text-gray-600 font-light">{{$categories->count()}} Categories</h3>
            </div>
            @foreach($categories as $category)
            <a href="{{route('category.name',['category_slug'=>$category->slug]) }}">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="category-box wow fadeInUpQuick animated" data-wow-delay="{{$category->id/3}}s" style="visibility: visible;-webkit-animation-delay: '{{$category->id/3}}'s; -moz-animation-delay: '{{$category->id/3}}'s; animation-delay: '{{$category->id/3}}'s;">
                        <div class="category-header">
                            <h4>{{$category->name}}</h4>
                        </div>
                        <div class="category-image">
                            <img src="{{asset('storage/uploads')}}/{{$category->image}}" alt="{{$category->name}}" />
                        </div>

                        <div class="category-content">
                            <ul class="left">
                                @foreach($category->ads->take(3) as $ad)
                                <li>{{$ad->name}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
<section class="featured-list">
    <div class="mx-44">
        <div class="row">
            <div class="col-md-12 wow fadeIn" data-wow-delay="0.5s">
                <h3 class="section-title mb-4 text-4xl text-gray-600 font-light">Featured Ads</h3>
                <div id="new-products" class="owl-carousel">
                    @foreach($featured_ads as $featured_ad)
                    <div class="item">
                        <div class="product-item">
                            <div class="carousel-thumb">
                                <img src="{{asset('storage/uploads')}}/{{$featured_ad->Ad_image_0}}" alt="">
                                <div class="overlay">
                                    <a href="{{route('ad.details',['category_slug'=>$featured_ad->category->slug, 'slug'=>$featured_ad->slug])}}"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                            <a href="{{route('ad.details',['category_slug'=>$featured_ad->category->slug, 'slug'=>$featured_ad->slug])}}" class="item-name">{{$featured_ad->name}}</a>
                            <span class="price">KES {{$featured_ad->price}}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection