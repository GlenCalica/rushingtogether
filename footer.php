<?php wp_footer(); ?>

<footer>
    <h1>Rushing Together</h1>

    <div class="footer-menu">
        <nav class="footer-nav">

            <?php wp_nav_menu(
                array(
                    'theme_location' => 'footer-menu',
                    'container_class' => 'nav-links'
                )
            )
            ?>

            <div class="socials">
                <p class="social-title">Follow Us</p>
                <a target="_blank" href="https://www.instagram.com/rushingtogether/"><img class="icon" src="<?php echo get_template_directory_uri() . "/assets/icons/instagram.svg"; ?>" alt="Instagram Icon"></a>
            </div>
        </nav>
    </div>

    <div class="ending-tag">
        <h2> <span>©</span> 2021 Rushing Together</h2>
        <p>Made by Glen Calica</p>
    </div>

</footer>
</div>
</body>

</html>