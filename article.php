<?php
$id = $_GET["id"];
$file = "./data/content-$id.php";
if (!file_exists($file)) {
    header("HTTP/1 404 Not found");
    die("Page not found");
}

include $file;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech News to Watch</title>
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/article.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.2/css/all.css" />
</head>

<body>
    <?php 
        include '_header.php';
    ?>
    
    <main>
        <article>
            <h1 id="top"><?=$title?></h1>
            <hr>
            <div class='author'>
                <img src="./img/profile_pic_<?=$picture?>.png" alt="Photo de profil de l'auteur">
                <p id="name"><?=$author?></p>
                <p id="info" class="infos"><span><?=$date?></span><i class="fa-solid fa-circle"></i><span><?=$time?></span></p>
            </div>
            <hr>
        
            <?=$body?>
        </article>

        <section class="comment-form" id="add-comment">
            <h2><?=count($comments)?> Commentaires</h2>
            <hr>
            <form action="">
                <div>
                    <label for="pseudo">Nom<span>Le nom ne doit pas être vide</span></label>
                    <input type="text" name="pseudo" id="pseudo" >
                </div>
                <div>
                    <label for="commentary">Message<span>Le message ne doit pas être vide</span></label>
                    <textarea name="commentary" id="commentary"  rows="10"></textarea>
                </div>

                <button>
                    <span>Envoyer</span>
                </button>
            </form>
        </section>



        <?php foreach($comments as $comment): ?>
            <section class="comment">
                <div class="comment-infos">
                    <img src="./img/<?=$comment['picture']?>.png" alt="photo de profil">
                    <span class="comment-pseudo"><?=$comment['pseudo']?></span>
                    <span class="comment-date">Il y a <span class="date"><?=$comment['date']?></span></span>
                </div>
                <p class="comment-content"><?=$comment['comment']?></p>
            </section>
        <?php endforeach; ?>        

    </main>

    


    <?php 
        include '_footer.php';
    ?>
    
    
</body>
</html>