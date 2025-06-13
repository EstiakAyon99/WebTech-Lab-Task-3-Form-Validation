<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Application</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="table.css">
</head>

<body>
  <div class="header">
    <img
      src="Image/logo.png"
      alt="">
    <h3>Air Quality Index</h3>
  </div>
  <div class="fullbox">
    <div class="container">
      <div class="box1">
        <div class="table">
          <table>
            <caption id="caption">Top 10 Cities</caption>
            <thead></thead>
            <tbody>

              <tr>
                <td>City1</td>
                <td>Data1</td>
              </tr>
              <tr>
                <td>City2</td>
                <td>Data2</td>
              </tr>
              <tr>
                <td>City3</td>
                <td>Data3</td>
              </tr>
              <tr>
                <td>City4</td>
                <td>Data4</td>
              </tr>
              <tr>
                <td>City5</td>
                <td>Data5</td>
              </tr>
              <tr>
                <td>City6</td>
                <td>Data6</td>
              </tr>
              <tr>
                <td>City7</td>
                <td>Data7</td>
              </tr>
              <tr>
                <td>City8</td>
                <td>Data8</td>
              </tr>
              <tr>
                <td>City9</td>
                <td>Data9</td>
              </tr>
              <tr>
                <td>City10</td>
                <td>Data10</td>
              </tr>

            </tbody>
          </table>
        </div>

      </div>
      <div class="box2">Box2</div>
    </div>
    <div class="container2">
      <div class="box3">
        <div class="registration">
          <h4>Registration Box</h4>
          <form action="process.php" method="POST">

            <label for="fullname">Enter Full Name</label>
            <input id="fname" name="fname" class="inputbox" type="text" placeholder="Full Name">
            <label for="email">Enter E-mail</label>
            <input id="email" name="email" class="inputbox" type="email" placeholder="xx-xxxxx-x@student.aiub.edu">
            <label for="password">Enter Password</label>
            <input id="pass" name="pass" class="inputbox" type="password" placeholder="Password">
            <label for="confirmPassword">Confirm Password</label>
            <input id="cpass" name="cpass" class="inputbox" type="password" placeholder="Confirm Password">
            <label for="location">Enter Your Location</label>
            <input id="loc" name="loc" class="inputbox" type="text" placeholder="Location">
            <label for="zipCode">Enter Your Area Zip Code</label>
            <input id="zipcode" name="zipcode" class="inputbox" type="number" placeholder="Zip Code">
            <label for="color">Choose Background Color:</label>
            <input type="color" class="color" id="color" name="color">
            <input type="checkbox" name="ucheck" id="checkbox" class="check">I agree with terms and conditions
           <input class="SubmitButton" name="submit" type="submit" value="Submit" onclick="return vadidate()">
          </form>
          <p id="error" class="errormsg"></p>
        </div> 
      </div>
      <div class="box4">

      <h3>Login</h3>

      <div class="loginBox">
        <form class="loginForm" action="loginprocess.php" method="POST">

          <label for="Lemail">Email</label>
          <input id="lemail" name="lemail" class="login" type="email" placeholder="xx-xxxxx-x@student.aiub.edu">
          <label for="Lpassword">Enter Password</label>
          <input id="lpass" name="lpass" class="login" type="password" placeholder="Password">
          <input type="submit" name="lsubmit" class="SubmitButton" id="lsubmit" value="Login">

        </form>
      </div>
      <p id="msg" class="msg"></p>

      </div>
    </div>
  </div>

  <script src="app.js"></script>
</body>

</html>