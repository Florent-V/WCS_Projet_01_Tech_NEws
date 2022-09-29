<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech News to Watch</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/contact.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.2/css/all.css" />

</head>
<body>
<i class="fa-solid fa-phone"></i>
<?php 
include '_header.php';
?>
<main>
  <section class="bandeau"></section>

  <section class="boxFormulaire">
    <form method= "post" action="traitement.php">                        
        <h3>Contact us</h3>

      <div class="namesBox">
            <label for="name">First name:</label><br />
            <input type="text" id="fname"name="firstane" placeholder="Your First name" required>
            <label for="name">Last name:</label><br />
            <input type="lastName" placeholder="lastName" />
      </div>

      <div class="formulaire">
        <input type="text" placeholder="" />
        <textarea placeholder="Your message" rows="10" cols="40"></textarea>
      </div> 
    </form>
  </section>
</main>
  <?php include 
     '_footer.php';
  ?>
</body>
</html>