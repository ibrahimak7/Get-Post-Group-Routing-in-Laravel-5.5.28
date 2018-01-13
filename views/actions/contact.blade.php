
@extends('layout.master')
@section('content')
    <a href="{{route('home')}}">Home</a>
<h1>Hellow Contact {{ $name === null ? 'you': $name}}</h1> <!=== geting get paramenter from url if it is dispaly otherwise put you ====>
@endsection