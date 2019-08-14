<?php require_once('pages/header.php');

if (isset($_GET['success']) && $_GET['success'] == 0)
$success = 'User Registration Successful :)';
if (isset($_GET['error']) && $_GET['error'] == 1)
$error = "Error Creating User  Try Again... :(";

require_once('pages/db.php');
$query="SELECT * FROM officers";
$result = mysqli_query($dbcon, $query);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
  $row = mysqli_fetch_assoc($result);
  //$vpn = $row["vpn"];
}  
$usroff = mysqli_query($dbcon, "SELECT a.id,b.off_id,a.fname,a.lname,b.offence_id,a.city,b.officer_id,b.date,a.passport,b.vehicle_plate_no,c.penalty,b.status FROM users a,offenders b,off_code_fine c WHERE a.vehicle_plate_no = b.vpn AND b.offence_id=c.off_id");

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
Offenders Details		<ul class="breadcrumb"><li><a href="index.php">Home</a></li>
						<li><a href="#" title="News &amp; Events">View All Offenders</a></li>
						</ul>
		</h1>
</div>
</div>
<div class="row top-padding" id="blog">	
		<div class="col-md-12">
		<div class="col-md-12 text-center wow fadeInUp">
			<h1>Traffic Offenders</h1>
			<span class="title-border-center"></span>
		</div>				
            <div class="col-xs-12 col-sm-12 col-md-12 box-padding" style="padding-left:0px; margin-top:0px;">
            <?php
                        if (isset($success))

                            echo '<div><p class="alert alert-success text-center">', $success, '</p></div><br/>';
                        if (isset($error))

                            echo '<div id="errorbox"><p class="alert alert-danger text-center"><b>ERROR: </b>', $error, '</p></div><br/>';

                        ?>
            <table class="table table-striped table-responsive table-bordered">
            <thead>
            <th>S/N</th>
            <th>User ID</th>
            <th>Offence ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Offence</th>
            <th>City</th>
            <th>Reporting Officer</th>
            <th>Date</th>
            <th>Penalty</th>
            <th>Status</th>
            <th>Passport</th>
            <th>Plate Number</th>
            </thead>
            <tbody>
            <?php
                                if (mysqli_num_rows($usroff) > 0) {
                                    // output data of each row
                                    $i = 0;
                                    while ($row = mysqli_fetch_assoc($usroff))
                                    {
                                        $off1 = $row['offence_id'];
                                    $name = mysqli_query($dbcon, "SELECT off_name FROM off_code_fine WHERE off_id = $off1")->fetch_object()->off_name;
                                    
                                        $i += 1;
                                        echo "<tr>";
                                        echo "<td><i> $i </i></td>";
                                        echo "<td><i>". $row['id']."</i></td>";
                                        echo "<td><i>". $row['off_id']."</i></td>";
                                        echo "<td><i>". $row['fname']."</i></td>";
                                        echo "<td><i>". $row['lname']."</i></td>";
                                        echo "<td><i>". $name."</i></td>";
                                        echo "<td><i>". $row['city']."</i></td>";
                                        echo "<td><i>". $row['officer_id']."</i></td>";
                                        echo "<td><i>". $row['date']."</i></td>";
                                        echo "<td><i>". $row['penalty']."</i></td>";
                                        echo "<td><i>". $row['status']."</i></td>";
                                        echo "<td><img src='passports/users/".$row['passport']."' height='50' width='50'/></td>";
                                        echo "<td><img src='passports/vpn/".$row['vehicle_plate_no']."' height='50' width='50'/></td>";
                                    }
                                }?>
</tbody>
            </table>