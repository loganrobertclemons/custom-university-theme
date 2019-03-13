<?php get_header(); ?>

<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/random-images/prof-crusoe.jpg') ?>);"></div>
  <div class="page-banner__content container t-center c-white m-title-margin">
      <h1 class="headline headline--large"><i>Welcome!</i></h1>
      <h2 class="headline headline--medium">World class. Face to face.</h2>
      <h3 class="headline headline--small">Become what you want to be.</h3>
      <a href="<?php echo get_post_type_archive_link('program'); ?>" class="btn btn--large btn--blue">Find Your Major</a>
    </div>
  </div>
</div>
</div>

<div class="b-title-margin"><span></span>
</div>

<div class="full-width-split group">

  <div class="full-width-split__one">
    <div class="full-width-split__inner">
      <h2 class="headline headline--small-plus t-center">Community Events</h2>

      <?php
      $today = date('Ymd'); 
      $homePageEvents = new WP_Query(array(
        'posts_per_page' => 2,
        'post_type' => 'event',
        'meta_key' => 'event_date',
        'orderby' => 'meta_value_num',
        'order' => 'DESC',
        'meta_query' => array(
          array(
            'key' => 'event_date',
            'compare' => '>=',
            'value' => $today,
            'type' => 'numeric'
          )
        )
      ));

      while($homePageEvents->have_posts()){
        $homePageEvents->the_post();
        get_template_part('template-parts/event', 'excerpt');
      }
      ?>
      
      <p class="t-center no-margin"><a href="<?php echo get_post_type_archive_link('event'); ?>" class="btn btn--blue">View All Events</a></p>

    </div>
  </div>
  <div class="full-width-split__two">
    <div class="full-width-split__inner">
      <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>
      <?php 
      $homePagePosts = new WP_Query(array(
        'posts_per_page' => 2,
        'orderby' => 'post_date',
        'order' => 'DESC'
      ));

      while($homePagePosts->have_posts()) {
        $homePagePosts->the_post(); ?>
        <div class="event-summary">
          <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink(); ?>">
            <span class="event-summary__month"><?php the_time('M') ?></span>
            <span class="event-summary__day"><?php the_time('d') ?></span>  
          </a>
          <div class="event-summary__content">
            <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
            <p><?php if (has_excerpt()){
              echo get_the_excerpt();
            } else {
              echo wp_trim_words(get_the_content(), 25);
            } ?> <a href="<?php the_permalink(); ?>" class="nu gray">Read more</a></p>
          </div>
        </div>
      <?php } wp_reset_postdata();
      ?>
      
      <p class="t-center no-margin"><a href="<?php echo site_url('/blog'); ?>" class="btn btn--yellow">View All Blog Posts</a></p>
    </div>
  </div>
</div>

<div class="hero-slider">
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/apply.jpg') ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">300+ Academic Programs</h2>
        <p class="t-center">Something for everyone</p>
        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
      </div>
    </div>
  </div>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/family.jpg') ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">Apply</h2>
        <p class="t-center">Become a member of our family</p>
        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
      </div>
    </div>
  </div>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/scholarship.jpg') ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">Financial Aid</h2>
        <p class="t-center">$20M</p>
        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Annual Scholarships</a></p>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>