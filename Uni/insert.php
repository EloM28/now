<?php
$ori=new PDO('mysql:host=localhost;dbname=login','root','');

$pdostat=$ori->prepare('INSERT INTO log (Nom,prenom,email,Mot de passe) VALUES (:Nom,:prenom,:email,:Mot de passe)');

$pdostat->bindvalue(':Nom',$POST_['nom'],PDO::PARAM_STR);
$pdostat->bindvalue(':prenom',$POST_['prenom'],PDO::PARAM_STR);
$pdostat->bindvalue(':mail',$POST_['mail'],PDO::PARAM_STR);
$pdostat->bindvalue(':Mot de passe',$POST_['password'],PDO::PARAM_STR);

$InsertIsOk=$pdostat->execute();

if($InsertIsOk){
    $messg='Le tuple est bien inseré';
}
else{
    $messg='L\insertion n\est pas faite';}
    ?>

    <!doctype html>
    <html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <meta http-equiv="X-UA-Compatible" content="ie=edge>
    <tittle>docs</title>
    </head>
    <body>
    <h1>insertion des données</h1>
    <p><?php echo $messg; ?></p>
    </body>
    </html>