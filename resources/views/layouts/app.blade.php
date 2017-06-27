<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>


        <!-- Boostrap CSS -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">

        <!--Custom CSS-->
       <link rel="stylesheet" type="text/css" href="/css/custom.css">
       <link rel="stylesheet" type="text/css" href="/css/posts.css">

       <!--JS files     and-->   {{-- CUSTOM SCRIPTS --}}
       
    <script src="/js/astro.min.js"></script>
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.js"></script>
    <scrip src="/js/bootstrap.min.js"></script>



            {{-- FONTS --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=El+Messiri" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montaga" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300" rel="stylesheet"> 
</head>
<body>
       @include('layouts.nav')


<div id="mbody">
       @yield('body')
</div>
  
    {{-- FOOTER INCLUSION --}}
@include('layouts.footer') 

          {{-- SCRIPTS INCLUSION --}}
@yield('scripts')  

</body>
</html>
