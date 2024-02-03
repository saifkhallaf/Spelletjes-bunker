<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<style>
    * {
        margin: 0;
        padding: 0;
        font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
    }

    nav {
        display: flex;
        background-color: #698AFD;
        min-height: 65px;
        color: #ffffff;
        align-items: center;
        justify-content: space-between;
    }

    .spelletjesbunker {
        font-size: x-large;
        display: flex;
        margin: 20px;
    }

    .navbuttons {
        display: flex;
        flex-direction: row;
        padding-right: 20px;
    }

    .navbuttons p {
        margin: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .navbuttons button, .navbuttons a {
        text-decoration: none;
        color: #698AFD;
        border: 5px solid white;
        border-radius: 10px;
        background-color: white;
    }

    .spelletjesbunker a {
        text-decoration: none;
        color: #fff;
    }
    
    .add-game-button {
        background-color: lightgreen;
    }
    
</style>

<body>
    <nav>
        <div class="spelletjesbunker">
            <p><a href="index.php">Spelletjesbunker</a></p>
        </div>
        <div class="navbuttons">
            <p>
                <a href="index.php?category=actie" class="action"><button>Actie</button></a>
            </p>
            <p>
                <a href="index.php?category=avontuur" class="avontuur"><button>Avontuur</button></a>
            </p>
            <p>
                <a href="index.php?category=sport" class="sport"><button>Sport</button></a>
            </p>
            <p>
                <a href="index.php?category=race" class="race"><button>Race</button></a>
            </p>
            <p>
               <a href="index.php?category=puzzel" class=><button>Puzzel</button></a>
            </p>
            <?php
            session_start();
            if (isset($_SESSION['email'])) {
                // If user is logged in, show "Logout" button
                echo '<p><a href="logout.php"><button>Logout</button></a></p>';
            } elseif (isset($_SESSION['admin_email'])) {
                // If admin is logged in, show "Logout" button
                echo '<p><a href="logout.php"><button>Logout</button></a></p>';
                echo '<div class="add-game-button">';
                echo '<p><a href="add_game.php"><button>Game toevoegen</button></a></p>';
                echo '</div>';
            } else {
                // If neither user nor admin is logged in, show "Login" button
                echo '<p><a href="login.php"><button>Login</button></a></p>';
            }
            ?>
        </div>
    </nav>
</body>



</html>