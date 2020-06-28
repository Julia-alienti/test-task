<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title><?php echo wp_get_document_title(); ?></title>
    <?php wp_head();?>
</head>
<body>
<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <?php wp_nav_menu( array( 'menu_class'      => 'navbar-nav','container'       => false, 'theme_location' => 'primary','items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>' ,'walker'        => new walker_nav_top_menu  ) ); ?>
            </div>
        </nav>
    </div>
</header>