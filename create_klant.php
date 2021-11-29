<?php
try {
  $db = new PDO("mysql:host=localhost;dbname=login","root", "");
  if(isset($_POST['verzenden'])) {
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
//    $role = filter_input(INPUT_POST, "role", FILTER_SANITIZE_STRING);
  $query = $db->prepare("INSERT INTO user(`username`, `password`) VALUES(:username, :password)");
  $query->bindParam("username", $username);
  $query->bindParam("password", $password);
//  $query->bindParam("role", $role);
  if($query->execute()) {
    echo "De nieuwe gegevens zijn toegevoegd.";
  } else {
    "Er is een fout opgetreden!";
    }
  echo "<br>";
  }
  } catch(PDOException $e) {
    die("Error!: " . $e->getMessage());
}


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>FIDL - Inloggen als Klant</title>
    <link rel="stylesheet" href="/Supermarkt FIDL/ontwerp.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/jpg" href="IMG/favicon.png"/>
    <style>

      body {
        background-image: url("LoginV2/IMAGES/wallpaper3.jpg");
        background-repeat: no-repeat;
        background-size: cover;
      }

      #loginpagina {
        font-align: center;
        margin-top: 130px;
        padding-top: 20px;
        padding-bottom: 50px;
        width: 750px;
        background: #f1f1f1;
        font-family: Calibri;
      }

      label {
        font-size: 30px;
      }

      input {
        font-size: 25px;
      }

      .button-a:hover {
      background: #303952;
      }

    </style>
  </head>
  <body>
    <div class="header">
      <a href="/Supermarkt FIDL/hoofdpagina.html" class="logo">FIDL</a>
      <div class="header-right">
        <a href="#producten">Assortiment</a>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
        <a href="#dash">Dashboard</a>
        <a class="active" href="#">Login</a>
      </div>
    </div>
    <center>
    <div id = "loginpagina">
      <h1 style="font-size: 50px;">Aanmelden met uw gegevens</h1>
      <p style="font-size:30px;margin-bottom: 40px;">Inloggen als <strong>klant</strong></p></br>
        <form method="post" action="">
            <label>Username</label>
            <input type="text" name="username"><br>

            <label>Password</label>
            <input type="text" name="password"><br>

<!--              <label>Functie</label>
          <input type="text" name="role"> !--><br>

            <input type="submit" name="verzenden" value="Opslaan">
        </form>
    </div>
    </center>
