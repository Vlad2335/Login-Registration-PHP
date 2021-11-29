<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>FIDL - Inloggen als beheerder</title>
    <link rel="stylesheet" href="ontwerp.css">
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
      <a href="hoofdpagina.html" class="logo">FIDL</a>
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
        <p style="font-size:30px;margin-bottom: 40px;">Inloggen als <strong>beheerder</strong></p></br>
        <form name="f1" action = "LoginV2/beheerder_auth.php" onsubmit = "return validation()" method = "POST">
            <p><label>Gebruikersnaam: </label>
                <input type = "text" id ="user" name  = "user" /></p>
            <br/>
            <p><label>Wachtwoord: </label>
                <input type = "password" id ="pass" name  = "pass" /></p>
            <br/>
            <p><input class="button-a" type =  "submit" id = "btn" value = "Login" /></p>
        </form>
    </div>
    </center>
    <script>
            function validation()
            {
                var id=document.f1.user.value;
                var ps=document.f1.pass.value;
                if(id.length=="" && ps.length=="") {
                    alert("Gegevens velden kunnen niet leeg zijn!");
                    return false;
                }
                else
                {
                    if(id.length=="") {
                        alert("Vul uw gebruikers naam in!");
                        return false;
                    }
                    if (ps.length=="") {
                    alert("Vul uw wachtwoord in!");
                    return false;
                    }
                }
            }
        </script>
</body>
</html>
