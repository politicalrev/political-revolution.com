<section id="one" class="tiles">
	<!-- <div class="inner"> -->
        <?php if (is_front_page()) : ?>
                <header class="major">
			<h2>Latest Posts</h2>
			<p>Updates on candidates and issues you care about.</p>
                        <a href="articles/" class="button special">All Articles</a>
		</header>
        <?php endif; ?>

	<!-- </div> -->
	<?php $query = new WP_Query( [ 'post_type' => ['post'] ] );
         if ( $query->have_posts() ) : ?>
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
          <article>
                  <span class="image">
                          <img src="<?= the_post_thumbnail_url('large'); ?>" alt="" />
                  </span>
                  <header class="major">
                          <h3><a href="<?= get_permalink() ?>" class="link"><?php the_title(); ?></a></h3>
                          <p><?php the_excerpt(); ?></p>
                  </header>
          </article>
    <?php endwhile; ?>
<?php endif; ?>