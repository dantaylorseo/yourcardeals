<?php
/*
Template Name: Car Style
*/
?>
<?php get_header(); ?>
        	<div class="content">
            	<h1 class="sectionhead"><?php the_title();?></h1>
				<?php 
					$cartype = get_post_meta($post->ID, 'car_type_dan_page', true);
					//echo 'Type: '.$cartype;
					$query = new WP_Query( array( 
											'meta_key' => 'car_type_dan', 
											'meta_value' => $cartype,
											'post_type' => 'deals',
											'showposts' => 9 ));
					while ( $query->have_posts() ) : $query->the_post();
				?>
                	<div class="featbox">
                   	  <h2><?php the_title();?></h2>
                       <a href="<?php the_permalink();?>"> <?php 
						
						  the_post_thumbnail(array(212,212));
						
						?></a>
                        <p class="right"><a href="<?php the_permalink();?>" class="button">Get Prices</a></p>
                    </div>
                    <?php endwhile; ?>
					
				
                <div class="clear"></div>
                </div>
             
               
                    
            
<?php get_footer() ;?>