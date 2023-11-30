<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage()); 
}

  
  if(isset($_GET['id'])){
    $id_champ= $_GET['id'];
    
    $modif= $bdd->prepare("SELECT * FROM users WHERE id= :id");
    $modif->execute([
      'id' => $id_champ
    ]);
    $resultat= $modif->fetch();
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


<section>
<h1>Pages administrateur</h1>


<div class="dif">
<form method="post" action="">
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="password" name="pass" id="pass" class="form-control" value="<?php echo $resultat['pass'] ?>"/>
    <label class="form-label" for="form1Example1">Password</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="email" name="email" id="email" class="form-control" value="<?php echo $resultat['email'] ?>" />
    <label class="form-label" for="form1Example2">Email address</label>
  </div>
  
  
  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="texte" name="texe" id="email" class="form-control" value="" />
    <label class="form-label" for="form1Example2">administrateur</label>
  </div>


  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
        <label class="form-check-label" for="form1Example3"> Remember me </label>
      </div>
    </div>

   
  </div>

  <!-- Submit button -->
  <button type="submit" name="submit" class="btn btn-primary btn-block">Modifier</button>
  
  <?php if(isset($_POST['submit'])){
     $email = $_POST['email']; $pass = $_POST['pass']; $id=$id_champ;
     $sql="UPDATE `users` SET `email`='$email',`pass`='$pass' WHERE `id`='$id' ";
     
     $result= $bdd->query($sql);
     if($result){
       header('location:tableau.php');
     }else{
       echo "Error updated";
     }
  }
  ?>
</form>
</div>
</section>