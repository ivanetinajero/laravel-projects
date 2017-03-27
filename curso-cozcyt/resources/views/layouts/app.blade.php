<!-- Stored in resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App Name - @yield('title')</title>
  </head>
  <body>
    
     @yield('sidebar')     

    <div class="container">
      
      @yield('content')
      
    </div>
    
    <div class="footer">
      @yield('footer')
    </div>
  </body>
</html>