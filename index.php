<?php get_header()?>



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<div class="container">
    <h1>Тестовое задание для DEV-IT</h1>
	<h2><?php the_title() ?></h2>
    
    <p><?php the_content() ?></p>
    
<?php endwhile; else : ?>
	<p>Записей нет.</p>
<?php endif; ?>
</div>

<?php get_footer()?>
