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
        <?php if($url_lg) : ?>
            <div class="hero" style="background-image: url('<?php echo $url_lg; ?>')">
                <div class="overlay"></div>
                <div class="hero-content">
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <h3><?php echo get_post_meta($post->ID,'introtext',true); ?></h3>
                    <h4 class="meta"><?php the_author_meta('nickname'); ?> | <?php the_date(); ?></h4>
                </div>
            </div>
        <?php endif; ?>
        <div class="content">


            <?php the_content(); ?>

        </div>



    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
