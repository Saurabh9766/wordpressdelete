<?php get_header(); ?>



<?php if ( have_posts() ) : while( have_posts()  ) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail( 'full' ); ?>
    </a>
    <p><?php the_excerpt(); ?></p>
<?php endwhile; endif; ?>

<h1>teszt</h1>

<?php get_footer(); ?>

