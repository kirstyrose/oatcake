<? get_header(); ?>

	<div class="wrap">
		<div class="container">
			<?php if (have_posts()): ?>
				<?php while (have_posts()): the_post(); ?>
					<article class="post">
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</article>
				<?php endwhile; ?>
			<?php else: ?>
				<h1>Not found</h1>
				<p>Sorry, but the page you were trying to view does not exist. Please try visiting our <a href="/">homepage</a>.</p>
			<?php endif; ?>
			<div class="sidebar">
				<? include "sidebar.php"; ?>
			</div>
		</div>
	</div>

<? get_footer(); ?>