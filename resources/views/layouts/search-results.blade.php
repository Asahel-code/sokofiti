@extends('welcome')

@section('content')
<section>
    <div class="mx-16 flex justify-around my-12 row">
        <div class="border-2 p-4 w-96 mr-12 h-3/4">
            <div class="flex justify-center  my-4">
                <h2 class="uppercase font-semibold">all categories</h2>
            </div>
            @foreach($categories as $category)
            <div class="flex justify-between p-4 border-b-2">
                <li><a href="{{route('category.name', ['category_slug'=>$category->slug])}}">{{$category->name}}</a></li>
                <span class="text-gray-400">{{$category->ads->count()}}</span>
            </div>
            @endforeach
        </div>
        <div>
            <div class="row border-2 p-4 mb-4 hover:bg-gray-100">
                <div class="col-md-3">
                    <img class="w-60 h-60" src="{{asset('storage/uploads')}}/{{$ad->Ad_image_0}}" alt="" />
                </div>
                <div class="col-md-8">
                    <span><a class="text-black font-medium text-3xl" href="{{route('ad.details',['category_slug'=>$category_name, 'slug'=>$ad->slug])}}">{{$ad->name}}</a></span>
                    <div class="py-4">
                        <span class="bg-gray-300 text-blue-900 capitalize text-2xl p-2 mr-3">On sell</span>
                        <span class="text-gray-500 pr-3">{{$keywo->created_at}}</span>
                        <span class="text-gray-500">{{$category_name}} - <i class="bi bi-geo-alt-fill text-2xl"></i> {{$ad->location}}</span>
                    </div>
                    <p><a href="{{route('ad.details',['category_slug'=>$category_name, 'slug'=>$ad->slug])}}">{{substr($ad->description, 0, 200) }}...</a></p>
                </div>
                <div class="col-md-4">
                    <span class=" text-5xl text-gray-500 font-light">Ksh {{$ad->price}}</span>
                </div>
            </div>

            <div class="navigation pt-20">
                <ul>
                    {{$ads->links('layouts/custom-pagination')}}
                </ul>
            </div>
        </div>
    </div>

</section>
@endsection