<?php 
/* Short and sweet */
define('WP_USE_THEMES', false);
require('../../../../wp-blog-header.php');
?>

                      <?php 
						$args = array(
						'tax_query' => array(
							array(
								'taxonomy' => 'make',
								'field' => 'slug',
								'terms' => $_POST['manu']
							)
						)
					);
					$makename = str_replace('deals', '', $_POST['manu']);
					$makename = str_replace('-', ' ', $makename);
					$makename = ucwords($makename);
					$query = new WP_Query( $args );
						if ( $query->have_posts() ) {
							echo '<select name="model" id="model">';
							echo '<option>Select '.$makename.' Model</option>';
							while ( $query->have_posts() ) {
							$query->the_post();
					?>
                    	<?php $slug = str_replace("http://www.yourcardeals.co.uk","",get_permalink()); ?>
                      <option value="<?php echo $slug; ?>"><?php the_title(); ?></option>
                      <?php } 
						  
					  } elseif($_POST['manu'] == 'none') {
						    echo '<select name="model" id="model" disabled="disabled">
                      			<option>Select Manufaturer First</option>';
					  } else {
						  echo '<select name="model" id="model" disabled="disabled">';
						  echo '<option value="none">No '.$makename.' Models Found</option>';
					  }
					
					  
					  	
					   ?>
                    </select>