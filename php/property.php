<?php
$building = $_GET['building'];
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "webuser";
$response = array();
$conn = new mysqli($servername, $username, $password, $dbname);

$conn->query("set character set 'utf8'"); 
$conn->query("set names 'utf8'");

$sql = "SELECT * FROM house WHERE building = '{$building}'";

$result = $conn->query($sql);
while($row = $result->fetch_array()){
    //$response[] = $row;
	echo json_encode($row,JSON_UNESCAPED_SLASHES);
}
//echo json_encode($response,JSON_UNESCAPED_SLASHES);
$conn->close();
?>