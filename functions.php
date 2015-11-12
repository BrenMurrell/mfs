<?php
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 321, 214, true ); // Normal post thumbnails (see options below)
add_image_size( 'sz-large', 642, 428, true ); // Permalink thumbnail size
add_image_size( 'sz-full', 1200, 9999 ); // Permalink thumbnail size
