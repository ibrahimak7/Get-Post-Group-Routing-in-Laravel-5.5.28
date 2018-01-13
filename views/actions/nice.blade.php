@extends('layout.master')
@section('content')
    <a href="{{route('home')}}">Home</a>
    <h1>Hellow {{ $action }} {{ $name }}</h1> <!--- displaying request data got from the form ---->
@endsection