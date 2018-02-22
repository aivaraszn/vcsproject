<main>
<?php $naujausiasArguments = array(
  'post_type' => 'naujausias',
  'posts_per_page' => 1,
  'orderby' => 'date',
  'order' => 'DESC',
);
$naujausiasQuery = new WP_Query($naujausiasArguments);
// echo "<pre>";
// print_r($naujausiasQuery);
// echo "</pre>";
?>

<?php if($naujausiasQuery->have_posts()): ?>
  <section class="main-article-section">
    <div class="main-article">
	<?php while ($naujausiasQuery->have_posts()) : $naujausiasQuery->the_post(); ?>
    <img src=<?php the_post_thumbnail('custom-size'); ?>
    <div class="mainparagraph">
      <h5 class="category"><a class="" href=""><?php the_category() ?></a></h5>
      <h2 class=""><a href="<?php the_permalink () ?>"><?php the_title() ?></a></h2>
      <p class="article"><?php the_field('paragraph', get_the_ID()) ?></p>
      <div class="read-more">
        <a href="<?php the_permalink () ?>">Read More</a>
      </div>
    </div>
	<?php
    wp_reset_postdata();
    endwhile; ?>

     </div>
 </section>
 <?php endif; ?>
