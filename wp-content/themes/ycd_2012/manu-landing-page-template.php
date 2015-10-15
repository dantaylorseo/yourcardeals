<?php
/*
Template Name: Manu Landing Page Template
*/
?>
<?php get_header(); ?>
        	<div class="content">
                
                <?php while ( have_posts() ) : the_post(); ?>
			<h1 class="sectionhead"><?php the_title(); ?></h1>
            <div class="post">
            <?php the_content(); ?>
            </div>
			<?php endwhile; // end of the loop. ?>
               <!-- ADD YOUR FORM HERE, NORMAL CONTENT LIKE INTRO CAN BE ADDED TO THE PAGE IN WP -->


			<div id="landingLeft">
				<div id="landingLogo"><img src="/wp-content/uploads/2012/11/honda-deals-75x75.jpg"></div>
				<div class="landingImg"><a href="/d/honda-accord-deals/"><img style="width:140px; float:left;" src="/wp-content/uploads/2012/11/honda-accord-deals3-300x140.jpg"><div style="float:left;"><p>ACCORD</p></div></a></div>
				<div class="landingImg"><a href="/d/honda-civic-deals/"><img style="width:140px; float:left;" src="/wp-content/uploads/2012/11/honda-civic-deals2-300x140.jpg"><div style="float:left;"><p>CIVIC</p></div></a></div>	
				<div class="landingImg"><a href="/d/honda-cr-z-deals/"><img style="width:140px; float:left;" src="/wp-content/uploads/2012/11/honda-cr-z-deals2-300x140.jpg"><div style="float:left;"><p>CR-Z</p></div></a></div>	
				<div class="landingImg"><a href="/d/honda-insight-deals/"><img style="width:140px; float:left;" src="/wp-content/uploads/2012/11/honda-insight-deals-300x140.jpg"><div style="float:left;"><p>INSIGHT</p></div></a></div>	
				<div class="landingImg"><a href="/d/honda-jazz-deals/"><img style="width:140px; float:left;" src="/wp-content/uploads/2012/11/honda-jazz-deals2-300x140.jpg"><div style="float:left;"><p>JAZZ</p></div></a></div>	
				
			</div>
				
            	<div class="manulandingform">
				<h4 style="font-size:18px; color:#999;">5 easy steps to a great Honda deal...</h4>
 <form id="form1" name="form1" method="post" action="" class="mainform">
				<p>
                    <label for="manu"><span class="formNumbers">1.</span> Choose Model:</label>
                    <select name="manu" id="manu" style="height:26px; width:200px; float:right;">
                      <option value="none">Select Model</option>
                      <option value="Honda Accord">Accord</option>
                      <option value="Honda Civic">Civic</option>
                      <option value="Honda CR-Z">CR-Z</option>
                      <option value="Honda Insight">Insight</option>
                      <option value="Honda Jazz">Jazz</option>
                    </select>
                  </p>
		  
				 
  <p>
    <label for="model"><span class="formNumbers">2.</span> Enter First Name:</label><input name="firstName" type="text" id="firstName" title="First Name" />
  </p>
  <p>
   <label for="model"><span class="formNumbers">3.</span> Enter Last Name:</label><input name="lastName" type="text" id="lastName" title="Last Name" />
  </p>
  <p>
    <label for="model"><span class="formNumbers">4.</span> Enter Tel:</label><input name="tel" type="text" id="tel" title="Tel (In some cases we will send an SMS)" />
  </p>
  <p>
    <label for="model"><span class="formNumbers">5.</span> Enter Email:</label><input name="email" type="text" id="email" title="Email Address" />
  </p>
  <div id="checkBoxes"><p style="text-align:left";>
    <input class="nowidth" name="brochure" type="checkbox" id="brochure" checked="checked" value="Yes" style="border:none;" /> Request Brochure?    
  <br/>
    <input class="nowidth" name="testdrive" type="checkbox" id="testdrive" checked="checked" value="Yes"  style="border:none;"/> Request Test Drive?
      <br/>
      <br/>
	  <input type="hidden" name="car" id="car" value="<?php the_title(); ?>" />
    <input class="nowidth" name="newsletter" type="checkbox" id="newsletter" checked="checked" value="Yes"  style="border:none;"/> Get the latest offers from our Newsletter?
  </p></div>
  
  <p>
    <input type="submit" name="send" id="submit" class="button" value="Get Prices" style="height:50px;"/>
  </p>
</form>
				  
				  

            </div>

			
			   
<div style="margin-left:auto; margin-right:auto; width:657px; padding-bottom:20px;"><img src="/wp-content/themes/ycd_2012/images/deals.jpg" /></div>
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



