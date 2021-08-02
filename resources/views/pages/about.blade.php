@extends('app')

@section('title','About Us | '.config('app.name'))


@section('content')
    <img src="{{asset('/image/TDN.png')}}" alt="TDN_logo" class="rounded-full shadow-md">

    <h2 class="mb-5 text-gray-700">
        Built with <span class="text-pink-500">&hearts; </span>by LES TEACHERS DU NET.
    </h2>

    <p>
        <a href="{{ route('home')}}"class="text-indigo-500 hover:text-indigo-600 underline">Revenir sur la page d'acceuil</a>
    </p>

@stop
