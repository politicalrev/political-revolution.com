<?php
/**
 * Template Name: Petition
 */
?>
<!-- Set body background image for the petition -->
<style type="text/css">
    html, body {background-image:url(<?= the_post_thumbnail_url('full'); ?>);}
  </style>

<?php while (have_posts()) : the_post(); ?>
  <section class="responsive-text">
    <h1 class="start"><?= the_title(); ?></h1>
    <hr class="start">
    <?= the_content(); ?>
  
    </section>
<?php endwhile; ?>
