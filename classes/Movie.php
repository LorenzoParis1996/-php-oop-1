<?php 

class Movie {
    public $name;
    public $description;
    public $genre;
    public $year;


    public function __construct($name, $description, $genre, $year) {
        $this->name = $name;
        $this->description = $description;
        $this->genre = $genre;
        $this->year = $year; 
    } 
}

?>