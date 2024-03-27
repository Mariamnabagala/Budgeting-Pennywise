<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="home.css">
    <title>User Profile Page</title>
</head>
<body>
   
<nav class="navbar">
    <div class="container">
        <ul>
             <a href="home.php">TRANSACTIONS</a>
            <li><a href="profile.php">Profile</a></li>
        </ul>
    </div>
</nav>
    <div class="profile-page">
        <div class="cover-image"></div>
        <div class="avatar">
        <?php
if (isset($_SESSION['avatar'])) {
    echo "<img src='" . $_SESSION['avatar'] . "' alt='Profile Picture' 
    style='width: 400px; height: 200px ; object-fit: cover; '>";
}
?>


        </div>
        <div class="user-details">
        
            <?php
            if (isset($_SESSION['username']) && isset($_SESSION['email'])) {
                echo "<p>Username: " . $_SESSION['username'] . "</p>";
                echo "<p>Email: " . $_SESSION['email'] . "</p>";
            }
            ?>
        </div>
        <div class="actions">
            <button class="update-button" onclick="location.href='update.php'">Update</button>
            <button class="log_out-button" onclick="location.href='logout.php'">log out</button>
            <button class="delete-account-button" onclick="location.href='delete.php'">Delete Account</button>
            <button class="change-profile-pic-button" onclick="location.href='Up.php'">Change Profile Picture</button>
           
        </div>
    </div>
</body>
</html>
