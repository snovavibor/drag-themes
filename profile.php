<?php 
/*
Template Name: Profile Template
*/
?>

<?php get_header()?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- Цикл WordPress -->
	<div class="container">
	<a href="/" class="btn btn-success"><< BACK</a>
    <h1>Profile USER</h1>
	
    
    <p><?php the_content() ?></p>
	
    
<?php endwhile; else : ?>
	<p>Записей нет.</p>
<?php endif; ?>
</div>

<?php get_footer()?>
