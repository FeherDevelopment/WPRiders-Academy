<?php get_header();?>

<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); ?> 

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <h1 class="post-tile">
        <?php the_title(); ?>
    </h1>
    <div class="post-content">
        <?php the_content(); ?>
    </div>
</article>

	<?php } ?>

<?php } ?>

<?php get_footer();?>