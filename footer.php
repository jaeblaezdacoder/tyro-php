
				<div class="clear"></div>
			</div>

			<?php
			if ($showSide === 1) {
				include ('side.php');
			}
			?>

			<div id="top">
				<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
			</div>

			<div class="clear"></div>
		</div>

		<div id="social-wrapper">
			<div id="social">
				<?php echo '' . socialLinks($socialIcons) . ''; ?>
			</div>
		</div>

		<div id="footer-wrapper">
			<div id="footer">
				Copyright &copy <a href="<?php echo $siteURL; ?>" title="<?php echo $siteName; ?>"><?php echo $siteName; ?></a>
			</div>
		</div>

	</div>

</body>
</html>