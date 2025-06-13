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
    // session_start();
      
      $_SESSION["lemail"] = $lemail;

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Require HTML</title>
    <link rel="stylesheet" href="require.css">

    <style>
    .logoutBtn{
        height: 30px;
        width: 90px;
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
    </style>
</head>

<body>
    <div class="containerSelect">
        <div class="inputBox">
            <h2>Select any 10 cities</h2>
            <form action="show.php" method="POST">
                <div class="inputs">
                <?php
                    

                    $conn = mysqli_connect('localhost', 'root', '', 'aqi');
                    for($i=1; $i<=20; $i++) {
                        $sql = "SELECT *FROM info where id=$i";
                                        
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        
                        echo $row["city"].", ".$row["country"]."<input type="."checkbox"." id="."city"."$i"." name="."city"."$i".">"."<br>";
                    }
                
                ?>
                </div>
                <div id="error" style="color:red"></div>
                <div class="buttonDiv">
                    <input type="submit" class="btn" name="submitCheck" value="Submit" onclick="return check10()">
                    <div class="back">
                    <form method="post">
                        <button type="submit" class="logoutBtn" name="logout">Logout</button>
                    </form>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="check10city.js"></script>
</body>

</html>