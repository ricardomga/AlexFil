<!DOCTYPE html>
<html lang="pt">

  <head>
    <meta charset="UTF-8">
    <title>Alexfil, Lda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('layouts.csslinks')
  </head>

  <body>
    @include('layouts.header')

    @include('layouts.nav')

    @yield('content')

    @include('layouts.footer')

    @include('layouts.scripts')
  </body>

</html>
