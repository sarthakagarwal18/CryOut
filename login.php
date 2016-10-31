<?php

require_once 'inc/connect.inc.php';

if(isset($_POST['username'])){
	$username = trim($_POST['username']);
	$password = md5(trim($_POST['password']));
	
	$query = "SELECT `id` FROM `users` WHERE `username`='$username' AND `password`='$password' LIMIT 1";
	$query_row = mysqli_fetch_assoc(mysqli_query($link, $query));
	
	if(isset($query_row)){
		echo '<script language="javascript">';
			      echo 'alert("You have been logged in. Database will be provided once the govt approved id is verified")';
				  echo '</script>';
	//	$_SESSION['id'] = $query_row['id'];
	//	header("Location: database.php");
	} else {
		echo '<script language="javascript">';
			      echo 'alert("Incorrect email or password. Please try again")';
				  echo '</script>';
		
	}
} else if(isset($_POST['name'])){
	$name=$_POST['name'];
	$city=$_POST['city'];
	$govtid=$_POST['govtid'];
	$email=trim($_POST['email']);
	$password=md5(trim($_POST['password']));
	$sql = "INSERT INTO users(username, password, name, city, govtid) VALUES ('$email','$password','$name','$city','$govtid')";
				if(mysqli_query($link, $sql))
				{ echo '<script language="javascript">';
			      echo 'alert("You have been registered. Database will be provided once the govt approved id is verified")';
				  echo '</script>';
				// alert("You have been registered");
				} else{
					echo "ERROR: Could not sign up " . mysqli_error($link);
					}   
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CryOut.com">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Shreya, Sarthak Agarwal">
    <!-- The above meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>CryOut</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link href="css/stylesheet.css" rel="stylesheet">
     
  </head>

  <body class="tohelp1">
    
    <nav class="navbar navbar-fixed-top navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="img/logofull2.png"></a>
            </div>
            
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="inactive"><a href="index.html">Home</a></li>
                    <li class="inactive"><a href="FileAComplaint.php">File a Complaint</a></li>
                    <li class="active"><a href="login.php">Help</a></li>
                    <li class="inactive"><a href="forum.html">Forum</a></li>
                </ul>
            </div>
            
        </div>
    </nav>
    
    <section id="whathelp">
      <div class="container-fluid">
      <div class="col-sm-8">
       <div class="row">
          <div class="col-sm-4 col-sm-offset-2 helpus">
          
              <img src="img/ngo1.png" class="img1">
              <h3 class="text1">NGOs</h3>
              <p class="text3">Help the people in need. Log in to get Connected to the people in distress.</p>

           </div>
           <div class="col-sm-4 col-sm-offset-1 helpus">

               <img src="img/police1.png" class="img1">
               <h3 class="text1">Police</h3>
              <p class="text3">Fight Crime and mainatin Law and Order. Log in to get Connected to the people in distress.</p>

           </div>
       </div>
        </div>
        <div class="col-sm-4 login">
           <img src="img/logofull1.png" class="logimg">
           <h3 class="logtext">LOGIN</h3>
            <form method="POST">
                <div class="input-group">
                    <input type="text" class="form-control input-lg inputlogin1" placeholder="Enter Username.." name="username">
                    <input type="password" class="form-control input-lg inputlogin2" placeholder="Enter Password.." name="password">
					<input type="submit" class="btn btn-primary btn-md loginbtn" name="submit" value="Enter">

                </div>
            </form>
        <!--    <a href="" role="button" class="btn btn-primary btn-md loginbtn">Enter</a> -->
            <p class="reg">Not Registered?</p>
            <p class="reghere">Register with us <a href="" class="herelink" data-toggle="modal" data-target="#update">here</a></p>
        </div>
              
              <form class="modal fade" id="update" method="POST">
                  
                  <div class="modal-dialog modal-md">
                      
                      <div class="modal-content">
                          
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                              <h4 class="modal-title">Sign Up</h4>
                          </div>
                          
                                <div class="modal-body" id="group">
                                 
                                     <p class="polngo">Are you in police or an NGO?</p>
                                      <div class="btn-group" id="filterDay" data-toggle="buttons">
                                          <div class="radio-inline" class="toggle" value="1">
                                          <label class="police"><input type="radio" name="optradio">Police</label>
                                        </div>
                                        <div class="radio-inline" class="toggle" value="2">
                                          <label class="ngo"><input type="radio" name="optradio">NGO</label>
                                        </div>
                                      </div>
                                                                     
                                      <div class="form-group">
                                          <label>Name/Name of Organization</label>
                                          <input type="text" placeholder="Enter Name.." class="form-control" name="name">
                                      </div>

                                      <div class="form-group">
                                          <label>City</label>
                                          <input type="text" placeholder="Enter City.." class="form-control" name="city">
                                      </div>
                                      
                                      <div class="form-group">
                                          <label>Provide your Government approved Authorization Code</label>
                                          <input type="text" placeholder="Enter Code.." class="form-control" name='govtid'>
                                      </div>
                                      
                                      <div class="form-group">
                                          <label>Enter Email ID</label>
                                          <input type="text" placeholder="Enter Email.." class="form-control" name='email'>
                                      </div>
                                      
                                      <div class="form-group">
                                          <label>Enter Password</label>
                                          <input type="password" placeholder="Enter Password.." class="form-control" name='password'>
                                      </div>
                                      
                                  </div>
                          
                          <div class="modal-footer">
                              
                              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                              <button type="submit" class="btn btn-primary">Save Changes</button>
                              
                          </div>
                          
                      </div>
                      
                  </div>
                  
              </form>
        </div>
    </section>
    
    <footer class="footer11">
      <div class="container-fluid">
       <div class="row">
           <div class="col-sm-4 col-sm-offset-4 foot">
               <p>&copy; 2016 CryOut</p>
           </div>
       </div>
        </div>
    </footer>

    <script src="js/plugins/jquery.min.js"></script>
    <script src="js/plugins/jquery.backstretch.js"></script>
    <script src="js/plugins/bootstrap.min.js"></script>
    
  </body>
</html>