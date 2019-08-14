
<?php require_once('pages/header.php'); ?>
</div><div class="col-md-9 " style1="padding-bottom:50px;">
<div class="row section-header" style="background-image:url('assets/img/slider/1.jpg'); margin-left:0; margin-right:0px;">
<div class="col-md-12 col-xs-12">
	<h1 class="wow fadeInUp">
Search		<ul class="breadcrumb"><li><a href="index.php">Home</a></li>
						<li><a href="#" title="Serach">Search Offenders</a></li>
						</ul>
		</h1>
</div>
</div>
<div class="row top-padding" id="blog">	
		<div class="col-md-12">
		<div class="col-md-12 text-center wow fadeInUp">
			<h1>Offenders Search</h1>
			<span class="title-border-center"></span>
		</div>				
            <div class="col-xs-12 col-sm-12 col-md-12 box-padding" style="padding-left:0px; margin-top:0px;">
            <div id="requests-section">
                <p><i>Search for Users based on <b>Vehicle Plate Number, USERID AND Driver License Number</b></i></p>
                <div id="search-bar">
                    <form action="" method="GET">
                        <input type="text" class="form-control" style="float:left;" name="s" placeholder="Search..." required />
                    </form>
                    <br /><br />
                </div>
                <hr>
                <div id="search-area">
                    <?php
                    require_once('pages/db.php');
                    if(isset($_GET['s'])){
                        $query = $_GET["s"];
                    
                        $query = mysqli_real_escape_string($dbcon, $query);

                        $min_length = 3;

                        if(strlen($query) >= $min_length)
                        {
                        
                            
                            $result = mysqli_query($dbcon, "SELECT * FROM users WHERE (`id` LIKE '%".$query."%') OR (`email` LIKE '%".$query."%') OR (`vehicle_plate_no` LIKE '%".$query."%') OR (`idcardno` LIKE '%".$query."%')");
                           
                            if(mysqli_num_rows($result) > 0)
                            {
                                $no = mysqli_num_rows($result);
                                
                                echo "<div class='alert alert-success'>$no User was found from your search</div>";
                            }else{
                                echo "<div class='alert alert-info text-center'><b>$query</b> did not anything in our recordp</div>";
                            }
                            ?>
                            <table class="table table-striped table-responsive table-bordered" style="font-size: 9px">
                            <thead>
                            <th>S/N</th>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>State</th>
                            <th>LGA</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>ID Card Number</th>
                            <th>Plate Number</th>
                            <th>Date of Birth</th>
                            <th>City</th>
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
                                                        echo "<td style='word-wrap: break-word'><i>". $row['id']."</i></td>";
                                                        echo "<td><i>". $row['fname']."</i></td>";
                                                        echo "<td><i>". $row['lname']."</i></td>";
                                                        echo "<td style='word-wrap: break-word'><i>". $row['email']."</i></td>";
                                                        echo "<td><i>". $row['state']."</i></td>";
                                                        echo "<td><i>". $row['lga']."</i></td>";
                                                        echo "<td><i>". $row['phone']."</i></td>";
                                                        echo "<td><i>". $row['address']."</i></td>";
                                                        echo "<td><i>". $row['idcardno']."</i></td>";
                                                        echo "<td><i>". $row['vehicle_plate_no']."</i></td>";
                                                        echo "<td><i>". $row['dob']."</i></td>";
                                                        echo "<td><i>". $row['city']."</i></td>";
                                                        echo "<td><img src='passports/users/".$row['passport']."' height='50' width='50'/></td>";
                                                    }
                                                    //echo "<a class='btn btn-primary' href=''>View Offence History</a>";
                                                }else{
                                                    echo "<td colspan='14' class='text-center'>No Data Found!></td>";
                                                }?>
                </tbody>
                            </table>
                            <h3>User History</h3>
                            
                            <table class="table table-striped table-responsive table-bordered">
            <thead>
            <th>S/N</th>
            <th>Offence ID</th>
            <th>Offence</th>
            <th>Reporting Officer</th>
            <th>Date</th>
            <th>Status</th>
            <th>Plate Number</th>
            </thead>
            <tbody>
            <?php
             $usroff = mysqli_query($dbcon, "SELECT * FROM offenders WHERE vpn = '$query'");
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
                                        echo "<td><i>". $row['off_id']."</i></td>";
                                        echo "<td><i>". $name."</i></td>";
                                        echo "<td><i>". $row['officer_id']."</i></td>";
                                        echo "<td><i>". $row['date']."</i></td>";
                                        echo "<td><i>". $row['status']."</i></td>";
                                         echo "<td><img src='passports/vpn/".$row['vehicle_plate_no']."' height='50' width='50'/></td>";
                                    }
                                }?>
</tbody>
            </table>
                                            <?php }}?>
            </div>