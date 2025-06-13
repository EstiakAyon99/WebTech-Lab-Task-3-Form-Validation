<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link rel="stylesheet" href="table.css">
</head>
<body> 
       
<?php

if(!isset($_POST['confirm'])) {

    session_start();
    $color = $_POST['color'];
    $email = $_POST['email'];
    $middle = substr($email, 3, 5);
    setcookie($middle, $color);

        $_SESSION['fname'] = $_POST['fname'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['pass'] = $_POST['pass'];
        $_SESSION['loc'] = $_POST['loc'];
        $_SESSION['zipcode'] = $_POST['zipcode'];
        $_SESSION['color'] = $_POST['color'];

   
    echo "<h2>User List: </h2>";
    echo "<br>Name: ".$_POST['fname'];
    echo "<br>Email: ".$_POST['email'];
    echo "<br>Password: ".$_POST['pass'];
    echo "<br>Location: ".$_POST['loc'];
    echo "<br>Zipcode: ".$_POST['zipcode'];   
    echo "<br>Color: ".$color;   

   
    }
  
    if (isset($_POST['confirm'])) {
        include 'dbcon.php';
    }

?>
      <div class="BtnContainer">
        <button id="cancle" class="cancle"><a class="a" href="index.php">Cancle</a></button>
        <form action="process.php" method="POST">
            <input type="submit" class="submit" name="confirm" value="Confirm">
        </form>
    </div>

</body>
</html>


