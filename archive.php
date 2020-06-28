<?php
get_header();  ?>
    <div class="typical-page">
        <div class="container">
            <?php if (have_posts()) : ?>
                <div class="row">
                    <?php while (have_posts()) : the_post();
                        get_template_part( 'templates/template-parts/content' );
                    endwhile; ?>
                </div>
                <?php
                the_posts_pagination(array(
                    'prev_text' => '',
                    'next_text' => '',
                ));
            else : ?>
                <p>К сожалению, ничего не найдено</p>
            <?php
            endif;
            ?>
        </div>
    </div>
<?php get_footer();
