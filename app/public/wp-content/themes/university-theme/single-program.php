<?php get_header();

while(have_posts()) {
	the_post(); 
  pageBanner(); ?>

  <div class="container container--narrow page-section">
  	<div class="metabox metabox--position-up metabox--with-home-link">
     <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('program'); ?>"><i class="fa fa-home" aria-hidden="true"></i> All Programs</a> <span class="metabox__main"><?php the_title(); ?></span></p>
   </div>


   <div class="generic-content"><?php the_field('main_body_content'); ?></div>

   <?php


   $relatedProfessors = new WP_Query(array(
    'posts_per_page' => -1,
    'post_type' => 'professor',
    'orderby' => 'title',
    'order' => 'ASC',
    'meta_query' => array(
      array(
        'key' => 'related_programs',
        'compare' => 'LIKE',
        'value' => '"' . get_the_ID() . '"'
      )
    )
  ));

   if($relatedProfessors->have_posts()){

    echo '<hr class="big-line-section-break">';
    echo '<h2 class="headline headline--medium">' .'Department of ' . get_the_title() . ' Faculty</h2>';

    echo '<ul class="professor-cards">';
    while($relatedProfessors->have_posts()){
      $relatedProfessors->the_post(); ?>
      <li class="professor-card__list-item">
        <a class="professor-card" href="<?php the_permalink(); ?>">
          <img class="professor-card__image" src="<?php the_post_thumbnail_url('professorLandscape') ?>">
          <span class="professor-card__name"><?php the_title(); ?></span>
        </a>
      </li>

    <?php }
    echo '</ul>';

  }

  wp_reset_postdata();


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
      ),
      array(
        'key' => 'related_programs',
        'compare' => 'LIKE',
        'value' => '"' . get_the_ID() . '"'
      )
    )
  ));

  if($homePageEvents->have_posts()){

    echo '<hr class="big-line-section-break">';
    echo '<h2 class="headline headline--medium">Upcoming ' . get_the_title() . ' Events</h2>';

    while($homePageEvents->have_posts()){
      $homePageEvents->the_post();
      get_template_part('template-parts/event-excerpt');
    }
  }

  wp_reset_postdata();
  echo '<hr class="big-line-section-break">';


  $relatedCampuses = get_field('related_campus');
  if($relatedCampuses) {
    echo '<h2 class="headline headline--smaller">' . get_the_title() . ' offices and classrooms are available at these campuses:</h2>';

  echo '<ul class="min-list link-list">';
    foreach($relatedCampuses as $campus) {
      ?><li><a href="<?php get_the_permalink($campus); ?>"><?php echo get_the_title($campus); ?></a></li> <?php
    }
    echo '</ul>';
  }

  ?>

</div>

<?php
}

get_footer();

