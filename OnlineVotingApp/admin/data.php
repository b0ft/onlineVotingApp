<?php
header('Content-Type: application/json');

$conn = mysqli_connect("localhost","root","","voting");

$sqlQuery = "SELECT nim,namacalon,jumlahsuara FROM foto ORDER BY nim";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

echo json_encode($data);
?>