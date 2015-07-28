<?php
	//Template Name: Homepage
?>

<?php get_header(); ?>

<div id="body">
	<div class="services">
		<div class="services__wrapper">
			<ul>
				<li>
					<?php echo get_the_post_thumbnail( '29', 'circle', array('class' => 'featured-image') ); ?>
					<a href="<?php echo get_permalink('29'); ?>"><h2><?php echo get_field('services__title1'); ?></h2></a>
					<?php
					$id = 29;
					$post = get_post( $id );
					setup_postdata( $post );
					?>
					<?php the_excerpt(); ?>
					<div class="button-wrapper">
						<a href="<?php the_permalink(); ?>" class="button">Meer info</a>
					</div>
					<?php
					wp_reset_postdata();
					?>
				</li>
				<li>
					<?php echo get_the_post_thumbnail( '31', 'circle', array('class' => 'featured-image') ); ?>
					<a href="<?php echo get_permalink('31'); ?>"><h2><?php echo get_field('services__title2'); ?></h2></a>
					<?php
					$id = 31;
					$post = get_post( $id );
					setup_postdata( $post );
					?>
					<?php the_excerpt(); ?>
					<div class="button-wrapper">
						<a href="<?php the_permalink(); ?>" class="button">Meer info</a>
					</div>
					<?php
					wp_reset_postdata();
					?>
				</li>
				<li>
					<?php echo get_the_post_thumbnail( '33', 'circle', array('class' => 'featured-image') ); ?>
					<a href="<?php echo get_permalink('33'); ?>"><h2><?php echo get_field('services__title3'); ?></h2></a>
					<?php
					$id = 33;
					$post = get_post( $id );
					setup_postdata( $post );
					?>
					<?php the_excerpt(); ?>
					<div class="button-wrapper">
						<a href="<?php the_permalink(); ?>" class="button">Meer info</a>
					</div>
					<?php
					wp_reset_postdata();
					?>
				</li>
			</ul>
		</div>
	</div>
	<div class="b2">
		<div class="cntr page">
			<div class="content with-aside">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID(); ?>">
					<h1><?php the_title(); ?></h1>
					<?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
					<?php wp_link_pages(array('before' => '<p>Pages: ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

					<!-- Gallery -->
					<?php get_template_part( 'assets/gallery' ) ?>

				</div>
				<?php endwhile; endif; ?>
				<?php edit_post_link( __('Edit this entry', 'eagle') , '<div class="post-edit">', '</div>'); ?>
				<?php paginate_comments_links() ?>
			</div>
			<div class="sidebar">
				<?php dynamic_sidebar( 'sidebar1' ); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
