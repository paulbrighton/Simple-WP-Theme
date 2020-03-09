  <?php get_header(); ?>

  <div class="container container-flex">
    <div class="main">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post() ?>
          <h3><?php the_title(); ?></h3>
          <div class="meta">
            Created by <?php the_author(); ?> on <?php the_time('F j, Y g:i a'); ?>
          </div>
          <?php the_content(); ?>
        <?php endwhile; ?>
      <?php else : ?>
        <?php echo wpautop('Sorry, no posts were found.') ?>
      <?php endif; ?>
    </div>
  </div>

  <?php get_footer(); ?>