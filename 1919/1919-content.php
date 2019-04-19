<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1919">
    <div class="container">
        <div class="row">
            <div class="vc_row wpb_row protect-video">
                <div class="wpb_column column_container col-sm-6">
                    <div class="vc_column-inner "><div class="wpb_wrapper">
                            <div class="wpb_text_column wpb_content_element  vc_custom_1460443871801 about-full-protec">
                                <div class="wpb_wrapper">
                                    <h2 class="title-default">To get full protection</h2>
                                    <ul>
                                        <li>
                                            <span class="span-text">1</span>
                                            <p class="list-text">CONFIRM your order online with a Trade Assurance supplier</p>
                                        </li>
                                        <li class="afterstraight">
                                            <span class="span-text">2</span>
                                            <p class="list-text">PAY to the supplier’s CITIBANK account designated by Aloshop with credit card or bank transfer</p>
                                        </li>
                                    </ul>
                                    <p>
                                        <a class="new-user-guide" href="#">View New User Guide</a>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column column_container col-sm-6">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="wpb_single_image wpb_content_element vc_align_center  vc_custom_1460687485773">
                                <figure class="wpb_wrapper vc_figure">
                                    <a href="#" target="_self" class="vc_single_image-wrapper   vc_box_border_grey">
                                        <img width="364" height="278" src="<?php echo $url_path ?>/images/about-video.jpg" class="vc_single_image-img attachment-full" alt="" srcset="<?php echo $url_path ?>/images/about-video.jpg">
                                    </a>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>