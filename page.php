<?php get_header() ?>

<section class="app-page__hero">
    <div class="app-page__hero-content">
        <h1 class="app-page__heading">Diet</h1>
        <p class="app-page__description">Lorem ipsum dolor sit amet.</p>
    </div>
    <img src="<?php echo get_theme_file_uri('images/header.jpg') ?>" alt="">
</section>

<section class="app-page__content">
    <?php while( have_posts(  ) ): the_post(  )?>
        <?php the_content( ) ?>
    <?php endwhile ?>
</section>

<?php get_footer() ?>
