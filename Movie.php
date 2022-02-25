<?php

    class Movie{
        public $title;
        public $year;
        public $genre;
        public $rate;
        function __construct($__title,$__year,$__genre,$__rate)
        {
            $this->title=$__title;
            $this->year=$__year;
            $this->genre=$__genre;
            $this->rate=$__rate;
        }
        public function printDate($title,$year,$genre,$rate){
          return "<h1>$title</h1>
            <h3>$year</h3>
            <p>$genre</p>
            <p>$rate</p>";
        }
    }
    $film1= new Movie("ritorno al futuro", 1987, "fantasy","4/5");
    $film2=new Movie("guerre stellari",1978,"avventura", "5/5");
    $arrayFilm=[];
    $arrayFilm[]= $film1->printDate($film1->title,$film1->year,$film1->genre,$film1->rate);
    $arrayFilm[]= $film2->printDate($film2->title,$film2->year,$film2->genre,$film2->rate);
?>