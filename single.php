<?php get_header(); ?>

<section class="content">
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<article> 
		<div class="info">
			<span><?php the_category(); ?></span>
			<span><?php the_author(); ?></span>|<span><?php the_time('d-m-Y'); ?></span>
		</div>
		<h2> <?php the_title(); ?> </h2>
		<p> <?php the_content(); ?> </p>
		<?php comments_template(); ?>
		<?php comment_form(); ?>
	</article>
<?php endwhile; ?>

<div> 
	<div class="nav"> 
		<div class="next">
			<?php previous_posts_link('« Nowsze') ?>
		</div>
		<div class="prev">
			<?php next_posts_link('Starsze »') ?>
		</div>
	</div>
</div>

<?php else : ?>

	<h2> Nic nie znaleziono </h2>

<?php endif; ?>
	

</section>
<?php get_sidebar(); ?>
		
		<?php get_footer(); ?>