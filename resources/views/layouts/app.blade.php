<!doctype html>
<html lang="en">
  <head>
    <title>SimpApp</title>
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    @include('inc.navbar')
      <div class="container mt-3">
        @if(Request::is('/'))
          @include('inc.showcase')
        @endif
          <div class="row">
              <div class="col-md-4 col-lg-4">
                    @include('inc.sidebar')  
              </div>
              <div class="col-md-8 col-lg-8">
                    @yield('content')
              </div>
          </div>
      </div>
      <footer id="footer" class="text-center">
        <p>Copyrights 2018 &copy; simpApp</p>
      </footer>
  </body>
</html>