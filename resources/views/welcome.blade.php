<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CoM Danger Repo</title>

        <link href="{{ asset('css/tw.css') }}" rel="stylesheet" />
    </head>
    <body class="bg-black text-white text-l">
        @include('header')

        @include('banner')
        Testing. Can you see this?
    </body>
</html>
