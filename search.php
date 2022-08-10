<?php get_header();?>

<h1 class="m-1 p-1">
    Search results for: <?php echo $_GET['s'] ?>
</h1>

<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); ?> 

        <?php get_template_part('template-parts/post/content', 'excerpt');  ?>

	<?php } ?>

    <nav>
            <?php echo paginate_links();?>
    </nav>

<?php } ?>

<?php get_sidebar();?>

<?php get_footer();?>