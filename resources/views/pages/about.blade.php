@extends('app')

@section('title','About Us | '.config('app.name'))


@section('content')

    <p>Built with &hearts; by LES TEACHERS DU NET.</p>

    <p><a href="{{ route('home')}}">Revenir sur la page d'acceuil</a></p>

@stop
