@extends('welcome')

@section('content')
<section class="container">
    <form action="{{route('admin_category.store')}}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="form-group border-2 border-blue-900 p-10 mx-36">
            <h2 class="text-4xl font-medium text-blue-900 uppercase border-b-4 border-gray-600 py-4 my-4">add a new category</h2>
            <div class="flex flex-col p-4">
                <label class="font-medium">Category name</label>
                <input class="border-2 border-opacity-40" name="categoryname" type="text" placeholder="Category name" required="" />
                <span class="text-danger">@error('required'){{ $message }} @enderror</span>
            </div>
            <div class="flex flex-col p-4">
                <label for="image" class="font-medium">Category sample image</label>
                <div class="col-md-6 file-upload-wrapper" data-text="Select your image">
                    <input id="image" name="image" type="file" class="file-upload-field" required />
                </div>
                <span class="text-danger">@error('required'){{ $message }} @enderror</span>
            </div>
            <div class="my-5">
                <button class="btn text-white w-80" type="submit">submit</button>
            </div>
        </div>
    </form>
</section>
@endsection