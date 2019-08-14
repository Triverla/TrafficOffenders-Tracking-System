<?php require_once('pages/header.php');

if (isset($_GET['success']) && $_GET['success'] == 0)
$success = 'User Registration Successful :)';
if (isset($_GET['error']) && $_GET['error'] == 1)
$error = "Error Creating User  Try Again... :(";

require_once('pages/db.php');
$query="SELECT * FROM off_code_fine";
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
Traffic Offences	<ul class="breadcrumb"><li><a href="index.php">Home</a></li>
						<li><a href="#" title="News &amp; Events">View All Offences</a></li>
						</ul>
		</h1>
</div>
</div>
<div class="row top-padding" id="blog">	
		<div class="col-md-12">
		<div class="col-md-12 text-center wow fadeInUp">
			<h1>Traffic Offences & Penalty</h1>
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
            <th>ID</th>
            <th>Offence Name</th>
            <th>Offence Code</th>
            <th>Penalty</th>
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
                                        echo "<td><i>". $row['off_id']."</i></td>";
                                        echo "<td><i>". $row['off_name']."</i></td>";
                                        echo "<td><i>". $row['off_code']."</i></td>";
                                        echo "<td><i>". $row['penalty']."</i></td>";
                                   }
                                }?>
</tbody>
            </table>

            <hr>
            <hr>
            <table width="582" cellspacing="1" cellpadding="9" class="table table-responsive table-bordered table-striped">
  <tbody>
    <tr class="wity">
      <td width="51"  bgcolor="#003366" style="color: white"><div align="left"><strong>S/NO</strong></div></td>
      <td width="385" bgcolor="#003366" style="color: white"><div align="left"><strong>TICK INFRINGEMENT (S)</strong></div></td>
      <td width="145" bgcolor="#003366" style="color: white"><div align="left"><strong>CODE</strong></div></td>
      <td width="112" bgcolor="#003366" style="color: white"><div align="left"><strong>POINTS</strong></div></td>
      <td width="135" bgcolor="#003366" style="color: white"><div align="left"><strong>PENALTY</strong></div></td>
      <td width="387" bgcolor="#003366" style="color: white"><div align="left"><strong>CATEGORY</strong></div></td>
    </tr>
    <tr>
      <td width="51">1</td>
      <td width="385">LIGHT/SIGN VIOLATION</td>
      <td width="145">LSV</td>
      <td width="112">2</td>
      <td width="135">2,000</td>
      <td width="387">2</td>
    </tr>
    <tr>
      <td width="51">2</td>
      <td width="385">ROAD OBSTRUCTION</td>
      <td width="145">ROB</td>
      <td width="112">3</td>
      <td width="135">3,000</td>
      <td width="387">1</td>
    </tr>
    <tr>
      <td width="51">3</td>
      <td width="385">ROUTE VIOLATION</td>
      <td width="145">RTV</td>
      <td width="112">5</td>
      <td width="135">5,000</td>
      <td width="387">1</td>
    </tr>
    <tr>
      <td width="51">4</td>
      <td width="385">SPEED LIMIT VIOLATION</td>
      <td width="145">SLV</td>
      <td width="112">3</td>
      <td width="135">3,000</td>
      <td width="387">1</td>
    </tr>
    <tr>
      <td width="51">5</td>
      <td width="385">VEHICLE LICENCE VIOLATION</td>
      <td width="145">VLV</td>
      <td width="112">3</td>
      <td width="135">3,000</td>
      <td width="387">2</td>
    </tr>
    <tr>
      <td width="51">6</td>
      <td width="385">VEHICLE NUMBER PLATE VIOLATION</td>
      <td width="145">NPV</td>
      <td width="112">3</td>
      <td width="135">3,000</td>
      <td width="387">1</td>
    </tr>
    <tr>
      <td width="51">7</td>
      <td width="385">DRIVER&rsquo;S LICENCE VIOLATION</td>
      <td width="145">DLV</td>
      <td width="112">10</td>
      <td width="135">10,000</td>
      <td width="387">2</td>
    </tr>
    <tr>
      <td width="51">8</td>
      <td width="385">WRONGFUL OVERTAKING</td>
      <td width="145">WOV</td>
      <td width="112">3</td>
      <td width="135">3,000</td>
      <td width="387">1</td>
    </tr>
    <tr>
      <td width="51">9</td>
      <td width="385">ROAD MARKING VIOLATION</td>
      <td width="145">RMV</td>
      <td width="112">5</td>
      <td width="135">5,000</td>
      <td width="387">1</td>
    </tr>
    <tr>
      <td width="51">10</td>
      <td width="385">CAUTION SIGN VIOLATION</td>
      <td width="145">CSV</td>
      <td width="112">3</td>
      <td width="135">3,000</td>
      <td width="387">3</td>
    </tr>
    <tr>
      <td width="51">11</td>
      <td width="385">DANGEROUS DRIVING</td>
      <td width="145">DGD</td>
      <td width="112">10</td>
      <td width="135">50,000</td>
      <td width="387">1</td>
    </tr>
    <tr>
      <td width="51">12</td>
      <td width="385">DRIVING UNDER ALCOHOL OR DRUG INFLUENCE</td>
      <td width="145">DUI</td>
      <td width="112">5</td>
      <td width="135">5,000</td>
      <td width="387">2</td>
    </tr>
    <tr>
      <td width="51">13</td>
      <td width="385">OPERATING A VEHICLE WITH FORGED DOCUMENTS</td>
      <td width="145">OFD</td>
      <td width="112">10</td>
      <td width="135">20,000</td>
      <td width="387">2</td>
    </tr>
    <tr>
      <td width="51">14</td>
      <td width="385">UNAUTHORIZED REMOVAL OF OR TAMPERING WITH ROAD SIGNS</td>
      <td width="145">UTS</td>
      <td width="112">5</td>
      <td width="135">5,000</td>
      <td width="387">1</td>
    </tr>
    <tr>
      <td width="51">15</td>
      <td width="385">DO NOT MOVE VIOLATION</td>
      <td width="145">DNM</td>
      <td width="112">2</td>
      <td width="135">2,000</td>
      <td width="387">2</td>
    </tr>
    <tr>
      <td width="51">16</td>
      <td width="385">INADEQUATE CONSTRUCTION WARNING</td>
      <td width="145">ICW</td>
      <td width="112">–</td>
      <td width="135">50,000</td>
      <td width="387">1</td>
    </tr>
    <tr>
      <td width="51">17</td>
      <td width="385">CONSTRUCTION AREA SPEED LIMIT VIOLATION</td>
      <td width="145">CAV</td>
      <td width="112">3</td>
      <td width="135">3,000</td>
      <td width="387">1</td>
    </tr>
    <tr>
      <td width="51">18</td>
      <td width="385">FAILURE TO MOVE OVER</td>
      <td width="145">FMO</td>
      <td width="112">3</td>
      <td width="135">3,000</td>
      <td width="387">1</td>
    </tr>
    <tr>
      <td width="51">19</td>
      <td width="385">FAILURE TO COVER UNSTABLE MATERIALS</td>
      <td width="145">FCM</td>
      <td width="112">5</td>
      <td width="135">5,000</td>
      <td width="387">1</td>
    </tr>
    <tr>
      <td width="51">20</td>
      <td width="385">OVERLOADING</td>
      <td width="145">OVL</td>
      <td width="112">10</td>
      <td width="135">10,000</td>
      <td width="387">1</td>
    </tr>
    <tr>
      <td width="51">21</td>
      <td width="385">DRIVING WITH WORN-OUT TYRE OR WITHOUT SPARE TYRE</td>
      <td width="145">TYY</td>
      <td width="112">3</td>
      <td width="135">3,000</td>
      <td width="387">1</td>
    </tr>
    <tr>
      <td width="51">22</td>
      <td width="385">DRIVING WITHOUT OR WITH SHATTERED WINDSCREEN</td>
      <td width="145">VWV</td>
      <td width="112">2</td>
      <td width="135">2,000</td>
      <td width="387">1</td>
    </tr>
    <tr>
      <td width="51">23</td>
      <td width="385">FAILURE TO FIX RED FLAG ON PROJECTED LOAD</td>
      <td width="145">FFF</td>
      <td width="112">3</td>
      <td width="135">3,000</td>
      <td width="387">1</td>
    </tr>
    <tr>
      <td width="51">24</td>
      <td width="385">FAILURE TO REPORT ACCIDENT</td>
      <td width="145">FRC</td>
      <td width="112">10</td>
      <td width="135">20,000</td>
      <td width="387">1</td>
    </tr>
    <tr>
      <td width="51">25</td>
      <td width="385">MEDICAL PERSONNEL OR HOSPITAL REJECTION OF ROAD ACCIDENT VICTIM</td>
      <td width="145">RCV</td>
      <td width="112">–</td>
      <td width="135">50,000</td>
      <td width="387">1</td>
    </tr>
    <tr>
      <td width="51">26</td>
      <td width="385">ASSAULTING MARSHAL ON DUTY</td>
      <td width="145">AMD</td>
      <td width="112">10</td>
      <td width="135">10,000</td>
      <td width="387">2</td>
    </tr>
    <tr>
      <td width="51">27</td>
      <td width="385">OBSTRUCTING MARSHAL ON DUTY</td>
      <td width="145">OMD</td>
      <td width="112">2</td>
      <td width="135">2,000</td>
      <td width="387">2</td>
    </tr>
    <tr>
      <td width="51">28</td>
      <td width="385">ATTEMPTING TO CORRUPT MARSHAL</td>
      <td width="145">ACS</td>
      <td width="112">10</td>
      <td width="135">10,000</td>
      <td width="387">2</td>
    </tr>
    <tr>
      <td width="51">29</td>
      <td width="385">CUSTODY FEE</td>
      <td colspan="3">N200 per day after 24 hours</td>
      <td width="387">–</td>
    </tr>
    <tr>
      <td width="51">30</td>
      <td width="385">DRIVING WITHOUT SPECIFIED FIRE EXTINGUISHER</td>
      <td width="145">FEV</td>
      <td width="112">3</td>
      <td width="135">3,000</td>
      <td width="387">3</td>
    </tr>
    <tr>
      <td width="51">31</td>
      <td width="385">DRIVING A COMMERCIAL VEHICLE WITHOUT PASSENGER MANIFEST</td>
      <td width="145">PMV</td>
      <td width="112">10</td>
      <td width="135">10,000</td>
      <td width="387">2</td>
    </tr>
    <tr>
      <td width="51">32</td>
      <td width="385">DRIVING WITHOUT SEAT BELT</td>
      <td width="145">SUV</td>
      <td width="112">2</td>
      <td width="135">2,000</td>
      <td width="387">1</td>
    </tr>
    <tr>
      <td width="51">33</td>
      <td width="385">USE OF PHONE WHILE DRIVING</td>
      <td width="145">UPD</td>
      <td width="112">4</td>
      <td width="135">4,000</td>
      <td width="387">1</td>
    </tr>
    <tr>
      <td width="51">34</td>
      <td width="385">DRIVING A VEHICLE WHILE UNDER 18 YEARS</td>
      <td width="145">UDR</td>
      <td width="112">–</td>
      <td width="135">2,000</td>
      <td width="387">1</td>
    </tr>
    <tr>
      <td width="51">35</td>
      <td width="385">RIDING MOTORCYCLE WITHOUT A CRASH HELMET</td>
      <td width="145">RMH</td>
      <td width="112">2</td>
      <td width="135">2,000</td>
      <td width="387">1</td>
    </tr>
    <tr>
      <td width="51">36</td>
      <td width="385">EXCESSIVE SMOKE EMISSION</td>
      <td width="145">ESE</td>
      <td width="112">5</td>
      <td width="135">5,000</td>
      <td width="387">1</td>
    </tr>
    <tr>
      <td width="51">37</td>
      <td width="385">MECHANICALLY DEFICIENT VEHICLE</td>
      <td width="145">MDV</td>
      <td width="112">5</td>
      <td width="135">5,000</td>
      <td width="387">1</td>
    </tr>
    <tr>
      <td width="51">38</td>
      <td width="385">FAILURE TO INSTALL SPEED LIMITING DEVICE</td>
      <td width="145">FSLD</td>
      <td width="112">3</td>
      <td width="135">3,000</td>
      <td width="387">2</td>
    </tr>
  </tbody>


</table>