<?php get_header(); ?>


<?php
    $thisPageID = get_option('page_for_posts');
    //$thisPageID = mog_get_outside_id();
    $thumb_lg = wp_get_attachment_image_src( get_post_thumbnail_id($thisPageID), 'sz-large' );
    $url_lg = $thumb_lg['0'];
    $thumb_sm = wp_get_attachment_image_src( get_post_thumbnail_id($thisPageID), 'post-thumbnail' );
    $url_sm = $thumb_sm['0'];

?>



<div class="hero" style="background-image: url('<?php echo $url_lg; ?>')">
    <div class="overlay"></div>
    <div class="hero-content">
        <h1>MOTHER f<br/>STEWART<br/>2016 - NOW</h1>
        <h3><?php //echo get_post_meta($post->ID,'introtext',true); ?></h3>
    </div>
</div>


<?php if ( have_posts() ) : ?>

    <div class="content">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php
                $thumb_lg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'sz-large' );
                $url_lg = $thumb_lg['0'];
                $thumb_sm = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-thumbnail' );
                $url_sm = $thumb_sm['0'];
                echo $url;
            ?>

            <a href="<?php the_permalink(); ?>" class="isBlock">
                <div class="pure-g archive-block">
                    <div class="pure-u-1-1 pure-u-md-2-3">
                        <div class="fi" style="background-image: url('<?php echo $url_lg; ?>');">
                        </div>
                    </div>
                    <div class="pure-u-1-1 pure-u-md-1-3">

                        <div class="fi fi--zoom" style=" background-image: url('<?php echo $url_sm; ?>');">
                        </div>
                        <div class="excerpt">
                            <?php $location = get_post_meta($post->ID,'post-location',true); ?>
                            <h2><?php the_time('D, jS F'); ?> - <?php the_title(); ?> <?php if($location) echo ' - ' . $location; ?></h2>
                            <p><?php mog_long_excerpt(140); ?>...</p>


                        </div>



                    </div>
                </div>
            </a>
        <?php endwhile; ?>
        <div class="navigation"><p><?php posts_nav_link('&nbsp;','<span class="newer">Newer posts &raquo;</span>', '<span class="older">&laquo; Older posts</span>'); ?></p></div>
    </div>
<?php endif; ?>

<?php get_footer(); ?>
