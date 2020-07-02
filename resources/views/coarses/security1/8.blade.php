@extends('layouts.app')

@section('content')

    <div class="h-screen">
        <div class="container">
            <h2>Course 1 - Safety first</h2>
        </div>
        <div class="flex">
            <div class="w-40 h-screen flex items-center justify-center">
                <a class="hover:no-underline" href="{{ url('security-basics/7')}}"><div class="w-20 h-20 flex rounded-full bg-indigo-500 text-center justify-center items-center text-white font-extrabold text-4xl"><</div></a>
            </div>
            <div class="container flex">
                <div class="w-1/2 text-xl pt-24">
                    <div>Well done! You now enabled the 2FA authentication. You will be prompted
                        with the code in the app every time you log in.</div>
                    <p>Now enter the key in the authenticator app.</p>
                    <div class="flex mx-auto text-xl pt-24"><p class="p-2">Google Key </p><input class="border-none bg-gray-400 rounded p-2 w-64" id="keyvalue" ></input></div>

                </div>
                <div class="w-1/2">
                    <div class="pt-24">
                        <img class="w-1/2 mx-auto" src="{{URL::asset("img/auth4.png")}}">
                    </div>
                </div>
            </div>
            <div class="w-40 h-screen flex items-center justify-center">
                <a class="hover:no-underline" href="{{ url('security-basics/9')}}"><div class="w-20 h-20 flex rounded-full bg-indigo-500 text-center justify-center items-center text-white font-extrabold text-4xl">></div></a>
            </div>
        </div>
    </div>
@endsection
