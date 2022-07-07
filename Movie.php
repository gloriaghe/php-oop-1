<?php

class Movie
{
	public $name;
	public $lenght;
	public $year;
    public $genre;
    
    public $img;

	public function __construct(string $name, int $lenght, int $year, string $genre, string $img)
	{
		$this->name = $name;
		$this->lenght = $lenght;
        $this->year = $year;
        $this->genre = $genre;
        $this->img = $img;
        $this->genere();
	}


	public function genere() {
	
	}
}