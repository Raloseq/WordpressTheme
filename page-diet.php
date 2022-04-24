<?php get_header() ?>

<main class="app-page">
    <section class="app-page__hero">
        <div class="app-page__hero-content">
            <h1 class="app-page__heading">Diet</h1>
            <p class="app-page__description">Choose something from the list
    </p>
        </div>
        <img src="<?php echo get_theme_file_uri('images/header.jpg') ?>" alt="">
    </section>

    <section class="app-page__content-diet app-page__content">
        <?php 
            $dietPost = new WP_Query( array(
                'posts_per_page' => -1,
                'post_type' => 'diets'
            ) );
        ?>        
        <?php if( $dietPost->have_posts( ) ) : while ( $dietPost->have_posts( ) ) : $dietPost->the_post( )?>
                <div class="diet-card">
                    <?php the_content(); ?>
                    <p class="diet-card--warning">Not for: <?php the_field('Contraindications'); ?> !</p>
                    <p>Price starts at: <?php the_field('price'); ?></p>
                </div>
        <?php endwhile; endif;?>
    </section>
</main>

<?php get_footer() ?>