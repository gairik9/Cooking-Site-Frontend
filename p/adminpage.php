<html>
  <head>
    <link rel="stylesheet" type="text/css" href="resBook.css">
    <!-- <link href='https://fonts.googleapis.com/css?family=Alef' rel='stylesheet'> -->
    <title>Login</title>
    <?php include 'loginBknd.php';?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </head>
  <body class="bg">
    <div>
        <ul class="navbar">
          <li><a href="index.html">Home</a></li>
          <li><a href="loginPage.php">Login</a></li>
          <li><a href="reg.php">Sign-Up</a></li>
          <li><a href="bookingPg.php">Booking page</a></li>
          <li><a href="admin.php">Admin Page</a></li>
          <?php
          if(isset($_SESSION['uname'])){
            echo '<li style="float: right;"><a href="logout.php">Logout</a></li>';
          }
          else{
            echo '<li style="float: right;"><a href="index.html">Login</a></li>';
          }
          ?>
        </ul>
    </div>
    <div>
      <h1>Resource booking</h1>
  </div><br><br><br>
    <div id="loginID">
      <form action="LoginBknd.php"method="post">
      <h3>Enter login details :</h3>
        <label>Username : </label>
        <input class="txtbx" type="text" id="userName" name="userName" placeholder="   Required" required><br><br4>
        <label>Password : </label>
        <input  class="txtbx" name="Password" type="password" id="txtPassword" title="Password must contain: At least 8 characters, 1 Alphabet in Uppercase and 1 Number"
         placeholder="Enter Password" required/><br><br>
        <input class="btn" type="submit"/>
        <br>
    </div>
    <?php

      if(isset($_SESSION['error'])){
        echo '<script>swal("Error", "Invalid username or password", "error");</script>';
        session_unset();
      }

    ?>
  </body>
</html>
