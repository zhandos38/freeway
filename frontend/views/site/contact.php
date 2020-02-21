<?php
use common\models\Post;
use frontend\components\widgets\CommentWidget;
use frontend\components\widgets\NextNewsWidget;
use frontend\components\widgets\RecentPostsWidget;
use frontend\components\widgets\SideBarWidget;

/* @var $model Post */
?>
<div class="single-post">
    <!-- Title Block -->
    <div class="sayit_title_container row sayit_js_height sayit_js_bg_image sayit_block_with_fimage" data-src="/img/state.jpg" data-height="600">
        <div class="sayit_overlay sayit_fimage_overlay_type_light"></div>

        <div class="sayit_title_wrapper col push-middle">
            <h1 class="sayit_post_title">Контакты</h1>
        </div>
    </div>
    <div class="sayit_container content_box_narrow sayit_right_sidebar">
        <div class="row sayit_right_sidebar">
            <!-- Content Area -->
            <div class="col col-8 sayit_content content_box_bg_color_on">
                <div class="sayit_tiny">

                    <div class="row">
                        <div class="col col-8 push-center">
                            <div class="sayit_widget_title">
                                <div class="sayit_widget_container sayit_text_align_center sayit_mb_20">
                                    <h2 class="sayit_element_heading sayit_view_type_1">Have a Question? Get In Touch With Me</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p>Praesent hendrerit cursus turpis, in mattis turpis. Suspendisse sagittis luctus leo at scelerisque. Maecenas vel elementum nulla. Ut aliquam tellus at massa aliquam, id pulvinar odio interdum. Phasellus vitae ex a massa congue imperdiet. Quisque consectetur est tortor, sed mattis.</p>

                    <p class="sayit_mb_40">Ut tincidunt justo mauris, et rutrum magna convallis id. Duis est enim, finibus ac nisi eu, rhoncus commodo ante. Nulla suscipit faucibus blandit. Pellentesque sodales est eu vestibulum venenatis. In risus sem, tincidunt et odio quis, tempus accumsan tortor.</p>

                    <!-- Form Widget -->
                    <div class="sayit_form_widget">
                        <div class="sayit_widget_container">
                            <div class="sayit_form_wrapper">
                                <form name="contact_form" id="contact_form">
                                    <p>
                                        <input type="text" name="your-name" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Name*" form="contact_form">
                                        <input type="email" name="your-email" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Email*" form="contact_form">
                                        <textarea name="your-message" cols="40" rows="10" aria-invalid="false" placeholder="Message" form="contact_form"></textarea>
                                        <input type="submit" value="Send Message" form="contact_form">
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="sayit_mb_90"></div>

                </div>
                <br><br>
                <div class="sayit_single_divider"></div>

                <?= RecentPostsWidget::widget() ?>

            </div>

            <?= SideBarWidget::widget() ?>

        </div>
    </div>
</div>