<section id="one" class="tiles">
  <?php if (is_front_page()) : ?>
    <header class="major">
      <h2>Latest Posts</h2>
      <p>Updates on candidates and issues you care about.</p>
      <a href="articles/" class="button special">All Articles</a>
    </header>
  <?php endif; ?>

  <?php
  $i = 0;
  $query = new WP_Query([ 'post_type' => ['post'] ]);
  if ($query->have_posts()) :
    while ($query->have_posts() && $i < 3) : $query->the_post(); ?>
      <article>
        <span class="image">
          <img src="<?= the_post_thumbnail_url('large'); ?>" alt="" />
        </span>
        <header class="major">
          <h3><a href="<?= get_permalink() ?>" class="link"><?php the_title(); ?></a></h3>
          <?php the_excerpt(); ?>
        </header>
      </article>
  <?php
  // Only limit posts if on frontpage
  if (is_front_page()) {
    $i++;
  }
  endwhile;
endif; ?>
</section>