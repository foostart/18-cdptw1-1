<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/swiper.css">
    <?php
    if (!class_exists('lessc')) {
        include('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/styles.less', 'css/styles.css');
    ?>
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="js/scripst.js" type="text/javascript"></script>
    <script src="js/swiper.min.js" type="text/javascript"></script>


</head>
<body>
    <?php include $dir_block.'/1008-content.php'; ?>
</body>

</html>