<li class="pld-list">
	<?php if ( has_post_thumbnail() && $show_image =="true"  ) { ?>				
			<div class="pld-list-image-bg">	
				<a href="<?php the_permalink(); ?>">	
					<img src="<?php echo $feat_image; ?>" alt="<?php the_title(); ?>" />
				</a>
			</div>	
		
	<?php } ?>
	<<?php echo $title_tag; ?> class="pld-list-title">
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</<?php echo $title_tag; ?>>
	<?php if($show_category == "true" || $show_date == "true" || $show_author == 'true' || $show_comments == 'true') { ?>		
		<div class="pld-post-meta">
			<?php if($show_category == 'true') { echo '<span>'. $cate_name .'</span>'; } ?>
			<?php if($show_author == 'true') { ?>
				<span><?php esc_html_e( 'By', 'post-list-designer' ); ?> <?php the_author(); ?></span>
			<?php } ?>					
			<?php if($show_date == "true") { echo '<span>'. get_the_date() .'</span>' ; } ?>
			<?php if(!empty($comments) && $show_comments == 'true') { echo '<span><a href="'.esc_url(get_the_permalink()).'/#comments">'.$comments.' '.$reply.'</a></span>'; } ?>
		</div>
	<?php } ?>
	<?php if($show_content == "true") { ?>		
	<div class="pld-post-content">				
		<div class="pld-post-content-inner">
			<?php echo pld_get_post_excerpt( $post->ID, get_the_content(), $words_limit); ?>
			<?php if ($show_read_more == "true") { ?>
			<a class="pld-readmore-btn" href="<?php the_permalink(); ?>"><?php _e('Read More', 'post-list-designer'); ?></a>
		<?php } ?>	
		</div>			
	</div>
	<?php } ?>
</li>