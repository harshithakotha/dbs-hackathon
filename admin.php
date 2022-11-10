<?php 
session_start();
$conn = mysqli_connect("localhost","root","1234","railway");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
if (isset($_POST['submit']))
{
$t_no = $_POST['t_no'];
$t_name = $_post['t_name'];
$t_source = $_post['t_source'];
$t_destination = $_post['t_destination'];
$t_type = $_post['t_type'];
$t_duration = $_post['t_duration'];
$sql = "INSERT INTO trains (t_no, t_name, t_source, t_destination,t_type ,t_duration ) VALUES ('$t_no', '$t_name', '$t_source', '$t_destination ', '$t_type' , '$t_duration');";
if(mysqli_query($conn, $sql))
{  
	$message = "Train data inserted successfully";
}
else
{  
	$message = "Something went wrong"; 
}
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>