<?php
  // $server = "localhost";
  // $user = "root";
  // $password = "hassensaid12";
  // $dbName = "test";
  //
  // $conn = mysqli_connect($server, $user, $password, $dbName);
  //
  // if($conn){
  //   echo "success";
  // }
  require('db.php');
  session_start();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css" integrity="sha256-ECB9bbROLGm8wOoEbHcHRxlHgzGqYpDtNTgDTyDz0wg=" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
  </head>
  <body class="login">
    <form class="" action="<?php $_SERVER["PHP_SELF"];?>" method="post">
          <h2>Login (:</h2>

          <label for="">Email</label>
          <!-- <input type="u-full-width" name="email" placeholder="Email"> -->
          <input  type="email" name="email" placeholder="test@mailbox.com" id="exampleEmailInput">

          <label for="">Password</label>
          <!-- <input type="u-full-width" name="email" placeholder="Email"> -->
          <input  type="password" name="password" placeholder="password" id="password">
          <br/>
          <input class="button-primary" type="submit" value="submit">
          <br>
          <span>Don't have an account? Well <a href="signup.php">Sign up</a></span>

    </form>

    <?php
      $email = $password = '';
      if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(!empty($_POST['email']) == "" ||  empty($_POST['password']) == ""){
          $email = $_POST['email'];
          $password = $_POST['password'];

          $sql = "SELECT email, password FROM input WHERE email = '$email' and password = '$password'";
          // echo "<br>";
          // echo $sql;
          // echo "<br>";
          $result = mysqli_query($conn, $sql);
          $rows = mysqli_num_rows($result);
          if($rows == 1){
            // echo "$email";
            $_SESSION['email'] = $email;
            header("Location: welcome.php");
          } else {
            echo "you got one of them wrong, try again";
          }

          // if($result){
          //   echo "successfully";
          //   //echo $result;
          // } else {
          //   echo "<br>";
          //   echo "failed";
          //   echo "<br>";
          // }

        } else {
          echo "Please enter something";
        }
      }



        //$result = mysql_query($conn, $sql);
        // if(mysqli_query($conn, $sql)){
        //   echo "successfully";
        // } else {
        //   echo mysqli_error($conn);
        // }

      // echo "<br>";
      // echo $email;
      // echo "<br>";
      // echo $password;
     ?>
  </body>

</html>
