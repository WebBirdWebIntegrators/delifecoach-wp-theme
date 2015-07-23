<div id="footer">

	<?php echo do_shortcode('[webbird-quotes]'); ?>

	<?php get_template_part( 'assets/location-directions' ) ?>

	<div class="fb1">
		<div class="cntr">
			<ul>
				<li class="col1">
					<div class="img">
						<?php
						$image = get_field('field_547db7b3952de', 'option');
						if( !empty($image) ):
							echo wp_get_attachment_image( $image, 'thumbnail' );
						endif;
						?>
					</div>
					<?php if( get_field('field_545c8ebe8c5f7','option') ): ?>
						<h3><?php the_field('field_545c8ebe8c5f7','option'); ?></h3>
					<?php endif; ?>
					<?php if( get_field('field_545c901a03dae','option') ): ?>
						<?php the_field('field_545c901a03dae','option'); ?>
					<?php endif; ?>
				</li>
				<li class="col2">
					<!-- <h3>Navigatie</h3> -->
					<?php {
						$footer_nav = array(
							'theme_location'  => 'footer-nav',
							'menu'            => '',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => 'footer-nav',
							'menu_id'         => 'footer-nav',
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
						wp_nav_menu( $footer_nav ); }
					?>
				</li>
				<li class="col3">

					<!-- Start title -->
					<?php if( get_field('field_545c8f54e05af','option') ): ?>
						<h3><?php the_field('field_545c8f54e05af','option'); ?></h3>
					<?php endif; ?>
					<!-- Start title -->

					<ul class="contact">

						<!-- Start company name -->
						<?php if( get_field('field_545c91318d1d7','option') ): ?>
							<li class="company"><?php the_field('field_545c91318d1d7','option'); ?></li>
						<?php endif; ?>
						<!-- End company name -->

						<!-- Start street & number -->
						<?php if( get_field('field_545c9204920f9','option') ): ?>
							<li><?php the_field('field_545c9204920f9','option'); ?></li>
						<?php endif; ?>
						<!-- End street & number -->

						<!-- Start postal code & city -->
						<?php if( get_field('field_545c9234920fa','option') ): ?>
							<li><?php the_field('field_545c9234920fa','option'); ?></li>
						<?php endif; ?>
						<!-- End postal code & city -->

						<!-- Start phone number -->
						<?php if( get_field('field_545c925d920fb','option') ): ?>
							<li class="phone">
								<label>T:</label>
								<a href="tel:<?php echo str_replace( ' ', '', get_field('field_545c925d920fb','option') ) ?>" onclick="ga('send','event','contact','click','phone',0);"><?php the_field('field_545c925d920fb','option'); ?></a>
							</li>
						<?php endif; ?>
						<!-- End phone number -->

						<!-- Start mobile phone number -->
						<?php if( get_field('field_545ceae654114','option') ): ?>
							<li>
								<label>M:</label>
								<a href="tel:<?php echo str_replace( ' ', '', get_field('field_545ceae654114','option') ) ?>" onclick="ga('send','event','contact','click','phone',0);"><?php the_field('field_545ceae654114','option'); ?></a>
							</li>
						<?php endif; ?>
						<!-- End mobile phone number -->

						<!-- Start email -->
						<?php if( get_field('field_545c927a920fc','option') ): ?>
							<li>
								<label>E:</label>
								<a href="mailto:<?php the_field('field_545c927a920fc','option'); ?>" onclick="ga('send','event','contact','click','email',0);"><?php the_field('field_545c927a920fc','option'); ?></a>
							</li>
						<?php endif; ?>
						<!-- End email -->

					</ul>
				</li>
			</ul>
		</div>
	</div>
	<div class="fb2">
		<div class="cntr">
			<ul class="social">
				<?php if( get_field('field_545c945b914e2','option') ):  // Facebook ?>
					<li><a href="<?php the_field('field_545c945b914e2','option'); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
				<?php endif; ?>
				<?php if( get_field('field_545c932b4c1e4','option') ): // Twitter ?>
					<li><a href="<?php the_field('field_545c932b4c1e4','option'); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
				<?php endif; ?>
				<?php if( get_field('field_545c94a6c6bdc','option') ): // LinkedIn ?>
					<li><a href="<?php the_field('field_545c94a6c6bdc','option'); ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
				<?php endif; ?>
				<?php if( get_field('field_545c94bcc6bdd','option') ): // Instagram ?>
					<li><a href="<?php the_field('field_545c94bcc6bdd','option'); ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
				<?php endif; ?>
				<?php if( get_field('field_545c94ebc6bde','option') ): // Pinterest ?>
					<li><a href="<?php the_field('field_545c94ebc6bde','option'); ?>" target="_blank"><i class="fa fa-pinterest"></i></a></li>
				<?php endif; ?>
				<?php if( get_field('field_545c94fdc6bdf','option') ): // YouTube ?>
					<li><a href="<?php the_field('field_545c94fdc6bdf','option'); ?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
				<?php endif; ?>
				<?php if( get_field('field_545c9510c6be0','option') ): // Vimeo ?>
					<li><a href="<?php the_field('field_545c9510c6be0','option'); ?>" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>
				<?php endif; ?>
			</ul>
			<ul class="copyright">
				<li>&copy;<?php echo date("Y"); ?> - <?php _e('All rights reserved', 'eagle'); ?></li>
				<li><a href=""><?php _e('Terms of Use', 'eagle'); ?></a> - <a href=""><?php _e('Disclaimer', 'eagle'); ?></a>
				<li class="design"><?php _e('Website by', 'eagle'); ?>
					<?php if( get_field('field_545c97cbed55e','option') ): ?>
						<a href="<?php the_field('field_545c9804ed55f','option'); ?>">
							<?php the_field('field_545c97cbed55e','option'); ?>
						</a>
					<?php endif; ?>
				</li>
			</ul>
		</div>
	</div>
</div>



<!-- Start Google Analytics implementation -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60479058-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- End Google Analytics implementation -->

</div>

<?php wp_footer(); ?>

</body></html>
