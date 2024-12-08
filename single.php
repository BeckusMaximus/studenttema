<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php if (has_post_thumbnail()) : ?>
      <img src="<?php the_post_thumbnail_url('custom-medium') ?>">
    <?php endif; ?>
    <h1> <?php the_title(); ?></h1>
    <p> <?php the_content(); ?> </p>

<?php endwhile; ?>
<?php endif;?>