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
    <title>16 Batmobile</title>
    

<style media="screen">
  #maincard{width:700px;margin-left:400px;margin-top:70px;height:900;}
 
  body{background: url('16batmobile.jpg') no-repeat center center fixed;background-size: cover;}
  label {color:white}
  .form-control-plaintext{color:white}
  .modal-body {
   width:500px;height:400px; background-image: url(logoo.jpg);
}
  
  </style>

  <body>
    <?php
    session_start();
    
    ?>
      <nav class="navbar navbar-dark bg-dark">
          <a class="navbar-brand" href="anas&hassan.php">
             <img style="margin-left:630px;" src="logosmall.png" width="450" height=auto class="d-inline-block align-top" alt="">
          </a>
          </nav>
      <div class="card"id="maincard">
        
              <div >
                  <video width="700" height="300" controls>
                    <source src="batmobile.mp4" type="video/mp4">
                  </video> 
              
          </div>
          <div class="card-body">
            <h5 class="card-title"><span style="font-size:30">Wheels of justice:</span> <br>Take a closer look at <br>the new 205-mph,7,000-pound Batmobile</h5><br>
            <p style="font-size:120% "class="card-text">At the 2015 Licensing Expo in Las Vegas, Warner Brothers and DC Entertainment put the vehicle on 
                full display, giving us a closer look at the car’s controls and what lurks under the aggressive armor.<br>
         
               “Single-handedly designed and fabricated in near complete seclusion by the Batman,
                this infamous pursuit and capture vehicle has earned its reputation as the apex predator on the mean
                 streets of Gotham City,” said Warner Bros.<br><br>
                “Over powered with an unmatched hybrid of prototype military and civilian
                performance technologies, this top machine has been estimated to reach speeds of up to 205 mph. 
                The Batmobile’s imposing defense capabilities, supported by stolen Wayne Industries technologies, 
                have been integrated with the latest in covert military grade armaments, stealth and active protection systems.”</p>
            
          </div>
          <center><button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalCenter">
          BUY THIS BEAUTY
          </button></center>
          </div>

        


<!-- Modal -->
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
      $query="select * from cars where price= 1500000 ";
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
      $query="select * from cars where price= 1500000 ";
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
      $query="select * from cars where price= 1500000 ";
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