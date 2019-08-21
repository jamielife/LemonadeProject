<?php get_header(); ?>

						<main id="main" class="wrap mt-6 p-0 container-fluid" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" class="container" role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="page-title text-uppercase font-weight-bold" itemprop="headline"><?php the_title(); ?></h1>

								</header>

								<section class="entry-content mt-3" itemprop="articleBody">
									<?php
										// the content (pretty self explanatory huh)
										the_content();

										/*
										 * Link Pages is used in case you have posts that are set to break into
										 * multiple pages. You can remove this if you don't plan on doing that.
										 *
										 * Also, breaking content up into multiple pages is a horrible experience,
										 * so don't do it. While there are SOME edge cases where this is useful, it's
										 * mostly used for people to get more ad views. It's up to you but if you want
										 * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
										 *
										 * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
										 *
										*/
										wp_link_pages( array(
											'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
											'after'       => '</div>',
											'link_before' => '<span>',
											'link_after'  => '</span>',
										) );
									?>
								</section>

							</article>

							<?php endwhile; endif; ?>

						</main>
						
						<?php
							
							$content_modules = get_field( "content_modules");
							
							if(isset($content_modules)):
							
								foreach($content_modules as $module):
								
									set_query_var('module', $module);
								
									switch($module['acf_fc_layout']):
										case 'news':
											get_template_part('library/modules/cards');
											break;
										case 'counter':
											get_template_part('library/modules/counters');
											break;										
										case 'progress_bar':
											get_template_part('library/modules/progress-bar');
											break;
										case 'content_wysiwyg':
											get_template_part('library/modules/content');
											break;
										case 'photo_gallery':
											get_template_part('library/modules/photo-gallery');
											break;
									endswitch; 
									
								
								endforeach;
							
							endif;
							
get_footer(); ?>
