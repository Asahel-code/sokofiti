@extends('welcome')

@section('content')
<section class="wrapper flex justify-center items-center">
    <div class=" form border-2 p-10 border-gray-300 w-2/6">
        <h2 class="font-bold text-gray-1500 text-5xl text-center my-6 uppercase">{{ __('Reset Password') }}</h2>
        <form action="{{ route('password.update') }}" method="POST">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="input flex flex-col pt-4">
                <label for="email">{{ __('E-Mail Address') }}</label>
                <input id="email" class="border-2 @error('email') is-invalid @enderror" type="email" placeholder="Enter your Email" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus />
                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
            </div>
            <div class="input flex flex-col">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" class="border-2 @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="new-password" placeholder="Enter password" />
                <div class="icon"><i class="fas fa-eye"></i> </div>
                <span class="text-danger">@error('password'){{ $message }} @enderror</span>
            </div>
            <div class="input flex flex-col">
                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" class="border-2 @error('password') is-invalid @enderror" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Enter password" />
                <span class="text-danger">@error('password'){{ $message }} @enderror</span>
            </div>

            <div class="py-4 ">
                <button class="bg-blue-900 text-white w-full uppercase">{{ __('Reset Password') }}</button>
            </div>
        </form>
    </div>
</section>
@endsection