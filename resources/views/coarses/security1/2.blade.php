@extends('layouts.app')

@section('content')

    <div class="h-screen">
        <div class="container">
            <h2>Course 1 - Safety first</h2>
        </div>
        <div class="flex">
            <div class="w-40 h-screen flex items-center justify-center">
                <a class="hover:no-underline" href="{{ url('security-basics/1')}}"><div class="w-20 h-20 flex rounded-full bg-indigo-500 text-center justify-center items-center text-white font-extrabold text-4xl"><</div></a>
            </div>
            <div class="container">
                <div class="w-3/4 text-xl pt-24">
                    In this course we are going to show you how to do this and how to prevent account loss...
                    <br>
                    First download the Google authenticator app on your phone. You can find it in the Apple App Store or Google Play Store.
                </div>
                <div class="w-full pt-24">
                    <img class="mx-auto" src="{{URL::asset("img/appstore.png")}}">
                </div>
            </div>
            <div class="w-40 h-screen flex items-center justify-center">
                <a class="hover:no-underline" href="{{ url('security-basics/3')}}"><div class="w-20 h-20 flex rounded-full bg-indigo-500 text-center justify-center items-center text-white font-extrabold text-4xl">></div></a>
            </div>
        </div>
    </div>
@endsection
