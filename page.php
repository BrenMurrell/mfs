<?php get_header(); ?>
<?php wp_head(); ?>
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="content">

            <div class="fi" style="background-image: url('http://www.motherfuckingstewart.com/wp-content/uploads/2015/06/20150607_180204-e1433659318169.jpg');">
            </div>


            <div class="content">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <h4 class="meta"><?php the_author(); ?> | <?php the_date(); ?></h4>
                <?php the_content(); ?>
            </div>
        </div>


    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
