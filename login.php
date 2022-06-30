<?php
$connection=mysqli_connect("localhost","root","","irctclogin");
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'irctclogin');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
session_start();
if (isset($_POST['txt1']) and isset($_POST['txt2'])){
$username = $_POST['txt1'];
$pass = $_POST['txt2'];
$query = "SELECT * FROM userinfo WHERE user_name='$username' and password='$pass'";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
if ($count == 1){
$_SESSION['user_name'] = $username;
}else{
$fmsg = "Invalid Login Credentials.";
}
}
if (isset($_SESSION['user_name'])){
$username = $_SESSION['user_name'];
}
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
    <title>
    Welcome!
    </title>
    </head>
<body>
    
    <div class="content"><h1>Welcome</h1><p class="name"><u><?php echo $username ?></u></p>This is the members area.<br><a href="logout.php">Logout</a>
    <a href="dropdown.html"><br>Go back to home page</a></div>
    </body>
</html>