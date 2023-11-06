			<div class="container">
				<div class="row">
					<div class="col-md-6 offset-md-3">
						<footer id="site-footer">
							<div class="container">
							<?php dynamic_sidebar( 'footer-widget-area' ); ?>

							<?php $footer_search_display = get_theme_mod( 'footer_search_display', true ); ?>
							<?php if ( $footer_search_display ) : ?>
								<?php get_search_form(); ?>
							<?php endif; ?>
							
							<div class="social-links">
								<?php
								$url_twitter   = get_theme_mod( 'url_twitter', '' );
								$url_facebook = get_theme_mod( 'url_facebook', '' );
								$url_google   = get_theme_mod( 'url_google', '' );
								$url_linkedin = get_theme_mod( 'url_linkedin', '' );
								?>

								<?php if ( ! empty( $url_twitter ) ) : ?>
									<a href="<?php echo esc_url( $url_twitter ); ?>" target="_blank" rel="nofollow">
										<i class="fab fa-twitter"></i>
									</a>
								<?php endif; ?>

								<?php if ( ! empty( $url_facebook ) ) : ?>
									<a href="<?php echo esc_url( $url_facebook ); ?>" target="_blank" rel="nofollow">
										<i class="fab fa-facebook"></i>
									</a>
								<?php endif; ?>

								<?php if ( ! empty( $url_google ) ) : ?>
									<a href="<?php echo esc_url( $url_google ); ?>" target="_blank" rel="nofollow">
										<i class="fab fa-google"></i>
									</a>
								<?php endif; ?>

								<?php if ( ! empty( $url_linkedin ) ) : ?>
									<a href="<?php echo esc_url( $url_linkedin ); ?>" target="_blank" rel="nofollow">
										<i class="fab fa-linkedin"></i>
									</a>
								<?php endif; ?>
							</div>


							<?php if ( has_nav_menu( 'footer-menu' ) ) : ?>
								<nav class="footer-menu">
									<?php
									wp_nav_menu([
										'theme_location' => 'footer-menu',
										'container' => 'nav',
										'container_class' => 'footer-menu'
									]);
									?>
								</nav>
							<?php endif; ?>
							</div>
						</footer>
					</div>
				</div>
			</div>
		<?php wp_footer(); ?>
	</body>
</html>
