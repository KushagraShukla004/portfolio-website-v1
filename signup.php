<?php
$success=0;
$showError = false;
$showAlert=false;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  include 'config.php';
  $username=$_POST['username'];
  $password=$_POST['password'];

  $sql="SELECT * FROM `registration` WHERE username='$username' and password='$password'";

  $result=mysqli_query($con,$sql);
  if($result){
    $num=mysqli_num_rows($result);
    if($num>0){
      // echo "User already exists";
      $showError = "Username Already Exists";
    }else{
      $sql="insert into `registration`(username,password) 
      values('$username','$password')";
      $result=mysqli_query($con,$sql);
      if($result){
          // echo "Data inserted successfully";
          $showAlert = true;
          session_start();
          header("Location:login.php");
        }else{
          die(mysqli_error($con));
      }
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
    <title>Signup</title>
    <link rel="stylesheet" href="signup.css">
  </head>
  <body>
    <?php
      require 'navigation.php';
    ?>
    <?php
      if($showAlert){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Registered</strong> Successfully
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
      <h1>Signup</h1>
      <form action="signup.php" method="post">
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
        <input type="submit" value="Register">
        <div class="login_link">
          Already a member? <a href="login.php">Login</a>
        </div>
      </form>
    </div>
  </body>
</html>
