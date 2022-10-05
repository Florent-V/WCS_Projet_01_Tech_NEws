<?php
    include '_data.php';

    extract($dataArticles[$id-1]);

    //équivalent de :
    // foreach ($test as $key => $valeur) {
    //     $$key = $valeur;
    // }
ob_start();
?>

<h2>requestSubmit()</h2>

<p>Safari 16 sera le dernier navigateur à ajouter la prise en charge de requestSubmit.</p>
<p>Avant d'examiner comment .requestSubmit()fonctionne, rappelons-nous comment la soumission par programmation d'un formulaire avec JavaScript fonctionne lors de l'utilisation de la .submit()méthode. L'envoi d'un formulaire avec submit()ne déclenche pas d'événement d'envoi. Ainsi, dans le code suivant, le formulaire est soumis, preventDefault()n'a aucun effet et rien n'est enregistré dans la console :</p>


<code>
    <pre>
        const form = document.forms[0];
        form.addEventListener('submit', function(event) {
          // code to submit the form goes here
          event.preventDefault();
          console.log('form submitted!');
        });
        
        document.querySelector('.btn').addEventListener('click', function() {
          form.submit();
        })
    </pre>
</code>

<p>.submit()ignorera également toute validation de formulaire HTML. Étant donné le balisage suivant, le formulaire sera soumis lorsque l'entrée est vide même si l'entrée a un requiredattribut</p>

<p>.requestSubmit()est une autre façon de soumettre un formulaire à l'aide de JavaScript, mais contrairement à .submit(), la validation du formulaire HTML empêchera la soumission du formulaire. Si toutes les données saisies dans le formulaire sont validées, l' submitévénement sera déclenché, ce qui signifie "formulaire soumis !" serait connecté à la console dans l'exemple suivant :</p>

<code>
    <pre>
        form.addEventListener('submit', function(event) {
          event.preventDefault();
          console.log('form submitted!');
        });
        
        document.querySelector('.btn').addEventListener('click', function() {
          form.requestSubmit();
        })
    </pre>
</code>









<?php

$body = ob_get_contents();
ob_end_clean();