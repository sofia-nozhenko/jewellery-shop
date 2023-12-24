<?php

/*
 * Template name: Cart page
 */

get_header() ?>

<div class="container">
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
                            echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                                'woocommerce_cart_item_remove_link',
                                sprintf(
                                    '<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s"><span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                    fill="none">
                                    <path
                                        d="M4.26683 12.6667L3.3335 11.7333L7.06683 8.00001L3.3335 4.26668L4.26683 3.33334L8.00016 7.06668L11.7335 3.33334L12.6668 4.26668L8.9335 8.00001L12.6668 11.7333L11.7335 12.6667L8.00016 8.93334L4.26683 12.6667Z"
                                        fill="#777777" />
                                </svg></span></a>',
                                    esc_url(wc_get_cart_remove_url($cart_item_key)),
                                    /* translators: %s is the product name */
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




<?php

get_footer()

    ?>