<?php
/**
 * Generic page. FAQ, news, privacy, terms, and Finnish pages can keep
 * their existing content until those templates are built.
 */
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
<section class="page-content">
  <?php while (have_posts()) : the_post(); ?>
    <h1 class="h"><?php the_title(); ?></h1>
    <div><?php the_content(); ?></div>
  <?php endwhile; ?>
</section>
<?php
get_footer();
