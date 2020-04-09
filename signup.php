<html>

<body>

<?php

$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];
$con = mysqli_connect("localhost","root","","dbproj")  or die (" can not establish connection ");
$statment1= "insert into users (Name ,Email,Password)  values ('$name','$email','$password')";
$flag = mysqli_query($con,$statment1);
session_start();
if ($flag)
{ 
   $_SESSION['EmailAddress']=$_POST['email'];
   header("Location: anas&hassan.php");
}
else
{  
    die ("Can not add Record ".mysqli_error());
}
?>


</body>

</html>