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
<?php wp_footer(); ?>









<!-- Modal -->
<div class="modal right fade" id="cartSidebar" tabindex="-1" aria-labelledby="cartSidebar" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Shopping cart</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				...
			</div>
			<div class="modal-footer flex-column ">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>

</body>

</html>