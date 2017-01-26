<!-- Wrapper -->
<div id="wrapper">

  <!-- Header -->
  <header id="header">
    <a href="<?= home_url(); ?>" class="logo">
      <img alt="Political Revolution" src="<?= get_stylesheet_directory_uri(); ?>/assets/images/logo-web.png" />
    </a>
    <nav id="responsive-menu">
      <?php
      if (has_nav_menu('primary_navigation')) {
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'links']);
      }?>
      <a href="#menu">Menu<i class="fa fa-bars"></i></a>
    </nav>
    <a class="important button" target="_blank" href="https://secure.actblue.com/contribute/page/the-politicalrevolution">Donate</a>
    
  </header>

  <!-- Menu -->
  <nav id="menu">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'links']);
      endif;
      ?>
    <ul class="actions vertical">
      <!-- <li><a href="{{ site.url }}{{ site.baseurl }}/vote.html" class="button special fit">Register to Vote</a></li> -->
      <!-- <li><a href="{{ site.url }}{{ site.baseurl }}/contact.html" class="button fit">Contact Us</a></li> -->
    </ul>
  </nav>

    <!-- Main -->
    <main>