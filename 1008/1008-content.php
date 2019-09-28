<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
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
                        <div class="duongvien"></div>
                    </h3>
                    <form class="form">
                        <input type="text" placeholder="Search..">
                    </form>
                    <!--PRODUCTS CATEGORIES --->
                    <h3 class="produt1">
                        <span class="produt2">
                            PRODUCTS CATEGORIES
                        </span>
                        <div class="duongvien"></div>
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
                        <div class="duongvien"></div>
                    </h3>
                    <div class="product-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="myCarousel" class="vertical-slider carousel vertical slide" data-ride="carousel">
                                    <br />
                                    <!-- Carousel items -->

                                    <div class="carousel-inner">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="item active">
                                                        <div class="row">
                                                            <div class="col-xs-6 col-sm-5 col-md-5">
                                                                <a href="#"> <img src="images/1.jpg" style="width: 100%;" alt="Image" /></a>
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
                                                                <a href="#"> <img src=images/2.jpg style="width: 100%;" alt="Image" /></a>
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
                                                                <a href="#"> <img src="images/3.jpg" style="width: 100%;" alt="Image" /></a>
                                                            </div>
                                                            <div class="noidung2">
                                                                <div class="txt">
                                                                    <strong>
                                                                        MOTO G PLUS (4TH GEN.)</strong>
                                                                </div>
                                                                <div class="woocommerce-Price1">
                                                                    <span class="moneyone"> £456.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr class="ngang">
                                                        <!--/row-fluid-->
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="item active">
                                                        <div class="row">
                                                            <div class="col-xs-6 col-sm-5 col-md-5">
                                                                <a href="#"> <img src="images/1.jpg" style="width: 100%;" alt="Image" /></a>
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
                                                                <a href="#"> <img src=images/2.jpg style="width: 100%;" alt="Image" /></a>
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
                                                                <a href="#"> <img src="images/3.jpg" style="width: 100%;" alt="Image" /></a>
                                                            </div>
                                                            <div class="noidung2">
                                                                <div class="txt">
                                                                    <strong>
                                                                        MOTO G PLUS (4TH GEN.)</strong>
                                                                </div>
                                                                <div class="woocommerce-Price1">
                                                                    <span class="moneyone"> £456.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr class="ngang">
                                                        <!--/row-fluid-->
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="item active">
                                                        <div class="row">
                                                            <div class="col-xs-6 col-sm-5 col-md-5">
                                                                <a href="#"> <img src="images/1.jpg" style="width: 100%;" alt="Image" /></a>
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
                                                                <a href="#"> <img src=images/2.jpg style="width: 100%;" alt="Image" /></a>
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
                                                                <a href="#"> <img src="images/3.jpg" style="width: 100%;" alt="Image" /></a>
                                                            </div>
                                                            <div class="noidung2">
                                                                <div class="txt">
                                                                    <strong>
                                                                        MOTO G PLUS (4TH GEN.)</strong>
                                                                </div>
                                                                <div class="woocommerce-Price1">
                                                                    <span class="moneyone"> £456.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr class="ngang">
                                                        <!--/row-fluid-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--PRPDUCT TAGS --->
                    <h3 class="produt1">
                        <span class="produt2">
                            PRPDUCT TAGS
                        </span>
                        <div class="duongvien"></div>
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
        <script type="text/javascript">
            var swiper = new Swiper('.swiper-container');
        </script>
    </div>