<?php
if (!defined('ABSPATH')) {
    exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#content">Skip to content</a>
<div class="site">
  <div class="banner">
    <p>Winter enrollment is open. <span>Semester starts 16 January</span></p>
    <button class="icon-btn" type="button" data-dismiss-banner aria-label="Dismiss announcement"><?php echo ms_icon('close'); ?></button>
  </div>
  <header class="site-header">
    <a class="logo" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Mariia Sharlai home">
      <?php echo ms_icon('logo'); ?>
      <span class="h"><span class="w1">Mariia</span> <span class="w2">Sharlai</span></span>
    </a>
    <button class="menu-toggle" type="button" data-menu-toggle aria-expanded="false" aria-controls="site-nav" aria-label="Open menu"><?php echo ms_icon('menu'); ?></button>
    <nav id="site-nav" class="site-nav" aria-label="Main">
      <div class="has-sub">
        <span>Kids <?php echo ms_icon('chevron'); ?></span>
        <div class="subnav">
          <a href="<?php echo esc_url(ms_url('/mini-dance/')); ?>">Mini (3 to 6)</a>
          <a href="<?php echo esc_url(ms_url('/commercial-dance-for-kids/')); ?>">Kids (7 to 10)</a>
        </div>
      </div>
      <a href="<?php echo esc_url(ms_url('/k-pop-course/')); ?>">K-pop</a>
      <a href="<?php echo esc_url(ms_url('/faq/')); ?>">FAQ</a>
      <a href="<?php echo esc_url(is_front_page() ? '#contact' : home_url('/#contact')); ?>">Contact</a>
    </nav>
    <a class="btn btn-accent btn-sm header-cta" href="<?php echo esc_url(is_front_page() ? '#groups' : '#form'); ?>">Enroll</a>
  </header>
  <main id="content">
