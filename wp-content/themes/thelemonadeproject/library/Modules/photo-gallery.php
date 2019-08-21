<?php
/*
 * Standard WYSIWYG Module
 */
?>

						<main class="container-fluid pt-5 pb-5 bg-<?php if($module['photo_gallery_background']) echo $module['photo_gallery_background']; ?>" role="photo-gallery" itemscope itemtype="http://schema.org/Blog">
									
							<div class="container<?php if($module['photo_gallery_full_width']) echo '-fluid'; ?> text-center clearfix">
								
								<ul class="wp-block-gallery columns-<?php if($module['photo_gallery_columns']) echo $module['photo_gallery_columns']; ?> is-cropped">
									
									<?php if($module['photo_gallery_images']): ?>
										
										<?php 

										foreach($module['photo_gallery_images'] as $gallery_image): ?>
										
											<li class="blocks-gallery-item">

												<figure>
												
													<a href="<?php echo $gallery_image['sizes']['large'];?>" data-toggle="modal" data-target="#gallery-image-<?php echo $gallery_image['id'];?>">
														
														<img 
															src="<?php echo $gallery_image['sizes']['medium'];?>" 
															alt="<?php echo $gallery_image['alt']; ?>" 
															srcset="<?php echo $gallery_image['sizes']['large'];?> 1024w, 
																	<?php echo $gallery_image['sizes']['medium'];?> 300w, 
																	<?php echo $gallery_image['sizes']['medium_large'];?> 768w" 
															sizes="(max-width: 1024px) 100vw, 1024px"
														>
														
														<?php if(isset($gallery_image['caption']) && $gallery_image['caption'] !== ''): ?>
															<figcaption>
																<?php echo $gallery_image['caption']; ?>
															</figcaption>
														<?php endif; ?>
														
													</a>
													
												</figure>
												
											</li>	
												
										<?php endforeach; ?>
										
									<?php endif; ?>
									
								</ul>
								
							</div>
							
						</main>
						