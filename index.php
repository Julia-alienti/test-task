<?php get_header(); ?>
    <div class="typical-page">
        <div class="container">
            <h1><?php the_title();?></h1>
            <?php
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();
                    the_content('',true);
                } // end while
            } // end if
            ?>
        </div>
    </div>
<?php get_footer();