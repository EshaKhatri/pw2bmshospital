<?php
$server ="localhost";
$username ="root";
$password ="";
$database ="bmshospital";

$conn = mysqli_connect($server, $username, $password, $database);
if(!$conn){
    echo "not successful";
}
    $login = false;
    $showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $showAlert=true;
    // include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
   
    $sql = "Select * from staff where username='{$username}' AND password='{$password}'";
    $result = mysqli_query($conn, $sql);
    $num=mysqli_num_rows($result);
      if ($num==1){
        $login=true;
        // header("location:wecome.php");
    }
      else{
        $showError= "Invalid Credentials";
    }
}

    
    if($login){
      header("Location: showdetails.php");
die();
       
    }
    if($showError){
      echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error!</strong>' .$showError.'
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      </div>';
    }
  $conn->close();

?>

