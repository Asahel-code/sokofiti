@extends('welcome')

@section('content')
<section class="mx-44">
    <form action="{{route('ad.update', ['ad'=>$ad->id])}}" enctype="multipart/form-data" method="POST">
        @csrf
        @method="PUT"
        <div class="form-group border-2 border-blue-900 p-10">
            <h2 class="text-4xl font-medium text-blue-900 uppercase border-b-4 border-gray-600 py-4 my-4">Ads details</h2>
            <div class="flex flex-col p-4">
                <label class="font-medium">Ad name</label>
                <input class="border-2 border-opacity-40" name="adname" type="text" placeholder="Ad name" required="" value="{{$ad->name}}" />
            </div>
            <div class="flex flex-col p-4">
                <label class="font-medium">Ad description</label>
                <textarea class="border-2 border-opacity-40" name="addescription" placeholder="Ad description" required="" value="{{$ad->description}}"></textarea>
            </div>
            <div class="flex flex-col p-4 w-96">
                <label class="font-medium">Category<label>
                        <select name="cat" class="w-96 h-16 border-2 border-opacity-40 text-gray-600 font-light">
                            <option value="{{$ad->category_id}}">{{$ad->category->name}}</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
            </div>
            <div class="flex p-4">
                <div class="flex flex-col">
                    <label class="font-medium">price</label>
                    <input class="border-2 border-opacity-40" name="price" type="text" placeholder="Price" required="" value="{{$ad->price}}" />
                </div>
                <div class="flex ml-24">
                    <div>
                        <input name="negotiable" value="1" type="checkbox" />
                    </div>
                    <div class="pt-4 pl-4">
                        <span>Negotiable</span>
                    </div>
                </div>
                <div class="flex flex-col w-96 ml-24 mt-4">
                    <label class="font-medium">other options<label>
                            <select name="sell-option" class="border-2 border-opacity-40 h-16 w-96 text-gray-600 font-light">
                                <option value="{{$ad->sell}}">{{$ad->sell_options}}</option>
                                <option value="deal">Deal</option>
                                <option value="exchange">Exchange</option>
                                <option value="free">for free</option>
                            </select>
                </div>


            </div>

            <h2 class="text-4xl font-medium text-blue-900 uppercase border-b-4 border-gray-600 py-4 my-4">Upload images for your ads</h2>
            <div class="">
                <div>
                    <label class="font-light text-3xl">Featured Image</label>
                    <div class="col-md-6 file-upload-wrapper mb-10" data-text="Select your image">
                        <input id="image" name="image0" type="file" class="file-upload-field" required value="{{$ad->Ad_image_0}}" />
                    </div>
                </div>

                <div>
                    <label class="font-light text-3xl mt-4">Other images</label>
                    <div class="col-md-6 file-upload-wrapper" data-text="Select your image">
                        <input id="image" name="image1" type="file" class="file-upload-field" required value="{{$ad->Ad_image_1}}" />
                    </div>
                    <div class="col-md-6 file-upload-wrapper" data-text="Select your image">
                        <input id="image" name="image2" type="file" class="file-upload-field" required value="{{$ad->Ad_image_2}}" />
                    </div>
                    <div class="col-md-6 file-upload-wrapper" data-text="Select your image">
                        <input id="image" name="image3" type="file" class="file-upload-field" required value="{{$ad->Ad_image_3}}" />
                    </div>
                </div>
            </div>
            <p class="">Add up to 4 photos. Use a real image of your advert, not catalogs.</p>
        </div>

        </div>
        <div class="form-group flex justify-center items-center border-2 border-blue-900 p-10">
            <div class="w-full">
                <h2 class="text-4xl font-medium text-blue-900 uppercase border-b-4 border-gray-600 py-4 my-4">Your contact details</h2>
                <div class="flex flex-col py-2">
                    <label class="font-medium">Username</label>
                    <input class="border-2 border-opacity-40" type="text" name="username" placeholder="username" required="" value="{{$ad->contactname}}" />
                </div>
                <div class="flex flex-col py-2">
                    <label class="font-medium">Contact mail</label>
                    <input class="border-2 border-opacity-40" type="text" name="email" placeholder="email" required="" value="{{$ad->contactemail}}" />
                </div>
                <div class="flex flex-col py-2">
                    <label class="font-medium">Contact number</label>
                    <input class="border-2 border-opacity-40" type="text" name="number" placeholder="number" required="" value="{{$ad->contactnumber}}" />
                </div>
                <div class="flex items-center py-2">
                    <input name="hidenumber" value="1" type="checkbox" />
                    <label class="font-medium ml-2 mt-4">hide number<label>
                </div>
                <div class="w-96 py-2">
                    <label class="font-medium">Location<label>
                            <select name="location" class="border-2 border-opacity-40 w-96 h-16 text-gray-600 font-light">
                                <option value="{{$ad->location}}">{{$ad->location}}</option>
                                <option value="nairobi">Nairobi</option>
                                <option value="kitale">Kitale</option>
                                <option value="eldoret">Eldoret</option>
                                <option value="mombasa">Mombasa</option>
                                <option value="eldoret">Eldoret</option>
                                <option value="kakamega">Kakamega</option>
                            </select>
                </div>
            </div>
        </div>
        <div class="form-group flex justify-center items-center border-2 border-blue-900 px-10">
            <div class="w-full">
                <div class="flex items-center">
                    <input id="terms-and-privacy" type="checkbox" />
                    <label for="terms-and-privacy" class="ml-2 mt-4 block text-gray-900 font-medium">
                        I agree to the<a class="text-blue-900" href="#"> terms</a> and <a class="text-blue-900" href="#"> pivate policy</a>
                    </label>
                </div>


                <div class="my-5">
                    <button class="btn bg-blue-900 text-white w-80" type="submit">submit</button>
                </div>
            </div>
        </div>
    </form>
</section>
@endsection