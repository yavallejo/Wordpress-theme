<?php

    register_nav_menus( array(

        'principal' => 'Menú Principal'



        ));

    /**
     * Agregamos los scripts y los css que vamos a utilizar en  nuestro sitio web.
     *
     * @param string $handle Script name
     * @param string $src Script url
     * @param array $deps (optional) Array of script names on which this script depends
     * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
     * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
     */
    function misRecursos() {
        wp_enqueue_style("style",get_stylesheet_uri());
        wp_enqueue_script( 'dropotron', get_template_directory_uri() . '/assets/js/jquery.dropotron.min.js', array( 'jquery' ), '1.4.3', true);
        wp_enqueue_script( 'skel', get_template_directory_uri() . '/assets/js/skel.min.js', array( 'jquery' ), '3.0.0', true);
        wp_enqueue_script( 'skel-viewport', get_template_directory_uri() . '/assets/js/skel-viewport.min.js', array( 'jquery' ), '3.0.0', true);
        wp_enqueue_script( 'util', get_template_directory_uri() . '/assets/js/util.js', array( 'jquery' ), '1.0.0', true);
        wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), '1.0.0', true);
    }

    add_action( 'wp_enqueue_scripts', 'misRecursos' );




?>
