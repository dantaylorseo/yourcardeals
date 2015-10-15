<?php
/*
Template Name: Manufacturers
*/
?>
<?php get_header(); ?>
        	<div class="content">
            	<span class="sectionhead">Select a Manufacturer</span>
                <?php 
					$terms = apply_filters( 'taxonomy-images-get-terms', '', array('taxonomy' => 'make','term_args' => array('hide_empty' => 0)));
					if ( ! empty( $terms ) ) {
						foreach( (array) $terms as $term ) {
							?>
                            <div class="manulist">
                                <div class="manuimg">
                                    <a href="/m/<?php echo $term->slug; ?>/"><?php echo wp_get_attachment_image( $term->image_id, 'detail' ); ?></a>
                                </div>
                                <div class="manuinfo">
                                    <h2><?php echo $term->name; ?></h2>
                                    <?php
									$meta = get_option('additional');
											if (empty($meta)) $meta = array();
											if (!is_array($meta)) $meta = (array) $meta;
											$meta = isset($meta[$term->term_id]) ? $meta[$term->term_id] : array();
											if($value = $meta['popular']) {
									?>
                                    <p><i>Popular Models</i></p>
                                    <ul>
                                    	<?php
											
											echo $value; // if you want to show
										?>
                                    </ul>
                                    <?php } ?>
                                </div>
                                <div class="manubutt">
                                    <p class="right"><a href="/m/<?php echo $term->slug; ?>/" class="button">Get Prices</a></p>
                                </div>
                                <div class="clear"></div>
                             </div>
                            <?php
						}
					}
				?>
                <div class="clear"></div>
                </div>
             
               
                    
            
<?php get_footer() ;?>