<?php 

require_once("session.php");

if(isset($_SESSION['logged']))
{
    if ($_SESSION['logged'] == true)
    {
        if ($_SESSION['account']=="admin") {
                header("Location:index.php");
            }
    }  
    else  {
        header("Location:index.php");
      }  
}

if(isset($_POST['login_submit'])) {
    if(!(isset($_POST['email']))) {
        if(!(isset($_POST['pass']))) {
            location('index');    
        }
    }
}              


?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">


	<style >
		
		*{
			font-family: 'Poppins',sans-serif;
		}

		body{
			background-color: #800000 !important;
		}

		h1{
			margin-top: 10%;
			text-align: center;
			color: #fff;
		}
	</style>

</head>

<body>




<div>


	<h1>Login</h1>
	
<div class="login-box">
 
  <form method="POST" action="">
    <div class="user-box">
      <input type="text" name="email" required="">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="pass" required="">
      <label>Password</label>
    </div>

    <button class="btn btn-warning" style="float: right;">Login</button>
  </form>
</div>


</div>

</body>
</html>