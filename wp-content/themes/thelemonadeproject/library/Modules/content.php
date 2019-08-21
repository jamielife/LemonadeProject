<?php
/*
 * Standard WYSIWYG Module
 */
?>

					<main class="container-fluid pt-5 pb-5 bg-<?php if($module['content_background']) echo $module['content_background']; ?>" role="content" itemscope itemtype="http://schema.org/Blog">
								
						<div class="container<?php if($module['content_full_width']) echo '-fluid'; ?> clearfix">

							<div class="container clearfix">
							
								<?php if($module['content']) echo $module['content']; ?>
							
							</div>
						
						</div>

					</main>
					
