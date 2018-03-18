<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Store Page</title>

    <?php $activeLink = 2; ?>
    <?php include_once("templates/_includes.php"); ?>
    <link rel="stylesheet" href="dist/css/lightbox.min.css">
    <meta
    name="description"
    content="Browse our invetory of over 100 music categories and top notch quality instruments"
    />
    <meta name="keywords"
      content="choral, shop, store, buy, creditcard, paypal" />
    <meta name="author" content="Stefan Kupresak" />
  </head>
  <body>
    <?php include_once("templates/_navigation.php"); ?>
    <div class='container push-from-top'>
      <div class='row'>
        <div class='col-lg-4'>
          <h1>Categories</h1>
            <ul id="navBar" class='list-group'>
              <li class='list-group-item d-flex justify-content-between align-items-center'>
                <a href='#' data-target='svi'>All</a>
                <span class='badge badge-green badge-pill normal-font'>30</span>
              </li>
              <li class='list-group-item d-flex justify-content-between align-items-center'>
                <a href='#' data-target='gitare'>Guitars</a>
                <span class='badge badge-green badge-pill normal-font'>6</span>
              </li>
              <li class='list-group-item d-flex justify-content-between align-items-center'>
                <a href='#' data-target='bass_gitare'>Bass Guitars</a>
                <span class='badge badge-green badge-pill normal-font'>6</span>
              </li>
                <li class='list-group-item d-flex justify-content-between align-items-center'>
                    <a href='#' data-target='bubnjevi'>Drums</a>
                    <span class='badge badge-green badge-pill normal-font'>6</span>
                </li>
                <li class='list-group-item d-flex justify-content-between align-items-center'>
                    <a href='#' data-target='ploce'>Phonograph records</a>
                    <span class='badge badge-green badge-pill normal-font'>6</span>
                </li>
                <li class='list-group-item d-flex justify-content-between align-items-center'>
                    <a href='#' data-target='oprema'>Utilities</a>
                    <span class='badge badge-green badge-pill normal-font'>6</span>
                </li>
            </ul>
            <form id="search-form">
              <div class="form-row search-form">
                <div class="col-9">
                  <input type="text" class="form-control" placeholder="Search..." />
                </div>
                <div class="col-2">
                  <button type="submit" class='btn btn-primary'>Search</button>
                </div>
              </div>
            </form>
        </div>
        <div class='col-lg-8' id="shop">
          <div class='my-slider'>
            <img src='/images/slider-1.jpg' alt='slide-1' />
            <img src='/images/slider-2.jpg' alt='slide-2' />
            <img src='/images/slider-3.jpg' alt='slide-3' />
          </div>
          <div class="row" id="produkti">
          </div>
        </div>
      </div>
    </div>

    <footer class='main-footer-dark'>
      <p class='text-center'>Open Source software under MIT licence<p>
      <p class='text-center'><span>Stefan Kupresak</span> | <a href="http://www.bluegrid.io/" target="_blank">Blue Grid Doo</a> | <a href="https://github.com/dev-cyprium/web-programming-ict" target="_blank"> GitHub</a></p>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="dist/js/lightbox.min.js"></script>
    <script src="js/slajder.js"></script>
    <script src="js/proizvodi.js"></script>
  </body>
</html>
