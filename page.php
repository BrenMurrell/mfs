<?php get_header(); ?>
<?php wp_head(); ?>
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="content">



            <div class="content">

                <?php the_content(); ?>
            </div>
        </div>


    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
