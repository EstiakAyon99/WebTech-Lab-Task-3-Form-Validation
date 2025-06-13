<?php
session_start();

// header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
// header("Cache-Control: post-check=0, pre-check=0", false);
// header("Pragma: no-cache");

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit();
}

if (isset($_SESSION["lemail"])) {
    $lemail = $_SESSION["lemail"];
    $middle = substr($lemail, 3, 5);
    if (isset($_COOKIE[$middle])) {
        echo "<body style=\"background-color:".$_COOKIE[$middle]."\"></body>";
    } else {
        echo "Cookie not set.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
  body{
    background-color: <?= $bgCol ?>;
  }
    table{
        width: 50%;
        border-collapse: collapse;
        margin: 20px auto;
    }

    th, td{
        border: 1px solid black;
        padding: 10px;
        text-align: center;
        background-color: white;
    }

    th{
        background-color: green;
        color: white;
    }

    .head{
        text-align: center;
    }
    h2{
        background-color: yellow;
        display: inline-block;
        color: black;
        padding: 5px;
        border-radius: 5px 10px;
    }
    .back{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    button{
        width: 100px;
        height: 40px;
        background-color: green;
        color: white;
        border: 1px solid black;
        border-radius: 5px;
        font-size: 1.1rem;
    }
    
    .logoutBtn{
        background-color: red;
        color: white;
        border: 1px solid black;
        border-radius: 5px;
        font-size: 1.1rem;
        margin: 5px;
    }
    .logoutBtn:hover{
        background-color:rgb(130, 22, 1);
    }
    button:hover{
        background-color:rgb(7, 82, 9);
    }
   
</style>

<body>
    

<?php

    if (isset($_POST["submitCheck"])){

        $j=1;
        $conn = mysqli_connect('localhost', 'root', '', 'aqi');

        echo '
        <div class="head">
        <h2>Selected Cities AQI Report</h2>
        </div>';
        echo "<table>";
        echo "
        <thead>
            <tr>
                <th>Serial</th>
                <th>City</th>
                <th>Country</th>
                <th>AQI</th>
            </tr>
        </thead>
        <tbody>";

        for($i=1; $i<=20; $i++){
            if(isset($_POST["city".$i])){
                $sql = "SELECT *FROM info where id=$i";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                echo "<tr>";
                echo "<td>" . $j . "</td>";
                echo "<td>" . $row["city"] . "</td>";
                echo "<td>" . $row["country"] . "</td>";
                echo "<td>" . $row["aqi"] . "</td>";
                echo "</tr>";
                $j++;
            }

        }

        echo "</tbody>
        </table>";

        echo '
        <div class="back">
        <a href="require.php"><button>Back</button></a>
        </div>';
    }

?>

<div class="back">
  <form method="post">
    <button type="submit" class="logoutBtn" name="logout">Logout</button>
  </form>
</div>

</body>
</html>

