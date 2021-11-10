@extends('welcome')


<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

@section('content')
<section class="wrapper flex justify-center items-center">
    <div class=" form border-2 p-10 border-gray-300 w-2/6">
        <h2 class="font-bold text-gray-1500 text-5xl text-center my-6 uppercase">{{ __('Login') }}</h2>
        <form action="{{ route('login') }}" method="POST">

            @if(Session::get('fail'))
            <div class="flex justify-center py-4 m-4 bg-red-200 text-red-400 rounded-xl">{{Session::get('fail')}}</div>
            @endif

            @csrf
            <div class="input flex flex-col pt-4">
                <label>{{ __('E-Mail Address') }}</label>
                <input class="border-2 @error('email') is-invalid @enderror" name="email" type="text" name="email" placeholder="Enter your Email" value="{{old('email')}}" />
                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
            </div>
            <div class="input flex flex-col">
                <label>{{ __('Password') }}</label>
                <input class="border-2 @error('password') is-invalid @enderror" type="password" name="password" placeholder="Enter password" />
                <div class="icon"><i class="fas fa-eye"></i> </div>
                <span class="text-danger">@error('password'){{ $message }} @enderror</span>
            </div>
            <div class="flex items-center">
                <input id="terms-and-privacy" type="checkbox" />
                <label for="terms-and-privacy" class="ml-2 mt-4 block text-gray-900 font-medium">
                    {{ __('Remember Me') }}
                </label>
            </div>
            <div class="py-4 ">
                <button class="bg-blue-900 text-white w-full uppercase">{{ __('Login') }}</button>
                <!-- @if (Route::has('password.request'))
                <a class="mt-10" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif -->
            </div>
        </form>
        <div class="link">Not yet signed up? <a href="{{route('register')}}">Sign up now</a></div>
    </div>
</section>
@endsection