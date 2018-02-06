<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Music Shop</title>

    <?php $activeLink = 1; ?>
    <?php include_once("templates/_includes.php"); ?>
  </head>
  <body>
    <?php include_once("templates/_navigation.php"); ?>
    <header class='header-image'>
      <div class="name-wrapper">
        <h1 class='text-center'>Choral</h1>
        <h2 class='text-center'>Music Shop</h2>
      </div>
    </header>
    <main id="main-content">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1 class='text-center'>Instruments</h1>
            <p class='text-justify'>Very large invetory of musical instruments including top brand guitars, drums, bass guitars.
              Also, choose any color or upload an image, and we'll customize the instrument for you.
            </p>
            <a href='#' class='btn btn-primary d-block mx-auto main-link'>Instruments</a>
          </div>
          <div class="col">
            <h1 class='text-center'>Music</h1>
            <p class='text-justify'>
              Tons of retro music records, with perserved records dating back to 50's.
              Including <strong>Elvis Presley</strong>, <strong>The Beatles</strong>, <strong>The Crows</strong>
              and many more.
            </p>
            <a href='#' class='btn btn-primary d-block mx-auto main-link'>Music</a>
          </div>
          <div class="col">
            <h1 class='text-center'>Utilities</h1>
            <p class='text-justify'>
              Heavily customizable accessories every musician need.
              Guitar picks, amps, cables, mixers, drum sticks. You name it, we have it!
            </p>
            <a href='#' class='btn btn-primary d-block mx-auto main-link'>Utilities</a>
          </div>
        </div>
      </div>
      <div class='container-fluid notes-container'>
        <?php echo file_get_contents("images/icon.svg"); ?>
        <?php echo file_get_contents("images/icon.svg"); ?>
        <?php echo file_get_contents("images/icon.svg"); ?>
        <a href='#' class='btn btn-primary d-block mx-auto get-started'>Get Started</a>
      </div>
    </main>
    <footer class='main-footer-dark'>
      <p class='text-center'>Open Source softwere under MIT licence<p>
      <p class='text-center'><span>Stefan Kupresak</span> | <a href="http://www.bluegrid.io/" target="_blank">Blue Grid Doo</a> | <a href="https://github.com/dev-cyprium/web-programming-ict" target="_blank"> GitHub</a></p>
    </footer>
  </body>
</html>
