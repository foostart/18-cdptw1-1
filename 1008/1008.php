<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
        require_once($dir_block.'/libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/1008.less', 'css/1008.css');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Module 1008</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/swiper.css">

    <link href="css/1008.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="js/1008.js" type="text/javascript"></script>
    <script src="js/swiper.min.js" type="text/javascript"></script>


</head>
<body>
    <?php include $dir_block.'/1008-content.php'; ?>
</body>

</html>