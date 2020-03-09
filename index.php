  <?php get_header(); ?>

  <div class="container container-flex">
    <div class="main">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post() ?>
          <article class="post">
            <h3>
              <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a>
            </h3>
            <div class="meta">
            Created by
            <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"
               title="<?php echo esc_attr(get_the_author()); ?>">
               <?php the_author(); ?>
            </a>
            on <?php the_time('F j, Y g:i a'); ?>
          </div>

            <?php if(has_post_thumbnail()) : ?>
              <div class="post-thumbnail">
                <?php the_post_thumbnail() ?>
              </div>
            <?php endif ?>

            <?php the_excerpt(); ?>
            <div class="read-more">
              <a class="button" href="<?php the_permalink(); ?>">
                Read More
              </a>
            </div>
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