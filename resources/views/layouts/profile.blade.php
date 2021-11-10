@extends('welcome')

@section('content')
<section class="container">
    <div class="flex justify-between">
        <div class="flex items-center">
            <img class="w-32 h-32 rounded-full" src="{{asset('assets/images/default.jpeg')}}" alt="" />
            <div class="pl-8">
                <span class="text-4xl font-semibold"> {{ Auth::user()->name }}</span>
                <div><span class="text-gray-900 font-medium">Email:</span> <span class="text-3xl font-semibold">{{ Auth::user()->email }}</span> </div>
            </div>
        </div>


        <div clas="">
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>

    </div>
</section>
@endsection