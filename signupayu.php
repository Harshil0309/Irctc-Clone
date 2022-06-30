
<?php
$conn=mysqli_connect("localhost","root","","irctclogin");

	if(!$conn)
	{
		echo "Error!".mysqli_connect_error();
	}
	else
	{
		echo "";
	}
    echo "</br>";
$fstname=$_POST["txt1"];
$lstname=$_POST["txt2"];

$id=$_POST["txt3"];
$pass=$_POST["txt4"];
$username=$_POST["txt5"];
	$qry="insert into userinfo(first_name,last_name,user_name,email_id,password) values('".$fstname."','".$lstname."', '".$username."' , '".$id."','".$pass."')";

	$res=mysqli_query($conn,$qry);
	if($res!="")
	{
		echo "Successfully registered!";
	}
	else
	{
		echo "There was a problem creating that account!";
	}
?>

<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
    <title>
    Irctc-Registration
    </title>
    </head>
<body>
    <a href="dropdown.html"><br>Go back to home page</a>
    <style>
        a{
            text-decoration: none;
            font-family:cabin;
            color:black;
        }
        a:hover{
            text-decoration: underline;
        }
    </style>
    
    </body>
</html>