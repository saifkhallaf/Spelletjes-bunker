<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registratie</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>

<body>
    <?php include("nav.php"); ?>

    <div class="container-fluid" style="margin-top: 5%; padding:5px;">
        <h1 class="text-center" style="padding-bottom: 20px;">Registreren</h1>
        <!-- form inlog velden -->
        <form class="form-horizontal mx-auto " method="post" action="registratiehandler.php">
            <div class="form-group" style="margin-left: 10%;">
                <label class="col-sm-3 control-label">Gebruikersnaam</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="InputUsername" placeholder="Gebruikersnaam" required name="InputUsername">
                </div>
            </div>
            <div class="form-group" style="margin-left: 10%;">
                <label class="col-sm-3 control-label">Email</label>
                <div class="col-sm-5">
                    <input type="email" class="form-control" id="inputEmail" placeholder="E-mail" required name="inputEmail">
                </div>
            </div>
            <div class="form-group" style="margin-left: 10%;">
                <label for="inputPassword" class="col-sm-3 control-label">Password</label>
                <div class="col-sm-5">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password" required name="inputPassword">
                </div>
            </div>
            <!-- log in en registratie buttons -->
            <div class="text-center" style="margin-top: 3%;">
                <button type="submit" class="btn btn-success" id="registratie" name="registratie">Registreren</button>
                <p style="margin-top:10px">Heb je al een account? Log hier in:</p>
                <button type="button" class="btn btn-primary" onclick="window.location.href='login.php'" style="padding: 0.7rem; width:6%">Log in</button>
            </div>
        </form>
<form action=""></form>
    </div>
    
</body>
 <?php include("footer2.php") ?>