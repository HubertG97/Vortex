@extends('layouts.app')

@section('content')

    <div class="h-screen">
        <div class="container">
            <h2>Course 1 - Safety first</h2>
        </div>
        <div class="flex">
            <div class="w-40 h-screen flex items-center justify-center">
                <a class="hover:no-underline" href="{{ url('security-basics/6')}}"><div class="w-20 h-20 flex rounded-full bg-indigo-500 text-center justify-center items-center text-white font-extrabold text-4xl"><</div></a>
            </div>
            <div class="container">
                <div class="w-3/4 text-xl pt-24">
                    <p>Did you write it down? Please fill in the key below to verify.</p>

                </div>
                <div class="w-full ">
                    <div class="w-1/3 flex mx-auto text-xl pt-24"><p class="p-2">Secret key : </p><input class="border-none bg-gray-400 rounded p-2 w-64" id="secretvalue" ></input></div>
                </div>
            </div>
            <div class="w-40 h-screen flex items-center justify-center">
                <a class="hover:no-underline" href="{{ url('security-basics/8')}}"><div class="w-20 h-20 flex rounded-full bg-indigo-500 text-center justify-center items-center text-white font-extrabold text-4xl">></div></a>
            </div>
        </div>
    </div>
@endsection
