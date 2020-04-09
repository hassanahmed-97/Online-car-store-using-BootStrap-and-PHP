<html>
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        
        <link rel="stylesheet" href ="css/bootstrap.css">
        <link rel="stylesheet" href ="mystyle.css">
        <link rel="stylesheet" href ="css/fontawesome.css">
        <script src ="js/jquery.js"></script>
        <script src = "js/bootstrap.js"></script>
        <title>CHARGER</title>

        <style>
     
        body {background-color: #000000; }
        .table-responsive , .btn-colour-1 {width: 100%;overflow-x: auto; overflow-y: hidden;-webkit-overflow-scrolling: touch;-ms-overflow-style: -ms-autohiding-scrollbar; border: 1px solid #ddd;}
        .img-responsive {display: block;max-width: 100%;height: auto;}
        .col-md-12 {width:100% }
        .nav-custom {height: 700px;background-color: #000000; background-image: url("divo1.jpg") ;background-size: 100%; background-repeat: no-repeat;}
        .btn-colour-1, {color: #fff;background-color: transparent;border-color: white;font-weight: bold;}
        .btn-colour-1:hover,
        .btn-colour-1:active,
        .btn-colour-1:focus,
        .btn-colour-1.active ,{background: rgb(255, 255, 255); color:black;border-color: rgb(255, 255, 255);}
        a:link,{background-color: transparent;text-decoration: none}
        a:visited,{color:red;background-color: transparent;}
        a:hover {color:white;background-color: transparent;}
        a:active {background-color: transparent; text-decoration: underline;} 
        .tales {width: 200px; }
        .carousel-inner{width:400px; max-height: 300px !important;}
        .carousel {margin-top:450px;margin-left:330px;max-width: 1000px}
     

        </style>

    </head>

<body>
    <?php
    session_start();
    ?>

    <div class="container">  
        <div class="row row-no-gutters">
          <div class="col-xs-8 col-md-12">



<nav class="navbar nav-custom ">
<div style="margin-left:650px" class="dropdown show">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <?php 
    echo $_SESSION['EmailAddress'];
    ?>
  </a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="logout.php">Log Out</a>
  </div>
</div>      
 <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <a href="astonmartin.html"><img class="d-block w-100" src="aston2.jpg"
          alt="First slide"></a>
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Aston-Martin DBS</h3>
        <p>The V12 power</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view" >
       <a href="bmwM3.html"> <img class="d-block w-100" src="m3web2.jpg"
          alt="Second slide"></a>
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">BMW M3</h3>
        <p>The Iconic Dream car</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
       <a href="Batmobile.html"> <img class="d-block w-100" src="16batmobile2.jpg"
          alt="Third slide"></a>
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Batmobile</h3>
        <p>Special Collectable</p>
      </div>
    </div>
  </div>
 
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

        </nav>
        <div>
          <center><img id= "chooseb" src="chooseb.png" alt="chooseB"></center>
        </div>
        <div id="cartable">
            <table class="table table-striped table-dark">
            
                  <tr>
                    <th scope="col">A</th>
                    <td scope="col">Ferrai</td>
                    <th scope="col">L</th>
                    <th scope="col">R</th>
                  </tr>
                  <tr>
                    <td scope="row">Acura</td>
                    <td>Fiat</td>
                    <td>Lamborghini</td>
                    <td>Renault</td>
                  </tr>
                  <tr>
                    <td scope="row">Alfa Romeo</td>
                    <th>G</th>
                    <td>Land rover</td>
                    <td>Rolls Royce</td>
                  </tr>
                  <tr>
                    <td scope="row"><a href="astoncard.html" role="button">Aston Martin</a></td>
                    <td>Geely</td>
                    <td>Lexus</td>
                    <th>S</th>
                  </tr>
                
                  <tr>
                    <td scope="row">Audi</td>
                    <td>General Motors</td>
                    <th>M</th>
                    <td>Saab</td>
                  </tr>
                  <tr>
                    <th scope="row">B</th>
                    <td>GMC</td>
                    <td>Maserati</td>
                    <td>Subaru</td>
                  </tr>
                  <tr>
                    <td scope="row">Bentley</td>
                    <th>H</th>
                    <td>Mahindra</td>
                    <td>Suzuki</td>
                  </tr>
                  <tr>
                      <td scope="row" ><a href="cards.html" role="button">BMW</a></td>
                      <td>Honda</td>
                      <td>Mclaren</td>
                      <th>T</th>
                    </tr>
                    <tr>
                        <td scope="row">Bugatti</td>
                        <td>Hyundai</td>
                        <td>Mercedes-Benz</td>
                        <td>Tata Motors</td>
                      </tr>
                      <tr>
                          <th scope="row">C</th>
                          <th>I</th>
                          <td>Mini</td>
                          <td>Tesla</td>
                        </tr>
                        <tr>
                            <td scope="row">Candilac</td>
                            <td>Infiniti</td>
                            <td>Mitsubishi</td>
                            <td>Toyota</td>
                          </tr>
                              <td scope="row">Chevorlet</td>
                              <th>J</th>
                              <th>N</th>
                              <th>V</th>
                            </tr>
                            <tr>
                                <td scope="row">Chysler</td>
                                <td>Jaguar</td>
                                <td>Nissan</td>
                                <td>Volkswagen</td>
                              </tr>
                              <tr>
                                  <td scope="row">Citroen</td>
                                  <td>Jeep</td>
                                  <th>P</th>
                                  <td>V</td>
                                </tr> 
                                <tr>
                                    <th scope="row">D</th>
                                    <th>K</th>
                                    <td>Pagani</td>
                                    <td>Volvo</td>
                                  </tr>
                                  <tr>
                                      <td scope="row">Dodge</td>
                                      <td>Kia</td>
                                      <td>Peugeot</td>
                                      <th>Z</th>
                                    </tr>
                                    <tr>
                                        <th scope="row">F</th>
                                        <td>Koenigsegg</td>
                                        <td><a href="porschecard.html" role="button">Porsche</a></td>
                                        <td>Zenvo</td>
                                    </tr> 
              </table>
        </div>
        <div>
            <center><img src="choosec.png" alt="chooseC"></center>
          </div>
        <div id ="movietable">
           <table class="table table-dark">
          
          <tr>
              <th style="background-color: #000000" >Fast And Furious </th>
              <td>69 Dom's charger</td>
              <td>1994 Toyota supra MK IV</td>
              <td>1995 Mitsubishi Eclipse</td>
          </tr>
          <tr>
              <td>1999 Nissan Skyline GT-R</td>
              <td>2002 Mitsubishi Lancer Evo VII</td>
              <td>2004 volkswagen Touran</td>
              <td>2006 Nissan 350z</td>
          </tr>
          <tr>
              <td>1997 Mazda RX-7</td>
              <td>1967 Mustang Fastback (nismo)</td>
              <td></td>
              <td></td>
          </tr>
          <tr>
              <th style="background-color: #000000">Gone in 60 seconds</th>
              <td>1950 Mercury Custom</td>
              <td>1966 Shelby AC Cobra</td>
              <td>1967 Mustang Shelby GT500 (ELEANOR)</td>
          </tr>
          <tr>
              <th style="background-color: #000000">Need For Speed</th>
              <td>Saleen S7</td>
              <td>Lamborghini Sesto Elemnto</td>
              <td>GTA Spano</td>
          </tr>
          <tr>
              <th style="background-color: #000000">Faster</th>
              <td>1968 Chevorlet Chevelle</td>
              <td></td>
              <td></td>
          </tr>
          <tr>
              <th style="background-color: #000000">Italian Job</th>
              <td>1967 Austin Mini Cooper S</td>
              <td></td>
              <td></td>
          </tr>
          <tr>
              <th style="background-color: #000000">Transformers</th>
              <td>2016 Chevorlet Camaro Transformers Edition</td>
              <td></td>
              <td></td>
          </tr>
          <tr>
              <th style="background-color: #000000">James Bond</th>
              <td>Aston Martin DB5</td>
              <td>Aston Martin DB10</td>
              <td>Aston Martin DBS V12</td>
          </tr>
          <tr>
            <th style="background-color: #000000">Batman</th>
            <td>2008 Batmobile (The Tumbler)</td>
            <td><a href="batcard.html" role="button">2016 Batmobile (Batman VS Superman)</a></2016></td>
            <td>1966 Batmobile (The Original)</td>
        </tr>
           </table>
        </div>
        <tfoot >
        <div>
          <center><img src="thanks.png" style="width: 500px"></center>
        </div>
        <center><div><h3 style="color:#fff">Contact Us: 01275831839-01092698591</h3></div></center>
      </tfoot>
    </div>
    </div>
</div>
</body>



</html>
