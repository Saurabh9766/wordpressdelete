<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?>	
<!-- end -->

<?php get_footer();



