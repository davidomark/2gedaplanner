<?php
if(!isset($_GET['package'])){
	session_destroy();
	header("location: ../index.php");
	

}else{
	$package = $_GET['package']." Package";

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Begin creation">
    <meta name="author" content="David Mark">
    <title>2geda | Start creating you website</title>

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

	<div class="background-image" data-background="url(img/form-min.jpg)">
	    <div class="min-vh-100 d-flex flex-column opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
	        <div class="container my-auto">
	            <div class="row">
	                <div class="col-md-9 col-lg-7 col-xl-5 mx-auto my-4">
	                    <div class="panel header_2 center">
	                        
	                         <form class="input_style_2" action="php/form.php" method="post" enctype="multipart/form-data">
								<h3>To start creating your website click the button.</h3>

								<div class="form-group">
	                                <label for="package">Package</label>
	                                <input type="text" name="package" value="<?=strtoupper($package)?>" id="package" class="form-control" readonly>
	                            </div>
	                          
	                            <button type="submit" name="pack" class="btn_1 full-width">Submit</button>
	                        </form>
	                    </div>
	                </div>
	                <!-- /col -->
	            </div>
	            <!-- /row -->
	        </div>
	        <!-- /container -->
	        <div class="container py-2 copy white">© 2022 Dave Animation Studio - All Rights Reserved.</div>
	    </div>
	</div>
	       
	<!-- /background-image -->

	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	
	<!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.js"></script>
	<script src="js/common_func.js"></script>

</body>
</html>