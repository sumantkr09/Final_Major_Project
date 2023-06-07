<?php
$insert = false;
if(isset($_POST['name'])){
    
// Set connection variable

$server = "localhost";
$username = "root";
$password = "";

// Create a database connection

$con = mysqli_connect($server,$username,$password);

// Check for connection success

if(!$con){
    die("connection to this database failed due to " . mysqli_connect_error());
}
// echo "Success connecting to the db";

// Collect post Variable

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "INSERT INTO `se`.`contact` (`name`, `email`, `phone`, `date`) VALUES ('$name', '$email', '$phone', current_timestamp());";

// echo $sql;
// echo "Registered Succesfully...";

// Execute the query

if($con->query($sql) == true)
{
    echo "Registered Successfully..";
    echo "<br>We will soon contact to you";

    // Flag for successful insertion
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error"; 
}
// Close the database connection
$con->close();
}
?>
