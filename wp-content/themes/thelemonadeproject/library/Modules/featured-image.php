<?php
/*
 * Featured Image Module
 */
 
	if (has_post_thumbnail($post->ID)): //check for featured image on page
		$class ="d-flex vh-100"; 
		$image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
		$image = $image[0];
	else: //no image
		$class ="d-none"; 
		$image = "";
	endif; 
	
	$style = 'style ="background: linear-gradient(to bottom, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0) 45%), url(' . $image . ') 50% / cover no-repeat fixed;" class="featured ' . $class . '"';	
?>
				<div id="featured_image" <?php echo $style; ?> >
					<div class="container m-auto text-center">
						<div class="row justify-content-md-center">
							<div class="col-sm-10">
								<h2 class="featured_title font"><?php echo get_field( "featured_image_title"); ?></h2>
							</div>
							<div class="col-sm-10">
								<div class="featured_copy mt-5">
									<?php echo get_field( "featured_image_copy"); ?>
								</div>
								<div class="featured_buttons mt-5">
									<?php if(get_field( "featured_image_buttons" !== null)): ?>
									<?php foreach(get_field( "featured_image_buttons") as $featured_buttons):									
										$btn_class = 'btn-';
										if(isset($featured_buttons['button_outline'][0])) $btn_class .= $featured_buttons['button_outline'][0] . '-';
										$btn_class .=  $featured_buttons['button_color'];
									?>
										<a 
											href="<?php echo $featured_buttons['button_url']; ?>" 
											title="<?php echo $featured_buttons['button_text']; ?>" 
											<?php if($featured_buttons['third_party_website'][0] == true): ?>
												target="_blank" 
											<?php endif; ?>
											class="btn btn-lg w-25 <?php echo $btn_class; ?> "
										>
												<?php echo $featured_buttons['button_text']; ?>
										</a>
									<?php endforeach; ?>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
