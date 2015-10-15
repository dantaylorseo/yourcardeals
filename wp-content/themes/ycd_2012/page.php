<?php get_header(); ?>
        	<div class="content">
                
                <?php while ( have_posts() ) : the_post(); ?>
			<h1 class="sectionhead"><?php the_title(); ?></h1>
            <div class="post">
            <?php the_content(); ?>
            </div>
			<?php endwhile; // end of the loop. ?>
               
                    <div class="clear"></div>
            </div>
            
<?php get_footer() ;?>



