<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/73db00d111.js" crossorigin="anonymous"></script>
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="l-header">
        <div class="p-header-content">
            <h1 class="p-header-content__title"><a href="/"><?php bloginfo( 'name' ); ?></h1></a>
            <div class="c-openbtn">
                <div class="c-openbtn__area">
                    <span></span><span></span><span></span>
                </div>
            </div>
            <div class="p-header-content__menu">
                <?php
                    wp_nav_menu(
                        array (
                            'thme_location' => 'place_global',
                            'container' => false ,
                            'menu_class' => 'p-header-content__list'
                    
                        )
                    );
                ?>
            </div>
        </div>
    </header>