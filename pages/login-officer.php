<?php
session_start();
require_once('db.php');

if(isset($_POST["submit"]))
{
if(isset($_POST["oid"]))
{
	$officer = $_POST["oid"];
	$officer = stripslashes($officer);
	$officer = mysqli_real_escape_string($dbcon, $officer);
}

if(isset($_POST["password"]))
{
	$password = $_POST["password"];
    $password = stripslashes($password);
	$password = mysqli_real_escape_string($dbcon, $password);
}

$sql = "SELECT * FROM officers WHERE o_id = '$officer' AND password = '$password'";

$result = mysqli_query($dbcon, $sql);

if(mysqli_num_rows($result) == 1)
{
	$_SESSION["oid"] = $officer;
	header("Location: ../index.php");
}
else
{
	echo mysqli_error($dbcon);
	//header('location: ../login.php?error=0');
}
}
?>