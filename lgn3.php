<html>
<head>
    <title>Irctc-Log In</title>
    <link rel="stylesheet" href="lgn3.css">
    
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
    </head>
<body  >
    <div class="header">
        <div class="headline">
            <p align="center">Login</p>  
            </div>  
        
        
    </div>

    <center><img src="logo.jpg" height="180" width="350" style="margin-top:-30px;"></center>
    <center s ><div class="box" style="position: relative; margin-top: 200px"  >
    <form method="POST" action="signup.php" name="frm" onsubmit="return validatesignup()" style="background-image: url(plain.jpg);">
        <br>
        <label for="txt1" style="margin-left:-268px; " >Username</label><br>
        <input type="text" name="txt1" placeholder="Username.."><br><br>
        <label for="txt2" style="margin-left:-270px;">Password</label><br>
        <input type="text" name="txt2" placeholder="Password.."><br><br>
       
        <p style="font-family: cabin; font-size: 9pt; text-align-last:center; color:rgb(131, 132, 135);">By clicking Login , you agree to the Terms and policy of Irctc.</p>
        <input type="submit" value="Login" style="font-family:worl Sans;font-size: 12pt; " >
        </form>
    
        </div></center>

        <style>
    .header{
            background-color: black;
            margin-bottom: 750px;
            position: absolute;
            
            top: 0;
            left: 0;
            height: 300px;
            width: 100%;
            line-height: 200px;
            color: white;
        }
    .headline{
            font-style: italic;
            font-size: 60px;
            color: white;
        }
        .text{
            position: relative;
      margin-top: 330px;
        }
    </style>
    <script>


    function validatesignup(){
        var a=frm.txt1.value;
        var b=frm.txt2.value;
        
        
        if(a==""){
            alert("Please enter your first name .");
            return false;
        }
        if(b==""){
            alert("Please enter  your last name .");
            return false;
        }
        
    }
    
    </script>
    <hr>
    <p align="center" > Copyright © 2019 -<a href="dropdown.html"> 
 www.irctc.co.in.</a> All Rights Reserved

Designed and Hosted by CRIS IRCTC</p>

    </body>
</html>
<?php
if(isset($_POST["submit"]))
 {
    $conn=mysqli_connect("localhost","root","","irctclogin");

    if (!$conn)
    {
        echo "Some error !!".mysqli_connect_error();
    }
    else
    {
        echo "Database connected";
    }
$name=$_POST["txt1"];
$pass=$_POST["txt2"];

    $qry="insert into studentinfo(username,password,) values('".$name."','".$pass."')";

    $res=mysqli_query($conn,$qry);
    if($res!="")
    {
        echo "Record inserted";
    }
    else
    {
        echo "Some Problem";
    }
}

?>