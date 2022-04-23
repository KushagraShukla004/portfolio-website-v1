<?php 
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
}
else{
  $loggedin = false;
}

echo '<!DOCTYPE html>
  <html lang="en">
  <head>
    <link rel="stylesheet" href="Nav.css" />
  </head>
  <body>
    <nav>
      <img src="images/logo2.png" class="logo" />
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="contact.php">Contact</a></li>';

        if(!$loggedin){
        echo '<li><a href="login.php">Login</a></li>
        <li><a href="signup.php">Signup</a></li>';}
      
        if($loggedin){
        echo '<li><a href="logout.php">Logout</a></li>';}
      
        echo '</ul>
    </nav>
  </body>
</html>';
?>
