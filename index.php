<?php
// Register custom post type
function testimonial_slider_register_post_type() {
  $labels = array(
    'name' => 'Testimonials',
    'singular_name' => 'Testimonial',
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => false,
    'supports' => array('title', 'editor'),
    // Add more arguments as needed
  );

  register_post_type('testimonial', $args);
}
add_action('init', 'testimonial_slider_register_post_type');


// Generate the testimonial slider HTML
function testimonial_slider_shortcode() {
  ob_start();
  ?>
  <div class="testi-cards">
     <?php
     // Query testimonial posts
     $testimonial_args = array(
       'post_type' => 'testimonial', // Adjust the post type if necessary
       'posts_per_page' => -1,
     );
     $testimonial_query = new WP_Query($testimonial_args);

     // Loop through testimonial posts
     while ($testimonial_query->have_posts()) : $testimonial_query->the_post();
       $testimonial_description = get_the_content();
       $testimonial_name = get_the_title();
       ?>
       <div class="card-testi">
         <div class="content-testi"><?php echo $testimonial_description; ?></div>
         <div class="name"><?php echo $testimonial_name; ?></div>
       </div>
     <?php
     endwhile;
     wp_reset_postdata();
     ?>
   </div>

  <script>

  </script>
  <?php
  return ob_get_clean();
}
add_shortcode('testimonial_slider', 'testimonial_slider_shortcode');
