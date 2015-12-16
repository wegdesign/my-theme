<?php get_header(); ?>

<div id="content">
	<div id="inner-content" class="wrap cf">
		<div class="area-content">
			<?php
				get_template_part('loop', 'index');
			?>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>
