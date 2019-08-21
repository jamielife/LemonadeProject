<?php
/*
 * Counter Module
 */
?>

						<main class="counter container-fluid pt-5 pb-5 bg-<?php echo $module['counter_background']; ?>" role="counter" itemscope itemtype="http://schema.org/Blog">
									
							<div class="container text-center">
								<div class="row">
									<?php foreach($module['counters'] as $counter): ?>
										<div class="count-box col p-3 mt-3 mb-3">
											<h4 class="count-digit font-weight-bold" data-duration="<?php echo (int) $counter['counter_duration'] * 1000; ?>">
												<?php echo $counter['counter_number']; ?>
											</h4>
											<h5 class="mt-3 font-weight-bold"><?php echo $counter['counter_title']; ?></h5>											
										</div>
									<?php endforeach; ?>
								</div>
							</div>									
							
						</main>