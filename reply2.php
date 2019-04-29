<?php 
require_once('connect.php');
session_start();
if(isset($row['User_ID'])){
$Question_ID=$_GET['id'];
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.1.3.css">
</head>

<body>
	<nav class="navbar navbar-expand-md navbar-light">
    <div class="container"> <button class="navbar-toggler navbar-toggler-right border-0" type="button">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar6">
        <ul class="navbar-nav mx-auto">
		 <a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
          <img class="img-fluid d-block rounded-circle" src="/pic/logo.jpg" style="width:140px;height:140px;"></ul>
      </div>
    </div>
    <div class="btn-group">
      <button class="btn dropdown-toggle btn-warning text-white" data-toggle="dropdown" contenteditable="false">ADMIN</button>
      <div class="dropdown-menu"> <a class="dropdown-item border-warning" href="admin_p.php">Admin Profile</a>
        <div class="dropdown-divider"></div> <a class="dropdown-item" href="homepage.php">Log Out</a>
      </div>
    </div>
  </nav>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container justify-content-center"> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar9">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-center" id="navbar9">
        <ul class="navbar-nav">
          <li class="nav-item mx-2"> <a class="nav-link text-light" href="a_booking.php">Booking</a> </li>
          <li class="nav-item mx-2 text-light"> <a class="nav-link text-light" href="user_s.php">User Status</a> </li>
          <li class="nav-item mx-2 text-light"> <a class="nav-link text-light" href="a_contact.php">Contact from User</a> </li>
        </ul>
      </div>
    </div>
  </nav>
  
  
  <form action="ans.php" method="POST">
  <div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
				<?php
				$Question_ID = $_GET['id'];

				$q="select * from question where Question_ID = $Question_ID";
				$result=mysqli_query($mysqli,$q);
				$row=mysqli_fetch_array($result);	
				?>
			

	<div class="py-3 text-center">
    <div class="container">
      <div class="row">
        <div class="mx-auto p-4 col-lg-7 w-50">
	      <center><font size="6"><b>Answer</b></font></center>
		  <br>
		  <br>
            <div class="form-row">
              <div class="form-group col-md-6"> <p style="font-size:20px;">Name: <?php echo $row['First_Name']?></p> </div>
          <div class="form-group col-md-6"> <p style="font-size:20px;">Email: <?php echo $row['Email']?></p> </div>
            </div>
            <div class="form-group" style="text-align:left;"> <p style="font-size:20px;">Question:&nbsp;<?php echo $row['Question'] ?></p></div>
            <div class="form-group" style="text-align:left;"> <p style="font-size:20px;">Answer:&nbsp;<?php echo $row['Answer']?></p> </div> 
			
		
		  <br><a class="btn btn-warning text-light" href="a_contact.php">BACK</a>
        </div>
      </div>
    </div>
  </div> 
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr></tr>
            </thead>
            <tbody>
              <tr>

              </tr>
            </tbody>
          </table>
        </div>
      </div> 
      </div>
    </div>
  </div>
  </form>
  
  
      <br>
  <br>
  <br> 
  <br>
  <br>
  <br>
  <hr>
  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center d-md-flex align-items-center"> <i class="d-block fa fa-stop-circle fa-2x mr-md-5 text-warning"></i>
          <ul class="nav mx-md-auto d-flex justify-content-center">
            <li class="nav-item"> <a class="nav-link active" href="#">&nbsp;</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#">&nbsp;</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#">&nbsp;</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#">&nbsp;</a> </li>
          </ul>
          <div class="row">
            <div class="col-md-12 d-flex align-items-center justify-content-md-between justify-content-center my-2"> <a href="#">
                <i class="d-block fa fa-facebook-official text-muted fa-lg mx-2"></i>
              </a> <a href="#">
                <i class="d-block fa fa-instagram text-muted fa-lg mx-2"></i>
              </a> <a href="#">
                <i class="d-block fa fa-twitter text-muted fa-lg ml-2"></i>
              </a> </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="mt-2 mb-0" contenteditable="false">© 1993-2018 TrainTick. All rights reserved</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>

</html>