<?php get_header(); ?>

<main>
<!-- section -->
<section>
<div data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine" data-aos-duration="800">
<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<!-- article -->
<article id="post-<?php the_ID(); ?>" class="single-content">

	<!-- post thumbnail -->
	<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php the_post_thumbnail(); // Fullsize image for the single post ?>
		</a>
	<?php endif; ?>
	<!-- /post thumbnail -->
	<!-- post title -->
	<h1>
		<?php the_title(); ?>
		<!-- <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> -->
	</h1>
	<!-- /post title -->
	<!-- post details -->
	<span class="date"><?php the_date(); ?> </span>
	<!-- /post details -->
	<?php the_content(); ?>
	<p><?php _e( 'カテゴリー: ', 'html5blank' ); the_category(', '); ?></p>
</article>
<!-- /article -->
<?php endwhile; ?>
<?php else: ?>
<!-- article -->
<article>
	<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
</article>
<!-- /article -->
<?php endif; ?>
</div>
</section>
<!-- /section -->
</main>
<?php get_footer(); ?>
