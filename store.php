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
          
        </div>
      </div>
    </div>
  </body>
</html>
