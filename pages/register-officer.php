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
    if (move_uploaded_file($_FILES["passport"]["tmp_name"], "passports/officers/".$_FILES["passport"]["name"]))
    {
    $fname=mysqli_real_escape_string($dbcon, $_POST["fname"]);
    $lname=mysqli_real_escape_string($dbcon, $_POST["lname"]);
    $password=mysqli_real_escape_string($dbcon, $_POST["password"]);
    $phone=mysqli_real_escape_string($dbcon, $_POST["phone"]);
    $email=mysqli_real_escape_string($dbcon, $_POST["email"]);
    $state=mysqli_real_escape_string($dbcon, $_POST["state"]);
    $rank=mysqli_real_escape_string($dbcon, $_POST["rank"]);
    $office=mysqli_real_escape_string($dbcon, $_POST["office"]);
    $passport = $_FILES["passport"]["name"];
            $passport = mysqli_real_escape_string($dbcon, $passport);
            $oid = "FRSC".rand(999,9999);

    $sql = "INSERT INTO officers(o_id, fname,lname,password,email,state,rank,office,phone,passport) VALUES (
              '$oid','$fname','$lname','$password','$email','$state', '$rank','$office','$phone','$passport')";
    $result = mysqli_query($dbcon, $sql);

    if($result)
    {
        header("Location: officers.php?success=0");
    }
    else
    {
        echo mysqli_error($dbcon);
        echo $result;
        header("Location: register-officers.php?error=1");
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