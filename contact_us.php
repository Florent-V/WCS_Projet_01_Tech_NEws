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
    <h1 class="titleFormulaire">Formulaire de contact</h1>
      <div class="pForm"><p>Pour toutes questions, demandes ou suggestions veuillez utiliser ce formulaire pour nous contacter. <br /><br />
      Réponse rapide assurée !
    </p></div>
  
  <section class="boxFormulaire">
  <form method= "post" action="traitement.php"> 
        <h3>Contactez-nous</h3>                    
        <div class="namesBox">

          <div class="formElements">
            <label for="name">Prénom:</label><br />
            <input type="text" id="fname"name="firstane" placeholder="John" required>
          </div>

          <div class="formElements">
            <label for="name">Nom:</label><br />
            <input type="lastName" placeholder="Doe" />
          </div>
        </div>

        </div>

          <div class="formElements">
            <label for="email">Email:</label><br />
            <input type="text" id="email"name=email placeholder="@" required>
          </div>

          <div class="formElements">
            <label for="textMessage">Votre message</label><br />
            <textarea id="messageForm" name="Message" placeholder="Saisir votre message" ></textarea><br />
            <input type="submit" class="button">
        </div> 
        
      </form>

  </section>
</main>

  <?php include 
     '_footer.php';
  ?>
</body>
</html>

<!--<button><span>Envoyer</span></button>!-->

