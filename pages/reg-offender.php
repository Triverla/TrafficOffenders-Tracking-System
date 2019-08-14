<?php
/**
 * Created by PhpStorm.
 * User: Benaiah
 * Date: 5/14/2019
 * Time: 11:50 PM
 */

if (isset($_POST['submit'])) {
//php code to upload images in jpg, jpeg and png format
if ($_FILES["vpn"]["type"] == "image/jpg" || $_FILES["vpn"]["type"] == "image/jpeg" || $_FILES["vpn"]["type"] == "image/png")
{   
    if (move_uploaded_file($_FILES["vpn"]["tmp_name"], "passports/vpn/".$_FILES["vpn"]["name"]))
    {
    $offid=mysqli_real_escape_string($dbcon, $_POST["off_id"]);
    $vpn1=mysqli_real_escape_string($dbcon, $_POST["vpn1"]);
    $date=mysqli_real_escape_string($dbcon, $_POST["date"]);
    $status=mysqli_real_escape_string($dbcon, $_POST["status"]);
    $vpn = $_FILES["vpn"]["name"];
            $vpn = mysqli_real_escape_string($dbcon, $vpn);
            $ofid = "TTF-OFF-".rand(0,9)."-".rand(999,9999);
            $oid =  $_SESSION['oid'];

    $sql = "INSERT INTO offenders (off_id, offence_id,vehicle_plate_no,vpn,date,officer_id,status) VALUES (
              '$ofid','$offid','$vpn','$vpn1','$date','$oid','$status')";
    $result = mysqli_query($dbcon, $sql);

    if($result)
    {
        header("Location: view-offenders.php?success=0");
    }
    else
    {
        echo mysqli_error($dbcon);
        echo $result;
        header("Location: register-offenders.php?error=1");
    }

}else{
    echo "Error Registering Offender";
    echo mysqli_error($dbcon);
}
        }else{
            echo "Error Registering Student";
            echo mysqli_error($dbcon);
        }
    }

mysqli_close($dbcon);

?>