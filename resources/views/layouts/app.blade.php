<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TodoList</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css')}}" rel="stylesheet" type="text/css">

        <!-- Styles -->
        
    </head>
    <body>
        @include('inc.nav')
        <div class="container flex-center position-ref full-height" style="margin:100px">
            @include('inc.messages')
            @yield('content')
        </div>

        <footer class="" id="footer">
            <p>Copyright &amp; 2018 TodoList</p>
        </footer>
    </body>
</html>