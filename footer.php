<footer id="footer">

					<?php if ( is_active_sidebar( 'footer-widgets') ) : ?>
						
						<div class="row">
							<div class="col-md-12">
								<div class="footer-widget-area" <?php echo $attributes; ?>>
									<?php dynamic_sidebar( 'footer-widgets' ); ?>
								</div>
							</div>
						</div>
					<?php endif; ?>

<nav class="site-nav">
				
				<?php
				
				$args = array(
					'theme_location' => 'footer'
				);
				
				?>
				
				<?php wp_nav_menu(  $args ); ?>
			</nav>


<?php wp_footer();?>
</body>
</html>