 
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
                
                
                <form>
                
                <?php
                
                if ($_SESSION['email']) {
                    echo $_SESSION['email'];
                    echo "<button style='margin-left: 20px; margin-right: 40px; height: 30px; background: red; border-radius: 5px; border: 2px solid wheat; text-align:center; font-size: 5px;'><a style='text-align: center; font-size: 1rem; text-decoration: none; color: white;' href='connect.php'> Deconnection</a></button>";
                }?>
         
                </form>
                
            </div>
            <i class="fa fa-solid fa-bars fa" onclick="showMenu()"></i>
        </nav>

        <div class="text-box">
           <marquee behavior="" direction="right"><h1>Compagnie de Transport et Tourisme</h1></marquee> 
           
           <h2>Faites le tour du Burkina Faso</h2>
           
           <marquee behavior="" direction="left"> <p>Le Burkina Faso, un pays de diversité touristique avec de forte potentiel culturel nous invites a le visité.</p></marquee>
           
            <a href="" class="hero-btn">Contacter nous pour plus d'infos</a>
        </div>
    </section><br><br>