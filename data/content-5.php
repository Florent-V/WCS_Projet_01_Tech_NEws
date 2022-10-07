<?php
    include '_data.php';

    $comments = [
      ['picture' => 'default',
      'pseudo' => $pseudos[array_rand($pseudos)],
      'date' => '5 jours',
      'comment' => "	En fait, ce soir moi j'ai vu une matinée coquine dans un magasin de bonbons gélifiés avec beaucoup de couleurs, du rose, 
      du fuchsia, des tonnes de mauve, aussi."],
  
      ['picture' => 'default',
      'pseudo' => $pseudos[array_rand($pseudos)],
      'date' => '6 jours',
      'comment' => "Quand j'étais petit, j'avais un vélo et le jour où j'ai posé une rustine pour la première fois, j'ai eu l'impression 
      que la chambre à air était pleine du souffle divin et c'est exactement ce qui s'est passé en fait, juste là."],
  
      ['picture' => 'default',
      'pseudo' => $pseudos[array_rand($pseudos)],
      'date' => '6 jours',
      'comment' => "Pendant 3 minutes j'avais l'impression que Dieu, ce grand horloger que Nietszche méprisait tant, avait décidé de faire 
      une happy hour, et c'est complètement ce que tu nous as offert, ouais, une sorte d'extase mystique post-moderne et fiévreuse."],
  
      ['picture' => 'default',
      'pseudo' => $pseudos[array_rand($pseudos)],
      'date' => '8 jours',
      'comment' => "Article fort amusant et  ironique. Bien que j'aurais apprécié unne connclusion exempte de pirouette"],
  
      ['picture' => 'default',
      'pseudo' => $pseudos[array_rand($pseudos)],
      'date' => '10 jours',
      'comment' => "Euh excuse-moi, mais tu as manifestement des appuis de réseau puisque avec le fric que Macron paie pour les joueurs 
      de Farmville (tu vois de quoi je parle, quand même ?) , les politiques pensent que les anarchistes sont peut-être les seuls 
      réellement concernés . Il faut quand même imaginer le pire scénario, j'ai du mal à voir le rapport avec les chiffres qui 
      te font dénoncer les inégalités ! Voilà ce qui arrive lorque l'on mord la main qui vous nourrit. "],
  ];

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