<?php 

/*
- è definita una classe ‘Movie’
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
La classe può essere definita internamente al file index.php o essere inclusa (soluzione preferibile)
*/
require_once __DIR__. './partial/head.php';
require_once __DIR__. './partial/header.php';
require_once __DIR__. './class/Movie.php';

$movies = [];

$codiceDaBrivido = new Movie(
   'Un codice da brivido', 
   'Nel film Un\' esperto programmatore, che si dedica all\'insegnamento. In una giornata di lavoro come tante altre, uno studente apre un ticket per un problema con un compito; L\'insegnante non sa ancora quanto sarà brutto il codice e che gli farò venire gli incubi. Come se non bastasse prima di uscire dall\'aula zoom chiama JavaScript , Java, causando la morte di un programmatore nel mondo', 
   'Ita', true, 
   '2022-05-12', 
   139, 
   1202, 
   910
);

$dudiFilm = new Movie(
   'Una giornata bellissima', 
   'Una giornata iniziata come tante altre, diventa speciale quando Dudi, una ragazza semplice ma con molta fantasia, trova per terra una strana moneta con il simbolo di un simbolo che le ricorda qualcosa: l\'insegna di uno negozio in centro. Incuriosita passerà nel negozio da cui partirà una meravigiosa avventura ', 
   'Ita', false, 
   '2022-01-12', 
   139, 
   1052, 
   9.5
);

$movies []= $codiceDaBrivido;
$movies []= $dudiFilm;


?>
<main class="debug">

   <div class="container">
      <h1>Movies by Dudi</h1>


      <?php foreach($movies as $movie): ?>
         <div class="movie debug">

            <h3><?php echo $movie->getTitle() ?></h3>
   
            <h4><?php echo $movie->getOverview() ?></h4>
   
            <p>Lingua: <?php echo $movie->getLanguage() ?></p>
            <p>Solo adulti:<?php echo $movie->getAdultsOnly() ?></p>
            <p>Voti ricevuti:<?php echo $movie->getVoteCount() ?></p>
   
         </div>
      <?php endforeach; ?>

   </div>
   
</main>

<?php

require_once __DIR__. './partial/footer.php'
?>
