<?php
require_once __DIR__ . '/db.php';
?>  
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>PHP Classe Movie</title>
</head>
<body class="bg-dark text-white">

    <div class="container mt-5">
        <h1 class="text-center mb-5">Movies</h1>

        <div class="row">
            <?php foreach($movies as $movie): ?>
                
                <div class="col-4 mb-3">
                    <div class="card text-dark h-100">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $movie->title; ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted">Anno: <?php echo $movie->year; ?></h6>
                            <p class="card-text">
                                <strong>Generi:</strong>
                                <ul>
                                    <?php foreach($movie->genres as $genre): ?>
                                        <li><?php echo $genre->name; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </p>
                        </div>
                        <div class="card-footer text-muted" style="font-size: 0.8rem;">
                            ID Univoco: <?php echo $movie->getId(); ?>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </div>

</body>
</html>