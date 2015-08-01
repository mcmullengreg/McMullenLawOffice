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
			<div class="copyright">
				<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('sitename'); ?></p>
			</div>
			<div class="privacy">
				<p>This site is an advertisement. &bull; <a href="#">Privacy Policy</a> &bull; <a href="#">Disclaimer</a></p>
			</div>
		</section>
		<!-- this will be imported in wp_footer() --->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

		<!--- Google GTM/Analytics will be added via theme option --->
		
		<?php wp_footer(); ?>
    </body>
</html>