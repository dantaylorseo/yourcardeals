<?php get_header(); ?>
<?php $term = get_term_by('slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>
        	<div class="content">
            	<h1 class="sectionhead"><?php echo $term->name; ?> Deals</h1>
                    <?php
                    	$current_query = $wp_query->query_vars;
						query_posts( array( $current_query['taxonomy'] => $current_query['term'], 'showposts' => 100, 'orderby' => 'title', 'order' => 'ASC' ) );
					?>
                    <?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    	<div class="featbox">
                   	  		<h2><?php the_title();?></h2>
                      		<a href="<?php the_permalink();?>"> <?php  the_post_thumbnail(array(212,212)); ?></a>
                        	<p class="right"><a href="<?php the_permalink();?>" class="button">Get Prices</a></p>
                    	</div>
                    <?php endwhile; // end of the loop. ?>
                    <?php else: ?>
                    	<p>No <?php echo $term->name; ?> deals found.</p>
                    <?php endif; ?>
			<div class="clear"></div></div>

                    
			
<?php
				$termDiscription = term_description( '', get_query_var( 'taxonomy' ) );
		if($termDiscription != '') : ?>
			<div class="content">
            	<span class="sectionhead"><?php echo $term->name; ?> Information</span>
				<?php echo $termDiscription; ?>

            </div>

        <?php endif; ?>
<?php
			$meta = get_option('additional');
			if (empty($meta)) $meta = array();
			if (!is_array($meta)) $meta = (array) $meta;
			$meta = isset($meta[$term->term_id]) ? $meta[$term->term_id] : array();
			$value = $meta['partner'];
			if($value == 'on') {
				echo '<div class="poweredby"><img src="http://www.yourcardeals.co.uk/wp-content/uploads/2013/06/carKeyslogo.jpg" alt="Powered by CarKeys" /></div>';
			}
?>

<?php get_footer() ;?>