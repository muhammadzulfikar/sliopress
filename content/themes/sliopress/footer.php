			</div><!-- /row -->
		</div><!-- /page content -->

		<footer id="footer">
			<?php
				$total = 4;
				if ( ot_get_option( 'footer-widgets' ) != '' ) {
					
					$total = ot_get_option( 'footer-widgets' );
					if( $total == 1) $class = '';
					if( $total == 2) $class = 'grid_6';
					if( $total == 3) $class = 'grid_4';
					if( $total == 4) $class = 'grid_3';
				}
	
				if ( ( is_active_sidebar( 'footer-1' ) ||
					   is_active_sidebar( 'footer-2' ) ||
					   is_active_sidebar( 'footer-3' ) ||
					   is_active_sidebar( 'footer-4' ) ) && $total > 0 ) 
			{ ?>

			<div class="row clearfix">
				<?php $i = 0; while ( $i < $total ) { $i++; ?>
					<?php if ( is_active_sidebar( 'footer-' . $i ) ) { ?>
						<div class="<?php if ( $i == $total ) { echo 'omega '; } ?><?php if ( $i == '1' ) { echo 'alpha '; } ?><?php echo $class; ?> footer_w">
							<?php dynamic_sidebar( 'footer-' . $i ); ?>
						</div>
					<?php } ?>
				<?php } ?>
			</div><!-- /row -->
			<?php } ?>

			<?php if ( ot_get_option( 'subfooter' ) != 'off' ) { ?>
			<div class="row clearfix">
				<div class="footer_last">
					<?php if ( ot_get_option( 'copyright' ) ): ?>
						<span class="copyright"><?php echo ot_get_option( 'copyright' ); ?></span>
					<?php endif; ?>

					<nav class="nav-footer" id="nav-footer">
						<?php wp_nav_menu( array(
							'theme_location' => 'footer',
							'container' =>false,
							'fallback_cb' => '',
							'items_wrap' => '<ul class="sf-menu">%3$s</ul>',
							'echo' => true,
							'before' => '',
							'after' => '',
							'link_before' => '',
							'link_after' => '',
							'depth' => 0,)
						); ?>
					</nav><!--/nav-footer-->
				</div><!-- /last footer -->
			</div><!-- /row -->
			<?php } ?>

		</footer><!-- /footer -->
	</div><!-- /layout -->
	<?php if ( ot_get_option( 'totop' ) != 'off' ) { ?>
		<div id="toTop"><i class="icon-arrow-thin-up"></i></div>
	<?php } ?>

<?php wp_footer();?>
</body>
</html>