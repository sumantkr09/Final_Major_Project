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
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$des = $_POST['des'];


$sql = "INSERT INTO `se`.`se` (`name`, `age`, `gender`, `email`, `phone`, `des`, `Date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$des', current_timestamp());";

// echo $sql;
// echo "Registered Succesfully...";

// Execute the query

if($con->query($sql) == true)
{
    echo "Registered Successfully..";
    echo "<br>Thanks for filling this form";

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
