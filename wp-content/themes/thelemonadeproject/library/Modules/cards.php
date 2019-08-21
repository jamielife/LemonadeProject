<?php
/*
 * Card formatted news feed module.
 */
?>
						<main id="main" class="wrap p-0 pt-6 pb-6 container-fluid bg-<?php echo $module['background']; ?>" role="news" itemscope itemtype="http://schema.org/Blog">
							
							<div class="container">
							
								<h2 class="text-center text-uppercase font-weight-bold text-white"><?php echo $module['news_title']; ?></h2>
								
								<div class="text-center text-light mt-4"><?php echo $module['news_copy']; ?></div>
							
								<div class="card-columns mt-5">
									
									<?php
										

										
									// Custom query
									$the_query = new WP_Query(
															array(
																'post_type' 		=> 'post',
																'cat'				=> $module['news_category'],
																'posts_per_page'	=> $module['number_displayed']
															)
												);
									 
									if($the_query->have_posts()):
										
									    while($the_query->have_posts()):
										    
										    $the_query->the_post();

											$category = get_the_category();
											$category_icon = $category[0]->term_id;
										    
											if (has_post_thumbnail($post->ID)): //check for featured image on page
												$image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
												$image = $image[0];
											else: //no image
												$image = null;
											endif; 
											
											$postFormat = get_post_format();
											
											$isQuote 	= ($postFormat == 'quote'); //Quote Post
											$isOverlay 	= ($postFormat == 'gallery'); //Image with Text Overlay
											$isImage 	= ($postFormat == 'image'); //Image Only
		
									?>
																		      
												<div class="card <?php if(!$isImage) echo 'mb-3';?> <?php if($isQuote) echo ' primary text-white text-center '; ?> <?php if($isOverlay) echo 'bg-dark'; ?> ">
													
													<?php if(isset($category_icon)): ?>
														<a 
															href="<?php echo get_field('category_page', 'term_' . $category[0]->term_id); ?>" 
															class="category_icon m-0 pr-2 pt-1 position-absolute d-block text-white text-right opacity-5" 
															data-toggle="tooltip" 
															data-placement="left" 
															title="<?php echo $category[0]->name; ?>"
														>
															<?php echo get_field('category_icon', 'term_' . $category[0]->term_id); ?>
														</a>
													<?php endif; ?>
													
													<?php if(is_sticky()): ?>
														<div class="card-header text-center">Featured Post</div>													
													<?php endif; ?>
													
													<?php if($isQuote): ?>
													
														<blockquote class="blockquote mb-0 p-3">
															<p><?php echo get_the_content_feed(); ?></p>
															<footer class="blockquote-footer text-white">
																<small>
																	<cite title="Source Title"><?php echo get_the_title(); ?></cite>
																</small>
															</footer>
														</blockquote>													
														
													<?php elseif($isOverlay): ?>
													
														<img src="<?php echo $image; ?>" class="card-img">
														<div class="card-img-overlay bg-overlay-35">
															<h4 class="card-title text-white"><?php  echo get_the_title(); ?></h4>															
															<div class="card-text text-white"><?php echo get_the_content_feed(); ?></div>															
															<p class="text-right text-white mb-0"><a href="<?php echo get_the_permalink(); ?>" title="Read More" class="btn btn-link text-white">Read More ></a></p>
														</div>													
													
													<?php elseif($isImage): ?>
														<a href="#">
															<img src="<?php echo $image; ?>" class="card-img-top" style="height: 200px;">	
														</a>										
													<?php else: ?>
														<?php if(isset($image)): ?>
															<img src="<?php echo $image;?>" class="card-img-top">
														<?php endif; ?>													
														<div class="card-body">															
															<h4 class="card-title"><?php  echo get_the_title(); ?></h4>															
															<div class="card-text text-justify"><?php echo get_the_content_feed(); ?></div>															
															<p class="text-right mb-0"><a href="<?php echo get_the_permalink(); ?>" title="Read More" class="btn btn-link">Read More ></a></p>
														</div>														
													
													<?php endif; ?>
													
												</div>          
									        
											<?php endwhile;
									
									
									else:
									    // no posts found
									endif;
									
									wp_reset_postdata(); ?>
									
								</div>
								
								<p class="text-center mt-5"><a href="<?php echo get_the_permalink(); ?>" title="Read More" class="btn btn-primary btn-lg w-25 ">View All Articles</a></p>															
								
							</div>
							
						</main>