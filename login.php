<?php
$login = false;
$showError=false;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  include 'config.php';
  $username=$_POST['username'];
  $password=$_POST['password'];

  $sql="SELECT * FROM `registration` WHERE username='$username' and password='$password'";

  $result=mysqli_query($con,$sql);
  if($result){
    $num=mysqli_num_rows($result);
    if($num==1){
      // echo "User already exists";
      $login=true;
      session_start();
      $_SESSION['loggedin']= true;
      $_SESSION['username']= $username;
      header("Location:index.php");
    }else{
      $showError="Invalid Credentials";
    }
  }
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
    <?php
      require 'navigation.php';
    ?>
    <?php
      if($login){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Logged In</strong> Successfully
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
      if($showError){
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> '.$showError.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
      ?>
     
    <div class="center">
      <h1>Login</h1>
      <form action="login.php" method="post">
        <div class="txt_field">
          <input type="text" maxlength="20" name="username" >
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" maxlength="15" name="password">
          <span></span>
          <label>Password</label>
        </div>
        <input type="submit" value="Login">
        <div class="login_link">
          Not a member? <a href="signup.php">Signup</a>
        </div>
      </form>
    </div>
  </body>
</html>
