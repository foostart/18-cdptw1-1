
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/styles.less', 'css/styles.css');
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="js/bootstrap.min.js"/>

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
                            <div class="b-breadcrumbs pull-right hidden-xs ">
                                <ul class="list-unstyled">
                                    <li><a href="#">Home></a></li>
                                    <li><a href="#">Accessories ></a></li>
                                    <li><a style="text-decoration: none;color: #888888; " href="#">Apple iPhone 6s Plus</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--END HERDER-->
            </div>
        </div>
    </body>
</html>