<?php
  // $server = "localhost";
  // $user = "root";
  // $password = "hassensaid12";
  // $dbName = "test";
  //
  // $conn = mysqli_connect($server, $user, $password, $dbName);
  //
  // if(!$conn){
  //   echo "failed";
  // }
  require('db.php');
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css" integrity="sha256-ECB9bbROLGm8wOoEbHcHRxlHgzGqYpDtNTgDTyDz0wg=" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form class=""  method="post" action="<?php $_SERVER["PHP_SELF"];?>">
          <h2>Sign up!</h2>

          <label for="">Name</label>
          <!-- <input type="u-full-width" name="email" placeholder="Email"> -->
          <input  type="text" name="name" placeholder="name" id="name">


          <label for="">Email</label>
          <!-- <input type="u-full-width" name="email" placeholder="Email"> -->
          <input  type="email" name="email" placeholder="test@mailbox.com" id="exampleEmailInput">

          <label for="">Password</label>
          <!-- <input type="u-full-width" name="email" placeholder="Email"> -->
          <input  type="password" name="password" placeholder="password" id="password">
          <br/>
          <input class="button-primary" type="submit" value="submit input">
          <br>
          <span>Already have an account? <a href="login.php">Login</a></span>

    </form>
    <?php
    $name = $email = $password = "";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(!($_POST['name']) == "" || $_POST['email'] || $_POST['password']){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "INSERT INTO input (name, email, password)
              VALUES ('$name', '$email', '$password')";

            if(mysqli_query($conn, $sql)){
              echo "successfully";
            } else {
              echo mysqli_error($conn);
            }
        } else {
            echo "you gotta enter something somewhere";
            mysqli_close($conn);
        }
        // $email = $_POST['email'];
        // $password = $_POST['password'];
    }




    // mysqli_close($conn);
    // echo "<br/>";
    // echo $name;
    // echo "<br/>";
    // echo $email;
    // echo "<br/>";
    // echo $password;
    // echo "<br/>";

     ?>

  </body>
</html>
