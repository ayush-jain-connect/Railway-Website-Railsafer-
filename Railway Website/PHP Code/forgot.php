<?php
$con=mysqli_connect('localhost','id11305926_ayush_jain','ayush@0747','id11305926_railway') or die(mysqli_error($con));

$Username=$_POST['UserName'];
$Dob=$_POST['DOB'];
$NewPassword=$_POST['Password'];

$s="SELECT * FROM register WHERE UserName='$Username' AND DOB='$Dob'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num == 0){
	header('location:forgot_form.php');
}
else
{
  $s = "UPDATE register SET Password='$NewPassword' WHERE UserName='$Username' && DOB='$Dob'";
  $result=mysqli_query($con,$s);
  header('location:login.php');
}
?>