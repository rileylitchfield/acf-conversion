<?php
/**
 * Template part for displaying the showcase section on the home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package test-theme
 */
?>

<div id="showcase" style="background: url('<?php echo get_field('hero_image') ? get_field('hero_image') : get_stylesheet_directory_uri() . "/img/showcase.jpg"; ?>') no-repeat center center/cover;">
      <div class="container">
        <div class="showcase-content">
          <h1><span class="text-primary"><?php echo get_field('showcase_header_highlight_text') ? get_field('showcase_header_highlight_text') : 'Enjoy'; ?></span> <?php echo get_field('showcase_header_remaining_text') ? get_field('showcase_header_remaining_text') : 'your stay'; ?></h1>
          <p class="lead"><?php echo get_field('showcase_description_text') ? get_field('showcase_description_text') : 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio adipisci delectus rem quis, rerum quidem.'; ?></p>
          <a class="btn" href="<?php echo get_field('showcase_button_link') ? get_field('showcase_button_link') : home_url('/about'); ?>"><?php echo get_field('showcase_button_text') ? get_field('showcase_button_text') : 'About Our Hotel'; ?></a>
        </div>
      </div>
    </div>

