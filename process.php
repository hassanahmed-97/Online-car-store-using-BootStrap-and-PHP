<html>
<body>

<?php

$con = mysqli_connect("localhost","root","","dbproj")  or die (" can not establish connection ");
if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }

    session_start();
       if(empty($_POST['email']) || empty($_POST['password']))
       {
            header("location:login.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="select * from users where Email='".$_POST['email']."' and Password='".$_POST['password']."'";
            $result=mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['EmailAddress']=$_POST['email'];
                header("location:anas&hassan.php");
            }
            else
            {
                header("location:login.php?Invalid= Please provide correct Email and Password ");
            }
       }


?>
</body>
</html>