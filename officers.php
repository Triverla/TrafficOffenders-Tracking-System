<?php require_once('pages/header.php');

if (isset($_GET['success']) && $_GET['success'] == 0)
$success = 'User Registration Successful :)';
if (isset($_GET['error']) && $_GET['error'] == 1)
$error = "Error Creating User  Try Again... :(";

require_once('pages/db.php');
$query="SELECT * FROM officers";
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
View Officers		<ul class="breadcrumb"><li><a href="index.php">Home</a></li>
						<li><a href="#" title="News &amp; Events">View All Officers</a></li>
						</ul>
		</h1>
</div>
</div>
<div class="row top-padding" id="blog">	
		<div class="col-md-12">
		<div class="col-md-12 text-center wow fadeInUp">
			<h1>All Officers</h1>
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
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>State</th>
            <th>Rank</th>
            <th>Phone</th>
            <th>Office</th>
            <th>Passport</th>
            </thead>
            <tbody>
            <?php
                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    $i = 0;
                                    while ($row = mysqli_fetch_assoc($result))
                                    {
                                        $i += 1;
                                        echo "<tr>";
                                        echo "<td><i> $i </i></td>";
                                        echo "<td><i>". $row['o_id']."</i></td>";
                                        echo "<td><i>". $row['fname']."</i></td>";
                                        echo "<td><i>". $row['lname']."</i></td>";
                                        echo "<td style='word-wrap: break-word'><i>". $row['email']."</i></td>";
                                        echo "<td><i>". $row['state']."</i></td>";
                                        echo "<td><i>". $row['rank']."</i></td>";
                                        echo "<td><i>". $row['phone']."</i></td>";
                                        echo "<td><i>". $row['office']."</i></td>";
                                        echo "<td><img src='passports/officers/".$row['passport']."' height='50' width='50'/></td>";
                                    }
                                }?>
</tbody>
            </table>