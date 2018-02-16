<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
      <?php include_once("templates/_includes.php"); ?>
  </head>
  <body class='container'>
    <h1>Time left: <span id="time">00:03:00</span><h1>
    <button id="start" class='btn btn-primary'>Start / Continue</button>


    <script>
      $(document).ready(function() {
        $("#start").click(function() {

          if($(this).hasClass('disabled')) {
            return;
          }

          $.ajax({
            method: "get",
            url: "/ajax.php"
          }).done(function(json) {
            var time  = json.time;
            var limit = time + 2*60*60;

            $("#start").addClass("disabled");
            setInterval(function(){
              var unix = Math.round((new Date()).getTime() / 1000);
              var timeLeft = limit - unix;
              var date = new Date(timeLeft*1000);
              var hours   = date.getHours();
              var minutes = date.getMinutes();
              var seconds = date.getSeconds();
              hours   = hours.toString().padStart(2, "0");
              minutes = minutes.toString().padStart(2, "0");
              seconds = seconds.toString().padStart(2, "0");
              var final = hours + ":" + minutes + ":" + seconds;
              $("#time").text(final);
            }, 1000);
          });
        });
      });
    </script>
  </body>
</html>
