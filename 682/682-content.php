<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-827">
    <div class="container">      
        <div class="swiper-container">
            <div class="swiper-wrapper nav nav-tabs">                                      
                <div class="swiper-slide" >
                    <img src="images/slider-2.jpg" class="imgLoaded">
                    <div class="camerarelative"></div>
                    <div class="carousel-caption">
                        <h1>OUR MAIN GOAL IS CONTINUOUSLY SATISFY OUR CLIENTS</h1>
                        <p>Donec porta diam eumassauisque diam lorem interdum vitae dapibus ac scelerisque vitae pede onec porta diam eu massauisque diam lorem interdum vitae dapibus ac scelerisque vitae pede.</p>
                        <div class="carousel-indicators"></div>
                    </div>
                </div>                               
                <div class="swiper-slide" >
                    <img src="images/slider-1.jpg" class="imgLoaded">
                    <div class="camerarelative"></div>
                    <div class="carousel-caption">
                        <h1>STEEL’S BRANDED PRODUCTS AND SOLUTIONS</h1>
                        <p>Donec porta diam eumassauisque diam lorem interdum vitae dapibus ac scelerisque vitae pede onec porta diam eu massauisque diam lorem interdum vitae dapibus ac scelerisque vitae pede.</p>
                        <div class="carousel-indicators"></div>
                    </div>
                </div>
                <div class="swiper-slide" >
                    <img src="images/slider-3.jpg" class="imgLoaded">
                    <div class="camerarelative"></div>
                    <div class="carousel-caption">
                        <h1>ALL KINDS OF STEEL PRODUCTS</h1>
                        <p>Donec porta diam eumassauisque diam lorem interdum vitae dapibus ac scelerisque vitae pede onec porta diam eu massauisque diam lorem interdum vitae dapibus ac scelerisque vitae pede.</p>
                        <div class="carousel-indicators"></div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev" ></div>
            <div class="swiper-button-next"></div>
            
            <div class="timer"></div>  
        </div>
        </div> 
        
                       
    </div>    
</div>