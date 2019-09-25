<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <?php
    if (!class_exists('lessc')) {
        include('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/styles.less', 'css/styles.css');
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="js/bootstrap.min.js"/>
    <link rel="stylesheet" type="text/css" href="js/jquery.min.js"/>

</head>

<body>
    <div class="type-17">
        <div class="container">
            <!--HERDER-->
            <div class="herder">
                <div class="row">
                    <div class="col-md-7">
                        <!--TITLE--->
                        <h3 class="title">Apple iPhone 6s Plus</h3>
                    </div>
                    <div class="col-md-5">
                        <!--NAV-->
                        <nav class="navbar navbar-inverse navbar-default affix" data-spy="affix" data-offset-top="50">
                            <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                                <div id="navbar" class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav">
                                        <li><a href="#">HOME &gt;</a></li>
                                        <li class="dropdown mega-dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">ACCESSORIES &gt;</a>
                                        </li>
                                        <li><a href="#page" style="color: gray;">APPLE IPHONE 6 PLUS</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <!--END HERDER-->
        </div>
    </div>
</body>

</html>