<?php

session_start();

$con=mysqli_connect('localhost','id11305926_ayush_jain','ayush@0747','id11305926_railway') or die(mysqli_error($con));

$Username=$_SESSION['UserName'];
$Password=$_POST['Password'];
$Firstname=$_POST['FirstName'];
$Middlename=$_POST['MiddleName'];
$Lastname=$_POST['LastName'];
$Dob=$_POST['DOB'];
$Gender=$_POST['Gender'];
$Occupation=$_POST['Occupation'];
$Adhaar=$_POST['AdhaarNumber'];
$Pan=$_POST['PanNumber'];
$Email=$_POST['Email'];
$Phone=$_POST['Phone'];
$City=$_POST['City'];
$Country=$_POST['Country'];
$Address=$_POST['Address'];

$s="SELECT * FROM register WHERE UserName='$Username'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num == 1){
	$sql = "UPDATE register SET Password='$Password', FirstName='$Firstname', MiddleName='$Middlename', LastName='$Lastname', Gender='$Gender', DOB='$Dob', Email='$Email', Phone='$Phone', Occupation='$Occupation', AdhaarNumber='$Adhaar', PanNumber='$Pan', City='$City', Country='$Country', Address='$Address' WHERE UserName='$Username'";
    $result=mysqli_query($con,$sql);
    if($result){ 
      header('location:home.php'); 
    } else { 
      header('loaction:update.php'); 
} 
}
?>
