<?php
$conn=mysqli_connect("localhost","root","","connectivity");

	if(!$conn)
	{
		echo "Some error !!".mysqli_connect_error();
	}
	else
	{
		echo "Database connected";
	}
	echo "<br>";
	$sql =" SELECT  name,class,section FROM studentinfo";

if (mysqli_query($conn, $sql))
 {
    echo "Record displayed successfully";
 }
 else 
 {
    echo "Error displaying record: " . mysqli_error($conn);
 }
	?>