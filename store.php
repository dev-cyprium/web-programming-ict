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
            <li class="list-group-item">
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
            </li>
          </ul>
        </div>
        <div class='col-lg-8'>
          <div class='my-slider'>
            <img src='/images/slider-1.jpg' alt='slide-1' />
            <img src='/images/slider-2.jpg' alt='slide-2' />
            <img src='/images/slider-3.jpg' alt='slide-3' />
          </div>
        </div>
        <button id="next">Next</button>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="slajder.js"></script>
  </body>
</html>
