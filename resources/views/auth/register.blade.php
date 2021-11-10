@extends('welcome')


<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
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
    <div class="form border-2 p-10 border-gray-300 w-2/6">
        <h2 class="font-bold text-gray-1500 text-5xl text-center my-6 uppercase">Create an account</h2>
        <form action="{{route('register')}}" method="POST">

            @if(Session::get('success'))
            <div class="sucess-txt flex justify-center py-4 m-4 bg-green-200 text-green-400 rounded-xl">{{Session::get('success')}}</div>
            @endif

            @if(Session::get('fail'))
            <div class="error-text flex justify-center py-4 m-4 bg-red-200 text-red-400 rounded-xl">{{Session::get('fail')}}</div>
            @endif

            @csrf
            <div class="input flex flex-col">
                <label>{{ __('Name') }}</label>
                <input class="border-2" type="text" name="name" placeholder="Enter your Username" value="{{old ('name')}}" />
                <span class="text-danger">@error('name'){{ $message }} @enderror</span>
            </div>
            <div class="input flex flex-col">
                <label>{{ __('E-Mail Address') }}</label>
                <input class="border-2" type="text" name="email" placeholder="Enter your Email" value="{{old ('email')}}" />
                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
            </div>
            <div class="input flex flex-col">
                <label>{{ __('Password') }}</label>
                <input class="border-2" type="password" name="password" placeholder="Enter new password" />
                <div class="icon"><i class="fas fa-eye"></i></div>
                <span class="text-danger">@error('password'){{ $message }} @enderror</span>

            </div>
            <div class="input flex flex-col">
                <label>{{ __('Confirm Password') }}</label>
                <input class="border-2" type="password" name="confirm" placeholder="Confirm password" />
                <span class="text-danger">@error('confirm'){{ $message }} @enderror</span>
            </div>
            <div class="field button flex justify-center py-9">
                <button type="submit" class="bg-blue-900 text-white w-full uppercase"> {{ __('Register') }}</button>
            </div>
        </form>
        <div class="link">Already have an account? <a href="{{route('login')}}">Login now</a></div>
    </div>
</section>
@endsection