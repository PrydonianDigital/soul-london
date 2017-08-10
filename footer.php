<footer role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
	<div class="wrapper">
		<div class="footer">
			<ul class="sidebar menu vertical text-left">
				<?php if ( ! dynamic_sidebar('footer1') ) : ?>
					<li>{static sidebar item 1}</li>
				<?php endif; ?>
			</ul>
		</div>
		<div class="footer">
			<ul class="sidebar menu vertical text-left">
				<?php if ( ! dynamic_sidebar('footer2') ) : ?>
					<li>{static sidebar item 1}</li>
				<?php endif; ?>
			</ul>
		</div>
		<div class="footer">
			<ul class="sidebar menu vertical text-left">
				<?php if ( ! dynamic_sidebar('footer3') ) : ?>
					<li>{static sidebar item 1}</li>
				<?php endif; ?>
			</ul>
		</div>
	</div>
	<div class="wrapper">
		<div class="copyright">
			&copy; <?php echo date('Y'); ?> <?php bloginfo('title'); ?>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>