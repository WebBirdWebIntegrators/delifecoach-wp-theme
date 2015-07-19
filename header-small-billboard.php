<?php ?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic,900,900italic,100,100italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="header">
	<div class="hb1">
		<div class="cntr">
			<div class="bp1">
				<script type="text/javascript">
				    jQuery(function(){
				      jQuery("#toggle-nav").click(function () {
					  	jQuery("#toggle-nav").toggleClass("active");
				        jQuery("#mnav").slideToggle("#mnav");
				        jQuery("#fnav").slideToggle("#fnav");
				      });
				      jQuery("#toggle-contact").click(function () {
					  	jQuery("#toggle-contact").toggleClass("active");
				        jQuery("#contact").slideToggle("#contact");
				      });
				      jQuery("#toggle-language").click(function () {
					  	jQuery("#toggle-language").toggleClass("active");
				        jQuery("#language").slideToggle("#language");
				      });
				      jQuery("#toggle-search").click(function () {
					  	jQuery("#toggle-search").toggleClass("active");
				        jQuery("#search").slideToggle("#search");
				      });
				    });
				</script>
				<nav>
					<div class="nav-bar">
						<ul>
							<li>
								<i class="fa fa-bars" id="toggle-nav"></i>
							</li>
							<li>
								<div class="site-name">
									<a href="<?php echo home_url(); ?>">
										<?php bloginfo( 'name' ); ?>
									</a>
								</div>
							</li>
							<li>
								<i class="fa fa-phone" id="toggle-contact"></i>
								<i class="fa fa-globe" id="toggle-language"></i>
								<i class="fa fa-search" id="toggle-search"></i>
							</li>
						</ul>
					</div>
					<div class="contact" id="contact">
						<ul>
							<?php if (get_field('field_548edd668ebcb', 'option') == 'yes') { ?>
								<?php if( get_field('field_545ceae654114','option') ): ?>
									<li class="phone">
										<a href="tel:<?php echo str_replace( ' ', '', get_field('field_545ceae654114','option') ) ?>"><?php _e('Call', 'eagle') ?></a>
									</li>
								<?php endif; ?>
							<?php } elseif (get_field('field_548edd668ebcb', 'option') == 'no') { ?>
								<?php if( get_field('field_545c925d920fb','option') ): ?>
									<li class="phone">
										<a href="tel:<?php echo str_replace( ' ', '', get_field('field_545c925d920fb','option') ) ?>"><?php _e('Call', 'eagle') ?></a>
									</li>
								<?php endif; ?>
							<?php } ?>

							<!-- Start mobile phone number -->
							<?php if( get_field('field_545ceae654114','option') ): ?>
								<?php if (get_field('field_548ede8895396', 'option') == 'yes') : ?>
									<li class="sms">
										<a href="sms:<?php echo str_replace( ' ', '', get_field('field_545ceae654114','option') ) ?>"><?php _e('SMS', 'eagle'); ?></a>
									</li>
								<?php endif ?>
							<?php endif; ?>
							<!-- End mobile phone number -->

							<?php if( get_field('field_545c927a920fc','option') ): ?>
								<li class="email">
									<a href="mailto:<?php the_field('field_545c927a920fc','option'); ?>"><?php _e('Email', ''); ?></a>
								</li>
							<?php endif; ?>
							<li>
								<a href=" http://maps.google.com/maps?daddr=<?php the_field('field_545c9204920f9','option'); ?>,<?php the_field('field_545c9234920fa','option'); ?>">Route</a>
							</li>
						</ul>
						<div class="address">
							<ul>
								<?php if( get_field('field_545c91318d1d7','option') ): ?>
									<li><?php the_field('field_545c91318d1d7','option'); ?></li>
								<?php endif; ?>
								<?php if( get_field('field_545c9204920f9','option') ): ?>
									<li><?php the_field('field_545c9204920f9','option'); ?></li>
								<?php endif; ?>
								<?php if( get_field('field_545c9234920fa','option') ): ?>
									<li><?php the_field('field_545c9234920fa','option'); ?></li>
								<?php endif; ?>
							</ul>
						</div>
					</div>
					<div class="search" id="search">
						<?php get_search_form(); ?>
					</div>
					<?php {
						$mnav = array(
							'theme_location'  => 'header-mnav',
							'menu'            => '',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => 'mnav',
							'menu_id'         => 'mnav',
							'echo'            => true,
							'fallback_cb'     => '',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 0,
							'walker'          => ''
						);
						wp_nav_menu( $mnav ); }
					?>
					<?php {
						$fnav = array(
							'theme_location'  => 'header-fnav',
							'menu'            => '',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => 'fnav',
							'menu_id'         => 'fnav',
							'echo'            => true,
							'fallback_cb'     => '',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 0,
							'walker'          => ''
						);
						wp_nav_menu( $fnav ); }
					?>
				</nav>
			</div>
			<div class="bp5">
				<div class="site-logo">
					<div class="img-wrap">
						<div class="img">
							<a href="<?php echo home_url(); ?>">
								<?php if( get_field('field_54f5d1b99bc5f', 'option') ) {
									$image = get_field('field_54f5d1b99bc5f', 'option');
									$size = 'medium';
										if( $image ) {
											echo wp_get_attachment_image( $image, $size );
										}
									} else {
									echo '<img src="' . get_template_directory_uri() . '/img/logo-site.png">';
								}
								?>
							</a>
						</div>
					</div>
				</div>
				<nav>
					<?php {
						$fnav = array(
							'theme_location'  => 'header-fnav',
							'menu'            => '',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => 'fnav',
							'menu_id'         => 'fnav',
							'echo'            => true,
							'fallback_cb'     => '',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 0,
							'walker'          => ''
						);
						wp_nav_menu( $fnav ); }
					?>
					<?php {
						$mnav = array(
							'theme_location'  => 'header-mnav',
							'menu'            => '',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => 'mnav',
							'menu_id'         => 'mnav',
							'echo'            => true,
							'fallback_cb'     => '',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 0,
							'walker'          => ''
						);
						wp_nav_menu( $mnav ); }
					?>

				</nav>
			</div>
		</div>
	</div>

	<?php if ( is_category() ) { ?>
		<div class="hb2">
			<div class="cntr">
				<div class="pattern-overlay"></div>
				<div class="billboard">
					<ul>
						<li>
							<?php
								foreach((get_the_category()) as $category) {
									$category_image = fifc_the_tax_thumbnail($category->cat_ID ,'category','billboard-bp5');
									echo $category_image;
								}
							?>
						</li>
					</ul>
				</div>
			</div>
		</div>
	<?php } elseif( is_archive() ) { ?>
		<div class="hb2">
			<div class="cntr">
				<div class="pattern-overlay"></div>
				<div class="billboard">
					<ul>
						<li>
							<?php
								$image = get_field('field_54b8c1c82f5aa', 'option');
								$size = 'billboard-bp5';
								$thumb = $image['sizes'][ $size ];
								if( $image ):
									echo '<img src="' . $thumb . '" alt="' . $image['alt'] . '" />';
								endif;
							?>
						</li>
					</ul>
				</div>
			</div>
		</div>
	<?php } elseif( is_search() ) { ?>
		<div class="hb2 light-transparant">
			<div class="cntr">
				<div class="pattern-overlay"></div>
				<div class="billboard">
					<ul>
						<li>
							<?php
								$image = get_field('field_54b8c1c82f5aa', 'option');
								$size = 'billboard-bp5';
								$thumb = $image['sizes'][ $size ];
								if( $image ):
									echo '<img src="' . $thumb . '" alt="' . $image['alt'] . '" />';
								endif;
							?>
						</li>
					</ul>
				</div>
			</div>
		</div>
	<?php } elseif ( is_page() ) { ?>

		<?php if( have_rows('field_548fefb1006a4') ) { ?>
			<div class="hb2">
				<div class="cntr">
					<div class="pattern-overlay"></div>
					<div class="billboard">
						<div class="flexslider">
							<ul class="slides">
							<?php while( have_rows('field_548fefb1006a4') ): the_row();
								// vars
								$image = get_sub_field('field_548fefd8006a5');
								echo '<li><img src="';
									echo $image['url'];
								echo '"/></li>';
								?>
							<?php endwhile; ?>
							</ul>
						</div>

						<script type="text/javascript">
							jQuery(window).load(function() {
								jQuery('.flexslider').flexslider( {
									animation: "slide",
									animationSpeed: 1000,
									slideshowSpeed: 5000,
									direction: "horizontal",
									animationLoop: true,
									controlNav: false,
									directionNav: false,
									useCSS: false,
								} );
							} );
						</script>
					</div>
				</div>
			</div>

		<?php } elseif(has_post_thumbnail()) { ?>
			<div class="hb2">
				<div class="cntr">
					<div class="pattern-overlay"></div>
					<div class="billboard">
						<ul>
							<li style="height: 250px"><?php the_post_thumbnail('billboard-bp5'); ?></li>
						</ul>
					</div>
				</div>
			</div>

		<?php } else { ?>
			<div class="hb2">
				<div class="cntr">
					<div class="pattern-overlay"></div>
					<div class="billboard">
						<ul>
							<li style="height: 250px">
								<?php
									$image = get_field('field_54b8c1c82f5aa', 'option');
									$size = 'billboard-bp5';
									$thumb = $image['sizes'][ $size ];
									if( $image ):
										echo '<img src="' . $thumb . '" alt="' . $image['alt'] . '" />';
									endif;
								?>
							</li>
						</ul>
					</div>
				</div>
			</div>
		<?php } ?>

	<?php } else { ?>
		<div class="hb2">
			<div class="cntr">
				<div class="pattern-overlay"></div>
				<div class="billboard">
					<ul>
						<li>
							<?php
								$image = get_field('field_54b8c1c82f5aa', 'option');
								$size = 'billboard-bp5';
								$thumb = $image['sizes'][ $size ];
								if( $image ):
									echo '<img src="' . $thumb . '" alt="' . $image['alt'] . '" />';
								endif;
							?>
						</li>
					</ul>
				</div>
			</div>
		</div>
	<?php } ?>
</div>

<div class="main">
