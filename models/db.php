<?php

require_once __DIR__ . '/../index.php';
require_once __DIR__ . '/genre.php';

$terminator = new Movie('The Terminator', 1984, new Genre('techno-thriller', 'cyberpunk'), 108);
$star_wars = new Movie('Star Wars', 1977, new Genre('space opera', 'epic'), 121);
$lebowski = new Movie('The Big Lebowski', 1998, new Genre('crime', 'comedy'), 117);
$matrix = new Movie('The Matrix', 1999, new Genre('cyberpunk', 'action'), 136);
$inception = new Movie('Inception', 2010, new Genre('science fiction', 'action'), 148);
$forrest_gump = new Movie('Forrest Gump', 1994, new Genre('drama', 'romance'), 142);
$pulp_fiction = new Movie('Pulp Fiction', 1994, new Genre('crime', 'drama'), 154);


$movies = [$terminator, $star_wars, $lebowski, $matrix, $inception, $forrest_gump, $pulp_fiction];
