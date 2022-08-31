<?php
if (isset($_POST['L_appno'])){
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
$L_appno = $_POST['L_appno'];
$l_bill = $_POST['l_bill'];
$sql = "INSERT INTO `bmshospital`.`labtestbill` (`L_appno`, `l_bill`) VALUES ('$L_appno', '$l_bill');";

if($conn->query($sql)==true){
      header("Location: showdetails.php");
}
else {
    echo   "ERROR : $sql <br> $conn->error";
}

$conn->close();
}
?>


