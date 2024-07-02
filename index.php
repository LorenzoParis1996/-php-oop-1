<?php 

require_once __DIR__ . "/classes/Movie.php";

$movie1 = new Movie ("Jurassic Park", "A madman brings back dinosaurs for entertainment", "Sci-Fi", "1993");

$movie2 = new Movie ("The Lost World: Jurassic Park", "Same madman hires people to bring dinosaurs back to a city park in San Diego", "Sci-Fi", "1997");

$movie3 = new Movie ("Jurassic Park III", "Some people going back to an old island, where dinosaurs still roam, to prove a theory and also save a kid who got lost", "Sci-Fi", "2001");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Movies</h3>
    <ul>
        <li>Name: <?php echo $movie1->name; ?></li>
        <li>About: <?php echo $movie1->description; ?></li>
        <li>Genre: <?php echo $movie1->genre; ?></li>
        <li>Release Year: <?php echo $movie1->year; ?></li>
    </ul>
    <ul>
        <li>Name: <?php echo $movie2->name; ?></li>
        <li>About: <?php echo $movie2->description; ?></li>
        <li>Genre: <?php echo $movie2->genre; ?></li>
        <li>Release Year: <?php echo $movie2->year; ?></li>
    </ul>
    <ul>
        <li>Name: <?php echo $movie3->name; ?></li>
        <li>About: <?php echo $movie3->description; ?></li>
        <li>Genre: <?php echo $movie3->genre; ?></li>
        <li>Release Year: <?php echo $movie3->year; ?></li>
    </ul>
</body>
</html>


