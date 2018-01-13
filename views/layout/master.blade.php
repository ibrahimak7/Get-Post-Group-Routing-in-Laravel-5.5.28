<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{URL::to('css/css.css')}}"> <!--- accessing style sheet in public/css/css.css  --->
    @yield('styles')
</head>
<body>
@include('includes.header') <!---- including header from the includes directory ----->
<div class="main">
    @yield('content') <!--- including all the content to main class --->
</div>
</body>
</html>