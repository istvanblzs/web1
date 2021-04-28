



<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// Include the database configuration file
include 'config.php';
$statusMsg = '';
$backlink = ' <a href="./">Vissza</a>';

// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $mail = $gender = $komment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["mail"])) {
    $emailErr = "Email is required";
  } else {
    $mail = test_input($_POST["mail"]);
    // check if e-mail address is well-formed
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  
  }

  if (empty($_POST["komment"])) {
    $komment = "";
  } else {
    $komment = test_input($_POST["komment"]);
  }

  


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}










?>

<h2>Írjon kommentet az 'Üzenetek' menüpont alá itt:</h2>
<p><span class="error">* Kötelező mező</span></p>
<form action="uploadcomment.php" method="post" enctype="multipart/form-data">  
  Név: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="mail" value="<?php echo $mail;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
 
  Komment: <textarea name="komment" rows="5" cols="40"><?php echo $komment;?></textarea>
  
  
  <br><br>
  <input type="submit" name="submit" value="Megosztás">  
</form>


<br><br>



<h2>Adatok:</h2>
<p>Ügyvezető: <strong>Valaki Az</strong></p>
<p>E-mail: <strong>valaki.az@minihonlap.hu</strong></p>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2726.3375296155727!2d19.66695091525771!3d46.89607994478184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4743da7a6c479e1d%3A0xc8292b3f6dc69e7f!2sPallasz+Ath%C3%A9n%C3%A9+Egyetem+GAMF+Kar!5e0!3m2!1shu!2shu!4v1475753185783" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
<br>
<a target="_blank" href="https://www.google.hu/maps/place/Pallasz+Ath%C3%A9n%C3%A9+Egyetem+GAMF+Kar/@46.8960799,19.6669509,17z/data=!3m1!4b1!4m5!3m4!1s0x4743da7a6c479e1d:0xc8292b3f6dc69e7f!8m2!3d46.8960763!4d19.6691396?hl=hu">Nagyobb térkép</a>
<br>
<br>

</body>
</html>





