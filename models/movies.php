<?php

    class Movies
    {
        // istanze
        public $title;
        public $release;
        public $genres;

        function __construct($_title,$_genres)
        {
            $this->title = $_title;
            $this->genres = $_genres;
        }

        public function pushDetails()
        {
            echo " Il titolo del film è:" . $this->title . "<br>" ;
            echo "I generi sono:" . implode('','', $this->genres) . "<br>" ;
            echo "Anno di rilascio:" . this->year . "<br>" ;
        }
    }