<?php

       session_start();
        $name = $_SESSION['fname'];
        $email = $_SESSION['email'];
        $pass = $_SESSION['pass'];
        $loc = $_SESSION['loc'];
        $zip = $_SESSION['zipcode'];

        $conn = mysqli_connect("localhost", "root", "", "aqi");

        if(!$conn) {
            die("Connection Failed...");
        }

        $sql = "INSERT INTO user (name, email, password, location, zip) VALUES ('$name', '$email', '$pass', '$loc', '$zip')";

        if(mysqli_query($conn, $sql)) {
            echo "Inserted...";
        }
        else{
            echo "Error...";
        }
        header("refresh:2; url='index.php'");
    
        ?>