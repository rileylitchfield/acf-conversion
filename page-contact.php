<?php
/**
* Template Name: Contact Page
*/

get_header();
?>

<section id="contact-form" class="py-3">
    <div class="container">
      <h1 class="l-heading"><span class="text-primary">Contact</span> Us</h1>
      <p>Please fill out the form below to contact us</p>
      <form action="/thank-you/" method="post">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" id="name">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email">
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea type="text" name="message" id="message"></textarea>
        </div>
        <button class="btn" type="submit" onclick="/thank-you/">Submit</button>
      </form>
    </div>
  </section>

  <section id="contact-info" class="bg-dark">
    <div class="container">
      <div class="box">
        <i class="fas fa-hotel fa-3x"></i>
        <h3>Location</h3>
        <p>2050 Main St. <br>Houston, TX 77006</p>
      </div>
      <div class="box">
        <i class="fas fa-phone fa-3x"></i>
        <h3>Phone Number</h3>
        <p>(713) 555-0215</p>
      </div>
      <div class="box">
        <i class="fas fa-envelope fa-3x"></i>
        <h3>Email Address</h3>
        <p>Concierge@HotelRCL.com</p>
      </div>
    </div>
  </section>

<?php
get_footer();
?>

