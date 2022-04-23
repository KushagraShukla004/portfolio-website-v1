<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home</title>
    <link rel="stylesheet" href="Home.css" />
  </head>
  <body>
    <div class="hero">
     <?php
      require 'header.php';
      require 'navigation.php';
      ?>
      <div class="info">
      <h1>I'm <span>Kushagra</span> Shukla</h1>
      <p>E20BCA004</p>
      <p>I am an organized, determined, goal-driven and a team-player who aspires to be an App Developer and</p><p> I like to
learn and update myself with the world .I am also pursuing my specialization in <p>Cloud computing and Cyber
Security which will further help me in my App Development .</p> <p>I will continue learning and growing in the field I
have chosen and will continue to be a successful developer.</p>
      <a href="login.php">Login</a>
    </div>

    <div class="img-box">
      <img src="images/pattern.png" class="back-img" />
      <img src="images/main.png" class="main-img" />
    </div>
    </div>
    <div class="footer">
      <?php
      include 'footer.php';
      ?>
    </div>
    
  </body>
</html>
