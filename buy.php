<html>

<body>

<?php
$email=$_POST["emaill"];
$brand=$_POST["brand"];
$model=$_POST["model"];
$price=$_POST["price"];
$con = mysqli_connect("localhost","root","","dbproj")  or die (" can not establish connection ");
$statment1= "insert into bought (email ,brand,model,price)  values ('$email','$brand','$model','$price')";


$flag = mysqli_query($con,$statment1);

if ($flag)
{ 
    header("Location: Success.php");
}
else
{  
    header("location:batmobile.php?Failed= Payment Failed ");
}
?>


</body>

</html>