<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1918">
    <div class="container">
        <div class="row">
            <div class="vc_row wpb_row">
                <div class="contact-info-page wpb_column column_container col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="vc_row wpb_row vc_inner">
                                <div class="wpb_column column_container col-sm-4">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="item-contact-info ">
                                                <a class="contact-icon" href="#">
                                                    <i class="fa fa-diamond before"></i>
                                                    <i class="fa fa-diamond"></i>
                                                </a>
                                                <h2>
                                                    <a href="#">100% Product quality protection</a>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column column_container col-sm-4">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="item-contact-info ">
                                                <a class="contact-icon" href="#">
                                                    <i class="fa fa-clock-o before"></i>
                                                    <i class="fa fa-clock-o"></i>
                                                </a>
                                                <h2>
                                                    <a href="#">100% On-time shipment protection</a>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column column_container col-sm-4">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="item-contact-info last-item">
                                                <a class="contact-icon" href="#">
                                                    <i class="fa fa-dollar before"></i>
                                                    <i class="fa fa-dollar"></i>
                                                </a>
                                                <h2>
                                                    <a href="#">100% Payment protection</a>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_text_column wpb_content_element  vc_custom_1460436299968">
                                <div class="wpb_wrapper">
                                    <p class="desc">If the supplier fails to ship your products on time or the product quality does not meet the standards set in your contract, Aloshop will refund the covered amount of your payment.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>