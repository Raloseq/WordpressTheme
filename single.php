<?php get_header() ?>
<?php while( have_posts(  ) ): the_post(  )?>
    <section class="app-page__content app-page__content-single">
        <div class="post-content">
            <div class="post-content__heading">
                <h3><?php the_title( ) ?></h3>
                <h3 class="post-content__heading-author">Author: <?php the_author( ) ?></h3>
            </div>
            <?php the_content( ) ?>
        </div>
        <div class="post-sidebar">
            <?php dynamic_sidebar( 'single-page' ) ?>
        </div>
    </section>
<?php endwhile ?>
<?php get_footer() ?>