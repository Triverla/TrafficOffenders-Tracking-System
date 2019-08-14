<?php include_once('pages/register-officer.php');?>
<?php require_once('pages/header.php'); ?>
</div><div class="col-md-9 " style1="padding-bottom:50px;">
<div class="row section-header" style="background-image:url('assets/img/slider/1.jpg'); margin-left:0; margin-right:0px;">
<div class="col-md-12 col-xs-12">
	<h1 class="wow fadeInUp">
Register		<ul class="breadcrumb"><li><a href="index.php">Home</a></li>
						<li><a href="#" title="News &amp; Events">Officer Registeration</a></li>
						</ul>
		</h1>
</div>
</div>
<div class="row top-padding" id="blog">	
		<div class="col-md-12">
		<div class="col-md-12 text-center wow fadeInUp">
			<h1>Register Officers</h1>
			<span class="title-border-center"></span>
		</div>				
            <div class="col-xs-12 col-sm-12 col-md-12 box-padding" style="padding-left:0px; margin-top:0px;">
            <div class="col-md-8 col-md-offset-2">
            <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
            <label>First Name</label>
            <input type="text" name="fname" class="form-control"/>
            </div>
            <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="lname" class="form-control"/>
            </div>
            <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control"/>
            </div>
            <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control"/>
            </div>
            <div class="form-group">
            <label>Rank</label>
            <input type="text" name="rank" class="form-control"/>
            </div>
            <div class="form-group">
            <label>State</label>
            <select name="state" class="form-control">
            <option value="benue">Benue</option>
            <option value="nasarawa">Nasarawa</option>
            <option value="taraba">Taraba</option>
            <option value="abuja">Abuja</option>
            <option value="lagos">lagos</option>
            <option value="kano">kano</option>
            </select>
            </div>
            <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control"/>
            </div>
            <div class="form-group">
            <label>Office</label>
            <input type="text" name="office" class="form-control"/>
            </div>
            <div class="form-group">
            <label>Passport</label>
            <input type="file" name="passport" class="form-control"/>
            </div>
            <div class="form-group">
            <input type="submit" class="btn btn-primary" name="submit" value="Submit"/>
            </div>
            </form>
            </div>
            </div>