<?php 

get_header();
pageBanner(array(
  'title' => 'All Events',
  'subtitle' => 'Check out LRCEDXGroup community events!'
)); ?>

<div class="container container--narrow page-section">
  <?php
  while(have_posts()){
    the_post(); 
    get_template_part('template-parts/event-excerpt');
  }

  echo paginate_links();

  ?>

  <hr class="section-break">

  <p>Need a recap of past events? <a href="<?php echo site_url('/past-events') ?>">Past Events Archive</a></p>
</div>

<?php

get_footer();

?>