<?php get_header() ?>
<?php while( have_posts(  ) ): the_post(  )?>
    <section class="app-page__content app-page__content-single">
        <div class="post-content">
            <?php the_content( ) ?>
        </div>
        <div class="post-sidebar">
            <?php dynamic_sidebar( 'single-page' ) ?>
        </div>
    </section>
<?php endwhile ?>
<?php get_footer() ?>