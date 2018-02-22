<main>
  <?php
    $postaiArguments = array(
    'post_type' => array('post','postas'),
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC'
  );

  $postsQuery = new WP_Query($postaiArguments);
  // echo "<pre>";
  // print_r($postsQuery);
  // echo "</pre>"; ?>


  <section class="content-section">
    <div class="container-fluid">
      <div class="content-container">
        <ul class="flex-projects row">
          <?php if($postsQuery->have_posts()): ?>
            <?php while ($postsQuery->have_posts()) : $postsQuery->the_post(); ?>
              <li class="content-item col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <a href="<?php the_permalink () ?>"><img src=<?php the_post_thumbnail(''); ?></a>
                <h5 class="post-li"><?php the_category()?></h5>
                <h3 class=""><a href="<?php the_permalink () ?>"><?php the_title( ) ?></a></h3>
                <p class=""><?php the_field('paragraph', get_the_ID()) ?></p>
              </li>
              <?php if ($postsQuery->current_post == 3): ?>
              </ul>
                <?php echo do_shortcode( '[contact-form-7 id="65" title="Contact form 1"]' ); ?>
                <ul class="flex-projects row">
              <?php endif; ?>
              <?php
                wp_reset_postdata();
                endwhile; ?>
            </ul>
          </div>
        </div>
       </section>
        <?php endif; ?>
