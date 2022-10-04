<?php 
    include '_data.php';
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
    <link rel="stylesheet" href="./style/home.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.2/css/all.css" />

</head>
<body>
    <?php 
        include '_header.php';
    ?>
    
    <main>
        <section>
            <h1>Article à la Une</h1>
            
        </section>

        <?php foreach($dataArticles as $article): ?>
            <article>
                <h1><?= $article['title']?></h1>
                <i class="<?= $article['icon'];?>"></i>
                <p class="description">
                    <?= $article['description'] ?>
                </p>
                <div class='author'>
                    <img src="./img/profile_pic_<?=$article['picture']?>.png" alt="Photo de profil de l'auteur">
                    <p><?= $article['author'] ?></p>
                    <p class="infos"><span><?= $article['date'] ?></span><i class="fa-solid fa-circle"></i><span><?= $article['time'] ?></span></p>
                </div>
                <a href="./article.php"></a>
    

                <p class='social'>
                    <span><i class="fa-regular fa-bookmark"></i></span>
                    <span><i class="fa-regular fa-message"></i> <?= $article['social'][0] ?> </span>
                    <span><i class="fa-regular fa-thumbs-up"></i> <?= $article['social'][1] ?> </span>
                    <span><i class="fa-solid fa-share-nodes"></i></span>
                </p>
            </article>
        <?php endforeach; ?>

    </main>

    <?php 
        include '_footer.php';
    ?>
    


    
    
</body>
</html>