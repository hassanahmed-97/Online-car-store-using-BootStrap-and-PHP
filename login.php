<html>
    <head>
            <link rel="stylesheet" href ="css/bootstrap.css">
            <link rel="stylesheet" href ="mystyle.css">
            <link rel="stylesheet" href ="css/fontawesome.css">
            <script src ="js/jquery.js"></script>
            <script src = "js/bootstrap.js"></script>
            <title>Login</title>
            <style>
            .card { margin-top:150px;}
            body{background: url("black.jpg") no-repeat center center fixed ; background-size:cover;}
            </style>
            <script>
              function validateForm() {
                var x = document.forms["myform"]["email"].value;
                var y =document.forms["myform"]["password"].value;
              
                if (x == "" && y=="") {
                 alert("Please fill Empty Fields");
                  return false;
                }
              }
              </script>
    </head>
    <body>
      
      <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" >
          <img src="loginnav.png" width="350" height=auto class="d-inline-block align-top">
        </a>
        </nav>
            <center><div class="card" style="width: 18rem;">

                    <div class="card-body">
                            <form name="myform" action = "process.php" onsubmit="return validateForm()" method="post">
                                <h1>Login</h1>
                                <?php 
                                if(@$_GET['Empty']==true)
                                {
                                ?>
                                <div class="alert-light text-danger text-center py-2"><?php echo $_GET['Empty'] ?></div>                                
                                <?php
                                }
                                ?>
                                <?php 
                                if(@$_GET['Invalid']==true)
                                {
                                ?>
                                <div class="alert-light text-danger text-center py-2"><?php echo $_GET['Invalid'] ?></div>                                
                                <?php
                                }
                                ?>
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Email address</label>
                                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputPassword1">Password</label>
                                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                                    </div>

                                    <button type="submit" class="btn btn-primary" name ="login">Login</button>
                                  </form>
                    </div>
                  </div>
                  </center>
    </body>
</html>
