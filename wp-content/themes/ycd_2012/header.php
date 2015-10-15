<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php wp_title(''); ?></title>
<link rel="icon" href="http://www.yourcardeals.co.uk/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo( 'stylesheet_url' ); ?>?rand=<?php echo rand(2,999); ?>" />
<?php wp_head(); ?>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/jquery.labelify.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/functions.js">
</script>

</head>

<body>
<div id="wrapper">
	<div id="header">
    	<a href="/" id="logo"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" width="268" height="108" /></a>
		<div style="width:307px; height:67px; float:left; margin-left:50px; margin-top:20px;"><img src="/wp-content/themes/ycd_2012/images/phone.png" alt="phone"><p style="margin-top:-41px; font-size:38px; font-weight:bold; color:#999; margin-left:44px;">0151-678-3104</p></div>
        <div id="searchbox"><form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
        <p>Search for a manufacturer or model</p>
<input type="text" size="18" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" /><input type="submit" id="searchsubmit" value="Search" class="btn" />
</form>
<br />
<div style="float:left; margin-right:5px;"><img src="/wp-content/themes/ycd_2012/images/email.jpg" /></div><p><a style="font-size:14px; text-decoration:none; color: #999;" href="mailto:info@hoylakevansales.co.uk">info@hoylakevansales.co.uk</a></p>
</div>
<div class="clear"></div>
    </div>
    <div id="nav">
    	<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
      <div class="clear"></div>
    </div>
<div id="tagline">
    	“ It couldn’t be simpler - select your next vehicle and receive an unbeatable price! ”
  </div>
  		<div id="breadcrumb"><?php 
		if(!is_front_page()) {
		if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('<p id="breadcrumbs">','</p>');
}} ?></div>
    <div id="main">
    	<div id="contentwrap">