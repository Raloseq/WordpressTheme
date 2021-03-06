<article class="app-blog__post">
    <div class="app-blog__post-header"><?php the_post_thumbnail( ) ?></div>
    <div class="app-blog__post-content">
        <p class="app-blog__post-date"><?php the_date( )?></p>
        <p class="app-blog__post-tags"><?php the_tags( )?></p>
        <h3 class="app-blog__post-title"><?php the_title( )?></h3>
        <p class="app-blog__post-excerpt"><?php  echo wp_trim_words( get_the_content( ), 18 );?></p>
    </div>           
    <div class="app-blog__post-footer">
        <p class="post-footer__author">Author: <?php the_author( )?></p>
        <a href="<?php the_permalink( )?>" class="post-footer__permalink">Read</a>
    </div>
</article>         