<?php 

// dichiaro la classe Movie
class Movie {

  //che ha le seguenti proprietà
  public $title;
  public $year;
  public $director;
  public $writer;
  public $cast;
  private $storyline; // private obbliga ad utilizzare una funzione per accedere alla proprietà (linee 26 e 35)
  static $counter = 0; // 0 come valore di default
  
  /**
   * constructor
   *
   * @param [type] $_title
   * @param [type] $_year
   */
  public function __construct($_title, $_year)
  {
    $this->title = $_title;
    $this->year = $_year;
    self::$counter++; // incremento il contatore ogni volta che agggiungo un'istanza 
  }

  /////////////////////////
  //******  SETTERS ******/
  /////////////////////////
  
  // funzione che mi permette di avere accesso ad una proprietà private
  /**
   * setStoryline
   *
   * @param [type] $_storyline
   * @return void
   */
  public function setStoryline($_storyline){
    $this->storyline = $_storyline;
  }

   /////////////////////////
   //******  GETTERS ******/
   /////////////////////////

  // funzione che mi permette di stampare il valore di una proprietà private
  /**
   * getStoryline
   *
   * @return void
   */
  public function getStoryline(){
    return $this->storyline;
  }

  // funzione che restituisce il titolo e l'(anno) del film
  /**
   * getInfo
   *
   * @return void
   */
  public function getInfo(){ 
    return $this->title .' ('. $this->year . ')';
  }
}
