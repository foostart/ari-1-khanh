<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

    <div class="mod-custom-1">
        <div class="container">
            <div class="row">
        <div class="swiper-container">
            <div class="swiper-wrapper col-md-12 col-sm-12 col-xs-12">
                <div class="swiper-slide textv">
                    <h2>Testimonials</h2>
                    <h2>"</h2>
                    <p>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.."</p>
                </div>
                <div class="swiper-slide">
                    <h2>Testimonials</h2>
                    <h2>"</h2>
                    <p>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.."</p>
                </div>
                <div class="swiper-slide">
                    <h2>Testimonials</h2>
                    <h2>"</h2>
                    <p>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.."</p>
                </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"><h1>&#10095;</h1></div>
            <div class="swiper-button-prev"><h1>&#10094;</h1></div>
        </div>
        </div>
        </div>
    </div>
