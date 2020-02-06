<!DOCTYPE html>
<html>
<head>
	<title>RUNNING STATUS</title>
    	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<style>
	
		.nav-item{
          margin-right: 10px;
           }
	 
		body{
          background-color: #eee;
      }
      
      .wrapper{
          margin: 10%;
      }
      
      .form-signin{
          max-width: 380px;
          margin: 0 auto;
          background-color: #fff;
          padding: 15px 20px 30px;
          border: 1px solid #e5e5e5;
          border-radius: 10px;
      }
      
      .form-signin, .form-signin-heading, .ab{
          margin-bottom: 35px;
      }
      
      .form-signin input[type="text"], .form-signin input[type="date"]{
          margin-bottom: 25px;
      }
      
      .form-signin .form-control{
          padding: 10px;
      }

	</style>
</head>
<body>

	<nav class="navbar navbar-expand-md navbar-light bg-white sticky-top">
	    <div class="container-fluid">
       <a class="navbar-brand" href="#"><img src="logo1.png" width="90" height="30"></a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
       <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
         <li class="nav-item"><a class="nav-link text-dark" href="index.php">Home</a></li>
         <li class="nav-item"><a class="nav-link text-dark" href="pnr.php">PNR Enquiry</a></li>
         <li class="nav-item"><a class="nav-link text-dark" href="running.php">Running Status</a></li>
         <li class="nav-item"><a class="nav-link text-dark" href="schedule.php">Train Schedule</a></li>
         <li class="nav-item"><a class="nav-link text-dark" href="seat.php">Seat Availablity</a></li>
         <li class="nav-item"><a class="nav-link text-dark" href="register.php">Register</a></li>
         <li class="nav-item"><a class="nav-link text-dark" href="login.php">Login</a></li>
    </ul>
  </div>
 </div>
</nav>

<div class="wrapper">
<form class="form-signin">
    
    <h2 class="form-signin-heading text-center">Running Status</h2>
    <label class="col-form-label"><h6>Enter Train Number:</h6></label> 
    <input type="text" class="form-control" name="" placeholder="Train Number" required="" autofocus="">
    <label ><h6>Enter Journey Date:</h6></label>
    <input type="date" class="form-control" name="" placeholder="" value="<?php echo date('Y-m-d'); ?>" required="" autofocus="">
    
    <button class="btn btn-lg btn-primary btn-block">Check Running Status</button>

    
</form>    
</div>

</body>
</html>