<?php
    add_theme_support( 'post-thumbnails' );


    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => 'Sidebar',
            'before_widget' => '<div class="widget">',
            'before_title' => '<div class="title">',
            'after_title' => '</div><div class="content">',
            'after_widget' => '</div></div>'
        ));
    }

    function add_theme_scripts() {
        wp_enqueue_style( 'style', get_stylesheet_uri() );
       
        wp_enqueue_style( 'posts', get_template_directory_uri() . '/css/posts.css', array(), '1.1', 'all');


          if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
          }
      }
      add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

