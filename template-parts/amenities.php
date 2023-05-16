<?php
/**
 * Template part for displaying the amenities section on the home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package test-theme
 */
?>

<section id="amenities">
<?php
$loop = new WP_Query(array('post_type' => 'amenity', 'posts_per_page' => 3));
while ($loop->have_posts()):
  $loop->the_post();
// 	 Get background color from ACF fields
  $background_color_field = get_field('background_color', get_the_ID());
  $bg_color = ($background_color_field == 'gray') ? 'bg-light' : 'bg-primary';
// Get Font Awesome class from ACF fields
$font_awesome_field = get_field('font_awesome_class', get_the_ID());
  ?>

    <div class="box <?php echo $bg_color ?>">
          <i class="fas <?php echo $font_awesome_field ?> fa-3x"></i>
          <h3><?php the_title(); ?></h3>
          <p><?php the_content(); ?></p>
        </div>
    <?php endwhile; ?>

</section>