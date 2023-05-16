<?php
/**
* Template Name: About Page
*/

get_header();
?>

<section id="about-info" class="bg-light py-3">
    <div class="container">
      <div class="info-left">
        <h1 class="l-heading"><span class="text-primary">About</span> Hotel RCL</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt praesentium sapiente libero, sint in repudiandae ex possimus consequuntur similique eligendi fuga aliquid incidunt exercitationem delectus et unde, quo assumenda ipsam!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe odit amet libero est in ut obcaecati fugit modi nostrum porro.</p>
      </div>
      <div class="info-right">
        <img src="<?php echo get_stylesheet_directory_uri() . "/img/photo-2.jpg"; ?>" alt="Hotel">
      </div>
    </div>
  </section>

  <div class="clr"></div>

  <section id="testimonials" class="py-3" style="background: url(<?php echo get_stylesheet_directory_uri() . "/img/test-bg.jpg"; ?>) no-repeat center center/cover">
    <div class="container">
      <h2 class="l-heading">What Our Guests Say</h2>
      <div class="testimonial bg-primary">
        <img src="<?php echo get_stylesheet_directory_uri() . "/img/person-1.jpg"; ?>" alt="Samantha">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo consequuntur dolorem accusantium aliquam velit rerum perferendis dolorum necessitatibus beatae sint cum provident id omnis incidunt quo eum amet, dicta voluptatem commodi fuga. Odit dignissimos maiores voluptatem perspiciatis, eum dolor exercitationem.</p>
      </div>
      <div class="testimonial bg-primary">
        <img src="<?php echo get_stylesheet_directory_uri() . "/img/person-2.jpg"; ?>" alt="Jen">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo consequuntur dolorem accusantium aliquam velit rerum perferendis dolorum necessitatibus beatae sint cum provident id omnis incidunt quo eum amet, dicta voluptatem commodi fuga. Odit dignissimos maiores voluptatem perspiciatis, eum dolor exercitationem.</p>
      </div>
    </div>
  </section>

<?php
get_footer();
?>

