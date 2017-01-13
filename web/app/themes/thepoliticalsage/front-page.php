<!-- Banner -->
<?php $img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); ?>

<section id="banner" class="major" role="banner" style="background-image: url(<?= get_template_directory_uri(); ?>/assets/images/background-polrev-compressed.png);">
  <div class="inner">
    <div class="content">
      <p>Change can only take place when people get involved in the political process. Sign up now and join the revolution!</p>
      <form id="email-signup" autocomplete="on" method="post" action="https://tinyletter.com/ThePoliticalRevolution">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="sen.sanders@gmail.com" autofocus/>
        <button type="submit" class="important">Join Us</button>
      </form>
    </div>
  </div>
</section>

<!-- Main -->
<div role="main" id="main">

  <!-- Two -->
  <section id="two">
    <div class="inner">
      <?php
      while (have_posts()) {
         the_post();
         the_content();
      }
      ?>

    </div>
  </section>
</div>
<!-- One -->
<?php get_template_part('templates/tiles'); ?>

</body>

</html>