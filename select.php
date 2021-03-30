<?php

	//require 'connect.php';
	/*$title = $_POST['firstname'];
	$note = $_POST['lastname'];
	$color = $_POST['email'];*/

	

$dbname = "test";	
$user = "root";
$pass = "";
$host = "localhost";

$conn = mysqli_connect($host,$user,$pass,$dbname);

if($conn)
  {
   // echo "<span style='color:black'>Connection Established</span>";
  }
  else
  {
    die("Connection failed because".mysqli_connect_error());
  }

	$sql = "select * from userinfo"; 
	$result = $conn->query($sql);
	$prefix = '{"heroes:"';
	$postfix = '}';

	if ($result->num_rows >0) {
 		while($row[] = $result->fetch_assoc()) {
 		$tem = $row;
 		$json = json_encode($tem);
 	}
 	//$json = $prefix + $json + $postfix;
 
} else {
 echo "No Results Found.";
}

//echo '{"Fruits:"',$json,'}';
echo $json;
$conn->close();

?>