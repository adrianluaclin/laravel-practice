<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog Home - Start Bootstrap Template</title>

   <!-- Bootstrap core JavaScript -->
   <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
   <script src="{{ asset('js/app.js') }}" ></script>

  <!-- Custom styles for this template -->
  <link href="{{asset('css/app.css')}}" rel="stylesheet">

  <link href="{{asset('css/blog-home.css')}}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <h1 class="navbar-brand">Laravel Project Example</h1>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main>
   
    @yield('content')

    <aside>
        <!-- Search Widget -->
        <div class="card my-4">
        <h5 class="card-header">Search</h5>
        <div class="card-body">
            <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
            </span>
            </div>
        </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
                <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                    <li>
                        <a href="https://www.w3schools.com/php/default.asp">PHP</a>
                    </li>
                    <li>
                        <a href="https://www.w3schools.com/html/default.asp">HTML</a>
                    </li>
                    <li>
                        <a href="https://www.w3schools.com/sql/default.asp">SQL</a>
                    </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                    <li>
                        <a href="https://www.w3schools.com/js/default.asp">JavaScript</a>
                    </li>
                    <li>
                        <a href="https://www.w3schools.com/css/default.asp">CSS</a>
                    </li>
                    <li>
                        <a href="https://www.w3schools.com/java/default.asp">Java</a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
                You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
            </div>
        </div>

    </aside>

 </main>
  
  <!-- Footer -->
 <footer class="py-5 bg-dark">
    <p class="m-0 text-center text-white">Copyright &copy; Laravel Practice 2021</p>
 </footer>
</body>

</html>
