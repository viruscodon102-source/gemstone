<?php
/**
 * Single Product Price, including microdata for SEO
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

$classes = array();
if($product->is_on_sale()) $classes[] = 'price-on-sale';
if(!$product->is_in_stock()) $classes[] = 'price-not-in-stock'; ?>
<div class="price-wrapper">
	<p class="price product-page-price <?php echo implode(' ', $classes); ?>">
  <?php echo $product->get_price_html(); ?></p>
</div>

<?php $phien_ban=get_field('phien_ban');
$ngay_cap_nhat=get_field('ngay_cap_nhat');
$so_trang=get_field('so_trang');
$xem_chi_tiet=get_field('xem_chi_tiet');
$live_demo=get_field('live_demo');
?>
<?php if($phien_ban){?>
<div class="thong-tin-ky-thuat">
    <div class="row-info">
    <div class="left">Phiên bản</div>
    <?php if($phien_ban){?>
    <div class="right"><?php the_field('phien_ban');?></div>
    <?php } else {?>
    <div class="right">Đang cập nhật</div>
    <?php }?>
    </div>
    <div class="row-info">
    <div class="left">Ngày cập nhật</div>
    <?php if($ngay_cap_nhat){?>
    <div class="right"><?php the_field('ngay_cap_nhat');?></div>
    <?php } else {?>
    <div class="right">Đang cập nhật...</div>
    <?php }?>
    </div>
    <div class="row-info">
    <div class="left">Số trang</div>
    <?php if($so_trang){?>
    <div class="right"><?php the_field('so_trang');?></div>
    <?php } else {?>
    <div class="right">Đang cập nhật...</div>
    <?php }?>
    </div>
</div>
<?php }?>