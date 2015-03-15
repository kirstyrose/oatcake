	<h2>Recent Posts</h2>
	<?php $recent = new WP_Query("showposts=3"); while($recent->have_posts()) : $recent->the_post();?>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	<?php endwhile; ?>

	<h2>Archives</h2>
	<?php wp_get_archives('type=monthly'); ?>