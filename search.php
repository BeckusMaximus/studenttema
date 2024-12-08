<?php get_template_part('template-parts/header'); ?>
<main id="search-page">
  <h1>Your search: <?php the_search_query(); ?></h1>
  <?php if (have_posts()) : while (have_posts()) : the_post() ?>
    <article id="search-post">
      <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
      <?php the_excerpt("<p>", "</p>") ?>
     </article>
  <?php endwhile; ?>
  <?php else : ?>
    <p>No posts matches..</p>
  <?php endif; ?>
</main>
<?php get_template_part('template-parts/footer'); ?>