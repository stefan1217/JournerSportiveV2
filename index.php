<?php require_once("./php/inc.php");
functionsBDincphp();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../journeeSportive_NikolicSetfan/css/main.css">
    <title>Journée Sportive du CFPT</title>
    <a href="../JournerSportiveV2/admin.php">Admin</a>
</head>

<body>
    <h1>Inscription à la Journée Sportive du CFPT</h1>
    <form action="#" method="POST">
        <p>Nom:<input type="text" value="Yorke">
        </p>

        <p>Prenom:<input type="text" value="Tham">
        </p>

        <p>Classe:<input type="text" value="IFA-P2B">
        </p>


        <p>Premier choix:
        <select id="choix1">
            <?php
            GetActivities();
            ?>
        </select>
        </p>

        <p>Deuxieme choix:
        <select id="choix2">
            <?php 
             GetActivities();
            ?>
        </select>
        </p>

        <p>Troisieme choix:
        <select id="choix3">
            <?php
                GetActivities();
            ?>
        </select>
        </p>


        <input type="submit" value="Confirmer">
        <input type="submit" value="Annuler">
    </form>
    <?php

    ?>


</body>
<footer>
    <p>Nikolic Stefan</p>
</footer>

</html>