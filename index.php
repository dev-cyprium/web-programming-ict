<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Music Shop</title>

    <!-- jQuery google CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Bootstrap 4.0 from MAXCDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">

    <meta name='viewport' content='width=device-width, initial-scale=1'>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        Music Store
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation" >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href='#'>Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href='#'>Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href='#'>Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href='#'>Author</a>
          </li>
        </ul>
      </div>
    </nav>
    <header class='header-image'>
      <div class="name-wrapper">
        <h1 class='text-center'>Choral</h1>
        <h2 class='text-center'>Music Shop</h2>
      </div>
    </header>
    <div class="content-divider"></div>
    <main id="main-content">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1 class='text-center'>Instruments</h1>
            <p>Very large invetory of musical instruments including top brand guitars, drums, bass guitars.</p>
            <a href='#' class='btn btn-primary d-block mx-auto main-link'>Instruments</a>
          </div>
          <div class="col">
            <h1 class='text-center'>Music</h1>
            <p>Tons of retro music records, with perserved records dating back to 50's</p>
            <a href='#' class='btn btn-primary d-block mx-auto main-link'>Music</a>
          </div>
          <div class="col">
            <h1 class='text-center'>Utilities</h1>
            <p>Guitar picks, amps, cables, mixers. You name it, we have it!</p>
            <a href='#' class='btn btn-primary d-block mx-auto main-link'>Utilities</a>
          </div>
        </div>
      </div>
    </main>
    <footer class='main-footer-dark'>
      <p class='text-center'>Open Source softwere under MIT licence<p>
      <p class='text-center'>Stefan Kupresak | <a href="www.bluegrid.io">Blue Grid Doo</a></p>  
    </footer>
  </body>
</html>
