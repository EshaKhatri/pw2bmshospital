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
$Labtest = $_POST['Labtest'];
$sql = "INSERT INTO `bmshospital`.`l_appointment` (`name`, `email`, `age`, `phone`, `time`, `gender`, `Labtest`) VALUES ('$name', '$email', '$age', '$phone', '$timing', '$gender', '$Labtest');";

if($conn->query($sql)==true){
    echo "Successfully registered";
}
else {
    echo   "ERROR : $sql <br> $conn->error";
}

$conn->close();
}
?>


