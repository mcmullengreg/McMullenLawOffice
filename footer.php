			</div><!-- container -->
		</section><!-- main-content -->
		
		<footer>
			<div class="container">
				<div class="item">
					<h3>Testing</h3>
				</div>
				<div class="item">
					<h3>Testing</h3>
				</div>
				<div class="item">
					<h3>Location</h3>
					<p><strong>McMullen Law Office, LLC</strong><br>
						2661 Commons Boulevard<br>
						Suite 315<br>
						Beavercreek, Ohio 45431</p>
				</div>
			</div>
		</footer>
		
		<section class="colophon">
			<div class="container">
				<div class="copyright">
					<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('sitename'); ?></p>
				</div>
				<div class="privacy">
					<p>
					<?php 
						if (get_theme_mod(advertisement_disclaimer)){
							echo get_theme_mod(advertisement_disclaimer); 
						} if (get_theme_mod('site_disclaimer_page')) : ?>
							&bull;
							<a href="<?php echo get_permalink(get_theme_mod('site_disclaimer_page')); ?>">
							<?php if (get_theme_mod('site_disclaimer_text')) {
								echo get_theme_mod('site_disclaimer_text');
							} else {
								echo get_the_title(get_theme_mod('site_disclaimer_page'));
							} ?>
							</a>
					<?php 
						endif; 
					?>
					</p>
				</div>
			</div>
		</section>
		<!-- this will be imported in wp_footer() --->

		<!--- Google GTM/Analytics will be added via theme option --->
		<?php if (get_theme_mod(analytics_code) && substr(get_theme_mod(analytics_code), 0, 2) === 'UA-') : ?>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		  ga('create', '<?php echo get_theme_mod(analytics_code) ?>', 'auto');
		  ga('send', 'pageview');
		
		</script>
		<?php endif; ?>
		<?php wp_footer(); ?>
    </body>
</html>