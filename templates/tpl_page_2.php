<?php
/*
Template Name: Шаблон страницы 2
*/
get_header();  $id_page=get_the_ID(); ?>
<?php
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post(); ?>
        <div class="typical-page">
            <div class="container">
                <div class="alert alert-primary" role="alert">
                    Шаблон страницы 2
                </div>
                <h1><?php the_title();?></h1>
                <?php the_content('',true); ?>
            </div>
        </div>
    <?php } // end while
} // end if
?>
<?php get_footer();