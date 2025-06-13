<?php
      if (session_status() >= 0){
            if(isset($_SESSION["lemail"])) {
                  header("refresh: 0.5; url = require.php");
            }
      }
if (isset($_POST["lsubmit"])){
$email =$_POST["lemail"] ;
$pass = $_POST["lpass"];

$conn = mysqli_connect('localhost', 'root', '', 'aqi');
$sql = "SELECT *FROM user WHERE email = '$email' and password = '$pass'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count == 1) {
      session_start();
      
      $_SESSION["lemail"] = $email;

      echo "You are now redirected";
      header("refresh: 2; url = require.php");
      exit();
}
else{
      echo "User not found";
      header("refresh: 2; url = index.php");
      exit();
}
}
if (!isset($_POST["lsubmit"]))
      {
            echo "Fill the username and password."."<br>";
            header("refresh: 2; url = index.php");
      }
      //
?>
