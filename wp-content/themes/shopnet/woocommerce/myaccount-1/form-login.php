<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 6.6.1
 *
 * @flatsome-parallel-template {
 * form-login-lightbox-left-panel.php
 * form-login-lightbox-right-panel.php
 * }
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

do_action( 'woocommerce_before_customer_login_form' ); ?>

<div class="account-container lightbox-inner">

	<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>

    	<div class="col2-set row row-divided row-large" id="customer_login">
    
    		<div class="col-1 large-6 col pb-0">
    
    			<?php endif; ?>
    
    			<div class="account-login-inner">
    
                    <div class="nsl-container nsl-container-block nsl-container-login-layout-below" data-align="center" style="display: block;">
                        <div class="nsl-container-buttons">
                        <a href="/wp-login.php?itsec-hb-token=qltn15&loginSocial=facebook" rel="nofollow" aria-label="Đăng nhập <b>Facebook</b>" data-plugin="nsl" data-action="connect" data-provider="facebook" data-popupwidth="600" data-popupheight="679">
                            <div class="nsl-button nsl-button-default nsl-button-facebook" data-skin="dark" style="background-color:#1877F2;">
                                <div class="nsl-button-svg-container">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1365.3 1365.3" height="1365.3" width="1365.3">
                                        <path d="M1365.3 682.7A682.7 682.7 0 10576 1357V880H402.7V682.7H576V532.3c0-171.1 102-265.6 257.9-265.6 74.6 0 152.8 13.3 152.8 13.3v168h-86.1c-84.8 0-111.3 52.6-111.3 106.6v128h189.4L948.4 880h-159v477a682.8 682.8 0 00576-674.3" fill="#fff"></path>
                                    </svg>
                                </div>
                                <div class="nsl-button-label-container">Đăng nhập <b>Facebook</b></div>
                            </div>
                        </a>
                        <a href="/wp-login.php?itsec-hb-token=qltn15&loginSocial=google" rel="nofollow" aria-label="Đăng nhập <b>Google</b>" data-plugin="nsl" data-action="connect" data-provider="google" data-popupwidth="600" data-popupheight="600">
                            <div class="nsl-button nsl-button-default nsl-button-google" data-skin="light" style="background-color:#fff;">
                                <div class="nsl-button-svg-container">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path fill="#4285F4" d="M20.64 12.2045c0-.6381-.0573-1.2518-.1636-1.8409H12v3.4814h4.8436c-.2086 1.125-.8427 2.0782-1.7959 2.7164v2.2581h2.9087c1.7018-1.5668 2.6836-3.874 2.6836-6.615z"></path>
                                        <path fill="#34A853" d="M12 21c2.43 0 4.4673-.806 5.9564-2.1805l-2.9087-2.2581c-.8059.54-1.8368.859-3.0477.859-2.344 0-4.3282-1.5831-5.036-3.7104H3.9574v2.3318C5.4382 18.9832 8.4818 21 12 21z"></path>
                                        <path fill="#FBBC05" d="M6.964 13.71c-.18-.54-.2822-1.1168-.2822-1.71s.1023-1.17.2823-1.71V7.9582H3.9573A8.9965 8.9965 0 0 0 3 12c0 1.4523.3477 2.8268.9573 4.0418L6.964 13.71z"></path>
                                        <path fill="#EA4335" d="M12 6.5795c1.3214 0 2.5077.4541 3.4405 1.346l2.5813-2.5814C16.4632 3.8918 14.426 3 12 3 8.4818 3 5.4382 5.0168 3.9573 7.9582L6.964 10.29C7.6718 8.1627 9.6559 6.5795 12 6.5795z"></path>
                                    </svg>
                                </div>
                                <div class="nsl-button-label-container">Đăng nhập <b>Google</b></div>
                            </div>
                        </a>
                        
                    </div>
                    </div>
    
    			</div>
    
    			<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>
    
    		</div>
    
    		<div class="col-2 large-6 col pb-0">
    
    			<div class="account-register-inner">
    
    				<h3 class="uppercase"><?php esc_html_e( 'Register', 'woocommerce' ); ?></h3>
    
    				<form method="post" class="woocommerce-form woocommerce-form-register register" <?php do_action( 'woocommerce_register_form_tag' ); ?> >
    
    					<?php do_action( 'woocommerce_register_form_start' ); ?>
    
    					<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>
    
    						<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
    							<label for="reg_username"><?php esc_html_e( 'Username', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
    							<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="reg_username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
    						</p>
    
    					<?php endif; ?>
    
    					<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
    						<label for="reg_email"><?php esc_html_e( 'Email address', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
    						<input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
    					</p>
    
    					<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>
    
    						<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
    							<label for="reg_password"><?php esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
    							<input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" autocomplete="new-password" />
    						</p>
    
    					<?php else : ?>
    
    						<p><?php esc_html_e( 'A password will be sent to your email address.', 'woocommerce' ); ?></p>
    
    					<?php endif; ?>
    
    					<?php do_action( 'woocommerce_register_form' ); ?>
    
    					<p class="woocommerce-form-row form-row">
    						<?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
    						<button type="submit" class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button>
    					</p>
    
    					<?php do_action( 'woocommerce_register_form_end' ); ?>
    
    				</form>
    
    			</div>
    
    		</div>
    
    	</div>
    <?php endif; ?>

</div>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
