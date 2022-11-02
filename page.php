<?php get_header(); ?>
    <div class="l-main l-main__archive">
        <section class="p-works">
            <div class="l-inner-form">
                <div class="p-section-title">
                    <h2 class="p-section-title__text"><?php echo single_post_title(); ?></h2>
                </div>
                <!-- <form class="p-form" action="https://docs.google.com/forms/u/1/d/e/1FAIpQLScW8fXrqTmTqKHsTgSjCfPTxHvJB93R8eCa367X7WLlZekimg/formResponse"
                    
                    >
                    <div class="p-form__item">
                        <p class="p-form__item-label"><span class="p-form__item-label-required">必須</span>お名前</p>
                        <input type="text" name="entry.2005620554" class="p-form__item-input">
                    </div>
                    <div class="p-form__item">
                        <p class="p-form__item-label"><span class="p-form__item-label-required">必須</span>メールアドレス</p>
                        <input type="email" name="entry.1045781291" class="p-form__item-input" placeholder="例）example@gmail.com">
                    </div>
                    <div class="p-form__item">
                        <p class="p-form__item-label isMsg"><span class="p-form__item-label-required">必須</span>お問い合わせ内容</p>
                        <textarea class="p-form__item-textarea" name="entry.839337160"></textarea>
                    </div>
                    <input type="submit" class="c-btn-form" value="送信する">
                </form> -->
                <div><?php the_content(); ?></div>
            </div>
        </section>
<?php get_footer(); ?>