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
    <title>Welcome</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css" integrity="sha256-ECB9bbROLGm8wOoEbHcHRxlHgzGqYpDtNTgDTyDz0wg=" crossorigin="anonymous" />
    <link rel="stylesheet" href="welcome.css">
  </head>
  <body>
    <div class="slider">
      <!-- <img src="https://wow.olympus.eu/webfile/img/1632/oly_testwow_stage.jpg?x=1024" alt="testing" class="img-top"> -->
      <img name="slide" class="img-top" style="height:650px;">

    </div>
    <!-- <div class="slider">

      <img src="https://www.linkedin.com/media-proxy/ext?w=1200&h=675&hash=nSi8OI4jRAitNsIyZ37uJ0hDins%3D&ora=1%2CaFBCTXdkRmpGL2lvQUFBPQ%2CxAVta5g-0R6plxVUzgUv5K_PrkC9q0RIUJDPBy-mXCGj-tafZ3DtcMfcZLSiolURcCUDkwEzfuiuSTHpEI69LcLmY4Yx3A" alt="testing" class="img-top">
    </div> -->
    <nav>
      <a href="#" class="nav">Home</a>
      <a href="#" class="nav">About</a>
      <a href="#" class="nav">More</a>
      <a href="setting.php" class="nav">Settings</a>
      <!-- <a href="#" class="logout" >Logout</a> -->
      <button class="logout" type="button" >Logout</button>

    </nav>
    <h1>መርሓባ <?php echo ucfirst($name); ?>!</h1>

    <aside class="left">
      <h6>AJAX</h6>
      <ul class="testing"></ul>
    </aside>

    <div class="card">
    <section>
      <p>ዓልል ሁማን በኢንግስ ኣረ ቦርን ፍሬ ኣንድ አቁኣል ኢን ዲግኒትይ ኣንድ ሪግህጽ። ጥሀይ ኣረ አንዶወድ ዊጥ ረኣሶን ኣንድ ቾንስቺአንቸ ኣንድ ስሆኡልድ ኣችት ቶዋርድስ ኦነ ኣኖትሀር ኢን ኣ ስፒሪት ኦፍ ብሮትሀርሆኦድ።
      <br>(ዓርቲችለ ፩ ኦፍ ትሀ ዑኒቨርሳል ዸችላራቲኦን ኦፍ ሑማን ሪግህጽ)</p>
    </section>
    </div>

    <aside class="right">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </aside>


      <br>
    <div class="card">
        <section>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </section>
    </div>
      <br>
    <div class="card">
        <section>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </section>
    </div>

    <aside class="left" id="leftBottom">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </aside>

    <br>
    <div class="card">
        <section>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </section>
    </div>
    <br>
    <div class="card">
        <section>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </section>
    </div>

    <footer>
      Made with Love.
    </footer>
  </body>
  <script type="text/javascript" src="welcome.js"></script>

</html>
