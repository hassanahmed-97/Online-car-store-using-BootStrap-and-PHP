<html>
  <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
    <link rel="stylesheet" href ="css/bootstrap.css">
    <link rel="stylesheet" href ="mystyle.css">
    <link rel="stylesheet" href ="css/fontawesome.css">
    <script src ="js/jquery.js"></script>
    <script src = "js/bootstrap.js"></script>
    <title>BMW M3 SERIES</title>

<style media="screen">
.container {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

body{
background: url('m3.jpg') no-repeat center center fixed;
background-size: cover;

}

.m3{
margin-left: 200px;
margin-top: 150px;
}
.description{

  font-size: 20px;
  margin-top: 100px;
  margin-left: 200px;

}
.info{
  float: right;
  margin-right: 250px;
}
.design{
  margin-top: 500px;
  margin-left: 250px;
}
.M{
  margin-top: 250px;
  margin-left: 245px;
}
.H{
  margin-top: 100px;
margin-left: 750px;
}
.P{
margin-left: 650px;
}
.drift{
  margin-left: 120px;
}
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
             <img style="margin-left:700x;" src="logosmall.png" width="450" height=auto class="d-inline-block align-top" alt="">
            </a>
          </nav>

<div class="container">
<div class="row">
<div class="col-md-12">

<img src="m3web.jpg" style="width:1000px; height:450px;margin-top: 100px">

  
<h4 style="color:white;margin-top:50px">
  An uncompromising four-door high-performance sports car of breathtaking design.
  With an array of motorsport-inspired technical innovations. For even greater dynamism
  and evenmore agile handling. For adrenalin-steeped driving moments where one thing instantly
  becomes clear: This is about setting personal bests – the BMW M3 Sedan.
</h4>

</div>
</div>
</div>

<div class="info">
<pre style="color:white;">

    <h4>Acceleration 0-100 km/h in s              4.3 (4.1)</h4>
    <h4>Max. output in kW (hp) at 1/min           317 (431)/5,500–7,300 </h4>
    <h4>Combined consumption in l/100 km          9.1 (8.3) </h4>
    <h4>CO2 emission in g/km                      209 (194) </h4>
    <h4>Unladen weight EU in kg                   1,635 (1,660) </h4>
</pre>
</div>

<div class="design">
<p>
<img src="bmw.jpg" alt="not found!" style="float:left">
<h1 style="color:white;">Dynamic design</h1>
<h5 style="color:white;">the BMW M3 Sedan: extremely sporty, with an iconic presence and a performance <br>
capacity steeped in efficient dynamics. Every design element, from the large air inlets and <br>
the expressive light-alloy wheels to the athletic rear, underscores the sheer power of this <br>
high-performance sports car.</p>
</h5>
</div>

<div class="M">
  <h1 style="color:white;">M COMPETITION PACKAGE.</h1>
  <h5 style="color:white;">Thanks to an enhanced engine output and a specially tuned Adaptive M suspension, the M Competition package offers a noticeable increase in driving dynamics. The M sports exhaust <br>
system with black, chrome-plated twin tailpipes creates a powerful, full engine sound.<br>
The package also includes M lightweight sport seats and exclusive 20" M light alloy wheels with mixed tyres.</h5>
</div>

<div class="H">

<p style="font-size:800%; color:white;">450 HP</p>
</div>

<div class="P">
  <h5 style="color:white;" >
    With the optional M Competition package, the BMW M3 Sedan extracts even more <br>
    dynamism from the 331 kW engine. Also inclusive: specially matched Adaptive M <br>
    suspension, burnished 20” M light-alloy wheels Star-Spoke style 666 M with mixed tyres <br>
    and an M Sport exhaust system for an even more distinctive sound.
  </h5>
</div>
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
      $query="select * from cars where price= 115000 ";
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
      $query="select * from cars where price= 115000 ";
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
      $query="select * from cars where price= 115000 ";
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
