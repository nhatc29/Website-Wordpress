<?php
/**
 * 'pld_post_list' Shortcode
 * 
 * @package Post List Designer
 * @since 1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Function to handle the `pld_post_list` shortcode
 * 
 * @package Post List Designer
 * @since 1.0
 */
function pld_get_posts_list( $atts, $content = null ) {
	
	// Shortcode Parameters
	extract(shortcode_atts(array(
		'limit' 				=> 20,
		'category' 				=> '',		
		'design'                => 'design-1',
		'show_author' 			=> 'true',
		'show_date' 			=> 'true',
		'show_category_name' 	=> 'true',
		'show_content' 			=> 'true',
		'content_words_limit' 	=> '20',
		'show_tags'				=> 'true',
		'show_comments'			=> 'true',
		'order'					=> 'DESC',
		'orderby'				=> 'date',
		'pagination'			=> 'true',
		'pagination_type'		=> 'numeric',
	), $atts, 'pld_post_list'));

	$posts_per_page 	= !empty($limit) 					? $limit 						: 20;
	$design				= !empty($design) 					? $design 						: 'design-1';
	$cat 				= (!empty($category))				? explode(',',$category) 		: '';
	$show_author 		= ($show_author == 'false')			? 'false'						: 'true';
	$show_date 			= ( $show_date == 'false' ) 		? 'false'						: 'true';
	$show_category 		= ( $show_category_name == 'false' )? 'false' 						: 'true';
	$show_content 		= ( $show_content == 'false' ) 		? 'false' 						: 'true';
	$words_limit 		= !empty( $content_words_limit ) 	? $content_words_limit 			: 20;
	$show_tags 			= ( $show_tags == 'false' ) 		? 'false'						: 'true';
	$show_comments 		= ( $show_comments == 'false' ) 	? 'false'						: 'true';
	$order 				= ( strtolower($order) == 'asc' ) 	? 'ASC' 						: 'DESC';
	$orderby 			= !empty($orderby)					? $orderby 						: 'date';
	$postpagination 	= ($pagination == 'false')			? 'false'						: 'true';
	$pagination_type 	= ($pagination_type == 'prev-next')	? 'prev-next' 					: 'numeric';
	
	// Taking some globals
	global $post, $paged;

	// Taking some variables
	$count = 0;

	// Pagination parameter
	if(is_home() || is_front_page()) {
		$paged = get_query_var('page');
	} else {
		$paged = get_query_var('paged');
	}

	// WP Query Parameters
	$args = array ( 
		'post_type'      		=> PLD_POST_TYPE,
		'post_status' 			=> array('publish'),
		'order'          		=> $order ,
		'orderby'        		=> $orderby,  
		'posts_per_page' 		=> $posts_per_page,
		'ignore_sticky_posts'	=> true,
		'paged'         		=> $paged,
	);

	// Category Parameter
	if($cat != "") {
		
		$args['tax_query'] = array(
								array( 
									'taxonomy'	=> PLD_CAT,
									'terms'		=> $cat,
									'field' 	=> ( isset($cat[0]) && is_numeric($cat[0]) ) ? 'term_id' : 'slug',
								));
	}

	// WP Query
	$query 		= new WP_Query( $args );
	$post_count = $query->post_count;

	ob_start();

	// If post is there
	if ( $query->have_posts() ) {
?>
	
		<div class="pld-post-list pld-<?php echo $design; ?> pld-clearfix">
			
			<?php while ( $query->have_posts() ) : $query->the_post();
				
				$cat_links = array();
				$feat_image = pld_get_post_featured_image( $post->ID, 'medium_large', true );
				$terms 		= get_the_terms( $post->ID, 'category' );

				$tags 		= get_the_tag_list( esc_html__('Tags: ', 'post-list-designer'), ', ' );
				$comments 	= get_comments_number( $post->ID );
				$reply		= ($comments <= 1) ? esc_html__('Reply', 'post-list-designer') : esc_html__('Replies', 'post-list-designer');
				
				if( $terms ) {
					foreach ( $terms as $term ) {
						$term_link = get_term_link( $term );
						$cat_links[] = '<a href="' . esc_url( $term_link ) . '">'.$term->name.'</a>';
					}
				}
				$cate_name = join( " ", $cat_links );

				// Include shortcode html file
				include( PLD_DIR.'/templates/list/'."$design".'.php' );

			endwhile; ?>

		<?php if( $postpagination == "true" && ($query->max_num_pages > 1) ) { ?>
			<div class="pld-pagination pld-clearfix">

				<?php if($pagination_type == "numeric") {

					echo pld_post_pagination( array( 'paged' => $paged , 'total' => $query->max_num_pages ) );

				} else { ?>
					<div class="button-blog-list-p"><?php next_posts_link( ' Next >>', $query->max_num_pages ); ?></div>
					<div class="button-blog-list-n"><?php previous_posts_link( '<< Previous' ); ?> </div>
				<?php } ?>
			</div>
		<?php } ?>
	</div>
	<?php	
	} // end of have_post()
	
	wp_reset_postdata(); // Reset WP Query

	$content .= ob_get_clean();
	return $content;
}

// 'pld_post_list' Shortcode
add_shortcode( 'pld_post_list', 'pld_get_posts_list' );