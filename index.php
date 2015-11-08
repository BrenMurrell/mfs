<?php get_header(); ?>
<?php wp_head(); ?>
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <a href="<?php the_permalink(); ?>">
            <div class="pure-g content">
                <div class="pure-u-1-1 pure-u-md-1-2">
                    <div class="fi" style="background-image: url('http://www.motherfuckingstewart.com/wp-content/uploads/2015/06/20150607_180204-e1433659318169.jpg');">
                    </div>
                </div>
                <div class="pure-u-1-1 pure-u-md-1-2">

                    <div class="fi fi--zoom" style=" background-image: url('http://www.motherfuckingstewart.com/wp-content/uploads/2015/06/20150607_180204-e1433659318169.jpg');">
                    </div>
                    <div class="excerpt">
                        <h2><?php the_title(); ?></h2>
                        <h4 class="meta"><?php the_author(); ?> | <?php the_date(); ?></h4>
                        <?php the_excerpt(); ?>

                    </div>



                </div>
            </div>
        </a>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
