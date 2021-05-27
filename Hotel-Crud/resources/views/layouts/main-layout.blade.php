<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CRUD</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
  </head>
  <body>

    <div class="">
      <div class="">
        @include('components.header')
      </div>
    </div>

    @yield('content')

    <div class="">
      <div class="">
        @include('components.footer')
      </div>
    </div>

  </body>
</html>
