<?php

// when we have a local PREFIXED version of bootstrap, we can comment this back in
// add_action( 'admin_enqueue_scripts', 'colby_base_script_enqueue' );
add_action( 'wp_enqueue_scripts', 'colby_base_script_enqueue'  );

// function colby_base_script_enqueue() {
//     wp_enqueue_style('bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css');
//     global $post;
//     $bundle_js_path = get_site_url() . '/build/js.bundle.filename';
//     $bundle_css_path = get_site_url() . '/build/app.bundle.filename';
//     wp_enqueue_script( 
//         'colby-college',
//         'https://0.0.0.0:9000/app.bundle.js',
//         [],
//         '',
//         false    
//     );
    
// }

function colby_base_script_enqueue() {
    wp_enqueue_style('bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css');
    global $post;
    $bundle_js_path = '/app/web/build/js.bundle.filename';
    $bundle_css_path = '/app/web/build/css.bundle.filename';
    // die(fgets(fopen($bundle_js_path, 'r')));
    wp_enqueue_script( 
        'colby-college',
        fgets(fopen($bundle_js_path, 'r')),
        [],
        '',
        false    
    );

    if (file_exists($bundle_css_path)) {
        wp_enqueue_style( 
            'colby-college',
            fgets(fopen($bundle_css_path, 'r')),
            [],
            '',
            false    
        );
    }
}