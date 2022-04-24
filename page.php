<?php get_header() ?>
<?php while( have_posts(  ) ): the_post(  )?>
    <section class="app-page__hero">
        <div class="app-page__hero-content">
            <h1 class="app-page__heading"><?php the_title() ?></h1>
        </div>
        <img src="<?php echo get_theme_file_uri('images/header.jpg') ?>" alt="">
    </section>

    <section class="app-page__content">
        <?php the_content( ) ?>
    </section>
<?php endwhile ?>
<?php get_footer() ?>
