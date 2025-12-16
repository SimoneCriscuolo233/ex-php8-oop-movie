<?php
require_once __DIR__ . '/Genre.php';

class Movie {
    public string $title;
    public int $year;
    public array $genres; 
   
    public function __construct(string $title, int $year, array $genres = []) {
        $this->title = $title;
        $this->year = $year;
        $this->genres = $genres;
    }

    public function getInfo(){
        $genreNames = [];
        foreach($this->genres as $g){
            $genreNames[] = $g->name;
        }
        $genreString = implode(", ", $genreNames);

        return "{$this->title} ({$this->year}) - Generi: {$genreString}";
    }
}