<!DOCTYPE html>
<html lang="ru">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{ asset('img/icons.png') }}" rel="shortcut icon" type="image/x-icon" />
    <title>Ipega</title>

    @include('layouts.partials.style')  

  </head>

  <body>


    @include('layouts.partials.nav')

    @yield('content')  

    @include('layouts.partials.footer')
    
    @include('layouts.partials.scripts')

  </body>

</html>
