@extends('welcome')

@section('content')
<section class="container">
    <form>
        <div class="form-group border-2 border-blue-900 p-10">
            <h2 class="text-4xl font-medium text-blue-900 uppercase border-b-4 border-gray-600 py-4 my-4">Ads details</h2>
            <div class="flex flex-col p-4">
                <label class="font-medium">Ad name</label>
                <input class="border-2 border-opacity-40" type="text" placeholder="Ad name" required="" />
            </div>
            <div class="flex flex-col p-4">
                <label class="font-medium">Ad description</label>
                <textarea class="border-2 border-opacity-40" placeholder="Ad description" required=""></textarea>
            </div>
            <div class="flex flex-col p-4 w-96">
                <label class="font-medium">Category<label>
                        <select name="cat" class="w-96 h-16 border-2 border-opacity-40 text-gray-600 font-light">
                            <option value="0">Categories</option>
                            <option value="apartment">Apartments</option>
                            <option value="phone and laptops">Phones & amp; laptops</option>
                            <option value="services">Services</option>
                        </select>
            </div>
            <div class="flex p-4">
                <div class="flex flex-col">
                    <label class="font-medium">price</label>
                    <input class="border-2 border-opacity-40" type="text" placeholder="Ad name" required="" />
                </div>
                <div class="flex ml-24">
                    <div>
                        <input type="checkbox" />
                    </div>
                    <div class="pt-4 pl-4">
                        <span>Negotiable</span>
                    </div>
                </div>
                <div class="flex flex-col w-96 ml-24 mt-4">
                    <label class="font-medium">other options<label>
                            <select name="sell-option" class="border-2 border-opacity-40 h-16 w-96 text-gray-600 font-light">
                                <option value="0">Options</option>
                                <option value="deal">Deal</option>
                                <option value="exchange">Exchange</option>
                                <option value="free">for free</option>
                            </select>
                </div>


            </div>

            <h2 class="text-4xl font-medium text-blue-900 uppercase border-b-4 border-gray-600 py-4 my-4">Upload images for your ads</h2>
            <div class="">
                <label class="font-light text-3xl">Featured Image</label>
                <input type="file" name="" required="" />

                <label class="font-light text-3xl mt-4">Other images</label>
                <input type="file" name="" />
                <input type="file" name="" />
                <input type="file" name="" />
            </div>
            <p class="">Add up to 4 photos. Use a real image of your advert, not catalogs.</p>
        </div>

        </div>
        <div class="form-group flex justify-center items-center border-2 border-blue-900 p-10">
            <div class="w-full">
                <h2 class="text-4xl font-medium text-blue-900 uppercase border-b-4 border-gray-600 py-4 my-4">Your contact details</h2>
                <div class="flex flex-col py-2">
                    <label class="font-medium">Username</label>
                    <input class="border-2 border-opacity-40" type="text" name="" placeholder="username" required="" />
                </div>
                <div class="flex flex-col py-2">
                    <label class="font-medium">Contact mail</label>
                    <input class="border-2 border-opacity-40" type="text" name="" placeholder="email" required="" />
                </div>
                <div class="flex flex-col py-2">
                    <label class="font-medium">Contact number</label>
                    <input class="border-2 border-opacity-40" type="text" name="" placeholder="number" required="" />
                </div>
                <div class="flex items-center py-2">
                    <input type="checkbox" />
                    <label class="font-medium ml-2 mt-4">hide number<label>
                </div>
                <div class="w-96 py-2">
                    <label class="font-medium">Location<label>
                            <select name="location" class="border-2 border-opacity-40 w-96 h-16 text-gray-600 font-light">
                                <option value="0">location</option>
                                <option value="Nairobi">Nairobi</option>
                                <option value="Kitale">Kitale</option>
                                <option value="Malindi">Malindi</option>
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