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



?>
<main>


<div class="movie">

   <h4><?php echo $codiceDaBrivido->getTitle() ?></h4>
   <p><?php echo $codiceDaBrivido->getDescription() ?></p>
   <p>Lingua: <?php echo $codiceDaBrivido->getLanguage() ?></p>
   <p>Solo adulti:<?php echo $codiceDaBrivido->getAdultsOnly() ?></p>
   <p>Prima uscita: <?php echo $codiceDaBrivido->getReleaseDate() ?></p>
   <p>Durata: <?php echo $codiceDaBrivido->getRunTime() ?></p>
   <p>Voti ricevuti:<?php echo $codiceDaBrivido->getVoteCount() ?></p>
   <p>Voto film: <?php echo $codiceDaBrivido->getVoteAverage() ?></p>
</div>
<div class="movie">

   <h4><?php echo $dudiFilm->getTitle() ?></h4>
   <p><?php echo $dudiFilm->getDescription() ?></p>
   <p>Lingua: <?php echo $dudiFilm->getLanguage() ?></p>
   <p>Solo adulti:<?php echo $dudiFilm->getAdultsOnly() ?></p>
   <p>Prima uscita: <?php echo $dudiFilm->getReleaseDate() ?></p>
   <p>Durata: <?php echo $dudiFilm->getRunTime() ?></p>
   <p>Voti ricevuti:<?php echo $dudiFilm->getVoteCount() ?></p>
   <p>Voto film: <?php echo $dudiFilm->getVoteAverage() ?></p>
</div>


</main>

<?php

require_once __DIR__. './partial/footer.php'
?>
