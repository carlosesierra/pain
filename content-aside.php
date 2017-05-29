<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<section id="<?php $postid = get_the_ID(); echo $postid; ?>"  style="background-image: url('<?php echo $thumb['0'];?>')" class="post-aside" >
<div class="cont-img">&nbsp;</div>
<div class="cont"><?php the_content(); ?> </div>
</section>



