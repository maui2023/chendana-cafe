<?php

//data from form
$FoodName = $_POST["FoodName"];
$FoodPicture = $_POST["FoodPicture"];
$FoodPrice = $_POST["FoodPrice"];
$FoodDiscount = $_POST["FoodDiscount"];
$FoodYN = $_POST["FoodYN"];

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "root", "chendana");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO food (FoodName, FoodPicture, FoodPrice, FoodDiscount, FoodYN) VALUES ('$FoodName', '$FoodPicture', '$FoodPrice', '$FoodDiscount', '$FoodYN')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

<meta http-equiv="refresh" content="3; url=./add.php">