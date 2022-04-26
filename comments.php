<h3 class="comment-title">
    <?php 
        printf(
            esc_html( _nx('One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number( ), 'comment title', 'raloseqfitness' ) ),
            number_format_i18n( get_comments_number(  ) ),
            '<span>' . get_the_title( ) . '</span>'
        )
    ?>
</h3>


<?php 

    wp_list_comments( array(
        'avatar_size' => 74,
        'style' => 'div',
        'max_depth' => 3
    ) );

?>