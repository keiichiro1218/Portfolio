<?php get_header(); ?>
    <div class="l-main l-main__archive">
        <section class="p-contact">
            <div class="p-contact__inner">
                <div class="c-section-title">
                    <h2 class="c-section-title__text"><?php echo single_post_title(); ?></h2>
                </div>
                <?PHP get_template_part('content-contact'); ?>
            </div>
        </section>
<?php get_footer(); ?>