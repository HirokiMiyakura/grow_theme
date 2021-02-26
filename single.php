<?php get_header(); ?>
<main>
	<section>
		<div data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="800">
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" class="single-content">
					<?php if ( has_post_thumbnail()) : ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail(); ?>
						</a>
					<?php endif; ?>
					<h1>
						<?php the_title(); ?>
					</h1>
					<span class="date"><?php the_date(); ?> </span>
					<?php the_content(); ?>
					<p><?php _e( 'カテゴリー: ', 'html5blank' ); the_category(', '); ?></p>
				</article>
			<?php endwhile; ?>
			<?php else: ?>
			<article>
				<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
			</article>
			<?php endif; ?>
		</div>
	</section>
</main>
<?php get_footer(); ?>
