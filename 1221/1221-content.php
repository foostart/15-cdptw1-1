<?php
include '../config.php';
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), $sala);
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1221" id='bao-gia'>
    <div class="container char">
        <div class="row">
            <!--TITLE-->
            <div class="title">
                <h4>
                    <span>BẢNG</span>
                    <span class="standard">&nbsp;BÁO GIÁ</span>
                </h4>
            </div>
            <!--END TITLE-->
            <!--TEXT-->
            <div class="text">
                <p>Cung cấp bảng báo giá có tính cạnh tranh nhất trên thị trường ngày nay</p>
            </div>
            <!--END TEXT-->
            <!--TABLE-->
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>
                            <p>VẬT LIỆU</p>
                        </th>
                        <th>
                            <p>HÃNG</p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <p>XI MĂNG</p>
                        </td>
                        <td>
                            <p>INSEE (HOLCIM cũ)</p>
                            <p>Hà Tiên</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>GẠCH TUYNEL</p>
                        </td>
                        <td>
                            <p>Tám Quỳnh</p>
                            <p>Trung Nguyên</p>
                            <p>Thành Tâm</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>DÂY ĐIỆN</p>
                        </td>
                        <td>
                            <p>Cadivi</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>ỐNG CỨNG</p>
                        </td>
                        <td>
                            <p>VEGA</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>NGÓI - TOLE</p>
                        </td>
                        <td>
                            <p>Thái Lan</p>
                            <p>Hoa Sen</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>CHỐNG THẤM</p>
                        </td>
                        <td>
                            <p>FLINKOTE</p>
                            <p>SIKA LATEX</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!--END TABLE-->
            <!--NOTE-->
            <p>Cung cấp các trang thiết bị an toàn lao động và vệ sinh công trình như: bình chữa cháy, tủ điện, CB chống giật, thùng rác, nón bảo hộ cho giám sát và chủ đầu tư</p>
        </div>
    </div>
</div>