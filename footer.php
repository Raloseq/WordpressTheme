<footer class="app-footer">
    <nav class="app-footer__nav">
        <?php 
            wp_nav_menu( array( 
                'menu' => 'footer',
                'container' => 'app-footer__nav',
                'theme_location' => 'footer'
            ) );
        ?>
    </nav>
    <div class="app-footer__social-links">
        <p class="social-links__heading">Check us on our socials.</p>
        <div class="links">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-youtube"></a>
            <a href="#" class="fa fa-instagram"></a>
        </div>
    </div>
</footer>
<?php wp_footer() ?>
</body>
</html>