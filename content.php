<section id="<?php $postid = get_the_ID(); echo $postid; ?>" class="post-stan">
	<div class="stan-img"><?php the_post_thumbnail('large'); ?></div>
	<div class="stan-copy"><?php the_content(); ?> </div>
</section>

