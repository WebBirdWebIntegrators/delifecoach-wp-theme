<?php get_header(); ?>

<div id="body">
	<div class="b1">
		<div class="cntr">
			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
			<?php if (is_singular()) { ?>
				<!-- Is singular -->
				<?php if ( ! is_singular( array('page', 'attachment', 'post') ) ) { ?>
					<h1>
						<?php
							$customPostType = get_post_type();
							$postTypeObject = get_post_type_object( $customPostType );
							echo $postTypeObject->labels->singular_name;
						?>
					</h1>
				<?php } else { ?>
					<?php
					$categories = get_the_category();
					foreach ($categories as $category) {
						echo '<h1>' . $category->name . '</h1>';
						echo '<div class="description">' . $category->description . '</div>';
					}
				?>
				<?php } ?>
			<?php } ?>

		</div>
	</div>
	<div class="b2">
		<div class="cntr post">
			<div class="content with-aside">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<h1><?php the_title(); ?></h1>
						<?php the_post_thumbnail('large', array('class' => 'featured-image')); ?>
						<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
					</div>

					<?php comments_template(); ?>

					<?php endwhile; else: ?>

						<p>Sorry, no posts matched your criteria.</p>

				<?php endif; ?>
			</div>
			<div class="sidebar">
				<?php dynamic_sidebar( 'sidebar1' ); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
