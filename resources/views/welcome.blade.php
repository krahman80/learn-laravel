<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>laravel</title>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            body{font-size:14px;color: #2c2c2c;background: #fafafa;font-family: 'Nunito', serif;}
            .container{margin-top:1.4rem; margin-bottom:2rem;}
        </style>
    </head>
    <body>
      <div class="flex-center position-ref full-height">

        @if (Route::has('login') && Auth::check())
            <div class="top-right links">
                <a href="{{ url('/home') }}">Dashboard</a>
            </div>
        @elseif (Route::has('login') && !Auth::check())
            <div class="top-right links">
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            </div>
        @endif

        <div class="content">
          
        </div>
    </div>
    </body>
</html>
