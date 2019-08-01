<?php
/*
 * Progress Bar Module
 */
?>

						<main class="container-fluid pt-5 pb-5 bg-light" role="progressbar" itemscope itemtype="http://schema.org/Blog">
									
								<div class="container">
										
										<div class="progress">
									
											<div 
												class="progress-bar bg-success 
												<?php if($module['progressbar_striped']) echo 'progress-bar-striped';?> <?php if($module['progressbar_animate'] && $module['progressbar_striped']) echo 'progress-bar-animated'; ?>" 
												role="progressbar" style="width: <?php echo $module['percentage']; ?>%" 
												aria-valuenow="<?php echo $module['percentage']; ?>" aria-valuemin="0" aria-valuemax="100">
													 <?php if($module['progressbar_show_percentage']) echo $module['percentage'] . '%'; ?>
											</div>
									
										</div>
										
								</div>
							
						</main>