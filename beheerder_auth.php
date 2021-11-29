<!DOCTYPE html>
<html>
<head>
  <title>FIDL - Inloggen</title>
  <link rel="stylesheet" href="logindesign.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" type="image/jpg" href="/Supermarkt FIDL/IMG/favicon.png"/>
  <style>
    body {
        background-image: url("IMAGES/wallpaper3.jpg");
        background-repeat: no-repeat;
        background-size: cover;
      }

    .MSG {
        font-family: Calibri;
        font-align: center;
        font-size: 25px;
        background: #f1f1f1;
        margin-top: 15%;
        padding-top: 40px;
        padding-bottom: 40px;
        width: 1500px;
    }
  </style>
</head>
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
</html>
<?php
    session_start();
    include('connection.php');
    $username = $_POST['user'];
    $password = $_POST['pass'];

        // Anti-SQL Injection Functie
        $username = stripcslashes($username);
        $password = stripcslashes($password);
        $username = mysqli_real_escape_string($con, $username);
        $password = mysqli_real_escape_string($con, $password);

        $sql = "select * FROM admin where username = '$username' and password = '$password'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count == 1){
            echo "<center><div class='MSG'><h1>Welkom beheerder!</h1></div></center>";
        }
        else{
            echo "<center><div class='MSG'><h1>Inloggen is niet gelukt, controleer uw naam en wachtwoord.</h1></div></center>";
        }
?>
