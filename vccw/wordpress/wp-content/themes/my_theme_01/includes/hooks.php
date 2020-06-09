<?php

add_filter( 'emoji_svg_url', '__return_empty_string' );

remove_action( 'wp_head'            , 'wp_generator'                    );
remove_action( 'wp_head'            , 'wlwmanifest_link'                );
remove_action( 'wp_head'            , 'rsd_link'                        );
remove_action( 'wp_head'            , 'wp_shortlink_wp_head'            , 10, 0 );
remove_action( 'wp_print_styles'    , 'print_emoji_styles'              );
remove_action( 'wp_head'            , 'print_emoji_detection_script'    , 7 );
remove_action( 'wp_head'            , 'rest_output_link_wp_head'        );
remove_action( 'wp_head'            , 'wp_oembed_add_discovery_links'   );
remove_action( 'wp_head'            , 'wp_oembed_add_host_js'           );
remove_action( 'wp_head'            , 'feed_links_extra'                , 3 );

if ( !is_admin() ) return;

remove_action( 'admin_print_styles' , 'print_emoji_styles'              );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script'    );

remove_filter( 'the_title'  , 'wptexturize' );
remove_filter( 'the_excerpt', 'wptexturize' );
remove_filter( 'the_content', 'wptexturize' );