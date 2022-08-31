<?php
if (isset($_POST['appno'])){
// error_reporting(0);
$server ="localhost";
$username ="root";
$password ="";
$database="bmshospital";


$conn = mysqli_connect($server, $username, $password ,$database);
if(!$conn){
    echo "not successful";
}
// else{
//     echo("connected successfully");
// }
$appno = $_POST['appno'];
$bill = $_POST['bill'];
$sql = "INSERT INTO `bmshospital`.`consultationbill` (`appno`, `bill`) VALUES ('$appno', '$bill');";

if($conn->query($sql)==true){
      header("Location: showdetails.php");
}
else {
    echo   "ERROR : $sql <br> $conn->error";
}

$conn->close();
}
?>


