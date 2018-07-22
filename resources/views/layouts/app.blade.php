<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AB Slides</title>
        <link rel="stylesheet" href="{{ URL::asset('/css/app.css') }}" type="text/css">
        <script type="text/javascript" src="{{ URL::asset('/js/app.js') }}"></script>
    </head>
    <body>
        <div class="navbar">
            @yield('title')
        </div>
        <div class="flex-center position-ref full-height">
            @yield('content')
        </div>
    </body>
</html>
