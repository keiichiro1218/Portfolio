<?php get_header(); ?>
<div class="l-main">
    <section class="p-main-visual">
        <div class="p-main-visual__inner">
            <div class="p-main-visual__content">
                <div class="p-main-visual__text-wrap">
                    <div class="p-main-visual__text">
                        <p class="p-main-visual__text-top">
                            ご覧いただき<br>ありがとうございます。
                        </p>
                        <p class="p-main-visual__text-under"><span class="u-font-weight">コーディング</span>承ります。</p>
                        <p class="p-main-visual__text-bottom">気軽にお問い合わせください！</p>
                    </div>
                    <!-- /.p-main-visual__text -->
                </div>
                <!-- /.p-main-visual__text-wrap -->
                <img src="<?php echo get_template_directory_uri(); ?>/assets/typing.svg" alt="">
            </div>
            <!-- /.p-main-visual__content -->
        </div>
        <!-- /.p-main-visual__inner -->
    </section>
    <section class="p-works">
        <div class="p-works__inner">
                <h2 class="c-section-title p-works__title">
                    Works
                </h2>
                <div class="p-card">
                    <div class="p-card__contents">
                    <?php
                    $args = array(
                        'post_type' => 'works',
                        'posts_per_page' => 6,
                    );
                    $the_query = new WP_Query($args);
                    ?>
                    <?php if ($the_query->have_posts()): ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <!-- ここに投稿がある場合の記述 -->
                            <a href="<?php the_permalink() ?>" class="p-post">
                                <div class="p-post__thumbnail">
                                    <div class="p-post__img">
                                        <?php if (has_post_thumbnail()) : /* もしアイキャッチが登録されていたら */ ?>
                                        <?php the_post_thumbnail(); ?>
                                        <?php else: /* 登録されていなかったら */ ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/no-image.png" alt="">
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="p-works__post-name">
                                    <?php the_title() ?>
                                </div>
                            </a>
                    <?php endwhile; ?>
                    <?php else: ?>
                    <!-- ここに投稿がない場合の記述 -->
                    <?php endif; wp_reset_postdata(); ?>
                    </div>
                    <?php
                    $count_posts = wp_count_posts('works');
                    $published_posts = $count_posts->publish;
                    if( $published_posts >= 7 ): ?>
                        <div class="c-works-button">
                            <a href="">reade more</a>
                        </div>
                    <?php else: ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <section class="p-skill">
            <div class="p-skill__inner">
                <h2 class="c-section-title p-skill__title">
                    Skills
                </h2>
                <div class="p-skill__contents">
                    <div class="p-skill__img">
                        <div class="p-skill__icon">
                            <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-code.png" alt="">
                            <p class="p-skill__lead">コーディング</p> -->
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/skill-img.svg" alt="">
                        </div>
                    </div>
                    <!-- /.p-skill__img -->
                    <div class="p-skill__explanation">
                        <p>　HTMLとCSSを用いてデザインを忠実に再現致します。HTMLはSEOを意識し、CSSではSASSやFLOCCSのCSS設計を
                            採用し保守性や効率性を意識したコーディングを行います。<br>　またJqueryを使用し基本的な動きをWEBサイトに実装することができます。
                            WordPressを実装し動的なWEBサイトの実装が可能です。
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-contact">
            <div class="p-contact__inner">
                <div class="p-section-title">
                    <h2 class="c-section-title p-contact__title">Contact</h2>
                </div>
                <?PHP get_template_part('content-contact'); ?>
            </div>
        </section>

        <?php get_footer(); ?>
    </div>