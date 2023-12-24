<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jewellery
 */

?>
</main>
<footer>
	<div class="container">
		<div class="row">
			<div class="footer-main col-6 col-md-3 mb-5 md-md-0">
				<div class="footer-logo"><a href="#"><img
							src="<?php bloginfo('template_url'); ?>/assets/images/logo-dark.svg"></a></div>
				<div class="footer-info">
					<p>
						<?php
						bloginfo('description')
							?>
					</p>
				</div>
				<div class="footer-contacts">
					<div class="d-flex align-items-center">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/gps.svg" alt="Location">
						<p>451 Wall Street, UK, London</p>
					</div>
					<div class="d-flex align-items-center">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/phone.svg" alt="Phone">
						<p>Phone: (064) 332-1233</p>
					</div>
					<div class="d-flex align-items-center">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/envelop.svg" alt="Envelop">
						<p>Fax: (099) 453-1357</p>
					</div>
				</div>
			</div>
			<div class="footer-posts col-6 col-md-4 mb-5 md-md-0">
				<h5>RECENT POSTS</h5>
				<div class="d-flex align-items-center post">
					<img src=" <?php bloginfo('template_url'); ?>/assets/images/footer-1.png" alt="Post">
					<div>
						<h6>
							A companion for extra sleeping
						</h6>
						<span>July 23, 2016</span>
					</div>
				</div>
				<div class="d-flex align-items-center post">
					<img src=" <?php bloginfo('template_url'); ?>/assets/images/footer-2.png" alt="Post">
					<div>
						<h6>
							Outdoor seating collection inspiration
						</h6>
						<span>July 23, 2016</span>
					</div>
				</div>
			</div>
			<div class="footer-stores col-6 col-md-2">
				<h5>OUR STORES</h5>
				<ul>
					<li><a href="#">New York</a></li>
					<li><a href="#">London SF</a></li>
					<li><a href="#">Cockfosters BP</a></li>
					<li><a href="#">Los Angeles</a></li>
					<li><a href="#">Chicago</a></li>
				</ul>
			</div>
			<div class="footer-links col-md-2 col-6">
				<h5>USEFUL LINKS</h5>
				<ul>
					<li><a href="#">Privacy Policy</a></li>
					<li><a href="#">Returns</a></li>
					<li><a href="#">Terms & Conditions</a></li>
					<li><a href="#">Contact Us</a></li>
					<li><a href="#">Latest News</a></li>
				</ul>
			</div>

		</div>
	</div>
</footer>
<?php wp_footer(); ?>









<!-- Modal -->
<div class="modal right fade" id="cartSidebar" tabindex="-1" aria-labelledby="cartSidebar" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">



			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Shopping cart</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>

			<?php
			if (WC()->cart->get_cart_contents_count() > 0) {
				// Если есть товары в корзине, отображаем блок с товарами
				?>
				<div class="modal-body">
					<div class="cart-item">
						<table class="cart-item-wrapp">
							<?php
							foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
								$_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
								$product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);
								/**
								 * Filter the product name.
								 *
								 * @since 2.1.0
								 * @param string $product_name Name of the product in the cart.
								 * @param array $cart_item The product in the cart.
								 * @param string $cart_item_key Key for the product in the cart.
								 */
								$product_name = apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key);

								if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {
									$product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
									?>
									<tr>
										<td class="cart-item-img">
											<img src="<?php echo wp_get_attachment_url($_product->get_image_id()) ?>">
										</td>
										<td>
											<p>
												<?= $_product->get_name() ?>
											</p>
											<div>
												<?php
												if ($_product->is_sold_individually()) {
													$min_quantity = 1;
													$max_quantity = 1;
												} else {
													$min_quantity = 0;
													$max_quantity = $_product->get_max_purchase_quantity();
												}

												$product_quantity = woocommerce_quantity_input(
													array(
														'input_name' => "cart[{$cart_item_key}][qty]",
														'input_value' => $cart_item['quantity'],
														'max_value' => $max_quantity,
														'min_value' => $min_quantity,
														'product_name' => $product_name,
													),
													$_product,
													false
												);

												echo apply_filters('woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item); // PHPCS: XSS ok.
												?>

											</div>
											<div class="cart-price">
												<span>1 x</span>
												<span>$
													<?= $_product->get_price() ?>
												</span>
											</div>
										</td>
										<td class="remove-item">
											<?php
											echo apply_filters(
												'woocommerce_cart_item_remove_link',
												sprintf(
													'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M4.26683 12.6667L3.3335 11.7333L7.06683 8.00001L3.3335 4.26668L4.26683 3.33334L8.00016 7.06668L11.7335 3.33334L12.6668 4.26668L8.9335 8.00001L12.6668 11.7333L11.7335 12.6667L8.00016 8.93334L4.26683 12.6667Z" fill="#777777" /></svg></span></a>',
													esc_url(wc_get_cart_remove_url($cart_item_key)),
													esc_attr(sprintf(__('Remove %s from cart', 'woocommerce'), wp_strip_all_tags($product_name))),
													esc_attr($product_id),
													esc_attr($_product->get_sku())
												),
												$cart_item_key
											);
											?>

										</td>
									</tr>
									<?php
								}
							}
							?>
						</table>
					</div>
				</div>
				<div class="modal-footer flex-column">
					<div class="d-flex justify-content-between subtotal">
						<p>Subtotal:</p>
						<p>
							<?php
							$total_cart_price = 0;

							foreach (WC()->cart->get_cart() as $cart_item) {
								$_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);

								if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item)) {
									$subtotal = $_product->get_price() * $cart_item['quantity'];
									$total_cart_price += $subtotal;
								}
							}
							echo wc_price($total_cart_price);
							?>
						</p>
					</div>
					<button type="button" class="sidebar-checkout-btn">VIEW CART</button>
					<button type="button" class="sidebar-cart-btn">CHECKOUT</button>
				</div>
				<?php
			} else {
				// Если корзина пуста, отображаем блок empty-cart
				?>
				<div class="empty-cart">
					<svg xmlns="http://www.w3.org/2000/svg" width="101" height="100" viewBox="0 0 101 100" fill="none">
						<path opacity="0.1"
							d="M65.3515 34.1463L54.9554 23.9024L44.5594 34.1463L37.6287 27.3171L48.0247 17.0732L37.6287 6.82927L44.5594 0L54.9554 10.2439L65.3515 0L72.2822 6.82927L61.8861 17.0732L72.2822 27.3171L65.3515 34.1463ZM30.203 80.4878C35.6485 80.4878 40.104 84.8781 40.104 90.2439C40.104 95.6098 35.6485 100 30.203 100C24.7574 100 20.302 95.6098 20.302 90.2439C20.302 84.8781 24.7574 80.4878 30.203 80.4878ZM79.7079 80.4878C85.1535 80.4878 89.6089 84.8781 89.6089 90.2439C89.6089 95.6098 85.1535 100 79.7079 100C74.2624 100 69.8069 95.6098 69.8069 90.2439C69.8069 84.8781 74.2624 80.4878 79.7079 80.4878ZM31.1931 64.8781C31.1931 65.3659 31.6881 65.8537 32.1832 65.8537H89.6089V75.6098H30.203C24.7574 75.6098 20.302 71.2195 20.302 65.8537C20.302 63.9024 20.797 62.439 21.2921 60.9756L27.7277 49.2683L10.401 12.1951H0.5V2.43902H16.8366L38.1238 46.3415H72.7772L92.0842 12.1951L100.5 17.0732L81.1931 51.2195C79.7079 54.1463 76.2426 56.0976 72.7772 56.0976H35.6485L31.1931 63.9024V64.8781Z"
							fill="#777777" />
					</svg>
				</div>
				<p class="text-center">No products in the cart.</p>
				<div class="return-btn-wrapp"><button class="return-btn" data-bs-dismiss="modal">RETURN TO SHOP</button>
				</div>
				<?php
			}
			?>




		</div>
	</div>
</div>

</body>

</html>