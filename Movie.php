<?php

class Movie
{
    public $name;
    public $lenght = 0;
    public $year;
    public $genre;
    public $img;
    public $lenguage;

    public function __construct(string $name, int $lenght, int $year, string $genre, string $img, string $lenguage)
    {
        $this->name = $name;
        $this->lenght = $lenght;
        $this->year = $year;
        $this->genre = $genre;
        $this->img = $img;
        $this->lenguage = $lenguage;        
        $this->lunghezza($lenght, '%02d ore e %02d minuti');
        $this->lingua($lenguage);
    }

    //trasformare minuti in ore
    public function lunghezza($lenght, $format = '%02d:%02d')
    {
        if ($lenght < 1) {
            return;
        }
        $hours = floor($lenght / 60);
        $minutes = ($lenght % 60);
        return sprintf($format, $hours, $minutes);
    }

    public function lingua($lenguage)
    {
        if ($lenguage == "Italiana") {
            return    "img/ita.png";
        } elseif ($lenguage == "Inglese") {
            return    "img/inglese.png";
        } 
        
    }
}