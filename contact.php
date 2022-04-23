<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <link rel="stylesheet" href="Contact.css">
  </head>
  <body>
    <?php
      require 'navigation.php';
      ?>
<div class="container">
  <form action="index.php">
    <h2>CONTACT US</h2>
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="Afganistan">Afghanistan</option>
      <option value="Argentina">Argentina</option>
      <option value="Australia">Australia</option>
      <option value="Austria">Austria</option>
      <option value="Bangladesh">Bangladesh</option>
      <option value="Bhutan">Bhutan</option>
      <option value="Brazil">Brazil</option>
      <option value="Cambodia">Cambodia</option>
      <option value="Canada">Canada</option>  
      <option value="China">China</option>
      <option value="Czech Republic">Czech Republic</option>
      <option value="Denmark">Denmark</option>
      <option value="Egypt">Egypt</option>
      <option value="Finland">Finland</option>
      <option value="France">France</option>
      <option value="Germany">Germany</option>
      <option value="Great Britain">Great Britain</option>
      <option value="Greece">Greece</option>
      <option value="Greenland">Greenland</option>
      <option value="Hong Kong">Hong Kong</option>
      <option value="Hungary">Hungary</option>
      <option value="Iceland">Iceland</option>
      <option value="Indonesia">Indonesia</option>
      <option value="India" selected>India</option>
      <option value="Iran">Iran</option>
      <option value="Iraq">Iraq</option>
      <option value="Korea North">Korea North</option> 
      <option value="Malaysia">Malaysia</option> 
      <option value="Mexico">Mexico</option>
      <option value="Myanmar">Myanmar</option> 
      <option value="Netherlands">Netherlands (Holland, Europe)</option>
      <option value="Nigeria">Nigeria</option> 
      <option value="Pakistan">Pakistan</option> 
      <option value="Phillipines">Philippines</option> 
      <option value="Poland">Poland</option>
      <option value="Portugal">Portugal</option>
      <option value="Russia">Russia</option>
      <option value="Saudi Arabia">Saudi Arabia</option> 
      <option value="South Africa">South Africa</option>
      <option value="Spain">Spain</option>
      <option value="Sri Lanka">Sri Lanka</option>
      <option value="Sweden">Sweden</option>
      <option value="Switzerland">Switzerland</option>
      <option value="Syria">Syria</option>
      <option value="Thailand">Thailand</option>
      <option value="United Kingdom">United Kingdom</option>
      <option value="Ukraine">Ukraine</option>
      <option value="United Arab Erimates">United Arab Emirates</option>
      <option value="United States of America">United States of America</option>
    </select>
    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    <input type="submit" value="Submit">
  </form>
</div>
</body>
</html>