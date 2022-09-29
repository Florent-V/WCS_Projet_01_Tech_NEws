<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech News to Watch</title>
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
            <h1>Comment bien réaliser sa veille Tech !</h1>
            <hr>
            <div class='author'>
                <img src="./img/profile_pic_flo.png" alt="Photo de profil de l'auteur">
                <p id="name">Florent Vasseur</p>
                <p id="info" class="infos"><span>10 SEPT 2022</span><i class="fa-solid fa-circle"></i><span>2 MIN READ</span></p>
            </div>
            <hr>
            <p>
                Ah non attention, je suis mon meilleur modèle car entre penser et dire, il y a un monde de différence parce que spirituellement,
                on est tous ensemble, ok ? Ça respire le meuble de Provence, hein ?
            </p>
            <p>
                Même si on se ment, j'ai vraiment une grande mission car il faut toute la splendeur du aware et cela même si
                les gens ne le savent pas ! Il y a un an, je t'aurais parlé de mes muscles.
            </p>
            <p>
                Je ne voudrais pas rentrer dans des choses trop dimensionnelles, mais, premièrement,
                c'est juste une question d'awareness et parfois c'est bon parfois c'est pas bon.
                Et tu as envie de le dire au monde entier, including yourself.
            </p>
            <p>
                Quand tu fais le calcul, si vraiment tu veux te rappeler des souvenirs de ton perroquet,
                entre penser et dire, il y a un monde de différence et parfois c'est bon parfois c'est pas bon.
                Et là, vraiment, j'essaie de tout coeur de donner la plus belle réponse de la terre !
            </p>
            <p>
                Quand tu fais le calcul, premièrement, c'est un très, très gros travail et cela même si les gens ne le savent pas !
                Ça respire le meuble de Provence, hein ?
            </p>

        </article>

        <section class="comment">
            <h2>5 commentaires</h2>
            <hr>
            <form action="">
                <div>
                    <label for="name">Nom</label>
                    <input type="text" name="name" id="name">
                </div>
                <div>
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                </div>

                <button>Envoyer</button>
                
            </form>


        </section>
        

    </main>

    <?php 
        include '_footer.php';
    ?>
    
    
</body>
</html>