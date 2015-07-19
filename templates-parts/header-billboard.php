<!-- Main billboard -->
<?php if ( is_woocommerce() | is_shop() | is_product_category() | is_product_tag() | is_product() | is_cart() | is_checkout() | is_account_page() | is_ajax() ) { ?>
<?php } else { ?>
<div class="main__billboard">
	<div class="main__billboard__flexslider">
		<ul class="slides">
			<li><img src="<?php echo get_template_directory_uri(); ?>/img/demo-billboard-01.jpg" alt=""></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/img/demo-billboard-02.jpg" alt=""></li>
		</ul>
	</div>
	<script type="text/javascript">
		jQuery(window).load(function() {
			jQuery('.main__billboard__flexslider').flexslider( {
				animation: "slide",
				slideshowSpeed: 2500,
				useCSS: false
			} );
		} );
	</script>
</div>
<?php } ?>