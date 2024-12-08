<?php get_template_part('template-parts/header'); ?>
<main id="author-page">
  <h1><?php the_archive_title(); ?></h1>

  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <article id="author-post">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <h4><?php the_author() ?></h4>
      <h5><?php the_date() ?></h5>
      <p><?php the_excerpt(); ?></p>
    </article>
    
  <?php endwhile; ?>
  <?php else : ?>
  <p>Author not found.</p>
  <?php endif; ?>
</main>
<?php get_template_part('template-parts/footer'); ?>