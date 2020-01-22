<?php
include "data.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Google FAQs</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="public/css/app.css">
    </head>
    <body>
        <header>
            <strong></strong>
            <div class="header-logo">
                <img src="https://www.freepnglogos.com/uploads/google-logo-png/google-logo-png-google-sva-scholarship-20.png" alt="logo Google">
                <span>Termini e Condizioni</span>
            </div>
            <div class="header-menu">
                <ul>
                    <li>Panoramica</li>
                    <li>politica sulla riservatezza</li>
                    <li>Termini del servizio</li>
                    <li>tecnologie</li>
                    <li>FAQ</li>
                </ul>
                <span>Account Google</span>
            </div>
        </header>
        <main>
            <?php
            foreach ($faqs as $key => $answers) {
                echo ($key);
                echo ($answers);
                echo "<br>";
            }
            ?>
        </main>
        <footer>
            <div class="footer-content">
                <small>Google - Informazioni su Google - vita privata - condizioni</small>
                <select>
                    <option>Deutsch</option>
                    <option>English</option>
                    <option>Français</option>
                    <option>Italiano</option>
                    <option>Polski</option>
                    <option>中文（简体中文</option>
                </select>
            </div>
        </footer>
    </body>
</html>
