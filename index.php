<?php get_header(); ?>
<?php get_sidebar(); ?>


<div id="posts">
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part( 'template-parts/content', 'page' ); ?>
<article>
	<h2> <?php the_title(); ?> </h2>
	<div class="info">
		<span><?php the_author(); ?></span>
		<span><?php the_time('d-m-Y'); ?></span>
	</div>
	<p> <?php the_content(); ?> </p>
	<a class="more" href="<?php the_permalink(); ?>"> Czytaj więcej </a>
	<p class="comments"><?php comments_popup_link ('Brak komentarzy', 'Jeden komentarz', 'Komantarzy: %'); ?></p>
</article>
 <?php endwhile; ?>
	
	<?php else : ?>
	
	<h2><?php the_title(); ?> NIc nie znaleziono</h2>
	<?php the_content(); ?>
	<?php the_excerpt(); ?>
	<?php endif; ?>
	
</div>


<?php get_footer(); ?>