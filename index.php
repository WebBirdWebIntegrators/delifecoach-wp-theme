<?php get_header(); ?>

<div id="body">
	<div class="b1">
		<div class="cntr">
			<h1>Blog</h1>
		</div>
	</div>
	<div class="b2">
		<div class="cntr archive">
			<div class="content with-sidebar">

			<?php if (have_posts()) : ?>

				<?php while ( have_posts() ) : the_post(); ?>
					<div <?php post_class( 'post' ) ?>>
						<?php if ( has_post_thumbnail() ) : ?>
							<div class="img">
								<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
									<div class="mask">
										<div class="mask-container">
											<div class="mask-content">
												<i class="fa fa-link"></i>
											</div>
										</div>
									</div>
									<?php the_post_thumbnail('medium-square'); ?>
								</a>
							</div>
						<?php endif ?>
						<div class="content">
							<h2>
								<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
									<?php the_title() ?>
								</a>
							</h2>
							<div class="date-author">
								<?php the_time('l d F Y') ?> / <?php the_author_posts_link(); ?>
							</div>
							<?php the_excerpt() ?>
							<a href="<?php the_permalink(); ?>" class="button" style="margin-top: 1em">Lees meer</a>
							<?php the_tags('<div class="tags"><span>' . __('Tags', 'eagle') . ': </span>', ', ', '</div>'); ?>
							<!--
<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="read-more">
								<?php _e( 'Read more', 'eagle' ); ?>
							</a>
-->
						</div>
					</div>
				<?php endwhile; ?>

			<?php else :

				if ( is_category() ) { // If this is a category archive
					printf("<h2>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
				} else if ( is_date() ) { // If this is a date archive
					echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
				} else if ( is_author() ) { // If this is a category archive
					$userdata = get_userdatabylogin(get_query_var('author_name'));
					printf("<h2>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
				} else {
					echo("<h2>No posts found.</h2>");
				}

			endif;
		?>

		</div>
			<div class="sidebar">
				<?php dynamic_sidebar( 'sidebar1' ); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
