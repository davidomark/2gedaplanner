<?php
    include ('php/form.php');
	$orderid = $_GET['id'];
	$packages = $_GET['package'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="1st Wedding form">
    <meta name="author" content="David Mark">
    <title>Wedding Form-1 | Wedding Planner</title>

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
	        <div class="col-lg-6 background-image" data-background="url(img/bride.jpg)">
	            <div class="content-left-wrapper opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
	               
	              
	                <!-- /social -->
	                <div>
	                    <h1>Wedding Form | Stage 1 (Bride)</h1>
	                    <p>Lets work on the Bride.</p>
	                    <a href="https://youtu.be/1ZKTZehtsRQ" class="btn_1 rounded pulse_bt plus_icon btn_play">Play Video Intro<i class="arrow_triangle-right"></i></a>
	                </div>
	            </div>
	        </div>
	        <div class="col-lg-6 d-flex flex-column content-right">
	            <div class="container my-auto py-5">
	                <div class="row">
	                    <div class="col-lg-9 col-xl-7 mx-auto">
	                        <h4 class="mb-3">Wedding Form | Stage 1 (Bride)</h4>
	                        <form class="input_style_1" action="php/bride.php" method="post" enctype="multipart/form-data">
	                        	<input id="website" name="website" type="text" value="">
								<!-- Leave for security protection, read docs for details -->
	                        	<div class="form-group">
	                                <label for="first_name">First Name</label>
	                                <input type="text" name="first_name" id="first_name" class="form-control" required>
	                            </div>
								<div class="form-group">
	                                <label for="last_name">Last Name</label>
	                                <input type="text" name="last_name" id="last_name" class="form-control" required>
	                            </div>
	                            <div class="form-group">
	                                <label for="orderid">Order Number</label>
	                                <input type="text" name="orderid" value= "<?=$orderid?>" id="orderid" class="form-control" readonly>
	                            </div>
								<div class="form-group">
	                                <label for="package">Package</label>
	                                <input type="text" name="packages" value="<?=$packages?>" id="package" class="form-control" readonly>
	                            </div>
                                <div class="form-group">
	                                <label for="email_address">Email Address</label>
	                                <input type="email" name="email_address" id="email_address" class="form-control" required>
	                            </div>
	                            <div class="form-group">
	                            	<label for="about_field">About Bride</label>
	                            	<textarea name="about_field" id="about_field" class="form-control" style="height: 150px" required></textarea>
	                            </div>
								<div class="form-group mb-4">
								    <div class="info">
								        <h6>Add a picture of the Bride<a href="#0" data-toggle="tooltip" data-placement="top" title="<strong>Files accepted:<br></strong>jpg,jpeg,png. Max file size: 150kb." class="tooltip-1"><i class="icon_question_alt"></i></a></h6>
								    </div>
								    <div class="fileupload">
								        <input type="file" name="my_image" accept="image/*">
								    </div>
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