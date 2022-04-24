<?php get_header() ?>

    <section class="app-page__content">
        <div class="error-404-info">
            <h2 class="error-404-info__heading">Page not found</h2>
            <?php get_search_form(  ); ?>
            <a href="<?php echo site_url('/') ?>" class="error-404-link">Back to main page</a>
        </div>
    </section>

<?php get_footer() ?>