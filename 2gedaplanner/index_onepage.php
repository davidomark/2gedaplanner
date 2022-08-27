<?php
include("forms/php/dbconn.php");
session_start();
$orderid = $_GET['id'];
$packages = $_GET['package'];

$_SESSION['orderID'] = $orderid;
$_SESSION['package'] = $packages;
    
    $query = "SELECT * FROM bride WHERE `orderid`=".$orderid." limit 1";
                                    //$result1 = mysqli_query( $conn, $sql);
                                    //$row = mysqli_fetch_array($result);
                                    // FETCHING DATA FROM DATABASE
                        $result = $conn->query($query);
                        
                        if ($result->num_rows > 0) 
                        {
                            // OUTPUT DATA OF EACH ROW
                            while($row = $result->fetch_assoc())
                            {
                                $bridename = $row['first_name'];
                                $groomname = $row['groom_first_name'];
                                $aboutbride = $row['about_bride'];
                                $aboutgroom = $row['about_groom_field'];
                                $howwemet = $row['howwemet_field'];
                                $firstdate = $row['firstdate_field'];
                                $proposal = $row['Proposal_field'];
                                $engagement = $row['engagement_field'];
                                $marriage = $row['marriage_field'];
                                $weddingdate = $row['wedding_date'];
                                $weddingtime = $row['wedding_time'];
                                $wvenue = $row['wvenue'];
                                $rvenue = $row['rvenue'];
                                $receptiontime = $row['reception_time'];
                                $fbname = $row['fbfirst_name'];
                                $mbname = $row['mbfirst_name'];
                                $fgname = $row['fgfirst_name'];
                                $mgname = $row['mgfirst_name'];
                                $chbname = $row["chbname"];
                                $b1name = $row["b1name"];
                                $b2name = $row["b2name"];
                                $b3name = $row["b3name"];
                                $b4name = $row["b4name"];
                                $b5name = $row["b5name"];
                                $b6name = $row["b6name"];
                                $b7name = $row["b7name"];
                                $b8name = $row["b8name"];
                                $b9name = $row["b9name"];
                                $b10name = $row["b10name"];
                                $chgname = $row["chgname"];
                                $g1name = $row["g1name"];
                                $g2name = $row["g2name"];
                                $g3name = $row["g3name"];
                                $g4name = $row["g4name"];
                                $g5name = $row["g5name"];
                                $g6name = $row["g6name"];
                                $g7name = $row["g7name"];
                                $g8name = $row["g8name"];
                                $g9name = $row["g9name"];
                                $g10name = $row["g10name"];
                               
                            }
                        } 
                        else {
                            echo "0 results";
                            header("location: index.php");
                        }

                        $conn->close();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Love Me - Wedding Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Love Me is a wedding planning website">
    <meta name="keywords" content="wedding,couple,ceremony,reception,rsvp,gallery,event,countdown">
    <meta name="author" content="David Mark">


    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->


    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/animate.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/jquery.countdown.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/animsition.min.css" type="text/css">
    <link rel="stylesheet" href="rsvp/form.css">

    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

    <!-- custom background -->
    <link rel="stylesheet" href="css/bg.css" type="text/css">

    <!-- color scheme -->
    <link rel="stylesheet" href="css/color.css" type="text/css" id="colors">
</head>

<body id="homepage">
    
    <div id="wrapper">

        <!-- header begin -->
        <header>
 
       
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="index.html">
                            
                                <h2><?php echo $bridename?><span>&amp;</span><?php echo $groomname ?></h2>
                            </a>
                        </div>
                        <!-- logo close -->

                        <!-- small button begin -->
                        <span id="menu-btn"></span>
                        <!-- small button close -->

                        <span class="btn-rsvp">RSVP</span>

                        <!-- mainmenu begin -->
                        <nav>
                            <ul id="mainmenu">
                                <li class="active"><a href="#wrapper">Home</a></li>
								<li><a href="#section-couple">About</a></li>
                                <li><a href="#section-story">Our Story</a></li>
                                <li><a href="#section-event">When</a></li>
                                <li><a href="#section-people">People</a></li>
                            </ul>
                        </nav>

                    </div>
                    <!-- mainmenu close -->

                </div>
            </div>
        </header>
        <!-- header close -->

        <!-- content begin -->
        <div id="content" class="no-bottom no-top">

            <div id="popup-box" class="full-height">
                <span class="btn-close">
					<i class="icon_close"></i>
				</span>

                <div class="container center-y">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="deco id-color"><span>We Invite You</span></h2>
                            <h2 data-wow-delay=".2s"><?php echo $weddingdate?></h2>
                        </div>

                        <div class="spacer-double"></div>

                        <div class="col-md-5 col-md-offset-1 text-right">
                            <h3>Wedding Ceremony</h3>
                            <?php echo $weddingtime?><br> <?php echo $wvenue?><br>
                        </div>

                        <div class="col-md-5">
                            <h3>Wedding Reception</h3>
                            <?php echo $receptiontime ?><br> <?php echo $rvenue?><br>
                        </div>

                        <div class="spacer-double"></div>

                        <form class="form-underline" method="post" action="rsvp.php">
                            <div class="col-md-3">
                                <input type='text' name='Name' id='name' class="form-control" placeholder="Your Name" required maxlength="50">
                            </div>
                            <div class="col-md-3">
                                <input type='text' name='Email' id='email' class="form-control" placeholder="Your Email" required maxlength="50">
                            </div>
                            <div class="col-md-3">
                                <select id="guest" name="Guest" size="1" class="form-control">
                                    <option value="" disabled selected>Number of seats to reserve for you</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select id="attend" name="Attend" size="1" class="form-control">
                                    <option value="" disabled selected>Are you attending?</option>
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>
                                </select>
                            </div>
                            <div class="col-md-12 text-center">
                                <div class="spacer-single"></div>
                                <input type='submit' id='submit' name="submit" value='Submit' class="btn btn-custom">
                              
                            </div>
                        </form>
                        

                        <div class="spacer-single"></div>
                    </div>
                </div>
            </div>
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-81b8646c-254d-45e8-83f6-ae99a1cf23a7"></div>
            <!-- section begin -->
            <section id="section-hero" class="full-height relative z1 owl-slide-wrapper no-top no-bottom text-light" data-stellar-background-ratio=".2">
                <div class="owl-slider-nav">
                    <div class="next"></div>
                    <div class="prev"></div>
                </div>

                <div class="center-y fadeScroll relative" data-scroll-speed="4">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="row">
                                    <div class="spacer-double"></div>
                                    <div class="spacer-single"></div>
                                    <div class="col-md-5 text-right text-center-sm relative">
                                        <h2 class="name"><?php echo $bridename ?></h2>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <span class="deco-big" data-scroll-speed="2">&amp;</span>
                                    </div>
                                    <div class="col-md-5 text-left text-center-sm relative">
                                        <h2 class="name"><?php echo $groomname ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="custom-owl-slider" class="owl-slide" data-scroll-speed="2">
                    <div class="item">
                        <img src="images/slider/1.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="images/slider/2.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="images/slider/3.jpg" alt="">
                    </div>
                </div>
            </section>
            <!-- section close -->


            <!-- section begin -->
            <section id="section-couple" class="no-top">
                <div class="container relative mt-60 z-index">
                    <div class="row">
                    
                    <?php 
                        include("forms/php/dbconn.php");
                            $sql = "SELECT * FROM bride WHERE `orderid`='".$orderid."' limit 1";
                            $res = mysqli_query($conn,  $sql);

                           if (mysqli_num_rows($res) > 0) {
                                while ($images = mysqli_fetch_assoc($res)) {  ?>
                        <div class="col-md-5 col-md-offset-1 text-center">
           
                            <img src="forms/php/wed_img/<?=$images['image']?>" id="img" alt="" class="img-responsive img-rounded wow fadeInLeft" data-wow-delay=".2s" />
                            
                            <div class="padding40">
                            <?php } }?>
                                <h2><?php echo $bridename ?></h2>
                                <p><?php echo $aboutbride ?></p>
                                <!-- social icons -->
                                
                                <!-- social icons close -->
                            </div>
                        </div>

                        <?php 
                        include("forms/php/dbconn.php");
                            $sql = "SELECT * FROM bride WHERE `orderid`='".$orderid."' limit 1";
                            $res = mysqli_query($conn,  $sql);

                           if (mysqli_num_rows($res) > 0) {
                                while ($images = mysqli_fetch_assoc($res)) {  ?>
                        <div class="col-md-5 text-center">
                            <style>
                                #img{
                                    height: 344px;
                                    width: 450px;
                                }
                            </style>
                            <img src="forms/php/wed_img/<?=$images['groompic']?>" id="img" alt="" class="img-responsive img-rounded wow fadeInRight" data-wow-delay=".2s" />
                            <div class="padding40">
                            <?php } }?>
                                <h2><?php echo $groomname ?></h2>
                                <p><?php echo $aboutgroom ?></p>
                                <!-- social icons -->
                                
                                <!-- social icons close -->
                            </div>
                        </div>

                        <div class="col-md-2 col-md-offset-5 text-center absolute">
                            <span class="circle wow zoomIn" data-wow-delay=".8s">
								<i class="fa fa-heart"></i>
							</span>
                        </div>


                        <div class="clearfix"></div>
                    </div>
                </div>

            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-countdown" aria-label="section-countdown" class="text-light" data-stellar-background-ratio=".2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="deco id-color"><span>Time Left Until Event</span></h2>
                        </div>
                       <!-- <div class="col-md-8 col-md-offset-2">
                            <div class="spacer-double"></div>
                            <div id="defaultCountdown" class="wow fadeIn"></div>
                            <div class="spacer-single"></div>
                        </div>-->
                        <div class="wow fadeIn">
                            <div class="wow fadeIn"> <h1 style="text-align: center;">
                            <?php
                           
                    $today = date("Ymd");
               
                     $start = strtotime($today);
                            $end = strtotime($weddingdate);
                            
                            $days_between = ceil(abs($end - $start) / 86400);
                                echo "$days_between"."  days left to wedding";

?>
</h1> 
                    </div>
                </div>
            </section>
            <!-- section close -->

            <section id="section-story" data-bgcolor="#e2e4e8">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2>Our Story</h2>
                            <div class="spacer-single"></div>
                        </div>
                    </div>
                    <?php 
                    include("forms/php/dbconn.php");
                                       
                                            $sql = "SELECT * FROM bride WHERE `orderid`='".$orderid."' limit 1";
                                            $res = mysqli_query($conn,  $sql);

                                        if (mysqli_num_rows($res) > 0) {
                                                while ($images = mysqli_fetch_assoc($res)) {  ?>
                    <ul class="timeline">
                        <li class="wow fadeInUp">
                            <div class="timeline-badge"><i class="fa fa-heart"></i></div>
                            <div class="timeline-panel">

                                <div class="picframe img-rounded mb20">
                                    <a class="image-popup" href="forms/php/wed_img/<?=$images['hwmpic']?>">
										<span class="overlay-v">
											<i></i>
										</span>
									</a>
                        
                                    <img src="forms/php/wed_img/<?=$images['hwmpic']?>" class="img-responsive img-rounded" alt="">
                                    
                                </div>

                                <div class="timeline-heading">
                                    
                                    <h3 class="mt0">How We Meet</h3>
                                    <div class="tiny-border"></div>
                                </div>
                                <div class="timeline-body">
                                    <p>
                                    <?php echo $howwemet ?>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted wow fadeInUp">
                            <div class="timeline-badge"><i class="fa fa-heart"></i></div>
                            <div class="timeline-panel">
                                <div class="picframe img-rounded mb20">
                                    <a class="image-popup" href="forms/php/wed_img/<?=$images['fdpic']?>">
										<span class="overlay-v">
											<i></i>
										</span>
									</a>
                                    <img src="forms/php/wed_img/<?=$images['fdpic']?>" class="img-responsive img-rounded" alt="">
                                </div>

                                <div class="timeline-heading">
                                    
                                    <h3 class="mt0">The First Date</h3>
                                    <div class="tiny-border"></div>
                                </div>
                                <div class="timeline-body">
                                    <p><?php echo $firstdate ?></p>
                                </div>
                            </div>
                        </li>
                        <li class="wow fadeInUp">
                            <div class="timeline-badge"><i class="fa fa-heart"></i></div>
                            <div class="timeline-panel">
                                <div class="picframe img-rounded mb20">
                                    <a class="image-popup" href="forms/php/wed_img/<?=$images['ppic']?>">
										<span class="overlay-v">
											<i></i>
										</span>
									</a>
                                    <img src="forms/php/wed_img/<?=$images['ppic']?>" class="img-responsive img-rounded" alt="">
                                </div>

                                <div class="timeline-heading">
                                    
                                    <h3 class="mt0">The Proposal</h3>
                                    <div class="tiny-border"></div>
                                </div>
                                <div class="timeline-body">
                                    <p><?php echo $proposal ?></p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted wow fadeInUp">
                            <div class="timeline-badge"><i class="fa fa-heart"></i></div>
                            <div class="timeline-panel">
                                <div class="picframe img-rounded mb20">
                                    <a class="image-popup" href="forms/php/wed_img/<?=$images['epic']?>">
										<span class="overlay-v">
											<i></i>
										</span>
									</a>
                                    <img src="forms/php/wed_img/<?=$images['epic']?>" class="img-responsive img-rounded" alt="">
                                </div>

                                <div class="timeline-heading">
                                    
                                    <h3 class="mt0">We Are Engaged</h3>
                                    <div class="tiny-border"></div>
                                </div>
                                <div class="timeline-body">
                                    <p>
                                        <?php echo $engagement ?>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="wow fadeInUp">
                            <div class="timeline-badge"><i class="fa fa-heart"></i></div>
                            <div class="timeline-panel">
                                <div class="picframe img-rounded mb20">
                                    <a class="image-popup" href="forms/php/wed_img/<?=$images['mpic']?>">
										<span class="overlay-v">
											<i></i>
										</span>
									</a>
                                    <img src="forms/php/wed_img/<?=$images['mpic']?>" class="img-responsive img-rounded" alt="">
                                </div>

                                <div class="timeline-heading">
                                    
                                    <h3 class="mt0">Getting Married</h3>
                                    <div class="tiny-border"></div>
                                </div>
                                <div class="timeline-body">
                                    <p><?php echo $marriage ?></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            
            <!-- section begin -->
            <section id="section-quote" aria-label="section-quote-1" class="text-light" data-stellar-background-ratio=".2">
                <div class="container">
                    <div class="row wow fadeInUp">
                        <div class="col-md-8 col-md-offset-2">
                            <blockquote class="very-big text-light wow fadeIn">
                                "Love recognizes no barriers. It jumps hurdles, leaps fences, penetrates walls to arrive at its destination full of hope."
                                <span>Maya Angelou</span>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section aria-label="section" class="no-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="deco id-color"><span>You Are Invited</span></h2>
                            <h2 data-wow-delay=".2s"><?php echo $weddingdate ?></h2>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->

            <!-- section begin -->
            <section id="section-event">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="images/misc/3.jpg" alt="" class="img-responsive img-rounded wow fadeInLeft">
                        </div>

                        <div class="col-md-5 col-md-offset-1 pt40 pb40 wow fadeIn" data-wow-delay=".5s">
                            <h3>Wedding Ceremony</h3>
                            <?php echo $weddingdate ?><br><?php echo $weddingtime ?><br> <?php echo $wvenue ?><br>
                            
                        </div>
                    </div>

                    <div class="spacer-double"></div>

                    <div class="row">
                        <div class="col-md-5 pt40 pb40 text-right wow fadeIn" data-wow-delay=".5s">
                            <h3>Wedding Reception</h3>
                            <?php echo $weddingdate ?><br> <?php echo $receptiontime ?><br> <?php echo $rvenue ?><br>
                            
                        </div>

                        <div class="col-md-6 col-md-offset-1">
                            <img src="images/misc/4.jpg" alt="" class="img-responsive img-rounded wow fadeInRight">
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->


            <!-- section begin -->
           <!-- <section id="section-guestbook" class="text-light" data-stellar-background-ratio=".2">
                <div class="container relative">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2>Guest Book</h2>
                            <div class="spacer-single"></div>
                        </div>


                        <div id="testimonial-carousel" class="de_carousel" data-wow-delay=".3s">

                            <div class="col-md-6 item">
                                <div class="de_testi opt-2">
                                    <blockquote>
                                        <p>To a special couple who show that love can be true and forever. May your lives continue
                                            to grow in love and happiness together!</p>
                                        <div class="de_testi_by">
                                            John, Friend
                                        </div>
                                    </blockquote>

                                </div>
                            </div>

                            <div class="col-md-6 item">
                                <div class="de_testi opt-2">
                                    <blockquote>
                                        <p>Wedding wishes for my dear friends. I hope your life together will be filled with
                                            joy, happiness and lots of love!</p>
                                        <div class="de_testi_by">
                                            Sarah, Friend
                                        </div>
                                    </blockquote>
                                </div>
                            </div>

                            <div class="col-md-6 item">
                                <div class="de_testi opt-2">
                                    <blockquote>
                                        <p>Hope you will have a long and happy life together. Always treat each other better
                                            than you want to be treated.</p>
                                        <div class="de_testi_by">
                                            Michael, Friend
                                        </div>
                                    </blockquote>
                                </div>
                            </div>

                            <div class="col-md-6 item">
                                <div class="de_testi opt-2">
                                    <blockquote>
                                        <p>I wish you a wonderful life together as you head down the road to married happiness.
                                            So happy for you!</p>
                                        <div class="de_testi_by">
                                            Jenny, Friend
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </section>-->
            <!-- section close -->
            <style>
                #parents{
                    height: 250px;
                    width: 250px;
                }
            </style>

            <section id="section-people">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2>People</h2>
                            <div class="spacer-single"></div>
                        </div>

                        <div class="col-md-12">
                            <div class="de_tab tab_style_3 text-center">
                                <ul class="de_nav">
                                    <li class="active" data-link="#section-services-tab"><span>Parents</span></li>
                                    <li data-link="#section-services-tab"><span>Bridesmaid</span></li>
                                    <li data-link="#section-services-tab"><span>Groomsmen</span></li>
                                </ul>

                                <div class="de_tab_content">

                                    <div id="tab1" class="tab_single_content">
                                        <div class="row">

                                            <div class="col-md-3 text-center">
                                                <figure class="picframe img-rounded mb20">
                                                    <a class="image-popup" href="forms/php/wed_img/<?=$images['fbpic']?>">
														<span class="overlay-v">
															<i></i>
														</span>
													</a>
                                                    <img src="forms/php/wed_img/<?=$images['fbpic']?>" id="parents" class="img-responsive img-rounded" alt="">
                                                </figure>
                                                <h3>Mr. <?php echo $fbname ?></h3>
                                                <small><?php echo $bridename ?>'s Father</small>
                                                <div class="spacer-half"></div>
                                                
                                            </div>

                                            <div class="col-md-3 text-center">
                                                <figure class="picframe img-rounded mb20">
                                                    <a class="image-popup" href="forms/php/wed_img/<?=$images['mbpic']?>">
														<span class="overlay-v">
															<i></i>
														</span>
													</a>
                                                    <img src="forms/php/wed_img/<?=$images['mbpic']?>" id="parents" class="img-responsive img-rounded" alt="">
                                                </figure>
                                                <h3>Mrs. <?php echo $mbname ?></h3>
                                                <small><?php echo $bridename ?>'s Mother</small>
                                                <div class="spacer-half"></div>
                                                
                                            </div>

                                            <div class="col-md-3 text-center">
                                                <figure class="picframe img-rounded mb20">
                                                    <a class="image-popup" href="forms/php/wed_img/<?=$images['fgpic']?>">
														<span class="overlay-v">
															<i></i>
														</span>
													</a>
                                                    <img src="forms/php/wed_img/<?=$images['fgpic']?>" id="parents" class="img-responsive img-rounded" alt="">
                                                </figure>
                                                <h3>Mr. <?php echo $fgname ?></h3>
                                                <small><?php echo $groomname ?>'s Father</small>
                                                <div class="spacer-half"></div>
                                                
                                            </div>

                                            <div class="col-md-3 text-center">
                                                <figure class="picframe img-rounded mb20">
                                                    <a class="image-popup" href="forms/php/wed_img/<?=$images['mgpic']?>">
														<span class="overlay-v">
															<i></i>
														</span>
													</a>
                                                    <img src="forms/php/wed_img/<?=$images['mgpic']?>" id="parents" class="img-responsive img-rounded" alt="">
                                                </figure>
                                                <h3>Mrs. <?php echo $mgname ?></h3>
                                                <small><?php echo $groomname ?>'s Mother</small>
                                                <div class="spacer-half"></div>
                                                
                                            </div>

                                            <div class="clearfix"></div>
                                        </div>
                                    </div>

                                    <div id="tab2" class="tab_single_content">
                                        <div class="row">
                                            <div class="col-md-3 text-center">
                                                
                                                <h3><?php echo $chbname ?></h3>
                                                <small>Maid of Honour</small>
                                                
                                            </div>

                                            <div class="col-md-3 text-center">
                                               
                                                <h3><?php echo $b1name; ?></h3>
                                                
                                            </div>

                                            <div class="col-md-3 text-center">
                                                
                                                <h3><?php echo $b2name?></h3>
                                                
                                            </div>

                                            <div class="col-md-3 text-center">
                                                
                                                <h3><?php echo $b3name?></h3>
                                                
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3 text-center">
                                                
                                                <h3><?php echo $b4name?></h3>
                                                
                                            </div>

                                            <div class="col-md-3 text-center">
                                                
                                                <h3><?php echo $b5name?></h3>
                                                
                                            </div>
                                            <div class="col-md-3 text-center">
                                                
                                                <h3><?php echo $b6name?></h3>
                                                
                                            </div>
                                            <div class="col-md-3 text-center">
                                                
                                                <h3><?php echo $b7name?></h3>
                                                
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 text-center">
                                                
                                                <h3><?php echo $b8name?></h3>
                                                
                                            </div>
                                            <div class="col-md-3 text-center">
                                                
                                                <h3><?php echo $b9name?></h3>
                                                
                                            </div>
                                            <div class="col-md-3 text-center">
                                                
                                                <h3><?php echo $b10name?></h3>
                                                
                                            </div>


                                        </div>
                                    </div>

                                    <div id="tab3" class="tab_single_content">
                                        <div class="row">
                                            <div class="col-md-3 text-center">
                                               
                                                <h3><?php echo $chgname ?></h3>
                                                <small>Best Man</small>
                                                
                                            </div>

                                            <div class="col-md-3 text-center">
                                                
                                                <h3><?php echo $g1name ?></h3>
                                                
                                            </div>

                                            <div class="col-md-3 text-center">
                                                
                                                <h3><?php echo $g2name ?></h3>
                                                
                                            </div>

                                            <div class="col-md-3 text-center">
                                                
                                                <h3><?php echo $g3name ?></h3>
                                               
                                            </div>
                                        </div>
                                            <div class="row-">
                                            <div class="col-md-3 text-center">
                                                
                                                <h3><?php echo $g4name ?></h3>
                                               
                                            </div>

                                            <div class="col-md-3 text-center">
                                                
                                                <h3><?php echo $g5name ?></h3>
                                               
                                            </div>
                                            <div class="col-md-3 text-center">
                                                
                                                <h3><?php echo $g6name ?></h3>
                                               
                                            </div>
                                            <div class="col-md-3 text-center">
                                                
                                                <h3><?php echo $g7name ?></h3>
                                               
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 text-center">
                                                
                                                <h3><?php echo $g8name ?></h3>
                                               
                                            </div>
                                            <div class="col-md-3 text-center">
                                                
                                                <h3><?php echo $g9name ?></h3>
                                               
                                            </div>
                                            <div class="col-md-3 text-center">
                                                
                                                <h3><?php echo $g10name ?></h3>
                                               
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <?php }} ?>
        <!-- content close -->

        <!-- footer begin -->
        <footer>
            <div class="container text-center text-light">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="hs1 wow fadeInUp"><?php echo $bridename ?><span>&amp;</span><?php echo $groomname ?></h2>
                    </div>
                </div>
            </div>

            <div class="subfooter">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-md-12">
                            &copy; Copyright 2022 - 2geda by Dave Animation Studio
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->

        <!--<a href="#" id="back-to-top"></a>
        <div id="preloader">
            <div class="preloader1"></div>
        </div>-->
    </div>

	<audio loop="loop" autoplay="autoplay">
		<source src="music/UntilIFoundYou.mp3" type="audio/mpeg" />
	</audio>

    <!-- Javascript Files
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/easing.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/enquire.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.plugin.js"></script>
    <script src="js/jquery.countdown.js"></script>
    <script src="js/countdown-custom.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/designesia.js"></script>
    <script src="rsvp/form.js"></script>

</body>

</html>