<?php include("connexion.php") ?>

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
<?php include("nave.php") ?>
    
    
    <section class="vil">
  
    <?php
    $reponse = $bdd->query("select * from ville where id=1");
    while($donnees = $reponse->fetch()){
      ?>
   
   
  <h1><?php echo $donnees["nom"]?></h1>
    <!-- <h1>Trois grandes villes touristique du Burkina Faso</h1> -->
    <?php
    }
    ?>
    
    
    <?php
    $reponse = $bdd->query("select * from ville where id=1");
    while($donnees = $reponse->fetch()){
      ?>
   
   
  <p><?php echo $donnees["contenu"]?></p>
  
    <?php
    }
    ?>
    <!-- <p>Au Burkina Faso, l'ensemble de son milieu regorge de nombreux potentiel site touristique. Il renferme une diversité de site naturel qui est sacré et qui attire nombreuse personne à cela s'ajoute sa diversité culturelle qui offre plusieurs traditions à travers leur pratiquent ancienne dont la plupart attire de nombreux touristes à venir visiter. Ces differentes allegation nous amménes à la decouverte de trois(3) grandes villes touristiques du BF qui regorgent de nombreux site touristique dont certains sont dejà inscrit dans le patrimoine mondial de l'UNESCO. Pour en savoir plus, nous irons à leur rencontre.</p> -->
   
   
    <?php
    $reponse = $bdd->query("select * from ville where id=2");
    while($donnees = $reponse->fetch()){
      ?>
   
   
  <h3><?php echo $donnees["titre"]?></h3>
  
    <?php
    }
    ?>
   
   
    <div class="rows vile">
   
    <div class="col-vil">
   <h2>Le centre ville</h2>
   
   
   
   <?php
    $reponse = $bdd->query("select * from ville1 where id=4");
    while($donnees = $reponse->fetch()){
      ?>
   
   
 
  <img class="ma1"  src="<?php echo $donnees["image"]?>" alt="">
    <?php
    }
    ?>
    <!-- <img class="ma1" src="mairie.jpg" alt=""> -->
    </div>
    
    
     
    <div class="col-vil">
    
    <h2>La mosquée de Dioulassoba</h2>
    
    
   <?php
    $reponse = $bdd->query("select * from ville1 where id=5");
    while($donnees = $reponse->fetch()){
      ?>
   
   
 
  <img class="ma2" src="<?php echo $donnees["image"]?>" alt="">
    <?php
    }
    ?>
    <!-- <img class="ma2" src="mosque.jpg" alt=""> -->
    </div>
    
    
    
    <div class="col-vil">
    
    <h2>La carte du Burkina</h2>
    
    
    
   <?php
    $reponse = $bdd->query("select * from ville1 where id=6");
    while($donnees = $reponse->fetch()){
      ?>
   
   
 
  <img class="ma3"  src="<?php echo $donnees["image"]?>" alt="">
    <?php
    }
    ?>
    <!-- <img class="ma3" src="carte.jpg" alt=""> -->
    </div>
    
    
    </div>
    
    <div class="her0"><br>
    <a href="bobo.php" class="hero-btn1">En savoir plus sur Bobo</a>
    </div>
    </section><br><br>
    
    
    
    <section class="wag">
    <h1>La grande ville Banfora avec ces merveilles</h1>
   
   
   
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col do">
    <div class="card h-90">
      <img src="cascade1.jpg" class="card-img-top" alt="Hollywood Sign on The Hill"/>
      <div class="card-body">
        <h5 class="card-title">Cascade de Banfora</h5>
        <p class="card-text">
          Un lieu de detente des riverains
        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-80">
      <img src="piq1.jpg" class="card-img-top fo2" alt="Palm Springs Road"/>
      <div class="card-body">
        <h5 class="card-title">Les pics de Sindou</h5>
        <p class="card-text"></p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-80">
      <img src="hotelbf.jpg" class="card-img-top" alt="Los Angeles Skyscrapers"/>
      <div class="card-body">
        <h5 class="card-title">Hotel Splendide</h5>
        <p class="card-text"></p>
      </div>
    </div>
  </div>
  <div class="col">
  
   
  
   
    </section>
    
      
  <div class="her1"><br>
    <a href="" class="base2">Tous savoir sur Banfora</a>
    </div><br><br>
    
    
    <section class="baf">
    <h1>Ville de Ouagadougou</h1>
    
    <div class="rows bafs">
    
    <div class="col-baf">
    <h2>Monument des cineatres Africains</h2>
    <img class="ci" src="cineastre.jpg" alt="">
    </div>
    
    
    <div class="col-baf">
    <h2>Monument des Marthyrs</h2>
    <img class="me" src="monu.jpg" alt="">
    </div>
    
    
    <div class="col-baf">
    <h2>Memorial Thoma Sankara</h2>
    <img class="san" src="sank.jpeg" alt="">
    </div>
    
    </div>
    
    
    
    <div class="her2"><br>
    <a href="" class="hero-btn2">En savoir plus sur Bobo</a>
    </div>
    </section><br>
    
    
</body>
</html>


<?php include("footer.php") ?>