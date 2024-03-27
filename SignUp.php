<?php
$success=0;
$user=0;

  if ($_SERVER['REQUEST_METHOD']=='POST') {
    include 'connectdb.php';
  	$username =$_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phonenumber = $_POST['phonenumber'];
  
        $sql="select * from 'registration' where username='$username'";
        $result=mysqli_query($con,$sql);
        if($result){
          $num=mysqli_num_rows($results);
          if($num>0){
           //echo "User or email already exist";
           $user=1;

          }else{
            $sql ="insert into 'registration'(username,email,password,phonenumber) VALUES('$username','$email','$password','$phonenumber')";
            $result = mysqli_query($con, $sql);
            if ($result) {
              //echo "Signup Successfully";
              $success=1;
            } else{
              die(mysqli_error($con));
            }
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
	<title>Sign UP</title>
	<link rel="stylesheet" type="text/css"href="SignUp.css">
</head>
<body>

<?php
if($user=1){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Ohh no Sorry</strong> User already exist.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

?>

<?php
if($success=1){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success </strong> Successful Sign-Up.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

?>
	<img src="balance.jpg" width="1700" height="400">
	<h1>Sign Up</h1>
<form id="Signinform" method="post">
	<div>
	<label>Username:</label>
	<input type="name" name="username" id="username" placeholder=" Enter Username" >
</div>
<div>
	<br>
	<label>Email:</label>
	<input type="email" name="email" id="email" placeholder="Enter your email">
</div>
<div>
	<br>
	<label>Password:</label>
	<input type="password" name="password" placeholder="Please enter a Password" id="password">
</div>
<br>
<div>
	<br>
	<label>Phone Number:</label>
	<input type="number" name="phonenumber" id="phonenumber" placeholder="Enter your PhoneNumber">
</div>
<?php
  ?>
<button class="button">SignUp</button>
</form>
<div>Already have an account?
	<a href="logIn.php">LogIn</a>
</div>



</body>
</html>
