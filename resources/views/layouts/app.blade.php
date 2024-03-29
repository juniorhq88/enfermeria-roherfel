<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>{{ config('app.name') }}</title>

    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">


    @include('partials.head')


    @vite(['resources/js/app.js'])
</head>

<body>
    @include('partials.whatsapp')
    <div class="page-wrapper">
        @include('partials.header')

        @yield('content')


        @include('partials.footer')
    </div>

    @yield('css')
    @yield('js')
</body>

</html>
