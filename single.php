<?php get_header() ?>
<?php while( have_posts(  ) ): the_post(  )?>
    <section class="app-page__content">
        <?php the_content( ) ?>
    </section>
<?php endwhile ?>
<?php get_footer() ?>