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
    
<section class="fors">

<h1>Formulaire d'inscription</h1><br>
<div class="rows for">


<div class="col-fors fir">
<h1>Contact</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, sapiente. Assumenda deleniti veritatis animi reiciendis, repudiandae consequatur quos dolores quod ea? Voluptatem, mollitia? Eveniet odit, magni sed molestias soluta, inventore molestiae aperiam quis maiores qui asperiores nemo totam recusandae expedita.</p>

<h4>Lorsque vous remplissez tous les cases, vous recevrez automatiquement un messages de confirmation qui confirmera votre demande.</h4>
</div>



<div class="col-fors">

<form><br>
  <!-- Name input -->
  <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control" />
    <label class="form-label" for="form4Example1">Nom</label>
  </div>
  
  
   <!-- Name input -->
   <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control" />
    <label class="form-label" for="form4Example1">Prenom</label>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form4Example2" class="form-control" />
    <label class="form-label" for="form4Example2">Email address</label>
  </div>

 <!-- Name input -->
 <div class="form-outline mb-4">
    <input type="phone" id="form4Example1" class="form-control" />
    <label class="form-label" for="form4Example1">Numero</label>
  </div>

  <!-- Message input -->
  <div class="form-outline mb-4">
    <textarea class="form-control" id="form4Example3" rows="4"></textarea>
    <label class="form-label" for="form4Example3">Message</label>
  </div>


  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Envoyer</button>
</form>
</div>
</div>
</section>



<?php include("footer.php") ?>

   
</body>
</html>
