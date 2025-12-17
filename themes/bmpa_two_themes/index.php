<?php get_header() ?>
<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>)"></div>
  <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title">Welcome to our blog!</h1>
    <div class="page-banner__intro">
      <p>Keep reading to see what's new.</p>
    </div>
  </div>
</div>

<div class="container container--narrow page-section">
  <?php
  while (have_posts()) {
    the_post(); ?>
    <div class="post-item">
      <h2 class="headline headline--medium headline--post-title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h2>
      <div class="metabox">
        <p>
          Posted by <?php the_author_posts_link(); ?> on
          <a href="<?php echo get_day_link(
                      get_the_time('Y'),
                      get_the_time('m'),
                      get_the_time('d')
                    ); ?>">
            <?php the_time('n/j/Y'); ?>
          </a>
          in <?php echo get_the_category_list(',') ?>
        </p>

      </div>
      <div class="generic-content">
        <?php the_excerpt(); ?>
        <p><a class="btn btn--blue" href="<?php the_permalink() ?>">Continue reading &raquo;</a></p>
      </div>
    </div>



  <?php }
  echo paginate_links();
  ?>
</div>


<?php get_footer(); ?>