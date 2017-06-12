<?php get_header();?>
<?php get_sidebar();?>
<div class="container blog">
  <div class="blog-title"><h2><?php single_cat_title(); ?></h2></div>
  <?php 
	 if (have_posts() ) :  
		while (have_posts() ) :the_post(); ?>
			<section>
        <div class="cont-wrapp">
  			<div class="thumb">
          <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
            <?php the_post_thumbnail('large'); ?>
          </a>
        </div>
        <div class="thumb-copy">
          <a class="ttl" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
            <?php the_title(); ?>
          </a>
          <?php the_excerpt(); ?>
        </div>
        </div>   
    	</section>
    <?php endwhile;
  endif;
?>
</div>
<?php get_footer();?>