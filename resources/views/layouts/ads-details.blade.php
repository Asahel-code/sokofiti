@extends('welcome')

@section('content')
<section>
    <div class="container">
        <div>
            <h2 class="text-black text-5xl">Lorem ipsum dolor</h2>
            <p class="text-gray-400">On sell <span>Posted by Allan</span> on 16 June 2022 12:23 am from Canada</p>
            <div id="slider" class="w-5/6 h-3/4 flex mt-4">
                <div class="item">
                    <img class="w-full h-full" src="{{asset('assets/images/apartment-3.jpg')}}" alt="" />
                </div>
                <div class="item">
                    <img class="w-full h-full" src="{{asset('assets/images/apartment-2.jpeg')}}" alt="" />
                </div>
                <div class="item">
                    <img class="w-full h-full" src="{{asset('assets/images/img-1.jpg')}}" alt="" />
                </div>
            </div>
        </div>
        <div class="mt-8 border-2 p-8 w-5/6">
            <h2 class="uppercase text-5xl text-blue-900 font-medium border-b-2 border-gray-400">details</h2>
            <div class="row mt-4">
                <div class="col-md-8 border-2 p-4 mr-4">
                    <p class="pt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam condimentum sapien sed nibh vestibulum, quis volutpat tortor pretium. Vivamus nec metus quis nisi vulputate fringilla nec a sem.
                        Sed sit amet arcu dui. Nunc fermentum mauris sed sagittis fermentum. Mauris dictum lacus ligula, sit amet pretium quam semper quis. Aliquam erat volutpat. Nulla lobortis lectus at risus elementum,
                        lacinia dictum justo placerat. Cras accumsan ligula metus, id sagittis lorem mollis sit amet. Fusce eu sapien at ligula maximus hendrerit. Pellentesque eget venenatis nibh, quis malesuada tellus.
                        Phasellus et nibh a sem convallis pulvinar pulvinar ut nisi. In fermentum purus at molestie facilisis. Nunc at justo vitae enim gravida vulputate quis hendrerit turpis
                    </p>
                </div>
                <div class=" col-md-3 border-2 p-4">
                    <p class="text-black text-3xl"><a href="{{route('category')}}">Apartments</a></p>
                    <div class="p-2">
                        <i class="bi bi-shop"></i>
                        <span>On sell</span>
                    </div>
                    <div class="p-2">
                        <i class="bi bi-person-fill"></i>
                        <span>Posted by: Allan</span>
                    </div>
                    <div class="p-2">
                        <i class="bi bi-telephone-fill"></i>
                        <span>073278338</span>
                    </div>
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

                </div>
            </div>
        </div>
    </div>
</section>
@endsection