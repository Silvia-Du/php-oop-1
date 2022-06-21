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
   private $adults;
   private $release_date;
   private $runtime;
   private $vote_count;
   

   //definisco all'interno del costruttore quali variabili saranno obbligatorie
   public function __construct(
                        $_title, 
                        $_description,
                        $_language, 
                        $_adults, 
                        $_release_date, 
                        $_runtime, 
                        $_vote_count
                        ){
      $this ->title = $_title;
      $this ->description = $_description;
      $this ->language = $_language;
      $this ->adults = $_adults;
      $this ->release_date = $_release_date;
      $this ->runtime = $_runtime;
      $this ->vote_count = $_vote_count;
      

   }

   /* SETTER*/
   public function setTitle($_title){
      $this->title = $_title;
   }

   public function setOriginalTitle($_original_title){
      $this->original_title = $_original_title;
   }

   public function setDescription($_description){
      $this->description = $_description;
   }

   public function setLanguage($_language){
      $this->language = $_language;
   }

   public function setOriginalLang($_original_language){
      $this->original_language = $_original_language;
   }

   public function setAdultsOnly($_adults){
      $this->adults = $_adults;
   }

   public function setReleaseDate($_release_date){
      $this->release_date = $_release_date;
   }

   public function setRunTime($_runtime){
      $this->runtime = $_runtime;
   }

   public function setVoteCount($_vote_count){
      $this->vote_count = $_vote_count;
   }

   /* GETTER*/
   public function getTitle(){
      return $this->title;
   }

   public function getOriginalTitle(){
      return $this->original_title;
   }

   public function getDescription(){
      return $this->description;
   }

   public function getLanguage(){
      return $this->language;
   }

   public function getOriginalLang(){
      $this->original_language;
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

}




?>