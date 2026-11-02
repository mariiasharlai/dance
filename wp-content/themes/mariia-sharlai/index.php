<?php
/**
 * Fallback template.
 */
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
<section class="page-content">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <h1 class="h"><?php the_title(); ?></h1>
      <div><?php the_content(); ?></div>
    <?php endwhile; ?>
  <?php else : ?>
    <h1 class="h">Nothing here yet</h1>
    <p class="sub">This theme currently styles the homepage, Mini Dance, Kids, and K-Pop.</p>
  <?php endif; ?>
</section>
<?php
get_footer();
