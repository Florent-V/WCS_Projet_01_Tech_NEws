<?php
    include '_data.php';

    extract($dataArticles[$id-1]);

    $comments = [
        ['picture' => 'default',
        'pseudo' => $pseudos[array_rand($pseudos)],
        'date' => '5 jours',
        'comment' => "Quoi qu'on dise concernant la conjoncture intrinsèque, il est nécessaire de s'intéresser à la plus grande partie des problématiques imaginables, parce que la nature a horreur du vide."],
    
        ['picture' => 'default',
        'pseudo' => $pseudos[array_rand($pseudos)],
        'date' => '6 jours',
        'comment' => "Pour réagir face à la baisse de confiance contextuelle, il est nécessaire d’anticiper la plus grande partie des problématiques du futur, et déjà en notre possession."],
    
        ['picture' => 'default',
        'pseudo' => $pseudos[array_rand($pseudos)],
        'date' => '6 jours',
        'comment' => "Où que nous mène la morosité présente, nous sommes contraints de gérer la plus grande partie des alternatives envisageables, depuis longtemps."],
    
        ['picture' => 'default',
        'pseudo' => $pseudos[array_rand($pseudos)],
        'date' => '8 jours',
        'comment' => "Quoi qu'on dise concernant la difficulté présente, je suggère fortement d’examiner les principales issues envisageables, avec beaucoup de recul."],
    
        ['picture' => 'default',
        'pseudo' => $pseudos[array_rand($pseudos)],
        'date' => '10 jours',
        'comment' => "Quelle que soit l'inertie générale, on ne peut se passer de se préoccuper de la majorité des stratégies de bon sens, toutes choses étant égales par ailleurs."],

        ['picture' => 'default',
        'pseudo' => $pseudos[array_rand($pseudos)],
        'date' => '10 jours',
        'comment' => "Dans le cas particulier de la crise présente, on ne peut se passer d’appréhender les principales ouvertures emblématiques, parce qu'il s'agit de notre dernière chance."],
    
        ['picture' => 'default',
        'pseudo' => $pseudos[array_rand($pseudos)],
        'date' => '10 jours',
        'comment' => "Où que nous mène la baisse de confiance observée, on ne peut se passer de gérer précisément les problématiques du futur, si l'on veut s'en sortir un jour."],
    
        ['picture' => 'default',
        'pseudo' => $pseudos[array_rand($pseudos)],
        'date' => '11 jours',
        'comment' => "Sauf que là, c'est nous qui sommes Marylin et toi John Wayne, dans un territoire vierge qui reste encore à découvrir, on le sent et on a vu que tu pouvais complètement gérer face à la fosse aux lions médiatiques, entre Quo Vadis et Gladiator."],
    
        ['picture' => 'default',
        'pseudo' => $pseudos[array_rand($pseudos)],
        'date' => '12 jours',
        'comment' => "Du fait de la sinistrose de l'époque actuelle, il serait bon d’uniformiser les relations des ouvertures s'offrant à nous, et déjà en notre possession."],
    
        ['picture' => 'default',
        'pseudo' => $pseudos[array_rand($pseudos)],
        'date' => '15 jours',
        'comment' => "Mais laissez-moi rire,  on dirait que tu t'exprimes sans savoir de quoi tu parles réellement… à aucun moment tes idées ne mentionnent la télé-réalité (je serais étonné de constater le résultat dans 15 ans) , et qui n'est pas d'accord pour dire que les cadres sont quand même plus heureux au soleil . Je ne comprends pas pourquoi tu t'énerves, il faut apprendre à supporter les sacro-saints patrons d'Amazon qui créent du boulot sans corroborrer toute cette bien-pensance . Après tout, qui peut prétendre avoir lu tout internet ? "],
    ];

    //équivalent de :
    // foreach ($test as $key => $valeur) {
    //     $$key = $valeur;
    // }
ob_start();
?>

<p>Git est devenu indispensable pour versionner vos projets de développement. Il est même utilisé à d’autres fins, comme versionner des textes de loi et en identifier les modifications. Si vous ne connaissez pas suffisamment Git, je vous invite à lire notre article dédié. Cependant plus un projet grossit, plus le nombre de développeurs croît. Une organisation autour du Git devient alors nécessaire pour avancer sereinement. Et c’est là qu’intervient Gitflow.</p>

<h2>La problématique rencontrée avec Git</h2>

<p>La vie d’un projet est parfois compliquée. Il peut passer d’une petite taille sans aucun utilisateur, à une dimension plus conséquente avec de nombreux utilisateurs… et toutes leurs attentes. Lorsqu’on rencontre des difficultés à prioriser les tâches, on recrute de nouveaux développeurs pour gérer la charge. Le temps qu’ils soient formés et qu’ils développent correctement, des bugs plus ou moins urgents apparaissent. Et c’est généralement à ce moment là que les ennuis s’amplifient.</p>
<p>La gestion des versions d’un projet devient alors compliquée, car il faut en parallèle :</p>


<ul>
    <li>Développer de nouvelles fonctionnalités.</li>
    <li>Corriger les bugs moins impactants pendant un sprint.</li>
    <li>Corriger rapidement les bugs bloquants et les déployer.</li>
    <li>Générer & mettre en production de nouvelles versions.</li>
</ul>
<p>
    Pour mener à bien toutes ces tâches simultanément avec une équipe de développeurs, il faut donc établir un workflow strict et bien organisé.
</p>
<h2>Gitflow règle le problème avec son workflow Git</h2>

<p>Gitflow est une extension Git développée par Vincent Driessen. Elle a fêté ses 10 ans en 2020, et est toujours utilisée dans de nombreuses entreprises.</p>
<p>Cette extension permet de gérer le versionnage du projet et pose un cadre. En effet, les développeurs qui travaillent sur un projet géré par Gitflow doivent suivre un workflow établi et éprouvé.</p>
<p>Dans le paragraphe suivant, vous découvrirez le mécanisme de Gitflow ainsi que le gain de temps qu’il vous apporte.</p>
<p>Pour utiliser Gitflow, vous devez l’installer sur votre système d’exploitation. Pour cela, rendez-vous sur le Wiki du repository GitHub.</p>


<h2>Le fonctionnement du workflow de Gitflow</h2>
<p><strong>Initialisation de Gitflow</strong></p>
<img src="../img/gitflow-init.png" alt="Image décrivant l'initialisation de git flow">

<p>Le système de Gitflow est basé sur la capacité de Git à gérer des branches. Les branches élémentaires pour Gitflow sont la Master et la Develop.</p>
<p>La branche Master représente l’état du projet en production. Quant à la branche Develop, elle contient les fonctionnalités développées pendant une période donnée ou un sprint. Lorsque la phase de développement est terminée, le code présent dans la branche Develop est transféré sur la Master.</p>
<p>Vous pouvez initialiser votre projet avec Gitflow à tout moment. Cependant, si vous découvrez l’outil, je vous invite à créer un projet de test.</p>
<p>Pour démarrer l’initialisation, lancez la commande suivante dans un projet versionné :</p>

<code>
    <pre>git flow init</pre>
</code>

<p>L’extension vous propose de préfixer les branches de Gitflow. Je vous conseille de laisser les valeurs par défaut et d’appuyer sur la touche entrée pour chaque proposition.</p>


<code>
    <pre>
Initialized empty Git repository in ~/project/.git/
No branches exist yet. Base branches must be created now.
Branch name for production releases: [master]
Branch name for "next release" development: [develop]


How to name your supporting branch prefixes?
Feature branches? [feature/]
Release branches? [release/]
Hotfix branches? [hotfix/]
Support branches? [support/]
Version tag prefix? []
</pre>
</code>

<p>Pour vérifier que l’initialisation s’est bien déroulée, lancez la commande suivante :</p>


<code>
    <pre>
$ git branch
* develop
master</pre>
</code>


<p>Vous pouvez constater l’apparition des branches essentielles de Gitflow.</p>


<p><strong>Développement d’une fonctionnalité avec Gitflow</strong></p>
<img src="../img/gitflow-feature.png" alt="Image décrivant le développement d'une nouvelle fonctionnalité">

<p>Pour l’extension Git, démarrer une fonctionnalité (feature) sous-entend créer une branche spécifique. La raison est simple : si vous devez corriger un bug rapidement, vous pouvez changer de branche et retourner sur celle qui mérite une correction.</p>
<p>Vous pouvez aussi développer plusieurs fonctionnalités en parallèle, et c’est souvent le cas lorsqu’on travaille en équipe. Concrètement, pour démarrer une nouvelle fonctionnalité, vous devez lancer la commande suivante :</p>

<code>
    <pre>git flow feature start authentification</pre>
</code>

<p>Il faut bien entendu remplacer le terme authentification par le nom de votre fonctionnalité. J’ai pris comme exemple la fonction d’authentification. Exécuter cette commande indique à l’extension qu’il faut revenir sur la branche Develop et créer une branche à partir de celle-ci (nommée authentification).</p>
<p>Voici la traduction Git de cette opération :</p>

<code>
    <pre>
git checkout develop
git checkout -b feature/authentification
</pre>
</code>

<p>Ensuite, vous n’avez plus qu’à coder votre fonctionnalité. Lorsque vous avez fini, vous devez lancer la commande suivante :</p>

<code>
    <pre>git flow feature finish authentification</pre>
</code>

<p>Gitflow retourne sur la branche develop et la fusionne avec la branche feature/authentification. Une fois la fusion réussie, la branche est supprimée. La traduction Git est la suivante :</p>

<code>
    <pre>
git checkout develop
git merge feature/authentification
git branch -D feature/authentification
</pre>
</code>

<p><strong>Créer une nouvelle version (release) avec Gitflow</strong></p>
<img src="../img/gitflow-feature.png" alt="Image décrivant la création d'une nouvelle version avec gitflow">

<p>La suite évidente est donc la mise en production de votre sprint ou de votre période de travail sur la branche de développement (develop). Pour créer une nouvelle version (release), il vous suffit d’exécuter la commande suivante </p>

<code>
    <pre>git flow release start 1.0.0</pre>
</code>

<p>L’extension crée une release/nouvelle version. Pour cela, elle se place sur la branche develop et crée une nouvelle branche nommée release/1.0.0.</p>
<p>A ce moment, vous pouvez séparer l’équipe de développement en deux. Une partie vérifie et teste le code, l’autre commence le développement d’un nouveau sprint sur la branche develop.</p>
<p>En cas d’erreur sur la branche release, vous pouvez apporter directement une correction.</p>
<p>Après avoir effectué les tests et que vous êtes à mettre en production, vous devez lancer la commande suivante :</p>

<code>
    <pre>git flow release finish 1.0.0</pre>
</code>

<p>L’extension revient sur la branche master et fusionne le contenu de la branche release/1.0.0.</p>
<p>Voici la traduction Git :</p>

<code>
    <pre>
git checkout master
git merge release/1.0.0
</pre>
</code>

<p>Un tag local est aussi créé pour marquer la version dans Git. Pour envoyer le tag sur votre serveur de version, lancez la commande suivante :</p>


<code>
    <pre>git push origin --tags</pre>
</code>


<p>C’est très pratique pour retourner dans une version antérieure. Je ne vous le souhaite pas mais si une nouvelle version plante tout votre système, vous pouvez retourner en arrière et installer une précédente version de cette manière.</p>
<p>Attention : il m’est déjà arrivé que la création de tag ne fonctionne pas correctement avec Gitflow. Je vous invite donc à vérifier sa présence à chaque fin de release.</p>


<p><strong>Correction de bug urgent en production</strong></p>

<img src="../img/gitflow-hotfix.png" alt="Image descrivant la correction de bug urgent en production">

<p>Étape finale du workflow de Gitflow : la gestion d’erreur bloquante en production. Dans ce cas, inutile de paniquer : il faut créer un hotfix. Pour cela, il suffit de lancer la commande suivante :</p>


<code>
    <pre>git flow hotfix start change_api_url</pre>
</code>



<p>Cette commande crée une nouvelle branche à partir de la Master. En terme Git, voici ce que cela signifie :</p>

<code>
    <pre>
git checkout master
git checkout -b hotfix/change_api_url
</pre>
</code>

<p>Puis lorsque vous avez terminé votre hotfix et que vous êtes prêt à le livrer, il vous suffit de lancer cette commande :</p>

<code>
    <pre>git flow hotfix finish change_api_url</pre>
</code>

<p>C’est l’une des opérations les plus compliqués de Gitflow. En effet, votre correction est transmise sur la branche Master et sur la branche Develop. En d’autres termes, Git effectue ces commandes :</p>


<code>
    <pre>
git checkout master
git merge hotfix/change_api_url
git checkout develop
git merge hotfix/change_api_url
git branch -D hotfix/change_api_url
</pre>
</code>


<p><strong>Précisions sur la gestion des branches avec Gitflow</strong></p>


<img src="" alt="">

<p>Il y a deux autres sous-fonctions très utiles avec Gitflow. Lorsque vous créez des hotfixes, releases, features, vous obtenez des branches locales (sur votre ordinateur). Si vous souhaitez que d’autres développeurs puissent travailler dessus (très pratique pour les releases), vous devez utiliser le mot clé Publish.</p>
<p>Par exemple :</p>

<code>
    <pre>git flow release publish 1.0.0</pre>
</code>

<p>Gitflow va pousser cette branche sur votre serveur de gestion de version. Si un autre développeur souhaite travailler dessus avec vous, il lui suffit de lancer la commande suivante :</p>


<code>
    <pre>git flow release pull origin 1.0.0</pre>
</code>


<h2>Gitflow n’est pas adapté à tous les projets</h2>


<p>Comme indiqué plus haut, Gitflow s’avère très utile à partir d’un certain stade. Bien évidemment, rien ne vous empêche de l’utiliser dès le début d’un projet. Cependant, il existe un type de projet avec lequel Gitflow est incompatible.</p>
<p>En effet, Gitflow gère une seule version du produit. En d’autres termes, imaginez que vous ayez des versions différentes en fonction de vos clients.</p>

<ul>
    <li>Une version personnalisée pour le client A (v1.2a).</li>
    <li>Une version commune à tous (v3).</li>
    <li>Un client B qui attend 1 an avant d’avoir la mise à jour (v2).</li>
</ul>

<p>Si vous utilisez Gitflow dans ce contexte, vous risquez de rencontrer de nombreux problèmes. Par exemple : comment corriger un bug uniquement sur la v1.2a ?</p>
<p>En conclusion, Gitflow peut être utilisé tant que vous n’avez pas de versions différentes selon les clients.</p>


<h2>Conclusion</h2>

<p>Désormais, vous pouvez appliquer Gitflow à vos projets. Corrigez des bugs à la volée sans prise de tête, passez de fonctionnalité en fonctionnalité et travaillez en équipe plus simplement.</p>
<p>💬 Comment faites-vous pour gérer le développement de nouvelles fonctionnalités, la mise en production… ? Dites-le nous en commentaire.</p>




<?php

$body = ob_get_contents();
ob_end_clean();