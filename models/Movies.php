<?php
require_once './models/Genre.php';

class Movie {
    public string $title;
    public int $year;
    public ?Genre $genre = null;

    public function __construct(string $title, int $year) {
        $this->title = $title;
        $this->year = $year;
    }
    public function setGenre(Genre $genre){
        $this->genre = $genre;
    }

    public function getInfo(){
        return "{$this->title} ({$this->year}) - {$this->genre->name}";
    }
}

?>