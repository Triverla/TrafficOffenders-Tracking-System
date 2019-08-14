<?php
session_start();
include 'db.php';

if(!isset($_SESSION["oid"]))
{
	header("Location: login.php");
}

$officer = $_SESSION["oid"];
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en-US"> <!--<![endif]-->
<!-- BEGIN HEAD -->

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Traffic Tracking System | Home</title>
	
		<script>function theChampLoadEvent(e){var t=window.onload;if(typeof window.onload!="function"){window.onload=e}else{window.onload=function(){t();e()}}}</script>
		<script type="text/javascript">var theChampCloseIconPath = 'wp-content/plugins/super-socializer/images/close.png';var heateorSsSDKBlockedMsg = `Your browser is blocking some features of this website. Please follow the instructions at <a href=\'http://support.heateor.com/browser-blocking-social-features/\' target=\'_blank\' style=\'color:#33a9d8\'>http://support.heateor.com/browser-blocking-social-features/</a> to unblock these.`</script>
		<script> var theChampSiteUrl = 'index.html', theChampVerified = 0, theChampEmailPopup = 0; </script>
			<script> var theChampFBKey = '', theChampFBLang = 'en_US', theChampFbLikeMycred = 0, theChampSsga = 0, theChampCommentNotification = 0, theChampHeateorFcmRecentComments = 0, theChampFbIosLogin = 0; </script>
						<script>var theChampFBCommentUrl = 'index.html'; var theChampFBCommentColor = ''; var theChampFBCommentNumPosts = ''; var theChampFBCommentWidth = '100%'; var theChampFBCommentOrderby = ''; var theChampCommentingTabs = "wordpress,facebook,googleplus,disqus", theChampGpCommentsUrl = 'index.html', theChampDisqusShortname = '', theChampScEnabledTabs = 'wordpress,fb', theChampScLabel = 'Leave a reply', theChampScTabLabels = {"wordpress":"Default Comments (0)","fb":"Facebook Comments (<fb:comments-count href=https:\/\/www.pencom.gov.ng\/><\/fb:comments-count>)","googleplus":"G+ Comments","disqus":"Disqus Comments"}, theChampGpCommentsWidth = 0, theChampCommentingId = 'respond'</script>
						<script> var theChampSharingAjaxUrl = 'wp-admin/admin-ajax.html', heateorSsUrlCountFetched = [], heateorSsSharesText = 'Shares', heateorSsShareText = 'Share', theChampPluginIconPath = 'wp-content/plugins/super-socializer/images/logo.png', theChampHorizontalSharingCountEnable = 0, theChampVerticalSharingCountEnable = 0, theChampSharingOffset = -10, theChampCounterOffset = -10, theChampMobileStickySharingEnabled = 0;var heateorSsCopyLinkMessage = "Link copied.";
				</script>
			<style type="text/css">
	.the_champ_horizontal_sharing .theChampSharing{
					color: #fff;
				border-width: 0px;
		border-style: solid;
		border-color: transparent;
	}
		.the_champ_horizontal_sharing .theChampTCBackground{
		color:#666;
	}
		.the_champ_horizontal_sharing .theChampSharing:hover{
				border-color: transparent;
	}
	.the_champ_vertical_sharing .theChampSharing{
					color: #fff;
				border-width: 0px;
		border-style: solid;
		border-color: transparent;
	}
		.the_champ_vertical_sharing .theChampTCBackground{
		color:#666;
	}
		.the_champ_vertical_sharing .theChampSharing:hover{
				border-color: transparent;
	}
	@media screen and (max-width:783px){.the_champ_vertical_sharing{display:none!important}}	</style>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
<style type="text/css">
    .calnk a:hover {
        background-position:0 0;
        text-decoration:none;  
        color:#000000;
        border-bottom:1px dotted #000000;
     }
    .calnk a:visited {
        text-decoration:none;
        color:#000000;
        border-bottom:1px dotted #000000;
    }
    .calnk a {
        text-decoration:none; 
        color:#000000; 
        border-bottom:1px dotted #000000;
    }
    .calnk a span { 
        display:none; 
    }
    .calnk a:hover span {
        color:#333333; 
        background:#F6F79B; 
        display:block;
        position:absolute; 
        margin-top:1px; 
        padding:5px; 
        width:150px; 
        z-index:100;
        line-height:1.2em;
    }
    .calendar-table {
        border:0 !important;
        width:100% !important;
        border-collapse:separate !important;
        border-spacing:2px !important;
    }
    .calendar-heading {
        height:25px;
        text-align:center;
        background-color:#E4EBE3;
    }
    .calendar-next {
        width:20%;
        text-align:center;
        border:none;
    }
    .calendar-prev {
        width:20%;
        text-align:center;
        border:none;
    }
    .calendar-month {
        width:60%;
        text-align:center;
        font-weight:bold;
        border:none;
    }
    .normal-day-heading {
        text-align:center;
        width:25px;
        height:25px;
        font-size:0.8em;
        border:1px solid #DFE6DE;
        background-color:#EBF2EA;
    }
    .weekend-heading {
        text-align:center;
        width:25px;
        height:25px;
        font-size:0.8em;
        border:1px solid #DFE6DE;
        background-color:#EBF2EA;
        color:#FF0000;
    }
    .day-with-date {
        vertical-align:text-top;
        text-align:left;
        width:60px;
        height:60px;
        border:1px solid #DFE6DE;
    }
    .no-events {

    }
    .day-without-date {
        width:60px;
        height:60px;
        border:1px solid #E9F0E8;
    }
    span.weekend {
        color:#FF0000;
    }
    .current-day {
        vertical-align:text-top;
        text-align:left;
        width:60px;
        height:60px;
        border:1px solid #BFBFBF;
        background-color:#E4EBE3;
    }
    span.event {
        font-size:0.75em;
    }
    .kjo-link {
        font-size:0.75em;
        text-align:center;
    }
    .calendar-date-switcher {
        height:25px;
        text-align:center;
        border:1px solid #D6DED5;
        background-color:#E4EBE3;
    }
    .calendar-date-switcher form {
        margin:2px;
    }
    .calendar-date-switcher input {
        border:1px #D6DED5 solid;
        margin:0;
    }
    .calendar-date-switcher input[type=submit] {
        padding:3px 10px;
    }
    .calendar-date-switcher select {
        border:1px #D6DED5 solid;
        margin:0;
    }
    .calnk a:hover span span.event-title {
        padding:0;
        text-align:center;
        font-weight:bold;
        font-size:1.2em;
        margin-left:0px;
    }
    .calnk a:hover span span.event-title-break {
        width:96%;
        text-align:center;
        height:1px;
        margin-top:5px;
        margin-right:2%;
        padding:0;
        background-color:#000000;
        margin-left:0px;
    }
    .calnk a:hover span span.event-content-break {
        width:96%;
        text-align:center;
        height:1px;
        margin-top:5px;
        margin-right:2%;
        padding:0;
        background-color:#000000;
        margin-left:0px;
    }
    .page-upcoming-events {
        font-size:80%;
    }
    .page-todays-events {
        font-size:80%;
    }
    .calendar-table table,
    .calendar-table table tbody,
    .calendar-table table tbody tr,
    .calendar-table table tbody tr td {
        margin:0 !important;
        padding:0 !important;
    }
    table.calendar-table {
        margin-bottom:5px !important;
    }
    .cat-key {
        width:100%;
        margin-top:30px;
        padding:5px;
        border:0 !important;
    }
    .cal-separate {
       border:0 !important;
       margin-top:10px;
    }
    table.cat-key {
       margin-top:5px !important;
       border:1px solid #DFE6DE !important;
       border-collapse:separate !important;
       border-spacing:4px !important;
       margin-left:2px !important;
       width:99.5% !important;
       margin-bottom:5px !important;
    }
    .minical-day {
       background-color:#F6F79B;
    }
    .cat-key td {
       border:0 !important;
    }
</style>
		<style type="text/css" id="custom-header-css">
		#parallax-bg { background-image: url('assets/images/header/header-image-one.html'); background-repeat: repeat-x; background-position: center top; background-attachment: scroll; } #masthead { margin-bottom: 450px; } 
		@media only screen and (max-width: 600px) { #masthead { margin-bottom: 382px; }  }
		</style>
				<style type="text/css" id="custom-background-css">
		body.custom-background { background: none !important; } #content { background-color: #EAEAEA; }
		</style>
			<style type="text/css"></style>
	<link rel="icon" href="assets/uploads/2017/12/cropped-Logo-32x32.png" sizes="32x32" />
<link rel="icon" href="assets/uploads/2017/12/cropped-Logo-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="assets/uploads/2017/12/cropped-Logo-180x180.png" />
	
	<!-- Define Charset -->
	<meta charset="utf-8">
    
    <!-- Responsive Metatag -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Page Description and Author -->
    <meta name="description" content="Traffic Tracker System">
    <meta name="author" content="cranium">
  
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png">
	
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/style3.css" rel="stylesheet" media="screen" id="cpswitch">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Open+Sans:300,400,600,700|Raleway:300,400,500,600" rel="stylesheet">
       
    <link rel="stylesheet" href="assets/assets/owl/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/assets/owl/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/assets/wow/animate.css">
    <link rel="stylesheet" href="assets/assets/portfolio-hover.css">
    <link rel="stylesheet" href="assets/assets/mfp/magnific-popup.css">
    
    <link href="assets/assets/fonts/font-awesome.min.css" rel="stylesheet">
    <link href="assets/assets/themify/themify-icons.css" rel="stylesheet">
    <link href="assets/assets/vegas/vegas.min.css" rel="stylesheet">
	
    <link href="assets/assets/colorpanel-master/dist/jquery.colorpanel.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="page-template-default page page-id-125 group-blog">
		
	<div class="container-fluid" >
  <div class="row">

    <div class="col-md-3 1max-width-1300">
        
		<nav class="navbar" id="static-nav">

			<div class="top-bar">
			  <div class="containerX">
				<div class="row">
				  <div class="col-xs-12 col-sm-12 ">
				  <ul class="left-side list-center">
				  <li><a href="#" class=""><i class="fa fa-phone"></i> +234-9802-2032</a></li>
                  <li><a href="#" class=""><i class="fa fa-user"></i> <?php echo $_SESSION['oid']; ?></a> - <a style="color: red" href="pages/logout.php">Logout</a></li>
				  </ul>
				  </div>
				  
				</div>
			  </div>
			</div>

<div class="nav-padding">
    <div class="containerX">

    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span style="text-align: center; font-size: 9px; line-height: 24px;">Menu</span>
        </button>
        <a class="navbar-brand" href="index.html"><img src="assets/logo.png" style="width:100%; max-width:100%;" alt="National Pension Commission"></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse" style="padding:0px;">
        <div class="menu-main-menu-container">
        <ul id="menu-main-menu" class="nav navbar-nav">
        <li id="menu-item-1506" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1488 current_page_item menu-item-1506"><a href="index.php">Home</a></li>
        <li id="menu-item-1506" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1488 current_page_item menu-item-1506"><a href="about.php">About Us</a></li>
        <li id="menu-item-1506" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1488 current_page_item menu-item-1506"><a href="register.php">Register Users</a></li>
        <li id="menu-item-1506" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1488 current_page_item menu-item-1506"><a href="register-officers.php">Register Officers</a></li>
        <li id="menu-item-1506" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1488 current_page_item menu-item-1506"><a href="register-offenders.php">Register Offender</a></li>

<li id="menu-item-1949" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1949"><a href="#">Actions</a>
<ul class="sub-menu">
	<li id="menu-item-1487" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1487"><a href="payment.php">Make Payment</a></li>
	<li id="menu-item-1305" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1305"><a href="offences.php">view Offences</a></li>
	<li id="menu-item-1306" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1306"><a href="users.php">All Users</a></li>
	<li id="menu-item-1307" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1307"><a href="view-offenders.php">All Offenders</a></li>
	<li id="menu-item-1329" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1329"><a href="officers.php">All Officers</a></li>
	<li id="menu-item-1566" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1566"><a href="site-map/index.html">Site Map</a></li>
</ul>
</li>
<li id="menu-item-923" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-923"><a href="contact-us/index.html">Contact Us</a></li>
</ul></div>				  
				</div><!--/.nav-collapse -->

			  </div>
			</div>
			
			<footer id="footer" class="container-fluid">
				<!-- footer Information -->
				<div class="row footer-padding">
					<div class="col-md-12 cols">
						<div class="footer-newsletter">
							<form action="search.php" method="get">
								<button class="newsletter-btn" type="submit"><i class="fa fa-search"></i></button>
								<input class="newsletter" type="text" name="s" placeholder="Search...">
							</form>
						</div>
					</div>
					<div class="col-md-12 cols hidden-sm hidden-xs">
						<ul class="social-icons list-inline rounded-icons">
							<li><a href="https://www.facebook.com/PenCom.gov"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://twitter.com/PenComNig"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
							<!--<li><a href="https://www.pencom.gov.ng/feed/rdf/"><i class="fa fa-rss"></i></a></li>-->
							<li><a href="feed/newsfeed/index.html" title="News Feed"><i class="fa fa-rss"></i></a></li>
						</ul>
						
					</div>
				</div>

				<!-- Footer Copy Right and Social -->
				<div class="row footer-copy-end hidden-sm hidden-xs">
					<div class="col-sm-12 footer-copyright">
						<a href="#">Traffic Tracker &copy; 2019 Powered by Cranium</a>
					</div>
				</div>
			</footer>
		</nav>
        