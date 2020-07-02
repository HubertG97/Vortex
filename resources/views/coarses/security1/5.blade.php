@extends('layouts.app')

@section('content')

    <div class="h-screen">
        <div class="container">
            <h2>Course 1 - Safety first</h2>
        </div>
        <div class="flex">
            <div class="w-40 h-screen flex items-center justify-center">
                <a class="hover:no-underline" href="{{ url('security-basics/4')}}"><div class="w-20 h-20 flex rounded-full bg-indigo-500 text-center justify-center items-center text-white font-extrabold text-4xl"><</div></a>
            </div>
            <div class="container flex">
                <div class="w-1/2 text-xl pt-24 text-center">
                    <p class="">Scan the QR-code below with your phone</p>
                    <img class="mx-auto pt-24" src="{{ $QR_Image }}">
                </div>
                <div class="w-1/2 pt-24">


                    <img class="w-1/2 mx-auto" src="{{URL::asset("img/auth3.png")}}">


                </div>
            </div>
            <div class="w-40 h-screen flex items-center justify-center">
                <a class="hover:no-underline" href="{{ url('security-basics/6/')}}"><div class="w-20 h-20 flex rounded-full bg-indigo-500 text-center justify-center items-center text-white font-extrabold text-4xl">></div></a>
            </div>
        </div>
    </div>
@endsection
