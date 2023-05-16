<?php
/**
* Template Name: Thank You Page
*/

get_header();
?>

<section class="bg-light py-3" style="height:calc(100vh - 154px);">
    <div class="container">
 
        <h1 class="l-heading">Thank you for your submission.</h1>
		<p style="display:block;margin-bottom:2rem">
			You will now be redirected to the homepage...
		</p>
		<a href="/" class="btn">Go Home</a>

    </div>
  </section>

<?php
get_footer();
?>

<script>
setTimeout(function(){
   window.location.href = '/';
}, 5000);
</script>