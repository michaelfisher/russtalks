<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Russ Talks</title>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />  
	<link href="css/style.css" rel="stylesheet"/>   
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700' rel='stylesheet' type='text/css'>

	<!--Facebook-->
	<meta property="og:url" content="http://<?php echo $_SERVER['HTTP_HOST']; ?>" />
	<meta property="og:title" content="Russ Talks at ImagingUSA 2015 in Nashville!" />
	<meta property="og:image" content="http://<?php echo $_SERVER['HTTP_HOST']; ?>/images/russ-logo.png" />

	<!--Twitter-->
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="@Russ_Harrington" />
	<meta name="twitter:title" content="Russ Talks" />
	<meta name="twitter:description" content="Russ Talks at ImagingUSA 2015 in Nashville!" />
	<meta name="twitter:image" content="http://<?php echo $_SERVER['HTTP_HOST']; ?>/images/russ-logo.png" />
	<meta name="twitter:url" content="http://<?php echo $_SERVER['HTTP_HOST']; ?>" />
</head> 
<body>

<div id="wrapper">
	
	<div class="left">
	
		<section>
			<h1 class="logo"><img src="images/russ-logo.png" alt="Subscribe" /></h1>
			<h3>Congratulations! You made it!</h3>
			<h3>Be sure to share this limited time opportunity with photo friends and co-workers!</h3>
			<h3><strong><em>Enjoy!</em></strong></h3? 
		</section>
		
	</div>
	
	<div class="right">
	
		<section>
			
			<div class="narrow">
			
				<div class="form-box align-center">
				
					<div id="success">
					    <div class="green align-center">
					        <p>Thank You!</p>
					        <p><a href="https://www.dropbox.com/s/2v44zwykzgholta/russ_download_final2.mov?dl=0">Download Now (~330MB)</a></p>
					        <p style="font-size:0.75em;">(Or, copy this link to download later)</p>
					    </div>
					</div>

					<div id="error">
					    <div>
					        <p>Something went wrong. Please refresh and try again.</p>
					    </div>
					</div>

					<form id="signup" name="signup" method="post" novalidate="novalidate">
					
						<h2>Sign up here</h2>
						<p>Subscribe and get your free download.</p>					

						<div class="form-row">	 
					        <input type="text" name="name" id="name" size="30" value="" required="" class="text login_input align-center"  placeholder="Your name">
					    </div>
						<div class="form-row">									     
					        <input type="text" name="email" id="email" size="30" value="" required="" class="text login_input align-center"  placeholder="Your email address">
					    </div>  
						<div class="form-row">									    
						    <input id="submit" type="submit" name="submit" value="Download Now!" class="btn btn-wide">
						</div>
					    We will not forward your email address to any third party.
					</form>	
					
				</div>
				
				<div class="shadow"></div>
					
		</section>
	
	</div>

</div>

<script src="js/jquery.min.js"></script>
<script src="js/respond.min.js"></script>
<script src="js/scripts.js"></script>  
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/contact.js"></script>

<?php
	$host = $_SERVER['HTTP_HOST']; 
 	if($host == "www.russtalks.com" or $host == "russtalks.com") {; ?>
    	<!--Google Analytics, since we're on the live site-->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-59153298-1', 'auto');
		  ga('send', 'pageview');

		</script>
	<?php } 
	else {; ?>
		<!--Nope, no Google Analytics here.-->
	<?php }; ?>
		        		
</body>
</html>
