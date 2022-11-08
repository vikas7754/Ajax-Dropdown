<?php
include_once("config.php");
if($_POST['year']) {
    $year = $_POST['year'];
    $make = $_POST['make'];
    $model = $_POST['model'];
    $style = $_POST['style'];
	$sql = "SELECT * FROM car WHERE year = '$year' AND make = '$make' AND model = '$model' AND style = '$style'";
	$result = $conn->query($sql);
	$carData = [];
	while( $rows = $result->fetch_assoc()) {
		$carData[] = $rows;
	}
	echo json_encode($carData);
} else {
	echo "Something went wrong";	
}
?>
