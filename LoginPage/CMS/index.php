<?php

include('connection.php');

$sql = mysqli_query($connection,"SELECT * FROM myinfo ");

$result = mysqli_fetch_array($sql);

$myname = $result['name'];
$myjob = $result['myjob'];
$myskill = $result['skill'];
$myabout = $result['about'];

if(isset($_POST['change'])){
	$myname = $_POST['myname'];
	$myjob = $_POST['myjob'];
	$myskills = $_POST['myskill'];
	$myabout = $_POST['myabout'];

	$sql = "UPDATE myinfo SET name = '$myname', myjob = '$myjob', skill = '$myskills',about = '$myabout'";

	$query_run = mysqli_query($connection,$sql);

    echo "<script>
        alert('Succesfully Changed!');
        window.location.href='index.php';
        </script>";

}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="sweetalert.min.js"></script>
	  <link rel="stylesheet" type="text/css" href="css/style.css">
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

	  <link rel="preconnect" href="https://fonts.googleapis.com">
	  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	  <link rel="shortcut icon" type="image/jpg" href="images/favicon.ico">
	<title>Profile Dashboard</title>

	<style>

		*{
			font-family: 'Poppins',sans-serif;
		}

		.CMS{
			text-align: center;
			font-family: 'Poppins',monospace;
			margin: 5%;
			color: #fff;
		}

		.modal{
			color: #000000;
		}
		
		img{
			border-radius: 160px;
			border: 3px solid #000000;
		}

		.about-col-2{
    		flex-basis: 60%;
		}

	</style>
</head>

<body>

<ul class="nav justify-content-center p-4 fw-bold" style="background-color: #800000;">

<div class="CMS">

	<ul class="nav">
        <li><a href="dashboard.php"></a></li>
		<li><a href="name.php">Name</a></li>
		<li><a href="WorkExperience.php">Work Experience</a></li>
		<li><a href="Skills.php">Skills</a></li>
		<li><a href="AboutMe.php">About Me</a></li>
	</ul>

	<div class="about-col-1">
        <img src="./images/grad.JPG">
    </div>
	<h1>Welcome to Dashboard</h1><br>
	<p><strong>Name</strong><br><h4><?php echo $myname; ?></h4><br>
	   <strong>Work Experience</strong> <br><?php echo $myjob; ?><br><br>
	   <strong>Skills</strong> <br><?php echo $myskill; ?><br><br>
	   <strong>About Me</strong> <br><?php echo $myabout; ?><br>
	</p>

	<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal">Edit Here</button><br><br>
</div>
<a href="logout.php" class="btn btn-primary">Logout</a>

<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Here</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<form method="POST" action="">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Name</label>
  <input type="text" name="myname" value="<?php echo $myname; ?>" class="form-control" id="exampleFormControlInput1">
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Work Experience</label>
  <input type="text" name="myjob" value="<?php echo $myjob; ?>" class="form-control" id="exampleFormControlInput1" >
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Skills</label>
  <input type="text" name="myskill" value="<?php echo $myskill; ?>" class="form-control" id="exampleFormControlInput1">
</div>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">About</label>
  <textarea class="form-control" name="myabout" id="exampleFormControlTextarea1" rows="6"><?php echo $myabout; ?></textarea>
</div>


      </div>
<button type="submit" name="change" class="btn btn-primary">Update</button>
    </div>
   

    </form>

  </div>
</div>




	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>			