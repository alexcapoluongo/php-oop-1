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
    public $foradult;
    // public $averageVote;

    function __construct($_title, $_author, $_language, $_age, $_foradult = 0) {
        $this->title = $_title;
        $this->author = $_author;
        $this->language = $_language;
        $this->age = $_age;
    }

    public function getTitleAndAuthor()
    {
        return '<b>' . $this->title . '</b>' . " " . "by" . " " . $this->author . ', ' . 'language' . ' ' . $this->language ;
    }

    // public function isForAdult($_age) {
    //     if($_age < 18) {
    //         $_foradult = 'no';
    //     } else {
    //         $_foradult = 'yes';
    //     }
    // }
}

//nuovi film da aggiungere
$gladiatore = new Movie('Il Gladiatore', 'Ridley Scott', 'english', 20,);
$adaptation = new Movie('Adaptation', 'Spike Jonze', 'english', 2,);
$aladdin = new Movie('Aladdin', 'Disney Pixar', 'english', 2,);
$becomingjane = new Movie('Becoming Jane', 'Jane Auster', 'english', 2,);
$beforenight = new Movie('Before Night Falls ', 'Reinaldo Kenas', 'english', 2,);
$brightstar = new Movie('Bright Star', 'John Keats', 'english', 2,);
$thisboys = new Movie('This boys Life', 'Tobias Wollf', 'german', 2,);

var_dump($gladiatore);
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
        echo '<li>' . $item->getTitleAndAuthor() . '</li>';
        }
    ?>
</ul>