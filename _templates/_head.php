    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Photogram</title>
    
    <!-- Bootstrap core CSS -->
    <link href="../photogram/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS for each page -->
    <?php if(file_exists($_SERVER['DOCUMENT_ROOT']."/photogram/css/".basename($_SERVER['PHP_SELF'],".php" ).".css")) {?>
    <link href= <?="/photogram/css/".basename($_SERVER['PHP_SELF'],".php").".css"?> rel="stylesheet" >
     <?php } ?>
