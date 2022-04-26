<?php get_header() ?>

    <section class="app-page__hero">
        <div class="app-page__hero-content">
            <h1 class="app-page__heading">Blog</h1>
        </div>
        <img src="<?php echo get_theme_file_uri('images/header.jpg') ?>" alt="">
    </section>

    <section class="app-blog__posts">
        <div class="app-blog__post-wrapper">
            <?php 
                $posts = new WP_Query( array(
                    'post_type' => 'post',
                    'posts_per_page' => 6
                ) );

                while( $posts->have_posts(  ) ): $posts->the_post(  )
            ?> 

                <?php get_template_part( 'template-parts/post', 'card' ); ?>

            <?php endwhile ?>
        </div>
        <div class="post-sidebar">
        <?php dynamic_sidebar( 'blog-page' ) ?>
    </div>
    </section>

<?php get_footer() ?>