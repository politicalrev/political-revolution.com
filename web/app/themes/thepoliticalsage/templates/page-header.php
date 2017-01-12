<?php
    use Roots\Sage\Titles;

    add_filter('get_the_archive_title', function ($title) {

      if (is_category()) {
                $title = single_cat_title('', false);
            } elseif (is_tag()) {
                $title = single_tag_title('', false);
            } elseif (is_author()) {
                $title = get_the_author();
            }
      return $title;
    });
?>

<div class="page-header">
  <h1><?= Titles\title(); ?></h1>
</div>
