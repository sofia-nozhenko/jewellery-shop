<?php

/**
 * Template Name: Front Page
 */
get_header();
?>

<?php ?>
<section class="main section-bg">
    <div class="container">
        <div class="row">
            <div class="main-info col-12 col-md-5 offset-1">
                <span class='italic-text'>Donec sollicitudin</span>
                <h1>Jewellery store</h1>
                <p>An sincerity so extremity he additions. Her yet there truth merit. Mrs all projecting favourable now
                    unpleasing. Son law garden chatty temper. Oh children provided to mr elegance marriage strongly</p>
                <div class="d-flex">
                    <?php
                    $btn_link = get_field('btn_shop_link', 50);
                    ?>
                    <a href="<?= $btn_link['url'] ?>" class="btn-white btn-main d-flex justify-content-center">Shop
                        now</a>
                    <?php
                    $btn_view_link = get_field('view_more', 50);
                    ?>
                    <a href="<?= $btn_view_link['url'] ?>"
                        class="btn-outline-white btn-main d-flex justify-content-center">View more</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="store section-mg section-bg">
    <div class="container">
        <div class="row">
            <div class="store-img col-7">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/image-1.png" alt="Store">
            </div>
            <div class="col-5 store-info ">
                <div class="text-center">
                    <span class='italic-text'>Donec sollicitudin</span>
                    <h2 class='section-title_big'>JEWELLERY</h2>
                    <h3 class='section-title_small'>STORE</h3>
                    <p>An sincerity so extremity he additions. Her yet there truth merit. Mrs all projecting favourable
                        now
                        unpleasing. Son law garden chatty temper. Oh children provided to mr elegance marriage strongly.
                    </p>
                </div>
                <div class="d-flex justify-content-center store-btn-wrapp">
                    <a href="<?= $btn_link['url'] ?>" class="btn-main btn-grey">Shop now</a>
                    <a href="#" class="btn-main btn-outline-grey">View more</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="products section-mg section-bg ">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center products-text">
                <span class="italic-text">
                    Adipisicing elit
                </span>
                <h4 class='section-title'>Featured Products</h4>
                <p>There are many variations of passages of lorem ipsum available.</p>
            </div>
            <!-- First part -->
            <div class="product-image product-mb col-12 col-sm-6 col-lg-3 text-center">
                <div class="image-container">
                    <div class="image-wrapper">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/image-2.png" alt="Product"
                            class="image">
                    </div>
                    <div class="image-text">
                        <h4>Tristique justo</h4>
                        <p>Started now shortly had for assured hearing expense led juvenile.</p>
                    </div>
                    <button class="image-text-btn">Shop now</button>
                </div>
            </div>
            <div class="product-slider product-mb col-12 col-sm-6 col-lg-9 d-flex">
                <?php
                $first_slider_slides_limit = get_field('slides_amount_first_slider', 50);
                $first_slider_product_category = get_field('product_category_first_slider', 50);
                $first_slider_category = get_term_by('slug', $first_slider_product_category['value'], 'product_cat');

                $args = array(
                    'post_status' => 'publish',
                    'limit' => $first_slider_slides_limit,
                    'orderby' => 'date',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'product_cat',
                            'field' => 'id',
                            'terms' => $first_slider_category->term_id,
                        ),
                    ),
                );

                $query = new WC_Product_Query($args);
                $products = $query->get_products();

                foreach ($products as $product) {
                    // Получаем основные данные о товаре
                    $product_name = $product->get_name();
                    $product_description = $product->get_short_description();
                    $product_price = $product->get_price();
                    $product_image_id = $product->get_image_id(); ?>
                    <div class="product-wrapp">
                        <div class="product-item">
                            <div class="product-img">
                                <?php echo $product->get_image('full') ?>
                                <div class="nav-icons product-btn d-flex justify-content-center">
                                    <div class="nav-cart product-card d-flex align-items-center">
                                        <a href="?add-to-cart=<?= $product->get_id() ?>" id='cart'
                                            class="add_to_cart_button ajax_add_to_cart">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 16 16" fill="none">
                                                <path
                                                    d="M15.0869 8.61436L15.9905 3.65906C16.0062 3.57396 16.0024 3.48638 15.9793 3.40296C15.9562 3.31955 15.9144 3.24248 15.8571 3.17761C15.8024 3.11063 15.7335 3.05663 15.6554 3.01949C15.5772 2.98234 15.4919 2.96298 15.4054 2.96281H3.4588L3.09588 0.970319C3.04575 0.698292 2.90206 0.452371 2.68969 0.275159C2.47732 0.0979457 2.20966 0.000605077 1.93308 0H0.592514C0.435369 0 0.284661 0.0624303 0.173543 0.173557C0.0624253 0.284684 0 0.435404 0 0.592561C0 0.749718 0.0624253 0.900438 0.173543 1.01157C0.284661 1.12269 0.435369 1.18512 0.592514 1.18512H1.93308L3.96243 12.3697C3.6731 12.6246 3.46054 12.9551 3.34863 13.3241C3.23672 13.6931 3.22989 14.086 3.32891 14.4587C3.42794 14.8313 3.62889 15.169 3.90919 15.4338C4.1895 15.6986 4.53807 15.8799 4.91576 15.9576C5.29344 16.0352 5.68528 16.0059 6.04727 15.8732C6.40926 15.7404 6.72707 15.5093 6.96501 15.2059C7.20294 14.9024 7.35158 14.5387 7.39423 14.1554C7.43688 13.7722 7.37185 13.3847 7.20645 13.0363H11.1615C10.9689 13.4424 10.9134 13.9 11.0033 14.3403C11.0933 14.7805 11.3237 15.1797 11.6601 15.4777C11.9965 15.7757 12.4205 15.9563 12.8684 15.9924C13.3163 16.0286 13.7638 15.9182 14.1436 15.678C14.5234 15.4378 14.8149 15.0808 14.9742 14.6606C15.1335 14.2404 15.1521 13.7798 15.0271 13.3482C14.9021 12.9166 14.6403 12.5372 14.281 12.2672C13.9218 11.9972 13.4846 11.8512 13.0353 11.8512H5.0734L4.74751 10.0735H13.339C13.755 10.0733 14.1578 9.92719 14.4772 9.66056C14.7966 9.39393 15.0123 9.0237 15.0869 8.61436ZM6.22139 13.9252C6.22139 14.101 6.16927 14.2728 6.07161 14.419C5.97395 14.5652 5.83514 14.6791 5.67274 14.7464C5.51034 14.8136 5.33164 14.8312 5.15923 14.7969C4.98683 14.7627 4.82846 14.678 4.70417 14.5537C4.57987 14.4294 4.49522 14.271 4.46093 14.0986C4.42664 13.9262 4.44424 13.7475 4.5115 13.585C4.57877 13.4226 4.69269 13.2838 4.83885 13.1861C4.985 13.0885 5.15684 13.0363 5.33262 13.0363C5.56834 13.0363 5.7944 13.13 5.96108 13.2967C6.12775 13.4634 6.22139 13.6894 6.22139 13.9252ZM13.9241 13.9252C13.9241 14.101 13.8719 14.2728 13.7743 14.419C13.6766 14.5652 13.5378 14.6791 13.3754 14.7464C13.213 14.8136 13.0343 14.8312 12.8619 14.7969C12.6895 14.7627 12.5311 14.678 12.4068 14.5537C12.2825 14.4294 12.1979 14.271 12.1636 14.0986C12.1293 13.9262 12.1469 13.7475 12.2142 13.585C12.2814 13.4226 12.3954 13.2838 12.5415 13.1861C12.6877 13.0885 12.8595 13.0363 13.0353 13.0363C13.271 13.0363 13.4971 13.13 13.6638 13.2967C13.8304 13.4634 13.9241 13.6894 13.9241 13.9252ZM3.67358 4.14793H14.6943L13.9241 8.39955C13.8997 8.53687 13.8276 8.66118 13.7206 8.7506C13.6136 8.84002 13.4784 8.88882 13.339 8.88842H4.53273L3.67358 4.14793Z"
                                                    fill="white" />
                                            </svg></a>
                                    </div>
                                    <div class="nav-search product-search"><a id="search"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M11.0887 4C15.0017 4 18.1774 7.17574 18.1774 11.0887C18.1774 15.0017 15.0017 18.1774 11.0887 18.1774C7.17574 18.1774 4 15.0017 4 11.0887C4 7.17574 7.17574 4 11.0887 4ZM11.0887 16.6021C14.1345 16.6021 16.6021 14.1345 16.6021 11.0887C16.6021 8.04214 14.1345 5.57527 11.0887 5.57527C8.04214 5.57527 5.57527 8.04214 5.57527 11.0887C5.57527 14.1345 8.04214 16.6021 11.0887 16.6021ZM17.7718 16.6581L20 18.8855L18.8855 20L16.6581 17.7718L17.7718 16.6581Z"
                                                    fill="white" />
                                            </svg></a></div>

                                </div>
                            </div>
                            <h5 class="product-title text-center">
                                <?= $product->get_name() ?>
                            </h5>
                            <p class="product-desc text-center">
                                <?= $product->get_description(); ?>
                            </p>
                            <p class="product-price text-center">
                                <?= wc_price($product_price) ?>
                            </p>
                        </div>
                    </div>
                    <?php
                }
                ?>


            </div>
            <!-- Second part -->
            <div class="product-image col-12 col-sm-6 col-lg-3 text-center">
                <div class="image-container">
                    <div class="image-wrapper">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/image-3.png" alt="Product"
                            class="image">
                    </div>
                    <div class="image-text image-text_white">
                        <h4>Tristique justo</h4>
                        <p>Started now shortly had for assured hearing expense led juvenile.</p>
                    </div>
                    <a href="#" class="image-text-btn image-text-btn_dark">Shop now</a>
                </div>
            </div>
            <div class="product-slider col-12 col-sm-6 col-lg-9 d-flex">
                <?php
                $second_slider_slides_limit = get_field('slides_amount_second_slider', 50);
                $second_slider_product_category = get_field('product_category_second_slider', 50);
                $second_slider_category = get_term_by(
                    'slug',
                    $second_slider_product_category['value'],
                    'product_cat'
                );

                $args = array(
                    'post_status' => 'publish',
                    'limit' => $second_slider_slides_limit,
                    'orderby' => 'date',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'product_cat',
                            'field' => 'id',
                            'terms' => $second_slider_category->term_id,
                        ),
                    ),
                );
                $query = new WC_Product_Query($args);
                $products = $query->get_products();

                foreach ($products as $product) {
                    $product_name = $product->get_name();
                    $product_description = $product->get_short_description();
                    $product_price = $product->get_price();
                    $product_image_id = $product->get_image_id(); ?>
                    <div class="product-wrapp">
                        <div class="product-item">
                            <div class="product-img">
                                <?php echo $product->get_image('full') ?>
                                <div class="nav-icons product-btn d-flex justify-content-center">
                                    <div class="nav-cart product-card d-flex align-items-center">
                                        <a href="?add-to-cart=<?= $product->get_id() ?>" id='cart'
                                            class="add_to_cart_button ajax_add_to_cart">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 16 16" fill="none">
                                                <path
                                                    d="M15.0869 8.61436L15.9905 3.65906C16.0062 3.57396 16.0024 3.48638 15.9793 3.40296C15.9562 3.31955 15.9144 3.24248 15.8571 3.17761C15.8024 3.11063 15.7335 3.05663 15.6554 3.01949C15.5772 2.98234 15.4919 2.96298 15.4054 2.96281H3.4588L3.09588 0.970319C3.04575 0.698292 2.90206 0.452371 2.68969 0.275159C2.47732 0.0979457 2.20966 0.000605077 1.93308 0H0.592514C0.435369 0 0.284661 0.0624303 0.173543 0.173557C0.0624253 0.284684 0 0.435404 0 0.592561C0 0.749718 0.0624253 0.900438 0.173543 1.01157C0.284661 1.12269 0.435369 1.18512 0.592514 1.18512H1.93308L3.96243 12.3697C3.6731 12.6246 3.46054 12.9551 3.34863 13.3241C3.23672 13.6931 3.22989 14.086 3.32891 14.4587C3.42794 14.8313 3.62889 15.169 3.90919 15.4338C4.1895 15.6986 4.53807 15.8799 4.91576 15.9576C5.29344 16.0352 5.68528 16.0059 6.04727 15.8732C6.40926 15.7404 6.72707 15.5093 6.96501 15.2059C7.20294 14.9024 7.35158 14.5387 7.39423 14.1554C7.43688 13.7722 7.37185 13.3847 7.20645 13.0363H11.1615C10.9689 13.4424 10.9134 13.9 11.0033 14.3403C11.0933 14.7805 11.3237 15.1797 11.6601 15.4777C11.9965 15.7757 12.4205 15.9563 12.8684 15.9924C13.3163 16.0286 13.7638 15.9182 14.1436 15.678C14.5234 15.4378 14.8149 15.0808 14.9742 14.6606C15.1335 14.2404 15.1521 13.7798 15.0271 13.3482C14.9021 12.9166 14.6403 12.5372 14.281 12.2672C13.9218 11.9972 13.4846 11.8512 13.0353 11.8512H5.0734L4.74751 10.0735H13.339C13.755 10.0733 14.1578 9.92719 14.4772 9.66056C14.7966 9.39393 15.0123 9.0237 15.0869 8.61436ZM6.22139 13.9252C6.22139 14.101 6.16927 14.2728 6.07161 14.419C5.97395 14.5652 5.83514 14.6791 5.67274 14.7464C5.51034 14.8136 5.33164 14.8312 5.15923 14.7969C4.98683 14.7627 4.82846 14.678 4.70417 14.5537C4.57987 14.4294 4.49522 14.271 4.46093 14.0986C4.42664 13.9262 4.44424 13.7475 4.5115 13.585C4.57877 13.4226 4.69269 13.2838 4.83885 13.1861C4.985 13.0885 5.15684 13.0363 5.33262 13.0363C5.56834 13.0363 5.7944 13.13 5.96108 13.2967C6.12775 13.4634 6.22139 13.6894 6.22139 13.9252ZM13.9241 13.9252C13.9241 14.101 13.8719 14.2728 13.7743 14.419C13.6766 14.5652 13.5378 14.6791 13.3754 14.7464C13.213 14.8136 13.0343 14.8312 12.8619 14.7969C12.6895 14.7627 12.5311 14.678 12.4068 14.5537C12.2825 14.4294 12.1979 14.271 12.1636 14.0986C12.1293 13.9262 12.1469 13.7475 12.2142 13.585C12.2814 13.4226 12.3954 13.2838 12.5415 13.1861C12.6877 13.0885 12.8595 13.0363 13.0353 13.0363C13.271 13.0363 13.4971 13.13 13.6638 13.2967C13.8304 13.4634 13.9241 13.6894 13.9241 13.9252ZM3.67358 4.14793H14.6943L13.9241 8.39955C13.8997 8.53687 13.8276 8.66118 13.7206 8.7506C13.6136 8.84002 13.4784 8.88882 13.339 8.88842H4.53273L3.67358 4.14793Z"
                                                    fill="white" />
                                            </svg></a>
                                    </div>
                                    <div class="nav-search product-search"><a id="search"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M11.0887 4C15.0017 4 18.1774 7.17574 18.1774 11.0887C18.1774 15.0017 15.0017 18.1774 11.0887 18.1774C7.17574 18.1774 4 15.0017 4 11.0887C4 7.17574 7.17574 4 11.0887 4ZM11.0887 16.6021C14.1345 16.6021 16.6021 14.1345 16.6021 11.0887C16.6021 8.04214 14.1345 5.57527 11.0887 5.57527C8.04214 5.57527 5.57527 8.04214 5.57527 11.0887C5.57527 14.1345 8.04214 16.6021 11.0887 16.6021ZM17.7718 16.6581L20 18.8855L18.8855 20L16.6581 17.7718L17.7718 16.6581Z"
                                                    fill="white" />
                                            </svg></a></div>

                                </div>
                            </div>
                            <h5 class="product-title text-center">
                                <?= $product->get_name() ?>
                            </h5>
                            <p class="product-desc text-center">
                                <?= $product->get_description(); ?>
                            </p>
                            <p class="product-price text-center">
                                <?= wc_price($product_price) ?>
                            </p>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="box section-mg section-bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/video.png" alt="Video">
            </div>
            <div class="offset-1 col-5 d-flex flex-column justify-content-center">
                <span class='italic-text'>Special offer</span>
                <h2 class='section-title_big'>JEWELLERY BOX</h2>
                <h3 class='section-title_small'>ALL IN ONE BOX</h3>
                <a href="#" class="btn-main btn-grey box-btn">Check Now</a>
            </div>
        </div>
    </div>
</section>
<section class="discount section-mg section-bg">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6  discount-text mb-5 mb-md-0">
                <h2 class='section-title_big'>DISCOUNT OF <span>20%</span></h2>
                <h3 class='section-title_small'>ON ALL GOLD RINGS</h3>
                <p class="discount-desc">She exposed painted fifteen are noisier mistake led waiting. Surprise not
                    wandered speedily husbands
                    although yet end. Are court tiled cease young built fat one man taken. We highest ye friends is
                    exposed
                    equally in. Ignorant had too.</p>
                <div>
                    <ul class="discount-list">
                        <li class="d-flex align-items-center">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/diamonds.svg" alt=" Diamond">
                            <p>His six are entreaties instrument acceptance unsatiable.</p>
                        </li>
                        <li class="d-flex align-items-center">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/diamonds.svg" alt=" Diamond">
                            <p>Iscovery commanded fat mrs remaining son she principle.</p>
                        </li>
                        <li class="d-flex align-items-center">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/diamonds.svg" alt=" Diamond">
                            <p>Settling you has separate supplied bed concluded resembled.</p>
                        </li>
                        <li class="d-flex align-items-center">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/diamonds.svg" alt=" Diamond">
                            <p>Cause dried no solid no an small so still widen ten weather.</p>
                        </li>
                    </ul>
                </div>
                <div class="d-flex discount-btns">
                    <a href="<?= $btn_link['url'] ?>" class="btn-main btn-grey discount-btn">Go to shop</a>
                    <a href="#" class="btn-main btn-outline-grey">View more</a>
                </div>
            </div>
            <div class="discount-img col-12 col-md-6">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/image-7.png" alt="Discount">
            </div>
        </div>
    </div>
</section>
<section class="special-offer section-mg section-bg">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 mb-5 mb-lg-0 ">
                <div class="special-offer-text">
                    <div>
                        <span class="italic-text">
                            Special offer
                        </span>
                        <h4 class='section-title'>Mauris
                            Rhoncus</h4>
                        <p>Curabitur non nullat amet.</p>
                        <button class="btn-main btn-grey">View more</button>
                    </div>
                </div>
            </div>

            <?php
            $first_column_items_limit = get_field('items_amount_first_column', 50);
            if ($first_column_items_limit > 0):
                $first_column_product_category = get_field('items_category_first_column', 50);
                $first_column_category = get_term_by(
                    'slug',
                    $first_column_product_category['value'],
                    'product_cat'
                );
                ?>
                <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0  offer-featured-products">
                    <p>
                        <?php echo $first_column_product_category['label'] ?>
                    </p>
                    <div>
                        <?php
                        $args = array(
                            'post_status' => 'publish',
                            'limit' => $first_column_items_limit,
                            'orderby' => 'date',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'product_cat',
                                    'field' => 'id',
                                    'terms' => $first_column_category->term_id,
                                ),
                            ),
                        );
                        $query = new WC_Product_Query($args);
                        $products = $query->get_products();

                        foreach ($products as $product) {
                            $product_name = $product->get_name();
                            $product_description = $product->get_short_description();
                            $product_price = $product->get_price();
                            $product_image = $product->get_image(); ?>
                            <div class="d-flex offer-item">
                                <div>
                                    <?= $product->get_image('full'); ?>
                                </div>
                                <div>
                                    <p>
                                        <?= $product->get_name(); ?>
                                    </p>
                                    <span>
                                        <?= $product->get_price(); ?>
                                    </span>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            <?php endif; ?>

            <?php
            $second_column_items_limit = get_field('items_amount_second_column', 50);
            if ($second_column_items_limit > 0):
                $second_column_items_limit = get_field('items_amount_second_column', 50);
                $second_column_product_category = get_field('items_category_second_column', 50);
                $second_column_category = get_term_by(
                    'slug',
                    $second_column_product_category['value'],
                    'product_cat'
                );

                ?>
                <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-0 offer-new-products">
                    <p>
                        <?php echo $second_column_product_category['label'] ?>
                    </p>
                    <div>
                        <?php

                        $args = array(
                            'post_status' => 'publish',
                            'limit' => $second_column_items_limit,
                            'orderby' => 'date',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'product_cat',
                                    'field' => 'id',
                                    'terms' => $second_column_category->term_id,
                                ),
                            ),
                        );
                        $query = new WC_Product_Query($args);
                        $products = $query->get_products();

                        foreach ($products as $product) {
                            $product_name = $product->get_name();
                            $product_description = $product->get_short_description();
                            $product_price = $product->get_price();
                            $product_image = $product->get_image(); ?>
                            <div class="d-flex offer-item">
                                <div>
                                    <?= $product->get_image('full'); ?>
                                </div>
                                <div>
                                    <p>
                                        <?= $product->get_name(); ?>
                                    </p>
                                    <span>
                                        <?= $product->get_price(); ?>
                                    </span>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>



<section class="blog section-mg section-bg section-mb">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center blog-text">
                <p class="italic-text">
                    Adipisicing elit
                </p>
                <h4 class='section-title'>JEWELRY DESIGN BLOG</h4>
                <p>There are many variations of passages of lorem ipsum available.</p>
            </div>

            <?php
            $blog_items_amount = get_field('blog_slides_amount', 50);


            $args = array(
                'post_status' => 'publish',
                'posts_per_page' => $blog_items_amount,
                'post_type' => 'post',
                'orderby' => 'date',
            );

            $query = new WP_Query($args);
            ?>

            <div class="posts-slider d-flex col-12">
                <?php while ($query->have_posts()) {
                    $post_date = explode(':', get_the_date('j : M'));
                    $query->the_post();
                    $post_excerpt = get_the_excerpt();
                    $image_description = wp_get_attachment_caption(get_post_thumbnail_id($post->ID));
                    $posted_by = get_field('posted_by', $post->ID);
                    $user_name = get_field('user_name', $post->ID);
                    $user_avatar = get_field('user_avatar', $post->ID);
                    $post_link_text = get_field('post_link_text', $post->ID);

                    ?>
                    <div class="post-wrapper">
                        <div class="post-item">
                            <div class="post-item-img">
                                <div class="post-item-date">
                                    <span>
                                        <?php echo $post_date[0] ?>
                                    </span>
                                    <span>
                                        <?php echo $post_date[1] ?>
                                    </span>
                                </div>
                                <img src="<?php bloginfo('template_url'); ?>/assets/images/post-img.png" alt="Post">
                                <div class="post-item-attr">
                                    <p>
                                        <?php echo $image_description ?>
                                    </p>
                                </div>
                            </div>
                            <div class="post-item-text">
                                <h5>
                                    <?php echo get_the_title() ?>
                                </h5>
                                <div class="post-item-avatar">

                                    <?php if (!empty($user_name)): ?>
                                        <span>
                                            <?php echo $posted_by ?>
                                        </span>
                                        <?php echo !empty($user_avatar)
                                            ? '<img src=' . $user_avatar['url'] . ' alt=' . $user_avatar['alt'] . '>'
                                            : ''
                                            ?>
                                        <span>
                                            <?php echo $user_name ?>
                                        </span>
                                    <?php endif; ?>

                                </div>
                                <?php if (!empty($post_excerpt)): ?>
                                    <p>
                                        <?php echo wp_trim_words($post_excerpt, 18, '...') ?>
                                    </p>
                                <?php endif; ?>

                                <a href="<?php echo get_the_permalink() ?>" class="post-btn">
                                    <?php echo $post_link_text ?>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>


<?php
get_footer();
?>