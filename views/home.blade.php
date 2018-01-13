@extends('layout.master')
@section('content')

    <div class="center">
       <a href="{{ route('contact') }}">Contact</a>  <!------ putting page route here ------->
       <a href="{{ route('address') }}">Address</a>
       <a href="{{ route('team') }}">Team</a>
    </div>
    <form action="{{ route('benice') }}" method="post">
        <label>Page</label>
        <select name="action">
            <option value="contact">Contact</option>
            <option value="address">Address</option>
            <option value="team">Team</option>
        </select>
        <input type="text" name="name">
        <button type="submit">Move</button>
        <input type="hidden" value="{{ Session::token() }}" name="_token"> <!---- laravel session for cross site scripting name shouldnt be change. --->
    </form>
    @endsection