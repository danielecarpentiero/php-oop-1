<?php

require_once __DIR__ . '/models/db.php';

class Movie
{
    public string $title;
    public int $release_year;
    public array $genres;
    public int $runtime;

    function __construct($_title, $_release_year, Genre $_genre, $_runtime)
    {
        $this->title = $_title;
        $this->release_year = $_release_year;
        $this->genres = [$_genre];
        $this->runtime = $_runtime;
    }

    public function isSciFi($_genre)
    {
        if ($_genre == 'cyberpunk') {
            $this->genres = 'science fiction';
        } elseif ($_genre == 'post-apocalyptse') {
            $this->genres = 'science fiction';
        } elseif ($_genre == 'space opera') {
            $this->genres = 'science fiction';
        }
    }

    public function getGenre()
    {
        return $this->genres;
    }
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHP OOP 1</title>
</head>

<body>
    <div class="container mt-4">
        <h1 class="mb-4">Movie List</h1>
        <?php foreach ($movies as $movie) : ?>
            <div>
                <h2><?php echo $movie->title; ?></h2>
                <p>Release Year: <?php echo $movie->release_year; ?></p>
                <p>Genres: <?php echo $movie->getGenre(); ?></p>
                <p>Runtime: <?php echo $movie->runtime; ?> minutes</p>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>