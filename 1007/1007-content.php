
<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
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