<?php
/*
* Add quick buy button go to checkout after click
*/
add_action('woocommerce_after_add_to_cart_button','devvn_quickbuy_after_addtocart_button');
function devvn_quickbuy_after_addtocart_button(){
    global $product;
    ?>
    <style>
        .devvn-quickbuy button.single_add_to_cart_button.loading:after {
            display: none;
        }
        .devvn-quickbuy button.single_add_to_cart_button.button.alt.loading {
            color: #fff;
            pointer-events: none !important;
        }
        .devvn-quickbuy button.buy_now_button {
            position: relative;
            color: rgba(255,255,255,0.05);
        }
        .devvn-quickbuy button.buy_now_button:after {
            animation: spin 500ms infinite linear;
            border: 2px solid #fff;
            border-radius: 32px;
            border-right-color: transparent !important;
            border-top-color: transparent !important;
            content: "";
            display: block;
            height: 16px;
            top: 50%;
            margin-top: -8px;
            left: 50%;
            margin-left: -8px;
            position: absolute;
            width: 16px;
        }
    </style>
    <button type="button" class="button buy_now_button">
        <?php _e('<i class="fa fa-credit-card" aria-hidden="true"></i><span>Thanh toán ngay</span>', 'devvn'); ?>
    </button>
    <input type="hidden" name="is_buy_now" class="is_buy_now" value="0" autocomplete="off"/>
    <script>
        jQuery(document).ready(function(){
            jQuery('body').on('click', '.buy_now_button', function(){
                var thisParent = jQuery(this).parents('form.cart');
                if(jQuery('.single_add_to_cart_button', thisParent).hasClass('disabled')) return false;
                thisParent.addClass('devvn-quickbuy');
                jQuery('.is_buy_now', thisParent).val('1');
                jQuery('.single_add_to_cart_button', thisParent).trigger('click');
            });
        });
    </script>
    <?php
}
add_filter('woocommerce_add_to_cart_redirect', 'redirect_to_checkout');
function redirect_to_checkout($redirect_url) {
    if (isset($_REQUEST['is_buy_now']) && $_REQUEST['is_buy_now']) {
        $redirect_url = wc_get_checkout_url(); //or wc_get_cart_url()
    }
    return $redirect_url;
}

/*
* Sửa nút Add to cart
*/
add_filter( 'add_to_cart_text', 'woo_custom_cart_button_text' );                                // < 2.1
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' );    // 2.1 +
  
function woo_custom_cart_button_text() {
	 _e('<i class="fa fa-cart-plus" aria-hidden="true"></i><span>Thêm vào giỏ</span>', 'giuseart');
  
}

//*tạo thêm sidebar //

register_sidebar(array(
    'name' => 'Sidebar Product 2',
    'id' => 'block-product-2',
    'description' => 'Sidebar hiển thị sidebar mới của trang sản phẩm',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<span class="widget-title">',
    'after_title' => '</span>'
));

/*Sắp xếp lại thứ tự các field*/
add_filter("woocommerce_checkout_fields", "order_fields");
function order_fields($fields) {
 
  //Shipping
  $order_shipping = array(
    "shipping_last_name",
    "shipping_phone",
    "shipping_address_1"
  );
  foreach($order_shipping as $field_shipping)
  {
    $ordered_fields2[$field_shipping] = $fields["shipping"][$field_shipping];
  }
  $fields["shipping"] = $ordered_fields2;
  return $fields;
}
 
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields',99 );
function custom_override_checkout_fields( $fields ) {
  unset($fields['billing']['billing_company']);
  unset($fields['billing']['billing_first_name']);
  unset($fields['billing']['billing_postcode']);
  unset($fields['billing']['billing_country']);
  unset($fields['billing']['billing_city']);
  unset($fields['billing']['billing_state']);
  unset($fields['billing']['billing_address_2']);
  $fields['billing']['billing_last_name'] = array(
    'label' => __('Họ và tên', 'devvn'),
    'placeholder' => _x('Nhập đầy đủ họ và tên của bạn', 'placeholder', 'devvn'),
    'required' => true,
    'class' => array('form-row-wide'),
    'clear' => true
  );
  $fields['billing']['billing_address_1']['placeholder'] = 'Ví dụ: Số xx Ngõ xx Phú Kiều, Bắc Từ Liêm, Hà Nội';
 
  unset($fields['shipping']['shipping_company']);
  unset($fields['shipping']['shipping_postcode']);
  unset($fields['shipping']['shipping_country']);
  unset($fields['shipping']['shipping_city']);
  unset($fields['shipping']['shipping_state']);
  unset($fields['shipping']['shipping_address_2']);
 
  $fields['shipping']['shipping_phone'] = array(
    'label' => __('Điện thoại', 'devvn'),
    'placeholder' => _x('Số điện thoại người nhận hàng', 'placeholder', 'devvn'),
    'required' => true,
    'class' => array('form-row-wide'),
    'clear' => true
  );
  $fields['shipping']['shipping_last_name'] = array(
    'label' => __('Họ và tên', 'devvn'),
    'placeholder' => _x('Nhập đầy đủ họ và tên của người nhận', 'placeholder', 'devvn'),
    'required' => true,
    'class' => array('form-row-wide'),
    'clear' => true
  );
  $fields['shipping']['shipping_address_1']['placeholder'] = 'Ví dụ: Số xx Ngõ xx Phú Kiều, Bắc Từ Liêm, Hà Nội';
 
  return $fields;
}
 
add_action( 'woocommerce_admin_order_data_after_shipping_address', 'my_custom_checkout_field_display_admin_order_meta', 10, 1 );
function my_custom_checkout_field_display_admin_order_meta($order){
  echo '<p><strong>'.__('Số ĐT người nhận').':</strong> <br>' . get_post_meta( $order->get_id(), '_shipping_phone', true ) . '</p>';
}
