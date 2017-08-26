<?php
  if (isset($_POST) && !empty($_POST)) {
    //print_r($_POST);
    if ($_POST['submit']) {
      if (file_exists("uploads/" . $_FILES["file"]["name"])){
      //echo $_FILES["file"]["name"] . " already exists. ";
      }
      else{
        move_uploaded_file($_FILES["file"]["tmp_name"],
        "uploads/" . $_FILES["file"]["name"]);
        //echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
      }
    }
    //$_POST = null;
    //print_r($_POST);
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <style type="text/css">
      ul {
        list-style-type: none;
      }
      ul li{
        max-height: 100px;
        overflow: hidden
      }
      .name {
        font-weight: bold;
      }
      .web {
        color: blue;
      }
      img {
        width: 2.5em;
        height: 2.5em;
        display: inline;
        margin-right: 1.5em;
      }
      .ministry {
        font-weight: bold;
        font-size: 1.5em;
      }
    </style>
  </head>
  <body>
    <div class="row">
      <div id='content' class="col-md-6 ml-md-auto mr-md-auto">
        <form action="" method="POST" enctype="multipart/form-data">
          <input type="file" name="file">
          <input type="submit" name="submit">
        </form>
      </div>
    </div>

    <h1 class="col-md-6 ml-md-auto mr-md-auto">Ministries and Federal Parastatals</h1>

    <div class="row">
      <div id='content' class="col-md-6 ml-md-auto mr-md-auto">
        <ul id='items'></ul>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="jquery-3.2.1.min.js"></script>
    <script src="readmore.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="item_display.js"></script>
    </script>
  </body>
</html>