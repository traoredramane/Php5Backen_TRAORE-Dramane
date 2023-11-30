 
<?php
session_start();
try
{
$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage()); 
}
?>
 
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    
    
</head>
<body>
 
<section class="header">
        <nav>
            <a href=""><img src="logo.jpg" alt="" /></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-solid fa-xmark" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">ACCEUIL</a></li>
                    <li><a href="">NOS ACTIVITES</a></li>
                    <li><a href="">A PROPOS</a></li>
                    <li><a href="contact.php">NOUS CONTACTER</a></li>
                </ul>
            
            </div>
            <i class="fa fa-solid fa-bars fa" onclick="showMenu()"></i>
        </nav>

        <div class="text-box">
           <marquee behavior="" direction="right"><h1>Compagnie de Transport et Tourisme</h1></marquee> 
           
           <h2>Faites le tour du Burkina Faso</h2>
           
           <marquee behavior="" direction="left"> <p>Le Burkina Faso, un pays de diversité touristique avec de forte potentiel culturel nous invites a le visité.</p></marquee>
           
            <a href="connect.php" class="hero-btn">S'inscrire</a>   <a href="inscri.php" class="hero-btn">Se connecter</a>
        </div>
    </section><br><br>