@extends('welcome')

@section('content')
<section class="mx-44">
    <section>
        <div class="container">
            <div>
                <h2 class="text-black text-5xl">{{$ad->name}}</h2>
                <p class="text-gray-400">On sell by <span>{{$ad->contactname}}</span> posted on {{$ad->created_at}}</p>
                <div class="details-image-section">
                    <div class="item-slider mt-4">
                        <div class="slide active">
                            <img class="" src="{{asset('storage/uploads')}}/{{$ad->Ad_image_0}}" alt="" />
                        </div>
                        <div class="slide">
                            <img class="" src="{{asset('storage/uploads')}}/{{$ad->Ad_image_1}}" alt="" />
                        </div>
                        <div class="slide">
                            <img class="" src="{{asset('storage/uploads')}}/{{$ad->Ad_image_2}}" alt="" />
                        </div>
                        <div class="slide">
                            <img class="" src="{{asset('storage/uploads')}}/{{$ad->Ad_image_3}}" alt="" />
                        </div>

                        <div class="navigation">
                            <div class="btn active"></div>
                            <div class="btn"></div>
                            <div class="btn"></div>
                            <div class="btn"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-8 border-2 p-8 w-5/6">
                <h2 class="uppercase text-5xl text-blue-900 font-medium border-b-2 border-gray-400">details</h2>
                <div class="row mt-4">
                    <div class="col-md-8 border-2 p-4 mr-4">
                        <p class="pt-4">
                            {{$ad->description}}
                        </p>
                    </div>
                    <div class=" col-md-3 border-2 p-4">
                        <p class="text-black text-3xl"><a href="{{route('category.name', ['category_slug'=>$category_name])}}">{{$category_name}}</a></p>
                        <div class="p-2">
                            <i class="bi bi-shop"></i>
                            <span>On sell</span>
                        </div>
                        <div class="p-2">
                            <i class="bi bi-person-fill"></i>
                            <span>{{$ad->contactname}}</span>
                        </div>
                        @if($ad->hide_number == NULL)
                        <div class="p-2">
                            <i class="bi bi-telephone-fill"></i>
                            <span>{{$ad->contactnumber}}</span>
                        </div>
                        @else

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="featured-list mt-20">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeIn" data-wow-delay="0.5s">
                    <h3 class="section-title text-black text-5xl">Related Ads</h3>
                    <div id="new-products" class="owl-carousel mt-8">
                        @foreach($related_ads as $related_ad)
                        <div class="item">
                            <div class="product-item">
                                <div class="carousel-thumb">
                                    <img src="{{asset('storage/uploads')}}/{{$related_ad->Ad_image_0}}" alt="">
                                    <div class="overlay">
                                        <a href="#"><i class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                                <a href="#" class="item-name">{{$related_ad->name}}</a>
                                <span class="price">{{$related_ad->price}}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection