<?php
/**
 * Created by PhpStorm.
 * User: Benaiah
 * Date: 5/14/2019
 * Time: 11:50 PM
 */

//Database Connection
include 'db.php';

if (isset($_POST['submit'])) {
//php code to upload images in jpg, jpeg and png format
if ($_FILES["passport"]["type"] == "image/jpg" || $_FILES["passport"]["type"] == "image/jpeg" || $_FILES["passport"]["type"] == "image/png")
{   
    if (move_uploaded_file($_FILES["passport"]["tmp_name"], "passports/users/".$_FILES["passport"]["name"]))
    {
    $fname=mysqli_real_escape_string($dbcon, $_POST["fname"]);
    $lname=mysqli_real_escape_string($dbcon, $_POST["lname"]);
    $address=mysqli_real_escape_string($dbcon, $_POST["address"]);
    $phone=mysqli_real_escape_string($dbcon, $_POST["phone"]);
    $email=mysqli_real_escape_string($dbcon, $_POST["email"]);
    $state=mysqli_real_escape_string($dbcon, $_POST["state"]);
    $lga=mysqli_real_escape_string($dbcon, $_POST["lga"]);
    $idcardno=mysqli_real_escape_string($dbcon, $_POST["idcardno"]);
    $vpn=mysqli_real_escape_string($dbcon, $_POST["vpn"]);
    $dob=mysqli_real_escape_string($dbcon, $_POST["dob"]);
    $city=mysqli_real_escape_string($dbcon, $_POST["city"]);
    $passport = $_FILES["passport"]["name"];
            $passport = mysqli_real_escape_string($dbcon, $passport);
            $id = "TTS-USR-".rand(9,99)."-".rand(999,9999);

    $sql = "INSERT INTO users(id, fname,lname,email,state,lga,address,phone,idcardno,vehicle_plate_no,dob,city,passport) VALUES (
              '$id','$fname','$lname','$email','$state', '$lga','$address','$phone','$idcardno','$vpn','$dob','$city','$passport')";
    $result = mysqli_query($dbcon, $sql);

    if($result)
    {
        header("Location: users.php?success=0");
    }
    else
    {
        echo mysqli_error($dbcon);
        echo $result;
        //header("Location: register.php?error=1");
    }

}else{
    echo "Error Registering Student";
    echo mysqli_error($dbcon);
}
        }else{
            echo "Error Registering Student";
            echo mysqli_error($dbcon);
        }
    }

mysqli_close($dbcon);

?>