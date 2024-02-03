<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Game</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>

<body>
    <?php include("nav.php"); ?>
    <div class="container-fluid" style="margin-top: 5%; padding:5px;">
        <h1 class="text-center" style="padding-bottom: 20px;">Add Game</h1>
        <!-- form for adding game -->
        <form class="form-horizontal mx-auto " method="POST" action="game_insert.php">
            <div class="form-group" style="margin-left: 10%;">
                <label class="col-sm-3 control-label">Titel</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="titel" name="titel" placeholder="Title" required>
                </div>
            </div>
            <div class="form-group" style="margin-left: 10%;">
                <label for="inputRating" class="col-sm-3 control-label">Rating</label>
                <div class="col-sm-5">
                    <input type="number" class="form-control" id="rating" name="rating" placeholder="Rating" required>
                </div>
            </div>
            <div class="form-group" style="margin-left: 10%;">
                <label for="inputDescription" class="col-sm-3 control-label">Beschrijving</label>
                <div class="col-sm-5">
                    <textarea class="form-control" id="beschrijving" name="beschrijving" placeholder="Description" required></textarea>
                </div>
            </div>
            <div class="form-group" style="margin-left: 10%;">
                <label for="inputCode" class="col-sm-3 control-label">Code</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="code" name="code" placeholder="Code" required>
                </div>
            </div>
            <div class="form-group" style="margin-left: 10%;">
                <label for="inputImgCode" class="col-sm-3 control-label">Image Code</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="imgcode" name="imgcode" placeholder="Image Code" maxlength="255" required>
                </div>
            </div>
            <div class="form-group" style="margin-left: 10%;">
                <label for="inputCategory" class="col-sm-3 control-label">Categorie</label>
                <div class="col-sm-5">
                    <select class="form-control" id="categorie" name="categorie" required>
                        <option value="actie">Actie</option>
                        <option value="avontuur">Avontuur</option>
                        <option value="puzzel">Puzzel</option>
                        <option value="sport">Sport</option>
                        <option value="race">Race</option>
                    </select>
                </div>
            </div>
            <div class="form-group" style="margin-left: 10%;">
                <div class="col-sm-offset-3 col-sm-5">
                    <input type="submit" value="Create" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>

    <style>
        .popknop {
            background-color: red;
            color: white;
            font-size: 16px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 80%;

        }

        .popknop:hover {
            background-color: #c70000;
        }

        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            z-index: 9999;
        }

        .close-btn {
            position: absolute;
            top: 5px;
            right: 10px;
            font-size: 20px;
            color: #aaa;
            cursor: pointer;
        }

        .close-btn:hover {
            color: #000;
        }

        .close-icon {
            width: 20px;
            height: 20px;
            background-image: url('https://cdn-icons-png.flaticon.com/512/753/753345.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            display: block;
        }
    </style>
    </head>

    <body>
        <button class="popknop" onclick="showPopup()">? Help</button>
        <div class="popup" id="popup">
            <span class="close-btn" onclick="hidePopup()"><span class="close-icon"></span></span>
            <h2>Handleiding</h2>
            <p>1. Zoek de game op! Kijk of hij embedbaar is!!! <br>
                2. Schrijf de titel rating en beschrijving over. <br>
                3. Druk op embed en pak alleen de link niet de de hele script. <br>
                4. Zoek een plaatje op google. Kopier afbeelding adres of copy image adress. <br>
                5. Als laatste de categorie die erbij hoort kiezen.</p>
        </div>

        <script>
            function showPopup() {
                // Toon het pop-up element door de display-stijl naar "block" te wijzigen
                document.getElementById("popup").style.display = "block";
            }

            function hidePopup() {
                // Verberg het pop-up element door de display-stijl naar "none" te wijzigen
                document.getElementById("popup").style.display = "none";
            }
        </script>

    </body>

</html>