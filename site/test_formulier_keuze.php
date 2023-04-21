<?php
 require 'database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
<main>
    <div class="container">
        <form action="verwerk.php" method="post">
            <ul class="tekstinvoer">
                <li>
                    <label for="txtVoornaam">Voornaam</label><br>
                    <input type="text" id="txtVoornaam" name="txtVoornaam" value="Sharon" autofocus>
                </li>
                <li>
                    <label for="txtTussenvoegsels">Tussenvoegsels</label><br>
                    <input type="text" id="txtTussenvoegsels" name="txtTussenvoegsels" placeholder="Tussenvoegsels">
                </li>
                <li>
                    <label for="txtAchternaam">Achternaam</label><br>
                    <input type="text" id="txtAchternaam" name="txtAchternaam" value="Janssen">
                </li>
            </ul>
            <ul class="radioinvoer">
                <li>
                    <input type="ja" id="ja"  name="vraag"value="JA" checked>
                    <label for="radio">Ja</label>
                </li>
                <li>
                    <input type="nee" id="nee"  name="vraag"value="Nee" checked>
                    <label for="radio">Nee</label>
                </li>
            </ul>
            <ul class="radioinvoer">
                <li>
                    <input type="radio" id="html" name="radKeuze" value="HTML">
                    <label for="html">HTML</label>
                </li>
                <li>
                    <input type="radio" id="css" name="radKeuze" value="CSS">
                    <label for="css">CSS</label>
                </li>
                <li>
                    <input type="radio" id="geen" name="radKeuze" value="Geen" checked>
                    <label for="geen">Geen van beide</label>
                </li>
            </ul>
            <ul class="checkinvoer">
                <li>
                    <input type="checkbox" id="ouder" name="chkOuder" value="Ja">
                    <label for="ouder">18 jaar of ouder</label>
                </li>
                <li>
                    <input type="checkbox" id="gamer" name="chkGamer" value="Ja">
                    <label for="gamer">Gamer</label>
                </li>
            </ul>
            <ul>
                <li>
                    <button type="submit">Verstuur via button</button>
                </li>
                <li>
                    <input type="submit" value="Verstuur via input" name="btnKnop">
                </li>
            </ul>
        </form>
    </div>
</main>

</body>
</html>