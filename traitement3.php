<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage()); 
}


if $_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id']){
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    
    $rol= $bdd->query("SELECT role_utilisateur FROM admi WHERE role_utilisateur= 'utilisateur' ");
    $role= $rol->fetch();
    $requete = $bdd->prepare("INSERT INTO users VALUES (0, :email, :pass, :statut) ");
    $requete->execute([
        "email" => $email,
        "pass" => $pass,
        "statut" => $role['role_utilisateur'],
             
    ]);
    
    header("location: tableau.php");
};     
?>





















































²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²²