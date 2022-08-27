<?php
    $orderid = $_GET['id'];
	$packages = $_GET['package'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="7th Wedding form">
    <meta name="author" content="David Mark">
    <title>Wedding Form-7 | Wedding Planner</title>

    <!-- Favicons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
	<link rel="manifest" href="site.webmanifest">
    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/vendors.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
</head>

<body>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->
	
	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->

	<div class="container-fluid p-0">
	    <div class="row no-gutters row-height">
	        <div class="col-lg-6 background-image" data-background="url(img/groomsmen.jpg)">
	            <div class="content-left-wrapper opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
	               
	               
	                <!-- /social -->
	                <div>
	                    <h1>Wedding Form | Stage 7 (Groomsmen)</h1>
	                    <p>Lets work on your Parents.</p>
	                    <a href="https://youtu.be/1ZKTZehtsRQ" class="btn_1 rounded pulse_bt plus_icon btn_play">Play Video Intro<i class="arrow_triangle-right"></i></a>
	                </div>
	            </div>
	        </div>
	        <div class="col-lg-6 d-flex flex-column content-right">
	            <div class="container my-auto py-5">
	                <div class="row">
	                    <div class="col-lg-9 col-xl-7 mx-auto">
	                        <h4 class="mb-3">Wedding Form | Stage 7 (Groomsmen)</h4>
	                        <form class="input_style_1" action="php/groomsmen.php" method="post">
	                        	<input id="website" name="website" type="text" value="">
								<!-- Leave for security protection, read docs for details -->
                                <div class="form-group">
	                                <label for="orderid">Order Number</label>
	                                <input type="text" name="orderid" value= "<?=$orderid?>" id="orderid" class="form-control" readonly>
	                            </div>
								<div class="form-group">
	                                <label for="package">Package</label>
	                                <input type="text" name="packages" value="<?=$packages?>" id="package" class="form-control" readonly>
	                            </div>
                            
	                        	<div class="form-group">
	                                <label for="chgname">Best Man Full Name</label>
	                                <input type="text" name="chgname" id="chgname" class="form-control" required>
	                            </div>
								<div class="form-group">
	                                <label for="g1name">Groom's man 1 Name</label>
	                                <input type="text" name="g1name" id="g1name" class="form-control" >
	                            </div>
	                           


								<div class="form-group">
	                                <label for="g2name">Groom's man 2 Name</label>
	                                <input type="text" name="g2name" id="g2name" class="form-control" >
	                            </div>
								<div class="form-group">
	                                <label for="g3name">Groom's man 3 Name</label>
	                                <input type="text" name="g3name" id="g3name" class="form-control" >
	                            </div>
                    
	                            

                            
                            
	                        	<div class="form-group">
	                                <label for="g4name">Groom's man 4 Name</label>
	                                <input type="text" name="g4name" id="g4name" class="form-control" >
	                            </div>
								<div class="form-group">
	                                <label for="g5name">Groom's man 5 Name</label>
	                                <input type="text" name="g5name" id="g5name" class="form-control" >
	                            </div>
	                            

                                <div class="form-group">
	                                <label for="g6name">Groom's man 6 Name</label>
	                                <input type="text" name="g6name" id="g6name" class="form-control" >
	                            </div>
								<div class="form-group">
	                                <label for="g7name">Groom's man 7 Name</label>
	                                <input type="text" name="g7name" id="g7name" class="form-control" >
	                            </div>
                                <div class="form-group">
	                                <label for="g8name">Groom's man 8 Name</label>
	                                <input type="text" name="g8name" id="g8name" class="form-control" >
	                            </div>
	                           


								<div class="form-group">
	                                <label for="g9name">Groom's man 9 Name</label>
	                                <input type="text" name="g9name" id="g9name" class="form-control" >
	                            </div>
								<div class="form-group">
	                                <label for="g10name">Groom's man 10 Name/label>
	                                <input type="text" name="g10name" id="g10name" class="form-control" >
	                            </div>
                    
	                            
	                     
	                           
	                            <button type="submit" name="submit" class="btn_1 full-width">Submit</button>
	                        </form>
	                    </div>
	                </div>
	            </div>
	            <div class="container pb-3 copy">© 2022 Dave Animation Studio - All Rights Reserved.</div>
	        </div>
	    </div>
	    <!-- /row -->
	</div>
	<!-- /container -->

<script>
        var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?18355';
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url;
        var options = {
      "enabled":true,
      "chatButtonSetting":{
          "backgroundColor":"blue",
          "ctaText":"Contact us",
          "borderRadius":"25",
          "marginLeft":"0",
          "marginBottom":"50",
          "marginRight":"50",
          "position":"left"
      },
      "brandSetting":{
          "brandName":"2geda",
          "brandSubTitle":"Typically replies within hours",
          "brandImg":"https://i.ibb.co/prgScdX/logos.png",
          "welcomeText":"Hi there!\nHow can I help you?",
          "messageText":"{{page_title}}Hello, I have a question about {{page_link}}",
          "backgroundColor":"blue",
          "ctaText":"Start Chat",
          "borderRadius":"25",
          "autoShow":false,
          "phoneNumber":"22998921168"
      }
    };
        s.onload = function() {
            CreateWhatsappChatWidget(options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    </script>

	<!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.js"></script>
	<script src="js/common_func.js"></script>

	<!-- SPECIFIC SCRIPTS -->
	<script src="js/jquery.validate.js"></script>
	<!--<script src="js/contact_func.js"></script>-->

</body>
</html>