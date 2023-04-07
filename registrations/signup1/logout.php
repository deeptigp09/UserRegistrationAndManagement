<?php
session_start();
session_destroy();
// header('location:login.php');

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Logout Page</title>
  </head>
  <body>
	<div class="alert alert-success" role="alert">
  <h4 class=" text-center alert-heading">Success</h4>
  <p class= "text-center">Logged Out.</p>
  <hr>
</div>

 </body>
</html>

