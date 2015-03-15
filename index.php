<?php get_header(); ?>

	<div class="wrap">

		<div class="container">
			<? if (have_posts()): ?>
				<? while (have_posts()): the_post(); ?>
					<article class="blog-post">
						<h1><?php the_title(); ?></h1>
						<?php the_excerpt(); ?>
						<a href="<? the_permalink(); ?>">Read More</a>
					</article>
				<? endwhile; ?>
			<? else: ?>
				<h1>Not found</h1>
				<p>Sorry, but the page you were trying to view does not exist. Please try visiting our <a href="/">homepage</a>.</p>
			<? endif; ?>
		</div>

	</div>

<?php get_footer(); ?>