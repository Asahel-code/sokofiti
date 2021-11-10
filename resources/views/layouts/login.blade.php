@extends('welcome')

@section('content')
<section class="wrapper flex justify-center items-center">
    <div class=" form border-2 p-10 border-gray-300 w-2/6">
        <h2 class="font-bold text-gray-1500 text-5xl text-center my-6 uppercase">Join us</h2>
        <form action="{{route('check')}}" method="POST">

            @if(Session::get('fail'))
            <div class="flex justify-center py-4 m-4 bg-red-200 text-red-400 rounded-xl">{{Session::get('fail')}}</div>
            @endif

            @csrf
            <div class="input flex flex-col pt-4">
                <label>Email Address</label>
                <input class="border-2" type="text" name="email" placeholder="Enter your Email" value="{{old('email')}}" />
                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
            </div>
            <div class="input flex flex-col">
                <label>Password</label>
                <input class="border-2" type="password" name="password" placeholder="Enter password" />
                <div class="icon"><i class="fas fa-eye"></i> </div>
                <span class="text-danger">@error('password'){{ $message }} @enderror</span>
            </div>
            <div class="flex items-center">
                <input id="terms-and-privacy" type="checkbox" />
                <label for="terms-and-privacy" class="ml-2 mt-4 block text-gray-900 font-medium">
                    Remember me
                </label>
            </div>
            <div class="flex justify-center py-4 ">
                <button class="bg-blue-900 text-white w-full uppercase">submit</button>
            </div>
        </form>
        <div class="link">Not yet signed up? <a href="{{route('register')}}">Sign up now</a></div>
    </div>
</section>
@endsection