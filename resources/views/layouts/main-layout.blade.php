<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lavarel es4</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
     <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  </head>
  <body>
    <header>
      @include('parts.header')
    </header>
    <div class="container">
      @yield('content')
    </div>
    <footer>
    @include('parts.footer')
    </footer>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset('js/app.js')}}" charset="utf-8"></script>
</html>
