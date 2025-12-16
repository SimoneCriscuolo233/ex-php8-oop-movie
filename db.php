<?php
require_once __DIR__ . '/models/Genre.php';
require_once __DIR__ . '/models/Movie.php';

$genre1 = new Genre('Sci-Fi');
$genre2 = new Genre('Distopic');
$genre3 = new Genre('Action');
$genre4 = new Genre('Drama');

$movies = [
    new Movie('Inception', 2010, [$genre1, $genre3]),
    new Movie('Matrix', 1999, [$genre1, $genre2, $genre3]),
    new Movie('Titanic', 1997, [$genre4])
];
?>