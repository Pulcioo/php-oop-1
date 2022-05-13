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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>
    <h2><?php echo $movie_1->getTitle() ?></h2>
    <ul>
        <li>Titolo: <?php echo $movie_1->getTitle() ?></li>
        <li>Diretto da: <?php echo $movie_1->getDirector() ?></li>
        <li>Data di uscita: <?php echo $movie_1->getRelease() ?></li>
    </ul>

    <h2><?php echo $movie_2->getTitle() ?></h2>
    <ul>
        <li>Titolo: <?php echo $movie_2->getTitle() ?></li>
        <li>Diretto da: <?php echo $movie_2->getDirector() ?></li>
        <li>Data di uscita: <?php echo $movie_2->getRelease() ?></li>
    </ul>

    <h2><?php echo $movie_3->getTitle() ?></h2>
    <ul>
        <li>Titolo: <?php echo $movie_3->getTitle() ?></li>
        <li>Diretto da: <?php echo $movie_3->getDirector() ?></li>
        <li>Data di uscita: <?php echo $movie_3->getRelease() ?></li>
    </ul>

</body>
</html>
