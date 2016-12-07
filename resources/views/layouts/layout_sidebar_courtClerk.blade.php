<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="robots" content="noindex,nofollow">
        <title>Citation Support System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="{{ URL::asset('css/sidebar.css') }}" type="text/css" />

        @include('layouts.css')
        @yield('head')

    </head>

    <body>
        @include('layouts.app')
        @include('layouts.body_with_sidebar_courtClerk')

        @include('layouts.javascript')

    </body>
</html>
