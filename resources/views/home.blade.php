@extends('layouts.app')

@section('content')
<div class="container">
    <div class="bg-gray-200 rounded mx-auto flex justify-between items-center h-40">
        <a href="security-basics/1" class="align-middle w-1/6 h-32 rounded text-white text-center bg-green-400 px-4 py-2 m-2 no-underline text-xl"><p class="no-underline self-center text-center mx-auto">Security<br> 100%<br></p></a>

        <a class="flex w-1/6 text-xl h-32 rounded text-gray-700 text-center bg-gray-400 px-4 py-2 text-white m-2 "><p class="self-center text-center mx-auto">Wallet<br> 0%</p></a>
         <a class="flex w-1/6 text-xl h-32 rounded text-gray-700 text-center bg-gray-400 px-4 py-2 m-2 text-white"><p class="self-center text-center mx-auto">Deposit<br> 0%</p>  </a>
         <a class="flex w-1/6 text-xl h-32 rounded text-gray-700 text-center bg-gray-400 px-4 py-2 m-2 text-white"><p class="self-center text-center mx-auto">Withdraw <br> 0%</p></a>
         <a class="flex w-1/6 text-xl h-32 rounded text-gray-700 text-center bg-gray-400 px-4 py-2 m-2 text-white"><p class="self-center text-center mx-auto">Trade <br> 0%</p></a>
    </div>
</div>
@endsection
