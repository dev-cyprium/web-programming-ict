<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Store Page</title>

    <?php $activeLink = 2; ?>
    <?php include_once("templates/_includes.php"); ?>
  </head>
  <body>
    <?php include_once("templates/_navigation.php"); ?>
    <div class='container push-from-top'>
      <div class='row'>
        <div class='col-lg-4'>
          <h1>Categories</h1>
            <ul class='list-group'>
              Instruments
              <li class='list-group-item d-flex justify-content-between align-items-center'>
                Guitars
                <span class='badge badge-green badge-pill normal-font'>20</span>
              </li>
              <li class='list-group-item d-flex justify-content-between align-items-center'>
                Bass Guitars
                <span class='badge badge-green badge-pill normal-font'>8</span>
              </li>
            </ul>
        </div>
        <div class='col-lg-8' id="shop">
          <div class='my-slider'>
            <img src='/images/slider-1.jpg' alt='slide-1' />
            <img src='/images/slider-2.jpg' alt='slide-2' />
            <img src='/images/slider-3.jpg' alt='slide-3' />
          </div>
          <div class="row">
            <div class="col-lg-4">
              <div class="card h-100">
                <div class="card-body">
                  <h4 class="class-title">Product</h4>
                  <h5>24.54$</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card h-100">
                <a href="#">
                  <img class="card-img-top" src="images/g1.jpg" />
                </a>
                <div class="card-body">
                  <h4 class="class-title">Product</h4>
                  <h5>24.54$</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">★ ★ ★ ★ ☆</small>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card h-100">
                <div class="card-body">
                  <h4 class="class-title">Product</h4>
                  <h5>24.54$</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4">
              <div class="card h-100">
                <div class="card-body">
                  <h4 class="class-title">Product</h4>
                  <h5>24.54$</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card h-100">
                <div class="card-body">
                  <h4 class="class-title">Product</h4>
                  <h5>24.54$</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card h-100">
                <div class="card-body">
                  <h4 class="class-title">Product</h4>
                  <h5>24.54$</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="slajder.js"></script>
    <script src="proizvodi.js"></script>
  </body>
</html>
