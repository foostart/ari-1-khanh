<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>


<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="type-1908">
                <div id="sv_product_fillter-2" class="widget">
                    <div class="sidebar-shop">
                        <div class="widget widget-filter">
                            <div class="box-filter">
                                <h2 class="widget-title">CATEGORY <i id="texti" data-toggle="collapse" data-parent="#accordion" href="#collapse1">-</i></h2>
                                <div id="collapse1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="#"><input type="checkbox"> Electronics (20)</a></li>
                                            <li><a href="#"><input type="checkbox">  Fashion (10)</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="box-filter">
                                <h2 class="widget-title">price <i data-toggle="collapse" data-parent="#accordion" href="#collapse2">-</i></h2>
                                <div id="collapse2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="range-filter">
                                            <label>$</label>
                                            <input class="vlput" type="text" id="amount" readonly>

                                            <button class="btn-filter">Filter</button>
                                            <div id="slider-range" class="ui-slider"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="box-filter">
                                <h2 class="widget-title">brand <i data-toggle="collapse" data-parent="#accordion" href="#collapse3">-</i></h2>
                                <div id="collapse3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a data-attribute="pa_brand" data-term="apple"href="#">Apple <span>(2)</span></a></li>
                                            <li><a data-attribute="pa_brand" data-term="canifa" href="#">Canifa <span>(2)</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="box-filter color-filter">
                                <h2 class="widget-title">color <i data-toggle="collapse" data-parent="#accordion" href="#collapse4">-</i></h2>
                                <div id="collapse4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="list-color-filter"><a data-attribute="pa_color" data-term="black" class="color-black" href="#"></a>
                                            <a class="color-blue" href="#"></a>
                                            <a class="color-blue-sky" href="#"></a>
                                            <a class="color-brown" href="#"></a>
                                            <a class="color-gray" href="#"></a>
                                            <a class="color-green" href="#"></a>
                                            <a class="color-orange" href="#"></a>
                                            <a class="color-pink" href="#"></a>
                                            <a class=" color-red" href="#"></a>
                                            <a class="color-red-blood" href="#"></a>
                                            <a class="color-violet" href="#"></a>
                                            <a class="color-white" href="#"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-filter">
                                <h2 class="widget-title">size <i data-toggle="collapse" data-parent="#accordion" href="#collapse5">-</i></h2>
                                <div id="collapse5" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="#"><input type="checkbox"> L <span>(3)</span></a></li>
                                            <li><a href="#"><input type="checkbox"> M <span>(3)</span></a></li>
                                            <li><a href="#"><input type="checkbox"> S <span>(3)</span></a></li>
                                            <li><a href="#"><input type="checkbox"> XL <span>(3)</span></a></li>
                                            <li><a href="#"><input type="checkbox"> XXL <span>(3)</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

