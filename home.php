
<?php get_template_part('template-parts/header');?>
	<h1>My blog posts</h1>
  <main class="blog-main">
  <?php if (is_active_sidebar('sidebar-widget')) : ?>
      <aside class="sidebar">
      <?php dynamic_sidebar('sidebar-widget'); ?>
      </aside>
    <?php endif; ?>
    <section class="blog-container">
	    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="blog-post">
        <img srcset="<?php echo wp_get_attachment_image_srcset(get_post_thumbnail_id()); ?>"
            $sizes='(max-width: 768px) 100vw, (max-width: 1200px) 50vw, 1200px'
            alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>"
            loading="lazy">

          <div class="blog-text">
        
            <div class="title-cate">
			        <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
              <p><?php the_category() ?></p>
            </div>
            <div class="author-date">
              <h4><a href="/author/<?php the_author()?>"> <?php the_author() ?></a></h4>
              
			        <h5><?php the_date() ?></h5>
            </div>
            <p><?php the_excerpt(); ?></p>
          </div>
        </article>
		  <?php endwhile; ?>
       
	    <?php endif; ?>
    </section>
   
  </main>
  <div class="pagination">
          <?php
            echo paginate_links(array(
            'prev_text' => __('Previous'),
            'next_text' => __('Next'),
          ));?>
        </div>
<?php get_template_part('template-parts/footer'); ?>
