<?php get_header(); ?>
<?php wp_head(); ?>
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php
            $thumb_lg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'sz-large' );
            $url_lg = $thumb_lg['0'];
            $thumb_sm = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-thumbnail' );
            $url_sm = $thumb_sm['0'];
            echo $url;
        ?>

        <a href="<?php the_permalink(); ?>" class="isBlock">
            <div class="pure-g content archive-block">
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
                        <?php //the_excerpt(); ?>
                        <p><?php mog_long_excerpt(140); ?>...</p>


                        <?php //echo (get_post_meta($post->ID,'locations',true)); ?>
                        <?php /* $related = $pod->field( 'location' ); ?>
                        <?php foreach($related as $rel) {
                            echo $rel['ID'];
                        } */ ?>
                    </div>



                </div>
            </div>
        </a>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
