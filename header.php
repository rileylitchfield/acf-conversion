<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
  <?php wp_head(); ?>
<script src="https://kit.fontawesome.com/45aba4c57c.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <nav id="navbar">
      <div class="container">
        <h1 class="logo"><a href="<?php echo home_url(); ?>">RCL</a></h1>
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'primary',
                'container' => 'ul',
                'menu_class' => 'menu',
                'orderby' => 'menu_order'
            )
        );
        ?>
      </div>
    </nav>
  </header>