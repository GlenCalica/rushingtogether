<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rushing Together</title>
</head>

<body>
    <div class="site-wrapper">
        <nav class="nav-top">
            <a href="<?php echo get_home_url() ?>">
                <h1>Rushing Together</h1>
            </a>
            <button class="hamburger-open" id="hamburger-open"><img src="<?php echo get_template_directory_uri() . "/assets/icons/icon-hamburger.svg"; ?>" alt="Menu Icon"></button>

            <!-- <div class="nav-bar">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Articles</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Recommendations</a></li>
                    <li>
                        <div class="search">
                            <form class="search-form">
                                <input type="text" placeholder="Search . . .">
                                <button class="btn-search"><img src="<?php echo get_template_directory_uri() . "/assets/icons/icon-search.svg"; ?>" alt=" Search Icon"></button>
                            </form>
                        </div>
                    </li>
                </ul>
            </div> -->

            <?php
            $search_form = get_search_form(false);

            $search_form = '
            <div class="search" method="get" action="<?php echo home_url(); ?>">
            <form class="search-form">
                <input type="text" name="s" placeholder="Search . . .">
                <button type="submit" value="submit" class="btn-search">
                    <img src="' . get_template_directory_uri() . '/assets/icons/icon-search.svg" alt="Search Icon">
                </button>
            </form>
            </div>
            ';

            // $search_form = get_search_form();

            $items_wrap = '<ul id="%1$s" class="%2$s">%3$s';
            // $items_wrap .= sprintf('<li id="searchItem">%1$s</li></ul>', $search_form);
            $items_wrap .= sprintf('<li id="searchItem">%1$s</li></ul>', $search_form);



            wp_nav_menu(
                array(
                    'theme_location' => 'top-menu',
                    'container_class' => 'nav-bar',
                    'items_wrap' => $items_wrap,
                )
            )
            ?>


        </nav>

        <div class="mobile-menu-background"></div>

        <div class="mobile-menu">
            <div class="container">
                <div class="heading">
                    <button id="hamburger-close" class="hamburger-close"><img src="<?php echo get_template_directory_uri() . "/assets/icons/icon-close.svg"; ?>" alt="Close Menu Icon"></button>
                </div>

                <!-- <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Articles</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Recommendations</a></li>
                    <li><a href="#">Privacy</a></li>
                </ul> -->

                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'mobile-menu',
                    )
                )
                ?>


                <div class="bottom">

                    <?php get_search_form(); ?>

                    <div class="socials">
                        <p class="social-title">Follow Us</p>
                        <a href="#"><img class="icon" src="<?php echo get_template_directory_uri() . "/assets/icons/instagram.svg"; ?>" alt="Instagram Icon"></a>
                        <a href="#"><img class="icon" src="<?php echo get_template_directory_uri() . "/assets/icons/facebook.svg"; ?>" alt="Facebook Icon"></a>
                    </div>

                    <div class="ending-tag">
                        <h2> <span>©</span> 2021 Rushing Together</h2>
                        <p>Made by <a href="#">Calica</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="top-margin"></div>