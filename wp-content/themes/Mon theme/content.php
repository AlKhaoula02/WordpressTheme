<div class="row m-dw-30">
	<div class="col-xs-2"> <!-- la vignette -->
       <?php if($thumbnail_html = wp_get_attachment_image_src (get_post_thumbnail_id ($post->ID), 'thumbnail')) : $thumbnail_src = $thumbnail_html[0] ; ?>
			<img class="img-responsive img-thumbnail" src="<?php echo $thumbnail_src; ?>" alt="">
		 <?php endif; ?>				
	</div>
	<div class="col-xs-10">
		<h1> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h1>
			<p>
				<?php 
					echo katheme_give_me_meta_01(
					esc_attr(get_the_date('c') ),
					esc_html( get_the_date()),
					get_the_category_list( ', '),
					get_the_tag_list('',', ')
					);
				?>
			</p>
	    <?php the_excerpt(); ?>
	</div>
</div>