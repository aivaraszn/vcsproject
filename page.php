<?php get_header(); ?>

<main role="main">
<section>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if ( has_post_thumbnail()) : ?>
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <?php the_post_thumbnail(); ?>
      </a>
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
<?php endwhile; ?>
<?php else: ?>
  <article>
    <h1><?php _e( 'Sorry, nothing to display.' ); ?></h1>
  </article>
    <?php endif; ?>
    </section>
  </main>
 <?php get_footer(); ?>
