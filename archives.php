<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<div id="content">

<?php get_search_form(); ?>

<h2><?php _e('Archives by Month:', 'orangesky'); ?></h2>
  <ul>
    <?php wp_get_archives('type=monthly'); ?>
  </ul>

<h2><?php _e('Archives by Subject:', 'orangesky'); ?></h2>
  <ul>
     <?php wp_list_categories(); ?>
  </ul>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
