<?php
include '../config.php';

$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), $sala);
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
    <div class="clearfix"></div>
</div>