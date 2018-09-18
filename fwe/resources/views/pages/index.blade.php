<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FWE</title>
           <!-- Styles -->
        <link href="{{ asset('/css/main.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/css/navbar.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
        @extends('layouts.app')
        @section('content')
        @extends('inc.gallery')
        @extends('inc.mission')
        @extends('inc.welcome')
        @extends('inc.navbar')
        @endsection
    </body>
</html>
