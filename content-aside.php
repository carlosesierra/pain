<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ) ;?>
<div id="post" class="hm-aside" style="background-image: url('<?php echo $thumb['0'];?>')"
<section id="<?php $postid = get_the_ID(); echo $postid; ?>" class="post-aside" >
<div class="cont"><?php the_content(); ?> </div>
</section>
</div>



