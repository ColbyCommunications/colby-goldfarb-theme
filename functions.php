<?php

// when we have a local PREFIXED version of bootstrap, we can comment this back in
add_action( 'admin_enqueue_scripts', 'colby_base_script_enqueue_backend' );
add_action( 'wp_enqueue_scripts', 'colby_base_script_enqueue_frontend'  );

function colby_base_localized_script () {
    $colbyBase = [
            'blogId' => (int)get_current_blog_id(),
            'postId' => (int)$post->ID,
            'siteUrl' => get_site_url(),
            'host' => $_SERVER['HTTP_HOST'],
            'siteProtocol' => stripos($_SERVER['SERVER_PROTOCOL'], 'https') !== 0 ? 'https://' : 'http://',
        ];
        wp_localize_script( 'colby-college', 'colbyBase', $colbyBase );
}

function colby_base_script_enqueue_backend() {
    // we should not use bootstrap scripts/styles in the WP admin
    // WP5 has its own way of creating block editing experiences,
    // so we only need to rely on bootstrap on the FE

    global $post;
    $bundle_js_path = '/app/web/build/js.bundle.filename';
    $bundle_css_path = '/app/web/build/css.bundle.filename';
    wp_enqueue_script( 
        'colby-college',
        fgets(fopen($bundle_js_path, 'r')),
        [],
        '',
        true    
    );

    if (file_exists($bundle_css_path)) {
        wp_enqueue_style( 
            'colby-college',
            fgets(fopen($bundle_css_path, 'r')),
            [],
            '',
            true    
        );
    }

    colby_base_localized_script();
}

function colby_base_script_enqueue_frontend() {
    colby_base_script_enqueue_backend();
    wp_enqueue_script( 
        'bootstrap_js_jquery',
        'https://code.jquery.com/jquery-3.3.1.slim.min.js'
    );
    wp_enqueue_script( 
        'bootstrap_js_popper',
        'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'
    );
    wp_enqueue_script( 
        'bootstrap_js',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'
    );
    wp_enqueue_style('bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css');

    colby_base_localized_script();
}