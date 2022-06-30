<?php include './libs/load.php' ?>

<!doctype html>
<html lang="en">
  <head>
    <?php load_template('_head');?>
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
