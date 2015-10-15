jQuery(document).ready(function() {
	function is_email(email) {
	  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	  return regex.test(email);
	}
		jQuery(":text").labelify({labelledClass: "labelinside"});
  		jQuery("#manu").change(function() {
			jQuery('#model').attr('disabled', 'disabled');
			var getManu = jQuery(this).val();
			jQuery.ajax({
				  type: 'POST',
				  url: '/wp-content/themes/ycd_2012/ajax/quicksearch.php',
				  data: {manu: getManu},
				  success: function(data) 	{ 
							jQuery("#model").html(data);
							jQuery('#model').removeAttr('disabled');
							var newval = jQuery('#manu').val();
							if(newval == 'none')
							{
								jQuery('#model').attr('disabled', 'disabled');	
							}
							var modval = jQuery('#model').val();
							if(modval == 'none')
							{
								jQuery('#model').attr('disabled', 'disabled');	
							}
							jQuery(".quicksubp").html("<a href=\"#\" class=\"button\" id=\"quicksub\">Get Prices</a>");
					}
			});	
		});
		jQuery("#form1").submit(function(e) {
			jQuery(".error").fadeOut('slow');
			var email = jQuery("#email").val();
			var tel = jQuery("#tel").val();
			var errors = 0;
			if(tel == "") {
				jQuery('#tel').after('<p class="error">Telephone Number is required.</p>');
				jQuery(":text").labelify({labelledClass: "labelinside"});
				errors ++;
			}
			if(!is_email(email))
				{
					jQuery('#email').after('<p class="error">Please use a valid email address.</p>');
					jQuery(":text").labelify({labelledClass: "labelinside"});
					errors++;
				}
			if(errors == 0) {
					var fields = jQuery(this).serialize();
                    var car = jQuery('#car').val();
                    car = car.replace(jQuery('#make').val()+' ', '');
                    var data = {
                        enquiryName: jQuery('#firstName').val()+' '+jQuery('#lastName').val(),
                        enquiryEmail: jQuery('#email').val(),
                        enquiryPhone: jQuery('#tel').val(),
                        enquiryMake: jQuery('#make').val(),
                        enquiryModel: jQuery('#model').val(),
                        enquirySite: 'hoylakevansales.co.uk',
                        enquiryType: 1,
                        enquiryNews: jQuery('#newsletter').val(),
                        enquiryBrochure: jQuery('#brochure').val(),
                        enquiryTest: jQuery('#testdrive').val(),
                    };
                    jQuery.ajax({
						  type: 'GET',
						  url: 'http://admin.hoylakevansales.co.uk/callback.php',
						  data: data,
						  success: function(data) 	{ 
                                jQuery.ajax({
                                      type: 'POST',
                                      url: '/wp-content/themes/ycd_2012/ajax/formsend.php',
                                      data: fields,
                                      success: function(data) 	{ 
                                                window.location.replace("http://www.hoylakevansales.co.uk/thankyou/");
                                                //jQuery("#form1").html(data);
                                        }
                                });
							}
					});
						
			}
					
			e.preventDefault();
	
		});
		jQuery("#model").live("change", 
			function() {
				var getManu = jQuery(this).val();
				jQuery(".quicksubp").html("<a href=\""+getManu+"\" class=\"button\" id=\"quicksub\">Get Prices</a>");
			}
		);
		jQuery("#quicksub").live("click", function() {
			
			var linkval = jQuery(this).attr("href");
			if(linkval == '#'){
				return false;
			}
			
		});
		
		jQuery('.gallery-thumb a').click( function( e ) {
			e.preventDefault();
			var url = jQuery(this).attr( 'href' );
			jQuery('.wp-post-image').attr( 'src', url );
		});
	});