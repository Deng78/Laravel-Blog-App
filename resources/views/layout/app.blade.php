<!DOCTYPE html>
<html>
    <head>
        <title>{{config('app.name', 'Blog')}}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!-- CSS/Fonts -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
        @include('inc.messages')
        @yield('content')
        </div>
        <!-- Javascript -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>
        @yield('script')
        <script>
            $(".dropdown-button").dropdown();
            $(()=>{
                $(".button-collapse").sideNav();
            });
        </script>
    </body>
</html>