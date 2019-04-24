<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1909">
    <div class="container">
        <!-- BEGIN SLIDES -->
        <div class="row header">
            <div class="slides">
                <!-- TITLE SLIDES -->
                <div class="col-md-9">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="img-responsive" alt="img" src="images/bn1.jpg" />
                            </div>

                            <div class="swiper-slide">
                                <img class="img-responsive" alt="img" src="images/bn2.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img class="img-responsive" alt="img" src="images/bn3.jpg" />
                            </div>
                        </div>
                        <div class="shop-slider-info">
                            <h3>jewelry-bracelets</h3>
                            <h2>exta 35% off </h2><a href="#" class="shop-now">shop now</a>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <div class="list">
                        <div class="list-shop-cat">
                            <ul>
                                <li><a href="#">Electronis <span>20</span></a></li>
                                <li>
                                    <a href="#">Fashion <span>10</span></a></li>
                                <li>
                                    <a href="#">Food <span>10</span></a></li>
                                <li>
                                    <a href="#">Furniture <span>10</span></a></li>
                                <li>
                                    <a href="#">Jewelry <span>10</span></a></li>
                                <li>
                                    <a href="#">Sports <span>8</span></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <!-- END SLIDES -->

            </div>
        </div>
    </div>
</div>