<?php get_header();?>
<?php get_sidebar();?>
<div class="container">
<?php 
	if (have_posts() ) :  
		while (have_posts() ) :the_post(); ?>
			<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <article>
        <h1 class="title">
          <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
            <?php the_title(); ?></a>
        </h1>
        <div class="thumb"><?php the_post_thumbnail('full'); ?></div>
        <small><?php the_tags('', '', ''); ?></small>
    		<?php the_content(); ?>
        <?php wp_link_pages(); ?>
    		</article>
        <?php comments_template(); ?>
    		</section>
   <?php endwhile;
  endif;
?>
</div>
<?php get_footer();?>