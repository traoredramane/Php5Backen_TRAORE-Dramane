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



    $rol= $bdd->query("SELECT role_utilisateur FROM admi WHERE role_utilisateur= 'utilisateur' ");
    $role= $rol->fetch();
    $requete = $bdd->prepare("INSERT INTO users VALUES (0, :nom, :prenom, :numero, :pseudo, :email, :pass, :statut) ");
    $requete->execute([
        
            "nom" => $nom,
            "prenom" => $prenom,
            "pseudo" => $pseudo,
            "numero" => $numero,
            "email" => $email,
            "pass" => $pass,
            "statut" => $role['role_utilisateur'],
        
        
    ]);
    header("location: inscri.php");
}     
?>