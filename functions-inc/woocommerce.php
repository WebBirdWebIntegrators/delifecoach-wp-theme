<?php

add_filter( 'woocommerce_enqueue_styles', '__return_false' );

remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'cwpt_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'cwpt_wrapper_end', 10);


function cwpt_wrapper_start() {
	echo '<div class="main__body">';
		echo '<div class="main__body__container">';
			echo '<div class="main__body__container__content">';
				echo '<div class="main__body__container__content__woocommerce">';
}

function cwpt_wrapper_end() {
				echo '</div>';
			echo '</div>';
		echo '</div>';
	echo '</div>';
}

// Override theme default specification for product # per row
/*
function loop_columns() {
	return 3 ; // 5 products per row
}
*/

add_filter('loop_shop_columns', 'loop_columns', 999);

add_action( 'woocommerce_after_subcategory_title', 'webbird_add_category_description', 12);

function webbird_add_category_description ($category) {
	$cat_id=$category->term_id;
	$prod_term=get_term($cat_id,'product_cat');
	$description=$prod_term->description;
	echo '<div class="category-description">';
	echo substr( wpautop($description), 0, 200 );
	echo '</div>';
}

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 6 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 6 );

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs', 31 );

//remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
//add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 9 );

/*
add_filter( 'woocommerce_payment_complete_order_status', 'webbird_update_order_status', 10, 2 );
 
function webbird_update_order_status( $order_status, $order_id ) {
	$order = new WC_Order( $order_id );
		if ( 'processing' == $order_status && ( 'on-hold' == $order->status || 'pending' == $order->status || 'failed' == $order->status ) ) {
		return 'completed';
	}
	return $order_status;
}
*/

//remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
//add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );

function woocommerce_show_product_loop_sale_flash() {
	global $post, $product;
	if ( $product->is_on_sale() ) {
		echo '<div class="onsale">';
		echo '<i class="fa fa-bell"></i>';
		echo '</div>';
	}
}

?>