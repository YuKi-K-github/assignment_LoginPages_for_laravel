<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/login.css">
        @yield('style')
        <title>assignment1</title>
    </head>
    <body>
        <div class="header">
            <div class="row no-gutters">
                <h4 class="col-lg-2">assignment1</h4>
                <a href="/login" class="offset-lg-8 col-lg-1">Login</a>
                <a href="/register" class="col-lg-1">Register</a>
            </div>
        </div>
        <div class="contents">
            @yield('content')
        </div>
    </body>
</html>
