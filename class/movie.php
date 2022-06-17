<?php 

/*
- è definita una classe ‘Movie’
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
La classe può essere definita internamente al file index.php o essere inclusa (soluzione preferibile)
*/

class Movie{
   private $title;
   private $original_title;
   private $description;
   private $language;
   private $original_language;
   private $genres;
   private $actors;
   private $adults;
   private $production_companies;
   private $release_date;
   private $runtime;
   private $vote_count;
   private $vote_average;

   //definisco all'interno del costruttore quali variabili saranno obbligatorie
   public function __construct(
                        $_title, 
                        $_description,
                        $_language, $_adults, 
                        $_release_date, 
                        $_runtime, 
                        $_vote_count, 
                        $_vote_average
                        ){
      $this ->title = $_title;
      $this ->description = $_description;
      $this ->language = $_language;
      $this ->adults = $_adults;
      $this ->release_date = $_release_date;
      $this ->runtime = $_runtime;
      $this ->vote_count = $_vote_count;
      $this ->vote_average = $_vote_average;

   }

   /* GETTER*/
   public function getTitle(){
      return $this->title;
   }

   public function getDescription(){
      return $this->description;
   }

   public function getLanguage(){
      return $this->language;
   }

   public function getAdultsOnly(){
      return $this->adults;
   }

   public function getReleaseDate(){
      return $this->release_date;
   }

   public function getRunTime(){
      return $this->runtime;
   }

   public function getVoteCount(){
      return $this->vote_count;
   }

   public function getVoteAverage(){
      return $this->vote_average;
   }
}




?>