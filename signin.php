<?php include './libs/load.php' ?>

<!doctype html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <title>Signin into Photogram</title>
    <!-- Bootstrap core CSS -->
    <link href="../photogram/assets/dist/css/bootstrap.min.css" rel="stylesheet">
     <!-- Custom styles for this template -->
     <link rel="stylesheet" href="./css/signin.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

  </head>

  <body>
    <?php load_template('_login') ?>
    <script src="../photogram/assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  
</html>
