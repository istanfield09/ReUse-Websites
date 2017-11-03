<?php
  /**********************************************************************
  *          Session set up
  **********************************************************************/

  /* error check */
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  /* start session */
  session_start();
  include("checkSession.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Corvallis Reuse and Repair Directory: Web Portal</title>
  <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
  <link href="css/customStylesheet.css" type="text/css" rel="stylesheet">
  <link href="css/media.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Rubik:700' rel='stylesheet' type='text/css'>
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/searchCatFunct.js"></script>
  </head>
  <body>

  <?php include("nav.php"); ?>

  <div class="container-fluid">
      <div class="row">
          <div class="col-xs-12 col-md-12">
              <br/>
              <h3>Edit Category</h3>
          </div>
      </div>
  </div>


  </body>
</html>
