<?php

// when we have a local PREFIXED version of bootstrap, we can comment this back in
add_action( 'admin_enqueue_scripts', 'colby_base_script_enqueue_backend' );
add_action( 'wp_enqueue_scripts', 'colby_base_script_enqueue_frontend'  );

function colby_base_localized_script () {
    global $post;
    $colbyBase = [
            'blogId' => (int)get_current_blog_id(),
            'postId' => (int)$post->ID,
            'siteUrl' => get_site_url(),
            'host' => $_SERVER['HTTP_HOST'],
            'siteProtocol' => stripos($_SERVER['SERVER_PROTOCOL'], 'https') !== 0 ? 'https://' : 'http://',
            'isAdmin' => is_admin(),
        ];
        wp_localize_script( 'colby-college', 'colbyBase', $colbyBase );
}

function colby_base_script_enqueue_backend() {
    wp_enqueue_script( 
        'colby-college',
        trailingslashit( get_template_directory_uri() ) . 'src/index.js',
        [],
        '',
        false   
    );

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

// function colby_base_custom_error_pages()
// {
//     global $wp_query;
 
//     if(isset($_REQUEST['status']) && $_REQUEST['status'] == 403)
//     {
//         $wp_query->is_404 = FALSE;
//         $wp_query->is_page = TRUE;
//         $wp_query->is_singular = TRUE;
//         $wp_query->is_single = FALSE;
//         $wp_query->is_home = FALSE;
//         $wp_query->is_archive = FALSE;
//         $wp_query->is_category = FALSE;
//         add_filter('wp_title','custom_error_title',65000,2);
//         add_filter('body_class','custom_error_class');
//         status_header(403);
//         get_template_part('403');
//         exit;
//     }
 
//     if(isset($_REQUEST['status']) && $_REQUEST['status'] == 401)
//     {
//         $wp_query->is_404 = FALSE;
//         $wp_query->is_page = TRUE;
//         $wp_query->is_singular = TRUE;
//         $wp_query->is_single = FALSE;
//         $wp_query->is_home = FALSE;
//         $wp_query->is_archive = FALSE;
//         $wp_query->is_category = FALSE;
//         add_filter('wp_title','custom_error_title',65000,2);
//         add_filter('body_class','custom_error_class');
//         status_header(401);
//         get_template_part('401');
//         exit;
//     }
// }
 
// function colby_base_custom_error_title($title='',$sep='')
// {
//     if(isset($_REQUEST['status']) && $_REQUEST['status'] == 403)
//         return "Forbidden ".$sep." ".get_bloginfo('name');
 
//     if(isset($_REQUEST['status']) && $_REQUEST['status'] == 401)
//         return "Unauthorized ".$sep." ".get_bloginfo('name');
// }
 
// function colby_base_custom_error_class($classes)
// {
//     if(isset($_REQUEST['status']) && $_REQUEST['status'] == 403)
//     {
//         $classes[]="error403";
//         return $classes;
//     }
 
//     if(isset($_REQUEST['status']) && $_REQUEST['status'] == 401)
//     {
//         $classes[]="error401";
//         return $classes;
//     }
// }
 
// add_action('wp','colby_base_custom_error_pages');