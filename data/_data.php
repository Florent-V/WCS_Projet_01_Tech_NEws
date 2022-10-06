<?php 

$icons = [
    'general' => 'fa-solid fa-graduation-cap',
    'php' => 'fa-brands fa-php',
    'js' => 'fa-brands fa-square-js',
    'css' => 'fa-brands fa-css3-alt',
    'symfony' => 'fa-brands fa-symfony',
    'html' => 'fa-brands fa-html5',
    'git' => 'fa-brands fa-square-github',
];


$dataArticles = [
    ['title' => 'Comment bien réaliser sa veille Tech ?',
    'description' => 'La tech étant en constante évolution, il est nécessaire de mettre en permanence ces 
    connaissances à jour au risque d\'être vite dépassé. Cette tâche bien qu\'indispensable peut être vite chronophage.
    Cet article est là pour vous aider !',
    'icon' => $icons['general'],
    'author' => 'Florent Vasseur',
    'date' => '10 SEPT 2020',
    'time' => '2 MIN READ',
    'picture' => 'flo',
    'social' => [5, 15,],],

    ['title' => 'Les nouvelles fonctions str_ en PHP 8',
    'description' => 'Avec PHP 8, 3 fonctions ont fait leur apparition pour réaliser certaines opérations de façon beaucoup 
    plus naturelle qu\'elles n\étaient faites précédemment !',
    'icon' => $icons['php'],
    'author' => 'Jessica Pêcheux',
    'date' => '10 SEPT 2020',
    'time' => '3 MIN READ',
    'picture' => 'jess',
    'social' => [3, 12,],],

    ['title' => 'La nouvelle vague des framework JavaScript',
    'description' => 'Pourquoi une prolifération des nouveaux frameworks JS ? Une plongée dans les problèmes à grande échelle
    et l\'évolution récenet de l\'innovation',
    'icon' => $icons['js'],
    'author' => 'Maxence Hattabi',
    'date' => '10 SEPT 2020',
    'time' => '4 MIN READ',
    'picture' => 'maxence',
    'social' => [6, 7,],],

    ['title' => 'Git Flow, le WorkFlow incontournable',
    'description' => 'Git est devenu indispensable pour versionner nos projets, et, plus le projet grossit, plus le
    nombre de développeur croît. Une organisation autour du Git devient alors nécessaire pour avancer sereinement : 
    c\'est le Gitflow !',
    'icon' => $icons['git'],
    'author' => 'Alexandre Delmotte',
    'date' => '10 SEPT 2020',
    'time' => '5 MIN READ',
    'picture' => 'alexandre',
    'social' => [10, 4,],],

    ['title' => 'Quoi de neuf pour les formulaires en 2022 ?',
    'description' => 'Les navigateurs ajoutent constamment de nouvelles fonctionnalités HTML, JavaScript et CSS.
    Voici quelques ajouts utiles pour travailler avec des formulaires que vous avez peut être manqués...',
    'icon' => $icons['html'],
    'author' => 'Florent Vasseur',
    'date' => '10 SEPT 2020',
    'time' => '2 MIN READ',
    'picture' => 'flo',
    'social' => [5, 15,],],
];

$pseudos = ['CyberWar','AmiboThunder','AimMilo','NarutoWorld','BraveVador',
'LuckI','WhiteEagle','PotatoChicken','WhiteRiver','HealFreestyle',
'SteakGama','GodzillaBannana','JackpotFrench','WhiteFly','FishFr',
'LotusRubis','RexRex','GokuWorld','RealitySnake','RiverSmall',
'TruckCloud','MissTroll','CanardGx','ShieldRiku',];


$comments = [
    ['picture' => 'default',
    'pseudo' => $pseudos[array_rand($pseudos)],
    'date' => '15 jours',
    'comment' => "Euh excuse-moi, mais c'est quand même frappant niveau logique : j'imagine bien à quel point tu n'as aucune idée de comment se 
    déroule une éléction vue par les joueurs de foot (et on n'y peut rien…) , et les experts sont unanimes pour dire que Trump & sa clique 
    n'ont aucune idée des dangers de ce type de dérive . Il faut savoir rester humble, tu n'as aucune info concrète sur les provinciaux qui sont 
    les seuls à soutenir les opposants à la PMA ! Et sinon, vous, ça va ? "],

    ['picture' => 'default',
    'pseudo' => $pseudos[array_rand($pseudos)],
    'date' => '15 jours',
    'comment' => "	Y'a une telle décharge d'énergie brute dans ce qui vient de se passer que je vais demander à Sinclair de me gifler. 
    Voilà. Oui, on aurait dit une matinée coquine dans un magasin de bonbons gélifiés avec des hélicoptères et Wagner qui hurle ses amours 
    métalliques. "],

    ['picture' => 'default',
    'pseudo' => $pseudos[array_rand($pseudos)],
    'date' => '15 jours',
    'comment' => "Considérant l'impasse de la société, nous sommes contraints d’uniformiser la plus grande partie des problématiques imaginables, 
    en prenant toutes les précautions qui s'imposent."],
]



?>





