<?php
function functionsBDincphp(){
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=journeesportive", 'AdminJourneSportive', 'super');
        $pdo->exec('SET NAMES utf8');
        return $pdo;
    } catch (PDOException $e) {
        echo "<p>Erreur: " . $e->getMessage();
        die();
    }
    
}




function GetActivities(){
    $pdo = new PDO("mysql:host=localhost;dbname=journeesportive", 'AdminJourneSportive', 'super');
    $pdo->exec('SET NAMES utf8');
    $result = $pdo ->query("SELECT nomActivite from activite;");
    while($line = $result ->fetch()){
$Activite = $line["nomActivite"];
echo "<option value=$Activite>$Activite</option>";


    } 
}

function AjoutClasse($classe){
    $pdo = new PDO("mysql:host=localhost;dbname=journeesportive", 'AdminJourneSportive', 'super');
    $pdo->exec('SET NAMES utf8');
    $insertion = $pdo ->exec("INSERT into classe (nomClasse) VALUES ('$classe');");

   
}


function AjoutActivite($activity){
    $pdo = new PDO("mysql:host=localhost;dbname=journeesportive", 'AdminJourneSportive', 'super');
    $pdo->exec('SET NAMES utf8');
    $insertion = $pdo ->exec("INSERT into activite (nomActivite) VALUES ('$activity');");

   
}
?>