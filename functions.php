<?php

    /**
     * Enqueue scripts
     *
     * @param string $handle Script name
     * @param string $src Script url
     * @param array $deps (optional) Array of script names on which this script depends
     * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
     * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
     */
    function misRecursos() {

        wp_enqueue_style( 'style', get_stylesheet_uri() ); // añade style.css

    }

    add_action( 'wp_enqueue_scripts', 'misRecursos' );




?>