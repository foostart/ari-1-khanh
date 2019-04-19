<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1908">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div id="sv_product_fillter-2" class="sidebar-widget widget widget_sv_product_fillter">
                    <div class="sidebar-shop">
                        <div class="widget widget-filter">
                            <div class="box-filter category-filter">
                                <h2 class="widget-title">CATEGORY</h2>
                                <ul><li><a data-cat="electronis" href="#"> Electronics (20)</a></li>
                                    <li><a data-cat="fashion" href="#"> Fashion (10)</a></li>
                                </ul>
                            </div>
                            <div class="box-filter price-filter">
                                <h2 class="widget-title">price</h2>
                                <div class="inner-price-filter">
                                    <div class="range-filter">
                                        <form method="get" action="#">
                                            <label>$</label>
                                            <div id="amount"><span>26</span> - <span>899</span></div>

                                            <input class="price-min-filter" type="hidden" name="min_price" value="26">
                                            <input class="price-max-filter" type="hidden" name="max_price" value="899">

                                            <button class="btn-filter">Filter</button>
                                            <div id="slider-range" data-min="26" data-max="899" data-current_min="26" data-current_max="899" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                                <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div>
                                                <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span>
                                                <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 100%;"></span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="box-filter brand-filter">
                                <h2 class="widget-title">brand</h2>
                                <div class="list-brand-filter">
                                    <ul>
                                        <li><a data-attribute="pa_brand" data-term="apple"href="#">Apple <span>(2)</span></a></li>
                                        <li><a data-attribute="pa_brand" data-term="canifa" href="#">Canifa <span>(2)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="box-filter color-filter">
                                <h2 class="widget-title">color</h2>
                                <div class="list-color-filter"><a data-attribute="pa_color" data-term="black" class="color-black" href="#"></a>
                                    <a data-attribute="pa_color" data-term="blue" class="color-blue" href="#"></a>
                                    <a data-attribute="pa_color" data-term="blue-sky" class="color-blue-sky" href="#"></a>
                                    <a data-attribute="pa_color" data-term="brown" class="color-brown" href="#"></a>
                                    <a data-attribute="pa_color" data-term="gray" class="color-gray" href="#"></a>
                                    <a data-attribute="pa_color" data-term="green" class="color-green" href="#"></a>
                                    <a data-attribute="pa_color" data-term="orange" class="color-orange" href="#"></a>
                                    <a data-attribute="pa_color" data-term="pink" class="color-pink" href="#"></a>
                                    <a data-attribute="pa_color" data-term="red" class=" color-red" href="#"></a>
                                    <a data-attribute="pa_color" data-term="red-blood" class="color-red-blood" href="#"></a>
                                    <a data-attribute="pa_color" data-term="violet" class="color-violet" href="#"></a>
                                    <a data-attribute="pa_color" data-term="white" class="color-white" href="#"></a>
                                </div>
                            </div><div class="box-filter size-filter">
                                <h2 class="widget-title">size</h2>
                                <div class="list-size-filter">
                                    <ul>
                                        <li><a data-attribute="pa_size" data-term="l" href="#">L <span>(3)</span></a></li>
                                        <li><a data-attribute="pa_size" data-term="m" href="#">M <span>(3)</span></a></li>
                                        <li><a data-attribute="pa_size" data-term="s" href="#">S <span>(3)</span></a></li>
                                        <li><a data-attribute="pa_size" data-term="xl" href="#">XL <span>(3)</span></a></li>
                                        <li><a data-attribute="pa_size" data-term="xxl" href="#">XXL <span>(3)</span></a></li>
                                    </ul>
                                </div>
                            </div></div>
                    </div></div>
            </div>
        </div>
    </div>
</div>
