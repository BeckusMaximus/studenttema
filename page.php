
<?php get_template_part('template-parts/header');?>
<main id="subs">
  <?php if (have_posts()) : while (have_posts()) : the_post() ?>

    <?php the_title("<h1>", "</h1>") ?>
    <?php the_content("<p>", "</p>") ?>

  <?php endwhile; ?>
	<?php endif; ?>
</main>
<?php get_template_part('template-parts/footer'); ?>
