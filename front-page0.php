<!--
Header
-->
<?php get_header(); ?>
 <!--
Main
-->
<!-- <main> -->
<?php get_template_part('elements/naujausias'); ?>
  <!-- Content Flow  -->
<?php get_template_part('loop'); ?>
<!-- <nav id="loadMore" style=""> -->
<div id="loadMoreDiv" style="">
  <a href="#" id="loadMore">Load More</a>
</div>
<!-- </nav> -->
        </main>
<!--
footer
 -->
 <?php get_footer(); ?>
