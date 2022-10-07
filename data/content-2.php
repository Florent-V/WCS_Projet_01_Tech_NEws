<?php
    include '_data.php';

    extract($dataArticles[$id-1]);

    $comments = [
        ['picture' => 'default',
        'pseudo' => $pseudos[array_rand($pseudos)],
        'date' => '5 jours',
        'comment' => "Mais laissez-moi rire,  on dirait que tu t'exprimes sans savoir de quoi tu parles réellement… à aucun moment tes idées ne mentionnent la télé-réalité (je serais étonné de constater le résultat dans 15 ans) , et qui n'est pas d'accord pour dire que les cadres sont quand même plus heureux au soleil . Je ne comprends pas pourquoi tu t'énerves, il faut apprendre à supporter les sacro-saints patrons d'Amazon qui créent du boulot sans corroborrer toute cette bien-pensance . Après tout, qui peut prétendre avoir lu tout internet ? "],
    
        ['picture' => 'default',
        'pseudo' => $pseudos[array_rand($pseudos)],
        'date' => '6 jours',
        'comment' => "Quoi qu'on dise concernant la sinistrose de la société, il serait intéressant de favoriser les relations des améliorations imaginables, parce que nous le valons bien."],
    
        ['picture' => 'default',
        'pseudo' => $pseudos[array_rand($pseudos)],
        'date' => '6 jours',
        'comment' => "Malgré l'ambiance intrinsèque, il ne faut pas s'interdire d’arrêter de stigmatiser parmi les améliorations possibles, à long terme."],
    ];

    //équivalent de :
    // foreach ($test as $key => $valeur) {
    //     $$key = $valeur;
    // }
ob_start();
?>

<h2>Avant PHP 8</h2>
<p>
    Si vous avez déjà manipulé des chaines de caractères en PHP, vous avez forcément utilisé à un 
    moment les fonctions substr ou strpos.
</p>
<ul>
    <li>substr permet d’extraire un morceau d’une chaine de caractères.</li>
    <li>strpos permet de connaitre la position d’une chaine de caractères dans une chaine de caractères principale.</li>
</ul>
<p>Ces fonctions étaient souvent utilisées pour deux choses :</p>
<ul>
    <li>substr pour savoir si une chaine de caractères commence (ou termine) par certains caractères</li>
    <li>strpos pour savoir si une chaine de caractères contient certains caractères</li>
</ul>
<p>Exemple :</p>
<code>
    <pre>
$chaine = 'DEBUT_MILIEU_FIN';

// substr

if (substr($chaine, 0, 5) === 'DEBUT') {
    echo 'DEBUT est au début.';
}

if (substr($chaine, strlen($chaine) - 3, 3) === 'FIN') {
    echo 'FIN est à la fin.';
}

// Ou encore
if (substr($chaine, -3) === 'FIN') {
    echo 'FIN est à la fin.';
}


// strpos

// Avec l'obligation d'utiliser une comparaison stricte
if (strpos($chaine, 'MILIEU') !== false) {
    echo 'MILIEU est dans la chaine';
}

// Si j'oublie ma comparaison stricte
if (strpos($chaine, 'DEBUT') != false) {
    echo 'DEBUT est au début.'; // N'est pas affiché
}
</pre>
</code>
<h2>str_starts_with, str_ends_with et str_contains</h2>
<p>Avec PHP 8, 3 fonctions ont fait leur apparition pour réaliser ces opérations de façon beaucoup plus naturelle.</p>
<p><strong>str_starts_with</strong></p>
<code>
    <pre>
if (str_starts_with($chaine, 'DEBUT')) {
    echo 'DEBUT est au début.';
}
</pre>
</code>
<p><strong>str_ends_with</strong></p>
<code>
    <pre>
if (str_ends_with($chaine, 'FIN')) {
    echo 'FIN est à la fin.';
}
</pre>
</code>
<p><strong>str_contains</strong></p>
<code>
    <pre>
if (str_contains($chaine, 'MILIEU'))  {
    echo 'MILIEU est dans la chaine';
}
</pre>
</code>
<p>Fini de manipuler des index avec substr.</p>
<p>Fini de devoir utiliser une comparaison stricte car la fonction strpos a 2 types de retour différents.</p>
<p>On a des fonctions qui sont mieux nommées, donc plus explicites, avec un rôle bien défini./p>


<h2>Important</h2>

<p>Ces fonctions sont sensibles à la casse :</p>
<code>
    <pre>str_contains($chaine, 'milieu'); // false</pre>
</code>
<p>Si on recherche le caractère vide, alors ces 3 fonctions retourne true :</p>
<code>
    <pre>
str_contains($chaine, ''); // true
str_ends_with($chaine, ''); // true
str_starts_with($chaine, ''); // true
</pre>
</code>

<p>Les fonctions substr et str(i)pos conservent leur utilité pour des cas d’usage différents.</p>



<?php

$body = ob_get_contents();
ob_end_clean();