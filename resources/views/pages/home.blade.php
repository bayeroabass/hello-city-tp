@extends('layouts.app')

@section('content')
    <img src="{{asset('/image/guinee.png')}}" alt="guinea flag" class="h-32 mt-12 rounded shadow-md">
    <h1 class="mt-5 text-3xl font-semibold text-indigo-600 sm:text-5xl">Hello from Conakry !</h1>

    <p class="text-lg text-gray-800">It's currently {{date('h:i A')}}.</p>

@endsection
