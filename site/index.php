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
    <link rel="stylesheet" href="css/style.css">
</head>
<div class="container">
    <main>
        <form action="" method="get">
            <div class="groep_types">
                <ul>
                    <li>
                        <label for="txtFirst">Your name:</label>
                        <input type="text" id="txtFirst" name="txtFirst" placeholder="First" autofocus>
                    </li>


                    <li>
                        <input type="text" id="txtLast" name="txtLast" placeholder="Last">
                    </li>
                </ul>
            </div>
            <div class="groep_types">
                <ul>
                    <li>
                        <label for="email">E-mail:</label>
                        <p class="extra-info">We're going to reply to your message by email</p>
                        <input type="email" id="txtemail" name="txtemail">
                    </li>
                </ul>
            </div>
            <div class="groep_types">
                <ul>
                    <li>
                        <label for="Phone">Phone:</label>
                        <p class="extra-info">Only if you want to call us</p>
                        <input type="tel" id="txtPhone" name="txtPhone" placeholder="### ### ###" autofocus>
                    </li>
                </ul>
            </div>
            <div class="groep_types">
            <ul>
                <li>
                    <label for="message">Your message: </label>
                    <textarea name="message" id="txtmessage" cols="67" rows="10" autofocus></textarea>
                </li>
            </ul>
            </div>
            <div class="groep_button">
            <ul>
            <li>
                <button type="submit">Send</button>
            </li>
            </ul>
            </div>
        </form>
    </main>
</div>

<body>

</body>

</html>