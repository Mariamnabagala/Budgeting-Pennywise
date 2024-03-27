<?php
$login=0;
$Invalid=0;
  if ($_SERVER['REQUEST_METHOD']=='POST') {
    include 'connectdb.php';
  	$username =$_POST['username'];
    $password = $_POST['password'];
    
        $sql="select * from 'registration' where username='$username' and password='$password'";
        $result=mysqli_query($con,$sql);
        if($result){
          $num=mysqli_num_rows($results);
          if($num>0){
           $login=1;
           session_start();
           $_SESSION['username']=$username;
           header('location:home.php');

          }else{
            $Invalid=1;
          }
        }
    
  }

?> 

<!DOCTYPE html>
<html lang="en">
	
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
    <link rel="stylesheet" type="text/css" href="SignUp.css">
</head>
<body>

<?php
if($login=1){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success </strong> Successful Log-In.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

?>

<?php
if($Invalid=1){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Invalid </strong> Invalid Credentials.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

?>
  <img src="personal.jpg"width="1700" height="400">
	<div class="container">
		<h1>Login To Our Website</h1>

		<form method="post" id="LogInForm">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" placeholder="Enter your username" name="username">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Enter your password" name="password">
  </div>
  
  <button type="submit" class="loginbutton" >Login</button>
</form>
<div>Don't have an account?
	<a href="signup.php">SignUp</a>
</div>

	</div>

</body>
</html>
