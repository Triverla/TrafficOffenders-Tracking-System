<?php require_once('pages/header.php'); ?>
<?php include_once('pages/reg-offender.php');?>
</div><div class="col-md-9 " style1="padding-bottom:50px;">
<div class="row section-header" style="background-image:url('assets/img/slider/1.jpg'); margin-left:0; margin-right:0px;">
<div class="col-md-12 col-xs-12">
	<h1 class="wow fadeInUp">
Register		<ul class="breadcrumb"><li><a href="index.php">Home</a></li>
						<li><a href="#" title="News &amp; Events">Register Offenders</a></li>
						</ul>
		</h1>
</div>
</div>
<div class="row top-padding" id="blog">	
		<div class="col-md-12">
		<div class="col-md-12 text-center wow fadeInUp">
			<h1>Register Offender</h1>
			<span class="title-border-center"></span>
		</div>				
            <div class="col-xs-12 col-sm-12 col-md-12 box-padding" style="padding-left:0px; margin-top:0px;">
            <div class="col-md-8 col-md-offset-2">
            <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
            <label>Offence</label>
            <select name="off_id" class="form-control">
            <option value="1">Attempting to corrupt Marshall on duty</option>
            <option value="2">Drinking & Driving</option>
            <option value="3">Assaulting Road Marshall</option>
            <option value="4">Dangerous Driving</option>
            <option value="5">Drivers License Violation</option>
            <option value="6">Do not move violation</option>
            <option value="7">Drivers License Violation</option>
            <option value="8">Do not move violation</option>
            </select>
            </div>
            <div class="form-group">
            <label>Vehicle Plate Number Image</label>
            <input type="file" name="vpn" class="form-control"/>
            </div>
            <div class="form-group">
            <label>Vehicle Plate Number</label>
            <input type="text" name="vpn1" class="form-control"/>
            </div>
            <div class="form-group">
            <label>Date</label>
            <input type="date" name="date" class="form-control"/>
            </div>
            <div class="form-group">
            <label>Status</label>
            <select name="status" class="form-control">
            <option value="Not Cleared">Not Cleared</option>
            <option value="Cleared">Cleared</option>
            <option value="Pending">Pending</option>
            </select>
            </div>
            <div class="form-group">
            <input type="submit" class="btn btn-primary" name="submit" value="Submit"/>
            </div>
            </form>
            </div>
            </div>