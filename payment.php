<?php require_once('pages/header.php');

if (isset($_GET['success']) && $_GET['success'] == 0)
$success = 'Payment Successful :)';
if (isset($_GET['error']) && $_GET['error'] == 1)
$error = "Error! Somethingg went wrong  Try Again... :(";

require_once('pages/db.php');
?>

</div><div class="col-md-9 " style1="padding-bottom:50px;">
<div class="row section-header" style="background-image:url('assets/img/slider/1.jpg'); margin-left:0; margin-right:0px;">
<div class="col-md-12 col-xs-12">
	<h1 class="wow fadeInUp">
Make Payment	<ul class="breadcrumb"><li><a href="index.php">Home</a></li>
						<li><a href="#" title="News &amp; Events">Payments</a></li>
						</ul>
		</h1>
</div>
</div>
<div class="row top-padding" id="blog">	
		<div class="col-md-12">
		<div class="col-md-12 text-center wow fadeInUp">
			<h1>Make Payment</h1>
			<span class="title-border-center"></span>
		</div>				
            <div class="col-xs-12 col-sm-12 col-md-12 box-padding" style="padding-left:0px; margin-top:0px;">
					<form action="" method="">
					<fieldset>
					<div class="col-md-6 col-md-offset-3 well">
					<div class="row">
					<div class="form-group">
					<label>Card Number</label>
					<input type="text" class="form-control" Placeholder="0000-1111-2222-3333(Valid Card Number)"/>
					</div>
					</div>
					<div class="col-md-12">
					<div class="col-md-4">
					<div class="form-group">
					<label>Expiry Month</label>
					<input type="number" class="form-control" Placeholder="Month"/>
					</div>
					</div>
					<div class="col-md-4">
					<div class="form-group">
					<label>Expiry Year</label>
					<input type="number" class="form-control" Placeholder="Year"/>
					</div>
					</div>
					<div class="col-md-4">
					<div class="form-group">
					<label>CV Code</label>
					<input type="number" class="form-control" Placeholder="CV Code"/>
					</div>
					</div>
					<div class="form-group">
					<label>Amount</label>
					<input type="number" class="form-control" Placeholder="Amount"/>
					</div>
					<div class="">
					<input type="button" class="form-control btn btn-primary" value="Submit"/>
					</div>
					</div>
					</div>
					</fieldset>
					</form>
            </div>
            </div>