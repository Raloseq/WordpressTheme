<?php get_header( ); ?>

<main class="app-main">
    <section class="app-home">
        <h1 class="app-home__heading">Sport and Diet !</h1>
        <p class="app-home__description">You will achieve everything with us.<p>
        <button class="app-home__btn">Get in touch</button>
        <div class="waves"></div>
    </section>
    <section id="about-us" class="app-about">
        <h2 class="app-about__heading">About Us</h2>
        <p class="app-about__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consectetur fringilla convallis. Aenean ligula sem, varius id aliquet ac, accumsan eu erat. Proin sollicitudin et turpis id pellentesque. Suspendisse aliquet sem ac justo faucibus, quis facilisis ligula auctor. Duis diam lectus, ultricies vel eros a, ultrices dictum mi. Suspendisse quis tincidunt urna. Curabitur vitae odio eget lorem gravida tincidunt nec vel erat. Aliquam suscipit urna nisl, consectetur tincidunt diam iaculis a.</p>
    </section>
    <section id="offer" class="app-offer">
        <h2 class="app-offer__heading">Offer</h2>
        <p class="app-offer__description">Check out our ofer im soure about that u gonna find something for u !</p>
        <div class="app-offer__card-wrapper">
            <div class="app-offer__card" style="background-image: url(<?php echo get_theme_file_uri('images/card1.jpg') ?>)">
                <h3 class="app-offer__card-heading">Diet</h3>
                <div class="app-offer__card-content">
                    <p class="app-offer__card-description">We will arrange a diet especially for you.</p>
                    <a href="#" class="app-offer__card-link">Check</a>
                </div>
            </div>
            <div class="app-offer__card" style="background-image: url(<?php echo get_theme_file_uri('images/card2.jpg') ?>)">
                <h3 class="app-offer__card-heading">Trening plan</h3>
                <div class="app-offer__card-content">
                    <p class="app-offer__card-description">We will prepare a training plan for you</p>
                    <a href="#" class="app-offer__card-link">Check</a>
                </div>
            </div>
            <div class="app-offer__card" style="background-image: url(<?php echo get_theme_file_uri('images/card3.jpg') ?>)">
                <h3 class="app-offer__card-heading">Motor preparation</h3>
                <div class="app-offer__card-content">
                    <p class="app-offer__card-description">We will make a plan of motor preparation for you</p>
                    <a href="#" class="app-offer__card-link">Check</a>
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
                <?php if(have_posts(  )): ?>
                    <?php while(have_posts(  )): the_post(  )?>     
                        <div class="app-blog__post">
                            <div class="app-blog__post-header"><?php the_post_thumbnail( ) ?></div>
                            <div class="app-blog__post-content">
                                <p class="app-blog__post-category"><?php the_category( )?></p>
                                <h3 class="app-blog__post-title"><?php the_title( )?></h3>
                                <p class="app-blog__post-excerpt"><?php  echo wp_trim_words( get_the_content( ), 18 );?></p>
                            </div>           
                            <div class="app-blog__post-footer">
                                <p class="post-footer__author">Author: <?php the_author( )?></p>
                                <a href="<?php the_permalink( )?>" class="post-footer__permalink">Read</a>
                            </div>
                        </div>         	
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        
    </section>
    <section id="contact" style="height: 100vh">
    
    </section>
</main>
    
<?php get_footer( ); ?>
