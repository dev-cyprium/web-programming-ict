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

    <!-- My Own CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Mobile configuration -->
    <meta name='viewport' content='width=device-width, initial-scale=1'>


    <!-- Favicon -->
    <link rel="shortcut icon" type="image/ico" href="/favicon.ico">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top border-bottom-black">
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
            <p class='text-justify'>Very large invetory of musical instruments including top brand guitars, drums, bass guitars.</p>
            <a href='#' class='btn btn-primary d-block mx-auto main-link'>Instruments</a>
          </div>
          <div class="col">
            <h1 class='text-center'>Music</h1>
            <p class='text-justify'>Tons of retro music records, with perserved records dating back to 50's</p>
            <a href='#' class='btn btn-primary d-block mx-auto main-link'>Music</a>
          </div>
          <div class="col">
            <h1 class='text-center'>Utilities</h1>
            <p class='text-justify'>Guitar picks, amps, cables, mixers. You name it, we have it!</p>
            <a href='#' class='btn btn-primary d-block mx-auto main-link'>Utilities</a>
          </div>
        </div>
      </div>
    </main>
    <footer class='main-footer-dark'>
      <p class='text-center'>Open Source softwere under MIT licence<p>
      <p class='text-center'><span>Stefan Kupresak</span> | <a href="http://www.bluegrid.io/" target="_blank">Blue Grid Doo</a> | <a href="https://github.com/dev-cyprium/web-programming-ict" target="_blank"> GitHub</a></p>
    </footer>
  </body>
</html>
