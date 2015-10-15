<?php get_header(); ?>
        	<div class="content">
            	<h1 class="sectionhead">Search Results</h1>
                	
                    
                    <?php if(have_posts()) { ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                    <div class="featbox">
                   	  <h2><?php the_title();?></h2>
                      <?php 
						
						  the_post_thumbnail(array(212,212));
						
						?>
						<p><?php the_excerpt(); ?></p>
                        <p class="right"><a href="<?php the_permalink();?>" class="button">Get Prices</a></p>
                    </div>
                    <?php endwhile; // end of the loop. ?>
                    <?php } else { ?>
                    	<h2>No matches</h2>
                        <p>Your search did not return any results, please try again.</p>
                    <?php } ?>
                    <div class="clear"></div>
</div>


<?php get_footer() ;?>