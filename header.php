<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="main-wrapper" id="mainWrapper">

<div class="main-container">

        <div class="header-wrapper">

            <header class="header-class" id="headerID">
                <div class="header-child-container">

                    <?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
                    <?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?>

                </div>
                
                <div class="header-child-container">
                    <span class="menu-link" id="menuLinkID" title="Click to View Menu" alt="Click to View Menu">Menu</span>
                </div>

        </div>

        <div class="full-width-menu">

            <nav class="top-nav-class" id="menu">


                <!-- <div id="search"><?php get_search_form(); ?></div> -->
                <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                <!-- <div id="site-description"><?php bloginfo( 'description' ); ?>
                </div> -->
            </nav>

        </div>

</header>

<div id="container">