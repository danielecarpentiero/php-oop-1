<?php

class Movie
{
    public string $title;
    public int $release_date;
    public string $genre;
    public int $runtime;

    function __construct($_title, $_release_date, Genre $_genre, $_runtime)
    {
        $this->title = $_title;
        $this->release_date = $_release_date;
        $this->runtime = $_runtime;
    }

    public function isSciFi($_genre)
    {
        if ($_genre == 'cyberpunk') {
            $this->genre = 'science fiction';
        }
    }
};
