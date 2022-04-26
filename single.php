<?php get_header() ?>
<?php while( have_posts(  ) ): the_post(  )?>
    <section class="app-page__content app-page__content-single">
        <div class="post-head">
            <article class="post-content">
                <div class="post-content__heading">
                    <h3><?php the_title( ) ?></h3>
                    <h3 class="post-content__heading-author">Author: <?php the_author( ) ?></h3>
                </div>
                <?php the_content( ) ?>
            </article>
            <div class="post-sidebar">
                <?php dynamic_sidebar( 'single-page' ) ?>
            </div>
        </div>
        <div class="post-comment">
            <div class="post-comment__form">
            <?php

                if ( comments_open( ) ) {
                    comment_form( array(
                        'class_form' => 'post-comment-form',
                        'title_reply_before' => '<h2 class="comment-reply-title">',
                        'title_reply_after' => '</h2>'
                    ) );
                }

            ?> 
            </div>

            <div class="post-comment__comments">
                <?php comments_template( ) ?>
            </div>
        </div>
    </section>
<?php endwhile ?>
<?php get_footer() ?>