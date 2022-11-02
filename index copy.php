<?php get_header(); ?>
    <div class="l-main">
        <section class="p-works">
            <div class="p-works__inner">
                <h2 class="c-section-title">
                    Works
                </h2>
                <div class="p-card">
                    <div class="p-card__contents">
                        <?php
                            $args = [
                                'post_type' => 'works', // カスタム投稿名が「gourmet」の場合
                                'posts_per_page' => 5, // 表示する数
                            ];
                            $my_query = new WP_Query($args); ?>
                        <?php if ($my_query->have_posts()): // 投稿がある場合 ?>
                        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                            <a href="" class="p-post">
                                <div class="p-post__thumbnail">
                                    <div class="p-post__img">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                </div>
                                <div class="p-works__post-name">
                                    <?php the_title() ?>
                                </div>
                            </a>
                        <?php endwhile; ?>
                        <?php else: // 投稿がない場合?>
                        <p>まだ投稿がありません。</p>
                        <?php endif; wp_reset_postdata(); ?>
                    </div>
                    <?php
                    $count_posts = wp_count_posts('works');
                    $published_posts = $count_posts->publish;
                    if( $published_posts >= 5 ): ?>
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
                <h2 class="c-section-title">
                    Skills
                </h2>
                <div class="p-skill__contents">
                    <div class="p-skill__icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons8-code-88.png" alt="">
                        <p class="p-skill__lead">コーディング</p>
                    </div>
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
                    <h2 class="c-section-title">Contact</h2>
                </div>
                <?PHP get_template_part('content-contact'); ?>
            </div>
        </section>
<?php get_footer(); ?>