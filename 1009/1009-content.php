<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
        <div class="type-19">
            <div class="container">
                <div class="row">
                    <div class="content">
                        <div class="col-md-6">
                            <!--OUT-->
                            <span class="out">
                                Our price
                            </span>
                            <div class="product-price" >
                                <span class="woocommerce-Price">
                                    <span class="woocommerce">£</span>600.00
                                </span>
                                <span class="woocommerce-Price1">
                                    <span class="woocommerce1">£</span>560.00
                                </span>
                                <!--INS-->
                                <div class="ins">
                                    <span><i class="fa fa-check" aria-hidden="true"></i></span>
                                    <span>INSTOCK</span>
                                </div>
                                <div class="fa1">
                                    <a href="#"> <i class="fa fa-star" aria-hidden="true"></i>  </a>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    <a href="#">(2 customer reviews)</a>
                                    <!--PRODUCT-->
                                    <h3 class="produt">
                                        <span class="produt1">
                                            PRODUCT DESCRIPTION
                                        </span>
                                        <div class="duongvien"></div>
                                    </h3>
                                    <p>Ut enim ad minim veniam quis nostrud exercita tion ullamco laboris nisi aliquip exa commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                                    <h3 class="produt">
                                        <span class="produt1">
                                            QUANTITY
                                        </span>
                                        <div class="duongvien"></div>

                                    </h3>
                                    <!--spinner-->
                                    <div class="input-group spinner">
                                        <input type="text" class="form-control" value="1" min="0" max="10000">
                                        <div class="input-group-btn-vertical">
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                        </div>
                                    </div>
                                    <div class="bnt-add">
                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                        <button type="submit" class="btn btn-cart-color2">ADD TO CARD</button>
                                    </div>
                                    <div class="edd-to">
                                        <a href="#">ADD TO WISHLIST </a>
                                    </div>
                                    <h3 class="produt">
                                        <span class="produt1">
                                            CATEGORIES
                                        </span>
                                        <div class="duongvien"></div>
                                    </h3>
                                    <div class="tags-list">
                                        <ul>
                                            <li><a>ACCESSORIES</a></li>
                                            <li><a>CARRIER</a></li>
                                            <li><a>PHONES</a></li>
                                            <li><a>CASES</a></li>
                                            <li><a>EXCLUSIVE</a></li>
                                            <li><a>PHONES</a></li>
                                            <li><a>UNLOCKED</a></li>
                                            <li><a>PHONES</a></li>
                                        </ul>
                                    </div>
                                    <div class="clear" style="clear: both;"></div>
                                    <h3 class="produt">
                                        <span class="produt1">
                                            SHARE
                                        </span>
                                        <div class="duongvien"></div>
                                    </h3>
                                    <!--ICON SOCIAL-->
                                    <div class="clear" style="clear: both;"></div>
                                    <div class="social-list">
                                        <a href="#" title="facebook"> <i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                                        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>