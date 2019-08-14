<?php require_once('pages/header.php');

if (isset($_GET['success']) && $_GET['success'] == 0)
$success = 'User Registration Successful :)';
if (isset($_GET['error']) && $_GET['error'] == 1)
$error = "Error Creating User  Try Again... :(";

require_once('pages/db.php');
$query="SELECT * FROM users";
$result = mysqli_query($dbcon, $query);
?>
<style>
table{
    table-layout: fixed;
    width: 100%;
    font-size: 12px;
}
</style>
</div><div class="col-md-9 " style1="padding-bottom:50px;">
<div class="row section-header" style="background-image:url('assets/img/slider/1.jpg'); margin-left:0; margin-right:0px;">
<div class="col-md-12 col-xs-12">
	<h1 class="wow fadeInUp">
About		<ul class="breadcrumb"><li><a href="index.php">Home</a></li>
						<li><a href="#" title="News &amp; Events">About</a></li>
					
						</ul>
		</h1>
</div>
</div>
<div class="row top-padding" id="blog">	
		<div class="col-md-12">
		<div class="col-md-12 text-center wow fadeInUp">
			<h1>About Traffic Tracking System</h1>
			<span class="title-border-center"></span>
			<p> 
			</div>
What We Do

In February 1988, the Federal Government created the Federal Road Safety Commission through Decree No. 45 of the 1988 as amended by Decree 35 of 1992 referred to in the statute books as the FRSC Act cap 141 Laws of the Federation of Nigeria (LFN). Passed by the National Assembly as Federal Road Safety Commission (establishment) Act 2007.

The Corps Vision

To eradicate road traffic crashes and create safe motoring environment in Nigeria

Mission Statement

The Mission of the Corps is to Regulate, Enforce and Coordinate all Road Traffic and Safety Management activities through: o Sustained public enlightenment o Promotion of stakeholder’s cooperation o Robust data management o Improved vehicle administration o Prompt rescue services o Effective patrol operation

In particular the Commission is charged with the responsibilities for:<br>
<ul>
    - Preventing or minimizing accidents on the highway;<br>
    - Clearing obstructions on any part of the highways;<br>
    - Educating drivers, motorists  and other members of the public generally on the proper use of the highways;<br>
    - Designing and producing the driver’s license to be used by various categories of vehicle operators;<br>
    - Determining, from time to time, the requirements to be satisfied by an applicant for a driver’s licence;<br>
    - Designing and producing vehicle number plates<br>
    - The standardization of highway traffic codes;<br>
    - Giving prompt attention and care to victims of accidents<br>
    - Conducting researches into causes of motor accidents and methods of preventing them and putting into use the result of such researches;<br>
    - Determining and enforcing speed limits for all categories of roads and vehicles and controlling the use of speed limiting devices;<br>
    - Cooperating with bodies or agencies or groups in road safety activities or in prevention of accidents on the highways;<br>
    Making regulations in pursuance of any of the functions assigned to the Corps by or under this Act.<br>
    Regulating the use of sirens, flashers and beacon lights on vehicles other than ambulances and vehicles belonging to the Armed Forces, Nigeria Police, Fire Service and other Para-military agencies;<br>
    Providing roadside and mobile clinics for the treatment of accident victims free of charge;<br>
    Regulating the use of mobile phones by motorists;<br>
    Regulating the use of seat belts and other safety devices;<br>
    Regulating the use of motorcycles on the highway;<br>
    Maintaining the validity period for drivers’ licences which shall be three years subject to renewal at the expiration of the validity period; and<br>

In exercise of the functions, members of the Commission shall have power to arrest and prosecute persons reasonably suspected of having committed any traffic offence.</ul></p>
		</div>				
            <div class="col-xs-12 col-sm-12 col-md-12 box-padding" style="padding-left:0px; margin-top:0px;">

            </div>
            </div>