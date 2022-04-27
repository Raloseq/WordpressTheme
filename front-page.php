<?php get_header( ); ?>

<main class="app-main">
    <section class="app-home">
        <h1 class="app-home__heading">Sport and Diet !</h1>
        <p class="app-home__description">You will achieve everything with us.<p>
        <button class="app-home__btn">Get in touch</button>
        <div class="waves"></div>
    </section>
    <section id="about-us" class="app-about">
        <h2 class="app-about__heading"><?php echo esc_attr( get_theme_mod('rf-aboutus-section-heading') )?></h2>
        <p class="app-about__description"><?php echo esc_attr( get_theme_mod('rf-aboutus-section-description') )?></p>
    </section>
    <section id="offer" class="app-offer">
        <h2 class="app-offer__heading">Offer</h2>
        <p class="app-offer__description">Check out our ofer im soure about that u gonna find something for u !</p>
        <div class="app-offer__card-wrapper">
            <div class="app-offer__card" style="background-image: url(<?php echo get_theme_file_uri('images/card1.jpg') ?>)">
                <h3 class="app-offer__card-heading">Diet</h3>
                <div class="app-offer__card-content">
                    <p class="app-offer__card-description">We will arrange a diet especially for you.</p>
                    <a href="<?php echo site_url('/diet'); ?>" class="app-offer__card-link">Check</a>
                </div>
            </div>
            <div class="app-offer__card" style="background-image: url(<?php echo get_theme_file_uri('images/card2.jpg') ?>)">
                <h3 class="app-offer__card-heading">Trening plan</h3>
                <div class="app-offer__card-content">
                    <p class="app-offer__card-description">We will prepare a training plan for you</p>
                    <a href="<?php echo site_url('/trening-plan'); ?>" class="app-offer__card-link">Check</a>
                </div>
            </div>
            <div class="app-offer__card" style="background-image: url(<?php echo get_theme_file_uri('images/card3.jpg') ?>)">
                <h3 class="app-offer__card-heading">Motor preparation</h3>
                <div class="app-offer__card-content">
                    <p class="app-offer__card-description">We will make a plan of motor preparation for you</p>
                    <a href="<?php echo site_url('/motor-preparation'); ?>" class="app-offer__card-link">Check</a>
                </div>
            </div>
        </div>
    </section>
    <section id="blog" class="app-blog" style="background-image: url(<?php echo get_theme_file_uri('images/blog.jpg') ?>)">
        <div class="background"></div>
        <div class="foreground">
            <h2 class="app-blog__heading">Blog</h2>
            <p class="app-blog__description">Check our latest blog posts !</p>
            <div class="app-blog__posts">
                <?php 

                    $mainBlogPosts = new WP_Query( array(
                        'posts_per_page' => 3
                    ) );

                    if(have_posts(  )) {

                        while($mainBlogPosts->have_posts(  )) {

                            $mainBlogPosts->the_post(  );
                            get_template_part( 'template-parts/post', 'card' );
                            
                        }
                    }

                    wp_reset_postdata();
                ?>
            </div>
            <a href="<?php echo site_url('/blog')?>" class="app-blog__blog-link">All posts</a>
        </div>
        
    </section>
    <section class="app-testimonials" id="testimonials">
        <h2 class="app-testimonials__heading">Testimonials</h2>
        <div class="container">
            <div class="testimonial">
                
                <div class="slide-row"> 
                    <?php

                        $testimonials = new WP_Query( array(
                            'post_type' => 'testimonials',
                            'posts_per_page' => -1,
                        ) );

                        if ( $testimonials->have_posts( ) ) :
                            while( $testimonials->have_posts( ) ) : $testimonials->the_post( )
                    ?>
                            <div class="slide-col">
                                <div class="user-text">
                                    <p><?php the_content( ) ?></p>
                                    <h3><?php the_title( ) ?></h3>
                                </div>
                                <div class="user-img">
                                    <?php the_post_thumbnail( 'testimonials-thumbnail' ); ?>
                                </div>
                            </div>
                    <?php endwhile; endif; ?>
                </div>  
            </div> 
            <div class="testimonial-controls">
                <a class="prev"><i class="fa fa-arrow-left"></i></a>
                <a class="next"><i class="fa fa-arrow-right"></i></a>
            </div>
            
        </div>
    </section>
    <section id="contact" class="app-contact">	
        <h2 class="app-contact__heading">Contact</h2>
        <p class="app-contact__description">If u have any questions feel free to ask them</p>
        <div class="app-contact__form">
            <?php echo apply_shortcodes( '[contact-form-7 id="41" title="Contact form 1"]' ); ?>
        </div>
    </section>
</main>
    
<?php get_footer( ); ?>
