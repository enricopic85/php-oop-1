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
        public function printDate(){
          return "<h1>$this->title</h1>
            <h3>$this->year</h3>
            <p>$this->genre</p>
            <p>$this->rate</p>";
        }
    }
    $film1= new Movie("ritorno al futuro", 1987, "fantasy","4/5");
    $film2=new Movie("guerre stellari",1978,"avventura", "5/5");
    $arrayFilm=[];
    $arrayFilm[]= $film1->printDate();
    $arrayFilm[]= $film2->printDate();
?>