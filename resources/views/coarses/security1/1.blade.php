@extends('layouts.app')

@section('content')

    <div class="h-screen">
        <div class="container">
            <h2>Course 1 - Safety first</h2>
        </div>
        <div class="flex">
            <div class="w-40 h-screen flex items-center justify-center">
                <a class="hover:no-underline" href="{{ url('/home')}}"><div class="w-20 h-20 flex rounded-full bg-indigo-500 text-center justify-center items-center text-white font-extrabold text-4xl"><</div></a>
            </div>
            <div class="container">
                <div class="w-3/4 text-xl pt-24">
                    One of the most important aspects of investing in cryptocurrency is security. When you make an account at any crypto-exchange you should always enable 2-step verification with for example Google Authenticator...
                </div>
                <div class="w-full pt-24">
                    <img class="w-1/3 float-right" src="{{URL::asset("img/googleauth.png")}}">
                </div>
            </div>

            <div class="w-40 h-screen flex items-center justify-center">
                <a class="hover:no-underline"  href="{{ url('security-basics/2')}}"><div class="w-20 h-20 flex rounded-full bg-indigo-500 text-center justify-center items-center text-white font-extrabold text-4xl">></div></a>
            </div>
        </div>
    </div>
@endsection
