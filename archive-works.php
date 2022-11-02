<?php get_header(); ?>
    <div class="l-main l-main__archive">
        <section class="p-works">
            <div class="l-inner">
                <h2 class="p-section-title">Works</h2>
                <div class="p-card">
                    <div class="p-works__contents">
                        <?php
                        $args = [
                        'post_type' => 'works', // カスタム投稿名が「gourmet」の場合
                        'posts_per_page' => 5, // 表示する数
                        ];
                        $my_posts = get_posts($args); ?>
    
                        <?php if ($my_posts) : foreach ($my_posts as $post) : setup_postdata($post); // 投稿がある場合 ?>
                            <a href="" class="p-works__contents-item">
                                <div class="p-works__contents-container">
                                    <div class="p-works__contents-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images.jpeg" alt="">
                        
                                    </div>
                                </div>
                            </a>
                        <?php endforeach; ?>
                        <?php else : // 記事がない場合 ?>
                            <li>まだ投稿がありません。</li>
                        <?php endif; wp_reset_postdata(); ?>
                        <a href="" class="p-works__contents-item">
                                <div class="p-works__contents-container">
                                    <div class="p-works__contents-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images.jpeg" alt="">
        
                                    </div>
                                </div>
                            </a>
                            <a href="" class="p-works__contents-item">
                                <div class="p-works__contents-container">
                                    <div class="p-works__contents-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images.jpeg" alt="">
        
                                    </div>
                                </div>
                            </a>
                            <a href="" class="p-works__contents-item">
                                <div class="p-works__contents-container">
                                    <div class="p-works__contents-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images.jpeg" alt="">
        
                                    </div>
                                </div>
                            </a>
                    </div>
                </div>
            </div>
        </section>
<?php get_footer(); ?>