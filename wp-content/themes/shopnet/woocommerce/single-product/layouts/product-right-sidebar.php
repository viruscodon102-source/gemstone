<div class="product-container">
<div class="product-main">
<div class="row mb-0 content-row">


	<div class="product-gallery large-<?php echo flatsome_option('product_image_width'); ?> col">
	<?php
		/**
		 * woocommerce_before_single_product_summary hook
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
	?>

    <!--<div class="box-live-demo">-->
    <!--    <div class="left">-->
    <!--       <a href="/lien-he/"><i class="far fa-bell"></i><span>Gửi yêu cầu</span></a>-->
    <!--    </div>-->
    <!--    <div class="right">-->
    <!--        <a href="<?php the_field('live_demo');?>" target="blank"><i class="fa fa-desktop"></i><span>Live Demo</span></a>-->
    <!--    </div>-->
    <!--</div>-->

	</div>

	<div class="product-info summary col-fit col-divided col entry-summary <?php flatsome_product_summary_classes();?>">

		<?php
			/**
			 * woocommerce_single_product_summary hook
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 */
			do_action( 'woocommerce_single_product_summary' );
		?>
	</div><!-- .summary -->

	<div id="product-sidebar" class="col large-3 hide-for-medium <?php flatsome_sidebar_classes(); ?>">
		<?php
			do_action('flatsome_before_product_sidebar');
			/**
			 * woocommerce_sidebar hook
			 *
			 * @hooked woocommerce_get_sidebar - 10
			 */
			if (is_active_sidebar( 'product-sidebar' ) ) {
					dynamic_sidebar('product-sidebar');
			} else if(is_active_sidebar( 'shop-sidebar' )) {
					dynamic_sidebar('shop-sidebar');
			}
		?>
	</div>

</div><!-- .row -->
</div><!-- .product-main -->
<div class="row2">
    <div class="container">
        <div class="row-info">
            <div class="cot1">
                <div class="khoi-box">
                    <div class="box-title"><label>SẢN PHẨM CHẤT LƯỢNG CAO</label> Có nhiều loại mẫu mã </div> 
                    <div class="box-info"> 
                    <ul class="list-star pink">
                        <li>Sản phẩm kiểm duyệt kỹ lưỡng.</li>
                        <li>Đa dạng và phong phú.</li>
                        <li>Chế tác tinh xảo.</li>
                   	    <li>Cập nhật thường xuyên.</li>
                    </ul>
                    </div>
                    <a class="nut-dang-ky" href="#" target="_blank" rel="nofollow noopener">Ưu đãi không giới hạn</a>
                </div>
            </div>
            <div class="cot2">
                <div class="khoi-box">
                     <div class="box-title"><label>PHÙ HỢP VỚI MỌI LỨA TUỔI</label> Thanh toán online - Tải sản phẩm trực tiếp từ website </div> 
                <div class="box-info"> 
                    <ul class="list-star pink">
                        <li>Vòng tay đa dạng.</li>
                        <li>Sản phẩm phù hợp với mệnh.</li>
                        <li>Đa dạng các sản phẩm</li>
                        <li>Cập nhật thường xuyên.</li>
                    </ul>
                </div>
                <a class="nut-dang-ky" href="/mua" target="_blank" rel="nofollow noopener">Xem thêm các sản phẩm khác</a>
                </div>
            </div>
            <div class="cot3">
                <div class="khoi-box">
                    <div class="box-title"><label>CHẾ ĐỘ SUPPORT TỐT NHẤT</label> Hỗ trợ mọi lúc mọi nơi</div> 
                    <div class="box-info"> 
                     Để được hỗ trợ tốt nhất, vui lòng gửi email tới địa chỉ sau:
                     <h4>viruscodon102@gmail.com</h4>
                     hoặc
                    </div>
                     <a class="nut-dang-ky" href="https://www.facebook.com/nguyen.truong.315468" target="_blank" rel="nofollow noopener">Chat hỗ trợ qua facebook</a>
             </div>
            </div>
    </div>
</div>
<div class="product-footer">
	<div class="container">
	    <div class="row-info">
	    <div class="left">
	        <?php
			/**
			 * woocommerce_after_single_product_summary hook
			 *
			 * @hooked woocommerce_output_product_data_tabs - 10
			 * @hooked woocommerce_upsell_display - 15
			 * @hooked woocommerce_output_related_products - 20
			 */
			do_action( 'woocommerce_after_single_product_summary' );
		?>
	    </div>
	    <div class="right">
	        <?php if ( is_active_sidebar( 'block-product-2' ) ) : ?>
                <?php dynamic_sidebar( 'block-product-2' ); ?>
<?php endif; ?>

<div id="nut-buy">
    <div>
        <?php the_post_thumbnail("thumbnail",array( "title" => get_the_title(),"alt" => get_the_title() ));?>
    </div>
    <div>
        <h3><?php the_title() ;?></h3>
        <div class="price">
        <?php $gia_ban= get_post_meta( get_the_ID(), '_regular_price', true );?>
        <?php $gia_km= get_post_meta( get_the_ID(), '_sale_price', true ); ?>
        <?php if($gia_km){?>
        <div class="price">
             <span class="del"><?php echo number_format($gia_ban);?>đ</span>  <span class="ins"> <?php echo number_format($gia_km);?>đ</span>
        </div>
        <?php } else {?>
        <div class="price2">
            <span class="ins"> <?php echo number_format($gia_ban);?>đ</span>
        </div>
        <?php }?>
        
    </div>
			<?php the_excerpt() ;?>
    </div>
    
    <div>
        <p class="des">(Đặt hàng nhanh và chờ nhân viên gọi điện xác nhận sau 5 phút!)</p>
        <?php echo do_shortcode( '[devvn_quickbuy]' ); ?>
    </div>
</div>

	    </div>
	    </div>
	</div><!-- container -->
</div><!-- product-footer -->
</div><!-- .product-container -->
