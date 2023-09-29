<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage()); 
}

if(isset($_POST['submit'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $numero = $_POST['numero']; 
    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $requete = $bdd->prepare("INSERT INTO users VALUES (0, :nom, :prenom, :numero, :pseudo, :email, :pass) ");
    $requete->execute(
        array(
            "nom" => $nom,
            "prenom" => $prenom,
            "pseudo" => $pseudo,
            "numero" => $numero,
            "email" => $email,
            "pass" => $pass,
        )
        
    );
    header("location: inscri.php");
}     
?>