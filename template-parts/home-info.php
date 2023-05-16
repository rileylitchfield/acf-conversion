<?php
/**
 * Template part for displaying the home-info section on the home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package test-theme
 */
?>

<section id="home-info" class="bg-dark">
    <div class="info-img" style="background: url('<?php echo get_field('left_side_image') ? get_field('left_side_image') : get_stylesheet_directory_uri() . "/img/photo-1.jpg"; ?>') no-repeat;"></div>
    <div class="info-content">
    <h2><span class="text-primary"><?php echo get_field('home-info_heading_highlight_text') ? get_field('home-info_heading_highlight_text') : 'The History'; ?></span> <?php echo get_field('home-info_heading_remaining_text') ? get_field('home-info_heading_remaining_text') : 'Of Our Hotel'; ?></h2>
    <p><?php echo get_field('home-info_description_text') ? get_field('home-info_description_text') : 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione quas exercitationem aspernatur quibusdam, non dolore temporibus ipsum adipisci repellendus, beatae ad expedita nemo pariatur saepe. Ad consequuntur doloribus nostrum, voluptatum explicabo hic? Ipsam eos, repellendus ea beatae ratione consectetur adipisci!'; ?></p>
	<a class="btn btn-light" href="<?php echo get_field('home-info_button_link') ? get_field('home-info_button_link') : home_url('/about'); ?>"><?php echo get_field('home-info_button_text') ? get_field('home-info_button_text') : 'Read More'; ?></a>
    </div>
  </section>