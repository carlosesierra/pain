<section id="<?php $postid = get_the_ID(); echo $postid; ?>" class="post-stan">
	<div class="cont-img"><?php the_post_thumbnail('full'); ?></div>
	<div class="cont-copy"><?php the_content(); ?> </div>
</section>

