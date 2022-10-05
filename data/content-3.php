<?php
    include '_data.php';

    extract($dataArticles[$id-1]);

    //équivalent de :
    // foreach ($test as $key => $valeur) {
    //     $$key = $valeur;
    // }
ob_start();
?>

<p>Rester à jour dans l'écosystème Javascript n'est pas pour les faibles de cœur.</p>
<p>Il est difficile pour ceux qui entrent dans l'industrie de suivre ce qui se passe parmi les nouvelles bibliothèques, cadres, concepts et opinions fortes.</p>
<p>C'est un bon rappel que si vous êtes sur le point de saigner, c'est généralement vous qui saignez. Choisir par défaut des technologies « ennuyeuses », celles que vous connaissez bien, et être un adopteur tardif est souvent un excellent choix.</p>
<p>Cela dit, cet article nous permettra de nous tenir au courant de la fine pointe des frameworks de l'écosystème Javascript.</p>
<p>Nous donnerons un sens au paysage actuel en examinant les problèmes passés lors de la création d'applications Web à grande échelle.</p>
<p>Plutôt que de nous concentrer sur la prolifération des solutions, nous plongerons dans les problèmes sous-jacents. Où chaque cadre donne des réponses différentes et fait des compromis différents.</p>
<p>À la fin, nous aurons un modèle de haut niveau de frameworks populaires comme React, Svelte, Vue, Solid, Astro, Marko, Fresh, Next, Remix, Qwik, et les "méta frameworks" s'intègrent dans le paysage d'aujourd'hui.</p>
<p>Il est utile de comprendre le passé pour donner un sens au présent. Nous commencerons par un voyage dans le passé pour voir le chemin derrière nous.</p>
<p>Cette histoire a déjà été racontée. Cette fois, nous nous concentrerons sur les problèmes des grands projets qui ont suscité des approches et des modes de pensée alternatifs.</p>

<h2>Une histoire à la main des pages Web</h2>

<p>Le Web a commencé par des documents statiques liés entre eux. Quelqu'un pourrait préparer un document à l'avance et le mettre sur un ordinateur.</p>
<p>Ce qui était cool maintenant, c'était que quelqu'un d'autre pouvait y accéder - sans avoir à déplacer son corps physique vers le même emplacement géographique. Génial.</p>
<p>À un moment donné, nous avons pensé que ce serait cool de rendre ces documents dynamiques.</p>
<p>Nous avons des technologies comme CGI qui nous ont permis de servir différents contenus en fonction de la demande.</p>
<p>Nous avons alors eu recours à des langages expressifs comme Perl pour écrire ces scripts. Influencer le premier langage explicitement construit pour le web - PHP .</p>
<p>La belle innovation avec PHP était de connecter directement HTML à ce code backend. Il a facilité la création par programmation de documents intégrant des valeurs dynamiques.</p>

<h2>La boite de Pandore s'est ouverte</h2>

<p>Ces pages dynamiques ont été un succès. Nous pouvions désormais personnaliser facilement ce que nous envoyions aux utilisateurs, y compris les cookies qui activaient les sessions.</p>
<p>Les frameworks de modèles basés sur serveur ont émergé dans les écosystèmes linguistiques qui parlaient désormais aux bases de données. Ces cadres ont facilité le démarrage avec des pages statiques et l'évolution vers des pages dynamiques.</p>
<p>Le Web évoluait rapidement et nous voulions des expériences plus interactives. Pour cela, nous avons utilisé des plugins de navigateur comme Flash . Pour tout le reste, nous « saupoudrons » des fragments Javascript sur le HTML servi depuis le backend.</p>
<p>Des outils comme jQueryet Prototypeont surgi et lissé sur les aspérités des API Web et les bizarreries entre les navigateurs concurrents.</p>
<p>Avance rapide et agitant la main. Les entreprises technologiques devenaient de plus en plus grandes et, à mesure que les projets et les équipes grandissaient, il était courant que davantage de logique métier se glisse dans ces modèles.</p>
<p>Le code du serveur était en cours d'écriture pour masser les données dans le langage de modèle du serveur. Les modèles évoluaient souvent en un méli-mélo de logique métier qui accédait à des variables globales. La sécurité devenait une préoccupation, avec des attaques comme l'injection SQL monnaie courante.</p>
<p>Finalement, nous avons eu "Ajax : une nouvelle approche des applications Web" .</p>
<p>La nouvelle chose que vous pouviez faire maintenant était de mettre à jour la page de manière asynchrone, au lieu d'une actualisation synchrone.</p>
<p>Ce modèle a été popularisé par les premières grandes applications côté client comme Google maps et Google docs.</p>
<p>Nous commencions à voir la puissance de la distribution du Web pour les logiciels de type bureau. C'était un pas en avant significatif par rapport à l'achat de logiciels sur CD dans les magasins.</p>

<h2>Javascript devient grand</h2>
<p>Lorsque le nœud est apparu, la nouvelle chose qu'il a permise était d'écrire votre backend dans le même langage que le frontend. Tous les développeurs de modèles async-first étaient familiers avec.</p>
<p>C'était (et c'est) convaincant. Avec l'arrivée de plus en plus d'entreprises en ligne, l'avantage concurrentiel était de pouvoir expédier et itérer rapidement.</p>
<p>L'écosystème de Node a mis l'accent sur la réutilisation de petits packages à usage unique que vous pouvez récupérer sur l'étagère pour faire avancer les choses.</p>


<h2>La séparation du frontend et du backend</h2>

<p>Notre appétit pour un Web qui pourrait rivaliser avec les ordinateurs de bureau et les mobiles a continué de croître. Nous avions maintenant une collection de bibliothèques et d'utilitaires "widget" réutilisables comme jQuery UI, Dojo, Mootools, ExtJsetc.YUI</p>
<p>Nous devenions lourds sur ces arrosages et en faisions plus dans le frontend. Cela entraînait souvent la duplication de modèles sur le frontend et le backend.</p>
<p>Des frameworks comme Backboneet Knockoutet bien d'autres sont apparus. Ils ont ajouté la séparation des préoccupations à l'interface via le MVC, MVVMet al. architectures, et étaient compatibles avec tous les widgets et plugins jQuery que nous avions collectés.</p>
<p>L'ajout de structure a aidé à mettre à l'échelle tout ce code frontal. Et des modèles de déplacement accélérés depuis le backend.</p>
<p>Nous étions encore en train d'écrire des manipulations DOM affinées pour mettre à jour la page et garder les composants synchronisés. Ce problème n'était pas trivial et les bogues liés à la synchronisation des données étaient courants.</p>
<p>Angular, soutenu par Google, est entré en scène. Il a favorisé une augmentation de la productivité en rendant HTML dynamique. Il est venu avec une liaison de données bidirectionnelle, avec un système de réactivité inspiré des feuilles de calcul.</p>
<p>Ces liaisons déclaratives bidirectionnelles ont supprimé une grande partie du passe-partout dans la mise à jour impérative des choses. C'était agréable et nous a rendus plus productifs.</p>
<p>Au fur et à mesure que les choses évoluaient, il devenait difficile de suivre ce qui changeait et entraînait souvent de mauvaises performances. Là où des cycles de mises à jour se produiraient, occupant le fil principal (aujourd'hui, les bibliothèques comme Svelte conservent des liaisons bidirectionnelles tout en atténuant leurs inconvénients).</p>
<p>Outre l'essor du mobile, ces frameworks stimulant la productivité ont accéléré la scission du backend frontend.</p>
<p>Cela a ouvert la voie à l'exploration de différentes architectures mettant l'accent sur ce découplage.</p>
<p>C'était une partie importante de la philosophie JAMstack , qui met l'accent sur la pré-cuisson du HTML à l'avance et sur son service à partir d'un CDN .</p>
<p>À l'époque, c'était un retour au service de documents statiques.</p>
<p>Mais maintenant, nous avions un flux de travail basé sur git, une infrastructure CDN robuste qui ne reposait pas sur un serveur centralisé éloigné et des interfaces découplées parlant à des API indépendantes. Le chargement d'actifs statiques sur un CDN avait un coût opérationnel bien inférieur à celui de l'exploitation d'un serveur.</p>
<p>Aujourd'hui, des outils tels que Gatsby, Nextet bien d'autres tirent parti de ces idées.</p>


<?php

$body = ob_get_contents();
ob_end_clean();