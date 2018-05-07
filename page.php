<? /**
 * Template Name: nowy
 * 
 */
 
get_header(); ?>
 
    <div id="primary" class="site-content">
        <div id="content" role="main">            
            <?php while ( have_posts() ) : the_post(); ?>   
			<?php get_template_part( 'template-parts/content', 'page' ); ?>
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header>             
                <div class="entry-content">
                    <div class="left-block">                  
                        <?php the_content(); ?>
                    </div>                    
                    <div class="right-block">
                        
                    </div>                
                  
                </div>
            <?php endwhile; // end of the loop. ?>
 
        </div><!-- #content -->
    </div><!-- #primary -->
 
<?php get_footer(); ?>