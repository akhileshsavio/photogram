<?php include './libs/load.php' ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Photogram</title>
    <!-- Bootstrap core CSS -->
    <link href="../photogram/assets/dist/css/bootstrap.min.css" rel="stylesheet">
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
    
    <header>
      <?php load_template('_header');?>
    </header>

    <main>
      <?php load_template('_main_hero') ?>
      <?php load_template('_main_timeline') ?>
    </main>
    
    <footer class="text-muted py-5">
      <?php load_template('_footer')?>
    </footer>

    <script src="../photogram/assets/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
