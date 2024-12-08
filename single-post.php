<?php get_template_part('template-parts/header'); ?>
<main class="single-container">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<section class="single-post">
			<h1><?php the_title() ?></h1>
			<h4><a href="/author/<?php the_author()?>"> <?php the_author() ?></a></h4>
			<h5><?php the_date() ?></h5>
			<p><?php the_content() ?></p>
		</section>
	<?php endwhile; ?>
	<?php endif; ?>
</main>
<?php get_template_part('template-parts/footer'); ?>