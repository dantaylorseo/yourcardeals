<?php get_header(); ?>
        	<div class="content">
            	<span class="sectionhead">Select a Manufacturer</span>
                
                <?php 
					$terms = apply_filters( 'taxonomy-images-get-terms', '', array(
																				'taxonomy' => 'make',
																				'term_args' => array(
																					'hide_empty' => 0
																					)
																				)
											);
					if ( ! empty( $terms ) ) {
						print '<ul class="manuhome">';
						foreach( (array) $terms as $term ) {
							print '<li><a href="' . esc_url( get_term_link( $term, $term->taxonomy ) ) . '">' . wp_get_attachment_image( $term->image_id, array(60,60) ) . '</a></li>';
						}
						print '</ul>';
					}
				?>
               
                    <div class="clear"></div>
            </div>
            <div class="content">
            	<span class="sectionhead">Featured Deals</span>
                <?php 
					$query = new WP_Query( array( 
											'meta_key' => 'featured', 
											'meta_value' => 1,
											'post_type' => 'deals',
											'showposts' => 9 ));
					while ( $query->have_posts() ) : $query->the_post();
				?>
                	<div class="featbox">
                   	  <h2><?php the_title();?></h2>
                       <?php
					    $sold = get_post_meta( $post->ID, 'sold', true ) ;
					   	if( $sold == 1 ) {
							echo '<div class="sold"><img src="'.get_bloginfo('stylesheet_directory').'/images/sold_icon.png" /></div>';
						}
						?>
                       <a href="<?php the_permalink();?>"> <?php 
						
						  the_post_thumbnail('cust_lg');
						
						?></a>
                        <p class="price">&pound;<?php echo number_format( get_field('price'), 0 ); ?></p> <p class="right"><a href="<?php the_permalink();?>" class="button">View</a></p>
                    </div>
                    <?php endwhile; ?>
                    

                    <div class="clear"></div>
					

			</div>

			<div id="lower">
					<div id="carStyles"><span class="sectionhead">Best Deals by Body Style</span>
					<ul>
					<li><h4>Small Cars</h4><a href="/best-new-small-car-deals/"><img src="/images/small-car-deals.jpg" width="85" height="50" /></a></li>
					<li><h4>Hatchbacks</h4><a href="/best-new-hatchback-deals/"><img src="/images/hatchback-deals.jpg" width="85" height="50" /></a></li>
					<li><h4>Estate Cars</h4><a href="/best-new-estate-car-deals/"><img src="/images/estate-car-deals.jpg" width="85" height="50" /></a></li>
					<li><h4>Family Cars</h4><a href="/best-new-family-car-deals/"><img src="/images/hatchback-deals.jpg" width="85" height="50" /></a></li>
					<li><h4>4 x 4's</h4><a href="/best-new-4x4-car-deals/"><img src="/images/4x4-deals.jpg" width="85" height="50" /></a></li>
					<li><h4>Luxury Cars</h4><a href="/best-new-luxury-car-deals/"><img src="/images/luxury-car-deals.jpg" width="85" height="50" /></a></li>
					</ul>
					</div>
					
					<div id="emailSignup"><span class="sectionhead">Sign up to our Newsletter</span>
					<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup" style="padding-top:20px; padding-left:20px; padding-right:20px;">
<p style="color:red; font-weight:bold; margin-bottom:10px;">Get the latest deals sent direct to your email address</p>
<form action="http://yourcardeals.us5.list-manage1.com/subscribe/post?u=33de560a00f7bc8ee68dd0fad&amp;id=b0bee836dc" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
<div class="mc-field-group" style="margin-top:15px;">
	<label for="mce-EMAIL">Email Address<span class="asterisk">*</span>
</label>

	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" style="width:200px; height:20px; margin-left:10px;">
	<div class="indicates-required"><span class="asterisk">*</span>required</div>
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>	<div class="clear" style="margin-top:20px;"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
</form>
</div>

<!--End mc_embed_signup-->
					</div>
					                    <div class="clear"></div>

			</div>

			<?php get_footer() ;?>