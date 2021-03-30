<?php

if($_SERVER['REQUEST_METHOD'] =='POST')
{
	//require 'connect.php';
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];

	

$dbname = "datainsert";	
$user = "root";
$pass = "";
$host = "localhost";

$conn = mysqli_connect($host,$user,$pass,$dbname);

if($conn)
  {
    echo "<span style='color:black'>Connection Established</span>";
  }
  else
  {
    die("Connection failed because".mysqli_connect_error());
  }

	$query = "insert into studata(firstname,lastname,email) values('$firstname','$lastname','$email')"; 

	if(mysqli_query($conn,$query))
	{
		$response['success'] = true;
		$response['message'] = "Successfully";
	}
	else
	{
		$response['success'] = false;
		$response['message'] = "Failure";
	}
}
else
{
	$response['success'] = false;
	$response['message'] = "Error";
}

echo json_encode($response);
?>