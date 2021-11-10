@extends('welcome')

@section('content')
<section>
    <div class="category-search-section">
        <div class="flex justify-around items-center py-8">
            <div class="search-col">
                <select name="cat" class="w-96">
                    <option value="0">Categories</option>
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
    <div class="container flex justify-around my-12">
        <div class="border-2 w-1/2 p-4 mr-12 h-3/4">
            <div class="flex justify-center  my-4">
                <h2 class="uppercase font-semibold">all categories</h2>
            </div>
            <div class="flex justify-between p-4 border-b-2">
                <li><a>Apartments</a></li>
                <span class="text-gray-400">5</span>
            </div>
            <div class="flex justify-between p-4 border-b-2">
                <li><a>Electronics</a></li>
                <span class="text-gray-400">6</span>
            </div>
            <div class="flex justify-between p-4 border-b-2">
                <li><a>Services</a></li>
                <span class="text-gray-400">10</span>
            </div>
            <div class="flex justify-between p-4 border-b-2">
                <li><a>Books</a></li>
                <span class="text-gray-400">12</span>
            </div>
            <div class="flex justify-between p-4 border-b-2">
                <li><a>Phones & laptops</a></li>
                <span class="text-gray-400">3</span>
            </div>
            <div class="flex justify-between p-4 border-b-2">
                <li><a>Vehicles</a></li>
                <span class="text-gray-400">7</span>
            </div>
            <div class="flex justify-between p-4 border-b-2">
                <li><a>Jobs</a></li>
                <span class="text-gray-400">22</span>
            </div>
            <div class="flex justify-between p-4 border-b-2">
                <li><a>Food</a></li>
                <span class="text-gray-400">11</span>
            </div>
        </div>
        <div>
            <div class="flex justify-between items-center border-2 p-4 mb-4 hover:bg-gray-100">
                <div>
                    <img class="w-60 h-60" src="{{asset('assets/images/apartment-3.jpg')}}" alt="" />
                </div>
                <div class="w-4/6">
                    <span><a class="text-black font-medium text-3xl" href="{{route('ad-details')}}">Lorem ipsum dolor</a></span>
                    <div class="py-4">
                        <span class="bg-gray-300 text-blue-900 capitalize text-2xl p-2 mr-3">On sell</span>
                        <span class="text-gray-500 pr-3">12/01/2022 9:54 pm</span>
                        <span class="text-gray-500">Apartments - <i class="bi bi-geo-alt-fill text-2xl"></i> Nairobi</span>
                    </div>
                    <p><a href="{{route('ad-details')}}">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam condimentum sapien sed nibh vestibulum, quis volutpat tortor pretium. Vivamus nec metus quis nisi vulputate fringilla nec a sem. Sed sit amet arcu dui. Nunc fermentum mauris sed sagittis fermentum. Mauris dictum lacus ligula...</a></p>
                </div>
                <div>
                    <span class=" text-5xl text-gray-500 font-light">Ksh 4700</span>
                </div>
            </div>

            <div class="flex justify-between items-center border-2 p-4 mb-4 hover:bg-gray-100 ">
                <div>
                    <img class="w-60 h-60" src="{{asset('assets/images/apartment-3.jpg')}}" alt="" />
                </div>
                <div class="w-4/6">
                    <span><a class="text-black font-medium text-3xl" href="{{route('ad-details')}}">Lorem ipsum dolor</a></span>
                    <div class="py-4">
                        <span class="bg-gray-300 text-blue-900 capitalize text-2xl p-2 mr-3">On sell</span>
                        <span class="text-gray-500 pr-3">12/01/2022 9:54 pm</span>
                        <span class="text-gray-500">Apartments - <i class="bi bi-geo-alt-fill text-2xl"></i> Nairobi</span>
                    </div>
                    <p><a href="{{route('ad-details')}}">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam condimentum sapien sed nibh vestibulum, quis volutpat tortor pretium. Vivamus nec metus quis nisi vulputate fringilla nec a sem. Sed sit amet arcu dui. Nunc fermentum mauris sed sagittis fermentum. Mauris dictum lacus ligula...</a></p>
                </div>
                <div>
                    <span class=" text-5xl text-gray-500 font-light">Ksh 4700</span>
                </div>
            </div>

            <div class="flex justify-between items-center border-2 p-4 mb-4 hover:bg-gray-100">
                <div>
                    <img class="w-60 h-60" src="{{asset('assets/images/apartment-3.jpg')}}" alt="" />
                </div>
                <div class="w-4/6">
                    <span><a class="text-black font-medium text-3xl" href="{{route('ad-details')}}">Lorem ipsum dolor</a></span>
                    <div class="py-4">
                        <span class="bg-gray-300 text-blue-900 capitalize text-2xl p-2 mr-3">On sell</span>
                        <span class="text-gray-500 pr-3">12/01/2022 9:54 pm</span>
                        <span class="text-gray-500">Apartments - <i class="bi bi-geo-alt-fill text-2xl"></i> Nairobi</span>
                    </div>
                    <p><a href="{{route('ad-details')}}">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam condimentum sapien sed nibh vestibulum, quis volutpat tortor pretium. Vivamus nec metus quis nisi vulputate fringilla nec a sem. Sed sit amet arcu dui. Nunc fermentum mauris sed sagittis fermentum. Mauris dictum lacus ligula...</a></p>
                </div>
                <div>
                    <span class=" text-5xl text-gray-500 font-light">Ksh 4700</span>
                </div>
            </div>

            <div class="flex justify-between items-center border-2 p-4 mb-4 hover:bg-gray-100">
                <div>
                    <img class="w-60 h-60" src="{{asset('assets/images/apartment-3.jpg')}}" alt="" />
                </div>
                <div class="w-4/6">
                    <span><a class="text-black font-medium text-3xl" href="{{route('ad-details')}}">Lorem ipsum dolor</a></span>
                    <div class="py-4">
                        <span class="bg-gray-300 text-blue-900 capitalize text-2xl p-2 mr-3">On sell</span>
                        <span class="text-gray-500 pr-3">12/01/2022 9:54 pm</span>
                        <span class="text-gray-500">Apartments - <i class="bi bi-geo-alt-fill text-2xl"></i> Nairobi</span>
                    </div>
                    <p><a href="{{route('ad-details')}}">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam condimentum sapien sed nibh vestibulum, quis volutpat tortor pretium. Vivamus nec metus quis nisi vulputate fringilla nec a sem. Sed sit amet arcu dui. Nunc fermentum mauris sed sagittis fermentum. Mauris dictum lacus ligula...</a></p>
                </div>
                <div>
                    <span class=" text-5xl text-gray-500 font-light">Ksh 4700</span>
                </div>
            </div>

            <div class="navigation pt-20">
                <ul>
                    <li><a class="btn p-4 m-2 bg-blue-900 text-white rounded-full capitalize" href="">
                            < previous</a>
                    </li>
                    <li><a class="btn py-4 px-6 m-2 bg-blue-900 text-white rounded-full" href="">1</a></li>
                    <li><a class="btn py-4 px-6 m-2 bg-blue-900 text-white rounded-full" href="">2</a></li>
                    <li><a class="btn py-4 px-6 m-2 bg-blue-900 text-white rounded-full" href="">...</a></li>
                    <li><a class="btn p-4 m-2 bg-blue-900 text-white rounded-full capitalize" href="">next ></a></li>
                </ul>
            </div>
        </div>
    </div>

</section>
@endsection