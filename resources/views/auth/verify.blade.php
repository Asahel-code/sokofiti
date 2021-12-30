@extends('welcome')

@section('content')
<section class="wrapper flex justify-center items-center">
    <div class=" form border-2 p-10 border-gray-300 w-2/6">
        <h2 class="font-bold text-gray-1500 text-5xl text-center my-6 uppercase">{{ __('Verify Your Email Address') }}</h2>
        <div class="card-body">
            @if (session('resent'))
            <div class="alert alert-success" role="alert">
                {{ __('A fresh verification link has been sent to your email address.') }}
            </div>
            @endif

            <p class="font-medium text-2xl leading-8"><span class="text-3xl">{{ __('Before proceeding, please check your email for a verification link.') }}</span>
                <span class="text-red-400">{{ __('If you did not receive the email') }},</span>
            </p>
            <div class="field button flex justify-center py-9">
                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit" class="bg-blue-900 text-white w-full px-4 uppercase">{{ __('click here to request another') }}</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection