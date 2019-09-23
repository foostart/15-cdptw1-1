<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-e-601">
    <!--HEADDER-->
    <div class="top-header">
        <div class="tem">TEAM </div>
        <div class="border"></div>
        <div class="name">
            <a href="#">Trang chủ</a> / <a href="#">Tổ chức KT-ROYAL</a>
        </div>
    </div>
    <!--/HEADDER-->
    <div class="container rescure">
        <div class="row">
            <div class="col-md-12 list-items">
                <div class="nav1 rescure1">
                    <!--TAB-->
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#menu1">Giám đốc</a></li>
                        <li><a data-toggle="tab" href="#menu2">Kỹ thuật</a></li>
                        <li><a data-toggle="tab" href="#menu3">Chất lượng</a></li>
                        <li><a data-toggle="tab" href="#menu4">Tài chính</a></li>
                        <li><a data-toggle="tab" href="#menu5">Nhân viên</a></li>
                    </ul>
                    <!--/TAB-->
                    <!--ITEMS-->
                    <div class="tab-content">
                        <!--GIAM DOC-->
                        <div id="menu1" class="tab-pane fade in active">
                            <!--/ESUM-->
                            <div class="esum">
                                <h3 class="exam">Ban giám đốc</h3>
                                <div class="border"></div>
                                <p>
                                    Đưa ra quyết định và chịu trách nhiệm điều hành dự án
                                </p>
                            </div>
                            <!--/ESUM-->
                            <div class="related">
                                <div class="row products">
                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <div class="product-list-item">
                                            <!--IMG-->
                                            <div class="image">
                                                <a href="#">
                                                    <img src="<?php echo $url_path ?>/images/designer_data-3.jpg" alt="" class="">
                                                </a>
                                            </div>
                                            <!--/IMG-->
                                            <!--DETAIL-->
                                            <div class="detail">
                                                <h3 class="detail-title">LÊ VIỆT HOÀNG</h3>
                                                <p class="detail-desc">
                                                    Tổng giám đốc
                                                </p>
                                                <span class="price">
                                                    <span class="amount">Tốt nghiệp Cao đẳng Công Nghệ Thủ Đức khóa 2017</span>
                                                </span>
                                            </div>
                                            <!--/DETAIL-->
                                        </div>
                                    </div>
                                    <!--/ITEM-->
                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <div class="product-list-item">
                                            <!--IMG-->
                                            <div class="image">
                                                <a href="#">
                                                    <img src="<?php echo $url_path ?>/images/designer_data-279.jpg" alt="" class="">
                                                </a>
                                            </div>
                                            <!--/IMG-->
                                            <!--DETAIL-->
                                            <div class="detail">
                                                <h3 class="detail-title">BÙI QUỐC TRIỀU</h3>
                                                <p class="detail-desc">
                                                    Giám đốc kinh doanh
                                                </p>
                                                <span class="price">
                                                    <span class="amount">Tốt nghiệp Đại học Kiến Trúc Tp.HCM, Khóa 2009</span>
                                                </span>
                                            </div>
                                            <!--/DETAIL-->
                                        </div>
                                    </div>
                                    <!--/ITEM-->
                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <div class="product-list-item">
                                            <!--IMG-->
                                            <div class="image">
                                                <a href="#">
                                                    <img src="<?php echo $url_path ?>/images/designer_data-284.jpg" alt="" class="">
                                                </a>
                                            </div>
                                            <!--/IMG-->
                                            <!--DETAIL-->
                                            <div class="detail">
                                                <h3 class="detail-title">BÙI QUỐC TRIỀU</h3>
                                                <p class="detail-desc">
                                                    Giám đốc kinh doanh
                                                </p>
                                                <span class="price">
                                                    <span class="amount">Tốt nghiệp Đại học Kiến Trúc Tp.HCM, Khóa 2009</span>
                                                </span>
                                            </div>
                                            <!--/DETAIL-->
                                        </div>
                                    </div>
                                    <!--/ITEM-->
                                </div>
                            </div>
                        </div>
                        <!--/GIAM DOC-->

                        <!--KY THUAT-->
                       <div id="menu2" class="tab-pane fade">
                            <!--/ESUM-->
                            <div class="esum">
                                <h3 class="exam">Ban kỹ thuật</h3>
                                <div class="border"></div>
                                <p>
                                    Chịu trách nhiệm về thiết kế dự án: bản vẽ, mô hình
                                </p>
                            </div>
                            <!--/ESUM-->
                            <div class="related">
                                <div class="row products">
                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <div class="product-list-item">
                                            <!--IMG-->
                                            <div class="image">
                                                <a href="#">
                                                    <img src="<?php echo $url_path ?>/images/designer_data-23.jpg" alt="" class="">
                                                </a>
                                            </div>
                                            <!--/IMG-->
                                            <!--DETAIL-->
                                            <div class="detail">
                                                <h3 class="detail-title">THÁI TRUNG KIÊN</h3>
                                                <p class="detail-desc">
                                                    Tổng giám đốc
                                                </p>
                                                <span class="price">
                                                    <span class="amount">Tốt nghiệp Đại học Kiến Trúc Tp.HCM, Khóa 2009</span>
                                                </span>
                                            </div>
                                            <!--/DETAIL-->
                                        </div>
                                    </div>
                                    <!--/ITEM-->
                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <div class="product-list-item">
                                            <!--IMG-->
                                            <div class="image">
                                                <a href="#">
                                                    <img src="<?php echo $url_path ?>/images/designer_data-3.jpg" alt="" class="">
                                                </a>
                                            </div>
                                            <!--/IMG-->
                                            <!--DETAIL-->
                                            <div class="detail">
                                                <h3 class="detail-title">BÙI QUỐC TRIỀU</h3>
                                                <p class="detail-desc">
                                                    Giám đốc kinh doanh
                                                </p>
                                                <span class="price">
                                                    <span class="amount">Tốt nghiệp Đại học Kiến Trúc Tp.HCM, Khóa 2009</span>
                                                </span>
                                            </div>
                                            <!--/DETAIL-->
                                        </div>
                                    </div>
                                    <!--/ITEM-->
                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <div class="product-list-item">
                                            <!--IMG-->
                                            <div class="image">
                                                <a href="#">
                                                    <img src="<?php echo $url_path ?>/images/designer_data-3.jpg" alt="" class="">
                                                </a>
                                            </div>
                                            <!--/IMG-->
                                            <!--DETAIL-->
                                            <div class="detail">
                                                <h3 class="detail-title">BÙI QUỐC TRIỀU</h3>
                                                <p class="detail-desc">
                                                    Giám đốc kinh doanh
                                                </p>
                                                <span class="price">
                                                    <span class="amount">Tốt nghiệp Đại học Kiến Trúc Tp.HCM, Khóa 2009</span>
                                                </span>
                                            </div>
                                            <!--/DETAIL-->
                                        </div>
                                    </div>
                                    <!--/ITEM-->
                                </div>
                            </div>
                        </div>
                        <!--/KY THUAT-->

                        <!--CHAT LUONG-->
                       <div id="menu3" class="tab-pane fade">
                            <!--/ESUM-->
                            <div class="esum">
                                <h3 class="exam">Ban chất lượng</h3>
                                <div class="border"></div>
                                <p>
                                    Kiểm tra về chất lượng công trình
                                </p>
                            </div>
                            <!--/ESUM-->
                            <div class="related">
                                <div class="row products">
                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <div class="product-list-item">
                                            <!--IMG-->
                                            <div class="image">
                                                <a href="#">
                                                    <img src="<?php echo $url_path ?>/images/designer_data-3.jpg" alt="" class="">
                                                </a>
                                            </div>
                                            <!--/IMG-->
                                            <!--DETAIL-->
                                            <div class="detail">
                                                <h3 class="detail-title">THÁI TRUNG KIÊN</h3>
                                                <p class="detail-desc">
                                                    Tổng giám đốc
                                                </p>
                                                <span class="price">
                                                    <span class="amount">Tốt nghiệp Đại học Kiến Trúc Tp.HCM, Khóa 2009</span>
                                                </span>
                                            </div>
                                            <!--/DETAIL-->
                                        </div>
                                    </div>
                                    <!--/ITEM-->
                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <div class="product-list-item">
                                            <!--IMG-->
                                            <div class="image">
                                                <a href="#">
                                                    <img src="<?php echo $url_path ?>/images/designer_data-3.jpg" alt="" class="">
                                                </a>
                                            </div>
                                            <!--/IMG-->
                                            <!--DETAIL-->
                                            <div class="detail">
                                                <h3 class="detail-title">BÙI QUỐC TRIỀU</h3>
                                                <p class="detail-desc">
                                                    Giám đốc kinh doanh
                                                </p>
                                                <span class="price">
                                                    <span class="amount">Tốt nghiệp Đại học Kiến Trúc Tp.HCM, Khóa 2009</span>
                                                </span>
                                            </div>
                                            <!--/DETAIL-->
                                        </div>
                                    </div>
                                    <!--/ITEM-->
                                </div>
                            </div>
                        </div>
                        <!--/CHAT LUONG-->

                        <!--TAI CHINH-->
                       <div id="menu4" class="tab-pane fade">
                            <!--/ESUM-->
                            <div class="esum">
                                <h3 class="exam">Ban tài chính</h3>
                                <div class="border"></div>
                                <p>
                                    Quản lý tài chính công ty
                                </p>
                            </div>
                            <!--/ESUM-->
                            <div class="related">
                                <div class="row products">
                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <div class="product-list-item">
                                            <!--IMG-->
                                            <div class="image">
                                                <a href="#">
                                                    <img src="<?php echo $url_path ?>/images/designer_data-3.jpg" alt="" class="">
                                                </a>
                                            </div>
                                            <!--/IMG-->
                                            <!--DETAIL-->
                                            <div class="detail">
                                                <h3 class="detail-title">THÁI TRUNG KIÊN</h3>
                                                <p class="detail-desc">
                                                    Tổng giám đốc
                                                </p>
                                                <span class="price">
                                                    <span class="amount">Tốt nghiệp Đại học Kiến Trúc Tp.HCM, Khóa 2009</span>
                                                </span>
                                            </div>
                                            <!--/DETAIL-->
                                        </div>
                                    </div>
                                    <!--/ITEM-->
                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <div class="product-list-item">
                                            <!--IMG-->
                                            <div class="image">
                                                <a href="#">
                                                    <img src="<?php echo $url_path ?>/images/designer_data-3.jpg" alt="" class="">
                                                </a>
                                            </div>
                                            <!--/IMG-->
                                            <!--DETAIL-->
                                            <div class="detail">
                                                <h3 class="detail-title">BÙI QUỐC TRIỀU</h3>
                                                <p class="detail-desc">
                                                    Giám đốc kinh doanh
                                                </p>
                                                <span class="price">
                                                    <span class="amount">Tốt nghiệp Đại học Kiến Trúc Tp.HCM, Khóa 2009</span>
                                                </span>
                                            </div>
                                            <!--/DETAIL-->
                                        </div>
                                    </div>
                                    <!--/ITEM-->
                                </div>
                            </div>
                        </div>
                        <!--/TAI CHINH-->
                        <!--NHAN VIEN-->
                       <div id="menu5" class="tab-pane fade">
                            <!--/ESUM-->
                            <div class="esum">
                                <h3 class="exam">Ban nhan vine</h3>
                                <div class="border"></div>
                                <p>
                                    Quản lý nhan vien công ty
                                </p>
                            </div>
                            <!--/ESUM-->
                            <div class="related">
                                <div class="row products">
                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <div class="product-list-item">
                                            <!--IMG-->
                                            <div class="image">
                                                <a href="#">
                                                    <img src="<?php echo $url_path ?>/images/designer_data-71.jpg" alt="" class="">
                                                </a>
                                            </div>
                                            <!--/IMG-->
                                            <!--DETAIL-->
                                            <div class="detail">
                                                <h3 class="detail-title">THÁI TRUNG KIÊN</h3>
                                                <p class="detail-desc">
                                                    Tổng giám đốc
                                                </p>
                                                <span class="price">
                                                    <span class="amount">Tốt nghiệp Đại học Kiến Trúc Tp.HCM, Khóa 2009</span>
                                                </span>
                                            </div>
                                            <!--/DETAIL-->
                                        </div>
                                    </div>
                                    <!--/ITEM-->
                                    <!--ITEM-->
                                    <div class="col-md-4 col-sm-6 product">
                                        <div class="product-list-item">
                                            <!--IMG-->
                                            <div class="image">
                                                <a href="#">
                                                    <img src="<?php echo $url_path ?>/images/designer_data-3.jpg" alt="" class="">
                                                </a>
                                            </div>
                                            <!--/IMG-->
                                            <!--DETAIL-->
                                            <div class="detail">
                                                <h3 class="detail-title">BÙI QUỐC TRIỀU</h3>
                                                <p class="detail-desc">
                                                    Giám đốc kinh doanh
                                                </p>
                                                <span class="price">
                                                    <span class="amount">Tốt nghiệp Đại học Kiến Trúc Tp.HCM, Khóa 2009</span>
                                                </span>
                                            </div>
                                            <!--/DETAIL-->
                                        </div>
                                    </div>
                                    <!--/ITEM-->
                                </div>
                            </div>
                        </div>
                        <!--/NHAN VIEN-->
                    </div>
                    <!--/ITEMS-->
                </div>
            </div>
            <!--/END COL-MD-12-->
        </div>
        <!--/END ROW-->
    </div>
    <!--/END CONTAINER-->
</div>
