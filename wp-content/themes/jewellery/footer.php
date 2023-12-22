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
			<div class="footer-main col-3">
				<div class="footer-logo"><a href="#"><img
							src="<?php bloginfo('template_url'); ?>/assets/images/logo-dark.svg"></a></div>
				<div class="footer-info">
					<p>Condimentum adipiscing vel neque dis nam parturient orci at scelerisque neque dis nam parturient.
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
			<div class="footer-posts col-4">
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
			<div class="footer-stores col-2">
				<h5>OUR STORES</h5>
				<ul>
					<li><a href="#">New York</a></li>
					<li><a href="#">London SF</a></li>
					<li><a href="#">Cockfosters BP</a></li>
					<li><a href="#">Los Angeles</a></li>
					<li><a href="#">Chicago</a></li>
				</ul>
			</div>
			<div class="footer-links col-2">
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




<footer id="colophon" class="site-footer">
	<div class="site-info">
		<a href="<?php echo esc_url(__('https://wordpress.org/', 'jewellery')); ?>">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf(esc_html__('Proudly powered by %s', 'jewellery'), 'WordPress');
			?>
		</a>
		<span class="sep"> | </span>
		<?php
		/* translators: 1: Theme name, 2: Theme author. */
		printf(esc_html__('Theme: %1$s by %2$s.', 'jewellery'), 'jewellery', '<a href="http://underscores.me/">Underscores.me</a>');
		?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>