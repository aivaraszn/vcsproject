<?php get_header(); ?>

    <div class="category-name-div">
      <h2 class="category-name"><?php single_cat_title(); ?></h2>
     </div>
    <?php
      $category = single_cat_title("", false);
      $naujausiasArguments = array(
        'post_type' => array('naujausias','postas','post'),
        'post_status' => 'publish',
        'category_name' => $category,
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'DESC',
      );



      $naujausiasQuery = new WP_Query ($naujausiasArguments);
      // echo "<pre>";
      // print_r($naujausiasQuery);
      // echo "</pre>";
      ?>
      <section class="content-section">
        <div class="container-fluid">
          <div class="content-container">
            <ul class="flex-projects row">
              <?php if($naujausiasQuery->have_posts()): ?>
              <?php while ($naujausiasQuery->have_posts()): $naujausiasQuery->the_post(); ?>
                <li class="content-item col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
                  <a href="<?php the_permalink () ?>"><img src=<?php the_post_thumbnail(''); ?></a>
                  <h3 class=""><a href="<?php the_permalink () ?>"><?php the_title( ) ?></a></h3>
                  <p class=""><?php the_field('paragraph', get_the_ID()) ?></p>
                    <div class="leave-coment">
                      <a href="<?php the_permalink () ?>">Read More</a>
                    </div>
                  </li>
                 <?php
                    wp_reset_postdata();
                    endwhile; ?>
                 </ul>
               </div>
             </div>
            </section>
       <?php endif; ?>

<?php get_footer(); ?>
