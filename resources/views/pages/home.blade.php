@extends('app')

@section('content')
    <img src="/image/guinee.png" alt="guinea flag">
    <h1>Hello from Conakry !</h1>

    <p>It's currently {{date('h:i A')}}.</p>

@endsection
