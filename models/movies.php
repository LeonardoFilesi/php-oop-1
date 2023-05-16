<?php

include_once __DIR__ . '/cinema_db.php';
    class Movies
    {
        // istanze
        public $title;
        public $release;
        public $genres;

        function __construct($_title,$_genres,$_release)
        {
            $this->title = $_title;
            $this->genres = $_genres;
            $this->release = $_release;
        }


        public function pushDetails()
        {
            $details = "Il titolo del film è: " . $this->title . "<br>";
            $details .= "I generi sono: " . implode(', ', $this->genres) . "<br>";
            $details .= "Anno di rilascio: " . $this->release . "<br>";
            return $details;
        }
        
    };