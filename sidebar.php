<div id="sidebar">
<div class="logo">
	<a href="<?php echo home_url(); ?>"/>
		<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
	</a>
</div>
<div class="widgets-area">
<?php dynamic_sidebar('sidebar'); ?>
</div>

<?php the_widget( 'WP_Widget_Text', array(), array() ); ?>
<div class="mn">
	<div class="mnbtn"><a href="#">menu</a></div>
	<nav role="navigation" class="mainmenu" id="menu">
    	<?php wp_nav_menu(array('theme_location'=>'primary')); ?>
    	<?php wp_nav_menu(array('theme_location'=>'social')); ?>
  	</nav>
</div>

<div class="nxpt">
<?php posts_nav_link(); ?>
</div>
</div>



