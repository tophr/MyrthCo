<?php
/*
Template Name: Links
*/
get_header(); ?>

<div id="container">
  <div id="content" role="main">
  	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1 class="entry-title">
		  <?php the_title(); ?>
		</h1>
		<div class="entry-content">
		  <?php the_content(); ?>
		  <ul id="linkspage">
			<?php wp_list_bookmarks('title_before=<strong>&title_after=</strong>'); ?>
		  </ul>
		</div>
	<?php endwhile; endif; ?>	
    <!-- .entry-content -->
  </div>
  <!-- #content -->
</div>
<!-- #container -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
