<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home – STEEL</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/827.less', 'css/827.css');
        ?>
        <link href="css/827.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type-827">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class=" wpb_row slider-wrapper">  
                            <div class="carousel slide" data-ride="carousel">
                                <div class=" camera_wrap camera_azure_skin">
                                    <div class="camera_target">
                                        <div class="cameraCont">
                                            <div class="carousel-inner">
                                                <div class="item active">
                                                    <img src="images/slider-3.jpg" class="imgLoaded" alt="images/slider-3">
                                                    <div class="camerarelative" ></div>
                                                    <div class=" carousel-caption">
                                                        <h1>ALL KINDS OF STEEL PRODUCTS</h1>
                                                        <p>Donec porta diam eumassauisque diam lorem interdum vitae dapibus ac scelerisque vitae pede onec porta diam eu massauisque diam lorem interdum vitae dapibus ac scelerisque vitae pede.</p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <img src="images/slider-1.jpg" class="imgLoaded" alt="images/slider-1">
                                                    <div class="camerarelative"></div>
                                                    <div class="carousel-caption">
                                                        <h1>STEEL’S BRANDED PRODUCTS AND SOLUTIONS</h1>
                                                        <p>Donec porta diam eumassauisque diam lorem interdum vitae dapibus ac scelerisque vitae pede onec porta diam eu massauisque diam lorem interdum vitae dapibus ac scelerisque vitae pede.</p>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <img src="images/slider-2.jpg" class="imgLoaded" alt="images/slider-2">
                                                    <div class="camerarelative"></div>
                                                    <div class="carousel-caption">
                                                        <h1>OUR MAIN GOAL IS CONTINUOUSLY SATISFY OUR CLIENTS</h1>
                                                        <p>Donec porta diam eumassauisque diam lorem interdum vitae dapibus ac scelerisque vitae pede onec porta diam eu massauisque diam lorem interdum vitae dapibus ac scelerisque vitae pede.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="camera_prev" href="#carousel-example-generic" data-slide="prev"><span></span></div>
                                    <div class="camera_next" href="#carousel-example-generic" data-slide="next" ><span></span></div>
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active">
                                            <span><span>0</span></span>
                                        </li>
                                        <li data-target="#carousel-example-generic" data-slide-to="1">
                                            <span><span>1</span></span>
                                        </li>
                                        <li data-target="#carousel-example-generic" data-slide-to="2">
                                            <span><span>2</span></span>
                                        </li>
                                    </ol>
                                    <div class="timer"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(function () {

                // slider type
                $t = "imgLoaded"; // opitions are fade and slide

                //variables
                $f = 1000, // fade in/out speed
                        $s = 1000, // slide transition speed (for sliding carousel)
                        $d = 5000;  // duration per slide

                $n = $('.imgLoaded').length; //number of slides
                $w = $('.imgLoaded').width(); // slide width
                $c = $('.container').width(); // container width
                $ss = $n * $w; // slideshow width


                function timer() {
                    $('.timer').animate({"width": $w}, $d);
                    $('.timer').animate({"width": 0}, 0);
                }


                // fading function
                function fadeInOut() {
                    timer();
                    $i = 0;
                    var setCSS = {
                        'position': 'absolute',
                        'top': '0',
                        'left': '0'
                    }

                    $('.imgLoaded').css(setCSS);

                    //show first item
                    $('.imgLoaded').eq($i).show();


                    setInterval(function () {
                        timer();
                        $('.imgLoaded').eq($i).fadeOut($f);
                        if ($i == $n - 1) {
                            $i = 0;
                        } else {
                            $i++;
                        }
                        $('.imgLoaded').eq($i).fadeIn($f, function () {
                            $('.timer').css({'width': '0'});
                        });

                    }, $d);

                }

                function slide() {
                    timer();
                    var setSlideCSS = {
                        'float': 'left',
                        'display': 'inline-block',
                        'width': $c
                    }
                    var setSlideShowCSS = {
                        'width': $ss // set width of slideshow container
                    }
                    $('.imgLoaded').css(setSlideCSS);
                    $('.carousel-inne').css(setSlideShowCSS);


                    setInterval(function () {
                        timer();
                        $('.carousel-inne').animate({"left": -$w}, $s, function () {
                            // to create infinite loop
                            $('.carousel-inne').css('left', 0).append($('.imgLoaded:first'));
                        });
                    }, $d);

                }

                if ($t == "fade") {
                    fadeInOut();

                }
                if ($t == "imgLoaded") {
                    slide();

                } else {

                }
            });
        </script>
    </body>
</html>