<?php get_header(); ?>
        	<div class="content">
            	<span class="sectionhead">&nbsp;</span>
                <?php while ( have_posts() ) : the_post(); ?>
                			<h1><?php the_title(); ?></h1>

           <div class="post">
            <div class="entrymeta"><?php the_date("l jS \of F Y"); ?></div>
            <?php the_content('Continue Reading...'); ?>
            </div>
			<?php endwhile; // end of the loop. ?>
              
                    <div class="clear"></div>
            </div>
            
			
			<?php comments_template(); ?>
<?php get_footer() ;?>