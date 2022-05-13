<?php
    // phpinfo()

    /*
        create un file index.php in cui:
        - è definita una classe ‘Movie’
        => all'interno della classe sono dichiarate delle variabili d'istanza
        => all'interno della classe è definito un costruttore
        => all'interno della classe è definito almeno un metodo
        - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
    */

    class Movie{

        // variabili
        public $title;
        public $director;
        public $release;

        // costruttore
        function __construct($title, $director, $release) {
            $this->title = $title;
            $this->director = $director;
            $this->release = $release;
        }

        // metodi
        public function getTitle(){
            return $this->title;
        }

        public function getDirector(){
            return $this->director;
        }

        public function getRelease(){
            return $this->release;
        }
    }

    $movie_1 = new Movie('Fight Club', 'David Fincher', '29-10-1999');
    $movie_2 = new Movie('Il buono, il brutto, il cattivo', 'Sergio Leone', '23-12-1966');
    $movie_3 = new Movie('Pulp Fiction', 'Quentin Tarantino', '28-10-1994');

?>
