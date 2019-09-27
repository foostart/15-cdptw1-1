<?php

$url_host = 'http://' . $_SERVER['HTTP_HOST'];
 $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
 $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
 $url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1223">
    <!--onlineSupport-->
    <div class="onlineSupport">
        <!--TEXT-->
        <div class="container text-center center">
            <a href="#" class="Button">LIÊN HỆ NGAY VỚI CHÚNG TÔI</a>
            <span>Hotline 0982.956.427</span>
        </div>
        <!--/TEXT-->
    </div>
    <!--end onlineSupport-->
     <div class=" row clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-10 ">
                    <div class="col-md-2 col-xs-4">
                        <div class="widget">
                            <h3>Test</h3>
                            <ul>
                                <li>
                                    <a href="#">test</a>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="#">test</a>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="#">test</a>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="#">test</a>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="#">test</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-4">
                        <div class="widget">
                             <h3>Test</h3>
                            <ul>
                                <li>
                                    <a href="#">test</a>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="#">test</a>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="#">test</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-4">
                        <div class="widget">
                            <h3>Test</h3>
                            <ul>
                                <li>
                                    <a href="#">test</a>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="#">test</a>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="#">test</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-4">
                        <div class="widget">
                            <h3>Test</h3>
                            <ul>
                                <li>
                                    <a href="#">test</a>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="#">test</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-4">
                        <div class="widget">
                            <h3>Test</h3>
                            <ul>
                                <li>
                                    <a href="#">test</a>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="#">test</a>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="#">test</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 ">
                    <div class="footer">
                        <div class="line"></div>
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="fb-comments">
                            <div class="fb_iframe_widget">
                                <span>
                                    <iframe src="./images/fb.jpg" ></iframe>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>