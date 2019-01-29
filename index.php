<?php get_header(); ?>

<main>
  <div class="content">
    <h1>Main content</h1>
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <h2><?php the_title() ?></h2>
    <h4>Posted on <?php the_time('F jS, Y') ?></h4>
    <p><?php the_content(__('(more...)')); ?></p>
    <hr> <?php endwhile; else: ?>
    <p><?php _e('No posts'); ?></p>
    <?php endif; ?>
  </div>
  <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>