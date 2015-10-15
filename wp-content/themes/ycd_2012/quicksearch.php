<select name="model" id="model">
                      <?php 
						$args = array(
						'tax_query' => array(
							array(
								'taxonomy' => 'make',
								'field' => 'slug',
								'terms' => $_GET['manu']
							)
						)
					);
					$query = new WP_Query( $args );
						if ( $query->have_posts() ) {
							while ( $query->have_posts() ) {
							$query->the_post();
					?>
                      <option><?php the_title(); ?></option>
                      <?php } 
						  
					  } else {
						  echo '<option>No Models Found</option>';
					  }
					
					  
					  	
					   ?>
                    </select>