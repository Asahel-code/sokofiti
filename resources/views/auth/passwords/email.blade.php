@extends('welcome')

@section('content')
<section class="wrapper flex justify-center items-center">
    <div class=" form border-2 p-10 border-gray-300 w-2/6">
        <h2 class="font-bold text-gray-1500 text-5xl text-center my-6 uppercase">{{ __('Reset Password') }}</h2>
        <form action="{{ route('password.email') }}" method="POST">
            @csrf
            @if(session('status'))
            <div class="alert alert-success" role="alert">{{ session('status') }}</div>
            @endif

            <div class="input flex flex-col pt-4">
                <label>{{ __('E-Mail Address') }}</label>
                <input class="border-2 @error('email') is-invalid @enderror" name="email" type="text" name="email" placeholder="Enter your Email" value="{{old('email')}}" />
                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
            </div>

            <div class="py-4 ">
                <button class="bg-blue-900 text-white w-full uppercase">{{ __('Send Password Reset Link') }}</button>
            </div>
        </form>
    </div>
</section>
@endsection