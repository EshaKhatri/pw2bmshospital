<?php
if (isset($_POST['name'])){
// error_reporting(0);
$server ="localhost";
$username ="root";
$password ="";


$conn = mysqli_connect($server, $username, $password);
if(!$conn){
    echo "not successful";
}
// else{
//     echo("connected successfully");
// }
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$timing = $_POST['time'];
$gender = $_POST['gender'];
$department = $_POST['department'];
$sql = "INSERT INTO `bmshospital`.`appointment` (`name`, `email`, `age`, `phone`, `time`, `gender`, `department`) VALUES ('$name', '$email', '$age', '$phone', '$timing', '$gender', '$department');";

if($conn->query($sql)==true){
    echo "Successfully registered";
}
else {
    echo   "ERROR : $sql <br> $conn->error";
}

$conn->close();
}
?>


