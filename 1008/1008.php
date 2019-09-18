<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/styles.less', 'css/styles.css');
        ?>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/scripst.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="type-18">
            <div class="container">
                <!--HERDER-->
                <div class="row">
                    <div class="col-md-3">
                        <!--FORM--->
                        <h3 class="produt1">
                            <span class="produt2">
                                SEARCH PRPDUCT
                            </span>
                            <div  class="duongvien"></div>
                        </h3>
                        <form class="form" >
                            <input  type="text" placeholder="Search..">
                        </form>
                        <!--PRODUCTS CATEGORIES --->
                        <h3 class="produt1">
                            <span class="produt2">
                                PRODUCTS CATEGORIES
                            </span>
                            <div  class="duongvien"   ></div>
                        </h3>
                        <div class="produt3">

                            <a href="#">Accessories</a>
                            <a href="#">Carrier Phones</a>
                            <a href="#">Cases</a>
                            <a href="#">Exclusive Phones</a>
                            <a href="#">Unlocked Phones</a>
                        </div>
                        <!--PRODUCTS CATEGORIES --->
                        <h3 class="produt1">
                            <span class="produt2">
                                TOP RATED PRODUCTS
                            </span>
                            <div  class="duongvien"></div>
                        </h3>
                        <div class="product-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="myCarousel" class="vertical-slider carousel vertical slide" data-ride="carousel">
                                        <span data-slide="next" class="btn-vertical-slider fa fa-angle-right "
                                              ></span>  
                                        <br />
                                        <!-- Carousel items -->
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <div class="row">
                                                    <div class="col-xs-6 col-sm-5 col-md-5">
                                                        <a href="#"> <img src="images/1.jpg" style="width: 100%;" 
                                                                          alt="Image" /></a>
                                                    </div>
                                                    <div class="noidung">
                                                        <div class="txt">
                                                            <strong>SAMSUNG GALAXY S5</strong>
                                                            <br>
                                                            <strong class="fa-staro">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star-half-o" aria-hidden="true"></i>    
                                                            </strong>
                                                        </div>
                                                        <div class="woocommerce-Price1">
                                                            <a class="money">£875.00
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="ngang">
                                                <div class="row">
                                                    <div class="col-xs-6 col-sm-5 col-md-5">
                                                        <a href="#"> <img src=images/2.jpg style="width: 100%;" 
                                                                          alt="Image" /></a>
                                                    </div>
                                                    <div class="noidung1">
                                                        <div class="txt">
                                                            <strong>APPLE IPHONE 6S PLUS </strong>
                                                            <br>
                                                            <strong class="fa-staro">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star-half-o" aria-hidden="true"></i>    
                                                            </strong>
                                                        </div>
                                                        <div class="woocommerce-Price1">
                                                            <del><a class="money">£875.00</a></del>
                                                            <span><a class="moneyone" href="#">£560.00</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="ngang">
                                                <div class="row">
                                                    <div class="col-xs-6 col-sm-5 col-md-5">
                                                        <a href="#"> <img src="images/3.jpg" style="width: 100%;" 
                                                                          alt="Image" /></a>
                                                    </div>
                                                    <div class="noidung2">
                                                        <div class="txt">
                                                            <strong>
                                                                MOTO G PLUS (4TH GEN.)</strong>
                                                        </div>
                                                        <div class="woocommerce-Price1">
                                                            <span class="moneyone" > £456.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="ngang">

                                                <!--/row-fluid-->
                                            </div>
                                            <div class="item ">
                                                <div class="row">
                                                    <div class="col-xs-6 col-sm-5 col-md-5">
                                                        <a href="#"> <img src="images/4.jpg" style="width: 100%;" 
                                                                          alt="Image" /></a>
                                                    </div>
                                                    <div class="noidung5">
                                                        <div class="txt">
                                                            <strong>ORBIC SLIME</strong><br>
                                                            <del></span><a class="money">£600.00</a></del>
                                                            <span><a class="moneyone" href="#">£456.00</a></span>
                                                        </div>

                                                    </div>
                                                </div>
                                                <hr class="ngang">
                                                <div class="row">
                                                    <div class="col-xs-6 col-sm-5 col-md-5">
                                                        <a href="#"> <img src="images/2.jpg" style="width: 100%;" 
                                                                          alt="Image" /></a>
                                                    </div>
                                                    <div class="noidung6">
                                                        <div class="txt">
                                                            <strong>
                                                                LG OPTIMUS ZONE </strong>
                                                            <br>
                                                            <a class="money">£456.00</a>
                                                        </div>

                                                    </div>
                                                </div>
                                                <hr class="ngang">
                                                <div class="row">
                                                    <div class="col-xs-6 col-sm-5 col-md-5">
                                                        <a href="#"> <img src="images/3.jpg" style="width: 100%;" 
                                                                          alt="Image" /></a>
                                                    </div>
                                                    <div class="noidung">
                                                        <div class="txt">
                                                            <strong>
                                                                SAMSUNG GALAXY S5 </strong>
                                                            <br>
                                                            <strong class="fa-staro">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star-half-o" aria-hidden="true"></i>    
                                                            </strong>
                                                        </div>
                                                        <div class="woocommerce-Price1">
                                                            <a class="money">£875.00</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="ngang">
                                                <!--/row-fluid-->
                                            </div>
                                            <!--/item-->
                                        </div>

                                        <span data-slide="prev" class="btn-vertical-slider fa fa-angle-left"
                                              ></span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--PRPDUCT TAGS --->
                        <h3 class="produt1">
                            <span class="produt2">
                                PRPDUCT TAGS
                            </span>
                            <div  class="duongvien"></div>
                        </h3>
                        <div class="tang">
                            <a href="#">ACCESSONRIES</a>
                            <a href="#">ANDROID</a>
                            <a href="#">APPLE</a>
                            <a href="#">CASES</a>
                            <a href="#">ENVATO</a>
                            <a href="#">IPHONE</a>
                            <a href="#">NEXUS</a>
                            <a href="#">NOKIA</a>
                            <a href="#">PREMIUM</a>
                            <a href="#">SAMSUNG</a>
                            <a href="#">SMART</a>
                            <a href="#">ULOCKED</a>
                        </div>
                    </div>
                </div>
            </div>  
            <!--END HERDER-->
            <script src="js/bootstrap.min.js" type="text/javascript"></script>
        </div>
    </body>
</html>