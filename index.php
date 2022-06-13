<!--
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php
class Movie {
    public $title;
    public $author;
    public $language;
    public $age;
    public $averageVote;
    public $foradult;

    function __construct($_title, $_author, $_language, $_age, $_averageVote = [], $_foradult = '') {
        $this->title = $_title;
        $this->author = $_author;
        $this->language = $_language;
        $this->age = $_age;
        $this->averageVote = $_averageVote;
        $this->foradult = $_foradult;
    }

    public function getTitleAndAuthor()
    {
        return '<b>' . $this->title . '</b>' . " " . "by" . " " . $this->author . ', ' .
        '<br>' . 'language' . ': ' . $this->language . '<br>' . $this->foradult;
        ;
    }

    public function insertVote($_vote) {
        $this->averageVote[] = $_vote;
    }

    public function getAverageVote() {
        $sumVote = 0;
        foreach($this->averageVote as $vote) {
            $sumVote += $vote;
        }
        $avgVote = $sumVote / count($this->averageVote);
        return $avgVote;
    }


    public function isForAdult($_age) {
        if($_age < 18) {
            $this->foradult = 'no';
        } else {
            $this->foradult = 'yes';
        }
    }
}

//nuovi film da aggiungere
$gladiatore = new Movie('Il Gladiatore', 'Ridley Scott', 'english', 20);
$gladiatore->insertVote(8);
$gladiatore-> insertVote(2);
$gladiatore->isForAdult(20);

$adaptation = new Movie('Adaptation', 'Spike Jonze', 'english', 2);
$adaptation->insertVote(3);
$adaptation -> insertVote(2);

$aladdin = new Movie('Aladdin', 'Disney Pixar', 'english', 2);
$aladdin -> insertVote(10);
$aladdin -> insertVote(10);

$becomingjane = new Movie('Becoming Jane', 'Jane Auster', 'english', 2);
$becomingjane -> insertVote(4);
$becomingjane -> insertVote(5);

$beforenight = new Movie('Before Night Falls ', 'Reinaldo Kenas', 'english', 2);
$beforenight -> insertVote(7);
$beforenight -> insertVote(2);

$brightstar = new Movie('Bright Star', 'John Keats', 'english', 2);
$brightstar -> insertVote(3);
$brightstar -> insertVote(1);

$thisboys = new Movie('This boys Life', 'Tobias Wollf', 'german', 2);
$thisboys -> insertVote(9);
$thisboys -> insertVote(3);

//creare un array dove pushiamo i movies

$movies = [];
$movies[] = $gladiatore;
$movies[] = $adaptation;
$movies[] = $aladdin;
$movies[] = $becomingjane;
$movies[] = $beforenight;
$movies[] = $brightstar;
$movies[] = $thisboys;
?>

<ul>
    <?php foreach ($movies as $item) {
        echo '<li>' . $item->getTitleAndAuthor() . '</li>' . 
        '<p>' . 'Average Vote: ' . $item->getAverageVote() . '</p>';
        }
    ?>
</ul>