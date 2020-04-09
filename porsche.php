<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <title>911 GT3</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">

  <link rel="stylesheet" href ="css/bootstrap.css">
  <link rel="stylesheet" href ="mystyle.css">
  <link rel="stylesheet" href ="css/fontawesome.css">
  <script src ="js/jquery.js"></script>
  <script src = "js/bootstrap.js"></script>

<style>
  body{
    background: url('wallpaper.jpg') no-repeat center center fixed; background-size: cover;
    min-width: 500px;
    }
    .tales{ width: 200px;}
    .carousel-inner{max-height:1250px;width:1000px;}
    .carousel{margin-left:250px;margin-top:200px;max-width:1000px;}
    label {color:white}
  .form-control-plaintext{color:white}
  .modal-body {width:500px;height:400px; background-image: url(logoo.jpg)};


</style>
  </head>
<body>
<?php
    session_start();
    
    ?>
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="anas&hassan.html">
         <img style="margin-left:630px;" src="logosmall.png" width="450" height=auto class="d-inline-block align-top" alt="">
        </a>
      </nav>
    
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
  
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
  </ol>
 
  <div class="carousel-inner" role="listbox">
  
    <div class="carousel-item active">
      <img class="d-block w-100" src="911.jpg"
        alt="First slide">
    </div>
   
    <div class="carousel-item">
      <img class="d-block w-100" src="9111.jpg"
        alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="91111.jpg"
        alt="Third slide">
    </div>
  </div>

  <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> <br> <br> <br> <br> <br> <br> <br> 
1

<table class="table table-striped table-dark" style="width:700px; margin-left: 400px; opacity:0.6;" >
  <p style="font-size:400%;color:white; text-align: center;" >Engine</p>
  <tr>
    <td style="font-size:200%;color:grey;" >Engine layout</td>
    <td style="font-size:200%;color:white;" >Rear engine</td>
  </tr>
  <tr>
    <td style="font-size:200%;color:grey;">Number of cylinders	</td>
    <td style="font-size:200%;color:white;">6</td>
  </tr>
  <tr>
    <td style="font-size:200%;color:grey;">Displacement</td>
    <td style="font-size:200%;color:white;">3,996 cm³</td>
  </tr>
  <tr>
    <td style="font-size:200%;color:grey;">Power (kW)</td>
    <td style="font-size:200%;color:white;">368 kW</td>
  </tr>
  <tr>
    <td style="font-size:200%;color:grey;">Power (hp)</td>
    <td style="font-size:200%;color:white;">500 PS</td>
  </tr>
</table>

<table  class="table table-striped table-dark" style="width:700px; margin-left: 400px; opacity:0.6;">
<p style="font-size:400%;color:white; text-align: center;" >Fuel consumption/Emissions</p>
<tr>
  <td style="font-size:200%;color:grey;">Fuel consumption urban (Manual)</td>
  <td style="font-size:200%;color:white;">19.7 l/100 km</td>
</tr>
<tr>
  <td style="font-size:200%;color:grey;">Fuel consumption non-urban</td>
  <td style="font-size:200%;color:white;">8.8 l/100 km</td>
</tr>
</table>
<table class="table table-striped table-dark" style="width:700px; margin-left: 400px; opacity:0.6;">
<p style="font-size:400%;color:white; text-align: center;" >Body</p>
<tr>
  <td style="font-size:200%;color:grey;">Length</td>
  <td style="font-size:200%;color:white;">4,562 mm</td>
</tr>
<tr>
  <td style="font-size:200%;color:grey;">Width (without mirrors folded)	</td>
  <td style="font-size:200%;color:white;">1.978 mm</td>
</tr>
<tr>
  <td style="font-size:200%;color:grey;">Wheelbase</td>
  <td style="font-size:200%;color:white;">2,457 mm</td>
</tr>
</table>
<table class="table table-striped table-dark" style="width:700px; margin-left: 400px; opacity:0.6;">
  <p style="font-size:400%;color:white; text-align: center;" >Price</p>
  <tr>
    <td style="font-size:200%;color:grey;">Manual</td>
    <td style="font-size:200%;color:white;">from US $ 325,500</td>
  </tr>
</table>
<br>
<br>

<center><button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalCenter">
  BUY THIS BEAUTY
</button></center>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content card card-image" style="url{divo.jpg}">
        <div class="modal-body">
          <h2 style="text-align:center;color:white">BUY</h2>
        <form action="buy.php" method="post"> 
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" name="emaill" id="staticEmail" value="<?php  echo $_SESSION['EmailAddress']; ?>">
      </div>
    </div>
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">Brand</label>
      <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" name="brand"  
        value=" <?php  
        $con = mysqli_connect("localhost","root","","dbproj")  or die (" can not establish connection ");
        $query="select * from cars where price= 325000 ";
        $result=mysqli_query($con,$query) or die ("bad query:$query");
        while($row = mysqli_fetch_assoc($result))
        {
        echo "{$row['brand']}" ;
        }
        ?>" >
      </div>
    </div>
    <div class="form-group row">
      <label for="staticEmail"name="model" class="col-sm-2 col-form-label">Model</label>
      <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" name="model"  
        value=" <?php  
        $con = mysqli_connect("localhost","root","","dbproj")  or die (" can not establish connection ");
        $query="select * from cars where price= 325000 ";
        $result=mysqli_query($con,$query) or die ("bad query:$query");
        while($row = mysqli_fetch_assoc($result))
        {
        echo "{$row['model']}" ;
        }
        ?>" >
      </div>
    </div>
    <div class="form-group row">
      <label for="staticEmail"  class="col-sm-2 col-form-label">Price</label>
      <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" name="price"  
        value=" <?php  
        $con = mysqli_connect("localhost","root","","dbproj")  or die (" can not establish connection ");
        $query="select * from cars where price= 325000 ";
        $result=mysqli_query($con,$query) or die ("bad query:$query");
        while($row = mysqli_fetch_assoc($result))
        {
        echo "{$row['price']}$" ;
        }
        ?>" >
      </div>
    </div>
    <div class="form-group row">
       <div class="col-sm-10 pt-4">
        <input style="width:460px;height:60px" type="submit" class="form-control" value="BUY" >
      </div>
     </div>
    </div>
     </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
