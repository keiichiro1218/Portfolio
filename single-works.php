<?php get_header(); ?>
    <div class="l-main">
        <div class="p-single">
            <div class="p-breadcrumb">
                <?php
                    if ( function_exists( 'bcn_display' ) ) {
                        bcn_display();
                    }
                ?>
            </div>
            <div class="p-single__inner">
                <h2 class="c-section-title">
                                    Works
                </h2>
                <div class="p-post-content">
                    <?php //記事本文の表示
                    the_content(); ?>
                </div>

            </div>
        </div>
      
        <?php get_footer(); ?>
    </div>
      