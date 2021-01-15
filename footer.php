<?php wp_footer(); ?>

<footer>
    <h1>Rushing Together</h1>

    <div class="footer-menu">
        <div class="subscribe">
            <p>Sign up for our newsletter</p>
            <form class="email">
                <input type="text" placeholder="Email Address">
                <button>Subscribe</button>
            </form>
        </div>

        <nav class="footer-nav">
            <!-- <div class="nav-links">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Articles</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Recommendations</a></li>
                    <li><a href="#">Privacy</a></li>
                </ul>
            </div> -->


            <?php wp_nav_menu(
                array(
                    'theme_location' => 'footer-menu',
                    'container_class' => 'nav-links'
                )
            )
            ?>


            <div class="socials">
                <p class="social-title">Follow Us</p>
                <a href="#"><img class="icon" src="<?php echo get_template_directory_uri() . "/assets/icons/instagram.svg"; ?>" alt="Instagram Icon"></a>
                <a href="#"><img class="icon" src="<?php echo get_template_directory_uri() . "/assets/icons/facebook.svg"; ?>" alt="Facebook Icon"></a>
            </div>
        </nav>
    </div>

    <div class="ending-tag">
        <h2> <span>©</span> 2021 Rushing Together</h2>
        <p>Made by <a href="#">Calica</a></p>
    </div>

</footer>

<!-- <script src="app.js"></script> -->
</div>
</body>

</html>