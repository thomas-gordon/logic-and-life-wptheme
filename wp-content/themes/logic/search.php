<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">
                    <header id="page-header">
                            <div id="logo" class="h1">
                                <a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?>
                                    Logic and Life
                                </a>
                            </div>
                            <aside class="post-image">
                                <h1 class="archive-title"><span><?php _e('Search Results for:', 'bonestheme'); ?></span><?php echo esc_attr(get_search_query()); ?></h1>
                            </aside>
                    </header>
					<div id="main" class="eightcol first clearfix" role="main">
						 <div id="masonry">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


                            <?php get_template_part( 'content', get_post_format() ); ?>

						<?php endwhile; ?>
                        </div>
								<?php if (function_exists('bones_page_navi')) { ?>
										<?php bones_page_navi(); ?>
								<?php } else { ?>
										<nav class="wp-prev-next">
												<ul class="clearfix">
													<li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "bonestheme")) ?></li>
													<li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "bonestheme")) ?></li>
												</ul>
										</nav>
								<?php } ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry clearfix">
										<header class="article-header">
											<h1><?php _e("Sorry, No Results.", "bonestheme"); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e("Try your search again.", "bonestheme"); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e("This is the error message in the search.php template.", "bonestheme"); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div> <!-- end #main -->

							<?php get_sidebar(); ?>

					</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
