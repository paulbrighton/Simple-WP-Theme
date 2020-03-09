<?php get_header(); ?>

<div class="container container-flex">
  <div class="main">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post() ?>
        <article class="post">
          <h3>
            <?php the_title(); ?> 
          </h3>

          <?php if(has_post_thumbnail()) : ?>
            <div class="post-thumbnail">
              <?php the_post_thumbnail() ?>
            </div>
          <?php endif ?>

          <?php the_content(); ?>
        </article>
      <?php endwhile; ?>
    <?php else : ?>
      <?php echo wpautop('Sorry, no posts were found.') ?>
    <?php endif; ?>
  </div>

  <div class="sidebar">
      <!-- sidebar is taken from the id declared in the init_widgets function -->
      <?php if(is_active_sidebar('sidebar')) : ?>
        <?php dynamic_sidebar('sidebar'); ?>
      <?php endif ?>
    </div>
</div>

<?php get_footer(); ?>