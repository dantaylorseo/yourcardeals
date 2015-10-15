<?php get_header(); ?>
        	<div class="content">
            	<h1 class="sectionhead">Latest News</h1>
                <?php while ( have_posts() ) : the_post(); ?>
           <div class="post">
			<h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="entrymeta"><?php the_date("l jS \of F Y"); ?></div>
            <?php the_excerpt(); ?>
            </div>
			<?php endwhile; // end of the loop. ?>
              
                    <div class="clear"></div>
            </div>
            
<?php get_footer() ;?>