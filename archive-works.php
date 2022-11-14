<?php get_header(); ?>
<div class="l-main l-main__archive">
    <section class="p-works">
        <div class="p-breadcrumb">
            <?php
                if ( function_exists( 'bcn_display' ) ) {
                    bcn_display();
                }
            ?>
        </div>
        <div class="p-works__inner">
                <h2 class="c-section-title">
                    Works
                </h2>
                <div class="p-card">
                    <div class="p-card__contents">
                        <?php
                        if ( have_posts() ) :
                        ?>
                        <?php
                        while ( have_posts() ) :
                        the_post();
                        ?>
                            <a href="<?php the_permalink() ?>" class="p-post">
                                <div class="p-post__thumbnail">
                                    <div class="p-post__img">
                                    <?php if (has_post_thumbnail()) : /* もしアイキャッチが登録されていたら */ ?>
                                    <?php the_post_thumbnail(); ?>
                                    <?php else: /* 登録されていなかったら */ ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-code.png" alt="">
                                    <?php endif; ?>
                                        <!-- <?php the_post_thumbnail(); ?> -->
                                    </div>
                                </div>
                                <div class="p-works__post-name">
                                    <?php the_title() ?>
                                </div>
                            </a>
                        <?php endwhile;
                                    else :
                        ?><p>表示する記事がありません</p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="c-pagenation">
                    <?php
                    $link = get_next_posts_link('次へ');
                    $link = str_replace('<a','<a class="c-pagenation__btn"',$link);
                    echo $link;
                    ?>
                    <?php
                    $link = get_previous_posts_link('前へ');
                    $link = str_replace('<a','<a class="c-pagenation__btn"',$link);
                    echo $link;
                    ?>
                </div>
        </div>
    </section>
    <?php get_footer(); ?>
    
</div>