<?php
    get_header();
?>
<div class="slider-area slider-style-1 variation-default height-850 bg_image bg_image--12" data-black-overlay="7">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner pt--80 text-center" data-sal="slide-up" data-sal-duration="400" data-sal-delay="150">
                    <div>
                        <h3 class="rainbow-sub-badge">
                            <span class="theme-gradient">
                                <?php
                                    the_title()
                                ?>
                            </span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    the_content()
?>
<?php
    get_footer();
?>