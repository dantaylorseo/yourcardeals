<?php
	$name = $_POST['firstName']. ' '.$_POST['lastName'];
	$to = array(
	'Nic Smith' => 'info@yourcardeals.co.uk'
	);
	foreach($to as $key=>$value)
	{
		$sendto = $key.'<'.$value.'>';
		$output = "Dear $key,

You have a new enquiry from HoylakeVanSales.co.uk. The enquiry can be found below.

-------------------------------------------------------------------------------
                                  ENQUIRY
-------------------------------------------------------------------------------

Name: $name

Telephone: $_POST[tel]

Email: $_POST[email]

Car: $_POST[car]

Manufacturer: $_POST[manu]
Model: $_POST[model]

Test Drive?: $_POST[testdrive]

Newsletter signup?: $_POST[newsletter]

-------------------------------------------------------------------------------

Please respond to this enquiry as quickly as possible.

The HoylakeVanSales.co.uk Team.";
		if(mail($sendto,'A new enquiry from HoylakeVanSales.co.uk',$output,"From:HoylakeVanSales.co.uk<noreply@HoylakeVanSales.co.uk>"))
		{
			$sent = 1;	
		} else {
			$sent = 0;
		}
	}
	
	
	
	if($sent == 1)
		{
			echo '<h2>You\'re done!</h2><p>Your enquiry has been sent.</p>';
			?>
            
					<script type="text/javascript">
						 _gaq.push(['_trackPageview', '/tracksuccess/']);
					</script>
                    <?php
		} else {
			echo '<h2>Error</h2><p>There was an error sending your message.</p>';
		}
?>