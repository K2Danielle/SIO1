<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $passwordErr = "";
$name = $email = $gender = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Demande du nom sans chiffre
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
    // demande de l'email avec verification ex : @
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    // choix du gender of the personne
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
    // le mot de passe + cache 
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
    // You can add additional password validation logic here if needed
  }
}

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
echo "<br>";
echo $password;
?>

</body>
</html>
