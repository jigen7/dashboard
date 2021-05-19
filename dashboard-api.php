<?php

/***
 	Paolo Marco Manarang
	2016-03-05
	PHP Script that query the database base on the requested games status 
***/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dashboard";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "error";
} 

$action = $_GET['action'];
$now = date("Y-m-d H:i:s");
//$now = "2017-01-01 12:00:00";

if($action == "upcoming"){

  	$sql = "SELECT * FROM games where date_start > '$now' LIMIT 1 ";
	$result = $conn->query($sql);

	if ($result->num_rows > 0){
		$jsonData = $result->fetch_assoc();
	} else {
		$jsonData = "No Game Data";
	}	

}elseif ($action == "inprogress"){

	$sql = "SELECT * FROM games where date_start < '$now' and date_end > '$now' LIMIT 1 ";
	$result = $conn->query($sql);

	if ($result->num_rows > 0){
		$jsonData = $result->fetch_assoc();
	} else {
		$jsonData = "No Game Data";
	}	


}elseif($action == "previous"){
		

	if(isset($_GET['type'])){
		$type = $_GET['type'];
	}else{
		$type = "basketball";	
	}

	$sql = "SELECT * FROM games where date_start < '$now' and type = '$type' LIMIT 1 ";
	$result = $conn->query($sql);

	if ($result->num_rows > 0){
		$jsonData = $result->fetch_assoc();
	} else {
		$jsonData = "No Game Data";
	}	


}else{
	$jsonData = "Error Type";
}//end else


// Sample Comment
header('Content-Type: application/json');
echo json_encode($jsonData);
?>
