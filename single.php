<?php get_header(); ?>
<?php wp_head(); ?>
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="content">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <h4 class="meta"><?php the_author_meta('nickname'); ?> | <?php the_date(); ?></h4>
            <?php the_content(); ?>

        </div>



    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
