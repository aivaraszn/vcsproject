<?php get_header(); ?>


<section>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>
      <?php if ( has_post_thumbnail()) : ?>
          <img src=<?php the_post_thumbnail(); ?>
          <?php the_post_thumbnail(); ?>
    <?php endif; ?>
    <div class="post-content">
      <h1 class="post-title">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
      </h1>
      <?php the_content(); ?>
      <?php edit_post_link(); ?>
      <div class="share-line">
          <a href="https://www.facebook.com/">Share: </a>
          <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
          <a href="https://twitter.com/"><i class="fab fa-google-plus-g"></i></a>
          <a href="https://twitter.com/"><i class="fab fa-tumblr"></i></a>
          <a href="https://twitter.com/"><i class="fab fa-pinterest"></i></a>
        </div>
    </div>
  </article>
</section>
    <section>
      <?php
        $postaiArguments = array(
        'post_type' => array('postas', 'naujausias', 'postas'),
        'posts_per_page' => 3,
        'orderby' => 'rand',
        'order' => 'DESC'
      );

      $postsQuery = new WP_Query($postaiArguments); ?>
      <section class="content-section-more">
        <div class="container-fluid-more">
          <div class="more-content-container">
            <p class="like">you may also like</p>
            <ul class="flex-projects row">
              <?php if($postsQuery->have_posts()): ?>
                <?php while ($postsQuery->have_posts()) : $postsQuery->the_post(); ?>
                  <li class="content-item col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <a href="<?php the_permalink () ?>"><img src=<?php the_post_thumbnail(); ?></a>
                    <h4 class="header"><a href="<?php the_permalink () ?>"><?php the_title( ) ?></a></h4>
                    <p class="article"><?php the_field('paragraph', get_the_ID()) ?></p>
                  </li>
                  <?php
                    wp_reset_postdata();
                    endwhile; ?>
              </div>
            </div>
           </section>
            <?php endif; ?>

<?php endwhile; ?>

<?php else: ?>

  <article>
    <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
  </article>
<?php endif; ?>
</section>

<?php get_footer(); ?>
