<?php

require_once './models/Movies.php';
$genre1 = new Genre('Sci-Fi');
$genre2 = new Genre('Distopic');
$movie1 = new Movie('Inception', 2010);
$movie2 = new Movie('Matrix', 1999,"action");
$movie1->setGenre($genre1);
$movie2->setGenre($genre2);
echo $movie1->getInfo();
echo '<br>';
echo $movie2->getInfo();
?>  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <title>PHP Classe Movie</title>
</head>
<body>

</body>
</html>