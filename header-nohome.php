<!DOCTYPE HTML>
<!--
    Dopetrope by HTML5 UP
    html5up.net | @n33co
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html <?php language_attributes(); ?>>
    <head>
        <title><?php bloginfo('name'); ?></title>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/ie/html5shiv.js"></script><![endif]-->
        <?php wp_head(); ?>
        <!--[if lte IE 8]><link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/ie8.css" /><![endif]-->
    </head>
    <body class="no-sidebar">
        <div id="page-wrapper">

            <!-- Header -->
                <div id="header-wrapper">
                    <div id="header">

                        <!-- Logo -->
                           <h1><a href="<?php home_url(); ?>"><?php bloginfo('name') ?></a></h1>

                        <?php
                           /**
                            * Displays a navigation menu
                            * @param array $args Arguments
                            */
                            $args = array(
                                'theme_location' => 'principal',
                                'container' => 'nav',
                                'container_id' => 'nav',
                            );

                            wp_nav_menu( $args );
                    ?>
                  </div>
                </div>



