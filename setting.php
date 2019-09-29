<?php
  require('db.php');
  require('auth.php');
  $email = $_SESSION['email'];
  $sql = "SELECT name FROM input WHERE email = '$email'";
  // echo $sql;
  // echo "<br/>";
  $result = mysqli_query($conn, $sql);
  if($result){
    //echo "success";
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    //echo ucfirst($name);
  } else {
    echo "nothing";
  }

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Settings</title>
  </head>

  <!-- <link href="https://fonts.googleapis.com/css?family=Assistant&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css" integrity="sha256-ECB9bbROLGm8wOoEbHcHRxlHgzGqYpDtNTgDTyDz0wg=" crossorigin="anonymous" />
    <link rel="stylesheet" href="welcome.css">
  <body>
    <nav>
      <a href="welcome.php" class="nav">Home</a>
      <a href="#" class="nav">About</a>
      <a href="#" class="nav">More</a>
      <a href="setting.php" class="nav">Settings</a>
      <!-- <a href="#" class="logout" >Logout</a> -->
      <!-- <a href="logout.php" class="logout" ><button class="logout" type="button" >Logout</button></a> -->
      <button type="button" class="logout" name="button">Logout</button>
    </nav>
    <div class="container">

      <form class="" action="<?php $_SERVER["PHP_SELF"];?>" method="get">
            <h2>Change Info</h2>

            <label for="">Name</label>
            <!-- <input type="u-full-width" name="email" placeholder="Email"> -->
            <input  type="name" name="name" placeholder="" id="exampleEmailInput">

            <label for="">Email</label>
            <!-- <input type="u-full-width" name="email" placeholder="Email"> -->
            <input  type="password" name="password" placeholder="password" id="password">
            <br/>
            <input class="button-primary" type="submit" value="submit">
            <br>
            <span>Don't have an account? Well <a href="signup.php">Sign up</a></span>

      </form>

    </div>
  </body>
</html>
