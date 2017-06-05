<section id="<?php $postid = get_the_ID(); echo $postid; ?>" class="post-vid">
  <div class="cont-vid"><?php the_post_thumbnail('full'); ?></div>
  <div class="cont"><?php the_content(); ?> </div>
</section>