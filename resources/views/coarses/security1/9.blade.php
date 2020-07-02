@extends('layouts.app')

@section('content')

    <div class="h-screen">
        <div class="container">
            <h2>Course 1 - Safety first</h2>
        </div>
        <div class="flex">
            <div class="w-40 h-screen flex items-center justify-center">
                <a class="hover:no-underline" href="{{ url('security-basics/8')}}"><div class="w-20 h-20 flex rounded-full bg-indigo-500 text-center justify-center items-center text-white font-extrabold text-4xl"><</div></a>
            </div>
            <div class="container my-auto">
                <div class="w-full text-center text-2xl ">
                    You have completed the first course!
                </div>
                <div class="w-full text-center text-xl pt-24">
                    <div class="pt-24">
                        You’ve earned 10 Whirl tokens
                    </div>
                </div>
            </div>
            <div class="w-40 h-screen flex items-center justify-center">
                <a class="hover:no-underline" href="{{ url('home')}}"><div class="w-20 h-20 flex rounded-full bg-indigo-500 text-center justify-center items-center text-white font-extrabold text-4xl">></div></a>
            </div>
        </div>
    </div>
@endsection
