
<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage()); 
}

$Email_address= $_POST['email'];
$password= $_POST['pass'];
$req= $bdd->prepare("SELECT * FROM users WHERE email= :email AND pass= :pass");
$req->execute([
    "email"=> $Email_address,
    "pass"=> $password,
]);
$user= $req->fetch();


$recu= $bdd->prepare("SELECT statut FROM users WHERE email= :email AND pass= :pass");
$recu->execute([
    "email"=>$Email_address,
    "pass"=> $password,
]);
$statut= $recu->fetch();

if($user['email'] AND $user['pass'] AND $statut['statut'] == 'administrateur'){
    session_start();
    $_SESSION['email']= $Email_address;
    $_SESSION['pass']= $password;
    header('Location: tableau.php');
    
    
} else if ($user['email'] AND $user['pass'] AND $statut['statut'] == 'utilisateur'){
    session_start();
    $_SESSION['email']= $Email_address;
    $_SESSION['pass']= $password;
    header('Location: index.php'); 
}

?>