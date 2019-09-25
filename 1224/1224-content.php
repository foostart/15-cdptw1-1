<?php

 $url_host = 'http://' . $_SERVER['HTTP_HOST'];
 $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
 $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

 preg_match_all($pattern_uri, __DIR__, $matches);
 $url_path = $url_host . $matches[1][0];
 $url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-e-1224">

    <!--HEADING-->
    <div class="top-header" style="background-image: url('<?php echo $url_path ?>/images/page-title-bg.jpg')"
         data-stellar-background-ratio="0.3" >
        <div class="tem">DỰ ÁN THỰC TẾ ĐÃ HOÀN THÀNH</div>
        <div class="border"></div>
        <div class="name">
            <a href="#">Trang chủ</a> / <a href="#">Dự án</a>
        </div>
    </div>

    <!--CONTENT-->
    <div class="container rescure">
        <div class="row">

            <div class="col-md-12 list-items">

                <div class="nav1 rescure1">

                    <!--TAB -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#menu1">NGOẠI THẤT</a></li>
                        <li><a data-toggle="tab" href="#menu2">NỘI THẤT</a></li>
                        <li><a data-toggle="tab" href="#menu3">PHÒNG THAY ĐỒ</a></li>
                        <li><a data-toggle="tab" href="#menu4">THI CÔNG THỰC TẾ</a></li>
                        <li><a data-toggle="tab" href="#menu5">WC</a></li>
                    </ul>
                    <!--ITEMS-->
                    <div class="tab-content">

                        <!--MENU1-->
                        <div id="menu1" class="tab-pane fade in active">

                            <div class="related">
                                <div class="row products">

                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <div class="portfolio-overlay" data-lightbox="gallery">
                                            <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                        </div>

                                        <!--SINGLE-->
                                        <div class="deal-single panel">
                                            <!--IMAGE-->
                                            <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" >
                                                <img src="<?php echo $url_path ?>/images/4.jpg" alt="" >
                                            </figure>

                                            <div class="deal-single-content">
                                                <div class="pr-md-10">
                                                    <h3 class="deal-title">
                                                        <a href="#">CĂN HỘ FLORA</a>
                                                    </h3>
                                                    <ul class="deal-meta list-inline">
                                                        <li><i class="ico fa fa-map-marker"></i>
                                                            <a href="#">New Taipei Cityt</a>,
                                                            <a href="#"><span>Shulin District</span></a>,
                                                            <a href="#">36-pyeong</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="deal-price">
                                                    <h3 class="price ">
                                                        <a href="#">wooden</a>,
                                                        <a href="#">deep and shallow mixed building</a> 
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/SINGLE-->
                                    </div>
                                    <!--/ITEM-->

                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <div class="portfolio-overlay" data-lightbox="gallery">
                                            <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                        </div>

                                        <!--SINGLE-->
                                        <div class="deal-single panel">
                                            <!--IMAGE-->
                                            <figure class="deal-thumbnail embed-responsive embed-responsive-16by9">
                                                <img src="<?php echo $url_path ?>/images/5.jpg" alt="" >
                                            </figure>

                                            <div class="deal-single-content">
                                                <div class="pr-md-10">
                                                    <h3 class="deal-title">
                                                        <a href="#">Beautiful, craftsman</a>
                                                    </h3>
                                                    <ul class="deal-meta list-inline">
                                                        <li><i class="ico fa fa-map-marker"></i>
                                                            <a href="#">New Taipei City</a>,
                                                            <a href="#">Shulin District</a>,
                                                            <a href="#">36-pyeong</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="deal-price">
                                                    <h3 class="price ">
                                                        <a href="#">wooden</a>,
                                                        <a href="#">deep and shallow mixed building></a> 
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/SINGLE-->
                                    </div>
                                    <!--/ITEM-->

                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <div class="portfolio-overlay" data-lightbox="gallery">
                                            <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                        </div>

                                        <!--SINGLE-->
                                        <div class="deal-single panel">
                                            <!--IMAGE-->
                                            <figure class="deal-thumbnail embed-responsive embed-responsive-16by9">
                                                <img src="<?php echo $url_path ?>/images/6.jpg" alt="" >
                                            </figure>

                                            <div class="deal-single-content">
                                                <div class="pr-md-10">
                                                    <h3 class="deal-title">
                                                        <a href="#">Beautiful, craftsman</a>
                                                    </h3>
                                                    <ul class="deal-meta list-inline">
                                                        <li><i class="ico fa fa-map-marker"></i>
                                                            <a href="#">New Taipei City</a>,
                                                            <a href="#">Shulin District</a>,
                                                            <a href="#">36-pyeong</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="deal-price">
                                                    <h3 class="price ">
                                                        <a href="#">wooden</a>,
                                                        <a href="#">deep and shallow mixed building</a> 
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/SINGLE-->
                                    </div>
                                    <!--/ITEM-->

                                </div>
                                <!--/END ROW-->
                            </div>
                            <!--/END RELATED-->
                        </div>
                        <!--/MENU1-->

                        <!--MENU2-->
                        <div id="menu2" class="tab-pane fade">

                            <div class="related">
                                <div class="row products">

                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <div class="portfolio-overlay" data-lightbox="gallery">
                                            <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                        </div>

                                        <!--SINGLE-->
                                        <div class="deal-single panel">
                                            <!--IMAGE-->
                                            <figure class="deal-thumbnail embed-responsive embed-responsive-16by9">
                                                <img src="<?php echo $url_path ?>/images/7.jpg" alt="" >
                                            </figure>

                                            <div class="deal-single-content">
                                                <div class="pr-md-10">
                                                    <h3 class="deal-title">
                                                        <a href="#">CĂN HỘ SUNRISE</a>
                                                    </h3>
                                                    <ul class="deal-meta list-inline">
                                                        <li><i class="ico fa fa-map-marker"></i>
                                                            <a href="#">New Taipei City</a>,
                                                            <a href="#">Shulin District</a>,
                                                            <a href="#">36-pyeong</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="deal-price">
                                                    <h3 class="price ">
                                                        <a href="#">wooden</a>,
                                                        <a href="#">deep and shallow mixed building</a> 
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/SINGLE-->
                                    </div>
                                    <!--/ITEM-->

                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <div class="portfolio-overlay" data-lightbox="gallery">
                                            <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                        </div>

                                        <!--SINGLE-->
                                        <div class="deal-single panel">
                                            <!--IMAGE-->
                                            <figure class="deal-thumbnail embed-responsive embed-responsive-16by9">
                                                <img src="<?php echo $url_path ?>/images/8.jpg" alt="" >
                                            </figure>

                                            <div class="deal-single-content">
                                                <div class="pr-md-10">
                                                    <h3 class="deal-title">
                                                        <a href="#">Beautiful, craftsman</a>
                                                    </h3>
                                                    <ul class="deal-meta list-inline">
                                                        <li><i class="ico fa fa-map-marker"></i>
                                                            <a href="#">New Taipei City</a>,
                                                            <a href="#">Shulin District</a>,
                                                            <a href="#">36-pyeong</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="deal-price">
                                                    <h3 class="price ">
                                                        <a href="#">wooden</a>,
                                                        <a href="#">deep and shallow mixed building</a> 
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/SINGLE-->
                                    </div>
                                    <!--/ITEM-->

                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <div class="portfolio-overlay" data-lightbox="gallery">
                                            <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                        </div>

                                        <!--SINGLE-->
                                        <div class="deal-single panel">
                                            <!--IMAGE-->
                                            <figure class="deal-thumbnail embed-responsive embed-responsive-16by9">
                                                <img src="<?php echo $url_path ?>/images/4.jpg" alt="" >
                                            </figure>

                                            <div class="deal-single-content">
                                                <div class="pr-md-10">
                                                    <h3 class="deal-title">
                                                        <a href="#">Beautiful, craftsman</a>
                                                    </h3>
                                                    <ul class="deal-meta list-inline">
                                                        <li><i class="ico fa fa-map-marker"></i>
                                                            <a href="#">New Taipei City</a>,
                                                            <a href="#">Shulin District</a>,
                                                            <a href="#">36-pyeong</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="deal-price">
                                                    <h3 class="price ">
                                                        <a href="#">wooden</a>,
                                                        <a href="#">deep and shallow mixed building</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/SINGLE-->
                                    </div>
                                    <!--/ITEM-->

                                </div>
                                <!--/END ROW-->
                            </div>
                            <!--/END RELATED-->
                        </div>
                        <!--/MENU2-->

                        <!--MENU3-->
                        <div id="menu3" class="tab-pane fade">

                            <div class="related">
                                <div class="row products">

                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <div class="portfolio-overlay" data-lightbox="gallery">
                                            <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                        </div>

                                        <!--SINGLE-->
                                        <div class="deal-single panel">
                                            <!--IMAGE-->
                                            <figure class="deal-thumbnail embed-responsive embed-responsive-16by9">
                                                <img src="<?php echo $url_path ?>/images/4.jpg" alt="" >
                                            </figure>

                                            <div class="deal-single-content">
                                                <div class="pr-md-10">
                                                    <h3 class="deal-title">
                                                        <a href="#">CĂN HỘ SUNHOUSE</a>
                                                    </h3>
                                                    <ul class="deal-meta list-inline">
                                                        <li><i class="ico fa fa-map-marker"></i>
                                                            <a href="#">New Taipei City</a>,
                                                            <a href="#">Shulin District</a>,
                                                            <a href="#">36-pyeong</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="deal-price">
                                                    <h3 class="price ">
                                                        <a href="#">wooden</a>>,
                                                        <a href="#">deep and shallow mixed building</a> 
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/SINGLE-->
                                    </div>
                                    <!--/ITEM-->

                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <div class="portfolio-overlay" data-lightbox="gallery">
                                            <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                        </div>

                                        <!--SINGLE-->
                                        <div class="deal-single panel">
                                            <!--IMAGE-->
                                            <figure class="deal-thumbnail embed-responsive embed-responsive-16by9">
                                                <img src="<?php echo $url_path ?>/images/11.jpg" alt="" >
                                            </figure>

                                            <div class="deal-single-content">
                                                <div class="pr-md-10">
                                                    <h3 class="deal-title">
                                                        <a href="#">Beautiful, craftsman</a>
                                                    </h3>
                                                    <ul class="deal-meta list-inline">
                                                        <li><i class="ico fa fa-map-marker"></i>
                                                            <a href="#">New Taipei City</a>,
                                                            <a href="#">Shulin District</a>,
                                                            <a href="#">36-pyeong</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="deal-price">
                                                    <h3 class="price ">
                                                        <a href="#">wooden</a>,
                                                        <a href="#">deep and shallow mixed building</a> 
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/SINGLE-->
                                    </div>
                                    <!--/ITEM-->

                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <div class="portfolio-overlay" data-lightbox="gallery">
                                            <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                        </div>

                                        <!--SINGLE-->
                                        <div class="deal-single panel">
                                            <!--IMAGE-->
                                            <figure class="deal-thumbnail embed-responsive embed-responsive-16by9">
                                                <img src="<?php echo $url_path ?>/images/10.jpg" alt="" >
                                            </figure>

                                            <div class="deal-single-content">
                                                <div class="pr-md-10">
                                                    <h3 class="deal-title">
                                                        <a href="#">Beautiful, craftsman</a>
                                                    </h3>
                                                    <ul class="deal-meta list-inline">
                                                        <li><i class="ico fa fa-map-marker"></i>
                                                            <a href="#">New Taipei City</a>,
                                                            <a href="#">Shulin District</a>,
                                                            <a href="#">36-pyeong</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="deal-price">
                                                    <h3 class="price ">
                                                        <a href="#">wooden</a>,
                                                        <a href="#">deep and shallow mixed building</a> 
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/SINGLE-->
                                    </div>
                                    <!--/ITEM-->

                                </div>
                                <!--/END ROW-->
                            </div>
                            <!--/END RELATED-->
                        </div>
                        <!--/MENU3-->

                        <!--MENU4-->
                        <div id="menu4" class="tab-pane fade">

                            <div class="related">
                                <div class="row products">

                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <div class="portfolio-overlay" data-lightbox="gallery">
                                            <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                        </div>

                                        <!--SINGLE-->
                                        <div class="deal-single panel">
                                            <!--IMAGE-->
                                            <figure class="deal-thumbnail embed-responsive embed-responsive-16by9">
                                                <img src="<?php echo $url_path ?>/images/4.jpg" alt="" >
                                            </figure>

                                            <div class="deal-single-content">
                                                <div class="pr-md-10">
                                                    <h3 class="deal-title">
                                                        <a href="#">CĂN HỘ SUNHOME</a>
                                                    </h3>
                                                    <ul class="deal-meta list-inline">
                                                        <li><i class="ico fa fa-map-marker"></i>
                                                            <a href="#">New Taipei City</a>,
                                                            <a href="#">Shulin District</a>,
                                                            <a href="#">36-pyeong</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="deal-price">
                                                    <h3 class="price ">
                                                        <a href="#">wooden</a>,
                                                        <a href="#">deep and shallow mixed building</a> 
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/SINGLE-->
                                    </div>
                                    <!--/ITEM-->

                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <div class="portfolio-overlay" data-lightbox="gallery">
                                            <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                        </div>

                                        <!--SINGLE-->
                                        <div class="deal-single panel">
                                            <!--IMAGE-->
                                            <figure class="deal-thumbnail embed-responsive embed-responsive-16by9">
                                                <img src="<?php echo $url_path ?>/images/7.jpg" alt="" >
                                            </figure>

                                            <div class="deal-single-content">
                                                <div class="pr-md-10">
                                                    <h3 class="deal-title">
                                                        <a href="#">Beautiful, craftsman</a>
                                                    </h3>
                                                    <ul class="deal-meta list-inline">
                                                        <li><i class="ico fa fa-map-marker"></i>
                                                            <a href="#">New Taipei City</a>,
                                                            <a href="#">Shulin District</a>,
                                                            <a href="#">36-pyeong</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="deal-price">
                                                    <h3 class="price ">
                                                        <a href="#">wooden</a>,
                                                        <a href="#">deep and shallow mixed building</a> 
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/SINGLE-->
                                    </div>
                                    <!--/ITEM-->

                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <div class="portfolio-overlay" data-lightbox="gallery">
                                            <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                        </div>

                                        <!--SINGLE-->
                                        <div class="deal-single panel">
                                            <!--IMAGE-->
                                            <figure class="deal-thumbnail embed-responsive embed-responsive-16by9">
                                                <img src="<?php echo $url_path ?>/images/content-rooms-1.jpg" alt="" >
                                            </figure>

                                            <div class="deal-single-content">
                                                <div class="pr-md-10">
                                                    <h3 class="deal-title">
                                                        <a href="#">Beautiful, craftsman</a>
                                                    </h3>
                                                    <ul class="deal-meta list-inline">
                                                        <li><i class="ico fa fa-map-marker"></i>
                                                            <a href="#">New Taipei City</a>,
                                                            <a href="#">Shulin District</a>,
                                                            <a href="#">36-pyeong</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="deal-price">
                                                    <h3 class="price ">
                                                        <a href="#">wooden</a>,
                                                        <a href="#">seep and shallow mixed building</a> 
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/SINGLE-->
                                    </div>
                                    <!--/ITEM-->

                                </div>
                                <!--/END ROW-->
                            </div>
                            <!--/END RELATED-->
                        </div>
                        <!--/MENU4-->

                        <!--MENU5-->
                        <div id="menu5" class="tab-pane fade">

                            <div class="related">
                                <div class="row products">

                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <div class="portfolio-overlay" data-lightbox="gallery">
                                            <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                        </div>

                                        <!--SINGLE-->
                                        <div class="deal-single panel">
                                            <!--IMAGE-->
                                            <figure class="deal-thumbnail embed-responsive embed-responsive-16by9">
                                                <img src="<?php echo $url_path ?>/images/4.jpg" alt="">
                                            </figure>

                                            <div class="deal-single-content">
                                                <div class="pr-md-10">
                                                    <h3 class="deal-title">
                                                        <a href="#">CĂN HỘ SUNKIT</a>
                                                    </h3>
                                                    <ul class="deal-meta list-inline">
                                                        <li><i class="ico fa fa-map-marker"></i>
                                                            <a href="#">New Taipei City</a>,
                                                            <a href="#">Shulin District</a>,
                                                            <a href="#">36-pyeong</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="deal-price">
                                                    <h3 class="price ">
                                                        <a href="#">wooden</a>,
                                                        <a href="#">deep and shallow mixed building</a> 
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/SINGLE-->
                                    </div>
                                    <!--/ITEM-->

                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <div class="portfolio-overlay" data-lightbox="gallery">
                                            <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                        </div>

                                        <!--SINGLE-->
                                        <div class="deal-single panel">
                                            <!--IMAGE-->
                                            <figure class="deal-thumbnail embed-responsive embed-responsive-16by9">
                                                <img src="<?php echo $url_path ?>/images/4.jpg" alt="">
                                            </figure>

                                            <div class="deal-single-content">
                                                <div class="pr-md-10">
                                                    <h3 class="deal-title">
                                                        <a href="#">Beautiful, craftsman</a>
                                                    </h3>
                                                    <ul class="deal-meta list-inline">
                                                        <li><i class="ico fa fa-map-marker"></i>
                                                            <a href="#">New Taipei City</a>,
                                                            <a href="#">Shulin District</a>,
                                                            <a href="#">36-pyeong</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="deal-price">
                                                    <h3 class="price ">
                                                        <a href="#">wooden</a>,
                                                        <a href="#">deep and shallow mixed building</a> 
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/SINGLE-->
                                    </div>
                                    <!--/ITEM-->

                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <div class="portfolio-overlay" data-lightbox="gallery">
                                            <a href="#" class="center-icon"><i class="icon-line-ellipsis"></i></a>
                                        </div>

                                        <!--SINGLE-->
                                        <div class="deal-single panel">
                                            <!--IMAGE-->
                                            <figure class="deal-thumbnail embed-responsive embed-responsive-16by9">
                                                <img src="<?php echo $url_path ?>/images/4.jpg" alt="" >
                                            </figure>

                                            <div class="deal-single-content">
                                                <div class="pr-md-10">
                                                    <h3 class="deal-title">
                                                        <a href="#">Beautiful, craftsman</a>
                                                    </h3>
                                                    <ul class="deal-meta list-inline">
                                                        <li><i class="ico fa fa-map-marker"></i>
                                                            <a href="#">New Taipei City</a>,
                                                            <a href="#">Shulin District</a>,
                                                            <a href="#">36-pyeong</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="deal-price">
                                                    <h3 class="price ">
                                                        <a href="#">wooden</a>,
                                                        <a href="#">deep and shallow mixed building</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/SINGLE-->
                                    </div>
                                    <!--/ITEM-->

                                </div>
                                <!--/END ROW-->
                            </div>
                            <!--/END RELATED-->
                        </div>
                        <!--/MENU5-->
                    </div>
                    <!--/END ITEMS-->

                </div>
            </div>
            <!--/END COL-MD-12-->
        </div>
        <!--/END ROW-->
    </div>
    <!--/CONTENT-->
</div>
