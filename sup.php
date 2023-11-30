
<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage()); 
}


if (isset($_GET['id'])) {
    $id_champ = $_GET['id'];
    
    $sel = $bdd->prepare("SELECT * FROM users id= :id");
    $sel->execute([
        ':id' => $id_champ,
    ]);
    
    $d=$sel->fetch();
    $supr = $bdd->prepare("DELETE FROM users WHERE id= :id");
    $suprl->execute([
        ':id' => $id_champ,
    ]);
    $_SESSION['supr']='suprimer avec succes';

header('location: tableau.php?id='.$d['id']);
    
}







?>

