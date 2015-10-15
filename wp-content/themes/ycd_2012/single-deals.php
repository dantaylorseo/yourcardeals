<?php get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>
<div class="content" itemscope itemtype="http://data-vocabulary.org/Product">
            <?php $sold = get_post_meta( $post->ID, 'sold', true ) ; ?>  
              <h1 class="sectionhead"><?php the_title(); ?></h1>
           	  <h2><?php if( $sold == 1 ) echo 'SOLD! '; ?>Get a fantastic deal on this <?php the_title(); ?> TODAY</h2>
              <p class="subhead">Just fill out the form or call us to arrange a viewing.</p>
              <div class="modeldetail">
              	<?php 
if ( has_post_thumbnail() ) { 
// check if the post has a Post Thumbnail assigned to it.
	echo '<span itemprop="image">';
	if( $sold == 1 ) {
		echo '<div class="sold"><img src="'.get_bloginfo('stylesheet_directory').'/images/sold_icon.png" /></div>';
	}
  the_post_thumbnail();
  	echo '</span>';
} 
$gallerys = get_field( 'gallery' );
?>
<?php
	foreach( $gallerys as $gallery ) {
		$imgurl = wp_get_attachment_image_src( $gallery['id'], 'cust_thumb' );
		echo '<div class="gallery-thumb"><a href="'.$gallery['url'].'"><img src="'.$imgurl[0].'"></a></div>';	
	}
?>

              	<table width="100%" id="tabdetail">
                	<tr>
                    	<th>Manufacturer</th>
                        
						<?php
                        	$terms = get_the_terms( $post->ID, 'make' );
							if ( $terms && ! is_wp_error( $terms ) ) {
								$makes = array();
								foreach ( $terms as $term ) {
									$makes[] = $term->name;
								}
								$makes = join( ", ", $makes );
							}
						?>
                        <td itemprop="brand"><?php echo $makes; ?> </td>
                    </tr>
                    <tr>
                    	<th>Model</th>
                        <td><?php echo get_field('model'); ?></td>
                    </tr>
                    <tr>
                    	<th>Engine Size</th>
                        <td><?php echo get_field('engine_size'); ?></td>
                    </tr>
                    <tr>
                    	<th>Mileage</th>
                        <td><?php echo get_field('mileage'); ?></td>
                    </tr>
                    <tr>
                    	<th>Condition</th>
                        <td><?php echo get_field('condition'); ?></td>
                    </tr>
					
                    <tr itemprop="offerDetails" itemscope itemtype="http://data-vocabulary.org/Offer">
                    	<th><span class="listPrice">Price</span></th>
                        <td><span class="listPrice">&pound;</span><span itemprop="price" class="listPrice" ><?php echo number_format( get_field('price'), 0 ); ?> +VAT</span></td>
                    </tr>

                  </table>
                  <div class="detcen" style="margin-top:30px;">
                  <p><img src="<?php bloginfo('stylesheet_directory'); ?>/images/deals.jpg" width="657" height="46" /></p> </div>
              </div>
                    <div class="modelform">
                   	  <form id="form1" name="form1" method="post" action="" class="mainform">
                      <h2>Enquire about this vehicle</h2>
  <p>
    <input name="firstName" type="text" id="firstName" title="First Name" />
  </p>
  <p>
   <input name="lastName" type="text" id="lastName" title="Last Name" />
  </p>
  <p>
    <input name="tel" type="text" id="tel" title="Tel (In some cases we will send an SMS)" />
  </p>
  <p>
    <input name="email" type="text" id="email" title="Email Address" />
  </p>
  <p style="text-align:left";>
    
    <input class="nowidth" name="testdrive" type="checkbox" id="testdrive" checked="checked" value="1"  style="border:none;"/> Request Test Drive?
      <br/>
      <br/>
	  <input type="hidden" name="car" id="car" value="<?php the_title(); ?>" />
	  <input type="hidden" name="make" id="make" value="<?php echo $makes; ?>" />
      <input type="hidden" name="model" id="model" value="<?php echo get_field('model'); ?>" />
    <input class="nowidth" name="newsletter" type="checkbox" id="newsletter" checked="checked" value="1"  style="border:none;"/> Get the latest offers from our Newsletter?
  </p>
  <p>
    <input type="submit" name="send" id="submit" class="button" value="Send Enquiry" />
  </p>
</form>
                    </div>
                    <div class="clear"></div>
                    
</div>

<?php
		$content = get_the_content();
		if($content != '') { ?>
			<div class="content">
            <span class="sectionhead"><?php the_title();?> Info</span>
            <?php echo wpautop( $content ); ?>
            </div>
            <?php } ?>
            <?php endwhile; // end of the loop. ?>
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