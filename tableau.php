 
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


<section class="">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="bari container-fluid">
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarTogglerDemo03"
      aria-controls="navbarTogglerDemo03"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
   
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active xi" aria-current="page" href="inscri.php">Se connecter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="connect.php">S'inscrir</a>
        </li>
       
      </ul>
      <form class="d-flex input-group w-auto">
        <input
          type="search"
          class="form-control"
          placeholder="Type query"
          aria-label="Search"
        />
        <button
          class="btn btn-outline-primary"
          type="button"
          data-mdb-ripple-color="dark"
        >
          
        </button>
      </form>
      
    </div>
  </div>
</nav><br><br>

<section class="tra">
<h1>Page Administrateur</h1>


<table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
 
  

    <tr>
      <th>Nom <br>Addresse Email</th>
      <th>Prenom</th>
      <th>Numero</th>
      <th>nom d'utilisateur</th>
      <th>Mot de pass</th>
      <th>Statut</th>
      <th>Actions</th>
    </tr>
  </thead>
  
  <tbody>
   
  <?php  
  
  $req= $bdd->query("SELECT * FROM users");
  while($user= $req->fetch()){
    ?>
    <tr>
    
      <td>
        <div class="d-flex align-items-center">
          <img
              src="https://mdbootstrap.com/img/new/avatars/8.jpg"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
              />
          <div class="ms-3">
            <p class="fw-bold mb-1"><?php echo $user['nom']?></p>
            <p class="text-muted mb-0"><?php echo $user['email']?></p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1"><?php echo $user['prenom']?></</p>
       
      </td>
      <td>
      <p class="fw-normal mb-1"><?php echo $user['numero']?></</p>
      </td>
      <td><?php echo $user['pseudo']?></td>
      <td>
      <?php echo $user['pass']?>
      </td>
      <td><?php echo $user['statut']?></td>
      <td> <button type="button" class="btn btn-link btn-sm btn-rounded">
      <a href="modif.php?id=<?php echo $user['id'];?>"><button class="btn btn-primary">modifier</button></a>
          <a href="sup.php?id"><button class="btn btn-outline-secondary">suprimer</button></a>
        </button></td>
    </tr>
   
    </tr>
    <?php } ?> 
  </tbody>
</table>

</section>