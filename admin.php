<?php

use function PHPSTORM_META\elementType;

require_once("./php/inc.php");
functionsBDincphp();
$classe="";
$activiter="";

if(isset($_REQUEST["AjoutClasse"])){
if(isset($_POST["classe"])){ 
    $classe=$_POST["classe"];
AjoutClasse($classe);
}
else{
    $classe = null;
}
}



if(isset($_REQUEST["AjoutActivite"])){
    if(isset($_POST["activiter"])){ 
        $activiter=$_POST["activiter"];
    AjoutClasse($activiter);
    }
    else{
        $activiter = null;
    }
    }
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../journeeSportive_NikolicSetfan/css/main.css">
    <title>Journée Sportive du CFPT</title>
</head>

<body>
    <h1>Page Administation</h1>
    <form action="#" method="POST">
        <p>Activité:<input type="text" name="activiter">
        </p>
        <p>Classe:<input type="text" name="classe">
        </p>

        <input type="submit" name="AjoutActivite" value="Ajouter une Activité">

        <input type="submit" name="AjoutClasse" value="Ajouter une Classe">
        </select>
        </p>


       
    </form>
    <?php

    ?>


</body>
<footer>
    <p>Nikolic Stefan</p>
</footer>

</html>