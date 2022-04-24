<?php get_header() ?>

    <section class="app-page__content search">
        <?php 

            $term = $_GET['s'];
            $expTerm = explode(" ",$term);
            $search = "(";


            foreach ($expTerm as $ek => $ev) {
                if ($ek == 0) {
                    $search .= " post_title LIKE'%". $ev . "%' ";
                } else {
                    $search .= " OR post_title LIKE'%". $ev . "%' ";
                }
            }

            $search .= ")";

            $query = $wpdb->get_results(" SELECT * FROM ". $wpdb->prefix . "posts WHERE post_status='publish' AND $search");

            foreach ($query as $qk => $qv) {
                $link = get_permalink($qv->ID);
        ?>      
                <div class="app-search__result">
                    <h3 class="app-search__heading"><?php echo $qv->post_title ?></h3>
                    <p class="app-search__description"><?php print wp_trim_words( $qv->post_content, 40, '... <a href="' . $link . '">Continue Reading</a>' )?></p>
                </div>

        <?php
            }

            get_search_form( );
        ?>
    </section>
    
<?php get_footer() ?>
