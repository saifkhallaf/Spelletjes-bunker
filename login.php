<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>

<style>
    footer {
        background-color: #698AFD;
        padding: 30px 0;
        color: #ffff;
        position: absolute;
        right: 0;
        left: 0;
        bottom: 0;

    }
</style>

<body>
    <?php include("nav.php"); ?>
    <div class="container-fluid" style="margin-top: 5%; padding:5px;">
        <h1 class="text-center" style="padding-bottom: 20px;">Log in</h1>
        <!-- form inlog velden -->
        <form class="form-horizontal mx-auto " method="POST" action="loginhandler.php">
            <div class="form-group" style="margin-left: 10%;">
                <label class="col-sm-3 control-label">Email</label>
                <div class="col-sm-5">
                    <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="E-mail" required>
                </div>
            </div>
            <div class="form-group" style="margin-left: 10%;">
                <label for="inputPassword" class="col-sm-3 control-label">Password</label>
                <div class="col-sm-5">
                    <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password">
                </div>
            </div>
            <!-- log in en registratie buttons -->
            <div class="text-center" style="margin-top: 3%;">
                <button type="submit" class="btn btn-primary" id="login" name="login" style="padding: 0.7rem; width:6%">Inloggen</button>
                <p style="margin-top:10px">Nog geen account? Registreer je hier:</p>
                <button type="button" name="registreren" id="registreren" class="btn btn-success" onclick="window.location.href='registratie.php'">Registreren</button>
            </div>
        </form>
</body>
<?php include("footer2.php") ?>

</html>